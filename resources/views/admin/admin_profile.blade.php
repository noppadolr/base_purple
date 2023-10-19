@extends('admin.body.main')
@section('title','Admin Profile')
@section('main')

    <div class="content-page">



        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
{{--                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>--}}
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Profile</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-4 col-xl-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="{{ (!empty($adminData->photo))? url('upload/admin_image/'.$adminData->photo):url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                                     alt="profile-image">

                                <h4 class="mb-0">{{ $adminData->name }}</h4>
                                <p class="text-muted">{{ $adminData->email }}</p>


                                <div class="text-start mt-3">
                                    <h4 class="font-13 text-uppercase">About Me :</h4>
                                    <br>
                                    <br>
                                    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $adminData->name }}</span></p>
                                    <hr>

                                    <p class="text-muted mb-2 font-13"><strong>User Name :</strong> <span class="ms-2">{{ $adminData->username }}</span></p>
                                    <hr>

                                    <p class="text-muted mb-2 font-13"><strong>Phone :</strong><span class="ms-2">{{ $adminData->phone }}</span></p>
                                    <hr>

                                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $adminData->email }}</span></p>
                                    <hr>

                                    <p class="text-muted mb-2 font-13"><strong>Address :</strong> <span class="ms-2">{{ $adminData->address }}</span></p>
                                    <hr>

                                    <p class="text-muted mb-2 font-13"><strong>Joined :</strong>
                                        <span class="ms-2">
                                            @if(empty($adminData->created_at))
                                                 -
                                            @else
                                           {{$adminData->created_at->thaidate()}}

                                            @endif
                                        </span>
                                    </p>
                                    <hr>
                                    <p class="text-muted mb-2 font-13"><strong>Updated :</strong>
                                        <span class="ms-2">
                                            @if(empty($adminData->updated_at))
                                                -
                                            @else
                                                {{$adminData->updated_at->thaidate()}}

                                            @endif
                                        </span>
                                    </p>




                                </div>


                            </div>
                        </div> <!-- end card -->


                    </div> <!-- end col-->

                    <div class="col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Update Profile</h4>

                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="{{route('update.profile')}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Name</label>
                                                <input type="text" id="simpleinput" class="form-control" name="name" value="{{ $adminData->name }}">
                                            </div>

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Username</label>
                                                <input type="text" id="simpleinput" class="form-control"  name="username" value="{{ $adminData->username }}">
                                            </div>

                                            <div class="mb-2">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" id="email" name="email" class="form-control"  value="{{ $adminData->email }}">
                                            </div>

                                            <div class="mb-2">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="text" id="phone" name="phone" class="form-control" value="{{ $adminData->phone }}">
                                            </div>


                                            <div class="mb-2">
                                                <label for="address" class="form-label">Address</label>
                                                <textarea class="form-control" id="address" name="address" rows="2">{{ $adminData->address }}</textarea>
                                            </div>

                                            <div class="mb-2">
                                                <label for="image" class="form-label">Photo</label>
                                                <input type="file" id="image" name="photo" class="form-control">
                                            </div>

                                            <div style="padding-left: 90px;" class="mb-2">
                                                <img id="showImage" src="{{ (!empty($adminData->photo))? url('upload/admin_image/'.$adminData->photo):url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" width="100"
                                                alt="profile-image">
                                            </div>

                                            <button type="submit" class="btn btn-primary me-2">Update Profile</button>

                                        </form>
                                    </div> <!-- end col -->

                                </div>
                                <!-- end row-->

                            </div> <!-- end card-body -->
                        </div>

                    </div> <!-- end col -->
                </div>
                <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->

        @push('scripts')
            {{--  <script src="{{asset('jquery-3.7.1.min.js')}}"></script>  --}}
            <script type="text/javascript">

                $(document).ready(function(){
                    $('#image').change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#showImage').attr('src',e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                    });
                });

            </script>

            <script type="text/javascript">

                    @if(Session::has('Profileupdated'))
                    $(document).ready( function () {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Update Profile Successfully !",
                        showConfirmButton: !1,
                        timer: 1500
                    });
                });
                @endif



            </script>
    @endpush




@endsection
