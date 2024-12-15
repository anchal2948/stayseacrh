@extends('user.layouts.app')

@section('content')
<main>
    <div class="blog_banner terms_banner">
        <div class="container">
            <div class="row justify-content-between mx-0">
                <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                    <div class="banner_text">
                        <h1 class="text-left text-white">
                            Terms Of Conditions
                        </h1>
                        <p class="text-white">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="terms my-5">
        <div class="container">
            <div class="row justify-content-center mx-0">
                <div class="col-lg-10">
                    <h2 class="pb-3">
                        {{ $terms->heading ?? '' }}
                    </h2>
                    <p class="pb-3">
                        {{ $terms->description ?? '' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection