<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bartabd.news/single/post/772 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jan 2023 07:48:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:url"           content="https://bangla.dailybanglatimes.com/single/post/{{ $news->id }}" />
  <meta property="og:type"          content="{{ $news->title }} - " />
  <meta property="og:title"         content="{{ $news->title }}." />
  <meta property="og:description"   content="{!!  substr(strip_tags($news->paragraph), 0, 300) !!}" />
  <meta property="og:image"         content="{{asset('/')}}{{$news->cover_image}}"  />
  <meta property="og:image:width" content="720" />
<meta property="og:image:height" content="720" />
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>{{ $news->title }}</title>
       <link rel="icon" href="{{ asset('/') }}{{ $icon }}" />
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/owl.theme.default.css" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/style.css"/>

<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/custom_style.css"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
       <style>
		.top-date{
		float: right;font-weight:400;color: #343a40;font-size:15px;margin-top:-3px;
		}
		.dropdown-menu > li a:hover, .dropdown-menu > li.show {
			background:black;
			color: white;
		}
		.navbar-dark .navbar-nav .nav-link {
			color: #f8f9fa;
		}
		label{
			font-weight: bold;
		}
		.label-optional{
			font-size: 13px;
		}
		.task-menu{
			margin-top: 2px;
			position: absolute;
			background: white;
			z-index: 1;
			float: right;
			right: 0px;
			box-shadow: 0 0 1px 0px;
			display: none;

		}
		.task-btn{
			color:#428bca;
			cursor: pointer;
			margin-bottom: 0px;
			font-size: 20px;
			padding-top: 5px;
			padding-left: 7px;
			padding-right: 7px;
		}
		.task-btn:active{
			color:#428bca;
			border: 0px;
		}
		.task-icon{
			color:#428bca;
		}
		.task-label{
			color:#428bca;

		}
		.dropdown-item{
			font-size: 14px;
		}
		.action-btn{
			width: 90px;
			border-radius: 0px;
			height: 30px;
			font-size: 15px;
			padding-top: 4px;
			text-align: center;
			background: #428bca;
			color: white;
			cursor: pointer;
		}
		.action-menu{
			margin-right:60px;margin-top:5px;
		}
		::-webkit-scrollbar{
		    display: none;
		  }

       .footer-logo img:hover {
  filter:none;
}

	</style>
	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
	<script src="{{asset('/')}}public/new_front/public/front/js/bongabdo.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){
    $('.bongabdo').bongabdo({
    	showSeason: true,
    format: "DD-MM [YY]"
    });
    });
</script>
	<!--<script src="{{asset('/')}}public/new_front/public/front/js/jquery.min.js"></script>-->
<!-- BEGIN SHAREAHOLIC CODE -->
<link rel="preload" href="https://cdn.shareaholic.net/assets/pub/shareaholic.js" as="script" />
<meta name="shareaholic:site_id" content="987288750f957f3f5f42558fcb2dae8a" />
<script data-cfasync="false" async src="https://cdn.shareaholic.net/assets/pub/shareaholic.js"></script>
<!-- END SHAREAHOLIC CODE -->

</head>
<body>
    @include('new_front.include.header')



<!-- SECTION -->
<div class="section">
    <!-- CONTAINER -->
    <div class="container">
        <!-- ROW -->
        <div class="row">
            <!-- Main Column -->
            <div class="col-md-2">
                <!-- article widget -->
                <div class="widget" style="border:2px">

                                                                            <?php
$currentDate = $news->created_at;
$engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
'May','June','July','August','September','October','November','December','Saturday','Sunday',
'Monday','Tuesday','Wednesday','Thursday','Friday');
$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
বুধবার','বৃহস্পতিবার','শুক্রবার'
);
$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);

?>
<?php
use App\Http\Controllers\Admin\PostDetailController;
$ob=new PostDetailController;
?>

                    <!-- ARTICLE -->
        <article class="article widget-article" id="dis">

<div class="article-body" style="background: #CCCCCC;position:relative;height:275px;" >
                            <div style="position: absolute;
display:block;
width:40px;
height: 40px;
border-radius: 50%;
background-color:#CCCCCC;
left: 50%;
transform: translateX(-50%);
top: -16px;"><P style="padding:5px;"><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size:30px;color:black"></i></P></div>
                <p class="" style="color:clack;padding-left: 39px;
padding-top: 29px;background: #CCCCCC;">{{ $news->total_view }} : </p>

          <hr style="background-color:black;">
                    <p  style="font-size:12px;color:black;padding-left: 20px;
;background:#CCCCCC;"><i class="fa fa-clock-o"></i> প্রকাশিত : <?php echo "$convertedDATE";?></p>
<hr style="background-color:black;">
<p  class="text-center" style="font-size:12px;color:black;padding-left: 20px;
;background:#CCCCCC;" >
<div class="zoomOut" style="float:left;overflow: hidden;padding-left: 40px;"><span><img src="{{asset('/')}}public/new_front/public/front/img/1024px-Bengali_Letter_A.svg_1_20x20.png" /></span>
<i class="fa fa-minus" style="font-size:20px;"></i>
</div>
<div class="zoomIn" style="float:left;overflow: hidden;padding-left: 20px;">
<span><img src="{{asset('/')}}public/new_front/public/front/img/1024px-Bengali_Letter_A.svg_1_20x20.png" /></span><i class="fa fa-plus" style="font-size:20px;"></i>
</div>

</p>
<br>
<hr style="background-color:black;">
<div  style="font-size:12px;color:black;padding-left: 20px;background:#CCCCCC;overflow:hidden; "><button type="button" class="btn btn-success"   style="height: 35px;"  >মোট পঠিত:<span class="badge">{{ $news->total_share }}</span></button></div>
        </div>




                    </article>
                    <!-- /ARTICLE -->
                    <!--mobile 1-->
                    <article class="article widget-article" id="mdis1" style="" >

        <div class="article-body" style="background: #CCCCCC;position:relative;height: 285px;">
                    <div style="position: absolute;
display:block;
width:50px;
height: 50px;
border-radius: 50%;
background-color:#CCCCCC;
left: 50%;
transform: translateX(-50%);
top: -21px;"><P style="padding:5px;"><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size:40px;"></i></P></div>
                <p class="text-center" style="padding-left: 20px;
padding-top: 31px;background: #CCCCCC;font-size: 17px;">
{{ $news->total_view }} :
</p>

<hr style="background-color:white;">
<p class="text-center" style="padding: 10px;
;background: #CCCCCC;font-size: 14px;"><i class="fa fa-clock-o"></i> প্রকাশিত : <?php echo "$convertedDATE";?></p>
<hr style="background-color:black;">
<p  class="text-center" style="font-size:12px;color:black;padding-left: 20px;
;background:#CCCCCC;" >
<div class="zoomOut" style="float:left;overflow: hidden;padding-left:98px;">
    <span><img src="{{asset('/')}}public/new_front/public/front/img/1024px-Bengali_Letter_A.svg_1_20x20.png" /></span>
<i class="fa fa-minus" style="font-size:20px;"></i>
</div>
<div class="zoomIn" style="float:left;overflow: hidden;padding-left: 20px;">
<span><img src="{{asset('/')}}public/new_front/public/front/img/1024px-Bengali_Letter_A.svg_1_20x20.png" /></span>
<i class="fa fa-plus" style="font-size:20px;"></i>
</div>

</p>
<br>
<hr style="background-color:black;">
<div  style="font-size:12px;color:black;padding-left: 86px;background:#CCCCCC;overflow:hidden; "><button type="button" class="btn btn-success"   style="height: 35px;"  >মোট পঠিত:<span class="badge">{{ $news->total_share }}</span></button></div>
        </div>



                    </article>
                    <!--mobile 1-->




                </div>
                <!-- /article widget -->
                <!--<div class="widget" id="dis">


                        <div class="section-title1">
                            <h2 class="title1">জনপ্রিয় সংবাদ </h2>
                        </div>

                @foreach($famousposts as $national)

                    <article class="article widget-article" style="margin-bottom: 0px;">
                        <div class="article-img" style="width:165px;">
                            <a href="{{route('singlePost',['id'=>$national->id])}}">
                                <img src="{{asset('/')}}{{$national->cover_image}}" alt="">
                            </a>
                        </div>
                          <br><br><br><br><br>
                        <div class="article-body">

                            <h6 class="article-title">
                                <a href="{{route('singlePost',['id'=>$national->id])}}" style="margin-top: 5px;">{{ $national->title }}</a>
                            </h6>

                        </div>
                    </article>

                    @endforeach




                </div>-->
                <!-- /article widget -->
            </div>
            <div class="col-md-7">

                <!-- breadcrumb -->
                <ul class="article-breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li>
                        @foreach($subcat1s as $cat)
                        @if($news->category_id == $cat->id)
                        <a href="{{route('post',['id'=>$cat->id])}}">

                        {{ $cat->name }}
                    </a>
                    @endif
                    @endforeach
                </li>
                    <li>{{ $news->title }}.</li>
                </ul>
                <!-- /breadcrumb -->

                <!-- ARTICLE POST -->
                <article class="article article-post">
                      <p class="text-danger" style="padding-left: 5px;">{{ $news->op_title }}</p>
                    <h1 class="article-title" style="font-size: 25px;" id="dis">{{ $news->title }}</h1>
                    <div id="dis">
                    <p class="" style="padding-left: 5px;float:left;overflow:hidden;" >
                        @foreach($users as $user)
                         @if($user->id == $news->user_id)
                         @if($user->role_id == 1)
                      <img src="{{asset('/profile-photo/'.$user->image)}}" height="40"  width="40" />
                      @else
                       <img src="{{asset($user->image)}}" height="40"  width="40" />
                      @endif
                          @endif
                         @endforeach
                    </p>
                    <p class="" style="float:left;overflow:hidden;padding-top: 10px;
padding-left: 10px;">
@foreach($users as $user)
@if($user->id == $news->user_id)
{{ $user->name }}
@endif
@endforeach
</p>
                    </div>
                        <h1 class="article-title" style="font-size: 21px;" id="mdis1">{{ $news->title }}</h1>
                    <div id="mdis1">
                    <p class="" style="padding-left: 5px;float:left;overflow:hidden;" >
                        @foreach($users as $user)
                         @if($user->id == $news->user_id)
                      @if($user->role_id == 1)
                      <img src="{{asset('/profile-photo/'.$user->image)}}" height="40"  width="40" />
                      @else
                       <img src="{{asset($user->image)}}" height="40"  width="40" />
                      @endif
                          @endif
                         @endforeach
                    </p>
                    <p class="" style="float:left;overflow:hidden;padding-top: 10px;
padding-left: 10px;">
@foreach($users as $user)
@if($user->id == $news->user_id)
{{ $user->name }}
@endif
@endforeach
</p>
                    </div>
                        <br>
                        <div id="">


                     <div style="">

<div class="shareaholic-canvas" data-app="share_buttons" data-app-id="33095883"></div>

        <!-- Go to www.addthis.com/dashboard to customize your tools -->
       <!-- <div class="addthis_inline_share_toolbox"></div>-->


                    </div>
                    </div>


                    <div class="article-main-img">
                    @if($news->category_id == 52)

<iframe width="400" height="200" src="{{$news->cover_image}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
                    @else

                    <div class="article-main-img" style="overflow:hidden;">
                        <img src="{{asset('/')}}{{$news->cover_image}}" alt="{{$news->caption}}" id="mdis1">
    <img src="{{asset('/')}}{{$news->cover_image}}" alt="{{$news->caption}}" id="myImg">
                        <!--<img  id="watermark" style="" src="{{asset('/')}}public/new_front/public/front/img/nl.png"/>-->
                        <p>{{$news->caption}}</p>
                    </div>
                    <!-- The Modal -->
<div id="myModal" class="modal">
<span class="close" id="close" style="">&times;</span>
<img class="modal-content" id="img01" style="">
<div id="caption" style=""></div>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
modal.style.display = "block";
modalImg.src = this.src;
captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}
</script>
                    @endif
                    <div class="article-body">

                        <ul class="article-info">
                            <li class="article-category">
                                @foreach($subcat1s as $cat)
                        @if($news->category_id == $cat->id)
                        <a href="{{route('post',['id'=>$cat->id])}}">

                        {{ $cat->name }}
                    </a>
                    @endif
                    @endforeach

                            </li>
                            <li class="article-type"><i class="fa fa-file-text"></i></li>
                        </ul>









        <div id="sd" style="overflow: scroll;">

<div id="divpnlChart" style="float: left; width: 100%;">
<div class="Normal">


                        <p>{!!$news->paragraph!!}</p>
</div>
</div>
<div class="col-md-12 col-sm-12">
                <div class="">
                    <img class="center-block" src="{{asset('/')}}{{$catad}}" alt="">
                </div>
            </div>
</div>

<script>
$(document).ready(function() {
var currZoom = $("#divpnlChart").css("zoom");
if (currZoom == 'normal') currZoom = 1;

$(".zoomIn").click(function() {
currZoom *= 1.2;
$("#divpnlChart").css("zoom", currZoom);
$("#divpnlChart").css("-moz-transform", "Scale(" + currZoom + ")");
$("#divpnlChart").css("-moz-transform-origin", "0 0");

});
$(".zoomOff").click(function() {
$("#divpnlChart").css("zoom", 1);
$("#divpnlChart").css("-moz-transform", "Scale(" + currZoom + ")");
$("#divpnlChart").css("-moz-transform-origin", "0 0");

});
$(".zoomOut").click(function() {
currZoom *= .8;
$("#divpnlChart").css("zoom", currZoom);
$("#divpnlChart").css("-moz-transform", "Scale(" + currZoom + ")");
$("#divpnlChart").css("-moz-transform-origin", "0 0");

});
});

var down = false;
var scrollLeft = 0;
var x = 0;

$('#sd').mousedown(function(e) {
down = true;
scrollLeft = this.scrollLeft;
x = e.clientX;
}).mouseup(function() {
down = false;
}).mousemove(function(e) {
if (down) {
this.scrollLeft = scrollLeft + x - e.clientX;
}
}).mouseleave(function() {
down = false;
});
</script>

                        <!--<h2>
                            শেয়ার করুন
                        </h2>-->
                        <div style="float:left;overflow: hidden;">
                 <!--div class="fb-share-button"
data-href="http://bartabd.news/single/post/{{ $news->id }}"
data-layout="button_count"
data-size="large">-->
</div>
    </div>

        <div style="float:left;overflow: hidden;">


        <!--<div class="shareaholic-canvas" data-app="share_buttons" data-app-id="33095864"></div>-->


        <!-- Go to www.addthis.com/dashboard to customize your tools -->
       <!-- <div class="addthis_inline_share_toolbox"></div>-->




                          </div>
                    </div>
                </article>
                <!-- /ARTICLE POST -->
                <br><br><br>
            <hr>




                @if($latestId == $news->id)
                <div class="text-center" style="float:left;">
        <a href="{{route('singlePost',['id'=>$previous])}}" class="btn btn-default" style="color:blue;"><i class="fa fa-angle-double-left"></i>  পূর্ববর্তী সংবাদ </a>

                <h6 class="article-title"><a href="{{route('singlePost',['id'=>$pnews->id])}}">{{ Str::limit($pnews->title,'25') }}</a></h6>
                </div>
                <div class="text-center" id="n1" style="float:left;">

               <div class="vl" id="dis" style=" border-left: 1px solid green;height: 100px;"></div>


                </div>
                @elseif($latestId != $news->id && $firstId == $news->id)
                <div class="text-center" id="n1" style="float:left;">

               <div class="vl" id="dis" style=" border-left: 1px solid green;height: 100px;"></div>


                </div>
                <div class="text-center" id="n2" style="float:left;">

                <a href="{{route('singlePost',['id'=>$next])}}" class="btn btn-default" style="color:blue;">পরবর্তী সংবাদ <i class="fa fa-angle-double-right"></i></a>
                <h6 class="article-title"><a href="{{route('singlePost',['id'=>$nnews->id])}}">{{ Str::limit($nnews->title,'25') }}</a></h6>

                </div>
                @else
                <div class="text-center" style="float:left;">
        <a href="{{route('singlePost',['id'=>$previous])}}" class="btn btn-default" style="color:blue;"><i class="fa fa-angle-double-left"></i>  পূর্ববর্তী সংবাদ </a>

                <h6 class="article-title"><a href="{{route('singlePost',['id'=>$pnews->id])}}">{{ Str::limit($pnews->title,'25') }}</a></h6>
                </div>
                <div class="text-center" id="n1" style="float:left;">

               <div class="vl" id="dis" style=" border-left: 1px solid green;height: 100px;"></div>


                </div>
                <div class="text-center" id="n2" style="float:left;">

                <a href="{{route('singlePost',['id'=>$next])}}" class="btn btn-default" style="color:blue;">পরবর্তী সংবাদ <i class="fa fa-angle-double-right"></i></a>
                <h6 class="article-title"><a href="{{route('singlePost',['id'=>$nnews->id])}}">{{ Str::limit($nnews->title,'25') }}</a></h6>

                </div>
                 @endif
                 <br><br><br><br>
                <h2>
                            মন্তব্য


                        </h2>
                <div class="fb-comments" data-href="https://www.dailybanglatimes.com" data-numposts="5" data-width=""></div>

            </div>



            <!--mobile3-->
            <!-- ROW -->
        <div class="row" id="mdis1">
            
            <br><br>
            <!-- Main Column -->
            <div class="col-md-12 mt-5">
                <!-- section title -->
                <div class="section-title">
                    <h2 class="title">এ বিভাগের অন্যান্য</h2>
                </div>
                <!-- /section title -->

                <!-- row -->
                <div class="row mt-3">
                    @foreach($randomposts as $national)
                    <!-- Column 1 -->
                    <div class="" >
                        <!-- ARTICLE -->
                        <article class="article" style="float:left;overflow: hidden;width:162px;">
                            <div class="article-img" style="width:190px;padding-left:20px;">
                    <a href="{{route('singlePost',['id'=>$national->id])}}">
                    <img src="{{asset('/')}}{{$national->cover_image}}" alt="" >
                                </a>

                            </div>
                            <div class="article-body">
                    <p class="article-title" style="padding-left:20px;font-size: 13px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{  $national->title}}</a></p>

                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /Column 1 -->
                    @endforeach





                </div>
                <!-- /row -->
            </div>
            <!-- /Main Column -->
        </div>
        <!-- /ROW -->
            <!--mobile3-->
            <!-- /Main Column -->

            <!-- Aside Column -->
            <div class="col-md-3">

            <!-- article widget -->
                <div class="widget">
                    <!-- section title -->

                        <div class="section-title1">
                            <h2 class="title1">সর্বশেষ সংবাদ </h2>
                        </div>

                    <!-- /section title -->
                    @foreach($latestheadlines as $headline)
                <!-- ARTICLE -->
                    @if($loop->first && str_replace(' ', '', $headline->title) !== str_replace(' ', '', $latestheadlines[2]->title))
                        <article class="article widget-article" style="margin-bottom: 0px;">
                            <div class="article-img">
                                <a href="{{route('singlePost',['id'=>$headline->id])}}">
                                    <img src="{{asset('/')}}{{$headline->cover_image}}" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <p ><a href="{{route('singlePost',['id'=>$headline->id])}}">
                                        {{ $headline->title}}
                                    </a>
                                </p>

                            </div>
                        </article>
                        <hr>
                    @elseif(!$loop->first && str_replace(' ', '', $headline->title) !== str_replace(' ', '', $latestheadlines[$loop->index-1]->title))
                        <article class="article widget-article" style="margin-bottom: 0px;">
                            <div class="article-img">
                                <a href="{{route('singlePost',['id'=>$headline->id])}}">
                                    <img src="{{asset('/')}}{{$headline->cover_image}}" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <p ><a href="{{route('singlePost',['id'=>$headline->id])}}">
                                        {{ $headline->title}}
                                    </a>
                                </p>

                            </div>
                        </article>
                        <hr>
                    @endif

                    <!-- /ARTICLE -->
                    @endforeach



                </div>
                <!-- /article widget -->
                 <div class="widget" id="dis">


                        <div class="section-title1">
                            <h2 class="title1">জনপ্রিয় সংবাদ </h2>
                        </div>

                @foreach($famousposts as $national)

                    <article class="article widget-article" style="margin-bottom: 0px;">
                            <div class="article-img">
                                <a href="{{route('singlePost',['id'=>$national->id])}}">
                                    <img src="{{asset('/')}}{{$national->cover_image}}" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <p ><a href="{{route('singlePost',['id'=>$national->id])}}">
                                        {{ $national->title}}
                                    </a>
                                </p>

                            </div>
                        </article>

                    @endforeach




                </div>
                    <!-- article widget -->
                <!--mobile version 2-->
                <!-- /article widget -->
                <div class="widget" id="mdis1">
                    <!-- section title -->

                        <div class="section-title1">
                            <h2 class="title1">জনপ্রিয় সংবাদ </h2>
                        </div>

                    <!-- /section title -->
                @foreach($famousposts as $national)
                <!-- ARTICLE -->
                    <article class="article widget-article" style="margin-bottom: 0px;">
                        <div class="article-img" style="width:165px;padding: 5px;">
                            <a href="{{route('singlePost',['id'=>$national->id])}}">
                                <img src="{{asset('/')}}{{$national->cover_image}}" alt="">
                            </a>
                        </div>
                        <div class="article-body">
                            <h6 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}" style="margin-top: 5px;">{{ $national->title }}</a></h6>

                        </div>
                    </article>
                    <!-- /ARTICLE -->
                    @endforeach




                </div>
                <!-- /article widget -->
                <!--mobile version 2-->




            </div>
            <!-- /Aside Column -->
        </div>
        <!-- /ROW -->
    </div>
    <!-- /CONTAINER -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- CONTAINER -->
    <div class="container">
        <!-- ROW -->
        <div class="row" id="dis">
            <!-- Main Column -->
            <div class="col-md-12">
                 <!-- AD SECTION -->
<div class="visible-lg visible-md">

</div>
<!-- /AD SECTION -->
            </div>
            </div>
            </div>
            </div>

<!-- SECTION -->
<div class="section">
    <!-- CONTAINER -->
    <div class="container">
        <!-- ROW -->
        <div class="row" id="dis">
            
                <br><br>
            <!-- Main Column -->
            <div class="col-md-12 mt-5">
                <!-- section title -->
                <div class="section-title">
                    <h2 class="title">এ বিভাগের অন্যান্য</h2>
                </div>
                <!-- /section title -->

                <!-- row -->
                <div class="row">
                    @foreach($randomposts as $national)
                    <!-- Column 1 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- ARTICLE -->
                        <article class="article">
                            <div class="article-img">
                                <a href="{{route('singlePost',['id'=>$national->id])}}">
                                    <img src="{{asset('/')}}{{$national->cover_image}}" alt="">
                                </a>
                                <ul class="article-info">
                                    <li class="article-type"><i class="fa fa-camera"></i></li>
                                </ul>
                            </div>
                            <div class="article-body">
                                <p class="article-title" style="padding-left:20px;font-size: 17px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{  $national->title}}</a></p>

                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /Column 1 -->
                    @endforeach





                </div>
                <!-- /row -->
            </div>
            <!-- /Main Column -->
        </div>
        <!-- /ROW -->
    </div>
    <!-- /CONTAINER -->
</div>
<!-- /SECTION -->





@include('new_front.include.footer')




<!-- Back to top -->
<div id="back-to-top"></div>
<!-- Back to top -->

<!-- Back to top -->
<div id="back-to-top"></div>
<!-- Back to top -->


<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=2323306957775742&autoLogAppEvents=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

 <script type="text/javascript">
$(document).ready(function () {
   //Disable cut copy paste
   /* $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });


    $("body").on("contextmenu",function(e){
        return false;
    });*/

});
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5eb2cfe97d9151ba"></script>-->

<!--<script src="https://cdn.by.wonderpush.com/sdk/1.1/wonderpush-loader.min.js" async></script>-->
<!--<script>-->
<!--window.WonderPush = window.WonderPush || [];-->
<!--WonderPush.push(["init", {-->
<!--    webKey: "1aefc100fa70887d56c661114525b9f5e9b9a5ca9fb8a906f7e0f03fd3235afc",-->
<!--}]);-->
<!--</script>-->

		<script src="{{asset('/')}}public/new_front/public/front/js/bootstrap.min.js"></script>
		<script src="{{asset('/')}}public/new_front/public/front/js/owl.carousel.min.js"></script>
		<script src="{{asset('/')}}public/new_front/public/front/js/main.js"></script>
		<script src="{{asset('/')}}public/new_front/public/front/js/bootnavbar.js"></script>

		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
       <script type="text/javascript">

   $('.changeLangg').change(function(){
    window.location = $(this).val();
});

</script>
<script type="text/javascript">
// // Disable right click on web page
// $("html").on("contextmenu",function(e){
//     return false;
// });
// // Disable cut, copy and paste on web page
// $('html').bind('cut copy paste', function (e) {
//      e.preventDefault();
// });
</script>

</body>

<!-- Mirrored from bartabd.news/single/post/772 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jan 2023 07:48:43 GMT -->
</html>
