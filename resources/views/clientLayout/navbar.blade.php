       

 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{url('/')}}">Meowshas' Goodies</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Archive</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="{{url('/shop')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('/shop')}}">All Products</a></li>
                        <li><a class="dropdown-item" href="{{url('/shop')}}">Clay Crafts</a></li>
                        <li><a class="dropdown-item" href="{{url('/shop')}}">Cute Crochets</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{url('/cart')}}">Cart</a></li>
                        <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{url('/login')}}"><i class="bi bi-person-fill"></i>Login</a></li>
                    </button>
            </form>
                <form class="d-flex">
                    <a class="nav-link active" aria-current="page" href="{{url('/cart')}}">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">{{Session::has('cart') ? Session::get('cart')->totalQty : 0}}</span>
                        </a>
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