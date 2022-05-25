@extends('clientLayout.client')
@section('content')
<link rel="stylesheet" href="frontend/login/css/style.css">
<!-- Demo CSS -->
<link rel="stylesheet" href="frontend/login/css/demo.css">

<body>


<main>
<article>
<div class="wrapper">
<form class="form-signin" action="{{url('/creatingAccount')}}" method="POST">    
  {{csrf_field()}}   
  <h2 class="form-signin-heading">Sign Up Now</h2>
  <input type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
  
  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      

  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button> 

  @if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if(Session::has('status'))
  <div class="alert alert-success">
    {{Session::get('status')}}
  </div>
@endif

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