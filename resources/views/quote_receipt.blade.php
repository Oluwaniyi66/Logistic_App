@extends('shared')
@section('content')
<div class="cart-cards checkout">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="card">
                <div class="card-header">
                   <h5>Cart Totals</h5>
                </div>
                <div class="card-body">
                   <div class="calculations">
                      <div class="single-calc">
                         <strong>Cart Amount</strong>
                         <span>$ 2070.00</span>
                      </div>
                      <div class="single-calc">
                         <strong>Discount</strong>
                         <span>- $ 270.00</span>
                      </div>
                      <div class="single-calc">
                         <strong>Subtotal</strong>
                         <span>$ 1800.00</span>
                      </div>
                      <div class="single-calc">
                         <strong>Shipping Charge</strong>
                         <span>$ 10.00</span>
                      </div>
                      <div class="single-calc">
                         <strong>Tax</strong>
                         <span>$ 100.00</span>
                      </div>
                      <div class="single-calc total">
                         <strong>Total</strong>
                         <span>$ 1910.00</span>
                      </div>
                   </div>
                   <form class="coupon-form mt-4" action="#">
                      <div class="row">
                         <div class="col-lg-5">
                            <div class="coupon-input">
                               <input type="text" name="coupon" placeholder="Enter coupon code">
                               <button type="button">Apply</button>
                            </div>
                         </div>
                         <div class="col-lg-4">
                            <div class="form-element">
                               <select name="payement">
                                  <option value="" selected="" disabled="">Select a payment gateway</option>
                                  <option value="paypal"> Paypal</option>
                                  <option value="credit"> Credit Card</option>
                                  <option value="cash">Cash on Delivery</option>
                               </select>
                            </div>
                         </div>
                         <div class="col-lg-3">
                            <div class="form-element mb-0">
                               <button type="submit"><span>Place Order</span></button>
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
 @endsection