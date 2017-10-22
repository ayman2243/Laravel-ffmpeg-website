@extends('layouts.app')
@section('content')
<!-- style=" background-color: #151515 !important;" -->
<div class="slider" style=" height: 200px !important;">
<ul class="slides" style=" height: 200px !important; background-color: #000;">
  <li>
    <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
      <div class="caption center-align">
          <div class="adspace2">
            <p style="padding: 20px; text-align: center;  position: relative; top: 20px;">
              Ad Space
            </p>
          </div>
      </div>
  </li>
</ul>
</div>

<div class="section boxshadow">
      <div class="col-md-12" id="post-data">
        @include('videoViewCard')
      </div>
      <div class="ajax-load text-center" style="opacity: 0;">
        <p style="text-align: center;"><img src="{{asset('/images/reload.gif')}}"> <span style="position: relative; top:-5px;">Loading More Data</span></p>
      </div>
</div>
@endsection
