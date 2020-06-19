<!DOCTYPE html>
<html>
<head>
	<title>Mr. White</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
 <body class="text-center bg-awsm">

    <form class="form-signin" action="{{ route('login-post') }}" method="post">
			{{ csrf_field() }}
			@if(\Session::has('alert'))
		    <div class="alert alert-danger">
		      <div>{{Session::get('alert')}}</div>
		    </div>
		  @endif
		  @if(\Session::has('alert-success'))
		    <div class="alert alert-success">
		      <div>{{Session::get('alert-success')}}</div>
		    </div>
		  @endif
      <h1 class="h3 mb-3 font-weight-normal custom">Mr. White</h1>
      <img class="mb-4" src="image/logo1.png" alt="" width="72" height="72">
      <h2 class="h3 mb-3 font-weight-normal custom">Admin Page</h2>
      <label for="email" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" value="{{request()->input('email')}}" required autofocus>
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="{{request()->input('password')}}" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

<script type="text/javascript" src="{{mix('js/app.js')}} "></script>
</body>
</html>
