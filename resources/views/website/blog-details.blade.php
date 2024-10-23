
@extends('website\webtemplate')
@section('web-content')


    <div class="pag-banner-area shop-pages-area jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content">
                <h1>Blog Details</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="{{asset('website/assets/images/page/page-banner-shape-1.webp')}}" alt="images">
        </div>
    </div>


    <div class="blog-page-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-blog-details-content">
                        <div class="blog-details-img">
                            <img src="{{ asset('uploads/featured-images/'.$blog->featured_image) }}" alt="{{ $blog->topic }}" style="height: 60vh;  object-fit: cover; width: 100%">
                            <div class="blog-time">
                                <span>{{ $blog->created_at->format('d M Y') }}</span>
                            </div>
                        </div>
                        <div class="blog-details-content">
                            <ul>
                                <li>By <a href="blog-details.html">{{ $blog->author_name }}</a></li>
                                <li> lazizi Halal Cuisine Restaurant</li>
                            </ul>
                        </div>
                        <h2>{{ $blog->topic }}</h2>
                        <p>{{ $blog->content }}</p>

                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="blog-details-img-two">
                                    <img src="{{ asset('uploads/description-images/'.$blog->description_image) }}" alt="{{ $blog->title }}">
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="portfolio-details-list">
                                <ul>
                                    <li>Share : </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="bx bxl-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portfolio-details-list-two">
                                <ul>
                                    <li>Tags: </li>
                                    <li>
                                        <a href="#">Food</a>
                                    </li>
                                    <li>
                                        <a href="#">Pizza</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form class="blog-details-form">
                            <h2>Comments Reply</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="details-from">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="details-from">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="details-from">
                                        <textarea class="form-control" placeholder="Your Review" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Save my info for the next comment
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="default-btn">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-right-content">

                        <div class="blog-tags">
                                <h2>Tags</h2>
                            <ul>
                                @foreach(explode(',', $blog->tags) as $tag)
                                    <li><a href="#">{{ trim($tag) }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_ruzo_posts_thumb">
                            <h3 class="widget-title">Recent Posts</h3>
                        @foreach($recentblog as $blg)
                           <article class="item">
                            <a href="blog-details.html" class="thumb">
                                <span  role="img"><img src="{{ asset('uploads/featured-images/'.$blg->featured_image) }}" style="height: 90px; width: 90px; border-radius: 50%" alt="icon"></span>
                            </a>
                            <div class="info">
                                <h4><a href="">{{ $blg->topic}}</a></h4>
                                <h4 class="title usmall">

                                    <span>Written  By <a href="blog-details.html">{{ $blog->author_name }}</a></span>

                                    <div class="col-lg-6">
                                        <button type="submit" class="default-btn"> <a href="{{ route('blog.detail', $blg->id ) }}"   style="width: 80px" >Read More</a></button>
                                    </div>
                                </h4>

                            </div>
                        </article>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @endsection
