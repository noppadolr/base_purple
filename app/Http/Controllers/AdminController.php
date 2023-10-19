<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Image;

class AdminController extends Controller
{
   public function AdminLogin(){
    return view('admin.login');

   }//end method

   public function LogoutView()
   {
    return view('admin.logout');
   }//end method

   public function AdminDashboard(){
    // $adminData = User::query()->find(Auth::user()->id);
    // dd($adminData);
    return view('admin.admin_dashboard');
   }//End method

    public function AdminProfile(){
       $adminData = User::query()->find(Auth::user()->id);
//       dd($adminData);
       return view('admin.admin_profile',compact('adminData'));
    }//End mehtod

    public function UpdateProfile(Request $request){
//       dd($request->all());

        $id = Auth::user()->id;
        $data = User::query()->find($id);
        $data->name =$request->name;
        $data->username =$request->username;
        $data->phone =$request->phone;
        $data->address =$request->address;
        $data->updated_at = Carbon::now();
        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_image/' . $data->photo));

            $filename = $id . "_" . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();
        return redirect()->route('admin.profile')->with('Profileupdated','Admin Profile Updated');
    }
}
