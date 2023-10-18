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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
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

                                    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $adminData->name }}</span></p>
                                    <p class="text-muted mb-2 font-13"><strong>User Name :</strong> <span class="ms-2">{{ $adminData->username }}</span></p>

                                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">{{ $adminData->phone }}</span></p>

                                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $adminData->email }}</span></p>

                                    <p class="text-muted mb-1 font-13"><strong>Address :</strong> <span class="ms-2">{{ $adminData->address }}</span></p>
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
                                        <form action="" method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Name</label>
                                                <input type="text" id="simpleinput" class="form-control" value="{{ $adminData->name }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Username</label>
                                                <input type="text" id="simpleinput" class="form-control" value="{{ $adminData->username }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-email" class="form-label">Email</label>
                                                <input type="email" id="example-email" name="example-email" class="form-control" value="{{ $adminData->email }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-email" class="form-label">Phone</label>
                                                <input type="email" id="example-email" name="example-email" class="form-control" value="{{ $adminData->phone }}">
                                            </div>


                                            <div class="mb-3">
                                                <label for="example-textarea" class="form-label">Address</label>
                                                <textarea class="form-control" id="example-textarea" rows="3">{{ $adminData->address }}</textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="image" class="form-label">Photo</label>
                                                <input type="file" id="image" class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <img src="{{ (!empty($adminData->photo))? url('upload/admin_image/'.$adminData->photo):url('upload/no_image.jpg') }}" class="img-fluid img-thumbnail" width="200"
                                                alt="profile-image">
                                            </div>


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






@endsection
