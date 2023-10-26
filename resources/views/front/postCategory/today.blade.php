<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:url"           content="http://jaintabarta.com/single/video/{{ $news->id }}" />
 
  <meta property="og:title"         content="{{ $news->title }}." />
  <meta property="og:description"   content="{!!  substr(strip_tags($news->des), 0, 300) !!}" />
  
<meta property="og:type"             content="video" />
    <meta property="og:video"            content="https://www.youtube.com/watch?v={{$news->file}}">
    <meta property="og:video:type"       content="video/mp4">
    <meta property="og:video:width"      content="500">
    <meta property="og:video:height"     content="281">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>{{ $news->title }}</title>
       <link rel="icon" href="{{ asset('/') }}public/front/img/logo_182x70.png" />
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/front/css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/front/css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/front/css/owl.theme.default.css" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('/')}}public/front/css/font-awesome.min.css">
 <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/front/css/style.css"/>

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
	<script src="{{asset('/')}}public/front/js/bongabdo.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){
    $('.bongabdo').bongabdo({
    	showSeason: true,
    format: "DD-MM [YY]"
    });
    });
</script>
	<!--<script src="{{asset('/')}}public/front/js/jquery.min.js"></script>-->
    </head>
	<body>
	
		<!-- Header -->
		@include('user.include.header1')
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
								<div class="article-img" style="width:165px;padding: 0px;">
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
						    
							<h1 class="article-title" style="font-size: 25px;" id="dis">{{ $news->title }}</h1>
								<h1 class="article-title" style="font-size: 21px;" id="mdis1">{{ $news->title }}</h1>
								
								<div id="">
								<div style="float:left;overflow: hidden;">
								    <!--<button type="button" class="btn btn-success"   style="height: 29px;"  >মোট পঠিত:<span class="badge">{{ $news->total_share }}</span></button> -->
								</div>
								<div style="float:left;overflow: hidden;padding-left:10px;">
						       <div class="fb-share-button" 
                                     data-href="http://jaintabarta.com/single/video/{{ $news->id }}" 
                                     data-layout="button_count"
                                     data-size="large">
                                </div>
			                  </div>					     
								      
                             <div style="float:left;overflow: hidden;">
               
                             <div class="addthis_inline_share_toolbox" style="padding-right: 15px;"></div>
            
                            </div>
                            </div>
                            <!--<div class="row" id="mdis1">
                                <div class="col-sm-12 text-center">
                                    <div style="float:left;overflow: hidden;padding-left:49px;">
								    <center> <button type="button" class="btn btn-success"   style="height: 29px;"  >মোট পঠিত:<span class="badge">{{ $news->total_share }}</span></button> </center>
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
                            </div>-->
            
							<div class="article-main-img">
							@if($news->category_id == 19)
											  <video controls >
 <source src="{{url('video-admin/'.$news->cover_image)}}" type="video/mp4">
Your browser does not support the audio element.
</video>
</div>
							@else
							<br><br>
							<div class="article-main-img">
			 <iframe width="600" height="300" src="https://www.youtube.com/embed/{{$news->file}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                                 
							</div>
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

							
								
								  <!--<div class="fb-share-button" data-href="http://test.youthexpressltd.com/" data-layout="box_count" data-size="small">
								  	<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftest.youthexpressltd.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
								  </div>-->
								  
								  <!-- Your share button code -->
								  <!--<div class="row">
								      <div class="col-md-2"> <div class="fb-share-button" 
    data-href="http://test.youthexpressltd.com/single/post/{{ $news->id }}" 
    data-layout="button_count"
      data-size="large" syle="float:left">
  </div>
  </div>
								      <div class="col-md-4">
								      
               
               
                <div class="addthis_inline_share_toolbox_4ihk"></div>
            
            
								  </div>
								  </div>-->
 

								
                               
                
            
								
								<p>{!!$news->des!!}</p>
	
							
								<h2>
									শেয়ার করুন
								</h2>
								<div style="float:left;overflow: hidden;">
						 <div class="fb-share-button" 
    data-href="http://jaintabarta.com/single/video/{{ $news->id }}" 
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
					
						
					
							
					    @if($latestId == $news->id)
					    <div class="text-center" style="float:left;">	
				<a href="{{route('singlePost',['id'=>$previous])}}" class="btn btn-default" style="color:blue;"><i class="fa fa-angle-double-left"></i>  পূর্ববর্তী সংবাদ </a> 
                       
						<h6 class="article-title"><a href="{{route('singlePost',['id'=>$pnews->id])}}">{{ str_limit($pnews->title,'25') }}</a></h6>
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
						<h6 class="article-title"><a href="{{route('singlePost',['id'=>$nnews->id])}}">{{ str_limit($nnews->title,'25') }}</a></h6>
						
						</div>
						@else
						<div class="text-center" style="float:left;">	
				<a href="{{route('singlePost',['id'=>$previous])}}" class="btn btn-default" style="color:blue;"><i class="fa fa-angle-double-left"></i>  পূর্ববর্তী সংবাদ </a> 
                       
						<h6 class="article-title"><a href="{{route('singlePost',['id'=>$pnews->id])}}">{{ str_limit($pnews->title,'25') }}</a></h6>
						</div>
						<div class="text-center" id="n1" style="float:left;">	
						
                       <div class="vl" id="dis" style=" border-left: 1px solid green;height: 100px;"></div>
						
						
						</div>
						<div class="text-center" id="n2" style="float:left;">
							
						<a href="{{route('singlePost',['id'=>$next])}}" class="btn btn-default" style="color:blue;">পরবর্তী সংবাদ <i class="fa fa-angle-double-right"></i></a>
						<h6 class="article-title"><a href="{{route('singlePost',['id'=>$nnews->id])}}">{{ str_limit($nnews->title,'25') }}</a></h6>
						
						</div>
					     @endif
					     
					    
					</div>
					
						
						
					<!--mobile3-->
					<!-- ROW -->
				<div class="row" id="mdis1">
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
							<a href="{{route('singlePost',['id'=>$national->id])}}">
							<img src="{{asset('/')}}{{$national->cover_image}}" alt="" >
										</a>
										
									</div>
									<div class="article-body">
							<p class="article-title" style="padding-left:20px;font-size: 12px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{  str_limit($national->title,'35')}}</a></p>
										
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
												{{ str_limit($headline->title,'25')}}
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
												{{ str_limit($headline->title,'25')}}
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
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row" id="dis">
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
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title }}</a></h4>
										
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
		@include('user.include.footer')

		<!-- /FOOTER -->
		
		
		
		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->

		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->
		
		<!-- jQuery Plugins -->
			<!--<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=2323306957775742&autoLogAppEvents=1"></script>-->

<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=2323306957775742&autoLogAppEvents=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
		
		<script src="{{asset('/')}}public/front/js/bootstrap.min.js"></script>
		<script src="{{asset('/')}}public/front/js/owl.carousel.min.js"></script>
		<script src="{{asset('/')}}public/front/js/main.js"></script>
		<script src="{{asset('/')}}public/front/js/bootnavbar.js"></script>
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}

	</body>
</html>
