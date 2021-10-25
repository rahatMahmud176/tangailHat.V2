@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('mainContent')

 <!-- Hero Area Start -->
 @include('frontEnd.includes.heroArea')
 <!-- Hero Area End -->

 </header>
 <!-- Header Area wrapper End -->

 <!-- Trending Categories Section Start -->
 <section class="trending-cat section-padding">
   <div class="container">
     <h1 class="section-title">Product Categories</h1>
     <div class="row">


       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 dual-row-for-small-device">
         <a href="category.html">
           <div class="box">
             <div class="icon">
               <img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/category/img-1.png" alt="">
             </div>
             <h4>Vehicle</h4>
             <strong>189 Ads</strong>
           </div>
         </a>
       </div>
       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 dual-row-for-small-device">
         <a href="category.html">
           <div class="box">
             <div class="icon">
               <img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/category/img-2.png" alt="">
             </div>
             <h4>Laptops</h4>
             <strong>255 Ads</strong>
           </div>
         </a>
       </div>
       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 dual-row-for-small-device">
         <a href="category.html">
           <div class="box">
             <div class="icon">
               <img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/category/img-3.png" alt="">
             </div>
             <h4>Mobiles</h4>
             <strong>127 Ads</strong>
           </div>
         </a>
       </div>
       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 dual-row-for-small-device">
         <a href="category.html">
           <div class="box">
             <div class="icon">
               <img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/category/img-4.png" alt="">
             </div>
             <h4>Electronics</h4>
             <strong>69 Ads</strong>
           </div>
         </a>
       </div>
       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 dual-row-for-small-device">
        <a href="category.html">
          <div class="box">
            <div class="icon">
              <img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/category/img-1.png" alt="">
            </div>
            <h4>Vehicle</h4>
            <strong>189 Ads</strong>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 dual-row-for-small-device">
        <a href="category.html">
          <div class="box">
            <div class="icon">
              <img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/category/img-2.png" alt="">
            </div>
            <h4>Laptops</h4>
            <strong>255 Ads</strong>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 dual-row-for-small-device">
        <a href="category.html">
          <div class="box">
            <div class="icon">
              <img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/category/img-3.png" alt="">
            </div>
            <h4>Mobiles</h4>
            <strong>127 Ads</strong>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 dual-row-for-small-device">
        <a href="category.html">
          <div class="box">
            <div class="icon">
              <img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/category/img-4.png" alt="">
            </div>
            <h4>Electronics</h4>
            <strong>69 Ads</strong>
          </div>
        </a>
      </div>

       
        
       
       
     </div>
   </div>
 </section>
 <!-- Trending Categories Section End -->

 <!-- Featured Section Start -->
 <section class="featured section-padding">
   <div class="container">
     <h1 class="section-title">New Products</h1>
     <div class="row">

       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
         <div class="featured-box">
           <figure>
             <div class="icon">
               <i class="lni-heart"></i>
             </div>
             <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img-12.jpg" alt=""></a>
           </figure>
           <div class="feature-content">
             <div class="tg-product">
               <a href="#">Furnitures > Office</a>
             </div>
             <h4><a href="ads-details.html">Office Furnitures</a></h4>
             <span>Last Updated: 5 hours ago</span>
             <ul class="address">
               <li>
                 <a href="#"><i class="lni-map-marker"></i> New York</a>
               </li>
               <li>
                 <a href="#"><i class="lni-alarm-clock"></i> 17 Mar, 8:30 pm</a>
               </li>
               <li>
                 <a href="#"><i class="lni-user"></i> David Givens</a>
               </li>
               <li>
                 <a href="#"><i class="lni-package"></i> Used</a>
               </li>
             </ul>
             <div class="btn-list">
               <a class="btn-price" href="#">$ 1280</a>
               <a class="btn btn-common" href="ads-details.html">
                 <i class="lni-list"></i>
                 View Details
               </a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
         <div class="featured-box">
           <figure>
             <div class="icon">
               <i class="lni-heart"></i>
             </div>
             <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img2.jpg" alt=""></a>
           </figure>
           <div class="feature-content">
             <div class="tg-product">
               <a href="#">Loptop > Accessories</a>
             </div>
             <h4><a href="ads-details.html">Fresh Macbook Pro 2017</a></h4>
             <span>Last Updated: 8 hours ago</span>
             <ul class="address">
               <li>
                 <a href="#"><i class="lni-map-marker"></i> New York</a>
               </li>
               <li>
                 <a href="#"><i class="lni-alarm-clock"></i> 7 Mar, 10:10 pm</a>
               </li>
               <li>
                 <a href="#"><i class="lni-user"></i> John Smith</a>
               </li>
               <li>
                 <a href="#"><i class="lni-package"></i> Used</a>
               </li>
             </ul>
             <div class="btn-list">
               <a class="btn-price" href="#">$ 1100</a>
               <a class="btn btn-common" href="ads-details.html">
                 <i class="lni-list"></i>
                 View Details
               </a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
         <div class="featured-box">
           <figure>
             <div class="icon">
               <i class="lni-heart"></i>
             </div>
             <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img-11.jpg" alt=""></a>
           </figure>
           <div class="feature-content">
             <div class="tg-product">
               <a href="#">Electronics > Naturial</a>
             </div>
             <h4><a href="ads-details.html">Canon Photography Camera</a></h4>
             <span>Last Updated: 4 hours ago</span>
             <ul class="address">
               <li>
                 <a href="#"><i class="lni-map-marker"></i> Delaware</a>
               </li>
               <li>
                 <a href="#"><i class="lni-alarm-clock"></i> 7 Feb, 6:10 pm</a>
               </li>
               <li>
                 <a href="#"><i class="lni-user"></i> Justyna M.</a>
               </li>
               <li>
                 <a href="#"><i class="lni-package"></i> Used</a>
               </li>
             </ul>
             <div class="btn-list">
               <a class="btn-price" href="#">$ 205</a>
               <a class="btn btn-common" href="ads-details.html">
                 <i class="lni-list"></i>
                 View Details
               </a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
         <div class="featured-box">
           <figure>
             <div class="icon">
               <i class="lni-heart"></i>
             </div>
             <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img1.jpg" alt=""></a>
           </figure>
           <div class="feature-content">
             <div class="tg-product">
               <a href="#">Mobiles > Accessories</a>
             </div>
             <h4><a href="ads-details.html">Apple iPhone X</a></h4>
             <span>Last Updated: 13 hours ago</span>
             <ul class="address">
               <li>
                 <a href="#"><i class="lni-map-marker"></i> Albama</a>
               </li>
               <li>
                 <a href="#"><i class="lni-alarm-clock"></i> 3 Jan, 9:05 pm</a>
               </li>
               <li>
                 <a href="#"><i class="lni-user"></i> Mh Arman</a>
               </li>
               <li>
                 <a href="#"><i class="lni-package"></i> Brand New</a>
               </li>
             </ul>
             <div class="btn-list">
               <a class="btn-price" href="#">$ 799</a>
               <a class="btn btn-common" href="ads-details.html">
                 <i class="lni-list"></i>
                 View Details
               </a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
         <div class="featured-box">
           <figure>
             <div class="icon">
               <i class="lni-heart"></i>
             </div>
             <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img-09.jpg" alt=""></a>
           </figure>
           <div class="feature-content">
             <div class="tg-product">
               <a href="#">Loptop > Accessories</a>
             </div>
             <h4><a href="ads-details.html">Amazing Room for Rent</a></h4>
             <span>Last Updated: 4 hours ago</span>
             <ul class="address">
               <li>
                 <a href="#"><i class="lni-map-marker"></i> Chicago</a>
               </li>
               <li>
                 <a href="#"><i class="lni-alarm-clock"></i> 1 Jan, 7:00 pm</a>
               </li>
               <li>
                 <a href="#"><i class="lni-user"></i> Elon Musk</a>
               </li>
               <li>
                 <a href="#"><i class="lni-package"></i> N/A</a>
               </li>
             </ul>
             <div class="btn-list">
               <a class="btn-price" href="#">$ 250</a>
               <a class="btn btn-common" href="ads-details.html">
                 <i class="lni-list"></i>
                 View Details
               </a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
         <div class="featured-box">
           <figure>
             <div class="icon">
               <i class="lni-heart"></i>
             </div>
             <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img-10.jpg" alt=""></a>
           </figure>
           <div class="feature-content">
             <div class="tg-product">
               <a href="#">Office > Stationary</a>
             </div>
             <h4><a href="ads-details.html">Custom Notebooks</a></h4>
             <span>Last Updated: 12 hours ago</span>
             <ul class="address">
               <li>
                 <a href="#"><i class="lni-map-marker"></i> Washington</a>
               </li>
               <li>
                 <a href="#"><i class="lni-alarm-clock"></i> 12 Dec, 10:10 pm</a>
               </li>
               <li>
                 <a href="#"><i class="lni-user"></i> John Smith</a>
               </li>
               <li>
                 <a href="#"><i class="lni-package"></i> Brand New</a>
               </li>
             </ul>
             <div class="btn-list">
               <a class="btn-price" href="#">$ 25</a>
               <a class="btn btn-common" href="ads-details.html">
                 <i class="lni-list"></i>
                 View Details
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Featured Section End -->

 <!-- Featured Listings Start -->
 <section class="featured section-padding">
  <div class="container">
    <h1 class="section-title">Latest Products</h1>
    <div class="row">

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img-12.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="tg-product">
              <a href="#">Furnitures > Office</a>
            </div>
            <h4><a href="ads-details.html">Office Furnitures</a></h4>
            <span>Last Updated: 5 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> New York</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> 17 Mar, 8:30 pm</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> David Givens</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> Used</a>
              </li>
            </ul>
            <div class="btn-list">
              <a class="btn-price" href="#">$ 1280</a>
              <a class="btn btn-common" href="ads-details.html">
                <i class="lni-list"></i>
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img2.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="tg-product">
              <a href="#">Loptop > Accessories</a>
            </div>
            <h4><a href="ads-details.html">Fresh Macbook Pro 2017</a></h4>
            <span>Last Updated: 8 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> New York</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> 7 Mar, 10:10 pm</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> John Smith</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> Used</a>
              </li>
            </ul>
            <div class="btn-list">
              <a class="btn-price" href="#">$ 1100</a>
              <a class="btn btn-common" href="ads-details.html">
                <i class="lni-list"></i>
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img-11.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="tg-product">
              <a href="#">Electronics > Naturial</a>
            </div>
            <h4><a href="ads-details.html">Canon Photography Camera</a></h4>
            <span>Last Updated: 4 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> Delaware</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> 7 Feb, 6:10 pm</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> Justyna M.</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> Used</a>
              </li>
            </ul>
            <div class="btn-list">
              <a class="btn-price" href="#">$ 205</a>
              <a class="btn btn-common" href="ads-details.html">
                <i class="lni-list"></i>
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img1.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="tg-product">
              <a href="#">Mobiles > Accessories</a>
            </div>
            <h4><a href="ads-details.html">Apple iPhone X</a></h4>
            <span>Last Updated: 13 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> Albama</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> 3 Jan, 9:05 pm</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> Mh Arman</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> Brand New</a>
              </li>
            </ul>
            <div class="btn-list">
              <a class="btn-price" href="#">$ 799</a>
              <a class="btn btn-common" href="ads-details.html">
                <i class="lni-list"></i>
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img-09.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="tg-product">
              <a href="#">Loptop > Accessories</a>
            </div>
            <h4><a href="ads-details.html">Amazing Room for Rent</a></h4>
            <span>Last Updated: 4 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> Chicago</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> 1 Jan, 7:00 pm</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> Elon Musk</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> N/A</a>
              </li>
            </ul>
            <div class="btn-list">
              <a class="btn-price" href="#">$ 250</a>
              <a class="btn btn-common" href="ads-details.html">
                <i class="lni-list"></i>
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 dual-row-for-small-device">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="{{ asset('frontEnd') }}/assets/img/featured/img-10.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="tg-product">
              <a href="#">Office > Stationary</a>
            </div>
            <h4><a href="ads-details.html">Custom Notebooks</a></h4>
            <span>Last Updated: 12 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> Washington</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> 12 Dec, 10:10 pm</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> John Smith</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> Brand New</a>
              </li>
            </ul>
            <div class="btn-list">
              <a class="btn-price" href="#">$ 25</a>
              <a class="btn btn-common" href="ads-details.html">
                <i class="lni-list"></i>
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <!-- Featured Listings End -->

 <!-- Services Section Start -->
 <section class="services section-padding">
   <div class="container">
     <div class="row">
       <!-- Services item -->
       <div class="col-md-6 col-lg-4 col-xs-12">
         <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
           <div class="icon">
             <i class="lni-book"></i>
           </div>
           <div class="services-content">
             <h3><a href="#">Full Documented</a></h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
           </div>
         </div>
       </div>
       <!-- Services item -->
       <div class="col-md-6 col-lg-4 col-xs-12">
         <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
           <div class="icon">
             <i class="lni-leaf"></i>
           </div>
           <div class="services-content">
             <h3><a href="#">Clean & Modern Design</a></h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
           </div>
         </div>
       </div>
       <!-- Services item -->
       <div class="col-md-6 col-lg-4 col-xs-12">
         <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
           <div class="icon">
             <i class="lni-cog"></i>
           </div>
           <div class="services-content">
             <h3><a href="#">Great Features</a></h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
           </div>
         </div>
       </div>
       <!-- Services item -->
       <div class="col-md-6 col-lg-4 col-xs-12">
         <div class="services-item wow fadeInRight" data-wow-delay="0.8s">
           <div class="icon">
             <i class="lni-spray"></i>
           </div>
           <div class="services-content">
             <h3><a href="#">Completely Customizable</a></h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
           </div>
         </div>
       </div>
        <!-- Services item -->
       <div class="col-md-6 col-lg-4 col-xs-12">
         <div class="services-item wow fadeInRight" data-wow-delay="1s">
           <div class="icon">
             <i class="lni-emoji-smile"></i>
           </div>
           <div class="services-content">
             <h3><a href="#">User Friendly</a></h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
           </div>
         </div>
       </div>
        <!-- Services item -->
       <div class="col-md-6 col-lg-4 col-xs-12">
         <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
           <div class="icon">
             <i class="lni-layout"></i>
           </div>
           <div class="services-content">
             <h3><a href="#">Awesome Layout</a></h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Services Section End -->

 <!-- Counter Area Start-->
 <section class="counter-section section-padding">
   <div class="container">
     <div class="row">
       <!-- Counter Item -->
       <div class="col-md-3 col-sm-6 work-counter-widget text-center dual-row-for-small-device">
         <div class="counter">
           <div class="icon"><i class="lni-layers"></i></div>
           <div class="counterUp">12090</div>
           <p>Regular Ads</p>
         </div>
       </div>
       <!-- Counter Item -->
       <div class="col-md-3 col-sm-6 work-counter-widget text-center dual-row-for-small-device">
         <div class="counter">
           <div class="icon"><i class="lni-map"></i></div>
           <div class="counterUp">350</div>
           <p>Locations</p>
         </div>
       </div>
       <!-- Counter Item -->
       <div class="col-md-3 col-sm-6 work-counter-widget text-center dual-row-for-small-device">
         <div class="counter">
           <div class="icon"><i class="lni-user"></i></div>
           <div class="counterUp">23453</div>
           <p>Reguler Members</p>
         </div>
       </div>
       <!-- Counter Item -->
       <div class="col-md-3 col-sm-6 work-counter-widget text-center dual-row-for-small-device">
         <div class="counter">
           <div class="icon"><i class="lni-briefcase"></i></div>
           <div class="counterUp">250</div>
           <p>Premium Ads</p>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Counter Area End-->

  

 <!-- Testimonial Section Start -->
 <section class="testimonial section-padding">
   <div class="container">
     <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div id="testimonials" class="owl-carousel">
           <div class="item">
             <div class="testimonial-item">
               <div class="img-thumb">
                 <img src="{{ asset('frontEnd') }}/assets/img/testimonial/img1.png" alt="">
               </div>
               <div class="content">
                 <h2><a href="#">John Doe</a></h2>
                 <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                 <h3>Developer at of <a href="#">xyz company</a></h3>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="testimonial-item">
               <div class="img-thumb">
                 <img src="{{ asset('frontEnd') }}/assets/img/testimonial/img2.png" alt="">
               </div>
               <div class="content">
                 <h2><a href="#">Jessica</a></h2>
                 <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                 <h3>Developer at of <a href="#">xyz company</a></h3>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="testimonial-item">
               <div class="img-thumb">
                 <img src="{{ asset('frontEnd') }}/assets/img/testimonial/img3.png" alt="">
               </div>
               <div class="content">
                 <h2><a href="#">Johnny Zeigler</a></h2>
                 <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                 <h3>Developer at of <a href="#">xyz company</a></h3>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="testimonial-item">
               <div class="img-thumb">
                 <img src="{{ asset('frontEnd') }}/assets/img/testimonial/img1.png" alt="">
               </div>
               <div class="content">
                 <h2><a href="#">John Doe</a></h2>
                 <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                 <h3>Developer at of <a href="#">xyz company</a></h3>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="testimonial-item">
               <div class="img-thumb">
                 <img src="{{ asset('frontEnd') }}/assets/img/testimonial/img2.png" alt="">
               </div>
               <div class="content">
                 <h2><a href="#">Jessica</a></h2>
                 <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                 <h3>Developer at of <a href="#">xyz company</a></h3>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Testimonial Section End -->

 <!-- Subscribe Section Start -->
 <section class="subscribes section-padding">
   <div class="container">
     <div class="row wrapper-sub">
       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <p>Join our 10,000+ subscribers and get access to the latest templates, freebies, announcements and resources!</p>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <form>
           <div class="subscribe">
             <input class="form-control" name="email" placeholder="Your email here" required="" type="email">
             <button class="btn btn-common" type="submit">Subscribe</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </section>
@endsection