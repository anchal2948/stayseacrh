@extends('user.layouts.app')

@section('content')
<section class="blog_banner luxury_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="text-center">
                    <h1 class="text-black">
                        Luxury management for <br />
                        the world’s finest homes
                    </h1>
                    <p class="text-black">
                        Rove short term rentals properties generate 12%+ more than comparable managers and self-managed properties
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<main style="background-color: #fff; color: black;">
    <section>
        <div class="container">
            <div class="row g-5 my-5">
                <div class="text-center my-3">
                    <h3>
                        Completly hand-off property ownership
                    </h3>
                </div>
                @foreach($properties as $property)
                    <div class="col-lg-4">
                        <a href="{{ route('property-detail',['id' => $property->id]) }}" class="text-black">
                        <div class="image_card">
                            <img src="{{ asset('storage/'.$property->images[0]) }}" class="property_card_img" alt="" />
                            <div class="pt-4">
                                <h5 class="ownership_heading">
                                    {{ $property->title }}
                                </h5>
                                <p class="ownership_text">
                                    {{ Str::limit($property->description, 100) }}
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
                <!-- <div class="col-lg-4">
                    <div class="image_card">
                        <img src="assest/images/average/2.webp" class="property_card_img" alt="" />
                        <div class="pt-4">
                            <h5 class="ownership_heading">
                                Leonard | Greenpoint | Penthouse Loft with Private Roof
                            </h5>
                            <p class="ownership_text">
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image_card">
                        <img src="assest/images/average/3.webp" class="property_card_img" alt="" />
                        <div class="pt-4">
                            <h5 class="ownership_heading">
                                Leonard | Greenpoint | Penthouse Loft with Private Roof
                            </h5>
                            <p class="ownership_text">
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ...
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="blog_banner property_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex align-items-center">
                    <div>
                        <h3 class="water_headings">
                            List Your property on <br />
                            Search a Stay Luxury <br />
                            Market place
                        </h3>
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    <div class="property_form">
                        <form>
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="exampleText" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="exampleText" aria-describedby="emailHelp" />
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="Number" class="form-label">Email</label>
                                    <input type="password" class="form-control" id="Number" />
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" />
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="exampleText" class="form-label">Property Address</label>
                                    <input type="text" class="form-control" id="exampleText" aria-describedby="emailHelp" />
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
    <section class="container">
        <div class="row my-5">
            <div class="col-4">
                <h3 class="water_heading pb-5">
                    {{ $success->heading ?? 'Success story' }}
                </h3>
                <div class="d-flex">
                    <div>
                        <h6 class="text-black fw-bold">
                            ${{ $success->annual_revenue ?? 0 }}
                        </h6>
                        <p class="water_text">
                            Anual Revenue
                        </p>
                    </div>
                    <div class="ps-5">
                        <h6 class="text-black fw-bold">
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

                <p class="pt-4 pe-lg-5 pe-3 water_text">
                    {{ $success->short_description ?? '' }}
                </p>
            </div>
            <div class="col-8">
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
    </section>
    <hr />
    <section class="how_itswork container">
        <div class="row">
            <h4 class="text-center pb-3 water_heading">
                How It Works
            </h4>
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <h6 class="propersal_text">
                        <span class="number_span pe-1">
                            01
                        </span>
                        Receive property proposal
                    </h6>
                    <h6 class="propersal_text">
                        <span class="number_span pe-1">
                            02
                        </span>
                        Review contract terms
                    </h6>
                    <h6 class="propersal_text">
                        <span class="number_span pe-1">
                            03
                        </span>
                        Sign contract
                    </h6>
                    <h6 class="propersal_text">
                        <span class="number_span pe-1">
                            04
                        </span>
                        Meet with onboarding team
                    </h6>
                    <h6 class="propersal_text">
                        <span class="number_span pe-1">
                            05
                        </span>
                        Coordinate property upgrades
                    </h6>
                    <h6 class="propersal_text">
                        <span class="number_span pe-1">
                            06
                        </span>
                        Rove begins marketing property
                    </h6>
                    <h6 class="propersal_text">
                        <span class="number_span pe-1">
                            07
                        </span>
                        First guest stay booked
                    </h6>
                </div>
            </div>
            <div class="col-6">
                <img src="assest/images/HowItWork.jpeg" class="w-100 how_it_img" alt="howitwork" />
            </div>
        </div>
    </section>
    <section>
        <img src="assest/images/property-banner.jpg" class="w-100 banner_props" alt="" />
    </section>
</main>

@endsection