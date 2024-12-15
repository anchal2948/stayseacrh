@extends('host.layouts.app')

@section('content')
<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Booking list</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">Bookings</li>
                        <!-- <li class="breadcrumb-item active">Blog list</li> -->
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
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
                                        <th>User</th>
                                        <th>User's Phone</th>
                                        <th>User' Email</th>
                                        <th>Property</th>
                                        <th>CheckIn Date</th>
                                        <th>Checkout Date</th>
                                        <th>Price (Per day)</th>
                                        <th>Price (Total)</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($bookings as $key => $booking)
	                                    <tr>
	                                        <td>{{ $bookings->firstItem() + $key }}</td>
	                                        <td>{{ $booking->user->name }}</td>
                                            <td>{{ $booking->user->phone }}</td>
                                            <td>{{ $booking->user->email }}</td>
                                            <td>{{ $booking->property->title }}</td>
                                            <td>{{ $booking->checkin_date }}</td>
                                            <td>{{ $booking->checkout_date }}</td>
                                            <td>{{ $booking->price_per_day }}</td>
                                            <td>{{ $booking->total_price }}</td>
                                            <td>{{ $booking->message }}</td>
	                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $bookings->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection