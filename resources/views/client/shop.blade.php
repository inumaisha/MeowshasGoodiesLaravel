@extends('clientLayout.client')
@section('title')
Shop
@endsection
        @section('content')

       <!-- Header-->
    <!-- Section-->
    <section class="py-5">
        <section class="jumbotron text-center">
            <div class="container">
              <h1>Products</h1>
              <p class="lead text-muted">Shop the latest handmade items here!</p>
              <p>
                <a href="{{url('/shop')}}" class="btn btn-secondary my-2">All</a>
                @foreach ($categories as $category)
                <a href="{{url('/view_product_by_category/'.$category->category_name)}}" class="btn btn-secondary my-2">{{$category->category_name}}</a>
                @endforeach
              </p>
            </div>
          </section>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
               
              @foreach ($products as $product)
              <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="/storage/product_images/{{$product->product_image}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$product->product_name}}</h5>
                          
                            <!-- Product price-->
                            <p>£{{$product->product_price}}</p>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-dark" href="{{url('/addToCart/'.$product->id)}}">Add to cart</a></div>
                    </div>
                </div>
            </div>
              @endforeach

               
            </div>
        </div>
    </section>
@endsection