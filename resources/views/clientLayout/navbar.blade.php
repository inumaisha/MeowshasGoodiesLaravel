       

 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container px-4 px-lg-5">
        <a href="{{url('/')}}" class="navbar-brand pull-left"><img src="https://cdn.discordapp.com/attachments/809544916195082292/979118780061978694/MEOWSHA_GOODIES_Smallest.png"></a> 
        {{-- <a class="navbar-brand" href="{{url('/')}}">Meowshas' Goodies</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active text-white-50" aria-current="page" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white-50" href="{{url('/about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link text-white-50" href="{{url('/archive')}}">Archive</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white-50" id="navbarDropdown" href="{{url('/shop')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('/shop')}}">All Products</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{url('/cart')}}">Cart</a></li>
                    
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav pull-right">
                <form class="d-flex">
                    <a class="nav-link active text-white-50 " aria-current="page" href="{{url('/cart')}}">
                        <a class="nav-link active text-white-50" aria-current="page" href="{{url('/cart')}}">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-light text-black ms-1 rounded-pill">{{Session::has('cart') ? Session::get('cart')->totalQty : 0}}</span>
                        </a>
                    </button> 
                
                </form>

                <form class="d-flex">
                    <button class="btn btn-outline-secondary" type="submit">
                        @if (Session::has('client'))
                <li class="nav-item"><a class="nav-link active text-white-50" aria-current="page" href="{{url('/logOut')}}"><i class="bi bi-person-fill"></i>LOGOUT</a></li>
                @else
                <li class="nav-item"><a class="nav-link active text-white-50" aria-current="page" href="{{url('/checkout')}}"><i class="bi bi-person-fill"></i>LOGIN</a></li>
                @endif
                    </button>
            </form>
            </ul>
           
          
            
            
            {{-- <form class="d-flex flex-row-reverse">
                <div class="p-2 bd-highlight">
                    <a href="/login">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi bi-person-fill"></i>
                    Login
                </a>
                </button>
            </div>
            </form> --}}
        </div>
    </div>
</nav>