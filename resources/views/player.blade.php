@extends('layouts.app')

@section('title', $video->title   )
@section('shareImage', 'http://localhost/joika3/storage/app/default/8/videos/015a1cf9239e37bda6a4cb86c586968b/thumb/foo-thumb-02.png')
@section('content')
<div class="slider" style=" height: 150px !important;">
<ul class="slides" style=" height: 150px !important; background-color: #000;">
  <li>
    <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
      <div class="caption center-align" style="top: 3%;">
          <div class="adspace2" style="width: 728px;">
            <script type="text/javascript">
    google_ad_client = "ca-pub-6938951281732386";
    google_ad_slot = "8643607324";
    google_ad_width = 728;
    google_ad_height = 90;
</script>
<!-- ad1 -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
          </div>
      </div>
  </li>
</ul>
</div>

<div class="container">
    <div class="row">
        <div class="col s9 left layerleft" style="padding-left: 0;">
            <div class="videodivContiner">
                <div class="videohead">
                    <h3>{{ $video->title }}</h3>
                    
                    <ul id='hoverMenu2' class='dropdown-content'>
                      <li><a href="#!" onclick="alert('Under Develop');">Download MP4</a></li>
                      <li><a href="#!" onclick="alert('Under Develop');">Report</a></li>
                    </ul>

                    <a class="videoSetting hoverMenu2" data-activates='hoverMenu2'>
                        <i class="material-icons">keyboard_arrow_down</i>
                    </a>
                    <!-- Dropdown Structure -->
                    
                </div>
                
                <video  autoplay="autoplay" class="video-js vjs-default-skin vjs-big-play-centered" id="AymanPlayer" controls preload="none" style=" width: 100%; " height="400" poster="{{ url('/storage/app/default/'.$video->user_id.'/videos/'.$video->vid.'/thumb/foo-thumb-01.png') }}" data-setup="{ 'inactivityTimeout': 15000 }">
                     <!-- <track kind="captions" src="http://localhost/joika3/public/track.vtt" srclang="en" label="English" default> -->
                    <p class="vjs-no-js">Error, [.......] javascript is off.</p>
                </video>  
            </div>
            <div class="videoButtons">
                <div class="rightbtnco">
                    
                    <div class="chavater" style="background-image: url({{url('public/uploads/us_pro_pic/df.jpg')}});"></div>
                    <div class="morehh">
                      <h3 class="chtitle">Ayman Aljohary</h3>
                      <a class="waves-effect waves-light btn subBTnGlobal">1.2K Subscribe</a>
                    </div>


                </div>
                <div class="leftbtncon">
                    
                    <a class="waves-effect waves-light btn"><i class="material-icons">thumb_down</i> <span class="nuconmr">200</span></a>
                    <a class="btn lineStr"><span class="like" style="width: 80%;"></span><span style="width: 20%;" class="dislike"></span></a>
                    <a class="waves-effect waves-light btn"><i class="material-icons">thumb_up</i> <span class="nuconmr">15</span></a>
                    <div class="viewsdx">1,029,923 Views</div>
                </div>
            </div>           
            <!-- Teal page content  -->



            <div class="moreVideosb2">
              <div class="recommVid">
                  
                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/Salz7uGp72c/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCY5eXW-_pLfndusP0teT1uqqvKmw);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>The Theory of Everything - Official Trailer (Universal Pictures) HD</h5>
                      <span>Universal Pictures UK</span>
                      <b>12,987,897 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/KzIimQkl6og/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDkPcdlj55FDYroltcQAgrWGW60eg);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Top 10 Movie Geniuses</h5>
                      <span>WatchMojo.com</span>
                      <b>12,987,897 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/IyIEPsFXQdQ/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAAUZtP0VWt922NHUUz3tEqQ0VzVg);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>The Nanny Diaries 2007</h5>
                      <span>Blessing Fii</span>
                      <b>97,380 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/oXGm9Vlfx4w/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=PrBh5RPTDRlrOjwKbIICBdm6S2I);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Best Action Movies by Liam Neeson</h5>
                      <span>ياسر النماصي </span>
                      <b>1,376,896 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url({{ url('/storage/app/default/8/videos/015a1cf9239e37bda6a4cb86c586968b/thumb/foo-thumb-02.png') }});">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>The Ninth Gate (1999) Full Movies HD - Johnny Depp, Frank Langella, Lena Olin</h5>
                      <span>Danielle Vincent</span>
                      <b>130,944 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/Y7sppreLN6k/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAGlbEYQgDzFkEJn94AEAfGGmeRDg);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>10 Most Rewatchable Movies Of The 21st Century</h5>
                      <span>WhatCulture</span>
                      <b>1,971,334 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/xRTMsguD-So/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=8zTGEei9V8p90PXvWxNkiYkURuI);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Oxford English Daily Conversation Episode 1</h5>
                      <span>English is Fun</span>
                      <b>12,987,897 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/byXgz1gOjAw/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAD20JXaDzEnuVtYL9qTy5-qJjhvA);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Top 10 Psychological Thrillers</h5>
                      <span>WatchMojo.com</span>
                      <b>3,989,623 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/B4_xHvckn7Q/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCran24KiK_Xm64DA2xnQ-bGqV2qw);"></div>
                    <div class="ttrinfo">
                      <h5>Wild Child Full Movie</h5>
                      <span>Full Movies</span>
                      <b>3,161,419 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/WXRYA1dxP_0/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=JBc28-IXBwVVKD1eed2r3bIzRrE);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>The Tree of Life Movie Trailer Official (HD)</h5>
                      <span>ScreenJunkies News</span>
                      <b>10,566,005 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/mYAahN1G8Y8/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=Q7G9ExtZGWBKTZ7eC42c--VW7Rk);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>X+Y Scene Clip - Nathan solves math problem</h5>
                      <span>PinnacleFilmsSales</span>
                      <b>3,756,815 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/R0IwgWzfGr4/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDNuITNPsjiOnBvlCyul1fpjViPLw);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Steve Jobs - Official Trailer | Danny Boyle | Michael Fassbender | 2015</h5>
                      <span>Universal Pictures UK</span>
                      <b>1,533,643 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/N7b0cLn-wHU/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBDwsSS0dEgXeHjBGsA_a5jcWqKjw);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Good Will Hunting Scene (Math Problem)</h5>
                      <span>samyeargin</span>
                      <b>2,261,520 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/HP4NxUFgFrs/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDRg01F4uMN0_hhQZcMeqCkiuE9uA);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>My Sisters Keeper (2009) Official Trailer [True HD] [720p]</h5>
                      <span>BestHDTrailers</span>
                      <b>4,229,909 views</b>
                    </div>
                  </div>

              </div>
            </div>


            <div class="row">
              <div class="col s12 ">
                <ul class="tabs tabshead1">
                  <li class="tab col s3"><a class="active" href="#Comments">Comments</a></li>
                  <li class="tab col s3"><a href="#Description">Description</a></li>
                  <li class="tab col s3"><a href="#Share">Share</a></li>
                  <li class="tab col s3"><a href="#Info">Info</a></li>
                </ul>
              </div>
              
              <div id="Comments" class="col s12 tabtyu">
                
                <div class="vComments">
                  <form>
                    <textarea class="vAddComment" placeholder="Add Your Comment"></textarea>
                    <div class="vAddCommentBar">
                      <div class="vAddCommentBarRight">
                        <a class="waves-effect waves-light btn barBtn"><i class="material-icons">attachment</i></a>
                        <a class="waves-effect waves-light btn barBtn"><i class="material-icons">video_call</i></a>
                        <a class="waves-effect waves-light btn barBtn"><i class="material-icons">keyboard_voice</i></a>
                      </div>
                      <a class="waves-effect waves-light btn CommentSubmit">Post</a>
                    </div>
                  </form>
                </div>

                <div class="AllComments">

                    <div class="Comment">
                      <div class="UserCavatar"> 
                        <div class="Photo" style="background-image: url({{url('public/uploads/us_avatars/15ea2a1b331875057e79c90ca88dd03a.jpg')}});"></div>
                      </div>
                      <div class="PComment">
                        <div class="llCCinfo">
                          <h4>User Display Name</h4>
                          <span>Public at 22/08/2018 08:56:34 AM</span>
                        </div>
                        <div class="rrCCinfo">
                          <a href="#"><span><i class="material-icons">thumb_up</i> 3.6k</span></a>
                          <a href="#"><span><i class="material-icons">thumb_down</i> 34</span></a>
                          <a href="#"><span><i class="material-icons">reply</i> Reply</span></a>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        <img src="http://wp.patheos.com.s3.amazonaws.com/blogs/faithwalkers/files/2013/03/bigstock-Test-word-on-white-keyboard-27134336.jpg">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                      </div>
                    </div>



                    <div class="Comment">
                      <div class="UserCavatar"> 
                        <div class="Photo" style="background-image: url({{url('public/uploads/us_avatars/15ea2a1b331875057e79c90ca88dd03a.jpg')}});"></div>
                      </div>
                      <div class="PComment">
                        <div class="llCCinfo">
                          <h4>User Display Name</h4>
                          <span>Public at 22/08/2018 08:56:34 AM</span>
                        </div>
                        <div class="rrCCinfo">
                          <a href="#"><span><i class="material-icons">thumb_up</i> 3.6k</span></a>
                          <a href="#"><span><i class="material-icons">thumb_down</i> 34</span></a>
                          <a href="#"><span><i class="material-icons">reply</i> Reply</span></a>
                        </div>
                        
                        <p>تشقلبت من نطيطه مرتفعة 10 متر باكبر مسبح بالكويت !! فلوق#4
                        <iframe src="https://www.youtube.com/embed/Bzwk_5zo6nM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
                      </div>
                    </div>


                    <div class="CommentReplies">
                      <div class="itemReply">

                        <div class="Comment">
                          <div class="UserCavatar"> 
                            <div class="Photo" style="background-image: url({{url('public/uploads/us_avatars/15ea2a1b331875057e79c90ca88dd03a.jpg')}});"></div>
                          </div>
                          <div class="PComment">
                            <div class="llCCinfo">
                              <h4>User Display Name</h4>
                              <span>Public at 22/08/2018 08:56:34 AM</span>
                            </div>
                            <div class="rrCCinfo">
                              <a href="#"><span><i class="material-icons">thumb_up</i> 3.6k</span></a>
                              <a href="#"><span><i class="material-icons">thumb_down</i> 34</span></a>
                            </div>
                            
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                          </div>
                        </div>

                      </div>

                      <div class="LoadMoreBtn">
                        <a class="waves-effect waves-light btn" style="background-color: #2d2d2d !important;">Load More Replies</a>
                      </div>

                    </div>

                    


                    <div class="Comment">
                      <div class="UserCavatar"> 
                        <div class="Photo" style="background-image: url({{url('public/uploads/us_avatars/15ea2a1b331875057e79c90ca88dd03a.jpg')}});"></div>
                      </div>
                      <div class="PComment">
                        <div class="llCCinfo">
                          <h4>User Display Name</h4>
                          <span>Public at 22/08/2018 08:56:34 AM</span>
                        </div>
                        <div class="rrCCinfo">
                          <a href="#"><span><i class="material-icons">thumb_up</i> 3.6k</span></a>
                          <a href="#"><span><i class="material-icons">thumb_down</i> 34</span></a>
                          <a href="#"><span><i class="material-icons">reply</i> Reply</span></a>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                      </div>
                    </div>


                    <div class="Comment">
                      <div class="UserCavatar"> 
                        <div class="Photo" style="background-image: url({{url('public/uploads/us_avatars/15ea2a1b331875057e79c90ca88dd03a.jpg')}});"></div>
                      </div>
                      <div class="PComment">
                        <div class="llCCinfo">
                          <h4>User Display Name</h4>
                          <span>Public at 22/08/2018 08:56:34 AM</span>
                        </div>
                        <div class="rrCCinfo">
                          <a href="#"><span><i class="material-icons">thumb_up</i> 3.6k</span></a>
                          <a href="#"><span><i class="material-icons">thumb_down</i> 34</span></a>
                          <a href="#"><span><i class="material-icons">reply</i> Reply</span></a>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<audio controls class="video-js vjs-default-skin vjs-big-play-centered" id="AAymanPlayer" src="../public/Hailee Steinfeld - Most Girls.mp3" style="position: relative; width: 100%;"></audio>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                      </div>
                    </div>

                    <div class="LoadMoreBtn">
                      <a class="waves-effect waves-light btn" style="background-color: #2d2d2d !important;">Load More</a>
                    </div>

                </div>

              </div>
              
              <div id="Description" class="col s12 tabtyu">
                <div class="vDiscriptions">
                  <span><i>Published on May 22, 2017</i></span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
              </div>
              <div id="Share" class="col s12 tabtyu">
                <div class="vShare">
                  <div class="emdeddCode">
                    <label>Embed Code</label>
                    <textarea readonly><iframe width="560" height="315" src="https://www.wie2.com/embed/Bzwk_5zo6nM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></textarea>
                    <label>Apps</label>
                    <div class="sharethis-inline-share-buttons"></div>
                  </div>
                </div>
              </div>
              <div id="Info" class="col s12 tabtyu">
                <div class="vInfo">
                  <h3>Info</h3>
                </div>
              </div>
            </div>




        </div>
            <!-- Teal page content  -->
        <div class="col s3 right layerRight" style="padding: 0 !important; ">
            
            <div class="adspace">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- ad2 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:250px"
                     data-ad-client="ca-pub-6938951281732386"
                     data-ad-slot="8783208129"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <!-- Grey navigation panel -->

            <div class="moreVideosb">
              <div class="recommVid">
                  
                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/Salz7uGp72c/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCY5eXW-_pLfndusP0teT1uqqvKmw);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>The Theory of Everything - Official Trailer (Universal Pictures) HD</h5>
                      <span>Universal Pictures UK</span>
                      <b>12,987,897 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/KzIimQkl6og/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDkPcdlj55FDYroltcQAgrWGW60eg);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Top 10 Movie Geniuses</h5>
                      <span>WatchMojo.com</span>
                      <b>12,987,897 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/IyIEPsFXQdQ/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAAUZtP0VWt922NHUUz3tEqQ0VzVg);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>The Nanny Diaries 2007</h5>
                      <span>Blessing Fii</span>
                      <b>97,380 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/oXGm9Vlfx4w/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=PrBh5RPTDRlrOjwKbIICBdm6S2I);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Best Action Movies by Liam Neeson</h5>
                      <span>ياسر النماصي </span>
                      <b>1,376,896 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url({{ url('/storage/app/default/8/videos/015a1cf9239e37bda6a4cb86c586968b/thumb/foo-thumb-02.png') }});">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>The Ninth Gate (1999) Full Movies HD - Johnny Depp, Frank Langella, Lena Olin</h5>
                      <span>Danielle Vincent</span>
                      <b>130,944 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/Y7sppreLN6k/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAGlbEYQgDzFkEJn94AEAfGGmeRDg);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>10 Most Rewatchable Movies Of The 21st Century</h5>
                      <span>WhatCulture</span>
                      <b>1,971,334 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/xRTMsguD-So/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=8zTGEei9V8p90PXvWxNkiYkURuI);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Oxford English Daily Conversation Episode 1</h5>
                      <span>English is Fun</span>
                      <b>12,987,897 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/byXgz1gOjAw/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAD20JXaDzEnuVtYL9qTy5-qJjhvA);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Top 10 Psychological Thrillers</h5>
                      <span>WatchMojo.com</span>
                      <b>3,989,623 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/B4_xHvckn7Q/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCran24KiK_Xm64DA2xnQ-bGqV2qw);"></div>
                    <div class="ttrinfo">
                      <h5>Wild Child Full Movie</h5>
                      <span>Full Movies</span>
                      <b>3,161,419 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/WXRYA1dxP_0/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=JBc28-IXBwVVKD1eed2r3bIzRrE);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>The Tree of Life Movie Trailer Official (HD)</h5>
                      <span>ScreenJunkies News</span>
                      <b>10,566,005 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/mYAahN1G8Y8/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=Q7G9ExtZGWBKTZ7eC42c--VW7Rk);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>X+Y Scene Clip - Nathan solves math problem</h5>
                      <span>PinnacleFilmsSales</span>
                      <b>3,756,815 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/R0IwgWzfGr4/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDNuITNPsjiOnBvlCyul1fpjViPLw);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Steve Jobs - Official Trailer | Danny Boyle | Michael Fassbender | 2015</h5>
                      <span>Universal Pictures UK</span>
                      <b>1,533,643 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/N7b0cLn-wHU/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBDwsSS0dEgXeHjBGsA_a5jcWqKjw);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>Good Will Hunting Scene (Math Problem)</h5>
                      <span>samyeargin</span>
                      <b>2,261,520 views</b>
                    </div>
                  </div>

                  <div class="trxVidItem">
                    <div class="thum" style=" background-image: url(https://i.ytimg.com/vi/HP4NxUFgFrs/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDRg01F4uMN0_hhQZcMeqCkiuE9uA);">
                      <span>04:56</span>
                    </div>
                    <div class="ttrinfo">
                      <h5>My Sisters Keeper (2009) Official Trailer [True HD] [720p]</h5>
                      <span>BestHDTrailers</span>
                      <b>4,229,909 views</b>
                    </div>
                  </div>

              </div>
            </div>

            <div class="LoadMoreBtn" style="padding: 0; padding-bottom: 40px;">
              <a class="waves-effect waves-light btn" style="background-color: #2d2d2d !important;">Load More</a>
            </div>

        </div>
    </div>

</div>

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


  videojs('AAymanPlayer', {    
      controls: true
  });  
</script>


@endsection