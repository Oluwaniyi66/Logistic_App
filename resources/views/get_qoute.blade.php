
@extends('shared')
@section('content')
<!--   quote section start    -->
<div class="quote-section quote-bg">
    <div class="container">
       <div class="row">
          <div class="offset-lg-5 col-lg-7">
             <div class="quote-form-section">
                <span class="title">Quote</span>
                <h2 class="subtitle">Request a free qoute</h2>
                <form action="/quote_estimate"  method="POST" >
                   @csrf
                   <div class="row">
                      <div class="col-lg-6">
                         <div class="form-element"><input name="name" type="text" placeholder="Your name"></div>
                      </div>
                      <div class="col-lg-6">
                         <div class="form-element">
                            <div class="select-wrapper">
                               <select name="freight">
                                  <option value="" selected disabled>Select a Freight</option>
                                  <option value="Air Freight">Air Freight</option>
                                  <option value="Ocean Freight">Ocean Freight</option>
                                  <option value="Road Freight">Road Freight</option>
                               </select>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-6">
                         <div class="form-element"><input name="email" type="email" placeholder="Email"></div>
                      </div>
                      <div class="col-lg-6">
                         <div class="form-element"><input name="phone" type="text" placeholder="Phone number"></div>
                      </div>
                      <div class="col-lg-6">
                         <div class="form-element"><input name="distance" type="number" placeholder="Distance(Km)"></div>
                      </div>
                      <div class="col-lg-6">
                         <div class="form-element"><input name="weight" type="number" placeholder="Weight(Kg)"></div>
                      </div>
                      <div class="col-lg-6">
                         <div class="form-element"><input name="pickup" type="text" placeholder="pick_up address"></div>
                      </div>
                      <div class="col-lg-6">
                         <div class="form-element"><input name="dropoff" type="text" placeholder="drop_off address"></div>
                      </div>
                      <div class="col-lg-12">
                         <div class="form-element mb-0"><button type="submit"> <span>Submit</span></button></div>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--   quote section end    -->
 @endsection