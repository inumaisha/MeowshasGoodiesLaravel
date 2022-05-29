@extends('clientLayout.client')
@section('content')
<link rel="stylesheet" href="frontend/login/css/style.css">
<!-- Demo CSS -->
<link rel="stylesheet" href="frontend/login/css/demo.css">

<body>


<main>
<article>
<div class="wrapper">
  <form class="form-signin" action="{{url('/accessAccount')}}" method="POST">     
    {{csrf_field()}}       
  <h2 class="form-signin-heading">Existing Customers</h2>
  <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      

  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> 
 <br>

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
  <div class="alert alert-danger">
    {{Session::get('status')}}
  </div>
@endif

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