@extends('clientLayout.client')
@section('content')
<link rel="stylesheet" href="frontend/login/css/style.css">
<!-- Demo CSS -->
<link rel="stylesheet" href="frontend/login/css/demo.css">

<body>


<main>
<article>
<div class="wrapper">
<form class="form-signin">       
  <h2 class="form-signin-heading">Existing Customers</h2>
  <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button> 
  <hr>
  <div class="text-center p-t-90">
    <a class="text" href="{{url('/signup')}}">
        Don't have an account? Sign up now!
    </a>
</div>  
</form>

</div>
</article>
</main>


</body>
@endsection