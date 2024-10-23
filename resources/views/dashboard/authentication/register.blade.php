@extends('website\webtemplate')
@section('web-content')


    <div class="pag-banner-area blog-pages-area jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content">
                <h1>Register</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Register</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="assets/images/page/page-banner-shape-1.webp" alt="images">
        </div>
    </div>


    <div class="my-account-area pt-100 pb-100">
        <div class="container">
            <div class="my-account-form login-form">
                <div class="section-title">
                    <h2>Signup From Here</h2>
                    <p>You are the fill is register form.</p>
                </div>
                <form action="{{ route('user.register') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- Name Field -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your full name" />
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your Email" />
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password" />
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Contact Field -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="text" class="form-control" name="contact" value="{{ old('contact') }}" placeholder="Enter your phone number" />
                                @error('contact')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Address Field -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter your address" />
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Terms & Conditions Checkbox -->

                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="default-btn">Register</button>
                </form>

            </div>
        </div>
    </div>


    <div class="faqs-buy-one-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="faqs-buy-content">
                        <div class="section-title left-title">
                            <h2>Buy One Get Two! Only This Weekends!</h2>
                            <p>Pedit quo minus id quod maxime placeat facere possimus omnis voluptas assumenda est
                                orepellendus temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                saepe eveniet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="faqs-buy-btn">
                        <a href="about.html" class="default-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="faqs-buy-shape-1">
            <img src="assets/images/faqs-shape-1.webp" alt="images">
        </div>
        <div class="faqs-buy-shape-2">
            <img src="assets/images/faqs-shape-2.webp" alt="images">
        </div>
    </div>

    @endsection
