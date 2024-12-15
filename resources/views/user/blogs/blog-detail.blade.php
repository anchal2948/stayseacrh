@extends('user.layouts.app')

@section('content')
<main>
    <div class="blog_deatil">
        <div class="container">
            <div class="row my-5 justify-content-center">
                <div class="col-lg-10">
                    <h1 class="blogdetail_heading1 pb-3">
                        {{ $blog->heading }}
                    </h1>
                    <div class="blog-img"><img src="{{ asset('storage/'.$blog->image) }}" class="image_blog"
                        alt="blogimg1">
                    </div>
                    <div class="details py-4">
                        <p class="pb-2">
                            {{ $blog->description }}
                        </p>
                    </div>
                    <!-- <h2 class="pb-2">
                        How would you describe your job & responsibilities to someone who doesn’t work in your
                        field?
                    </h2>
                    <p class="pb-2">
                        As part of the acquisitions team at Rove, I conduct daily check-ins with our real estate
                        team and individual deal makers, follow up on opportunities, speak with prospective
                        funds/clients/owners/guests, establish new partnerships with owners/brokers/property owners,
                        and build out infrastructure for long term growth.
                    </p>
                    <img src="assest/images/blog-detail/1.webp" class="w-100 image_blog2 pb-2" alt="blog2"> -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection