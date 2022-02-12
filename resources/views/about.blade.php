@extends('shared')
@section('content')

      <!--   search bar popup start   -->
      <div class="search-popup">
        <form class="search-form" action="#">
           <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
        </form>
        <div class="search-popup-overlay" id="searchOverlay"></div>
        <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
     </div>
     <!--   search bar popup end   --> 


     <!--  breadcrumb start  -->
     <div class="breadcrumb-area about-breadcrumb-bg">
        <div class="container">
           <div class="row">
              <div class="col-lg-7">
                 <div class="breadcrumb-txt">
                    <span>about us</span>
                    <h1>we are transpot service provider</h1>
                    <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">About us</li>
                       </ol>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
        <div class="breadcrumb-overlay"></div>
     </div>
     <!--  breadcrumb end  -->
     


     <!--  about section start  -->
     <div class="about-section about">
        <div class="container">
         @foreach ($collecting_abouts as $updatedabout )
           <div class="row">
              <div class="col-xl-5 col-lg-6">
                 <div class="outer">
                    <div class="inner">
                   
                       <div class="about-txt">
                          <span class="title">about us</span>
                          <h2 class="subtitle">{{ $updatedabout['title'] }}</h2>
                          <p>{{ $updatedabout['about'] }}  </p>
                          <p>{{ $updatedabout['about'] }}</p>
                          <img src="images/{{ $updatedabout['image'] }}" alt="">
                          <h5>DAVID ANDERSON</h5>
                          <span>Founder & CEO</span>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-xl-6 offset-xl-1 col-lg-6">
                 <div class="about-right-bg">
                 </div>
              </div>
           </div>
           <div class="targets">
              <div class="row">
                 <div class="col-lg-6">
                    <div class="box wow fadeInUp" data-wow-duration="1s">
                       <div class="icon-wrapper"><i class="flaticon-external-link-square-with-an-arrow-in-right-diagonal"></i></div>
                       <div class="box-details">
                          <h4>Our mission</h4>
                          <p>{{ $updatedabout['mission'] }}</p>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="box wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                       <div class="icon-wrapper"><i class="flaticon-check"></i></div>
                       <div class="box-details">
                          <h4>Our Vision</h4>
                          <p>{{ $updatedabout['vision'] }}</p>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           @endforeach
        </div>
     </div>
     <!--  about section end  -->


     





     <!--   partner section start    -->
     <div class="partner-section">
        <div class="container border-top">
           <div class="row">
              <div class="col-md-12">
                 <div class="partner-carousel owl-carousel owl-theme">
                    <div class="single-partner-item">
                       <div class="outer">
                          <div class="inner">
                             <img src="assets/img/partner-1.png" alt="">
                          </div>
                       </div>
                    </div>
                    <div class="single-partner-item">
                       <div class="outer">
                          <div class="inner">
                             <img src="assets/img/partner-2.png" alt="">
                          </div>
                       </div>
                    </div>
                    <div class="single-partner-item">
                       <div class="outer">
                          <div class="inner">
                             <img src="assets/img/partner-3.png" alt="">
                          </div>
                       </div>
                    </div>
                    <div class="single-partner-item">
                       <div class="outer">
                          <div class="inner">
                             <img src="assets/img/partner-4.png" alt="">
                          </div>
                       </div>
                    </div>
                    <div class="single-partner-item">
                       <div class="outer">
                          <div class="inner">
                             <img src="assets/img/partner-5.png" alt="">
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!--   partner section end    -->


     <!--   cta section start    -->
     <div class="cta-section cta-bg">
        <div class="container">
           <div class="cta-container">
              <div class="row align-items-center">
                 <div class="col-lg-9">
                    <h2 class="mb-lg-0 text-center text-lg-left">Reach your destination 100% safe & secure</h2>
                 </div>
                 <div class="col-lg-3 text-center text-lg-right">
                    <a href="contact.html" class="boxed-btn"><span>Contact Us</span></a>
                 </div>
              </div>
           </div>
        </div>
        <div class="cta-overlay"></div>
     </div>
     <!--   cta section end    -->

     @endsection

    