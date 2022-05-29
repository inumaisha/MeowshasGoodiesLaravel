@extends('clientLayout.client')


@section('content')
<h2>Product Details</h2>
   
      <div>
            <h1>{{$product->product_name}}</h1>
            <h4>£{{$product->product_price}}</h4>
            <p>{{$product->product_category}}</p>
            <hr>
            
      </div>
    
      
      @endsection
