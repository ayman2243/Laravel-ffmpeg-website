@extends('layouts.app')

@section('content')

<?php

function nice_number($n) 

{
    $n = (0+str_replace(",", "", $n));
    // is this a number?
    if (!is_numeric($n)) return false;
    // now filter it;
    if ($n > 1000000000000) return round(($n/1000000000000), 1).' T';
    elseif ($n > 1000000000) return round(($n/1000000000), 1).' B';
    elseif ($n > 1000000) return round(($n/1000000), 1).' M';
    elseif ($n > 1000) return round(($n/1000), 1).' K';
    return number_format($n);
}

$cats = ['subscriptions', 'recommended', 'trend', 'games', 'movies', 'lifestyle', 'music', 'vlogs'];

$pis = 
[
  'https://i.ytimg.com/vi/Salz7uGp72c/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCY5eXW-_pLfndusP0teT1uqqvKmw',
  'https://i.ytimg.com/vi/KzIimQkl6og/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDkPcdlj55FDYroltcQAgrWGW60eg',
  'https://i.ytimg.com/vi/8DMnAAvakh0/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDM-NKltrQuQBzteKaPkBIop8McvA',
  'https://i.ytimg.com/vi/nQSUw0MO9BM/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBJpOOnHqZVKdc2aM-8fy_hX10QRw',
  'https://i.ytimg.com/vi/lM80vOSacys/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLB2bnymuBvmXnWo2RA81mbwObBBhA',
  'https://i.ytimg.com/vi/XeEYaX82jSE/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=a1Ga9Wwd9-rX5USrdnW1a_JslJI',
  'https://i.ytimg.com/vi/mYAahN1G8Y8/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=Q7G9ExtZGWBKTZ7eC42c--VW7Rk'
];

$icons = 
[
    '<i class="fa fa-etsy trend green" aria-hidden="true"  title="Etsy"></i>',
    '<i class="fa fa-film trend blue" aria-hidden="true"  title="film"></i>',
    '<i class="fa fa-gamepad trend yellow" aria-hidden="true"  title="gamepad"></i>',
    '<i class="fa fa-fire trend red" aria-hidden="true"  title="Trend"></i>'

];

$randcat = array_rand($cats, 1);

?>

<div class="slider" style=" height: 150px !important;">
<ul class="slides" style=" height: 150px !important; background-color: #000;">
  <li>
    <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
      <div class="caption center-align" style="top: 3%;">
          <div class="adspace2">
            <p style="padding: 20px; text-align: center;  position: relative; top: 20px;">
              Ad Space
            </p>
          </div>
      </div>
  </li>
</ul>
</div>

<div class="container userChannel">
    <div class="row">

        <div class="col s3 uCleft">
            <div class="enlevel tooltipped" data-position="bottom" data-delay="50" data-tooltip="Engagement Level 100.300.10">
                <span><i class="fa fa-slideshare" aria-hidden="true"></i></span>
            </div>
            <ul id='hoverMenu2' class='dropdown-content'>
                <li><a href="#">Profile Image</a></li>
                <li><a href="#">Cover Image</a></li>
                <li><a href="#">Channel Description</a></li>
                <li><a href="#">Video Manager</a></li>
                <li><a href="#">Your Subscriptions <span style="color: red;">[ 254 ]</span></a></li>
                <!-- <li><a href="#">Send Message</a></li> -->
                <li><a href="#">Settings</a></li>
            </ul>

            <a class="videoSetting hoverMenu2" data-activates='hoverMenu2'>
                <i class="material-icons">keyboard_arrow_down</i>
            </a>
            <img src="{{url('/propic')}}/{{Auth::user()->id}}/{{md5(Auth::user()->created_at)}}">
            <div class="ProfileSSTbtns">
                <a class="waves-effect waves-light btn subBTnGlobal">1.2K Subscribe</a>
            </div>
            <div class="ProfileSSTbtns" style="margin-top: 10px;">
                <a class="waves-effect waves-light btn subBTnGlobal">Start Live Cast</a>
            </div>
            <div class="profileMenu">
                <ul>
                    <li><a href="#">Channel Avatar</a></li>
                    <li><a href="#">Cover Image</a></li>
                    <li><a href="#">Channel Description</a></li>
                    <li><a href="#">Video Manager</a></li>
                    <li><a href="#">Your Subscriptions <span style="color: red;">[ 254 ]</span></a></li>
                    <!-- <li><a href="#">Send Message</a></li> -->
                    <li><a href="#">Settings</a></li>
                    
                </ul>
            </div>
            
         </div>

        <div class="col s9 uCright">

               <nav>
                <div class="nav-wrapper grey darken-3">
                  <form action="#!" target="_blank">
                    <div class="input-field grey-darken-4">
                      <input id="search" type="search" name="query" value="" placeholder="Search" class="black-text" required="">
                      <label for="search" class="active"><i class="material-icons black-text">search</i></label>
                      <i class="material-icons">close</i>
                    </div>
                  </form>
                </div>
              </nav>
              <br>

            <div class="col s12 " style="padding: 0;">
                <ul class="tabs tabshead1">
                  <li class="tab col s3"><a class="active" href="#Uploads">Uploads</a></li>
                  <li class="tab col s3"><a href="#Playlists">Playlists</a></li>
                  <li class="tab col s3"><a href="#Saved">Saved</a></li>
                  <li class="tab col s3"><a href="#Likes">Likes</a></li>
                  <li class="tab col s3"><a href="#About">About</a></li>
                </ul>
            </div>

            <div class="uploadsvv" id="About">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled <br> <a href="#">ayman2243@gmail.com</a> <br> <a href="#">wie2.com</a> <br> it to make a type specimen book.</p>
                <div class="grey-text text-lighten-4 socM">
                    <a target="_blank" href="https://www.facebook.com/uturnent" class="btn-floating btn-large btn-primary  waves-effect waves-light"><i class="fa fa-facebook"> </i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCO_B-c5I881XlMmXWv_06Mg" class="btn-floating btn-danger btn-large  waves-effect waves-light"><i class="fa fa-youtube-play"> </i></a>
                    <a target="_blank" href="https://twitter.com/UTURNent" class="btn-floating btn-large btn-default  waves-effect waves-light"><i class="fa fa-twitter"> </i></a>
                    
                    <a target="_blank" href="https://www.instagram.com/UTURNent/" class="btn-floating btn-large btn-info waves-effect waves-light"><i class="fa fa-instagram"> </i></a>
                    <a target="_blank" href="https://www.snapchat.com/add/uturn" class="btn-floating btn-large btn-warning waves-effect waves-light"><i class="fa fa-snapchat-ghost"></i></a>
                </div>
            </div>

            <div class="uploadsvv" id="Playlists">
                <div class="profilePlaylists">
                        





                        <div class="playlistItem">
                                <div style="overflow: hidden;">
                                <h5 style=" padding: 10px; text-transform: capitalize; border-bottom:solid 1px red; display:inline-block;">Playlist name <span style="color: dimgrey; font-size: 13px;">[ 20 Videos ]</span></h5>
                                <button onclick="alert('Under Develop')" class="right btn" style="margin:0; padding-left: 10px; padding-right: 10px; position: relative; top: 15px; background-color: rgba(0,0,0,0.5);"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                </div>
                                <div class="vvwarp">
                                    @for($r=1; $r<=4; $r++)
                                 <div class="card">
                                    <div class="card-image" title="channel name also chech if big what will do.">
                                      <a href="{{url('/v/12')}}"><img src="{{asset('/images/bgTh.png')}}" data-src="{{$pis[array_rand($pis)]}}"></a>
                                      <span class="card-title">
                                          <span class="time">{{rand(01,59)}}:11</span>
                                          <a href="#"><span class="category">{{$cats[array_rand($cats)]}}</span></a>
                                          <span class="views">{{rand(1,99)}}M views</span>
                                      </span> 
                                      <div class="cardIcons">
                                        <?php echo $icons[array_rand($icons)]; ?>
                                      </div>
                                      <div class="cardActions">
                                        <?php $ix = rand(1,99999999).rand(1,99999999).rand(1,99999999); ?>
                                        <a class="videoAction21" data-activates='videoAction{{$ix}}' href="#"><i class="material-icons">keyboard_arrow_down</i></a>
                                        <div id='videoAction{{$ix}}' class='dropdown-content videoAction'>
                                            <ul>
                                                <li>    
                                                    <form action="#">
                                                        <input type="checkbox" id="test6" checked="checked" /> 
                                                        <label for="test6">Watch Later <span><i style="font-size: 15px; color: #999;" class="fa fa-lock" aria-hidden="true"></i></span></label>
                                                    </form>
                                                </li>
                                                <li>    
                                                    <form action="#">
                                                        <input type="checkbox" id="test3" checked="checked" class="checkbtr" /> 
                                                        <label for="test3">My Private List <span><i style="font-size: 15px; color: #999;" class="fa fa-globe" aria-hidden="true"></i></span></label>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                      </div>
                                      <div class="colorBorder">
                                      </div>
                                    </div>
                                    <div class="card-content">
                                      <h4 class="ellipsis" title="A Beautiful Mind Trailer">Turbo Official Trailer #2 (2013) - Ryan Reynolds, Bill Hader Movie HD</h4>
                                      <a href="#"><p class="userInfo ellipsis"><img class="responsive-img userAvatar" src="{{asset('/images/bgTh.png')}}" data-src="{{ url('public/uploads/us_avatars/df.jpg') }}"> <span>Ayman Aljohary</span></p></a>
                                    </div>
                                  </div>
                                  @endfor
                                </div>
                                <div class="LoadMoreBtn">
                                    <a class="waves-effect waves-light btn" style="background-color: #2d2d2d !important; margin-top: 0 ;">View All</a>
                                    <a class="waves-effect waves-light btn" style="background-color: #2d2d2d !important; margin-top: 0 ;">Play</a>
                                </div>
                        </div>



                        <div class="playlistItem">
                                <div style="overflow: hidden;">
                                <h5 style=" padding: 10px; text-transform: capitalize; border-bottom:solid 1px red; display:inline-block;">Playlist name <span style="color: dimgrey; font-size: 13px;">[ 57 Videos ]</span></h5>
                                <button onclick="alert('Under Develop')" class="right btn" style="margin:0; padding-left: 10px; padding-right: 10px; position: relative; top: 15px; background-color: rgba(0,0,0,0.5);"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                </div>
                                <div class="vvwarp">
                                    @for($r=1; $r<=4; $r++)
                                 <div class="card">
                                    <div class="card-image" title="channel name also chech if big what will do.">
                                      <a href="{{url('/v/12')}}"><img src="{{asset('/images/bgTh.png')}}" data-src="{{$pis[array_rand($pis)]}}"></a>
                                      <span class="card-title">
                                          <span class="time">{{rand(01,59)}}:11</span>
                                          <a href="#"><span class="category">{{$cats[array_rand($cats)]}}</span></a>
                                          <span class="views">{{rand(1,99)}}M views</span>
                                      </span> 
                                      <div class="cardIcons">
                                        <?php echo $icons[array_rand($icons)]; ?>
                                      </div>
                                      <div class="cardActions">
                                        <?php $ix = rand(1,99999999).rand(1,99999999).rand(1,99999999); ?>
                                        <a class="videoAction21" data-activates='videoAction{{$ix}}' href="#"><i class="material-icons">keyboard_arrow_down</i></a>
                                        <div id='videoAction{{$ix}}' class='dropdown-content videoAction'>
                                            <ul>
                                                <li>    
                                                    <form action="#">
                                                        <input type="checkbox" id="test6" checked="checked" /> 
                                                        <label for="test6">Watch Later <span><i style="font-size: 15px; color: #999;" class="fa fa-lock" aria-hidden="true"></i></span></label>
                                                    </form>
                                                </li>
                                                <li>    
                                                    <form action="#">
                                                        <input type="checkbox" id="test3" checked="checked" class="checkbtr" /> 
                                                        <label for="test3">My Private List <span><i style="font-size: 15px; color: #999;" class="fa fa-globe" aria-hidden="true"></i></span></label>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                      </div>
                                      <div class="colorBorder">
                                      </div>
                                    </div>
                                    <div class="card-content">
                                      <h4 class="ellipsis" title="A Beautiful Mind Trailer">Turbo Official Trailer #2 (2013) - Ryan Reynolds, Bill Hader Movie HD</h4>
                                      <a href="#"><p class="userInfo ellipsis"><img class="responsive-img userAvatar" src="{{asset('/images/bgTh.png')}}" data-src="{{ url('public/uploads/us_avatars/df.jpg') }}"> <span>Ayman Aljohary</span></p></a>
                                    </div>
                                  </div>
                                  @endfor
                                </div>
                                <div class="LoadMoreBtn">
                                    <a class="waves-effect waves-light btn" style="background-color: #2d2d2d !important; margin-top: 0 ;">View All</a>
                                    <a class="waves-effect waves-light btn" style="background-color: #2d2d2d !important; margin-top: 0 ;">Play</a>
                                </div>
                        </div>








                </div>
            </div>

             <div class="uploadsvv" id="Uploads">
                @foreach($uploads as $video)
                 <div class="card">
                    <div class="card-image" title="{{ $video->title }}">
                      <a href="{{ url('/v/'.$video->id) }}"><img src="{{ asset('/images/bgTh.png') }}" data-src="{{ url('storage/app/'.$video->thumnail) }}"></a>
                      <span class="card-title">
                          <span class="time">{{ $video->time }}</span>
                          <a href="#">
                              <span class="category">
                                @if($video->category == null) 
                                  undefined 
                                @else 
                                  {{$video->category}} 
                                @endif
                              </span>
                          </a>
                          <span class="views">{{ nice_number($video->views) }} views</span>
                      </span> 
                      <div class="cardActions">
                        <?php $ix = rand(1,99999999).rand(1,99999999).rand(1,99999999); ?>
                        <a class="videoAction21" data-activates='videoAction{{ $ix }}' href="#"><i class="material-icons">keyboard_arrow_down</i></a>
                        <div id='videoAction{{$ix}}' class='dropdown-content videoAction'>
                            <ul>
                                <li>    
                                    <form action="#">
                                        <input type="checkbox" id="test6" checked="checked" /> 
                                        <label for="test6">Watch Later <span><i style="font-size: 15px; color: #999;" class="fa fa-lock" aria-hidden="true"></i></span></label>
                                    </form>
                                </li>
                                <li>    
                                    <form action="#">
                                        <input type="checkbox" id="test3" checked="checked" class="checkbtr" /> 
                                        <label for="test3">My Private List <span><i style="font-size: 15px; color: #999;" class="fa fa-globe" aria-hidden="true"></i></span></label>
                                    </form>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <div class="colorBorder">
                      </div>
                    </div>
                    <div class="card-content">
                      <h4 class="ellipsis">{{ $video->title }}</h4>
                      <span style="font-size: 10px; color: #666;">{{$video->created_at}}</span>
                      <!-- <a href="#"><p class="userInfo ellipsis"><img class="responsive-img userAvatar" src="{{asset('/images/bgTh.png')}}" data-src="{{ url('public/uploads/us_avatars/df.jpg') }}"> <span>Ayman Aljohary</span></p></a> -->
                    </div>
                  </div>
                  @endforeach
                  
                  <div class="LoadMoreBtn">
                      <a class="waves-effect waves-light btn" style="background-color: #2d2d2d !important; margin-top: 0 ;">Load More</a>
                  </div>
             </div>




             <div class="uploadsvv" id="Saved">
                @for($r=1; $r<=3; $r++)
                 <div class="card">
                    <div class="card-image" title="channel name also chech if big what will do.">
                      <a href="{{ url('/v/12') }}"><img src="{{ asset('/images/bgTh.png') }}" data-src="{{$pis[array_rand($pis)]}}"></a>
                      <span class="card-title">
                          <span class="time">{{rand(01,59)}}:11</span>
                          <a href="#"><span class="category">{{$cats[array_rand($cats)]}}</span></a>
                          <span class="views">{{rand(1,99)}}M views</span>
                      </span> 
                      <div class="cardIcons">
                        <?php echo $icons[array_rand($icons)]; ?>
                      </div>
                      <div class="cardActions">
                        <?php $ix = rand(1,99999999).rand(1,99999999).rand(1,99999999); ?>
                        <a class="videoAction21" data-activates='videoAction{{$ix}}' href="#"><i class="material-icons">keyboard_arrow_down</i></a>
                        <div id='videoAction{{$ix}}' class='dropdown-content videoAction'>
                            <ul>
                                <li>    
                                    <form action="#">
                                        <input type="checkbox" id="test6" checked="checked" /> 
                                        <label for="test6">Watch Later <span><i style="font-size: 15px; color: #999;" class="fa fa-lock" aria-hidden="true"></i></span></label>
                                    </form>
                                </li>
                                <li>    
                                    <form action="#">
                                        <input type="checkbox" id="test3" checked="checked" class="checkbtr" /> 
                                        <label for="test3">My Private List <span><i style="font-size: 15px; color: #999;" class="fa fa-globe" aria-hidden="true"></i></span></label>
                                    </form>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <div class="colorBorder">
                      </div>
                    </div>
                    <div class="card-content">
                      <h4 class="ellipsis" title="A Beautiful Mind Trailer">Turbo Official Trailer #2 (2013) - Ryan Reynolds, Bill Hader Movie HD</h4>
                      <a href="#"><p class="userInfo ellipsis"><img class="responsive-img userAvatar" src="{{asset('/images/bgTh.png')}}" data-src="{{ url('public/uploads/us_avatars/df.jpg') }}"> <span>Ayman Aljohary</span></p></a>
                    </div>
                  </div>
                  @endfor
             </div>


             <div class="uploadsvv" id="Likes">
                @for($r=1; $r<=13; $r++)
                 <div class="card">
                    <div class="card-image" title="channel name also chech if big what will do.">
                      <a href="{{url('/v/12')}}"><img src="{{ asset('/images/bgTh.png') }}" data-src="{{$pis[array_rand($pis)]}}"></a>
                      <span class="card-title">
                          <span class="time">{{rand(01,59)}}:11</span>
                          <a href="#"><span class="category">{{$cats[array_rand($cats)]}}</span></a>
                          <span class="views">{{rand(1,99)}}M views</span>
                      </span> 
                      <div class="cardIcons">
                        <?php echo $icons[array_rand($icons)]; ?>
                      </div>
                      <div class="cardActions">
                        <?php $ix = rand(1,99999999).rand(1,99999999).rand(1,99999999); ?>
                        <a class="videoAction21" data-activates='videoAction{{$ix}}' href="#"><i class="material-icons">keyboard_arrow_down</i></a>
                        <div id='videoAction{{$ix}}' class='dropdown-content videoAction'>
                            <ul>
                                <li>    
                                    <form action="#">
                                        <input type="checkbox" id="test6" checked="checked" /> 
                                        <label for="test6">Watch Later <span><i style="font-size: 15px; color: #999;" class="fa fa-lock" aria-hidden="true"></i></span></label>
                                    </form>
                                </li>
                                <li>    
                                    <form action="#">
                                        <input type="checkbox" id="test3" checked="checked" class="checkbtr" /> 
                                        <label for="test3">My Private List <span><i style="font-size: 15px; color: #999;" class="fa fa-globe" aria-hidden="true"></i></span></label>
                                    </form>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <div class="colorBorder">
                      </div>
                    </div>
                    <div class="card-content">
                      <h4 class="ellipsis" title="A Beautiful Mind Trailer">Turbo Official Trailer #2 (2013) - Ryan Reynolds, Bill Hader Movie HD</h4>
                      <a href="#"><p class="userInfo ellipsis"><img class="responsive-img userAvatar" src="{{ asset('/images/bgTh.png') }}" data-src="{{ url('public/uploads/us_avatars/df.jpg') }}"> <span>Ayman Aljohary</span></p></a>
                    </div>
                  </div>
                  @endfor
             </div>




        </div>


    </div>    
</div>

@endsection
