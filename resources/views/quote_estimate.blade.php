<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Estimate</title>
     <!-- favicon -->
     <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- fontawesome css -->
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <!-- fontawesome css -->
      <link rel="stylesheet" href="assets/css/fontawesome.min.css">
      <!-- owl carousel css -->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <!-- owl carousel theme css -->
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <!-- slicknav css -->
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <!-- animate css -->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!-- main css -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- responsive css -->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <!-- jquery js -->
      <script src="assets/js/jquery-3.3.1.min.js"></script>

</head>

<body>
    



    <div class="cart-cards checkout">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <form action="/tracker" method="POST">
                     @csrf
                     <div class="card">
                        <div class="card-header">
                           <h5>Quote Estimate</h5>
                        </div>
                        <div class="card-body">
                           <div class="calculations">
                              <div class="single-calc">
                                 <strong>Name</strong>
                                 <span>{{ $all_data['name'] }}</span>
                                  <input type="hidden" name="name" value="{{ $all_data['name'] }}">
                                 </div>
                                 <div class="single-calc">
                                    <strong>Freight</strong>
                                    <span>{{ $all_data['freight'] }}</span>
                                    <input type="hidden" name="freight" value="{{ $all_data['freight'] }}">
                                 </div>
                                 <div class="single-calc">
                                    <strong>Email</strong>
                                    <span>{{ $all_data['email'] }}</span>
                                    <input hidden type="hidden" name="email" value="{{ $all_data['email'] }}">
                                 </div>
                                 <div class="single-calc">
                                    <strong>phone </strong>
                                    <span>{{ $all_data['phone'] }}</span>
                                    <input type="hidden" name="phone" value="{{ $all_data['phone'] }}">
                                 </div>
                                 <div class="single-calc">
                                    <strong>Distance (Km)</strong>
                                    <span>{{ $all_data['distance'] }}</span>
                                    <input type="hidden" name="distance" value="{{ $all_data['distance'] }}">
                                 </div>
                                 <div class="single-calc">
                                    <strong>Weight (Kg)</strong>
                                    <span>{{ $all_data['weight'] }}</span>
                                    <input type="hidden" name="weight" value="{{ $all_data['weight'] }}">
                                 </div>
                                 <div class="single-calc">
                                    <strong> Pickup Address</strong>
                                    <span>{{ $all_data['pickup'] }}</span>
                                    <input type="hidden" name="pickup" value="{{ $all_data['pickup'] }}">
                                 </div>
                                 <div class="single-calc">
                                    <strong> Dropoff Address</strong>
                                    <span>{{ $all_data['dropoff'] }}</span>
                                    <input type="hidden" name="dropoff" value="{{ $all_data['dropoff'] }}">
                              </div>
                             
                              <div class="single-calc total">
                                
                                    @if($all_data['freight'] == 'roadfrieght') 
                                    <?php
                              
                                    
                                       $estimate = ($calc_values[0]->weight*$all_data['weight'])+ ($calc_values[0]->distance*$all_data['distance'])+ $calc_values['roadfrieght']
                                       
                                    ?>
                                    <h4> {{ $estimate }}</h4>
                                    
                                    @elseif($all_data['freight'] == 'airfrieght')
                                    <?php
                                       $estimate = ($calc_values[0]->weight*$all_data['weight'])+ ($calc_values[0]->distance*$all_data['distance'])+ $calc_values['airfrieght']
                                       
                                    ?>
                                    <h4> {{ $estimate }}</h4>
                                    @else
                                    <?php
                                       $estimate =($calc_values[0]->weight*$all_data['weight'])+ ($calc_values[0]->distance*$all_data['distance'])+ $calc_values[0]->shipfreight
                                       
                                       ?>
                                       <h4> {{ $estimate }}</h4>
                                    @endif
   
                                 
                                 <strong>Total price</strong>
                                 <span>$  <h4> {{ $estimate }} </h4></span>
                                 <input type="hidden" name="estimate"  value="{{ $estimate }}">
                              </div>
                              <div class="col-lg-5">
                                 <div class="coupon-input">
                                 <a href="/home">
                                    Cancel Order</a>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="form-element mb-0">
                                    <button type="submit" name="submit"><span>Place Order</span></button>
                                 </div>
                              </div>
                           </div>
                        </form>
                        </div>
                     </div>

                  
               </div>
            </div>
         </div>
      </div>
</body>
</html>