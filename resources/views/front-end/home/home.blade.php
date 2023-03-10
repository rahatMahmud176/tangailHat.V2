@extends('front-end.master')
@section('title')
    Home
@endsection
@section('content')


 <section class="bg-accent-shadow-body d-sm-none d-block pb-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="">
                <img class="d-block w-100" src="{{ asset('front-end') }}/custom-image/slider-image-3.png" alt="First slide">
            </a> 
          </div>
          <div class="carousel-item">
            <a href="">
                <img class="d-block w-100" src="{{ asset('front-end') }}/custom-image/slider-image-3.png" alt="First slide">
            </a> 
          </div>
          <div class="carousel-item">
            <a href="">
                <img class="d-block w-100" src="{{ asset('front-end') }}/custom-image/slider-image-3.png" alt="First slide">
            </a> 
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
 </section>


                        




    <!-- Search Area Start Here -->
    <section class="search-layout1 bg-body full-width-border-bottom fixed-menu-mt">
        <div class="container">
            <form id="cp-search-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="form-group search-input-area input-icon-location">
                            <select id="location" class="select2">
                                <option class="first" value="0">Select Location</option>
                                <option value="1">Paypal</option>
                                <option value="2">Master Card</option>
                                <option value="3">Visa Card</option>
                                <option value="4">Scrill</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="form-group search-input-area input-icon-category">
                            <select id="categories" class="select2">
                                <option class="first" value="0">Select Categories</option>
                                <option value="1">Paypal</option>
                                <option value="2">Master Card</option>
                                <option value="3">Visa Card</option>
                                <option value="4">Scrill</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="form-group search-input-area input-icon-keywords">
                            <input placeholder="Enter Keywords here ..." value="" name="key-word" type="text">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-right text-left-mb">
                        <a href="#" class="cp-search-btn">
                            <i class="fa fa-search" aria-hidden="true"></i>Search
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Search Area End Here -->
    <!-- Category Grid View Start Here -->
    <section class="s-space-bottom-full bg-accent-shadow-body">
        <div class="container">
            <div class="breadcrumbs-area">
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li class="active">All ads</li>
                </ul>
            </div>
        </div>
        <div class="container"> 
            <div class="row">  

                <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="gradient-wrapper item-mb">
                        
                        <div class="row mb-5 d-none d-sm-block">
                            <div class="col-12 p-sm-5">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <a href="">
                                            <img class="d-block w-100" src="{{ asset('front-end') }}/custom-image/slider-image-3.png" alt="First slide">
                                        </a> 
                                      </div>
                                      <div class="carousel-item">
                                        <a href="">
                                            <img class="d-block w-100" src="{{ asset('front-end') }}/custom-image/slider-image-3.png" alt="First slide">
                                        </a> 
                                      </div>
                                      <div class="carousel-item">
                                        <a href="">
                                            <img class="d-block w-100" src="{{ asset('front-end') }}/custom-image/slider-image-3.png" alt="First slide">
                                        </a> 
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                            
                            </div>
                        </div>

                        <div class="gradient-title"> 
                            <div class="row">  
                                <div class="col-4">
                                    <h2>All Ads</h2>
                                </div>
                                <div class="col-8">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li>
                                                <div class="page-controls-sorting">
                                                    <button class="sorting-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Sort By<i class="fa fa-sort" aria-hidden="true"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Date</a>
                                                        <a class="dropdown-item" href="#">Best Sale</a>
                                                        <a class="dropdown-item" href="#">Rating</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="active"><a href="#" data-type="category-grid-layout3" class="product-view-trigger"><i class="fa fa-th-large"></i></a></li>
                                            <li><a href="#" data-type="category-list-layout3" class="product-view-trigger"><i class="fa fa-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="category-view" class="category-grid-layout3 gradient-padding zoom-gallery">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product5.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign active" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Clothing</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product5.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout1.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product2.html">Handbags</a></h3>
                                            <h3 class="long-title"><a href="single-product2.html">MMK collection Women Fashion Matching Satchel handbags</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$15</div>
                                            <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product6.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign active" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Clothing</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product6.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout2.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product3.html">Classic Watch</a></h3>
                                            <h3 class="long-title"><a href="single-product3.html">Men's Classic Sport Watch with Black Band</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$15</div>
                                            <a href="single-product-layout2.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product7.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign active" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Clothing</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product7.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout3.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product1.html">V-Neck T-Shirt</a></h3>
                                            <h3 class="long-title"><a href="single-product1.html">Men's Threadborne Streaker V-Neck T-Shirt</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$74</div>
                                            <a href="single-product-layout3.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product8.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Clothing</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product8.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout1.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product2.html">Apple iPhone</a></h3>
                                            <h3 class="long-title"><a href="single-product2.html">Apple iPhone 6 Plus Phone Red Cover</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$17</div>
                                            <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product20.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Clothing</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product20.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout2.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product2.html">Foldable Bag</a></h3>
                                            <h3 class="long-title"><a href="single-product2.html">Foldable Waterproof Carry Storage Bag with Zipper</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$26</div>
                                            <a href="single-product-layout2.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product11.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Electronics</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product11.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout3.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product2.html">Sunglasses</a></h3>
                                            <h3 class="long-title"><a href="single-product2.html">Polarized Clubmaster Classic Half Frame Semi-Rimless Sunglasses</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$20</div>
                                            <a href="single-product-layout3.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product12.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Electronics</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product12.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout1.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product3.html">Women's Shoe</a></h3>
                                            <h3 class="long-title"><a href="single-product3.html">Sport Women's D'Lites Memory Foam Lace-up Sneaker</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$80</div>
                                            <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product13.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Clothing</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product13.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout2.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product1.html">Headset</a></h3>
                                            <h3 class="long-title"><a href="single-product1.html">Bluetooth Headphones Over Ear Stereo Wireless Headset</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$15</div>
                                            <a href="single-product-layout2.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product15.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Clothing</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product15.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout3.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product3.html">LED Monitor</a></h3>
                                            <h3 class="long-title"><a href="single-product3.html">Samsung U28E590D 28-Inch UHD LED-Lit Monitor</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$700</div>
                                            <a href="single-product-layout3.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product19.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Clothing</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product19.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout1.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product1.html">Stylish Bracelet</a></h3>
                                            <h3 class="long-title"><a href="single-product1.html">Bracelet for Outdoor Camping Survival Stylish Bracelet</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$15</div>
                                            <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product14.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Clothing</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product14.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout2.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product2.html">Air Conditioner</a></h3>
                                            <h3 class="long-title"><a href="single-product2.html">Pioneer Air Conditioner Ductless Wall Mount System</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$15</div>
                                            <a href="single-product-layout2.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product-box item-mb zoom-gallery">
                                        <div class="item-mask-wrapper">
                                            <div class="item-mask secondary-bg-box"><img src="{{ asset('front-end') }}/img/product/product16.png" alt="categories" class="img-fluid">
                                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                <div class="title-ctg">Clothing</div>
                                                <ul class="info-link">
                                                    <li><a href="{{ asset('front-end') }}/img/product/product16.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                    <li><a href="single-product-layout3.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="symbol-featured"><img src="{{ asset('front-end') }}/img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-ctg">Clothing</div>
                                            <h3 class="short-title"><a href="single-product1.html">Duck Dog</a></h3>
                                            <h3 class="long-title"><a href="single-product1.html">Duckworth Large Yellow Duck Dog</a></h3>
                                            <ul class="upload-info">
                                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                            </ul>
                                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                            <div class="price">$15</div>
                                            <a href="single-product-layout3.html" class="product-details-btn">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gradient-wrapper mb-60">
                        <ul class="cp-pagination">
                            <li class="disabled"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Previous</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">Next<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                            <div class="add-layout2-left d-flex align-items-center">
                                <div>
                                    <h2>Do you Have Something To Sell?</h2>
                                    <h3>Post your ad on classipost.com</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                            <div class="add-layout2-right d-flex align-items-center justify-content-end mb--sm">
                                <a href="#" class="cp-default-btn-sm-primary">Post Your Ad Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-xl-1 order-lg-1 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="sidebar-item-box">
                        <div class="gradient-wrapper">
                            <div class="gradient-title">
                                <h3>All Categories</h3>
                            </div>
                            <ul class="sidebar-category-list">
                                <li>
                                    <a href="category-grid-layout1.html"><img src="{{ asset('front-end') }}/img/product/ctg1.png" alt="category" class="img-fluid">Electronics<span>(50)</span></a>
                                </li>
                                <li>
                                    <a href="category-grid-layout2.html"><img src="{{ asset('front-end') }}/img/product/ctg2.png" alt="category" class="img-fluid">Fashin &amp; Life Style<span>(20)</span></a>
                                </li>
                                <li>
                                    <a href="category-grid-layout3.html"><img src="{{ asset('front-end') }}/img/product/ctg3.png" alt="category" class="img-fluid">Car &amp; Vehicles<span>(50)</span></a>
                                </li>
                                <li>
                                    <a href="category-list-layout1.html"><img src="{{ asset('front-end') }}/img/product/ctg4.png" alt="category" class="img-fluid">Hobby, Sport &amp; Kids<span>(20)</span></a>
                                </li>
                                <li>
                                    <a href="category-list-layout2.html"><img src="{{ asset('front-end') }}/img/product/ctg5.png" alt="category" class="img-fluid">Pets &amp; Animals<span>(100)</span></a>
                                </li>
                                <li>
                                    <a href="category-list-layout3.html"><img src="{{ asset('front-end') }}/img/product/ctg6.png" alt="category" class="img-fluid">Overseas Jobs<span>(70)</span></a>
                                </li>
                                <li>
                                    <a href="category-grid-layout1.html"><img src="{{ asset('front-end') }}/img/product/ctg7.png" alt="category" class="img-fluid">Property<span>(90)</span></a>
                                </li>
                                <li>
                                    <a href="category-grid-layout2.html"><img src="{{ asset('front-end') }}/img/product/ctg8.png" alt="category" class="img-fluid">Education<span>(30)</span></a>
                                </li>
                                <li>
                                    <a href="category-list-layout3.html"><img src="{{ asset('front-end') }}/img/product/ctg12.png" alt="category" class="img-fluid">Others<span>(150)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-item-box">
                        <div class="gradient-wrapper">
                            <div class="gradient-title">
                                <h3>Location</h3>
                            </div>
                            <ul class="sidebar-loacation-list">
                                <li><a href="#">Atlanta</a></li>
                                <li><a href="#">Wichita</a></li>
                                <li><a href="#">Anchorage</a></li>
                                <li><a href="#">Dallas</a></li>
                                <li><a href="#">New York</a></li>
                                <li><a href="#">Santa Ana/Anaheim</a></li>
                                <li><a href="#">Miami</a></li>
                                <li><a href="#">Others</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Grid View End Here -->
    <!-- Subscribe Area Start Here -->
    <section class="bg-body s-space full-width-border-top">
        <div class="container">
            <div class="section-title-dark">
                <h2 class="size-sm">Receive The Best Offers</h2>
                <p>Stay in touch with Classified Ads Wordpress Theme and we'll notify you about best ads</p>
            </div>
            <div class="input-group subscribe-area">
                <input type="text" placeholder="Type your e-mail address" class="form-control">
                <span class="input-group-addon">
                    <button type="submit" class="cp-default-btn-xl">Subscribe</button>                        
                </span>
            </div>
        </div>
    </section>
    <!-- Subscribe Area End Here -->
@endsection