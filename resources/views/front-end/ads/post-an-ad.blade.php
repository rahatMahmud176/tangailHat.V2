@extends('front-end.master')
@section('title')
    Post An Ad
@endsection
@section('content')
    <section class="s-space-bottom-full bg-accent-shadow-body">
        <div class="container">
            <div class="breadcrumbs-area">
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li class="active">Post A Add</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb--sm">
                    <div class="gradient-wrapper">
                        <div class="gradient-title">
                            <h2>Post A Free Add</h2>
                        </div>
                        <div class="input-layout1 gradient-padding post-ad-page">

                            {{ Form::open(['route' => 'ads.store', 'id' => 'post-add-form']) }}
                            <div class="border-bottom-2 mb-50 pb-30">
                                <div class="section-title-left-dark border-bottom d-flex">
                                    <h3><img src="{{ asset('/') }}/front-end/img/post-add1.png" alt="post-add"
                                            class="img-fluid"> Product Information</h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label">Category<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <div class="custom-select">
                                                <select name="cat_id" id="category-name" class='select2'>
                                                    <option value="0">Select a Category</option>
                                                    @foreach ($categories as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-info">

                                </div>

                            </div>


                            <div class="border-bottom-2 mb-50 pb-30">
                                <div class="section-title-left-dark border-bottom d-flex">
                                    <h3><img src="{{ asset('/') }}/front-end/img/post-add2.png" alt="post-add"
                                            class="img-fluid"> Seller Information</h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="seller-name">Name<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" id="seller-name" class="form-control"
                                                value="{{ $customer->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="seller-mail">Seller Email<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input name="email" type="text" id="seller-mail" class="form-control"
                                                value="{{ $customer->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="phone">Phone<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input name="phone_number" type="tel" id="phone" class="form-control"
                                                value="{{ $customer->phn_no }}">
                                            <div class="checkbox checkbox-primary checkbox-circle">
                                                <input name="phone_number_status" value="hide_phone_number" id="checkbox1"
                                                    type="checkbox" checked="">
                                                <label for="checkbox1">Hide the phone number</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="country">District<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <div class="custom-select">
                                                <select name="district_id" id="country" class='select2 ad-page-district'>
                                                    <option disabled selected value="0">Select your District</option>
                                                    @foreach ($districts as $district)
                                                        <option {{ $customer->district_id == $district->id ? 'selected' : '' }}
                                                            value="{{ $district->id }}">{{ $district->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="country">Upazilla<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <div class="custom-select">
                                                <select name="upazilla_id" id="upazilla" class='select2 ad-page-upazilla'>
                                                    <option selected disabled value="0">Select your upazilla</option>
                                                    @foreach ($upazillas as $upazilla)
                                                        <option {{ $upazilla->id == $customer->upozilla_id ? 'selected' : '' }}
                                                            value="{{ $upazilla->id }}">{{ $upazilla->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="country">Union<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <div class="custom-select">
                                                <select name="union_id" id="union" class='select2 ad-page-union'>
                                                    <option selected disabled value="0">Select your union</option>
                                                    @foreach ($unions as $union)
                                                        <option {{ $union->id == $customer->union_id ? 'selected' : '' }}
                                                            value="{{ $union->id }}">{{ $union->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="section-title-left-dark border-bottom d-flex">
                                <h3><img src="{{ asset('/') }}/front-end/img/post-add3.png" alt="post-add"
                                        class="img-fluid"> Make Your Ad Premium</h3>
                            </div>
                            <div class="pl-50 pl-none--xs">
                                <p>Premium ads help sellers promote their product or service by getting their ads more
                                    visibility with more buyers and sell what they want faster. </p>
                                <ul class="make-premium">
                                    <li>
                                        <div class="form-group">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio5" value="regular" name="ad_type"
                                                    checked="">
                                                <label for="inlineRadio5">Regular Ad</label>
                                                <span>1 Coin</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <div class="radio radio-primary radio-inline">

                                                <input class="s" type="radio" id="inlineRadio6" value="urgent"
                                                    name="ad_type">
                                                <label for="inlineRadio6">Urgent Ad</label>
                                                <small class="text-danger demo"></small>
                                                <span>5 Coins</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio7" value="top_page" name="ad_type">
                                                <label for="inlineRadio7">Top of the Page Ad</label>
                                                <span>10 Coins</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio8" value="top_argent"
                                                    name="ad_type">
                                                <label for="inlineRadio8">Top of the Page Ad + Urgent Ad</label>
                                                <span>15 Coins</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="form-group mt-20">

                                    <button type="submit" class="cp-default-btn-sm">Submit Now!</button>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="sidebar-item-box">
                        <img src="{{ asset('/') }}/front-end/img/banner/sidebar-banner1.jpg" alt="banner"
                            class="img-fluid m-auto">
                    </div>
                    <div class="sidebar-item-box">
                        <div class="gradient-wrapper">
                            <div class="gradient-title">
                                <h3>How To Sell Quickly?</h3>
                            </div>
                            <ul class="sidebar-sell-quickly">
                                <li><a href="faq.html">Use a brief title and description of the item.</a></li>
                                <li><a href="faq.html">Make sure you post in the correct category</a></li>
                                <li><a href="faq.html">Add nice photos to your ad</a></li>
                                <li><a href="faq.html">Put a reasonable price</a></li>
                                <li><a href="faq.html">Check the item before publish</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
