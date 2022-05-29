@extends('clientLayout.client')

@section('content')
<h1> Products </h1>
@if (Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
    {{Session::put('success', null)}}
</div>
@endif
      @foreach ($products as $product)
      <div class="well">
            <h1><a href ="/products/{{$product->id }}">{{$product->product_name}}</a></h1>
            <h3>£ {{$product->product_price}}</h3>
            <hr>
          
      </div>
      @endforeach
      {{$products->links()}} 
      @endsection
