@extends('layouts.app')

@section('content')
<div class="section loginLayOut" style="min-height: 100vh; background: transparent !important;">
    

<div class="container container2">
    <div class="row">

    <h3 class="pageTitle">
      {{ trans('signup.title') }}
    </h3>

    <div class="col s12 l4 authBtns" style=" padding: 0; ">
        <h5>Sign Up With ↴</h5>
        <a class="waves-effect waves-light btn FacebookBtn" href="{{url('/auth/facebook')}}"><i class="fa fa-facebook"></i> Facebook Sign Up</a>
        <a class="waves-effect waves-light btn GoogleBtn" href="{{url('/auth/google')}}"><i class="fa fa-google-plus"></i> Google+ Sign Up</a>
        <a class="waves-effect waves-light btn TwitterBtn" href="{{url('/auth/twitter')}}"><i class="fa fa-twitter"></i> Twitter Sign Up</a>
        <a class="waves-effect waves-light btn LinkedInBtn" href="{{url('/auth/linkedin')}}"><i class="fa fa-linkedin"></i> LinkedIn Sign Up</a>
        <a class="waves-effect waves-light btn link">More [...]</a>
    </div>
    
    
    <div class="col s12 l8 loginFormLayout" style=" padding: 0; ">
        
        <h5>{{ trans('signup.formTitle') }} <a class="RegisterBtn" style=" font-size: 13px; padding-left: 10px; padding-right: 10px; " href="{{ url('/login') }}">[ Login Here ]</a></h5>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                <div class="input-field col-md-4">
                  <input id="fname" type="text" name="fname" value="{{ old('fname') }}" class="validate" required>
                  <label for="fname">First Name <span class="red-text">*</span></label>
                  @if ($errors->has('fname'))
                      <span class="help-block">
                          <strong>{{ $errors->first('fname') }}</strong>
                      </span>
                  @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                <div class="input-field col-md-4">
                  <input id="lname" type="text" name="lname" value="{{ old('lname') }}" class="validate" required>
                  <label for="lname">Last Name <span class="red-text">*</span></label>
                  @if ($errors->has('lname'))
                      <span class="help-block">
                          <strong>{{ $errors->first('lname') }}</strong>
                      </span>
                  @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}" style="padding-bottom: 10px;">
                <div class="input-field col-md-4">
                  Gender <span class="red-text">*</span>
                  <p style=" padding: 0; margin: 0 !important;">
                    
                    <div style=" display:inline-block; padding: 0; margin: 0; padding-right: 10px; "> 
                      <input name="gender" type="radio" value="male" id="male"/>
                      <label for="male">Male</label>
                    </div>

                    <div style=" display: inline-block; padding: 0; margin: 0; padding-right: 10px;"> 
                      <input name="gender" type="radio" value="female" id="female" />
                      <label for="female">Female</label>
                    </div>

                  </p>
                  @if ($errors->has('gender'))
                      <br><span class="help-block">
                          <strong>{{ $errors->first('gender') }}</strong>
                      </span>
                  @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-field col-md-4">
                  <input id="email" type="email" name="email" value="{{ old('email') }}" class="validate" required>
                  <label for="email">Email <span class="red-text">*</span></label>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }} DateOfBirth">
                <div class="input-field col-md-4">
                  <input id="date_of_birth" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="validate datepicker" required>
                  <label for="date_of_birth">Date Of Birth <span class="red-text">*</span></label>
                  @if ($errors->has('date_of_birth'))
                      <span class="help-block">
                          <strong>{{ $errors->first('date_of_birth') }}</strong>
                      </span>
                  @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-field col-md-4">
                  <input id="password" type="password" name="password" class="validate" required>
                  <label for="password">Password <span class="red-text">*</span></label>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <div class="input-field col-md-4">
                  <input id="password-confirm" type="password" name="password_confirmation" class="validate" required>
                  <label for="password-confirm">Confirm Password <span class="red-text">*</span></label>
                  @if ($errors->has('password_confirmation'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </span>
                  @endif
                </div>
            </div>

            <div class="form-group" style="margin-top: 20px; padding-bottom: 10px;">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary waves-effect waves-light green submit">
                        Register
                    </button>
                </div>
            </div>
        </form>

    </div>
  </div>
</div>
<div class="parallax"><img style="opacity: 0.3;" src="{{url('http://localhost/giphy.webp')}}"></div>
</div>

@endsection
