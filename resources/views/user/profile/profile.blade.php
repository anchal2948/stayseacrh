@extends('user.layouts.app')

@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a href="profile-edit.html" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-edit"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card mcard_3">
                        <div class="body">
                            <a href="profile.html"><img src="assets/images/profile_av.jpg" class="rounded-circle shadow " alt="profile-image"></a>
                            <h4 class="m-t-10">{{ Auth::user()->name }}</h4>
                            <div class="row">
                                <div class="col-12">
                                </div>
                                <div class="col-3">
                                    <label>Email</label>
                                    <h5>{{ Auth::user()->email }}</h5>
                                </div>
                                <div class="col-3">
                                    <label>Phone</label>
                                    <h5>{{ Auth::user()->phone }}</h5>
                                </div>
                                <div class="col-3">
                                    <label>Date Of Birth</label>
                                    <h5>{{ Auth::user()->dob }}</h5>
                                </div>
                                <div class="col-3">
                                	<label>Gender</label>
                                	<h5>{{ ucfirst(Auth::user()->gender) }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection