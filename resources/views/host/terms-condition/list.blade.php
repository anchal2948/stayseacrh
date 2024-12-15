@extends('host.layouts.app')

@section('content')
<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Terms & Conditions</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">Terms & Conditions</li>
                        <li class="breadcrumb-item active"><!-- Blog list --></li>
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
                                        <th>Heading</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@isset($terms)
	                                    <tr>
	                                        <td>1</td>
	                                        <td>{{ $terms->heading }}</td>
	                                        <!-- <td>{{ $terms->description }}</td> -->
                                            <td class="description_data">{{ Str::limit($terms->description,80) }} @if(strlen($terms->description) > 80) <span class="view_more text-blue" style="cursor:pointer">view more</span> @endif</td>
                                            <td class="view_more_data" style="display:none">{{ $terms->description }}</td>
	                                    </tr>
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection