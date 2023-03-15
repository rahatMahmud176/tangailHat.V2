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

                            {{Form::open(['route'=>'ads.store','id'=>'post-add-form'])}}
                            <div class="border-bottom-2 mb-50 pb-30">
                                <div class="section-title-left-dark border-bottom d-flex">
                                    <h3><img src="{{asset('/')}}/front-end/img/post-add1.png" alt="post-add" class="img-fluid"> Product Information</h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label">Category<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <div class="custom-select">
                                                <select name="category_id" id="category-name" class='select2'>
                                                    <option value="0">Select a Category</option>
                                                    <option value="1">Electronics</option>
                                                    <option value="2">Fashin &amp; Life Style</option>
                                                    <option value="3">Car &amp; Vehicles</option>
                                                    <option value="3">Hobby, Sport &amp; Kids</option>
                                                    <option value="3">Pets &amp; Animals</option>
                                                    <option value="3">Overseas Jobs</option>
                                                    <option value="3">Property</option>
                                                    <option value="3">Education</option>
                                                    <option value="3">Home &amp; Garden</option>
                                                    <option value="3">Business &amp; Industry</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label possition-top" for="first-name">Add Type <span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio1" value="used" name="condition" checked="">
                                                <label for="inlineRadio1">Used</label>
                                            </div>
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio2" value="new" name="condition">
                                                <label for="inlineRadio2"> New </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="add-title">Ad Title <span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input type="text" name="title" id="add-title" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label">Description<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <textarea placeholder="What makes your ad unique" class="textarea form-control" name="discription" id="description" rows="4" cols="20" data-error="Message field is required" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="first-name">Set Price <span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input type="text" name="price" id="describe-ad2" class="form-control price-box" placeholder="৳ Set your Price Here">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio3" value="fixed" name="price_type" checked="">
                                                <label for="inlineRadio3">fixed</label>
                                            </div>
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio4" value="negotiable" name="price_type">
                                                <label for="inlineRadio4"> Negotiable </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="add-title">Upload Picture<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <ul class="picture-upload">
                                                <li>
                                                    <input name="img_one" type="file" id="img-upload1" class="form-control">
                                                </li>
                                                <li>
                                                    <input name="img_two" type="file" id="img-upload2" class="form-control">
                                                </li>
                                                <li>
                                                    <input name="img_three" type="file" id="img-upload3" class="form-control">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom-2 mb-50 pb-30">
                                <div class="section-title-left-dark border-bottom d-flex">
                                    <h3><img src="{{asset('/')}}/front-end/img/post-add2.png" alt="post-add" class="img-fluid"> Seller Information</h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="seller-name">Name<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" id="seller-name" class="form-control" placeholder="Seller Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="seller-mail">Seller Email<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input name="email" type="text" id="seller-mail" class="form-control" placeholder="Enter Your E-mail Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="phone">Phone<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input name="phone_number" type="tel" id="phone" class="form-control" placeholder="Enter your Mobile">
                                            <div class="checkbox checkbox-primary checkbox-circle">
                                                <input name="phone_number_status" value="hide_phone_number" id="checkbox1" type="checkbox" checked="">
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
                                                <select name="district_id" id="country" class='select2'>
                                                    <option disabled selected value="0">Select your District</option>
                                                    @foreach($districts as $distict)
                                                        <option value="{{$distict->id}}">{{$distict->name}}</option>
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
                                                <select name="upazilla_id" id="upazilla" class='select2'>
                                                    <option selected disabled value="0">Select your upazilla</option>
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
                                                <select name="union_id" id="union" class='select2'>
                                                    <option selected disabled value="0">Select your union</option>
                                                    <option value="10">Malaysia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="section-title-left-dark border-bottom d-flex">
                                <h3><img src="{{asset('/')}}/front-end/img/post-add3.png" alt="post-add" class="img-fluid"> Make Your Ad Premium</h3>
                            </div>
                            <div class="pl-50 pl-none--xs">
                                <p>Premium ads help sellers promote their product or service by getting their ads more visibility with more buyers and sell what they want faster. </p>
                                <ul class="make-premium">
                                    <li>
                                        <div class="form-group">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio5" value="regular" name="ad_type" checked="">
                                                <label for="inlineRadio5">Regular Ad</label>
                                                <span>1 Coin</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio6" value="urgent" name="ad_type">
                                                <label for="inlineRadio6">Urgent Ad</label>
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
                                                <input type="radio" id="inlineRadio8" value="top_argent" name="ad_type">
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
                        {{Form::close()}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="sidebar-item-box">
                    <img src="{{asset('/')}}/front-end/img/banner/sidebar-banner1.jpg" alt="banner" class="img-fluid m-auto">
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
