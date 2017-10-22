<!DOCTYPE html>
<html>
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
<body style="overflow: hidden;">
<video  class="video-js vjs-default-skin vjs-big-play-centered" id="AymanPlayer" controls preload="none" style=" width: 100%; height: 100vh; "  poster="{{ url('/storage/app/default/'.$video->user_id.'/videos/'.$video->vid.'/thumb/foo-thumb-01.png') }}" data-setup="{ 'inactivityTimeout': 15000 }">
                     <!-- <track kind="captions" src="http://localhost/joika3/public/track.vtt" srclang="en" label="English" default> -->
                    <p class="vjs-no-js">Error, [.......] javascript is off.</p>
                </video>
<script src="{{ url('js/video.js') }}"></script>
<script src="{{ url('js/Youtube.js') }}"></script>
<script src="{{ url('js/videojs-resolution-switcher.js') }}"></script>
<script type="text/javascript">
  
  videojs('AymanPlayer', {    
      controls: true,
      html5: {
        nativeTextTracks: true
      },
      plugins: {
          videoJsResolutionSwitcher: {
            default: 'high',
            dynamicLabel: true
          }
        }
      }, function(){
      var player = this;
      // Add dynamically sources via updateSrc method
      player.updateSrc([

          {
            src: '../storage/app/default/{{ $video->user_id }}/videos/{{ $video->vid }}/mp4_480/{{ $video->vid }}.mp4',
            type: 'video/mp4',
            label: '480'
          },
          {
            src: '../storage/app/default/{{ $video->user_id }}/videos/{{ $video->vid }}/mp4_720/{{ $video->vid }}.mp4',
            type: 'video/mp4',
            label: 'HD'
          },
          {
            src: '../storage/app/default/{{ $video->user_id }}/videos/{{ $video->vid }}/mp4_144/{{ $video->vid }}.mp4',
            type: 'video/mp4',
            label: '144'
          },
          {
            src: '../storage/app/default/{{ $video->user_id }}/videos/{{ $video->vid }}/mp4_240/{{ $video->vid }}.mp4',
            type: 'video/mp4',
            label: '240'
          },
          {
            src: '../storage/app/default/{{ $video->user_id }}/videos/{{ $video->vid }}/mp4_360/{{ $video->vid }}.mp4',
            type: 'video/mp4',
            label: '360'
          }

        ]);

        player.on('resolutionchange', function(){
          console.info('Source changed to %s', player.src())
        });
        
  });  
</script>
</body>
</html>