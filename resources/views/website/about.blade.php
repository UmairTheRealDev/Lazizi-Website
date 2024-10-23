@extends('website\webtemplate')
@section('web-content')


    <div class="pag-banner-area jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content">
                <h1>About Us</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="{{ asset('website/images/page/page-banner-shape-1.webp')}}" alt="images">
        </div>
    </div>

<!-- About Us Section -->
<div class="about-area about-page pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-cue="slideInLeft" data-duration="800">
                <div class="about-image">
                    {{-- <img src="{{ asset('website/images/about/about-page-img-1.webp')}}" alt="Our Restaurant"> --}}
                    <img src="{{ asset('website/images/about/banner.jpg')}}" alt="Our Restaurant">
                </div>
            </div>
            <div class="col-lg-6" data-cue="slideInRight" data-duration="800">
                <div class="single-about-content">
                    <div class="section-title left-title">
                        <span class="top-title">About Us</span>
                        <h2>Discover the Essence of Halal Excellence at Lazizi</h2>
                        <p>At Lazizi Halal Cuisine, we celebrate the art of halal dining with a menu that honors tradition while embracing modern culinary techniques. Our commitment to quality and authenticity is evident in every dish we serve.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="speciallst-card">
                                <h3><img src="{{ asset('website/images/about/about-img-3.webp')}}" alt="Specialists">Specialists</h3>
                                <p>Our team of skilled chefs is dedicated to crafting unforgettable meals with precision and passion.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="speciallst-card">
                                <h3><img src="{{ asset('website/images/about/about-img-4.webp')}}" alt="Restaurant">Restaurant</h3>
                                <p>Enjoy our warm and inviting atmosphere designed to enhance your dining experience.</p>
                            </div>
                        </div>
                    </div>
                    <ul>
                        <li><i class="bx bx-right-arrow-circle"></i> Enjoy freshly prepared dishes made from high-quality ingredients.</li>
                        <li><i class="bx bx-right-arrow-circle"></i> Experience exceptional service with every visit.</li>
                    </ul>
                    <a href="booking-table.html" class="default-btn">Reserve Your Table</a>
                </div>
            </div>
        </div>
    </div>
    <div class="about-shape-1">
        <img src="{{ asset('website/images/about/about-page-shape-1.webp')}}" alt="Decoration Shape">
    </div>
    <div class="about-shape-2">
        <img src="{{ asset('website/images/about/about-page-shape-2.webp')}}" alt="Decoration Shape">
    </div>
    <div class="about-shape-3">
        <img src="{{ asset('website/images/about/about-page-shape-3.webp')}}" alt="Decoration Shape">
    </div>
    <div class="about-shape-4">
        <img src="{{ asset('website/images/about/about-page-shape-4.webp')}}" alt="Decoration Shape">
    </div>
</div>

