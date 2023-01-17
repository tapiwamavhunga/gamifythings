
@extends('layouts.default')
<style type="text/css">
    .half .bg {
  background-size: cover;
  background-position: bottom !important;
}
body{
        font-family: 'Unbounded', cursive !important;
}

h1{
           font-family: 'Unbounded', cursive !important;
 
}
.half .bg {
  background-size: contain;
  background-position: bottom !important;
  background-repeat: no-repeat;
}

.form-check-label {
  font-size: 12px;
  margin-top: 3px;
}
.half .forgot-pass {
  position: relative;
  top: 8px;
  font-size: 13px;
}

.half .btn {
  height: 44px;
  padding-left: 30px;
  padding-right: 30px;
}

.btn.btn-block.btn-primary {
  font-size: 14px;
}

.btn.d-flex.justify-content-center.align-items-center {
  font-size: 14px;
}

</style>
@section('content')
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('/myassets/images/login.png'); "></div>

    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            
            <!-- <img src="https://shalina.com/wp-content/uploads/2022/12/Artboardw-1.png" style="width: 300px;
margin-left: -20px;
margin-bottom: 20px;"> -->

            <div class="mb-4">
              <h1>Sign In</h1>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                        @csrf
              <div class="form-group first">
                <label for="username">Username</label>

                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                     <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                <span class="ml-auto">
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link forgot-pass" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

              <span class="d-block text-center my-4 text-muted">— or —</span>
            <div class="social-login">
<a href="{{route('login.facebook')}}" class="facebook btn d-flex justify-content-center align-items-center">
<span class="icon-facebook mr-3"></span> Login with Facebook
</a>
<!-- <a href="{{route('login.github')}}" class="twitter btn d-flex justify-content-center align-items-center">
<span class="icon-twitter mr-3"></span> Login with Twitter
</a> -->
<a href="{{route('login.google')}}" class="google btn d-flex justify-content-center align-items-center">
<span class="icon-google mr-3"></span> Login with Google
</a>
</div> 




            </form>

            <br>
            <a  href="/register">
                                        Register
                                    </a>


          </div>


        </div>
      </div>
    </div>

    
  </div>
    
@endsection
