@extends('user.layouts.app')

@section('content')
<main>
    <div class="blog_banner">
        <div class="container">
            <div class="row justify-content-between mx-0">
                <div class="col-lg-4 col-md-6 col-12 d-flex align-items-center">
                    <div class="banner_text">
                        <h1 class="text-left text-white">
                            Blogs
                        </h1>
                        <p class="text-white">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog my-5">
        <div class="container">
            <div class="row mx-0">
                <h3 class="text-center pb-4">
                    Our Blog
                </h3>
                @foreach($blogs as $blog)
	                <div class="col-lg-4 col-md-6 col-12">
	                    <div class="card card_blog">
	                        <span class="badge">{{ date('F d, Y',strtotime($blog->created_at)) }}</span>
	                        <a href=""><img src="{{ asset('storage/'.$blog->image) }}" class="blog_img" height="250" alt="blogimg" /></a>

	                        <div class="card-body px-3 pt-4">
	                            <h5 class="blog-title">{{ $blog->heading }}</h5>
	                            <p class="blog-text">{{ Str::limit($blog->description,100) }}</p>
	                            <a href="{{ route('blog_detail',['id' => $blog->id]) }}" class="btn btn_blogcontinue">Continue Reading</a>
	                        </div>
	                    </div>
	                </div>
                @endforeach
                <!-- <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card_blog">
                        <span class="badge">April 21, 2024</span>
                        <a href=""><img src="assest/images/blog/blog_img2.webp" class="blog_img" height="250" alt="blogimg" /></a>

                        <div class="card-body px-3 pt-4">
                            <h5 class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, explicabo.</h5>
                            <p class="blog-text">Are you ready to elevate your travel experience to unparalleled heights of [...]</p>
                            <a href="" class="btn btn_blogcontinue mb-3">Continue Reading</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card_blog">
                        <span class="badge">April 21, 2024</span>
                        <a href=""><img src="assest/images/blog/blog_img3.webp" class="blog_img" height="250" alt="blogimg" /></a>

                        <div class="card-body px-3 pt-4">
                            <h5 class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, explicabo.</h5>
                            <p class="blog-text">Are you ready to elevate your travel experience to unparalleled heights of [...]</p>
                            <a href="" class="btn btn_blogcontinue mb-3">Continue Reading</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card_blog">
                        <span class="badge">April 21, 2024</span>
                        <a href=""><img src="assest/images/blog/blog_img4.webp" class="blog_img" height="250" alt="blogimg" /></a>

                        <div class="card-body px-3 pt-4">
                            <h5 class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, explicabo.</h5>
                            <p class="blog-text">Are you ready to elevate your travel experience to unparalleled heights of [...]</p>
                            <a href="" class="btn btn_blogcontinue mb-3">Continue Reading</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card_blog">
                        <span class="badge">April 21, 2024</span>
                        <a href=""><img src="assest/images/blog/blog_img5.webp" class="blog_img" height="250" alt="blogimg" /></a>

                        <div class="card-body px-3 pt-4">
                            <h5 class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, explicabo.</h5>
                            <p class="blog-text">Are you ready to elevate your travel experience to unparalleled heights of [...]</p>
                            <a href="" class="btn btn_blogcontinue mb-3">Continue Reading</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card_blog">
                        <span class="badge">April 21, 2024</span>
                        <a href=""><img src="assest/images/blog/blog_img3.webp" class="blog_img" height="250" alt="blogimg" /></a>

                        <div class="card-body px-3 pt-4">
                            <h5 class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, explicabo.</h5>
                            <p class="blog-text">Are you ready to elevate your travel experience to unparalleled heights of [...]</p>
                            <a href="" class="btn btn_blogcontinue mb-3">Continue Reading</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</main>

@endsection