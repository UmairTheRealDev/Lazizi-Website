
@extends('website\webtemplate')
@section('web-content')


    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>





    <div class="pag-banner-area contact-pages-area jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content">
                <h1>Contact Us</h1>
                <ul>
                    <li><a href="{{ route('website.home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="{{ asset('website/images/page/page-banner-shape-1.webp')}}" alt="images">
        </div>
    </div>


    <div class="contact-from-area pt-100 pb-100">
        <div class="container">
            <div class="contact-form-box">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="single-contact-form">
                            <div class="section-title left-title">
                                <h2>Get In Touch</h2>
                            </div>
                            <div class="contact-from">
                                <form id="contactForm" action="{{ route('contact.add') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="phone_number" value="{{ old('phone_number') }}" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="msg_subject" value="{{ old('msg_subject') }}" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn">
                                                <span>Send message</span>
                                            </button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-form-content">
                            <div class="section-title left-title">
                                <span class="top-title">Our Contacts</span>
                                <h2>Find Us Location</h2>
                                <p>Minus id quod maxime placeat facere possimus, luptas assumenda est, omnis dolor repellendus emporibus.</p>
                            </div>
                            <div class="contact-widget">
                                <div class="contact-item">
                                    <i class="bx bxs-phone-call"></i>
                                    <h3>Phone:</h3>
                                    <a href="tel:+12025251924 ">+1 (202) 525-1924 </a>
                                </div>
                                <div class="contact-item">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email:</h3>
                                    <a>sales@lazizihalalcuisine.com</a>
                                </div>
                                <div class="contact-item">
                                    <i class="bx bx-map"></i>
                                    <h3>Location:</h3>
                                    <p>414 H ST NE Washington,DC 20002</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-map-area">
        <div class="container-fluid">
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12420.13898184595!2d-77.00832021113531!3d38.90032075558071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b822c4620739%3A0xab3660e62bbdd818!2s414%20H%20St%20NE%2C%20Washington%2C%20DC%2020002%2C%20USA!5e0!3m2!1sen!2s!4v1724397879776!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    @endsection
