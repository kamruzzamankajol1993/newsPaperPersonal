<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:url"           content="https://www.dailybanglatimes.com/sub/single/post/{{ $news->id }}" />
  <meta property="og:type"          content="{{ $news->title }} - " />
  <meta property="og:title"         content="{{ $news->title }}." />
  <meta property="og:description"   content="{!!  substr(strip_tags($news->paragraph), 0, 300) !!}" />
  <meta property="og:image"         content="{{asset('/')}}{{$news->cover_image1}}"  />
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
 <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/style.css"/>
				  <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front/css/uikit.min.css">


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
    </head>
	<body>

		<!-- Header -->
		@include('user.include.header2')
		<!-- /Header -->

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
use App\Http\Controllers\PostDetailController;
$ob=new PostDetailController;
?>

							<!-- ARTICLE -->
				<article class="article widget-article" id="dis">

								<div class="article-body" style="background: #425B91;position:relative;" >
									<div style="position: absolute;
	display:block;
    width:40px;
    height: 40px;
    border-radius: 50%;
    background-color:black;
    left: 50%;
    transform: translateX(-50%);
    top: -16px;"><P style="padding:5px;"><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size:30px;color:white"></i></P></div>
					    <p class="article-title" style="color:white;padding-left: 39px;
    padding-top: 29px;background: #425B91;">{{ $news->total_view }} : </p>

					    	<p  style="font-size:12px;color:white;padding-left: 20px;
    ;background: black;"><i class="fa fa-clock-o"></i> প্রকাশিত : <?php echo "$convertedDATE";?></p>
    	    	</div>



							</article>
							<!-- /ARTICLE -->
							<!--mobile 1-->
							<article class="article widget-article" id="mdis1" style="" >

				<div class="article-body" style="background: #425B91;position:relative">
							<div style="position: absolute;
	display:block;
    width:50px;
    height: 50px;
    border-radius: 50%;
    background-color:black;
    left: 50%;
    transform: translateX(-50%);
    top: -21px;"><P style="padding:5px;"><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size:40px;color:white"></i></P></div>
					    <p class="article-title text-center" style="color:white;padding-left: 20px;
    padding-top: 31px;background: #425B91;font-size: 17px;">
    {{ $news->total_view }} :
</p>

