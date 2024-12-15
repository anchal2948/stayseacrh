@extends('host.layouts.app')

@section('content')
<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>About Us list</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">About Us</li>
                        <li class="breadcrumb-item active">About Us list</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <button class="btn btn-success btn-icon float-right" type="button"><i class="zmdi zmdi-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                        <div class="table-responsive">
                            <table class="table table-hover c_table">
                                <thead>
                                    <tr>
                                        <th>S no.</th>
                                        <th>About Us Heading</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($aboutus as $key => $about)
	                                    <tr>
	                                        <td>{{ $aboutus->firstItem() + $key }}</td>
	                                        <td>{{ $about->heading }}</td>
                                            <!-- <td>{{ $about->description }}</td> -->
                                            <td class="description_data">{{ Str::limit($about->description,80) }} @if(strlen($about->description) > 80) <span class="view_more text-blue" style="cursor:pointer">view more</span> @endif</td>
                                            <td class="view_more_data" style="display:none">{{ $about->description }}</td>
                                            <td><img src="{{ asset('storage/'.$about->image) }}" width="80"></td>
                                            <!-- <td><i class="zmdi zmdi-delete"></i></td> -->
	                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $aboutus->links('vendor.pagination.bootstrap-5') }}
                        <!-- <ul class="pagination pagination-primary mt-4">
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection