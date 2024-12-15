@extends('host.layouts.app')

@section('content')
<section class="content blog-page">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Blogs</h2>
                    <ul class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Aero</a></li> -->
                        <li class="breadcrumb-item"><a href="blog-dashboard.html">Blogs</a></li>
                        <li class="breadcrumb-item active">Create Blog</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
	        @if(session()->has('success'))
	            <div class="alert alert-success">
	                {{ session()->get('success') }}
	            </div>
	        @endif
            <div class="row">
                <div class="col-lg-12">
                	<form method="post" action="{{ route('blog.add') }}" enctype="multipart/form-data">
                		@csrf
	                    <div class="card">
	                        <div class="body">
	                            <div class="form-group">
	                            	<label>Blog Heading</label>
	                                <input type="text" class="form-control" placeholder="Heading" name="heading" />
	                                @if($errors->has('heading'))
	                                	<small style="color:red">{{ $errors->first('heading') }}</small>
	                                @endif
	                            </div>
	                            <div class="form-group">
	                            	<label>Blog Description</label>
	                            	<textarea class="form-control" name="description" rows="6" placeholder="Description"></textarea>
	                            	@if($errors->has('description'))
	                                	<small style="color:red">{{ $errors->first('description') }}</small>
	                                @endif
	                            </div>
	                            <div class="form-group">
	                            	<label>Blog Image</label>
	                            	<input type="file" class="form-control" name="blog_image">
	                            </div>
	                            <button type="submit" class="btn btn-primary waves-effect m-t-20">Add Blog</button>
	                        </div>
	                    </div>
	                </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection