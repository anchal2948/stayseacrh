@extends('host.layouts.app')

@section('content')
<section class="content blog-page">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Post Property</h2>
                    <ul class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Aero</a></li> -->
                        <li class="breadcrumb-item"><a href="blog-dashboard.html">Property</a></li>
                        <li class="breadcrumb-item active">New Property</li>
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
                	<form method="post" action="{{ route('property.post') }}" enctype="multipart/form-data">
                		@csrf
	                    <div class="card">
	                        <div class="body">
	                        	<div class="form-group">
	                        	<h6>What kind of place do you want to list ?</h6>
	                        		<label>Entire Place</label>
	                        		<input type="radio" name="place_type" value="entire_place">
	                        		<label>Private Room</label>
	                        		<input type="radio" name="place_type" value="private_room" checked>
	                        		<label>Shared Room</label>
	                        		<input type="radio" name="place_type" value="shared_room">
	                        	</div>
	                            <div class="form-group">
	                            	<label>Title</label>
	                                <input type="text" class="form-control" placeholder="Title" name="title" />
	                                @if($errors->has('title'))
	                                	<small style="color:red">{{ $errors->first('title') }}</small>
	                                @endif
	                            </div>
	                            <div class="form-group">
	                            	<label>Description</label>
	                            	<textarea class="form-control" name="description" rows="6" placeholder="Description"></textarea>
	                            	@if($errors->has('description'))
	                                	<small style="color:red">{{ $errors->first('description') }}</small>
	                                @endif
	                            </div>
	                            <div class="form-group">
		                            <select class="form-control" name="listing_type">
		                                <option selected="selected" value="">Select listing Type</option>
		                                <option value="apartment"> Apartment</option>
		                                <option value="bed_breakfast"> Bed &amp; Breakfast</option>
		                                <option value="condo"> Condo</option>
		                                <option value="house"> House</option>
		                                <option value="loft"> Loft</option>
		                                <option value="studio"> Studio</option>
		                                <option value="town_house"> Town house</option>
		                                <option value="villa"> Villa</option>
		                            </select>
		                            @if($errors->has('listing_type'))
	                                	<small style="color:red">{{ $errors->first('listing_type') }}</small>
	                                @endif
	                            </div>
	                            <div class="form-group">
	                            	<label>Number of Bedrooms</label>
	                                <input type="text" class="form-control" placeholder="No. of Bedrooms" name="bedrooms" />
	                            </div>
	                            <div class="form-group">
	                            	<label>Number of Guests</label>
	                                <input type="text" class="form-control" placeholder="No. of Guests" name="guests" />
	                            </div>
	                            <div class="form-group">
	                            	<label>Number of Beds</label>
	                                <input type="text" class="form-control" placeholder="No. of Beds" name="beds" />
	                            </div>
	                            <div class="form-group">
	                            	<label>Number of Bathrooms</label>
	                                <input type="text" class="form-control" placeholder="No. of Bathrooms" name="bathrooms" />
	                            </div>
	                            <div class="form-group">
	                            	<label>Number of Room</label>
	                                <input type="text" class="form-control" placeholder="No. of Rooms" name="rooms" />
	                            </div>
	                            <div class="form-group">
	                            	<label>Size</label>
	                                <input type="text" class="form-control" placeholder="Enter Size (only numbers)" name="size" />
	                            </div>
	                            <div class="form-group">
	                            	<label>Unit of Measure</label>
	                                <input type="text" class="form-control" placeholder="Unit of Measure. Ex: Sqft" name="measure_unit" />
	                            </div>
	                            <!-- <div class="form-group">
	                            	<label>Amenities Description</label>
	                                <textarea class="form-control" placeholder="Describe something about amenities" name="amenities_description"></textarea>
	                            </div>
	                            <div class="form-group">
	                            	<label>Amenities</label>
	                                <textarea class="form-control" placeholder="use comma(,) to separate Amenities" name="amenities"></textarea>
	                            </div> -->
	                            <div class="form-group">
	                            	<label>Affiliate Booking Link</label>
	                                <input type="text" class="form-control" placeholder="Affiliate Booking Link" name="affiliate_booking_link" />
	                            </div>
	                            <div class="form-group">
	                            	<label>Contact Number</label>
	                                <input type="text" class="form-control" placeholder="Phone Number" name="phone" />
	                            </div>
	                        </div>
	                    </div>
	                    <div class="card">

	                        <div class="body">
	                        	<h4>Amenities</h4>
		                        <div class="row">
		                    		<div class="col-3">
		                    			 <div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="air_conditioning" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/air_conditioning.svg') }}" width="50" class="pe-2" alt="air_conditioning">Air Conditioning</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="cable_tv" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/cable_tv.svg') }}" width="50" class="pe-2" alt="air_conditioning">Cable Tv</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="dishes_and_silverware" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/dishes_and_silverware.svg') }}" width="50" class="pe-2" alt="air_conditioning">Dishes and Silverware</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="bbq_grill" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/bbq_grill.svg') }}" width="50" class="pe-2" alt="air_conditioning">BBQ Grill</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="coffee_maker" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/coffee_maker.svg') }}" width="50" class="pe-2" alt="air_conditioning">Coffee Maker</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="dishwasher" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/dishwasher.svg') }}" width="50" class="pe-2" alt="air_conditioning">Dishwasher</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="bathtub" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/bathtub.svg') }}" width="50" class="pe-2" alt="air_conditioning">Bathtub</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="cookware" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/cookware.svg') }}" width="50" class="pe-2" alt="air_conditioning">Cookware</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="dryer" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/dryer.svg') }}" width="50" class="pe-2" alt="air_conditioning">Dryer</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="essentials" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/essentials.svg') }}" width="50" class="pe-2" alt="air_conditioning">Essentials</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="fire_extinguisher" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/fire_extinguisher.svg') }}" width="50" class="pe-2" alt="air_conditioning">Fire Extinguisher</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="toaster" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/toaster.svg') }}" width="50" class="pe-2" alt="air_conditioning">Toaster</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="hangers" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/hangers.svg') }}" width="50" class="pe-2" alt="air_conditioning">Hangers</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="microwave" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/microwave.svg') }}" width="50" class="pe-2" alt="air_conditioning">Microwave</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="wireless_internet" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/wireless_internet.svg') }}" width="50" class="pe-2" alt="air_conditioning">WireLess Internet</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="laptop_friendly_workspace" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/laptop_friendly_workspace.svg') }}" width="50" class="pe-2" alt="air_conditioning">Laptop Friendly Workspace</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="shampoo" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/shampoo.svg') }}" width="50" class="pe-2" alt="air_conditioning">Shampoo</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="oven" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/oven.svg') }}" width="50" class="pe-2" alt="air_conditioning">Oven</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="refrigerator" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/refrigerator.svg') }}" width="50" class="pe-2" alt="air_conditioning">Refrigerator</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="desk" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/desk.svg') }}" width="50" class="pe-2" alt="air_conditioning">Desk</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="first_aid_kit" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/first_aid_kit.svg') }}" width="50" class="pe-2" alt="air_conditioning">First Aid Kit</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="stove" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/stove.svg') }}" width="50" class="pe-2" alt="air_conditioning">Stove</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="heating" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/heating.svg') }}" width="50" class="pe-2" alt="air_conditioning">Heating</label>
										  </div>
									</div>
									<div class="col-3">
		                    		 	<div class="mb-3 form-check d-flex align-items-center">
										    <input type="checkbox" class="form-check-input amenities_checkbox" name="amenities[]" value="kettle" id="exampleCheck1">
										    <label class="form-check-label pt-2" for="exampleCheck1">
										      <img src="{{ asset('assest/images/listing/kettle.svg') }}" width="50" class="pe-2" alt="air_conditioning">Kettle</label>
										  </div>
									</div>
		                    	</div>
	                        </div>
	                    </div>
	                    <div class="card">
	                        <div class="body after-add-more">
	                        	<h4>Calender based pricing</h4>
	                        	<div class="form-group">
	                        		<label>Date From</label>
	                        		<input type="date" name="price_from[]" class="form-control">
	                        	</div>
	                        	<div class="form-group">
	                        		<label>Date to</label>
	                        		<input type="date" name="price_to[]" class="form-control">
	                        	</div>
	                        	<div class="form-group">
	                        		<label>Price (per day)</label>
	                        		<input type="text" name="from_to_price[]" class="form-control">
	                        	</div>   
	                        	<div class="form-group">
	                        		<label>Minimum days stay (numbers only)</label>
	                        		<input type="text" name="min_stay" class="form-control">
	                        	</div>    
	                        	<div class="change">
	                        		<button class="btn btn-success btn-icon float-right right_icon_toggle_btn add-more" type="button"><i class="zmdi zmdi-plus"></i></button>
	                        	</div>               
	                        		
	                        </div>
	                    </div>
	                    <div class="card">
	                        <div class="body">
	                        	<h4>Pricing</h4>
	                            <div class="form-group">
	                            	<label>Nightly </label>
	                                <input type="text" class="form-control" placeholder="Enter Price for 1 Night" name="one_night_price" />
	                            </div>
	                            <div class="form-group">
	                            	<label>After Price Label</label>
	                                <input type="text" class="form-control" placeholder="After price label Eg: Night/Hr" name="after_price_label" />
	                            </div>
	                            <div class="form-group">
	                            	<label>Weekends</label>
	                                <input type="text" class="form-control" placeholder="Enter Unit Price for a single day" name="weekend_price_per_day" />
	                            </div>
	                            <div class="form-group">
	                            	<label>Select Weekend Days</label>
		                            <select class="form-control" name="weekend_days">
		                                <option selected="selected" value="">Select Weekend Days</option>
		                                <option value="saturday_sunday"> Saturday & Sunday</option>
		                                <option value="friday_saturday"> Friday & Saturday</option>
		                                <option value="friday_saturday_sunday"> Friday, Saturday & Sunday</option>
		                            </select>
	                            </div>
	                            <div class="form-group">
	                            	<label>Default Price for Property </label>
	                                <input type="text" class="form-control" placeholder="Enter Default Price" name="default_price" />
	                            </div>
	                            <div class="form-group">
	                            	<label>Default Minimum days Stay </label>
	                                <input type="text" class="form-control" placeholder="Enter Minimum Days to stay (numbers only)" name="default_min_stay" />
	                            </div>
	                        </div>
	                    </div>
	                    <div class="card">
	                    	<div class="body">
	                    		<h4>Long Term Pricing</h4>
		                    	<div class="form-group">
		                    		<label>Weekly- 7+ Nights</label>
		                    		<input type="text" class="form-control" placeholder="Enter Unit Price for a single day" name="weekly_price_per_day" />
		                    	</div>
		                    	<div class="form-group">
		                    		<label>Monthly- 30+ Nights</label>
		                    		<input type="text" class="form-control" placeholder="Enter Unit Price for a single day" name="monthly_price_per_day" />
		                    	</div>
	                    	</div>
	                    </div>
	                    <div class="card">
	                    	<div class="body">
	                    		<h4>Setup Extra Service Price</h4>
	                    		<div class="form-group">
	                    			<label>Service Name</label>
	                    			<input type="text" class="form-control" placeholder="Service Name" name="service_name" />
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Service Price</label>
	                    			<input type="text" class="form-control" placeholder="Service Price" name="service_price" />
	                    		</div>
	                    		<div class="form-group">
	            					<label>Type</label>
	            			        <select class="form-control" name="service_fee_type">
	            			            <option selected="selected" value="">Select Price Type</option>
	            			            <option value="single">Single Fee</option>
	            			            <option value="night"> Per Night</option>
	            			            <option value="guest"> Per Guest</option>
	            			            <option value="night_guest"> Per Night Per Guest</option>
	            			        </select>
	                    		</div>
	                    	</div>
	                    </div>
	                    <div class="card">
	                    	<div class="body">
	                    		<h4>Additional Costs</h4>
	                    		<div class="form-group">
	                    			<h6>Allow Additional Guests</h6>
	                    			<label>Yes</label>
	                    			<input type="radio" name="additional_guests" value="yes">
	                    			<label>No</label>
	                    			<input type="radio" name="additional_guests" value="no" checked>
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Additional Guest Price</label>
	                    			<input type="text" class="form-control" placeholder="Enter Price for per additional guest" name="price_per_guest" />
	                    		</div>
	                    		<div class="form-group">
	                    			<label>No. of Guest</label>
	                    			<input type="text" class="form-control" placeholder="No. of Guest" name="number_of_guests" />
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Cleaning Fee</label>
	                    			<input type="text" class="form-control" placeholder="Cleaning Fee" name="cleaning_fee" />
	                    		</div>
	                    		<div class="form-group">
	                    			<h6>Cleaning Fee Type</h6>
	                    			<label>Daily</label>
	                    			<input type="radio" name="cleaning_fee_type" value="Daily">
	                    			<label>Per Stay</label>
	                    			<input type="radio" name="cleaning_fee_type" value="Per Stay" checked>
	                    		</div>
	                    		<div class="form-group">
	                    			<label>City Fee</label>
	                    			<input type="text" class="form-control" placeholder="City Fee" name="city_fee" />
	                    		</div>
	                    		<div class="form-group">
	                    			<h6>City Fee Type</h6>
	                    			<label>Daily</label>
	                    			<input type="radio" name="city_fee_type" value="Daily">
	                    			<label>Per Stay</label>
	                    			<input type="radio" name="city_fee_type" value="Per Stay" checked>
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Security Deposit</label>
	                    			<input type="text" class="form-control" placeholder="Security Deposit" name="security_deposit" />
	                    		</div>
	                    	</div>
	                    </div>
	                    <div class="card">
	                    	<div class="body">
	                    		<h4>Terms & Use</h4>
	                    		<div class="form-group">
	                    			<h6>Smoking Allowed</h6>
	                    			<label>Yes</label>
	                    			<input type="radio" name="smoking_allowed" value="yes">
	                    			<label>No</label>
	                    			<input type="radio" name="smoking_allowed" value="no" checked>
	                    		</div>
	                    		<div class="form-group">
	                    			<h6>Pets Allowed</h6>
	                    			<label>Yes</label>
	                    			<input type="radio" name="pets_allowed" value="yes">
	                    			<label>No</label>
	                    			<input type="radio" name="pets_allowed" value="no" checked>
	                    		</div>
	                    		<div class="form-group">
	                    			<h6>Party Allowed</h6>
	                    			<label>Yes</label>
	                    			<input type="radio" name="party_allowed" value="yes">
	                    			<label>No</label>
	                    			<input type="radio" name="party_allowed" value="no" checked>
	                    		</div>
	                    		<div class="form-group">
	                    			<h6>Children Allowed</h6>
	                    			<label>Yes</label>
	                    			<input type="radio" name="children_allowed" value="yes">
	                    			<label>No</label>
	                    			<input type="radio" name="children_allowed" value="no" checked>
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Fees</label>
	                    			<input type="text" class="form-control" name="fees" placeholder="Fees">
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Tax (%)</label>
	                    			<input type="text" class="form-control" name="tax" placeholder="Tax">
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Cancellation Policy</label>
	                    			<textarea class="form-control" placeholder="" name="cancellation_policy"></textarea>
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Youtube Url</label>
	                    			<input type="text" class="form-control" name="youtube_url" placeholder="Paste Your Youtube Url">
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Location</label>
	                    			<input type="text" class="form-control" name="location" placeholder="Location">
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Latitude</label>
	                    			<input type="text" class="form-control" name="latitude" placeholder="Latitude">
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Longitude</label>
	                    			<input type="text" class="form-control" name="longitude" placeholder="Longitude">
	                    		</div>
	                    		<div class="form-group">
	                    			<label>Property Images</label>
	                    			<input type="file" class="form-control" name="property_images[]" multiple>
	                    		</div>
	                    		<button type="submit" class="btn btn-primary waves-effect m-t-20">Post Property</button>
	                    	</div>
	                    </div>
	                </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
	    $("body").on("click",".add-more",function(){ 
	        var html = $(".after-add-more").first().clone();
	      
	          $(html).find(".change").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
	      
	        $(".after-add-more").last().after(html);
	       
	    });

	    $("body").on("click",".remove",function(){ 
	        $(this).parents(".after-add-more").remove();
	    });
	});
</script>
@endsection