@extends('layouts.app')

@section('content')
<div class="section loginLayOut" style="min-height: 100vh; background: transparent !important;">
    

<div class="container container2">
    <div class="row">

    <h3 class="pageTitle">
      {{ trans('loginPage.title') }}
    </h3>

    <div class="col s12 l4 authBtns" style=" padding: 0; ">
        <h5>Sign In With ↴</h5>
        <a class="waves-effect waves-light btn FacebookBtn" href="{{url('/auth/facebook')}}"><i class="fa fa-facebook"></i> Facebook Sign In</a>
        <a class="waves-effect waves-light btn GoogleBtn" href="{{url('/auth/google')}}"><i class="fa fa-google-plus"></i> Google+ Sign In</a>
        <a class="waves-effect waves-light btn TwitterBtn" href="{{url('/auth/twitter')}}"><i class="fa fa-twitter"></i> Twitter Sign In</a>
        <a class="waves-effect waves-light btn LinkedInBtn" href="{{url('/auth/linkedin')}}"><i class="fa fa-linkedin"></i> LinkedIn Sign In</a>
        <a class="waves-effect waves-light btn link">More [...]</a>
    </div>
    <div class="col s12 l8 loginFormLayout" style=" padding: 0; ">

        @if(session('error_auth_message'))
        <div class="alert alert-error">
                {{ session('error_auth_message') }}
                <span class="red-text" style=" display: block; margin-top: 10px; ">Try To Login, Use Another Authentication Method Or Use Forget Password.</span>
        </div>
        <br>
        @endif
        
        <h5>{{ trans('loginPage.formTitle') }} <a class="RegisterBtn" style=" font-size: 13px; padding-left: 10px; padding-right: 10px; " href="{{ url('/register') }}">[ Register New ]</a></h5>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}" >
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-field col-md-4">
                  <input id="email" type="email" name="email" value="{{ old('email') }}" class="validate" autocomplete="off">
                  <label for="email">Email <span class="red-text">*</span></label>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-field col-md-4">
                  <input id="password" type="password" name="password" class="validate" autocomplete="off">
                  <label for="password">Password <span class="red-text">*</span></label>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <div class="checkbox">
                        <!-- <input  checked="checked" type="checkbox" id="remember" name="remember"> 
                        <label>Remember Me</label> -->
                        <input type="checkbox" id="myCheckbox" name="remember"/>
                        <label for="myCheckbox">Remember Me</label>
                      </div>
                  </div>
              </div>
              <br>


              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary waves-effect waves-light green submit">
                          ❯❯ Login
                      </button>

                      <a class="btn btn-link waves-effect waves-light red forget" href="{{ url('/password/reset') }}">Forgot Password?</a>
                  </div>
              </div>
        </form>

    </div>
  </div>
</div>
<div class="parallax"><img style="opacity: 0.3;" src="{{url('https://ae01.alicdn.com/kf/HTB10d1nNFXXXXXWXFXXq6xXFXXX2/Decoration-Custom-Kate-Upton-Posters-font-b-Super-b-font-Model-font-b-Wallpaper-b-font.jpg')}}"></div>
</div>

@endsection
