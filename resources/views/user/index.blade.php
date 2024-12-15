@extends('user.layouts.app')
@section('content')
<section class="home_wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div>
                    <img src="assest/images/SearchStay-logo.png" class="w-100 object-fit-contain home_page_img" height="" alt="" />
                </div>
                <div class="content_home">
                    <p class="text-center px-3 pb-2">
                        Book a Search a Stay with the quality and care of a 5-star hotel. Luxury finishes, modern workstations, premium amenities, and 24/7 guest concierge.
                    </p>
                    <div class="form">
                        <form action="" style="height: 40px;">
                            <div class="row form_row">
                                <div class="col-4 col-lg-3 p-lg-2 pt-lg-0" style="border-right: 2px solid #d4dad6;">
                                    <!-- <input type="text" placeholder="Destination" class="map form-control banner_control_field border-0" /> -->
                                    <select class="form-control border-0 text-dark">
                                        <option>Destination</option>
                                        @foreach($filter_locations as $location)
                                            <option value="{{ $location->location }}">{{ $location->location }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-3 col-lg-4 p-0 p-lg-2 pt-lg-0" style="border-right: 2px solid #d4dad6;">
                                    <input type="text" class="form-control banner_control_field" id="validationCustom05" placeholder="Check In" onfocus="(this.type='date')" required="" />
                                    <!-- <input type="date" placeholder="designation" class="map form-control banner_control_field border-0"> -->
                                </div>
                                <div class="col-3 col-lg-4 p-0 p-lg-2 pt-lg-0" style="border-right: 2px solid #d4dad6;">
                                    <input type="text" class="form-control banner_control_field" id="validationCustom05" placeholder="Check Out" onfocus="(this.type='date')" required="" />
                                </div>
                                <!-- <div class="col-2" style="border-right: 2px solid #d4dad6;">
                                    <input type="text" placeholder="Guest" class="map form-control banner_control_field border-0" />
                                </div> -->
                                <div class="col-2 col-lg-1">
                                    <button class="btn_submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="listing my-5">
    <div class="container-fluid px-lg-5">
            <!-- Nav Tabs -->
         <div class="text-center d-flex justify-content-center">
                <ul class="nav nav-tabs border-0" id="customTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active nav_links" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard"
                        type="button" role="tab" aria-controls="dashboard" aria-selected="true">New York City</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav_links" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings"
                        type="button" role="tab" aria-controls="settings" aria-selected="false">The Hamptons</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav_links" id="support-tab" data-bs-toggle="tab" data-bs-target="#support"
                        type="button" role="tab" aria-controls="support" aria-selected="false">South Florida</button>
                </li>
            </ul>
         </div>
        
          <!-- Tab Content -->
            <div class="tab-content" id="customTabContent">
                <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                   <div class="row g-4 mt-4 mx-0">
        	@foreach($properties as $property)
	            <div class="col-lg-3 col-md-6 col-12">
                    <a href="{{ route('property-detail',['id' => $property->id]) }}">
    	                <div class="card cardss border-0">
    	                    <div>
    	                        <span class="badge">{{ date('F d, Y' ,strtotime($property->created_at)) }}</span>
    	                        <img src="{{ asset('storage/'.$property->images[0]) }}" class="listng_img w-100" alt="property1" />
    	                    </div>

    	                    <div class="card-body ps-1 pt-1">
    	                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
    	                            <li class="border-start px-2 card_room_text">
    	                                {{ $property->title }}
    	                            </li>
    	                        </ul>
    	                        <div class="d-flex">
    	                            <p class="bed_text">
    	                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
    	                                {{ $property->bathrooms }} Bathroom
    	                            </p>
    	                            <p class="ps-3 bed_text">
    	                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
    	                                {{ $property->bedrooms }} Bedroom
    	                            </p>
    	                        </div>
    	                    </div>
    	                </div>
                    </a>
	            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/2.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/3.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/4.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/5.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/6.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/7.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/8.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <center class="my-5">
                <a href="{{ route('properties') }}" class="btn btn_show_more">Show More</a>
            </center>
        </div>
                </div>
                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                   <div class="row g-4 mt-4 mx-0">
        	@foreach($properties as $property)
	            <div class="col-lg-3 col-md-6 col-12">
                    <a href="{{ route('property-detail',['id' => $property->id]) }}">
    	                <div class="card cardss border-0">
    	                    <div>
    	                        <span class="badge">{{ date('F d, Y' ,strtotime($property->created_at)) }}</span>
    	                        <img src="{{ asset('storage/'.$property->images[0]) }}" class="listng_img w-100" alt="property1" />
    	                    </div>

    	                    <div class="card-body ps-1 pt-1">
    	                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
    	                            <li class="border-start px-2 card_room_text">
    	                                {{ $property->title }}
    	                            </li>
    	                        </ul>
    	                        <div class="d-flex">
    	                            <p class="bed_text">
    	                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
    	                                {{ $property->bathrooms }} Bathroom
    	                            </p>
    	                            <p class="ps-3 bed_text">
    	                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
    	                                {{ $property->bedrooms }} Bedroom
    	                            </p>
    	                        </div>
    	                    </div>
    	                </div>
                    </a>
	            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/2.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/3.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/4.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/5.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/6.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/7.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/8.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <center class="my-5">
                <a href="{{ route('properties') }}" class="btn btn_show_more">Show More</a>
            </center>
        </div>
                </div>
                <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">
               <div class="row g-4 mt-4 mx-0">
        	@foreach($properties as $property)
	            <div class="col-lg-3 col-md-6 col-12">
                    <a href="{{ route('property-detail',['id' => $property->id]) }}">
    	                <div class="card cardss border-0">
    	                    <div>
    	                        <span class="badge">{{ date('F d, Y' ,strtotime($property->created_at)) }}</span>
    	                        <img src="{{ asset('storage/'.$property->images[0]) }}" class="listng_img w-100" alt="property1" />
    	                    </div>

    	                    <div class="card-body ps-1 pt-1">
    	                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
    	                            <li class="border-start px-2 card_room_text">
    	                                {{ $property->title }}
    	                            </li>
    	                        </ul>
    	                        <div class="d-flex">
    	                            <p class="bed_text">
    	                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
    	                                {{ $property->bathrooms }} Bathroom
    	                            </p>
    	                            <p class="ps-3 bed_text">
    	                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
    	                                {{ $property->bedrooms }} Bedroom
    	                            </p>
    	                        </div>
    	                    </div>
    	                </div>
                    </a>
	            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/2.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/3.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/4.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/5.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/6.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/7.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <span class="badge">April 21, 2024</span>
                        <img src="assest/images/listing/8.jpg" class="listng_img w-100" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-1">
                        <ul class="ps-0 d-flex list-unstyled flex-wrap mb-1">
                            <li class="pe-2 card_room_text">
                                Wythe Corner House
                            </li>
                            <li class="border-start ps-2 card_room_text">
                                Williams burg House
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Townhouse w
                            </li>
                            <li class="border-start px-2 card_room_text">
                                Private Roof
                            </li>
                        </ul>
                        <div class="d-flex">
                            <p class="bed_text">
                                <img src="assest/images/bathroom.png" class="pe-2" width="20" alt="" />
                                3 Bathroom
                            </p>
                            <p class="ps-3 bed_text">
                                <img src="assest/images/bed.png" class="pe-2" width="20" alt="" />
                                3 Bedroom
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <center class="my-5">
                <a href="{{ route('properties') }}" class="btn btn_show_more">Show More</a>
            </center>
        </div>
                </div>
            </div>
        
     
    </div>
</section>

<section class="stay_special">
    <div class="container-fluid px-2 px-lg-5">
        <div class="row g-4 mx-0">
            <h3 class="text-center pb-5">
                The Search A Stay’s Special
            </h3>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="special_card">
                    <img src="assest/images/stay-special/1.jpg" class="special_card_img" alt="room" />
                    <div class="px-2 card-body py-4">
                        <h5 class="mb-0 pb-1 fs-6 text-black fw-bold">24/7 Concierge</h5>
                        <p class="mb-0 text-black card_room_text">
                            Contactless check-in/out and on-call customer service
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="special_card">
                    <img src="assest/images/stay-special/2.jpg" class="special_card_img" alt="room" />
                    <div class="px-2 card-body py-4">
                        <h5 class="mb-0 pb-1 fs-6 text-black fw-bold">Ergonomic Workspaces</h5>
                        <p class="mb-0 text-black card_room_text">
                            Contactless check-in/out and on-call customer service
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="special_card">
                    <img src="assest/images/stay-special/3.jpg" class="special_card_img" alt="room" />
                    <div class="px-2 card-body py-4">
                        <h5 class="mb-0 pb-1 fs-6 text-black fw-bold">Premium Amenities</h5>
                        <p class="mb-0 text-black card_room_text">
                            Contactless check-in/out and on-call customer service
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row g-4 mx-0">
            <div class="text-center my-3 mb-0 mb-lg-3 mt-5">
                <h3 class="pt-4">
                    The Largest Luxury Collection in NYC
                </h3>
                <p>
                    Experience Search a stay's premier furnised residences across manhattan and Brooklyn.
                </p>
            </div>
            @isset($properties)
	            @if(count($properties) >= 1)
		            <div class="col-lg-6">
		                <div class="image_card">
		                    <img src="{{ asset('storage/'.$properties[0]->images[0]) }}" class="luxury_card" alt="" />
		                    <div class="d-flex pt-4 justify-content-between">
		                        <p>
		                            {{ $properties[0]->title }}
		                        </p>
		                        <div>
		                            <a href="{{ route('property-detail',['id' => $properties[0]->id]) }}" class="text-white">Discover <img src="assest/images/right-arrow.png" width="23" class="ps-2" alt="right-arrow" /></a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            @if(count($properties) > 1)
			            <div class="col-lg-6">
			                <div class="image_card">
			                    <img src="{{ asset('storage/'.$properties[1]->images[0]) }}" class="luxury_card2" alt="" />
			                    <div class="d-flex pt-4 justify-content-between">
			                        <p>
			                            {{ $properties[1]->title }}
			                        </p>
			                        <div>
			                            <a href="{{ route('property-detail',['id' => $properties[1]->id]) }}" class="text-white">Discover <img src="assest/images/right-arrow.png" width="23" class="ps-2" alt="right-arrow" /></a>
			                        </div>
			                    </div>
			                </div>
			                @if(count($properties) > 2)
				                <div class="image_card">
				                    <img src="{{ asset('storage/'.$properties[2]->images[0]) }}" class="luxury_card2" alt="" />
				                    <div class="d-flex pt-4 justify-content-between">
				                        <p>
				                            {{ $properties[2]->title }}
				                        </p>
				                        <div>
				                            <a href="{{ route('property-detail',['id' => $properties[2]->id]) }}" class="text-white">Discover <img src="assest/images/right-arrow.png" width="23" class="ps-2" alt="right-arrow" /></a>
				                        </div>
				                    </div>
				                </div>
			                @endif
			            </div>
	            	@endif
	            @endif
            @endisset
        </div>
    </div>
</section>
<style>
.nav-tabs .nav-item.show, .nav-tabs .nav_links.active {
    color: #ffffff;
      background: transparent;
    color: #fff;
    border: none;
    border-bottom: 1px solid;
}
    .nav-link {
    background: transparent;
    color: #fff;
    border: none;
    /*border-bottom: 1px solid;*/
}
/*    .nav_links:active {*/
/*    background: transparent;*/
/*    color: #fff;*/
/*    border: none;*/
/*    border-bottom: 1px solid;*/
/*}*/
</style>
@endsection