@extends('user.layouts.app')

@section('content')
<main>
    <section class="blog_banner findout">
        <div class="container">
            <div class="row mx-0">
                <div class="col-lg-8 col-12">
                    <h3>
                        Find Out How Much more you can <br />
                        earns with Search and Stay
                    </h3>
                    <p>
                        Book a Rove home with the quality and care of a 5-star hotel. Luxury finishes, modern workstations, <br />
                        premium amenities, and 24/7 guest concierge.
                    </p>
                </div>
                <div class="col-lg-4 p-0 col-12">
                    <div class="property_form">
                        <form>
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="exampleText" class="form-label">Full Name</label>
                                    <input type="text" class="form-control property_field" id="exampleText" aria-describedby="emailHelp" />
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="Number" class="form-label">Email</label>
                                    <input type="password" class="form-control property_field" id="Number" />
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                                    <input type="password" class="form-control property_field" id="exampleInputPassword1" />
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="exampleText" class="form-label">Property Address</label>
                                    <input type="text" class="form-control property_field" id="exampleText" aria-describedby="emailHelp" />
                                </div>
                            </div>
                            <div class="m-auto d-flex justify-content-center">
                                <button type="submit" class="btn btn_property_showmore">Show More</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row g-5 mx-0">
                <div class="text-center my-3 mb-0 mb-lg-3 mt-5">
                    <h3 class="pt-5">
                        The Largest Luxury Collection in NYC
                    </h3>
                    <p>
                        Experience Rove’s premier furnised residences across manhattan and Brooklyn.
                    </p>
                </div>
                @foreach($properties as $property)
	                <div class="col-lg-4">
	                    <div class="image_card">
	                        <img src="{{ asset('storage/'.$property->images[0]) }}" class="property_card_img" alt="" />
	                        <div class="d-flex pt-4 justify-content-between">
	                            <p>
	                                {{ $property->title }}
	                            </p>
	                            <div>
	                                <a href="{{ route('property-detail',['id' => $property->id]) }}" class="text-white">Discover <img src="assest/images/right-arrow.png" width="23" class="ps-2" alt="right-arrow" /></a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
                @endforeach
                <!-- <div class="col-lg-4">
                    <div class="image_card">
                        <img src="assest/images/average/2.webp" class="property_card_img" alt="" />
                        <div class="d-flex pt-4 justify-content-between">
                            <p>
                                Noorman
                            </p>
                            <div>
                                <a href="" class="text-white">Discover <img src="assest/images/right-arrow.png" width="23" class="ps-2" alt="right-arrow" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image_card">
                        <img src="assest/images/average/3.webp" class="property_card_img" alt="" />
                        <div class="d-flex pt-4 justify-content-between">
                            <p>
                                Astro House
                            </p>
                            <div>
                                <a href="" class="text-white">Discover <img src="assest/images/right-arrow.png" width="23" class="ps-2" alt="right-arrow" /></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <div class="px-lg-5 my-5">
        <div class="row mx-0">
            <div class="col-lg-6 col-12">
                <h4>
                    Out performance
                </h4>
                <p>Search a Stay monthly furnished rentals offer property owner the Opportunity to make more money with less work. Our Comp vs Streeteasy Average <br /></p>

                <p>
                    Search and Stay helps owners get luxury properties rent-ready, then make money by placing high paying monthly clients
                </p>
                <p>
                    <span class="text-success">
                        44%
                    </span>
                    Search a stay premium
                </p>
                <p>
                    <span class="text-success">
                        86%
                    </span>
                    2023 Portfolio Occupancy
                </p>
            </div>
        </div>
    </div>
    <div class="px-lg-5">
        <div class="row my-5 mx-0">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <img src="assest/images/average/4.jpg" class="w-100 property_img_card" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-3">
                        <h5>
                            End-to-end revenue management
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore iusto veritatis nesciunt molestias
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <img src="assest/images/average/5.jpg" class="w-100 property_img_card" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-3">
                        <h5>
                            End-to-end revenue management
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore iusto veritatis nesciunt molestias
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card cardss border-0">
                    <div>
                        <img src="assest/images/average/6.jpg" class="w-100 property_img_card" alt="property1" />
                    </div>

                    <div class="card-body ps-1 pt-3">
                        <h5>
                            End-to-end revenue management
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore iusto veritatis nesciunt molestias
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row my-5 mx-0">
            <h3>
                Clientele
            </h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="col-12 col-lg-4">
                <h5><i class="fa-solid fa-check pe-2"></i> Background Checks</h5>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptas ab saepe nulla, eligendi temporibus architecto deleniti ullam expedita nemo!
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <h5><i class="fa-solid fa-check pe-2"></i> Background Checks</h5>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptas ab saepe nulla, eligendi temporibus architecto deleniti ullam expedita nemo!
                </p>
            </div>
         <div class="col-12 col-lg-4">
                <h5><i class="fa-solid fa-check pe-2"></i> Background Checks</h5>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptas ab saepe nulla, eligendi temporibus architecto deleniti ullam expedita nemo!
                </p>
            </div>
        </div>
        <hr />
        <div class="row my-5 mx-0">
            <h3 class="pb-4">
                Success Story
            </h3>
            <div class="col-12 col-lg-4">
                <h3 class="fs-5">
                    {{ $success->heading ?? 'Success story' }}
                </h3>
                <div class="d-flex">
                    <div>
                        <h6 class="text-white fw-bold">
                            ${{ $success->annual_revenue ?? 0 }}
                        </h6>
                        <p class="water_text">
                            Anual Revenue
                        </p>
                    </div>
                    <div class="ps-5">
                        <h6 class="text-white fw-bold">
                            ${{ $success->baseline_revenue ?? 0 }}
                        </h6>
                        <p class="water_text">
                            Baseline Revenue
                        </p>
                    </div>
                </div>
                <div>
                    <h6 class="text-gray fw-bold">
                        {{ $success->pricing_premium ?? 0 }}%
                    </h6>
                    <p class="water_text">
                        Pricing premium
                    </p>
                </div>
                <p>
                    {{ $success->short_description ?? '' }}
                </p>
            </div>
            <div class="col-lg-8">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @isset($success)
                        @php
                            $images = json_decode($success->images);
                        @endphp
                        @foreach($images as $key => $image)
                            <div class="carousel-item @if($key == 0) active @endif">
                                <img src="{{ asset('storage/'.$image) }}" class="d-block property_carousel" alt="room" />
                            </div>
                        @endforeach
                        @endisset
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row my-5 g-4 mx-0">
            <h3>
                How It Works
            </h3>
            <p class="pb-4">
                Submit your property. and if it meet the Search Stay brand standard, we help get it guest ready.
            </p>
            <div class="col-lg-6 pe-lg-5">
                <h5>
                    1. We evalaute your home
                </h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequuntur rerum saepe, fugiat unde aperiam?
                </p>
            </div>
            <div class="col-lg-6">
                <h5>
                    2. We evalaute your home
                </h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequuntur rerum saepe, fugiat unde aperiam?
                </p>
            </div>
            <div class="col-lg-6 pe-lg-5">
                <h5>
                    3. We evalaute your home
                </h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequuntur rerum saepe, fugiat unde aperiam?
                </p>
            </div>
            <div class="col-lg-6">
                <h5>
                    4. We evalaute your home
                </h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequuntur rerum saepe, fugiat unde aperiam?
                </p>
            </div>
        </div>
        <hr />
        <div class="my-5 row mx-0">
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <h5 class="fw-bold">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </h5>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, ea quidem qui quasi culpa tempora!
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus soluta recusandae quia ipsum ab dignissimos omnis id illum placeat possimus?
                    </p>
                </div>
            </div>
            <div class="col-6">
                <img src="assest/images/average/Distribution.png" class="w-100 object-fit-contain" height="320" alt="" />
            </div>
        </div>
    </div>

    <section class="container">
        <div class="accordion" id="accordionExample">
            <h4>
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
                                    <strong>Stays of 180 Nights or Less:</strong> $10,000 credit card hold upon check-in. <br />
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
    </section>
</main>

@endsection