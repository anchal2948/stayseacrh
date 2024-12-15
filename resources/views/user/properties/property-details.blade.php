@extends('user.layouts.app')

@section('css')
 <!-- FullCalendar CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css" rel="stylesheet" />

@endsection

@section('content')

<main>
    <section class="blog_banner listin_banner">
        <h1>
            Property Detail
        </h1>
    </section>
    <section class="login_wrappr my-5">
        <div class="container-fluid px-4">
            <div class="row g-4">
                @if(count($property_detail->images) >= 1)
                    @if(count($property_detail->images) == 1)
                        <div class="col-lg-7">
                            <img src="{{ asset('storage/'.$property_detail->images[0]) }}" class="w-100 img_listing_detail1" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="openSlider(0)" />
                        </div>
                    @endif
                    @if(count($property_detail->images) > 1)
                        <div class="col-lg-7">
                            <img src="{{ asset('storage/'.$property_detail->images[0]) }}" class="w-100 img_listing_detail1" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="openSlider(0)" />
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('storage/'.$property_detail->images[1]) }}" class="w-100 img_listing_detail2 pb-4" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="openSlider(0)" />
                                </div>
                                <div class="col-12">
                                    <img src="{{ asset('storage/'.$property_detail->images[2]) }}" class="w-100 img_listing_detail2" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="openSlider(0)" />
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
                <a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#imageModal" onclick="openSlider(0)" class="text-end text-white">See all</a>
            </div>

            <div class="row my-5">
                <div class="col-lg-7">
                    <h3>
                        Overview
                    </h3>
                    <p>
                        {{ $property_detail->description ?? '' }}
                    </p>
                    <div class="styles_overviewBlocks__lightBlock__bzUjX">
                        <div class="styles_overviewBlocks__amenities__7PWcm">
                            <h4 class="listing_heading">Unique Amenities</h4>
                            <div class="styles_wysiwygText__aCS1z styles_overviewBlocks__summary__F8am9">
                                <div>
                                    <p>
                                        <strong>Amenities: </strong> {{ $property_detail->amenities_description }}
                                    </p>
                                </div>
                            </div>

                            <div class="block-item-text">
                                <input type="checkbox" hidden class="read-more-state" id="read-more" />
                                <div class="read-more-wrap">
                                    <div class="row">
                                        <!-- <div class="col-4"> -->
                                            @if(in_array('air_conditioning',$property_detail->amenities))
                                            <div class="d-flex align-items-center col-4">
                                                <img src="{{ asset('assest/images/listing/air_conditioning.svg') }}" width="50" alt="air_conditioning" />
                                                <div class="styles_amenity__title__i6VQS">Air Conditioning</div>
                                            </div>
                                            @endif
                                            @if(in_array('bbq_grill',$property_detail->amenities))
                                            <div class="d-flex align-items-center col-4">
                                                <img src="{{ asset('assest/images/listing/bbq_grill.svg') }}" width="50" alt="air_conditioning" />
                                                <div class="styles_amenity__title__i6VQS">BBQ Grill</div>
                                            </div>
                                            @endif
                                            @if(in_array('bathtub',$property_detail->amenities))
                                            <div class="d-flex align-items-center col-4">
                                                <img src="{{ asset('assest/images/listing/bathtub.svg') }}" width="50" alt="air_conditioning" />
                                                <div class="styles_amenity__title__i6VQS">Bath Tub</div>
                                            </div>
                                            @endif
                                        <!-- </div> -->
                                        <!-- <div class="col-lg-4"> -->
                                            @if(in_array('cable_tv',$property_detail->amenities))
                                            <div class="d-flex align-items-center col-4">
                                                <img src="{{ asset('assest/images/listing/cable_tv.svg') }}" width="50" alt="air_conditioning" />
                                                <div class="styles_amenity__title__i6VQS">Cable TV</div>
                                            </div>
                                            @endif
                                            @if(in_array('coffee_maker',$property_detail->amenities))
                                            <div class="d-flex align-items-center col-4">
                                                <img src="{{ asset('assest/images/listing/coffee_maker.svg') }}" width="50" alt="air_conditioning" />
                                                <div class="styles_amenity__title__i6VQS">Coffee Maker</div>
                                            </div>
                                            @endif
                                            @if(in_array('cookware',$property_detail->amenities))
                                            <div class="d-flex align-items-center col-4">
                                                <img src="{{ asset('assest/images/listing/cookware.svg') }}" width="50" alt="air_conditioning" />
                                                <div class="styles_amenity__title__i6VQS">Cookware</div>
                                            </div>
                                            @endif
                                        <!-- </div> -->
                                        <!-- <div class="col-4"> -->
                                            @if(in_array('dished_and_silverware',$property_detail->amenities))
                                            <div class="d-flex align-items-center col-4">
                                                <img src="{{ asset('assest/images/listing/dishes_and_silverware.svg') }}" width="50" alt="air_conditioning" />
                                                <div class="styles_amenity__title__i6VQS">Dishes &amp; Silverware</div>
                                            </div>
                                            @endif
                                            @if(in_array('dishwasher',$property_detail->amenities))
                                            <div class="d-flex align-items-center col-4">
                                                <img src="{{ asset('assest/images/listing/dishwasher.svg') }}" width="50" alt="air_conditioning" />
                                                <div class="styles_amenity__title__i6VQS">Dishwasher</div>
                                            </div>
                                            @endif
                                            @if(in_array('dryer',$property_detail->amenities))
                                            <div class="d-flex align-items-center col-4">
                                                <img src="{{ asset('assest/images/listing/dryer.svg') }}" width="50" alt="air_conditioning" />
                                                <div class="styles_amenity__title__i6VQS">Dryer</div>
                                            </div>
                                            @endif
                                        <!-- </div> -->
                                    <!-- </div>
                                    <div class="read-more-target">
                                        <div class="row"> -->
                                            <!-- <div class="col-4"> -->
                                                @if(in_array('essentials',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/essentials.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Essentials</div>
                                                </div>
                                                @endif
                                                @if(in_array('hangers',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/hangers.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Hangers</div>
                                                </div>
                                                @endif
                                                @if(in_array('laptop_friendly_workspace',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/laptop_friendly_workspace.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Laptop Freindly Workspace</div>
                                                </div>
                                                @endif
                                                @if(in_array('refrigerator',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/refrigerator.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Refrigerator</div>
                                                </div>
                                                @endif
                                                @if(in_array('stove',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/stove.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Stove</div>
                                                </div>
                                                @endif
                                            <!-- </div> -->
                                            <!-- <div class="col-lg-4"> -->
                                                @if(in_array('fire_extinguisher',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/fire_extinguisher.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Fire Extinguisher</div>
                                                </div>
                                                @endif
                                                @if(in_array('microwave',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/microwave.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Microvave</div>
                                                </div>
                                                @endif
                                                @if(in_array('shampoo',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/shampoo.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Shampoo</div>
                                                </div>
                                                @endif
                                                @if(in_array('desk',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/desk.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Desk</div>
                                                </div>
                                                @endif
                                                @if(in_array('heating',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/heating.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Heating</div>
                                                </div>
                                                @endif
                                            <!-- </div> -->
                                            <!-- <div class="col-4"> -->
                                                @if(in_array('toaster',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/toaster.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Toasters</div>
                                                </div>
                                                @endif
                                                @if(in_array('wireless_internet',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/wireless_internet.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Wireless Internet</div>
                                                </div>
                                                @endif
                                                @if(in_array('oven',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/oven.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Oven</div>
                                                </div>
                                                @endif
                                                @if(in_array('first_aid_kit',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/first_aid_kit.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">First Aid Kit</div>
                                                </div>
                                                @endif
                                                @if(in_array('kettle',$property_detail->amenities))
                                                <div class="d-flex align-items-center col-4">
                                                    <img src="{{ asset('assest/images/listing/kettle.svg') }}" width="50" alt="air_conditioning" />
                                                    <div class="styles_amenity__title__i6VQS">Kettle</div>
                                                </div>
                                                @endif
                                            <!-- </div> -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="justify-content-center d-flex my-2">
                                    <label for="read-more" class="read-more-trigger_closed"><i class="fa-solid fa-angles-down pe-2"></i>Expand</label>
                                    <label for="read-more" class="read-more-trigger_opened"><i class="fa-solid fa-angles-down pe-2"></i>Hide</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_bed my-4">
                        <h5>
                            Sleeping Spaces
                        </h5>
                        <p>A breakdown of the bedrooms in the property:</p>
                        <div class="d-flex">
                            <div class="d-flex">
                                <img src="{{ asset('assest/images/listing/Bedframe.svg') }}" class="pe-2" width="50" alt="bed" />
                                <div class="styles_sleepingSpaces__title___PC_T">Bedroom {{ $property_detail->bedrooms }}</div>
                            </div>
                            <div class="d-flex ms-5 ps-lg-5">
                                <img src="{{ asset('assest/images/listing/Bedframe.svg') }}" width="50" class="pe-2" alt="bed" />
                                <div class="styles_sleepingSpaces__title___PC_T">Beds {{ $property_detail->beds }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="container bg-light text-black py-4 rounded-3">
                        <div class="">
                            <h4 class="listing_heading">Cancellation Policy</h4>
                            <p>Rove has the following cancellation policy:</p>
                            <ul>
                                <li>All reservations made 14 days before the check-in date are fully refundable for 48 hours</li>
                                <li>Reservations can be cancelled for a full refund if cancelled greater than 60 days before the check-in date</li>
                                <li>Reservations between 60 and 30 days from the check-in date can be cancelled for a credit towards a future Rove booking within the next 12 months.</li>
                                <li>Reservations cannot be cancelled less than 30 days from check-in.</li>
                            </ul>
                            <p>Please email<a href="">searchstay@gmail.com</a>for any questions regarding cancellations.</p>
                            <br />
                            <div class="accordion" id="accordionExample">
                                <h4 class="listing_heading">
                                    Security Deposit Policy
                                </h4>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Up To 1 Month Stay Length
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="">
                                                A refundable credit card hold is required to cover any property damage during your stay. This hold will be placed 48 hours before your arrival. <br />
                                                <br />
                                                <strong>Stays of 180 Nights or Less:</strong> $10,000 credit card hold upon check-in. <br />
                                                <br />
                                                <strong>Hold and Release Information:</strong> <br />
                                            </p>

                                            <ul>
                                                <li>The hold will be released within 2 days after check-out if no damages or unpaid charges are found.</li>
                                                <li>Replacement holds will be made every 7 days until released 48 hours after departure. It may take 3-5 business days to reflect in your account after release.</li>
                                                <li>Cash security deposits will be reimbursed within 7 days if no damages or unpaid charges are observed during the first inspection, typically within 72 hours of check-out.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                1 To 6 Month Stay Length
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="styles_item__stwNN styles_open__yP8yr">
                                                    <div class="styles_item__question__w5tri">1 To 6 Month Stay Length</div>
                                                    <div class="styles_item__answer__gHz9d">
                                                        A refundable credit card hold is required to cover any property damage during your stay. This hold will be placed 48 hours before your arrival. <br />
                                                        <br />
                                                        <strong>Stays of 180 Nights or Less:</strong> $10,000 credit card hold upon check-in.
                                                        <br />
                                                        <br />
                                                        <strong>Hold and Release Information:</strong> <br />
                                                        <ul>
                                                            <li>The hold will be released within 2 days after check-out if no damages or unpaid charges are found.</li>
                                                            <li>Replacement holds will be made every 7 days until released 48 hours after departure. It may take 3-5 business days to reflect in your account after release.</li>
                                                            <li>Cash security deposits will be reimbursed within 7 days if no damages or unpaid charges are observed during the first inspection, typically within 72 hours of check-out.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                6+ Month Stay Length
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="styles_item__stwNN styles_open__yP8yr">
                                                    <div class="styles_item__question__w5tri">6+ Month Stay Length</div>
                                                    <div class="styles_item__answer__gHz9d">
                                                        A refundable credit card hold is required to cover any property damage during your stay. This hold will be placed 48 hours before your arrival. <br />
                                                        <br />
                                                        <strong>Stays of 6 Months (180 Nights) or Longer:</strong> One month’s rent as a cash security deposit, payable via bank transfer. <br />
                                                        <br />
                                                        <strong>Hold and Release Information:</strong> <br />
                                                        <ul>
                                                            <li>The hold will be released within 2 days after check-out if no damages or unpaid charges are found.</li>
                                                            <li>Replacement holds will be made every 7 days until released 48 hours after departure. It may take 3-5 business days to reflect in your account after release.</li>
                                                            <li>Cash security deposits will be reimbursed within 7 days if no damages or unpaid charges are observed during the first inspection, typically within 72 hours of check-out.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="checkout_form mx-lg-4 sticky-top pt-5">
                        <form action="">
                            <h6>Select <b>check-in</b> and <b>check-out</b> dates to see the price of this property.</h6>
                            <!-- <p>
                                This listing requires a 30-night minimum
                            </p> -->
                           <div class="d-flex">
                                       <!-- Check-In Date -->
                                       <div>
                                           <label for="checkin" class="d-block pb-2 checkincal">Check-In Date:</label>
                                           <input type="text" class="w-75" id="checkin" name="checkin" placeholder="Choose Date"  />
                                           <div class="calendar-container" id="from-calendar" style="display:none;"></div> <!-- Initially hidden -->
                                       </div>

                                       <!-- Check-Out Date -->
                                       <div class="ms-2">
                                           <label for="checkout" class="d-block pb-2 checkoutcal">Check-Out Date:</label>
                                           <input type="text" class="w-75" id="checkout" name="checkout" placeholder="Choose Date"  />
                                           <div class="calendar-container" id="to-calendar" style="display:none;"></div> <!-- Initially hidden -->
                                       </div>
                                   </div>

                                   <!-- Price Summary -->
                                   <div class="price-summary">
                                       <h3>Booking Summary</h3>
                                       <p class="avg-price">Average Price per Day: <span id="avg-price">$0.00</span></p>
                                       <p class="total-price">Total Price: <span id="total-price">$0.00</span></p>
                                   </div>
                            <!-- <div class="mb-3 form-check my-3">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                <label class="form-check-label" for="exampleCheck1">Have Pets?</label>
                            </div> -->
                            <p class="check_text">
                                You won’t pay anything until Search a Stay accepts your request.
                            </p>
                            <div class="my-3">
                                <!-- <a href="" class="btn-dark btn w-100 py-3">Request To Book</a> -->
                                <button type="button" class="btn btn-dark w-100 py-3 request_book">Request To Book</button>
                            </div>
                            <!-- <div class="my-4">
                                <a href="" class="btn btn-outline-info w-100 py-3">Chat With Team</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="searchstay_promise">
        <h4 class="promise_heading">THE ROVE PROMISE</h4>
        <div class="pb-5">Like all other listings on Rove, this property features Rove’s core tenets.</div>
        <div class="row container-fluid px-5">
            <div class="col-2">
                <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.2934 1.45104C8.18426 1.48768 4.63019 2.90704 1.66304 5.76575C1.54705 5.87728 1.43282 5.98115 1.26155 5.96331C1.10143 5.94674 0.973819 5.86342 0.919811 5.7135C0.858314 5.54127 0.893045 5.38339 1.03308 5.24381C1.66208 4.61257 2.34524 4.0381 3.0749 3.52681C6.01913 1.47876 9.28289 0.497376 12.8631 0.631194C17.0118 0.786371 20.5728 2.34419 23.5526 5.23304C23.7662 5.44 23.7863 5.68536 23.6118 5.86428C23.4374 6.0432 23.1858 6.02981 22.9717 5.81521C21.9917 4.83685 20.8795 4.0009 19.6674 3.33128C17.6622 2.21559 15.4286 1.57305 13.1372 1.4529C12.8567 1.43729 12.5769 1.45099 12.2936 1.45099L12.2934 1.45104Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.253451"
                    ></path>
                    <path
                        d="M12.3295 3.86588C15.7828 3.91049 18.7733 5.09883 21.2645 7.50951C21.43 7.66963 21.4942 7.84726 21.3792 8.05375C21.2734 8.24382 21.0981 8.2862 20.8942 8.23219C20.8139 8.21164 20.7604 8.15635 20.7041 8.10155C18.8903 6.33182 16.7371 5.20193 14.2359 4.82499C10.3606 4.2411 6.96465 5.29611 4.07172 7.9526C4.0142 8.00518 3.95892 8.06062 3.90093 8.11319C3.69795 8.29784 3.4633 8.30374 3.29824 8.12929C3.13318 7.95483 3.14386 7.7211 3.33663 7.5266C3.6873 7.17195 4.06168 6.84184 4.4573 6.53848C6.70292 4.8172 9.24065 3.92644 12.0699 3.86637C12.1582 3.86414 12.2439 3.86589 12.33 3.86589L12.3295 3.86588Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.253451"
                    ></path>
                    <path
                        d="M12.3085 7.09766C14.812 7.14227 16.9968 7.98984 18.8367 9.70953C18.9385 9.79556 19.0211 9.90183 19.0793 10.0218C19.1609 10.2074 19.1725 10.367 18.9936 10.5001H18.9937C18.8271 10.632 18.588 10.6177 18.4384 10.4666C17.8285 9.8389 17.1206 9.34645 16.3529 8.93382C13.0719 7.17078 8.91478 7.76013 6.25433 10.3658C6.02061 10.5946 5.78244 10.6196 5.59858 10.4349C5.41473 10.2503 5.44197 10.0017 5.69274 9.76578C7.54433 8.00722 9.75299 7.13429 12.3086 7.09766L12.3085 7.09766Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.253451"
                    ></path>
                    <path
                        d="M12.292 10.3477C13.9542 10.3767 15.4018 10.9405 16.619 12.0817C16.7805 12.2329 16.879 12.3984 16.7974 12.6197C16.6881 12.9213 16.3375 12.9556 16.0698 12.6951C15.4252 12.0706 14.6748 11.6138 13.8072 11.3848C11.8113 10.8575 10.0408 11.2902 8.51685 12.6927C8.34781 12.8483 8.17208 12.9081 7.96767 12.7926C7.78572 12.6904 7.74781 12.52 7.79241 12.3264C7.81424 12.2305 7.88163 12.1626 7.94854 12.0976C9.16718 10.9457 10.6207 10.3767 12.2918 10.3477L12.292 10.3477Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.253451"
                    ></path>
                    <path
                        d="M12.3269 16.8799C11.8846 16.8856 11.4587 16.7124 11.146 16.3998C10.8331 16.0871 10.6597 15.6614 10.6652 15.2191C10.6647 14.778 10.8395 14.3548 11.1512 14.0427C11.4629 13.7304 11.8857 13.555 12.3269 13.5547C12.768 13.5545 13.191 13.7296 13.5031 14.0414C13.8151 14.3532 13.9903 14.7762 13.9903 15.2174C13.9903 15.6583 13.815 16.0815 13.5031 16.3933C13.191 16.7051 12.768 16.8802 12.3269 16.8799Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.253451"
                    ></path>
                </svg>
                <span class="span_promise">Fast WiFi</span>
            </div>
            <div class="col-2">
                <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.4247 9.79928H16.8871V8.82391C16.8871 8.74515 16.8559 8.66972 16.8001 8.61399C16.7444 8.55825 16.669 8.52705 16.5902 8.52705H14.6818C14.518 8.52705 14.385 8.66003 14.385 8.82391V9.79928H13.0703V7.93333H15.742C16.0457 7.93333 16.337 7.81277 16.5517 7.59801C16.7665 7.38324 16.8871 7.09198 16.8871 6.78831V2.12354C16.8871 1.81987 16.7665 1.5286 16.5517 1.31384C16.337 1.09907 16.0457 0.978516 15.742 0.978516H7.85406C7.55039 0.978516 7.25913 1.09908 7.04437 1.31384C6.8296 1.52861 6.70904 1.81987 6.70904 2.12354V6.78831C6.70904 7.09198 6.8296 7.38324 7.04437 7.59801C7.25913 7.81277 7.55039 7.93333 7.85406 7.93333H10.5258V9.79928H9.5928V8.82391C9.5928 8.74515 9.5616 8.66972 9.50586 8.61398C9.45012 8.55825 9.3747 8.52705 9.29594 8.52705H2.51067C2.34679 8.52705 2.21382 8.66003 2.21382 8.8239V9.79927H2.17141C1.76232 9.79927 1.38428 10.0175 1.17983 10.3718C0.975213 10.7261 0.975213 11.1626 1.17983 11.5168C1.38429 11.8711 1.76232 12.0893 2.17141 12.0893H2.63789V22.225C2.63789 22.3888 2.77087 22.5218 2.93474 22.5218H4.37663C4.54051 22.5218 4.67348 22.3888 4.67348 22.225V20.5711H13.1551V22.225C13.1551 22.3888 13.288 22.5218 13.4519 22.5218H14.8938C15.0577 22.5218 15.1907 22.3888 15.1907 22.225V20.5711H18.9226V22.225C18.9226 22.3888 19.0555 22.5218 19.2194 22.5218H20.6613C20.8252 22.5218 20.9582 22.3888 20.9582 22.225V12.0893H21.4246C21.8337 12.0893 22.2118 11.8711 22.4162 11.5168C22.6208 11.1625 22.6208 10.726 22.4162 10.3718C22.2117 10.0175 21.8337 9.79927 21.4246 9.79927L21.4247 9.79928ZM14.9787 9.12076H16.2933V9.79928H14.9787V9.12076ZM7.30277 6.78833V2.12355C7.30277 1.81912 7.54964 1.57224 7.85408 1.57224H15.7421C16.0465 1.57224 16.2934 1.81912 16.2934 2.12355V6.78833C16.2934 7.09276 16.0465 7.33964 15.7421 7.33964H7.85408C7.54965 7.33964 7.30277 7.09277 7.30277 6.78833ZM11.1195 7.93333H12.4766V9.79928H11.1195V7.93333ZM2.80736 9.12076H8.99901V9.79928H2.80736V9.12076ZM4.07957 21.9279H3.23141V12.0892H4.07957V21.9279ZM13.1548 12.0892V18.5352H4.67319V12.0892H13.1548ZM4.67319 19.9772V19.129H13.1548V19.9772H4.67319ZM14.5967 21.9279H13.7486V12.0893H14.5967V21.9279ZM18.9222 12.0893V13.616H15.1903V12.0893H18.9222ZM18.9222 15.7364H15.1903V14.2097H18.9222V15.7364ZM15.1903 16.33H18.9222V17.8567H15.1903V16.33ZM15.1903 19.9771V18.4504H18.9222V19.9771H15.1903ZM20.3642 21.9279H19.5161V12.0892H20.3642V21.9279ZM21.4244 11.4956H2.17132C1.86689 11.4956 1.62001 11.2487 1.62001 10.9443C1.62001 10.6398 1.86689 10.393 2.17132 10.393H21.4244C21.7289 10.393 21.9757 10.6398 21.9757 10.9443C21.9757 11.2487 21.7289 11.4956 21.4244 11.4956Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.253451"
                    ></path>
                </svg>
                <span class="span_promise">Work desk and monitor</span>
            </div>
            <div class="col-2">
                <svg width="23" height="27" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.23119 17.5875C4.24794 17.763 4.39607 17.897 4.57211 17.897H6.69117C6.88062 17.897 7.03377 17.7433 7.03433 17.5542V15.786H9.11528C9.30491 15.786 9.45807 15.6322 9.45807 15.4434C9.45807 15.2543 9.30472 15.1007 9.11528 15.1007H7.03433V12.3056H9.11528C9.30491 12.3056 9.45807 12.1522 9.45807 11.963C9.45807 11.7741 9.30472 11.6202 9.11528 11.6202H7.03433V8.82668H9.11528C9.30491 8.82668 9.45807 8.67296 9.45807 8.48389C9.45807 8.29481 9.30472 8.1411 9.11528 8.1411H7.03433V6.20979C7.03433 6.02034 6.88099 5.86719 6.69154 5.86719C6.50209 5.86719 6.34875 6.02034 6.34875 6.20979V8.48316V8.48372V8.48427V11.9619V11.9624V11.963V15.4422V15.4428V15.4433V17.2109H4.88361L4.13532 9.56886C4.12415 9.45515 4.05716 9.36471 3.96616 9.31092L2.22727 6.93818L3.52438 6.53695C3.70546 6.4815 3.80669 6.28945 3.75068 6.10875C3.69522 5.92804 3.50317 5.82681 3.32247 5.88282L1.56534 6.42569C1.45963 6.45881 1.37589 6.54014 1.34146 6.64528C1.30685 6.75061 1.3249 6.86599 1.39059 6.95551L3.46834 9.79013L4.23119 17.5875Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.228106"
                    ></path>
                    <path
                        d="M20.0348 7.79278C19.6736 7.33144 19.1155 7.07779 18.4632 7.07779H16.8937L17.1194 4.76612C17.1211 4.75067 17.1153 4.73671 17.115 4.72164C17.1157 4.71196 17.1206 4.70377 17.1206 4.69391V3.56783C17.1206 2.86198 16.5466 2.28691 15.8396 2.28691H11.8748C11.8374 1.61399 11.2834 1.07617 10.6006 1.07617H9.5062C8.82436 1.07617 8.26997 1.61342 8.23276 2.28691L4.26743 2.28673C3.56159 2.28673 2.98633 2.86123 2.98633 3.56764V4.69373C2.98633 4.70061 2.98986 4.70619 2.99042 4.71327C2.99024 4.71996 2.98633 4.72573 2.98633 4.73281C2.98633 4.92225 3.14005 5.07559 3.32912 5.07559H14.901C15.0907 5.07559 15.2436 4.92225 15.2436 4.73281C15.2436 4.54336 15.0909 4.3902 14.901 4.3902H3.67213V3.56802C3.67213 3.23956 3.93974 2.97251 4.26783 2.97251H8.56797C8.75742 2.97251 8.91076 2.81936 8.91076 2.62991C8.91076 2.58134 8.90016 2.53574 8.88229 2.49387C8.90034 2.452 8.91114 2.40603 8.91114 2.35727C8.91114 2.02882 9.17818 1.76177 9.50626 1.76177H10.6007C10.9294 1.76177 11.1964 2.02882 11.1964 2.35727C11.1964 2.40603 11.207 2.452 11.2253 2.49387C11.2074 2.53574 11.197 2.58133 11.197 2.62972C11.197 2.81917 11.3501 2.97232 11.5396 2.97232H15.8397C16.1676 2.97232 16.4348 3.23937 16.4348 3.56783V4.69392C16.4348 4.69652 16.4365 4.69894 16.4365 4.70173L16.1754 7.37947C16.1568 7.56817 16.2947 7.73529 16.4829 7.75372C16.4938 7.75502 16.5057 7.75539 16.5171 7.75539C16.5231 7.75539 16.5281 7.75241 16.5338 7.75223C16.5519 7.7552 16.5685 7.76321 16.5874 7.76321H18.4633C18.9002 7.76321 19.267 7.92362 19.495 8.21542C19.7237 8.50722 19.7922 8.90154 19.6874 9.3264L18.4402 14.362C18.1947 15.3513 17.5233 16.0905 17.086 16.0905C16.8969 16.0905 16.7434 16.2442 16.7434 16.4333C16.7434 16.6222 16.8967 16.7759 17.086 16.7759C17.9061 16.7759 18.7928 15.7883 19.1055 14.5278L20.3527 9.4917C20.5089 8.85784 20.3955 8.25452 20.0351 7.79283L20.0348 7.79278Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.228106"
                    ></path>
                    <path
                        d="M15.69 20.7371C15.6489 20.5724 15.4956 20.4714 15.3307 20.4853C15.3173 20.4837 15.3055 20.4775 15.2918 20.4775H5.07952V19.4637H15.3709C15.4163 19.4637 15.4594 19.454 15.4993 19.4376C15.5136 19.432 15.5249 19.4211 15.5382 19.4136C15.562 19.3997 15.586 19.387 15.6057 19.368C15.6182 19.3559 15.6266 19.3409 15.6372 19.3269C15.653 19.3072 15.6684 19.288 15.6794 19.2647C15.6869 19.2482 15.6895 19.2305 15.6947 19.2132C15.7003 19.1935 15.7101 19.1752 15.712 19.154L16.7052 9.01084C16.7231 8.82214 16.5857 8.65502 16.397 8.6366C16.2061 8.61706 16.0408 8.75607 16.0228 8.94478L15.0607 18.7783L4.73693 18.7781C4.54748 18.7781 4.39414 18.9315 4.39414 19.1207V20.8201C4.39414 21.009 4.54748 21.1628 4.73693 21.1628H15.0907L16.2344 25.7372L3.77878 25.737L4.74107 22.2386C4.79132 22.0564 4.68431 21.8677 4.50175 21.8173C4.31975 21.767 4.13068 21.8744 4.07987 22.0571L2.99886 25.9886C2.94824 26.1708 3.05561 26.3595 3.23799 26.4095C3.26814 26.4183 3.29884 26.4226 3.32955 26.4226C3.33513 26.4226 3.33997 26.4201 3.34537 26.42C3.34909 26.42 3.35207 26.422 3.35579 26.422H16.6733C16.779 26.422 16.8787 26.3734 16.944 26.2904C17.0082 26.2073 17.0315 26.0986 17.0056 25.9962L15.69 20.7371Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.228106"
                    ></path>
                    <path
                        d="M9.67091 24.3864C9.67091 24.5752 9.82425 24.729 10.0137 24.729C10.6012 24.729 11.0979 24.3315 11.2479 23.7907H13.9422C14.1313 23.7907 14.2848 23.637 14.2848 23.4481C14.2848 23.2592 14.1315 23.1055 13.9422 23.1055H10.9518C10.7623 23.1055 10.609 23.2592 10.609 23.4481C10.609 23.776 10.3421 24.0436 10.0139 24.0436C9.82443 24.044 9.6709 24.1975 9.6709 24.3864L9.67091 24.3864Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.228106"
                    ></path>
                    <path
                        d="M10.0139 22.1699C9.42616 22.1699 8.92965 22.5676 8.77949 23.1082H6.08498C5.89553 23.1082 5.74219 23.2619 5.74219 23.4508C5.74219 23.6397 5.89553 23.7934 6.08498 23.7934H9.07538C9.26483 23.7934 9.41817 23.6397 9.41817 23.4508C9.41817 23.1227 9.68522 22.8557 10.0139 22.8557C10.2033 22.8557 10.3567 22.702 10.3567 22.5129C10.3567 22.3236 10.2031 22.1699 10.0139 22.1699L10.0139 22.1699Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.228106"
                    ></path>
                </svg>
                <span class="span_promise">Chef’s kitchen</span>
            </div>
            <div class="col-2">
                <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.4354 7.7784C18.4354 6.41818 17.3315 5.31429 15.9713 5.31429H15.4785V4.82147C15.4785 4.01321 14.8083 3.34301 14 3.34301H13.5072V1.86455H14.3746C15.0251 1.86455 15.6559 2.02227 16.2473 2.29823C16.3261 2.3377 16.3853 2.35736 16.4641 2.35736C16.6415 2.35736 16.8189 2.25877 16.8978 2.08139C17.0161 1.84488 16.9175 1.54911 16.681 1.41119C15.9713 1.07609 15.1828 0.878906 14.3746 0.878906H9.56463C9.28866 0.878906 9.07181 1.09575 9.07181 1.37173C9.07181 1.6477 9.28866 1.86455 9.56463 1.86455H10.5503V3.34301H10.0575C9.24919 3.34301 8.57899 4.01321 8.57899 4.82147V5.31429H8.08617C6.72595 5.31429 5.62207 6.41817 5.62207 7.77839V16.1563C5.62207 17.5166 6.72595 18.6204 8.08617 18.6204H15.9713C17.3315 18.6204 18.4354 17.5166 18.4354 16.1563V7.7784ZM11.5359 1.86455H12.5216V3.34301H11.5359V1.86455ZM9.56463 4.82147C9.56463 4.5455 9.78148 4.32865 10.0575 4.32865H14C14.276 4.32865 14.4928 4.5455 14.4928 4.82147V5.31429H9.56463V4.82147ZM17.4498 16.1563C17.4498 16.9646 16.7796 17.6348 15.9713 17.6348H8.08617C7.27791 17.6348 6.60771 16.9646 6.60771 16.1563V7.7784C6.60771 6.97014 7.27791 6.29994 8.08617 6.29994H15.9713C16.7796 6.29994 17.4498 6.97014 17.4498 7.7784V16.1563Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.126725"
                    ></path>
                </svg>
                <span class="span_promise">Malin + Goetz soaps</span>
            </div>
            <div class="col-2">
                <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.7594 0.134923H10.5878C10.1928 0.135256 9.8142 0.292357 9.53493 0.571662C9.25566 0.850967 9.09853 1.22949 9.09819 1.62448V9.47871C8.68142 9.54737 8.29341 9.73523 7.98103 10.0193C7.46402 9.56068 6.76393 9.36683 6.08452 9.49399C5.40507 9.62117 4.82274 10.0553 4.50669 10.67C3.92866 10.4685 3.28862 10.5631 2.7937 10.9234C2.29878 11.2836 2.01202 11.8635 2.02615 12.4755C1.55269 12.601 1.17115 12.9514 1.00606 13.4126C0.840978 13.8738 0.913294 14.3866 1.1994 14.7841C1.48568 15.1818 1.94916 15.413 2.43893 15.4027L3.01994 20.0561C3.06616 20.4162 3.24171 20.747 3.51401 20.9871C3.78615 21.2271 4.13643 21.3601 4.49933 21.361C4.63449 21.3693 12.2876 21.3465 12.0774 21.361H20.2699C20.6649 21.3606 21.0435 21.2035 21.3227 20.9242C21.602 20.6449 21.7591 20.2664 21.7595 19.8714V19.499C22.1545 19.4987 22.533 19.3416 22.8123 19.0623C23.0916 18.783 23.2487 18.4045 23.249 18.0095V1.62432C23.2487 1.22933 23.0916 0.850775 22.8123 0.571504C22.533 0.292233 22.1545 0.135106 21.7595 0.134766L21.7594 0.134923ZM10.5878 0.879703H21.7594C21.9569 0.880035 22.1461 0.958504 22.2858 1.09815C22.4254 1.23779 22.5039 1.42698 22.5042 1.62447V5.34837H20.2699V4.97598C20.2695 4.67973 20.1517 4.39578 19.9424 4.1863C19.7329 3.977 19.4489 3.85913 19.1527 3.8588H13.1945C12.8982 3.85913 12.6143 3.977 12.4048 4.1863C12.1955 4.39577 12.0776 4.67973 12.0773 4.97598V5.34837H9.84294V1.62447C9.84327 1.42698 9.92174 1.23779 10.0614 1.09815C10.201 0.958509 10.3902 0.880034 10.5877 0.879703H10.5878ZM19.5251 5.34838H12.8221V4.97599C12.8223 4.77035 12.9888 4.60377 13.1945 4.6036H19.1527C19.3584 4.60377 19.5249 4.77035 19.5251 4.97599V5.34838ZM3.88474 11.3066C4.10302 11.3069 4.31633 11.372 4.4975 11.4935C4.59675 11.5596 4.7216 11.5743 4.83348 11.5329C4.9452 11.4915 5.03048 11.3989 5.06257 11.284C5.14935 10.9711 5.33588 10.6948 5.59357 10.4973C5.85142 10.2998 6.16663 10.1918 6.49148 10.1895C6.96227 10.1888 7.40483 10.4137 7.68181 10.7946C7.75496 10.8847 7.86501 10.9369 7.98105 10.9369C8.09708 10.9369 8.20714 10.8847 8.28029 10.7946C8.50372 10.4982 8.82972 10.296 9.19445 10.2275C9.55919 10.1592 9.93642 10.2297 10.2518 10.4252C10.5673 10.6207 10.7982 10.9271 10.8995 11.2842C10.9326 11.3983 11.0177 11.49 11.1292 11.5313C11.2406 11.5727 11.3651 11.5587 11.4646 11.4935C11.6458 11.372 11.859 11.307 12.0773 11.3067C12.3736 11.307 12.6575 11.4249 12.867 11.6342C13.0763 11.8436 13.1942 12.1276 13.1945 12.4238H8.72582C8.62707 12.4238 8.53231 12.4631 8.46248 12.5329C8.39266 12.6027 8.35343 12.6975 8.35343 12.7962V13.1686C8.35093 13.3733 8.18569 13.5385 7.98104 13.541C7.68479 13.5413 7.40083 13.6592 7.19136 13.8685C6.98205 14.078 6.86419 14.3619 6.86386 14.6582V15.9616C6.86386 16.2701 6.61382 16.5201 6.30527 16.5201C5.99672 16.5201 5.74669 16.2701 5.74669 15.9616V14.6582C5.74635 14.3619 5.62849 14.078 5.41918 13.8685C5.20971 13.6592 4.92576 13.5413 4.6295 13.541H4.25712C4.05147 13.5408 3.88489 13.3743 3.88473 13.1686V12.7962C3.88473 12.6975 3.84549 12.6027 3.77567 12.5329C3.70585 12.4631 3.61109 12.4238 3.51234 12.4238H2.76756C2.76789 12.1276 2.88576 11.8436 3.09506 11.6342C3.30453 11.4249 3.58849 11.307 3.88474 11.3067V11.3066ZM8.76581 13.9605C8.97977 13.7529 9.0998 13.4668 9.09813 13.1686H13.5668C13.831 13.1714 14.0739 13.314 14.205 13.5433C14.3364 13.7725 14.3364 14.0542 14.205 14.2834C14.0739 14.5127 13.831 14.6553 13.5668 14.6581H7.60858C7.60874 14.4525 7.77532 14.2859 7.98097 14.2857C8.27572 14.2881 8.559 14.1709 8.76579 13.9606L8.76581 13.9605ZM13.9359 12.4754L13.9357 12.4756C13.954 11.869 13.6722 11.2924 13.1824 10.934C14.7784 7.79695 19.4905 8.89701 19.525 12.4237C19.5188 13.2358 19.2191 14.0184 18.6813 14.627C18.1435 15.2355 17.4037 15.6288 16.5984 15.7347C15.7931 15.8404 14.9768 15.6516 14.3001 15.2025C14.643 15.0054 14.8933 14.6797 14.9953 14.2976C15.0974 13.9154 15.043 13.5083 14.8442 13.1663C14.6454 12.8244 14.3185 12.5758 13.9358 12.4756L13.9359 12.4754ZM13.5073 15.5292C16.1077 17.8111 20.2967 15.8863 20.2695 12.4236C20.2111 8.09108 14.4606 6.76963 12.5008 10.6148V10.615C12.2341 10.548 11.9553 10.5457 11.6877 10.6085C13.7529 5.73637 20.9268 7.1077 21.0145 12.4237C21.0657 16.2783 16.5202 18.6501 13.4003 16.3848L13.5073 15.5292ZM1.64997 13.9133C1.6513 13.7161 1.73027 13.5274 1.86959 13.3881C2.0089 13.2488 2.19759 13.1698 2.39476 13.1685H3.13954C3.13987 13.4648 3.25774 13.7487 3.46705 13.9582C3.67652 14.1675 3.96047 14.2854 4.25672 14.2857H4.62911C4.83476 14.2859 5.00134 14.4524 5.0015 14.6581H2.39478C2.19728 14.6578 2.00809 14.5793 1.86845 14.4396C1.72881 14.3 1.65034 14.1108 1.65 13.9133L1.64997 13.9133ZM3.75847 19.963L3.1889 15.4029H5.00148V15.9614C5.00547 16.4244 5.25484 16.8505 5.65633 17.081C6.05798 17.3112 6.55173 17.3112 6.9534 17.081C7.35488 16.8505 7.60425 16.4244 7.60825 15.9614V15.4029H12.7723L12.2028 19.9626C12.1798 20.143 12.0921 20.3087 11.9557 20.4291C11.8194 20.5493 11.6442 20.616 11.4623 20.6165H4.49883C4.31713 20.616 4.1419 20.5495 4.00558 20.4293C3.86942 20.3091 3.78148 20.1435 3.75837 19.9633L3.75847 19.963ZM21.0144 19.8714C21.014 20.0689 20.9356 20.2581 20.7959 20.3978C20.6563 20.5374 20.4671 20.6159 20.2696 20.6162H12.7482C12.9118 20.2659 13.0015 19.8856 13.0115 19.499H21.0147L21.0144 19.8714ZM21.7591 18.7543H13.1044L13.2977 17.2067C16.9232 19.4695 21.8163 16.7006 21.7593 12.4235C21.6688 6.39974 13.6067 4.71015 11.0796 10.1423V10.1424C10.7492 9.79432 10.3155 9.56207 9.84285 9.47997V6.09306H22.5041V18.0095C22.5038 18.207 22.4253 18.3962 22.2857 18.5359C22.146 18.6755 21.9568 18.754 21.7593 18.7543L21.7591 18.7543Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.215433"
                    ></path>
                    <path
                        d="M18.4084 3.48824C18.8046 3.48376 19.1686 3.2698 19.3655 2.926C19.5623 2.58221 19.5623 2.15994 19.3655 1.81615C19.1686 1.47219 18.8045 1.25842 18.4084 1.25391C18.0122 1.25839 17.6482 1.47235 17.4513 1.81615C17.2545 2.15995 17.2545 2.58221 17.4513 2.926C17.6482 3.26996 18.0123 3.48373 18.4084 3.48824ZM18.4084 1.99869C18.6121 2.00151 18.7756 2.16742 18.7756 2.37108C18.7756 2.57473 18.612 2.74064 18.4084 2.74346C18.2047 2.74064 18.0412 2.57473 18.0412 2.37108C18.0412 2.16742 18.2048 2.00151 18.4084 1.99869Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.215433"
                    ></path>
                    <path
                        d="M21.0148 3.48824C21.411 3.48376 21.7751 3.2698 21.9719 2.926C22.1687 2.58221 22.1687 2.15994 21.9719 1.81615C21.7751 1.47219 21.411 1.25842 21.0148 1.25391C20.6187 1.25839 20.2546 1.47235 20.0578 1.81615C19.8609 2.15995 19.8609 2.58221 20.0578 2.926C20.2546 3.26996 20.6187 3.48373 21.0148 3.48824ZM21.0148 1.99869C21.2185 2.00151 21.3821 2.16742 21.3821 2.37108C21.3821 2.57473 21.2185 2.74064 21.0148 2.74346C20.8112 2.74064 20.6476 2.57473 20.6476 2.37108C20.6476 2.16742 20.8112 2.00151 21.0148 1.99869Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.215433"
                    ></path>
                    <path
                        d="M6.49141 17.6387C6.09524 17.6432 5.73118 17.8571 5.53434 18.2009C5.33751 18.5447 5.33751 18.967 5.53434 19.3108C5.73118 19.6547 6.09527 19.8685 6.49141 19.873C6.88757 19.8685 7.25164 19.6546 7.44847 19.3108C7.64531 18.967 7.64531 18.5447 7.44847 18.2009C7.25164 17.857 6.88755 17.6432 6.49141 17.6387ZM6.49141 19.1282C6.28776 19.1254 6.12417 18.9595 6.12417 18.7558C6.12417 18.5522 6.28776 18.3863 6.49141 18.3835C6.69506 18.3863 6.85864 18.5522 6.85864 18.7558C6.85864 18.9595 6.69506 19.1254 6.49141 19.1282Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.215433"
                    ></path>
                </svg>
                <span class="span_promise">Washer + Dryer in-unit</span>
            </div>
            <div class="col-2">
                <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.5887 18.6204H2.58645C2.38238 18.6204 2.2168 18.4548 2.2168 18.2507V15.2939C2.2168 15.0898 2.38238 14.9242 2.58645 14.9242H11.1682L13.2011 6.79267H2.5867C2.38263 6.79267 2.21705 6.62708 2.21705 6.42301V1.24856C2.21705 1.04449 2.38263 0.878906 2.5867 0.878906H19.5889C19.7923 0.878906 19.9586 1.04449 19.9586 1.24856V18.2508C19.9586 18.4549 19.7923 18.6204 19.5889 18.6204L19.5887 18.6204ZM2.95617 17.8812H19.219V1.6184H2.95617V6.05374H13.6748C13.7886 6.05374 13.8958 6.10621 13.9667 6.19569C14.0369 6.28442 14.0607 6.4005 14.0333 6.51288L11.8156 15.3836C11.7749 15.5484 11.6272 15.6637 11.4571 15.6637H2.95618V17.8814L2.95617 17.8812Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.126725"
                    ></path>
                    <path d="M6.65234 6.79492H7.39152V8.27341H6.65234V6.79492Z" fill="white" stroke="white" stroke-width="0.126725"></path>
                    <path
                        d="M7.45359 15.6638H6.59016C4.99423 15.6638 3.69531 14.365 3.69531 12.769V10.1197C3.69531 9.91558 3.8609 9.75 4.06497 9.75H9.97885C10.1829 9.75 10.3485 9.91558 10.3485 10.1197V12.769C10.3485 14.3649 9.04972 15.6638 7.45366 15.6638H7.45359ZM4.43462 10.4891V12.7688C4.43462 13.9568 5.40152 14.9244 6.59016 14.9244H7.45359C8.64227 14.9244 9.60914 13.9568 9.60914 12.7688V10.4891H4.43462Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.126725"
                    ></path>
                    <path
                        d="M4.43447 13.4484H3.31017C2.707 13.4484 2.2168 12.9576 2.2168 12.3551V11.5856C2.2168 10.9831 2.7076 10.4922 3.31017 10.4922H3.69528V11.2314H3.31017C3.11501 11.2314 2.9561 11.3903 2.9561 11.5854V12.3549C2.9561 12.5508 3.115 12.709 3.31017 12.709H4.43447V13.4484Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.126725"
                    ></path>
                    <path
                        d="M18.1107 17.1397H15.1538C14.9505 17.1397 14.7842 16.9741 14.7842 16.77V15.2915C14.7842 15.0875 14.9505 14.9219 15.1538 14.9219H18.1107C18.314 14.9219 18.4803 15.0875 18.4803 15.2915V16.77C18.4803 16.9741 18.314 17.1397 18.1107 17.1397ZM15.5234 16.4005H17.741V15.6613H15.5234V16.4005Z"
                        fill="white"
                        stroke="white"
                        stroke-width="0.126725"
                    ></path>
                </svg>
                <span class="span_promise">Espresso Machine</span>
            </div>
        </div>
    </div>
</main>

<!-- Modal for Image Slider -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" id="carouselImages">
                        <!-- Carousel items will be inserted dynamically -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<!-- FullCalendar JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>
    <script>

      // Image paths (you can add or remove images as needed)
       const images = @json($property_detail->images);

       let currentIndex = 0;

       // Open the slider when an image is clicked
       function openSlider(index) {
           currentIndex = index; // Set the starting index for the carousel
           const carouselInner = document.getElementById("carouselImages");
           carouselInner.innerHTML = "";  // Clear any previous images

           // Create carousel items dynamically
           images.forEach((image, i) => {
               const isActive = i === currentIndex ? "active" : "";
               const item = `
                   <div class="carousel-item ${isActive}">
                       <img src="{{ asset('storage/') }}/${image}" class="d-block w-100" alt="Image ${i + 1}">
                   </div>
               `;
               carouselInner.innerHTML += item;
           });
       }

      // Image Slider End


      $(document).ready(function() {
          let selectedStartDate = null;
          let selectedEndDate = null;
          let events = @json($events); // Pass events from the controller (server-side)
          let isValidDateRange = true; // Flag to track if the selected date range is valid

          // Initialize the Check-In Calendar only when the user focuses on the Check-In input field
          $('#checkin').on('focus', function() {
              $('#from-calendar').toggle();
              $('#to-calendar').hide();

              if (!$('#from-calendar').data('initialized')) {
                  initializeCalendar('#from-calendar', 'checkin');
              }
          });

          // Initialize the Check-Out Calendar only when the user focuses on the Check-Out input field
          $('#checkout').on('focus', function() {
              $('#to-calendar').toggle();
              $('#from-calendar').hide();

              if (!$('#to-calendar').data('initialized')) {
                  initializeCalendar('#to-calendar', 'checkout');
              }
          });

          // Function to initialize the calendar
          function initializeCalendar(calendarId, field) {
              $(calendarId).fullCalendar({
                  events: events,
                  selectable: true,
                  select: function(start, end) {
                      if (field === 'checkin') {
                          selectedStartDate = start;
                          $('#checkin').val(moment(start).format('YYYY-MM-DD'));
                      } else if (field === 'checkout') {
                          selectedEndDate = start;

                          if (!validateMinimumStay(start)) {
                              alert("You must stay at least the minimum required days for the selected range.");
                              isValidDateRange = false;
                              $('#checkout').val('');
                              return;
                          }

                          isValidDateRange = true;
                          $('#checkout').val(moment(start).format('YYYY-MM-DD'));
                      }

                      if (isValidDateRange) {
                          $(calendarId).hide();
                      }

                      calculatePrice();
                      $(this).fullCalendar('unselect');
                  },
                  header: { left: '', center: 'title', right: '' },
                  themeSystem: 'bootstrap4',
                  eventRender: function(event, element) {
                      element.find('.fc-title').html(""); // Clear the title (price)
                  }
              });

              $(calendarId).data('initialized', true);
          }

          // Function to calculate the total price based on selected dates
          function calculatePrice() {
              if (selectedStartDate && selectedEndDate) {
                  let totalPrice = 0;
                  let totalDays = 0;
                  let selectedStart = moment(selectedStartDate);
                  let selectedEnd = moment(selectedEndDate).add(1, 'days'); // Add 1 day to include the end date

                  let selectedDates = [];
                  let currentDay = selectedStart.clone();

                  while (currentDay.isBefore(selectedEnd)) {
                      selectedDates.push(currentDay.format('YYYY-MM-DD'));
                      currentDay.add(1, 'days');
                  }

                  selectedDates.forEach((date) => {
                      let dailyPrice = getDailyPrice(date);  // Get price for the date
                      totalPrice += dailyPrice;
                      totalDays++;
                  });

                  let avgPrice = (totalDays > 0) ? totalPrice / totalDays : 0;

                  $('#avg-price').text('₹' + avgPrice.toFixed(2));
                  $('#total-price').text('₹' + totalPrice.toFixed(2));
              }
          }

          // Function to get the daily price based on selected date
          function getDailyPrice(date) {
              let dailyPrice = parseFloat(@json($default_price)); // Default price
              let minStay = parseInt(@json($default_min_stay)); // Default minimum stay

              events.forEach(event => {
                  let eventStart = moment(event.start);
                  let eventEnd = moment(event.end);

                  if (moment(date).isBetween(eventStart, eventEnd, 'day', '[]')) {
                      dailyPrice = parseFloat(event.price);
                      minStay = parseInt(event.min_stay);  // Use the min_stay for this date range
                  }
              });

              return dailyPrice;
          }

          // Function to validate the minimum stay condition based on the selected checkout date
          function validateMinimumStay(checkoutDate) {
              if (selectedStartDate && checkoutDate) {
                  let selectedStart = moment(selectedStartDate);
                  let selectedEnd = moment(checkoutDate);
                  let totalDays = selectedEnd.diff(selectedStart, 'days');

                  let isValid = false; // We will set this to true once we find a valid condition

                  // Check if the selected dates meet the minimum stay requirement
                  events.forEach(event => {
                      let eventStart = moment(event.start);
                      let eventEnd = moment(event.end);

                      // Check if the selected dates fall within any special pricing event range
                      if (selectedStart.isBetween(eventStart, eventEnd, 'day', '[]') || selectedEnd.isBetween(eventStart, eventEnd, 'day', '[]') || 
                          (selectedStart.isBefore(eventStart) && selectedEnd.isAfter(eventEnd))) {
                          
                          // If the selected range falls within a special event, check the minimum stay
                          if (totalDays >= event.min_stay) {
                              isValid = true;
                          }
                      }
                  });

                  // If no special event applies, use the default minimum stay
                  if (!isValid) {
                      // Apply default minimum stay validation
                      if (totalDays >= @json($default_min_stay)) {
                          isValid = true;
                      }
                  }

                  return isValid; // Return whether the selected stay meets the minimum stay requirement
              }
              return true; // Return true if no dates are selected yet
          }

      });


    $(document).on('click','.request_book',function(){
        var checkin = $("#checkin").val();
        var checkout = $("#checkout").val();
        var average = $("#avg-price").text();
        var total = $("#total-price").text();
        var property_id = "{{ $property_detail->id }}";
        var url = "{{ route('request_to_book') }}";

        Swal.fire({
            title: "Write a Message",
            input: "textarea",
            inputAttributes: {
                autocapitalize: "off",
                placeholder: "Write Your Message here"
            },
            showCancelButton: true,
            confirmButtonText: "Send & Book",
            showLoaderOnConfirm: true, // This will show a loading spinner while the AJAX request is being processed
            preConfirm: (inputValue) => {
                // You can retrieve the input value here
                // Make sure to handle if the user didn't input anything
                if (!inputValue) {
                    Swal.showValidationMessage("Please enter your message.");
                    return false;  // Prevent the request from being sent
                }

                // Set up your AJAX request
                return new Promise((resolve, reject) => {
                    $.ajax({
                        url: url, // Replace `url` with the actual URL to send the request to
                        method: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            checkin: checkin,  // Make sure `checkin`, `checkout`, `average`, `total`, and `property_id` are defined
                            checkout: checkout,
                            average: average,
                            total: total,
                            property_id: property_id,
                            message: inputValue
                        },
                        success: function(response) {
                            // On success, resolve the Promise and display the success message
                            resolve();
                            Swal.fire({
                                title: "Success",
                                text: response.message,
                                icon: "success"
                            }).then(() => {
                                window.location.reload();  // Optionally reload the page after success
                            });
                        },
                        error: function(response) {
                            // On error, reject the Promise and show an error message
                            reject();
                            Swal.fire({
                                title: "Error!",
                                text: response.responseJSON.message,
                                icon: "error"
                            });
                        }
                    });
                });
            }
        });
    })
    </script>
@endsection