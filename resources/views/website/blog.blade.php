
@extends('website\webtemplate')
@section('web-content')



    <div class="pag-banner-area blog-pages-area jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content">
                <h1>Blog</h1>
                <ul>
                    <li><a href="">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="{{asset('website/images/page/page-banner-shape-1.webp')}}" alt="images">
        </div>
    </div>

    <div class="blog-page-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-blog-page-content">
                        <div class="row">
                            @foreach($blogs as $blog)
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-4"  data-cue="slideInUp">
                                    <div class="single-blog-card blog-card-page" style="height: 70vh">
                                        <div class="blog-img">
                                            <a href="">
                                                <img src="{{ asset('uploads/featured-images/'.$blog->featured_image) }}" alt="{{ $blog->topic }}" style="height: 30vh;  object-fit: cover; width: 100%" class="img-fluid">
                                            </a>
                                            <div class="blog-time">
                                                <span>{{ $blog->created_at->format('d M Y') }}</span>
                                            </div>
                                        </div>
                                        <div class="single-blog-content">
                                            <ul>
                                                <li>Wriiten By &nbsp;&nbsp; <a href="">{{ $blog->author_name }}</a></li>
                                                <li> Lazizi Halal Cuisine Restaurant</li>
                                            </ul>
                                            <h4>{{ $blog->topic }}</h4>
                                            <button type="submit" class="default-btn" style="margin-top: 30px; "> <a href="{{ route('blog.detail', $blog->id ) }}"   style="width: 80px; text-decoration: none;color: white" >Read More</a></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="pagination-area">
                            <a href="blog.html" class="next page-numbers">
                                <i class="bx bx-chevron-left"></i>
                            </a>
                            <span class="page-numbers current" aria-current="page">01</span>
                            <a href="#" class="page-numbers">02</a>
                            <a href="#" class="page-numbers">03</a>
                            <a href="#" class="next page-numbers">
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>






    @endsection
