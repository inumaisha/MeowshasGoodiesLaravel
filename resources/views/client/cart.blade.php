
       @extends('clientLayout.client')
       @section('title')
Cart
@endsection
       @section('content')
<section class="py-5">
           
<div class="container">
	<div class="row">
		
		<div class="relative">
			<div class="panel panel-info">
				
				{{-- <div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
								</button>
							</div>
						</div>
					</div>
				</div> --}}
				
				<div class="panel-body">
					@if(Session::has('cart'))
					@foreach ($products as $product)
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="/storage/product_images/{{$product['product_image']}}">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>{{$product['product_name']}}</strong></h4><h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>£{{$product['product_price']}}<span class="text-muted"></span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="{{$product['qty']}}" min="1">
							</div>
							<div class="col-xs-2">
								<a href="{{url('/remove_from_cart/'.$product['product_id'])}}" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</a>
							</div>
						</div>
					</div>
					@endforeach

					@else

					@endif
					
				

					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Added items?</h6>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Update cart
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>£{{Session::has('cart')?Session::get('cart')->totalPrice : null}}</strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block"><a class="nav-link active" aria-current="page" href="{{url('/checkout')}}">
								Checkout
                            </a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
       </section>
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