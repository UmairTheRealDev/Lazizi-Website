@extends('website\webtemplate')
@section('web-content')


    <div class="pag-banner-area blog-pages-area jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content">
                <h1>Login</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="{{ asset('website/images/page/page-banner-shape-1.webp')}}" alt="images">
        </div>
    </div>


    <div class="my-account-area pt-100 pb-100">
        <div class="container">
            <div class="my-account-form login-form">
                <div class="section-title">
                    <h2>Sign In From Here</h2>                 
                </div>
                <form action="{{ route('user.login') }}" method="POST">
                    @csrf
                    <div class="row">
                      
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




                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="default-btn">login</button>
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
