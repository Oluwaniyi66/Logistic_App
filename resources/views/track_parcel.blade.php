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
     
     <!--  breadcrumb end  -->


     <!--   contact section start    -->
     <div class="contact-section">
        <div class="container">
       
           <!--  contact infos end  -->
           <!--  contact form and map start  -->
           <div class="contact-form-section">
              <div class="row">
                 <div class="col-lg-6">
                    <span class="title">Track Parcel</span>
                    <h2 class="subtitle">KEEP IN TOUCH WITH YOUR ORDER</h2>
                    <form  method="POST">
                     @csrf
                     @if ($message =Session::get('success_msg'))
                     <p>{{ $message }}</p>
                         
                     @endif
                       <div class="row">
             
                          <div class="col-md-6">
                             <div class="form-element"><input type="text" name="trackingID" placeholder="please enter your trackingID"></div>
                             <span>@error('name'){{ $message }}
              
                                @enderror</span>
                            </div>
                          
                          <div class="col-md-12">
                             <div class="form-element">
                                <button type="submit"><span>Submit</span></button>
                             </div>
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="col-lg-6">
                    <div class="map-wrapper">
                       <div id="map"></div>
                    </div>
                 </div>
              </div>
           </div>
           <!--  contact form and map end  -->
        </div>
     </div>
     <!--   contact section end    -->


    @endsection