@extends('clientLayout.client')
@section('title')
Archive
@endsection
        @section('content')

       <!-- Header-->
    <!-- Section-->
    <section class="py-5">
        
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
            
                </div>
            </div>
              @endforeach

               
            </div>
        </div>
    </section>
@endsection