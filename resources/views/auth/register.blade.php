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

              

            <div class="mb-4">
              <h1 style="font-size: 1.5rem;">Sign Up</h1>
              <p class="mb-4" style="font-size: 14px;">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                         <div class="form-group first">
                            <label for="name">{{ __('Name') }}</label>

                           
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-group">
                            <label for="name">{{ __('Cell Number') }}</label>

                           
                                <input id="cell_number" type="text" class="form-control @error('cell_number') is-invalid @enderror" name="cell_number" value="{{ old('cell_number') }}" required autocomplete="cell_number" autofocus>

                                @error('cell_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>



                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" >{{ __('Password') }}</label>

                     
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group last mb-5">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                                    <input type="submit" value="Register" class="btn btn-block btn-primary">

      

                    </form>
                 <br>
            <a  href="/login">
                                        Sign In
                                    </a>


          </div>


        </div>
      </div>
    </div>

    
  </div>
@endsection
