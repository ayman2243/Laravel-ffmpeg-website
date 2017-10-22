<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') - {{ config('app.name', 'Wie2') }}</title>
<link rel="image_src" href="@yield('shareImage')"/>
<!-- Styles -->
<link href="{{url('css/app.css')}}" rel="stylesheet">
<!-- Scripts -->
<script> window.Wie2 = <?php echo json_encode(['csrfToken' => csrf_token()]); ?> </script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59253e484c5d320011529a6f&product=inline-share-buttons"></script>
</head>
<body>
<div class="snap-drawers">
    <!-- id="open-right" -->
    <div class="snap-drawer snap-drawer-right">
        <!-- <div>
            <h3 class="closeRight">Side Menu</h3>
        </div> -->
    </div>
</div>
<div id="app" class="snap-content" data-snap-ignore="false">
    @if(!Auth::guest())
    <ul id='hoverMenu' class='dropdown-content' style="background-color: #111; box-shadow: none;">
      <li><a href="{{ url('/home') }}"><i class="material-icons">account_circle</i> Your Channel</a></li>
      <li><a href="{{ url('/history') }}"><i class="material-icons">history</i> History</a></li>
      <li><a href="{{ url('/notifications') }}"><i class="material-icons">notifications</i> Notifications <span class="ellipsis2 notify">4K</span></a></li>
      <li><a onclick="alert('Under Develop')"><i class="material-icons">dashboard</i> Dashboard</a></li>
      <li><a onclick="alert('Under Develop')"><i class="material-icons">settings</i> Settings</a></li>
      <li>
        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i> Logout </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </li>
    </ul>
    @endif

    @if(Auth::guest())
    <ul id='hoverMenu' class='dropdown-content' style="background-color: #111; box-shadow: none;">
      <li><a href="{{ url('/login') }}"><i class="material-icons">lock</i> Sign In</a></li>
      <li><a href="{{ url('/register') }}"><i class="material-icons">person_add</i> Register</a></li>
      <li><a href="{{ url('/history') }}"><i class="material-icons">history</i> History</a></li>
    </ul>
    @endif

    <div class="navbar-fixed">
      <nav role="navigation ">
        <div class="nav-wrapper container">
          <!-- Joika -->
          <a id="logo-container" href="{{url('/')}}" class="brand-logo" style="margin-top: 0; margin-left: -10px;">Wie2<sup>.ml</sup></a>
          <div class=" HeadSearchInput">
            <form onsubmit="alert('Under Develop')">
              <input type="text" name="q" maxlength="255" placeholder="Search Wie2">
            </form>
          </div>
          <ul class="right hide-on-med-and-down desktopNav ">
            <li><a href="{{url('/upload')}}" class="waves-effect waves-light red btn" style="font-size: 13px; text-transform: capitalize; padding:0 1rem;">Upload</a></li>
            <li 
            @if(Route::getCurrentRoute()->getPath() == '/' || Route::getCurrentRoute()->getPath() == '{locale}')
            
              class='active'
            
            @endif
            ><a href="{{url('/')}}">Home</a></li>
            <li 
            @if(Route::getCurrentRoute()->getPath() == 'trending') 
            
             class='active'
            
            @endif
            ><a href="{{ url('/trending') }}">Trending</a></li>
            @if(Auth::guest())
              <li 
              @if(Route::getCurrentRoute()->getPath() == 'login' || Route::getCurrentRoute()->getPath() == 'register' || Route::getCurrentRoute()->getPath() == 'history') 
              
                class='active'
              
              @endif
              ><a href="#!" class="hoverMenu"  data-activates='hoverMenu'><i class="material-icons">settings</i></a></li>
            @else
              <li 
              @if(Route::getCurrentRoute()->getPath() == '/top') 
              
                class='active'
              
              @endif
              >
                <a href="{{ url('/home') }}" class="pro_pic hoverMenu"  data-activates='hoverMenu'>
                  <div class="imgl" style="background-image: url({{url('/avatar')}}/{{Auth::user()->id}}/{{md5(Auth::user()->created_at)}});"></div><sup><span class="ellipsis2 notify" style="position: absolute; margin-top: -40px; margin-left: 30px;">4K</span></sup>
                </a>
              </li>
            @endif
            
          </ul>

          <ul id="nav-mobile" class="side-nav MyMobileNav">
            <div class="row">
                
            </div>
            @if(!Auth::guest())
            <li class="avatarMenuli">
              <div class="avatarMenu" style="background-image: url({{url('/avatar')}}/{{Auth::user()->id}}/{{md5(Auth::user()->created_at)}});"></div>
            </li>
            @endif
            
            <li <?php if (Route::getCurrentRoute()->getPath() == '/') { echo "class='active'"; } ?> ><a href="{{ url('/') }}"><i class="material-icons">home</i> Home</a></li>
            <li class="uploadMenuli"><a href="{{url('/upload')}}" class="waves-effect waves-light red btn" style="font-size: 13px; text-transform: capitalize; padding:0 1rem;">Upload Your Video</a></li>
            <li><a href="{{ url('/trending') }}"><i class="material-icons">whatshot</i> Trending</a></li>
            <li><a href="{{ url('/history') }}"><i class="material-icons">history</i> History</a></li>
            @if(Auth::guest())
              <li><a href="{{ url('/login') }}"><i class="material-icons">lock</i> Sign In</a></li>
              <li><a href="{{ url('/register') }}"><i class="material-icons">person_add</i> Register</a></li>
            @endif

            

            @if(!Auth::guest())
            
              <li><a href="{{ url('/home') }}"><i class="material-icons">account_circle</i> Your Profile</a></li>
              <li><a href="{{ url('/history') }}"><i class="material-icons">history</i> History</a></li>
              <li><a href="{{ url('/notifications') }}"><i class="material-icons">notifications</i> Notifications <span class="ellipsis2 notify">4K</span></a></li>
              <li><a onclick="alert('Under Develop')"><i class="material-icons">dashboard</i> Dashboard</a></li>
              <li><a onclick="alert('Under Develop')"><i class="material-icons">settings</i> Settings</a></li>
              <li>
                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i> Logout </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </li>

            
            @endif

            
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>
    </div>
    <!-- style=" border-bottom:#111 1px solid;" -->
    <div class="borderBotton">
      @yield('content')
    </div>
    @extends('lang.controlls')
</div>
<!-- Scripts -->
<script src="{{url('js/app.js')}}"></script>
</body>
</html>
