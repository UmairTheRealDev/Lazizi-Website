<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/scrollCue.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Lazizi Halal Cuisine - Restaurant</title>
    <link rel="icon" type="image/webp" href="{{ asset('website/images/logo-2.png') }}">
<style>
.gallery-heading {
    text-align: center;
    margin-bottom: 2rem;
    font-size: 2rem;
    font-weight: bold;
    color: #333; 
}

.image-container {
    position: relative;
    overflow: hidden;
}

.image-container img {
    transition: transform 0.4s ease-in-out;
}

.image-container:hover img {
    transform: scale(1.1);
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
}

.image-container:hover .overlay {
    opacity: 1;
}

.overlay-text {
    color: white;
    font-size: 1.5rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-weight: bold;
}

</style>
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <span>Lazizi</span>
        </div>
    </div>


    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>


    <div class="submenu-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-9">
                    <div class="submenu-left-content">
                        <ul>
                            <li>
                                <img src="{{ asset('website/images/phone-icon.svg') }}" alt="icon">
                                <a href="tel:+12025251924 ">+1 (202) 525-1924 </a>
                            </li>
                            <li>
                                <img src="{{ asset('website/images/email-icon.svg') }}" alt="icon">
                                <a>sales@lazizihalalcuisine.com</a>

                            </li>
                            <li>
                                <img src="{{ asset('website/images/map.svg') }}" alt="icon">
                                <p>414 H ST NE Washington,DC 20002</p>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3">
                    <div class="submenu-right-content">
                        <ul>
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
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area">
        <div style="text-align: center;color: rgb(197, 157, 95);background-color:rgb(14, 19, 23);" data-aos="fade-down">
            @session('success')
                <span class="top-title">{{ $value }}</span>
            @endsession

            @session('failure')
                <span class="top-title">{{ $value }}</span>
            @endsession
        </div>
        <div class="container">
            <div class="mobile-nav">
                <div class="logo">
                    <a href="{{ route('website.home') }}">
                        <img src="{{ asset('website/images/logo-1.png') }}" height="80px" width="150px" class="logo-light" alt="images">
                        <img src="{{ asset('website/images/logo-1.png') }}" height="80px" width="150px" class="logo-dark" alt="images">
                    </a>
                </div>
                <!-- Navbar Toggler Button for Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="main-nav main-nav-three">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a href="{{ route('website.home') }}">
                        <img src="{{ asset('website/images/logo-1.png') }}" height="80px" width="150px" class="logo-light" alt="images">
                        <img src="{{ asset('website/images/logo-2.png') }}" height="100px" width="180px" class="logo-dark" alt="images">
                    </a>
                    <!-- Updated Navbar Toggler Button for Desktop -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item nav-item-five">
                                <a href="{{ route('website.home') }}" class="nav-link dropdown-toggle active">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('website.menu') }}" class="nav-link dropdown-toggle">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('blog.web') }}" class="nav-link dropdown-toggle">Our Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutus') }}" class="nav-link dropdown-toggle">About Us</a>
                            </li>
                            <li class="nav-item" style="margin-right: 10vw">
                                <a href="{{ route('contact.add') }}" class="nav-link">Contact Us</a>
                            </li>

                            @guest
                            <li class="nav-item">
                                <a href="{{ route('user.login') }}" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.register') }}" class="nav-link">Register</a>
                            </li>
                            @else
                            <li class="nav-item dropdown" style="border: 2px solid rgb(197, 157, 95);">
                                <a href="#" class="nav-link dropdown-toggle" style="padding: 0px 30px" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="bx bx-user" style="font-size: 1rem; display: inline-block"></span>
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="nav-item">
                                        <a href="{{ route('myreservation', Auth::user()->id) }}" class="nav-link">Reservations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('user.logout') }}" class="nav-link">Logout</a>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>

                        @auth
                        @if(Auth::user()->usertype == "Admin")
                        <div class="others-option-vg d-flex align-items-center">
                            <div class="option-item">
                                <a href="{{ route('users.table') }}" class="default-btn">Dashboard</a>
                            </div>
                        </div>
                        @else
                        <div class="others-option-vg d-flex align-items-center">
                            <div class="option-item">
                                <a href="#booking-form" class="default-btn">Book A Table</a>
                            </div>
                        </div>
                        @endif
                        @endauth
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option justify-content-center d-flex align-items-center">
                            {{-- <div class="option-item">
                                <i class="bx bx-search search-btn"></i>
                                <i class="bx bx-x close-btn"></i>
                                <div class="search-overlay search-popup">
                                    <div class="search-box">
                                        <form class="search-form">
                                            <input class="search-input" placeholder="Search..." type="text">
                                            <button class="search-button" type="submit">
                                                <i class="bx bx-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="option-item">
                                <a href="{{ route('website.home') }}#booking-form" class="default-btn">Book A Table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('web-content')




    <div class="footer-widget-area footer-three-area  pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="footer-widget">
                        <a href="{{ route('website.home') }}">
                            {{-- <img src="{{ asset('website/images/logo-1.png') }}"> --}}
                        <img src="{{ asset('website/images/logo-1.png') }}"  height="80px" width="150px" alt="images">
                        </a>
                        <p>Lazizi Halal Cuisine, we believe in bringing the rich and authentic flavors of traditional halal food right to your table.</p>
                        <ul class="footer-widget-list">
                            <li>
                                <a href="https://facebook.com/" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.google.com/" target="_blank">
                                    <i class="bx bxl-google"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="footer-widget">
                        <h2>Useful Link</h2>
                        <ul class="footer-list">
                            <li>
                                <i class="bx bxs-downvote"></i><a href="{{ route('aboutus') }}">About Us</a>
                            </li>
                            <li>
                                <i class="bx bxs-downvote"></i><a href="{{ route('blog.web') }}">Latest Blog</a>
                            </li>
                            <li>
                                <i class="bx bxs-downvote"></i><a href="#booking-form">Book A Table</a>
                            </li>
                            <li>
                                <i class="bx bxs-downvote"></i><a href="{{ route('contact.add') }}">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="footer-widget footer-services">
                        <h2>Opening Hours</h2>
                        <ul class="footer-list">
                            <li>
                                Monday <span>11:00 AM – 08:00 PM</span>
                            </li>
                            <li>
                                Thesday <span>11:00 AM – 08:00 PM</span>
                            </li>
                            <li>
                                Wednesday <span>11:00 AM – 08:00 PM</span>
                            </li>
                            <li>
                                Friday <span>11:00 AM – 08:00 PM</span>
                            </li>
                            <li>
                                Saturday <span>11:00 AM – 08:00 PM</span>
                            </li>
                            <li>
                                Sunday <span>11:00 AM – 08:00 PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="footer-widget">
                        <h2>Get In Touch</h2>
                        <div class="footer-item">
                            <i class="bx bxs-phone-call"></i>
                            <a href="tel:+12025251924 ">+1 (202) 525-1924 </a>
                        </div>
                        <div class="footer-item">
                            <i class="bx bx-envelope"></i>
                                <a>sales@lazizihalalcuisine.com</a>
                        </div>
                        <div class="footer-item">
                            <i class="bx bx-map"></i>
                            <p>414 H ST NE Washington,DC 20002</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-shape-1">
            <img src="{{ asset('website/images/footer/footer-shape-1.webp') }}" alt="images">
        </div>
        <div class="footer-shape-2">
            <img src="{{ asset('website/images/footer/footer-shape-2.webp') }}" alt="images">
        </div>
        <div class="footer-shape-3">
            <img src="{{ asset('website/images/footer/footer-shape-3.webp') }}" alt="images">
        </div>
        <div class="footer-shape-4">
            <img src="{{ asset('website/images/footer/footer-shape-4.webp') }}" alt="images">
        </div>
    </div>


    <div class="copyright-content copyright-three-content">
        <p>©   Proudly Owned by<b>Lazizi Halal  Cuisine</b> </p>
        <p><b>Developer Contact <a href="mailto:umairsarfaraz829@gmail.com">umairsarfaraz829@gmail.com</a>
            <a href="https://www.facebook.com/share/NcyQfnNUUppjzta4/?mibextid=qi2Omg"><i class="bx bxl-facebook"></i></a>
            <a href="wa.me/923469257905"><i class="bx bxl-whatsapp"></i></a>
            <a href="mailto:umairsarfaraz829@gmail.com"><i class="bx bxl-mail"></i></a>
        </b></p>
    </div>


    <div class="go-top">
        <i class="bx bxl-upwork"></i>
        <i class="bx bxl-upwork"></i>
    </div>



    <script src="{{ asset('website/js/jquery.min.js') }}"></script>
    <script src="{{ asset('website/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website/js/scrollCue.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('website/js/appear.min.js') }}"></script>
    <script src="{{ asset('website/js/odometer.min.js') }}"></script>
    <script src="{{ asset('website/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('website/js/fancybox.min.js') }}"></script>
    <script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website/js/parallax.min.js') }}"></script>
    <script src="{{ asset('website/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('website/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('website/js/subscribe-custom.js') }}"></script>
    <script src="{{ asset('website/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('website/js/main.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

    <script>
        AOS.init();
      </script>
</body>


</html>
