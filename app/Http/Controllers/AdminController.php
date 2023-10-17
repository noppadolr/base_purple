<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
       return view('admin.admin_profile');
    }
}
