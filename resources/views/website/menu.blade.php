@extends('website\webtemplate')
@section('web-content')


    <div class="pag-banner-area menu-pages-banner-area jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content">
                <h1>Menu</h1>
                <ul>
                    <li><a href="{{ route('website.home') }}">Home</a></li>
                    <li>Menu</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="{{ asset('website/images/page/page-banner-shape-1.webp')}}" alt="images">
        </div>
    </div>
    <div class="special-menu-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Special Menu</span>
                <h2>lazizi Popular Menu</h2>
            </div>
            <div class="special-menu-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a  class="nav-link" href="{{ route('website.menu') }}">  <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false">All Items</button></a>
                    </li>
                    @if($category)
                    @foreach($category as $categry)
                    <li class="nav-item" role="presentation">
                        <a  class="nav-link" href="{{ route('website.singlecategory', $categry->cat_id) }}">  <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false">{{ $categry->catname }}</button></a>
                    </li>
                    @endforeach
                    @else
                    <h2>No items in this Category</h2>
                    @endif


                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <div class="single-special-menu-content">
                            <div class="row">
                             @foreach($mitem as $item)

                             <div class="col-lg-6 col-md-6">
                                <div class="special-card">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-4">
                                            <div class="special-menu-img">
                                                <a href="{{ asset($item->picture) }}">
                                                    <img src="{{ asset($item->picture) }}"   style="height: 100px; width: 250px; object-fit: cover;"                   alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="special-menu-text">
                                                <a href="#">
                                                    <h3>{{ $item->itemname }}</h3>
                                                </a>
                                                <p>{{ $item->detail }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-2">
                                            <div class="special-menu-number">
                                                <span>${{ $item->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection
