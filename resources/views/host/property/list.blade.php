@extends('host.layouts.app')

@section('content')
<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Property list</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">Property</li>
                        <li class="breadcrumb-item active">Property list</li>
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
                                        <th>Place Type</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Listing Type</th>
                                        <th>Bedrooms</th>
                                        <th>Guests</th>
                                        <th>Beds</th>
                                        <th>Bathrooms</th>
                                        <th>Rooms</th>
                                        <th>Size</th>
                                        <th>Measure Unit</th>
                                        <th>Affiliate Booking Link</th>
                                        <th>Amenities</th>
                                        <th>Contact</th>
                                        <th>Special Price From</th>
                                        <th>Special Price To</th>
                                        <th>Special Price</th>
                                        <th>Minimum Stay (Special)</th>
                                        <th>Nightly</th>
                                        <th>After Price Label</th>
                                        <th>Weekends</th>
                                        <th>Weekend Days</th>
                                        <th>Weekly Nights</th>
                                        <th>Monthly Nights</th>
                                        <th>Service Name</th>
                                        <th>Service Price</th>
                                        <th>Type</th>
                                        <th>Additional Guests</th>
                                        <th>Guests Allowed</th>
                                        <th>Guest Price</th>
                                        <th>Cleaning Fee</th>
                                        <th>Cleaning Fee Type</th>
                                        <th>City Fee</th>
                                        <th>City Fee Type</th>
                                        <th>Security Deposit</th>
                                        <th>Smoking Allowed</th>
                                        <th>Pets Allowed</th>
                                        <th>Party Allowed</th>
                                        <th>Children Allowed</th>
                                        <th>Fees</th>
                                        <th>Tax</th>
                                        <th>Youtube URL</th>
                                        <th>Cancellation Policy</th>
                                        <th>Daily Price</th>
                                        <th>Minimum Stay</th>
                                        <th>Location</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Property Images</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($properties as $property)
	                                    <tr>
	                                        <td>{{ ucwords(str_replace('_',' ',$property->place_type)) ?? '' }}</td>
                                            <td>{{ $property->title ?? '' }}</td>
                                            <td class="description_data">{{ Str::limit($property->description,80) }} @if(strlen($property->description) > 80) <span class="view_more text-blue" style="cursor:pointer">view more</span> @endif</td>
                                            <td class="view_more_data" style="display:none">{{ $property->description }}</td>
                                            <td>{{ ucwords(str_replace('_',' ',$property->listing_type)) ?? '' }}</td>
                                            <td>{{ $property->bedrooms ?? '' }}</td>
                                            <td>{{ $property->guests ?? '' }}</td>
                                            <td>{{ $property->beds ?? '' }}</td>
                                            <td>{{ $property->bathrooms ?? '' }}</td>
                                            <td>{{ $property->rooms ?? '' }}</td>
                                            <td>{{ $property->size ?? '' }}</td>
                                            <td>{{ $property->measure_unit ?? '' }}</td>
                                            <td>{{ $property->affiliate_booking_link ?? '' }}</td>
                                            <td>
                                                @if($property->amenities != null)
                                                    @foreach($property->amenities as $amenities)
                                                        {{ $amenities.',' }}
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>{{ $property->phone ?? '' }}</td>
                                            <td>
                                                @if($property->price_from)
                                                @foreach($property->price_from as $price_from)
                                                    {{ $price_from.',' }}
                                                @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                @if($property->price_from)
                                                @foreach($property->price_to as $price_to)
                                                    {{ $price_to.',' }}
                                                @endforeach
                                                @endif
                                            </td>

                                            <td>
                                                @if($property->price_from)
                                                @foreach($property->from_to_price as $from_to_price)
                                                    {{ $from_to_price.',' }}
                                                @endforeach
                                                @endif
                                            </td>
                                            <td>{{ $property->min_stay ?? '' }}</td>
                                            <td>{{ $property->one_night_price ?? '' }}</td>
                                            <td>{{ $property->after_price_label ?? '' }}</td>
                                            <td>{{ $property->weekend_price_per_day ?? '' }}</td>
                                            <td>{{ $property->weekend_days ?? '' }}</td>
                                            <td>{{ $property->weekly_price_per_day ?? '' }}</td>
                                            <td>{{ $property->montly_price_per_day ?? '' }}</td>
                                            <td>{{ $property->service_name ?? '' }}</td>
                                            <td>{{ $property->service_price ?? '' }}</td>
                                            <td>{{ $property->service_fee_type ?? '' }}</td>
                                            <td>{{ $property->additional_guests ?? '' }}</td>
                                            <td>{{ $property->price_per_guest ?? '' }}</td>
                                            <td>{{ $property->number_of_guests ?? '' }}</td>
                                            <td>{{ $property->cleaning_fee ?? '' }}</td>
                                            <td>{{ $property->cleaning_fee_type ?? '' }}</td>
                                            <td>{{ $property->city_fee ?? '' }}</td>
                                            <td>{{ $property->city_fee_type ?? '' }}</td>
                                            <td>{{ $property->security_deposit ?? '' }}</td>
                                            <td>{{ $property->smoking_allowed ?? '' }}</td>
                                            <td>{{ $property->pets_allowed ?? '' }}</td>
                                            <td>{{ $property->party_allowed ?? '' }}</td>
                                            <td>{{ $property->children_allowed ?? '' }}</td>
                                            <td>{{ $property->fees ?? '' }}</td>
                                            <td>{{ $property->tax ?? '' }}</td>
                                            <td>{{ $property->youtube_url ?? '' }}</td>
                                            <td>{{ $property->cancellation_policy ?? '' }}</td>
                                            <td>{{ $property->default_price ?? '' }}</td>
                                            <td>{{ $property->default_min_stay ?? '' }}</td>
                                            <td>{{ $property->location ?? '' }}</td>
                                            <td>{{ $property->latitude ?? '' }}</td>
                                            <td>{{ $property->longitude ?? '' }}</td>
                                            <td>
                                                @foreach($property->images as $image)
                                                    <img src="{{ asset('storage/'.$image) }}" height="80" width="80">
                                                @endforeach
                                            </td>
	                                    </tr>
                                    @endforeach
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

