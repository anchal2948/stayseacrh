@extends('user.layouts.app')

@section('content')

<main>
    <div class="blog_banner privacy_banner">
        <div class="container">
            <div class="row justify-content-between mx-0">
                <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                    <div class="banner_text">
                        <h1 class="text-left text-white">
                            Privacy Policy </h1>
                        <p class="text-white">
                            Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="Policy my-5">
        <div class="container">
            <div class="row justify-content-center mx-0">
                <div class="col-lg-10">
                    <h2 class="pb-3">
                        {{ $privacy->heading ?? 'No data found.' }}
                    </h2>
                    <p class="pb-3">
                        @isset($privacy->image)
                    	   <img src="{{ $privacy->image }}" height="100" width="100">
                        @endisset
                        {{ $privacy->description ?? '' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection