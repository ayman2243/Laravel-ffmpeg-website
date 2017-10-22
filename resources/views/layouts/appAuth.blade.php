<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') - {{ config('app.name', 'Wie2') }}</title>
<!-- Styles -->
<link href="{{url('css/app.css')}}" rel="stylesheet">
<!-- Scripts -->
<script> window.Wie2 = <?php echo json_encode(['csrfToken' => csrf_token()]); ?> </script>

</head>
<body>
<div class="snap-drawers">
    <!-- id="open-right" -->
    <div class="snap-drawer snap-drawer-right">
        <div>
            <h3 class="closeRight">Side Menu</h3>
            <div>
                <p>The Default demo shows basic Snap.js functionality</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non erat ac leo ultrices blandit sed vel risus. Pellentesque facilisis blandit auctor. Maecenas vestibulum vulputate tincidunt. Mauris nec quam libero. Fusce eget ligula non leo varius condimentum quis ac elit. Donec id urna ut neque semper ultrices. Proin ut suscipit felis. Nullam neque felis, ullamcorper scelerisque volutpat vel, vehicula vehicula neque. Aenean scelerisque elit ac erat sagittis ullamcorper.</p>
            </div>
        </div>
    </div>
</div>
<div id="app" class="snap-content" data-snap-ignore="false">
    @if(!Auth::guest())
    <ul id='hoverMenu' class='dropdown-content' style="background-color: #292929;">
      <li><a href="{{ url('/home') }}"><i class="material-icons">account_circle</i> Your Profile</a></li>
      <li><a href="{{ url('/home') }}"><i class="material-icons">dashboard</i> Dashboard</a></li>
      <li><a href="#!"><i class="material-icons">settings</i> Settings</a></li>
      <li>
        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i> Logout </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </li>
    </ul>
    @endif

    @if(Auth::guest())
    <ul id='hoverMenu' class='dropdown-content' style="background-color: #292929;">
      <li><a href="{{ url('/login') }}"><i class="material-icons">lock</i> Sign In</a></li>
      <li><a href="{{ url('/register') }}"><i class="material-icons">person_add</i> Register</a></li>
    </ul>
    @endif

    <div class="navbar-fixed">
      <nav role="navigation">
        <div class="nav-wrapper container">
          <!-- Joika -->
          <a id="logo-container" href="#!" class="brand-logo" style="margin-top: 0; margin-left: -10px;">...</a>
          <div class=" HeadSearchInput">
            <form>
              <input type="text" name="q" maxlength="255" placeholder="Search Wie2">
            </form>
          </div>
          <ul class="right hide-on-med-and-down desktopNav ">
            <li><a href="{{url('/upload')}}" class="waves-effect waves-light red btn" style="font-size: 13px; padding:0 1rem;">Upload</a></li>
            <li 
            @if(Route::getCurrentRoute()->getPath() == '/' || Route::getCurrentRoute()->getPath() == '{locale}')
            
              class='active'
            
            @endif
            ><a href="{{url('/')}}">Home</a></li>
            <li 
            @if(Route::getCurrentRoute()->getPath() == '/top') 
            
             class='active'
            
            @endif
            ><a href="{{ url('/') }}">Top 500</a></li>
            @if(Auth::guest())
              <li 
              @if(Route::getCurrentRoute()->getPath() == '/top') 
              
                class='active'
              
              @endif
              ><a href="{{ url('/login') }}" class="hoverMenu"  data-activates='hoverMenu'>Login</a></li>
            @else
              <li 
              @if(Route::getCurrentRoute()->getPath() == '/top') 
              
                class='active'
              
              @endif
              >
                <a href="{{ url('/home') }}" class="pro_pic hoverMenu"  data-activates='hoverMenu'>
                  <div class="imgl" style="background-image: url(https://localhost/joika3/avatar/{{Auth::user()->id}}/{{md5(Auth::user()->created_at)}});"></div>
                </a>
              </li>
            @endif
            
          </ul>

          <ul id="nav-mobile" class="side-nav MyMobileNav">
            <div class="row">
                
            </div>
            
            <li <?php if (Route::getCurrentRoute()->getPath() == '/') {
              echo "class='active'";
            } ?>><a href="{{ url('/') }}">Home</a></li>
            
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>
    </div>

    <div class="borderBotton" style=" border-bottom:#111 1px solid;">
      @yield('content')
    </div>

    <footer class="page-footer">
      <div class="borderBotton">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Mobile App</h5>
              <p class="grey-text text-lighten-4">Wie2 is Available for all devices, watch videos & chat with your friends.</p>
              <div class=" downloadApp">
                  <a href="https://itunes.apple.com/sa/app/uturn-entertainment/id708229824?mt=8" target="_blank"><img src="http://localhost/joika/img/appstore.png"></a>
                  <a href="https://play.google.com/store/apps/details?id=com.inmobly.uturnApp" target="_blank"><img src="http://localhost/joika/img/playstore.png"></a>
              </div>
            </div>
            <div class="col l4 offset-l2 s12 siterli">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="{{ url('/contact') }}">About Us</a></li>
                <li><a class="grey-text text-lighten-3" href="{{ url('/contact') }}">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-copyright">
        <div class="container">
          <div class="row">
            © 2016 Copyright Wie2.com
            <div class="grey-text text-lighten-4 right socM">
                <a href="#!">Terms of Use</a> - <a href="#!">Privacy Statement</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- <a data-activates="nav-mobile"  class="waves-effect waves-light btn UploadBtn red"><span>Upload </span></a> -->
</div>
<!-- Scripts -->
<script src="{{url('js/app.js')}}"></script>
</body>
</html>
