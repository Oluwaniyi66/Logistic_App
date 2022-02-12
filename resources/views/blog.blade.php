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
     <div class="breadcrumb-area blog-breadcrumb-bg">
        <div class="container">
           <div class="row">
              <div class="col-lg-8">
                 <div class="breadcrumb-txt">
                    <span>Latest Blog</span>
                    <h1>FROM THE LATEST NEWS AND BLOG</h1>
                    <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Blog</li>
                       </ol>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
        <div class="breadcrumb-overlay"></div>
     </div>
     <!--  breadcrumb end  -->


     <!--    blog lists start   -->
     <div class="blog-lists">
        <div class="container">
           <div class="row">
              <div class="col-xl-7 col-lg-8">
                 <div class="row">
                    <div class="col-lg-12">
                       <div class="single-blog">
                        @foreach ($collecting_blogs as $updatedblog )

                        
                          <div class="blog-img-wrapper">
                             <img src="images/{{ $updatedblog['image'] }}" alt="">
                          </div>
                          <div class="blog-txt">
                             <p class="date">{{ $updatedblog['created_at'] }}  -  BY Admin</p>
                             <h3 class="blog-title"><a href="/blog_details">{{ $updatedblog['title'] }}</a></h3>
                             <p class="blog-summary">{{ $updatedblog['content'] }}</p>
                             <a href="/blog_details" class="readmore">Read More</a>
                          </div>
                          @endforeach
                       </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-lg-12">
                       <nav class="pagination-nav">
                          <ul class="pagination justify-content-center">
                             <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                             </li>
                             <li class="page-item"><a class="page-link" href="#">1</a></li>
                             <li class="page-item active"><a class="page-link" href="#">2</a></li>
                             <li class="page-item"><a class="page-link" href="#">3</a></li>
                             <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                             </li>
                          </ul>
                       </nav>
                    </div>
                 </div>
              </div>
                   
                 </div>
              </div>
              <!--    blog sidebar section end   -->
           </div>
        </div>
        
     </div>
     <!--    blog lists end   -->


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