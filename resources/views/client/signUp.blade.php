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
  <h2 class="form-signin-heading">Your Details</h2>
  <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
  
  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      

  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button> 
  <hr>
  <div class="text-center p-t-90">
    <a class="text" href="{{url('/login')}}">
        Already have an account? Login now!
    </a>
</div>  
</form>

</div>
</article>
</main>


</body>
@endsection