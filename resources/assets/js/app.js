
var baseURL = 'http://localhost/joika3';
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
//require('./snap');
//window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

window.$ = window.jQuery = require('jquery');
require('../../../public/js/bower_components/materialize/dist/js/materialize');
require('./jquery.unveil');
//require('../../../public/js/videojs-ie8.min');
//require('../../../public/js/video');
//require('../../../public/js/Youtube');
//require('../../../public/js/videojs-resolution-switcher');



/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */
/*
window.Vue = require('vue');
require('vue-resource');

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

/*
Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Wie2.csrfToken);

    next();
});
*/





/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.


Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});


 */



(function($){
 $(function(){


$('.langer').on('click',function(){
  if($('.langDiver').css('right') == '-305px')
  {
    $('.langDiver').css({'right':'5px'});
  }
  else
  {
    $('.langDiver').css({'right':'-305px'});
  }
  
});

$('.CloselangDiver').on('click',function(){
  $('.langDiver').css({'right':'-305px'});
});





 }); // end of document ready
})(jQuery); // end of jQuery name space

$("img").unveil();




$('.videoAction21').dropdown({
  inDuration: 100,
  outDuration: 100,
  constrainWidth: false, // Does not change width of dropdown to that of the activator
  hover: true, // Activate on hover
  gutter: 0, // Spacing from edge
  belowOrigin: false, // Displays dropdown below the button
  alignment: 'left', // Displays dropdown with edge aligned to the left of button
  stopPropagation: false // Stops event propagation
});

$('.datepicker').pickadate({
   selectMonths: true, // Creates a dropdown to control month
   selectYears: 100, // Creates a dropdown of 15 years to control year
   format: 'dd/mm/yyyy',
   min: [1940,12,31],
   max: [2014,11,30],
   closeOnSelect: true,
   closeOnClear: true
});

$('.button-collapse, .UploadBtn').sideNav({draggable: false});
$('select').material_select();
$('.parallax').parallax();
$('.slider').slider({full_width: true, height: '100%'});
$('.tooltipped').tooltip({delay: 50, html:true});

//random div

$.each($('.section1 .item'),function(i,v){
    var divw = Math.floor(Math.random() * 500) + 100 ;
    var divh = Math.floor(Math.random() * 500) + 100 ;
    console.log(i);
    $(this).css({'height':divh,'width':divw,'background-color':'#'+divw});
});

/*
var snapper = new Snap({
    element: document.getElementById('app'),
    hyperextensible: false,
    disable: 'left'
});

$('#logo-container').click(function(){

    $('body').css({'overflow': 'hidden'});
    snapper.open('right');
    $('.snap-drawers').css({'z-index': '1'});
    
    //snapper.expand('right');
});

$('.closeRight').click(function(){
    snapper.close('right');
    $('.snap-drawers').css({'z-index': '-1'});
    $('body').css({'overflow': 'auto'});
});
*/

$('.channelName').on('mouseover',function()
{
    //Materialize.toast('I am a toast', 4000,'bottom',function(){  })
});

$('.hoverGht').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'bottom' // Displays dropdown with edge aligned to the left of button
});


$('.hoverMenu').dropdown({
      inDuration: 200,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      //alignment: 'bottom left' // Displays dropdown with edge aligned to the left of button
});

$('.hoverMenu2').dropdown({
      inDuration: 200,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      //alignment: 'bottom left' // Displays dropdown with edge aligned to the left of button
});

//  }); // end of document ready
//})(jQuery); // end of jQuery name space

//-----------------------------
    var page = 1;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height() ) 
        {
            page++;
            loadMoreData(page);
        }
        else if($(window).scrollTop() == 0)
        {
            page++;
            loadMoreData(page);
        }
    });
    function loadMoreData(page){
        $.ajax({
            url: '?page=' + page,
            type: "get",
            beforeSend: function()
            {
                $('.ajax-load').css({'opacity': '1'});
            }
        })
        .done(function(data){
            if(data.html == null)
            {
                $('.ajax-load').html("<div style='text-align: center; display:block; width:100%; '>No more records found</div>");
                return true;
            }
            $('.ajax-load').css({'opacity': '0'});
            $("#post-data").append(data.html);
            $("img").unveil();
            $('.parallax').parallax();
            
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
              $('.ajax-load').html("Error, Try Again");
        });
    }
//-----------------------------



$('.doUpload11x').change(function(e){
    e.preventDefault();
    var formData = new FormData($(this).parents('.uploadForm')[0]);
    $.ajax({
        url: baseURL+'/douploadprogress',
        type: 'POST',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            if(myXhr.upload){
                    myXhr.upload.addEventListener('progress',progress, false);
                    $('.uploadForm fieldset').attr("disabled","disabled");
            }
            return myXhr;
        },
        success: function (data) 
        {
            data = JSON.parse(data);
            $('.uploadInput').attr('placeholder','Converting, Please Wait.');
            console.log(data);
        },
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});

function progress(e){
    if(e.lengthComputable){
        var max = e.total;
        var current = e.loaded;
        var Percentage = (current * 100)/max;
        //$('.meter span').css({width:Percentage+'%'});
        $('.uploadInput').attr('placeholder',Percentage+'%');
        //console.log(Percentage);
        if(Percentage >= 100)
        {
          setTimeout(function(){ 
             //window.location = "onGoingProgress"; 
             $('.uploadInput').attr('placeholder','Upload Completed, Converting Please Wait.');
          }, 1000);
        }
    }  
}

$('#AymanPlayer').bind('contextmenu', function(e) {
    return false;
});

/*
var popotions = ['left','top','right','bottom'];
var pocolors = ['cyan','#101010'];
var potimes = ['1','10','100','1000','10000'];
setInterval(function(){
  $('.uCleft').find('img').css('border-'+popotions[Math.floor(Math.random()*popotions.length)],'solid 10px '+pocolors[Math.floor(Math.random()*pocolors.length)]);
},potimes[Math.floor(Math.random()*potimes.length)]);
*/