<p class="text-center" style="color:white;padding: 10px;
    ;background: black;font-size: 14px;"><i class="fa fa-clock-o"></i> প্রকাশিত : <?php echo "$convertedDATE";?></p>
    	    	</div>



							</article>
							<!--mobile 1-->



						</div>
						<!-- /article widget -->
						<div class="widget" id="dis">
							<!-- section title -->

								<div class="section-title1">
									<h2 class="title1">জনপ্রিয় সংবাদ </h2>
								</div>

							<!-- /section title -->
						@foreach($famousposts as $national)
						<!-- ARTICLE -->
							<article class="article widget-article" style="margin-bottom: 0px;">
								<div class="article-img" style="width:165px;">
									<a href="{{route('singlePost',['id'=>$national->id])}}">
										<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
									</a>
								</div>
								<br><br><br><br><br>
								<div class="article-body">
									<h6 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}" style="margin-top: 5px;">{{ $national->title }}</a></h6>

								</div>
							</article>
							<!-- /ARTICLE -->
							@endforeach




						</div>
						<!-- /article widget -->
					</div>
					<div class="col-md-7">

						<!-- breadcrumb -->
						<ul class="article-breadcrumb">
							<li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li>@foreach($subcats as $cat)
								@if($news->subcategory_id == $cat->id)
								<a href="{{route('subpost',['id'=>$cat->id])}}">

								{{ $cat->sub_name }}
							</a>
							@endif
							@endforeach</li>
							<li>{{ $news->title }}.</li>
						</ul>
						<!-- /breadcrumb -->

						<!-- ARTICLE POST -->
						<article class="article article-post">
						      <p class="text-danger" style="padding-left: 5px;">{{ $news->op_title }}</p>
							<h1 class="article-title" style="font-size: 25px;" id="dis">{{ $news->title }}</h1>
								<h1 class="article-title" style="font-size: 21px;" id="mdis1">{{ $news->title }}</h1>
								<br>
								<div id="dis">
								<div style="float:left;overflow: hidden;">
								    <!--<button type="button" class="btn btn-success"   style="height: 29px;"  >মোট পঠিত:<span class="badge">{{ $news->total_share }}</span></button> -->
								</div>
								<div style="float:left;overflow: hidden;padding-left:10px;">
						       <div class="fb-share-button"
                                     data-href="http://jaintabarta.com/single/post/{{ $news->id }}"
                                     data-layout="button_count"
                                     data-size="large">
                                </div>
			                  </div>

                             <div style="float:left;overflow: hidden;">

                             <div class="addthis_inline_share_toolbox" style="padding-right: 15px;"></div>

                            </div>
                            </div>
                            <div class="row" id="mdis1">
                                <div class="col-sm-12 text-center">
                                    <div style="float:left;overflow: hidden;padding-left:49px;">
								    <!--<center> <button type="button" class="btn btn-success"   style="height: 29px;"  >মোট পঠিত:<span class="badge">{{ $news->total_share }}</span></button> </center>-->
								</div>
									<div style="float:left;overflow: hidden;padding-left:10px;">
						       <center> <div class="fb-share-button"
                                     data-href="http://jaintabarta.com/single/post/{{ $news->id }}"
                                     data-layout="button_count"
                                     data-size="large">
                                </div></center>
			                  </div>
                                </div><br>
                                <div class="col-sm-12" style="margin-top:18px">
                                    <div style="">

                            <center> <div class="addthis_inline_share_toolbox" style="padding-right: 15px;"></div></center>

                            </div>
                                </div>
                            </div>
             <br>
							<div class="article-main-img" style="overflow:hidden;" uk-lightbox>
								<a href="{{asset('/')}}{{$news->cover_image}}"><img src="{{asset('/')}}{{$news->cover_image}}" alt="">
								<img style="position: relative;
    top: -66px;
    /* padding-left: 584px; */
    height: 32px;
    width: 62px;
    margin-left: 596px;" src="{{asset('/')}}public/new_front/public/front/img/logo-ol3t6tqtnvngxth3oqe5r1rnder00ua1dt7qcy4lj6.png"/>
								<p>{{$news->caption}}</p></a>
							</div>
								<p>{{$news->caption}}</p>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category">
										@foreach($subcats as $cat)
								@if($news->subcategory_id == $cat->id)
								<a href="{{route('subpost',['id'=>$cat->id])}}">

								{{ $cat->sub_name }}
							</a>
							@endif
							@endforeach
									</li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>





								<p>{!!$news->paragraph!!}</p>


								<h2>
									শেয়ার করুন
								</h2>
						  <!-- Your share button code -->
								  <div style="float:left;overflow: hidden;">
						 <div class="fb-share-button"
    data-href="http://jaintabarta.com/sub/single/post/{{ $news->id }}"
    data-layout="button_count"
      data-size="large">
  </div>
			</div>

                <div style="float:left;overflow: hidden;">
                 <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox" style="padding-right: 15px;"></div>


								  </div>
							</div>
						</article>
						<!-- /ARTICLE POST -->
					<br>
					<hr>

				@if($firstId == $news->id)
					    @else
							<div class="text-center" style="float:left;">
						<a href="{{route('subsinglePost',['id'=>$previous])}}" class="btn btn-default" style="color:blue;"> <i class="fa fa-angle-double-left"></i>পূর্ববর্তী সংবাদ</a>

						<h6 class="article-title"><a href="{{route('singlePost',['id'=>$pnews->id])}}">{{ str_limit($pnews->title,'25') }}</a></h6>
						</div>
						@endif

							<div class="text-center" id="n1" style="float:left;">

                       <div class="vl" id="dis" style=" border-left: 1px solid green;height: 100px;"></div>


						</div>
					    @if($latestId == $news->id)
					    @else
						<div class="text-center" id="n2" style="float:left;">

						<a href="{{route('subsinglePost',['id'=>$next])}}" class="btn btn-default" style="color:blue;">পরবর্তী সংবাদ <i class="fa fa-angle-double-right"></i></a>
						<h6 class="article-title"><a href="{{route('singlePost',['id'=>$nnews->id])}}">{{ str_limit($nnews->title,'25') }}</a></h6>

						</div>
					     @endif



					</div>
					<!-- /Main Column -->
					<!--mobile3-->
					<!-- ROW -->
				<div class="row" id="mdis1">
				     <div class="col-md-12 col-sm-12">
                <div class="visible-lg visible-md">
                    <img class="center-block" src="{{asset('/')}}{{$catad}}" alt="">
                </div>
            </div>
                <br><br>
					<br>
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">এ বিভাগের অন্যান্য</h2>
						</div>
						<!-- /section title -->

						<!-- row -->
						<div class="row">
							@foreach($randomposts as $national)
							<!-- Column 1 -->
							<div class="" >
								<!-- ARTICLE -->
								<article class="article" style="float:left;overflow: hidden;width:182px;">
									<div class="article-img" style="width:190px;padding-left:20px;">
							<a href="{{route('subsinglePost',['id'=>$national->id])}}">
							<img src="{{asset('/')}}{{$national->cover_image}}" alt="" >
										</a>

									</div>
									<div class="article-body">
							<p class="article-title" style="padding:17px;font-size: 13px;"><a href="{{route('subsinglePost',['id'=>$national->id])}}">{{  $national->title}}</a></p>

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
							<!-- /ARTICLE -->
							@endforeach



						</div>
						<!-- /article widget -->

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
		 @foreach($singlecategoryad as $ad)
			<img class="center-block" src="{{asset('/')}}{{$ad->image}}" alt="">
			@endforeach
		</div>
		<!-- /AD SECTION -->
					</div>
					</div>
					</div>
					</div>

		<!-- SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row" id="dis">
				    
				     <div class="col-md-12 col-sm-12">
                <div class="visible-lg visible-md">
                    <img class="center-block" src="{{asset('/')}}{{$catad}}" alt="">
                </div>
            </div>
                <br><br>
					<!-- Main Column -->
					<div class="col-md-12">
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
										<a href="#">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="article-title" style="padding:17px;font-size: 17px;"><a href="{{route('subsinglePost',['id'=>$national->id])}}">{{  $national->title}}</a></p>

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
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e9852ed54089e26"></script>

	<!-- FOOTER -->
		@include('user.include.footer1')

		<!-- /FOOTER -->



		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->

		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->



 <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

		<script src="{{asset('/')}}public/new_front/public/front/js/bootstrap.min.js"></script>
		<script src="{{asset('/')}}public/new_front/public/front/js/owl.carousel.min.js"></script>
		<script src="{{asset('/')}}public/new_front/public/front/js/main.js"></script>
		<script src="{{asset('/')}}public/new_front/public/front/js/bootnavbar.js"></script>
		<script src="{{asset('/')}}public/new_front/public/front/js/uikit.min.js"></script>
        <script src="{{asset('/')}}public/new_front/public/front/js/uikit-icons.min.js"></script>
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
       <script type="text/javascript">

   $('.changeLangg').change(function(){
    window.location = $(this).val();
});

</script>
<script type="text/javascript">
// Disable right click on web page
$("html").on("contextmenu",function(e){
    return false;
});
// Disable cut, copy and paste on web page
$('html').bind('cut copy paste', function (e) {
     e.preventDefault();
});
</script>
	</body>
</html>
