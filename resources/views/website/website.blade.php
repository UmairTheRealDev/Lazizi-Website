@extends('website.webtemplate')
@section('web-content')
    <div class="banner-three-area">
        <div class="container">
            <div class="single-banner-three-content">
                <span>Visit Here</span>
                <h1>Enjoy An Exceptional Food</h1>
                <p>Lazizi Halal Cuisine, we believe in bringing the rich and authentic flavors of traditional halal food
                    right to your table.We Have Delicious Food & Special Eating Experience.</p>
                <a href="{{ route('aboutus') }}" class="default-btn">Read More</a>
            </div>
        </div>
    </div>


    <div class="about-style-three-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-three-content">
                        <div class="section-title left-title">
                            <span class="top-title">About Us</span>
                            <h2>We Have Delicious Food & Special Eating Experience</h2>
                            <p> Our menu is a celebration of halal cuisine, featuring a wide range of dishes inspired by
                                flavors from around the world. From succulent kebabs and tender grilled meats to flavorful
                                vegetarian options, every dish is prepared with the finest ingredients and a deep respect
                                for culinary traditions.</p>
                        </div>
                        <div class="about-odometer-content">
                            <div class="row">
                                <div class="col-lg-4 col-4 col-sm-4 col-md-4">
                                    <div class="about-odometer">
                                        <h2>
                                            <span class="odometer" data-count="70">00</span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>Dishes</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4 col-sm-4 col-md-4">
                                    <div class="about-odometer">
                                        <h2>
                                            <span class="odometer" data-count="24">00</span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>Specialist Chefs</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4 col-sm-4 col-md-4">
                                    <div class="about-odometer">
                                        <h2>
                                            <span class="odometer" data-count="980">00</span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#booking-form" class="default-btn">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-three-img">
                        <div class="about-three-main-img" data-cue="zoomIn" data-duration="1000">
                            <img src="{{ asset('website/images/about/laziz_web.jpg') }}" alt="images">
                        </div>
                        <div class="about-three-img-2" data-cue="zoomIn" data-duration="1600">
                            <img src="{{ asset('website/images/about/about-style-three-img-1.webp') }}" alt="images">
                        </div>
                        <div class="about-three-img-3" data-cue="zoomIn" data-duration="1600">
                            <img src="{{ asset('website/images/about/about-style-three-img-2.webp') }}" alt="images">
                        </div>
                        <div class="about-three-img-4">
                            <img src="{{ asset('website/images/about/about-style-three-shape-1.webp') }}" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-three-shape-1">
            <img src="{{ asset('website/images/about/about-style-three-shape-2.webp') }}" alt="images">
        </div>
        <div class="about-three-shape-2">
            <img src="{{ asset('website/images/about/about-style-three-shape-3.webp') }}" alt="images">
        </div>
    </div>

    <div class="menu-three-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="menu-three-images">
                        <img src="{{ asset('website/images/about/mainonthegril.jpg') }}" alt="images">
                        <div class="years-experience">
                            <img src="{{ asset('website/images/menu/menu-three-ext-1.webp') }}" alt="images">
                            <div class="experience-odometer">
                                <h2>
                                    <span style="font-size: 2.5rem">lazizi</span>
                                </h2>
                                <p>Delicious Food</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-three-content">
                        <div class="section-title left-title">
                            <span class="top-title">From Our Menu</span>
                            <h2>Try Our Restaurant Non-Veg Items</h2>
                            <p>Savor the smoky, flame-grilled perfection with our curated selection of 'On the Grill'
                                items,featuring bold flavors and high-quality ingredients that deliver a taste of outdoor
                                cooking at its finest.</p>
                        </div>

                        @foreach ($onthegril as $itemnonveg)
                            <div class="menu-three-text-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-3 col-md-2">
                                        <div class="menu-img-three">
                                            <a href="{{ asset($itemnonveg->picture) }}">
                                                <img src="{{ asset($itemnonveg->picture) }}" alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-7 col-md-8">
                                        <div class="menu-three-text">
                                            <h3>{{ $itemnonveg->itemname }} <i class="bx bx-chevron-right"></i></h3>
                                            <p>{{ $itemnonveg->detail }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-2 col-md-2">
                                        <div class="menu-numder">
                                            <p>$ {{ $itemnonveg->price }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <a href="{{ route('website.menu') }}" class="default-btn">View All Menu</a>

                    </div>
                </div>


            </div>
        </div>
        <div class="menu-three-shape-1">
            <img src="{{ asset('website/images/menu/menu-three-shape-1.webp') }}" alt="images">
        </div>
        <div class="menu-three-shape-2">
            <img src="{{ asset('website/images/menu/menu-three-shape-2.webp') }}" alt="images">
        </div>
    </div>





    <div class="menu-three-area pt-100 pb-100">
        <div class="container">


            <div class="services-area pt-100 pb-70">
                <div class="container">
                    <div class="section-title">
                        <span class="top-title">Our Services</span>
                        <h2>Try Our Special Offer</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                            <div class="single-discover-card services-card">
                                <img src="{{ asset('website/images/discover/discover-1.webp') }}" alt="images">
                                <a>
                                    <h3>Fresh Products</h3>
                                </a>
                                <p>Our dishes are made with the freshest ingredients, ensuring a delightful taste in every
                                    bite.</p>
                                <a href="{{ route('aboutus') }}" class="discover-more">Discover More</a>
                                <div class="services-shape">
                                    <img src="{{ asset('website/images/discover/discover-5.webp') }}" alt="images">
                                </div>
                                <div class="services-shape-2">
                                    <img src="{{ asset('website/images/discover/discover-shape-1.webp') }}" alt="images">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                            <div class="single-discover-card services-card">
                                <img src="{{ asset('website/images/discover/discover-2.webp') }}" alt="images">
                                <a href="{{ route('aboutus') }}">
                                    <h3>Skilled Chefs</h3>
                                </a>
                                <p>Our team of expert chefs brings years of experience and passion to every dish we serve.
                                </p>
                                <a href="{{ route('aboutus') }}" class="discover-more">Discover More</a>
                                <div class="services-shape">
                                    <img src="{{ asset('website/images/discover/discover-6.webp') }}" alt="images">
                                </div>
                                <div class="services-shape-2">
                                    <img src="{{ asset('website/images/discover/discover-shape-2.webp') }}" alt="images">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                            <div class="single-discover-card services-card">
                                <img src="{{ asset('website/images/discover/discover-3.webp') }}" alt="images">
                                <a href="{{ route('aboutus') }}">
                                    <h3>Best Products</h3>
                                </a>
                                <p>Enjoy high-quality products that are expertly prepared to bring out their full flavor.
                                </p>
                                <a href="{{ route('aboutus') }}" class="discover-more">Discover More</a>
                                <div class="services-shape">
                                    <img src="{{ asset('website/images/discover/discover-7.webp') }}" alt="images">
                                </div>
                                <div class="services-shape-2">
                                    <img src="{{ asset('website/images/discover/discover-shape-3.webp') }}"
                                        alt="images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-three-shape-1">
            <img src="{{ asset('website/images/menu/menu-three-shape-1.webp') }}" alt="images">
        </div>
        <div class="menu-three-shape-2">
            <img src="{{ asset('website/images/menu/menu-three-shape-2.webp') }}" alt="images">
        </div>
    </div>





    <div class="visit-today-area pt-100 pb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Visit Us Today</span>
                <h2>Make A Reserve</h2>
            </div>
            <form action="{{ route('reservation.add') }}" method="post" class="reserve-from reserve-from-two"
                id="booking-form">
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


    <div class="menu-three-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <div class="menu-three-content">
                        <div class="section-title left-title">
                            <span class="top-title">From Our Menu</span>
                            <h2>Try Our Restaurant Non-Veg Items</h2>
                            <p>Savor the smoky, flame-grilled perfection with our curated selection of 'On the Grill'
                                items,featuring bold flavors and high-quality ingredients that deliver a taste of outdoor
                                cooking at its finest.</p>
                        </div>
                        @foreach ($nonveg as $itemnonveg)
                            <div class="menu-three-text-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-3 col-md-2">
                                        <div class="menu-img-three">
                                            <a href="{{ asset($itemnonveg->picture) }}">
                                                <img src="{{ asset($itemnonveg->picture) }}" alt="images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-7 col-md-8">
                                        <div class="menu-three-text">
                                            <h3>{{ $itemnonveg->itemname }} <i class="bx bx-chevron-right"></i></h3>
                                            <p>{{ $itemnonveg->detail }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-2 col-md-2">
                                        <div class="menu-numder">
                                            <p>$ {{ $itemnonveg->price }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <a href="{{ route('website.menu') }}" class="default-btn">View All Menu</a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="menu-three-images">
                        <img src="{{ asset('website/images/menu/menu-forr-img.jpeg') }}" alt="images">
                        <div class="years-experience">
                            <img src="{{ asset('website/images/menu/menu-three-ext-1.webp') }}" alt="images">
                            <div class="experience-odometer">
                                <h2>
                                    <span style="font-size: 2.5rem">lazizi</span>
                                </h2>
                                <p>Delicious Food</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="menu-three-shape-1">
            <img src="{{ asset('website/images/menu/menu-three-shape-1.webp') }}" alt="images">
        </div>
        <div class="menu-three-shape-2">
            <img src="{{ asset('website/images/menu/menu-three-shape-2.webp') }}" alt="images">
        </div>
    </div>



    <div class="portfolio-style-three-area pt-100">
        <div class="container-fluid">
            <div class="section-title left-title">
                <span class="top-title">Our best Food Items</span>
                <h2>The Divine Feel Of Taste</h2>
            </div>
            <div class="portfolio-three-slider owl-carousel owl-theme">
                @foreach ($carousol as $citems)
                    <div class="single-portfolio-three-item">
                        <div class="portfolio-img">
                            <a>
                                <img src="{{ asset($citems->picture) }}"
                                    style="height: 300px; width: 400px; object-fit: cover;" alt="images">
                            </a>
                        </div>
                        <div class="portfolio-card">
                            <a>
                                <h3>{{ $citems->itemname }}</h3>
                            </a>
                            <span>{{ $citems->detail }}</span>
                            <p class="menu-numder">Price $ {{ $citems->price }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="gallery-heading">Our Image Gallery</h2>

        <div class="row">
           
            <div class="col-md-4">
                <div class="image-container">
                    <img src="{{ asset('website/images/about/laziz_web.jpg') }}" alt="images">
                    <div class="overlay">
                        <div class="overlay-text">Image 1</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="{{ asset('website/images/about/laziz_web.jpg') }}" alt="images">
                    <div class="overlay">
                        <div class="overlay-text">Image 2</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="{{ asset('website/images/about/laziz_web.jpg') }}" alt="images">
                    <div class="overlay">
                        <div class="overlay-text">Image 3</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Second Row: 3 pictures -->
            <div class="col-md-4">
                <div class="image-container">
                    <img src="{{ asset('website/images/about/laziz_web.jpg') }}" alt="images">
                    <div class="overlay">
                        <div class="overlay-text">Image 4</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="{{ asset('website/images/about/laziz_web.jpg') }}" alt="images">
                    <div class="overlay">
                        <div class="overlay-text">Image 5</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                            <img src="{{ asset('website/images/about/laziz_web.jpg') }}" alt="images">
                    <div class="overlay">
                        <div class="overlay-text">Image 6</div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- <div class="odometer-area odometer-three-area pt-100 pb-100 ">
        <div class="container" style="margin-left: 100px">
            <div class="row">
                <div class="col-lg-2 col-12 col-sm-2 col-md-2" data-cues="fadeIn" data-duration="1500">
                    <div class="fun-odometer">
                        <h2>
                            <span class="odometer" data-count="300">00</span>
                            <span class="target">+</span>
                        </h2>
                        <p>Clients Every Day</p>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                            <div class="fun-odometer">
                                <h2>
                                    <span class="odometer" data-count="30">00</span>
                                    <span class="target">+</span>
                                </h2>
                                <p>Table Available</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                            <div class="fun-odometer">
                                <h2>
                                    <span class="odometer" data-count="20">00</span>
                                    <span class="target">+</span>
                                </h2>
                                <p>Breakfast Option</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                            <div class="fun-odometer">
                                <h2>
                                    <span class="odometer" data-count="32">00</span>
                                    <span class="target">+</span>
                                </h2>
                                <p>Dinner Option</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                            <div class="fun-odometer">
                                <h2>
                                    <span class="odometer" data-count="25">00</span>
                                    <span class="target">+</span>
                                </h2>
                                <p>Year Of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="team-restaurant-area pt-100 pb-100">
        <div class="container">
            <div class="section-title left-title">
                <span class="top-title">Team of Restaurant</span>
                <h2>Meet Our Professionals</h2>
                <div class="menu-view-btn">
                    <a href="{{ route('website.menu') }}" class="default-btn">View All</a>
                </div>
            </div>
            <div class="team-restaurant-slider owl-carousel owl-theme">
                @foreach ($cheffs as $chef)
                    <div class="single-team-restaurant-card">
                        <div class="team-restaurant-img">
                            <a>
                                <img src="{{ asset($chef->chief_picture) }}"
                                    style="height: 400px; width: 470px; object-fit: cover;" alt="images">
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
                            <a>
                                <h3>{{ $chef->chief_name }}</h3>
                            </a>
                            <p> {{ $chef->speciality }} Specialist</p>
                            <p> {{ $chef->nationality }} National</p>
                        </div>
                    </div>
                @endforeach

            </div>



            <div class="video-play-area jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
                <div class="container">
                    <div class="single-video-play-item">
                        <div class="video-play-content">
                            <a href="https://www.youtube.com/watch?v=-z-wtyXjFIg" class="popup-youtube">
                                <img src="{{ asset('website/images/video-play.svg" alt="images') }}">
                                <span style="color: black; font-size: 30px"> Play</span>
                            </a>
                        </div>
                        <span>Play Video</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-three-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Our Blog</span>
                <h2>Latest Blog & News</h2>
            </div>
            <div class="row">
                @foreach ($latblog as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="height: 67vh" data-cue="slideInUp">
                        <div class="single-blog-card blog-card-three" style="height: 67vh">
                            <div class="blog-img">
                                <a href="{{ route('blog.detail', $blog->id) }}">
                                    <img src="{{ asset('uploads/featured-images/' . $blog->featured_image) }}"
                                        alt="{{ $blog->topic }}" style="height: 30vh;  object-fit: cover; width: 100%"
                                        class="img-fluid">
                                </a>
                                <div class="blog-time">
                                    <span>{{ $blog->created_at->format('d M Y') }}</span>
                                </div>
                            </div>
                            <div class="single-blog-content">
                                <ul>
                                    <li>By <a href="{{ route('blog.detail', $blog->id) }}">{{ $blog->author_name }}</a>
                                    </li>
                                    <li>Lazizi Halal Cuisine Restaurant</li>
                                </ul>
                                <h4>{{ $blog->topic }}</h4>
                                <a href="{{ route('blog.detail', $blog->id) }}" class="discover-more">Read More</a>
                            </div>
                            <div class="blog-three-option-card blog-bg-img-1">
                                <div class="blog-option-content">
                                    <a href="{{ route('blog.detail', $blog->id) }}">
                                        <h3>Login to Get Offer</h3>
                                    </a>
                                    <p><a href="{{ route('blog.detail', $blog->id) }}">Special Offer Limited Time</a></p>
                                </div>
                                <div class="option-date">
                                    <span>14</span>
                                    <p>Sep</p>
                                </div>
                                <div class="blog-option-shape">
                                    <img src="{{ asset('uploads/description-images/' . $blog->description_image) }}"
                                        style="height: 30vh;  object-fit: cover; width: 100%" alt="{{ $blog->title }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
