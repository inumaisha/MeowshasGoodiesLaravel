@extends('clientLayout.client')
@section('title')
Checkout
@endsection
        @section('content')
        <section class="py-5">
        {{-- <link href="frontend/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        
        
            <!-- Custom styles for this template -->
            {{-- <link href="frontend/form-validation.css" rel="stylesheet"> --}}
   
          <body class="bg-light">
            <div class="container">
        
          <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">{{Session::has('cart') ? Session::get('cart')->totalQty : 0}}</span>
              </h4>
              <ul class="list-group mb-3">
                
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                <p> Products </p>
                </li>
                 
                <li class="list-group-item d-flex justify-content-between">
                  <span>Totals</span>
                  <strong>£{{Session::has('cart')?Session::get('cart')->totalPrice : null}}</strong>
                </li>
              </ul>
        
              
            </div>
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3">Billing address</h4>
              <form action="{{url('/finalCheckout')}}" method="POST">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="name">Full name</label>
                    <input type="text" class="form-control" name="name" placeholder="" value="" required>
                    
                  </div>
                </div>
        
                <div class="mb-3">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="address" placeholder="" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
        
                <div class="row">
                  
                  <div class="col-md-3 mb-3">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="" required>
                    <div class="invalid-feedback">
                      Country required.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="city">Town/City</label>
                    <input type="text" class="form-control" name="city" placeholder="" required>
                    <div class="invalid-feedback">
                      Town/City required.
                    </div>
                  </div>
                
                  <div class="col-md-3 mb-3">
                    <label for="postcode">Postcode</label>
                    <input type="text" class="form-control" name="postcode" placeholder="" required>
                    <div class="invalid-feedback">
                      Postcode required.
                    </div>
                  </div>
                </div>
             
        
                <h4 class="mb-3">Payment</h4>
        
                <div class="d-block my-3">
                  <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="paypal">PayPal</label>
                  </div>
                </div>
                
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
              </form>
            </div>
          </div>
        </section>
          <hr>
        @endsection
 @section('script')
 <script>
    $(document).ready(function(){

    var quantitiy=0;
       $('.quantity-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
                
                $('#quantity').val(quantity + 1);

              
                // Increment
            
        });

         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
          
                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });
        
    });
</script>
@endsection