<!-- Services Section -->
<div class="services-area services-pages-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="top-title">Our Services</span>
            <h2>Explore Our Special Offerings</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                <div class="single-discover-card services-card-page">
                    <img src="{{ asset('website/images/services/services-page-img-1.webp')}}" alt="Fresh Products">
                    <a href="{{ route('website.menu') }}">
                        <h3>Fresh Ingredients</h3>
                    </a>
                    <p>We source only the freshest ingredients to ensure that every dish is full of flavor and nutrition.</p>
                    <a href="{{ route('website.menu') }}" class="discover-more">Learn More</a>
                    <div class="services-shape">
                        <img src="{{ asset('website/images/services/services-page-hover-img-7.webp')}}" alt="Decoration Shape">
                    </div>
                    <div class="services-shape-2">
                        <img src="{{ asset('website/images/services/services-page-img-4.webp')}}" alt="Decoration Shape">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                <div class="single-discover-card services-card-page">
                    <img src="{{ asset('website/images/services/services-page-img-2.webp')}}" alt="Skilled Chefs">
                    <a href="{{ route('website.menu') }}">
                        <h3>Expert Chefs</h3>
                    </a>
                    <p>Our chefs are highly trained professionals with a passion for creating delectable halal dishes.</p>
                    <a href="{{ route('website.menu') }}" class="discover-more">Discover More</a>
                    <div class="services-shape">
                        <img src="{{ asset('website/images/services/services-page-hover-img-8.webp')}}" alt="Decoration Shape">
                    </div>
                    <div class="services-shape-2">
                        <img src="{{ asset('website/images/services/services-page-img-5.webp')}}" alt="Decoration Shape">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                <div class="single-discover-card services-card-page">
                    <img src="{{ asset('website/images/services/services-page-img-3.webp')}}" alt="Best Bar">
                    <a href="{{ route('website.menu') }}">
                        <h3>Top-Notch Restaurant</h3>
                    </a>
                    <p>Enjoy a selection o Deserts crafted to complement our menu.</p>
                    <a href="{{ route('website.menu') }}" class="discover-more">Explore More</a>
                    <div class="services-shape">
                        <img src="{{ asset('website/images/services/services-page-hover-img-9.webp')}}" alt="Decoration Shape">
                    </div>
                    <div class="services-shape-2">
                        <img src="{{ asset('website/images/services/services-page-img-6.webp')}}" alt="Decoration Shape">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<
    <div class="visit-today-area pt-100 pb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Visit Us Today</span>
                <h2>Make A Reserve</h2>
            </div>
            <form action="{{ route('reservation.add') }}" method="post" class="reserve-from reserve-from-two" id="booking-form">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                placeholder="Name">
                        </div>
                        @error('name')
                            <p class="text-light"><span class="text-danger">* </span> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" name="phone"
                                value="{{ old('phone') }}">

                        </div>
                        @error('phone')
                            <p class="text-light"><span class="text-danger">* </span> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example" name="persons"
                                value="{{ old('persons') }}">
                                <option selected>Persons</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">five</option>
                                <option value="6">Six</option>
                            </select>
                        </div>
                        @error('persons')
                            <p class="text-light"><span class="text-danger">* </span> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="input-group date" id="datetimepicker">
                                    <input type="text" class="form-control"
                                        placeholder="mm/dd/yyyy"name="reservation_date"
                                        value="{{ old('reservation_date') }}">
                                    <span class="input-group-addon"></span>
                                </div>
                            </div>
                        </div>
                        @error('reservation_date')
                            <p class="text-light"><span class="text-danger">* </span> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example" name="time"
                                value="{{ old('time') }}">
                                <option selected>Time</option>
                                <option value="08:00 AM – 05:00PM">08:00 AM – 05:00PM</option>
                                <option value="09:00 AM – 06:00PM">09:00 AM – 06:00PM</option>
                                <option value="10:00 AM – 05:00PM">10:00 AM – 05:00PM</option>
                                <option value="09:00 AM – 05:00PM">09:00 AM – 05:00PM</option>
                            </select>
                        </div>
                        @error('time')
                            <p class="text-light"><span class="text-danger">* </span> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email"
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <p class="text-light"><span class="text-danger">* </span> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-lg-12 col-sm-6 col-md-12">
                        @auth
                            <button type="submit" class="default-btn">Book A Table</button>
                        @else
                            <a href="{{ route('user.login') }}" class="default-btn">Log in to Reserve Table</a>
                        @endauth
                    </div>

                </div>
            </form>
        </div>
    </div>



    <div class="team-restaurant-area team-restaurant-page-area pt-100 pb-70">
        <div class="container">
            <div class="section-title left-title">
                <span class="top-title">Team of Restaurant</span>
                <h2>Meet Our Professionals</h2>
                <div class="menu-view-btn">
                    <a href="menu-details.html" class="default-btn">View All</a>
                </div>
            </div>
            <div class="team-restaurant-slider owl-carousel owl-theme">
                @foreach ($cheffs as $chef)
                    <div class="single-team-restaurant-card">
                        <div class="team-restaurant-img">
                            <a href="">
                                <img src="{{ asset($chef->chief_picture) }}" style="height: 400px; width: 470px; object-fit: cover;"
                                    alt="images">
                            </a>
                            <ul class="team-restaurant-list-icon">
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="restaurant-content">
                            <a href="">
                                <h3>{{ $chef->chief_name }}</h3>
                            </a>
                            <p> {{ $chef->speciality }} Specialist</p>
                            <p> {{ $chef->nationality }} National</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="testimonials-two-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Our Testimonials</span>
                <h2>What Our Guests Are Saying</h2>
            </div>
            <div class="testimonials-two-slider owl-carousel owl-theme">
                <div class="testimonials-two-card">
                    <div class="testimonials-client-inform">
                        <h3>Aaron Spacemuseum</h3>
                        <span>SEO Manager</span>
                        <div class="client-icon">
                            <img src="{{ asset('website/images/testimonials-icon.svg')}}" alt="icon">
                        </div>
                    </div>
                    <p>"The ambiance of the restaurant was amazing, and the food exceeded my expectations. The SEO services provided by the team were top-notch. Highly recommended!"</p>
                </div>
                <div class="testimonials-two-card">
                    <div class="testimonials-client-inform">
                        <h3>Reanne Carnation</h3>
                        <span>Content Strategist</span>
                        <div class="client-icon">
                            <img src="{{ asset('website/images/testimonials-icon.svg')}}" alt="icon">
                        </div>
                    </div>
                    <p>"I had a fantastic experience. The team’s attention to detail and their approach to content strategy helped elevate our brand’s online presence. Thank you!"</p>
                </div>
                <div class="testimonials-two-card">
                    <div class="testimonials-client-inform">
                        <h3>Val Adictorian</h3>
                        <span>Marketing Manager</span>
                        <div class="client-icon">
                            <img src="{{ asset('website/images/testimonials-icon.svg')}}" alt="icon">
                        </div>
                    </div>
                    <p>"The restaurant’s food quality and service are exceptional. As for the marketing support, it’s been instrumental in driving our engagement. I’m thoroughly impressed."</p>
                </div>
                <div class="testimonials-two-card">
                    <div class="testimonials-client-inform">
                        <h3>Aaron Spacemuseum</h3>
                        <span>SEO Manager</span>
                        <div class="client-icon">
                            <img src="{{ asset('website/images/testimonials-icon.svg')}}" alt="icon">
                        </div>
                    </div>
                    <p>"Returning to this restaurant was a delight! The SEO results speak for themselves. The attention and service were fantastic."</p>
                </div>
                <div class="testimonials-two-card">
                    <div class="testimonials-client-inform">
                        <h3>Reanne Carnation</h3>
                        <span>Content Strategist</span>
                        <div class="client-icon">
                            <img src="{{ asset('website/images/testimonials-icon.svg')}}" alt="icon">
                        </div>
                    </div>
                    <p>"The level of service and the quality of content creation have truly transformed our marketing efforts. I’m grateful for the professional and timely support!"</p>
                </div>
                <div class="testimonials-two-card">
                    <div class="testimonials-client-inform">
                        <h3>Val Adictorian</h3>
                        <span>Marketing Manager</span>
                        <div class="client-icon">
                            <img src="{{ asset('website/images/testimonials-icon.svg')}}" alt="icon">
                        </div>
                    </div>
                    <p>"Our recent campaigns have seen unprecedented success thanks to the innovative strategies provided. The restaurant's ambiance makes every visit memorable."</p>
                </div>
            </div>
        </div>
    </div>



    @endsection
