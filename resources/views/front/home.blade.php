<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--for facebook share-->
	<meta property="og:url"           content="https://www.dailybanglatimes.com/" />
    <meta property="og:type"          content="NEWS" />
    <meta property="og:title"         content="Daily Bangla Time-" />
    <meta property="og:description"   content="dailybanglatimes.com is one of the most reliable and popular local daily newspaper. We provide latest reliable local news about various categories for 24/7 days." />
    <meta property="og:image"         content="dailybanglatimes.com/public/front/img/logo-ol3t6tqtnvngxth3oqe5r1rnder00ua1dt7qcy4lj6_182x70.png"  />
    <meta property="og:image:width" content="200"/>
    <meta property="og:image:height" content="200"/>

<!--end for facebook share-->

        <link rel="icon" href="{{ asset('/') }}{{ $icon }}" />
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
	<style>
	.carousel {
    margin-bottom: 0;

}
/* The controlsy */
.carousel-control {
	left: -12px;
    height: 40px;
	width: 40px;
    background: none repeat scroll 0 0 #222222;
    border: 4px solid #FFFFFF;
    border-radius: 23px 23px 23px 23px;
    margin-top: 60px;
}
.carousel-control.right {
	right: -12px;
}
/* The indicators */
.carousel-indicators {
	right: 50%;
	top: auto;
	bottom: -19px;
	margin-right: -19px;
}
/* The colour of the indicators */
.carousel-indicators li {
	background: #cecece;
}
.carousel-indicators .active {
background: #428bca;
}
</style>

	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
	<script src="{{asset('/')}}public/front/js/bongabdo.js"></script>
	<script type="text/javascript">
	//desktop version
	$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
	//end desktop version
   //mobile version
	$(document).ready(function() {
    $('.mw').carousel({
        interval: 5000
    })
});
//end mobile version
//bangla date
    $(document).ready(function(){
    $('.bongabdo').bongabdo({
    	showSeason: true,
    format: "DD-MM [YY]"
    });
    });
    //end bangla date
</script>

    </head>
	<body>

		<!-- Header -->
		@include('front.include.header1')
		<!-- /Header -->


		<!--new section jagoron-->
		<div class="section" style="background-color:#EFF3F4;margin-top: 10px;">
			<div class="container">
				<div class="row">
					<!--left-side-->
					<div class="col-sm-3 col-md-3">
						<!-- article widget -->
						<div class="widget" id="mdis2" style="background:linear-gradient(to right top,#0B5382,#0592D5);">
							<div class="article-img">
									<a href="#">
			<img class="" src="{{asset('/')}}public/front/coronavirus.jpg" alt="" height="100px" width="100%" style="padding: 3px;">
									</a>
								</div>


							<!-- owl carousel 3 -->

								<!-- ARTICLE -->
								<article class="article">
									<div style="padding-left: 10px;">



        <marquee behavior="" direction="" ><div style="display:flex;color:white;"  id="districts" class="bg-dark text-light"></div></marquee>
    </div>
								</article>
								<!-- /ARTICLE -->

						</div>

					<div class="widget" id="mdis2" style="">


						@foreach($latestheadline9s as $national)
							@if($loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline9s[2]->title))
							<div class="panel panel-default">

            <div class="panel-body">
                   <div class="row">
                   	<div class="col-md-5">
                   		<a href="{{route('singlePost',['id'=>$national->id])}}"><img src="{{asset('/')}}{{$national->cover_image}}" class="img-responsive" alt="Cinque Terre"></a>
                   	</div>
                   	<div class="col-md-7">
                   		<span class="" style="font-size:13px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</span>
						<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 16px;">{{ $national->title}}</a></p>
                   	</div>
                   </div>
              </div>
             </div>

				@elseif(!$loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline9s[$loop->index-1]->title))
				<div class="panel panel-default">

            <div class="panel-body">
                   <div class="row">
                   	<div class="col-md-5">
                   		<a href="{{route('singlePost',['id'=>$national->id])}}"><img src="{{asset('/')}}{{$national->cover_image}}" class="img-responsive" alt="Cinque Terre"></a>
                   	</div>
                   	<div class="col-md-7">
                   		<span class="" style="font-size:13px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</span>
						<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 16px;">{{ $national->title}}</a></p>
                   	</div>
                   </div>
              </div>
             </div>
				@endif
							@endforeach
						</div>
						<!-- /article widget -->
				</div>
				<div class="col-sm-6 col-md-6" >
					<!--main news-->
					<div class="row">
					<div class="col-sm-12 col-md-12" style="height:350px;">
					<div id="Carousel" class="carousel slide">

                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>

                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner" style="">

                <div class="item active">
                	<div class="row">
                		@foreach($mspecialsylhets as $national)
                	  <div class="col-md-12">	<article class="article thumb-article">
								<div class="article-img">
								<a href="{{route('singlePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('post',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach

										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
									<p class="" style="font-size:13px;font-weight:500;padding-left:5px;color:#FE0203;">{{$national->op_title}}</p>
				<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;color:white;">{{ $national->title}}</a></p>

								</div>
							</article>
						</div>
                	@endforeach
                	 </div>
                </div><!--.item-->

                <div class="item">
                	<div class="row">
                			@foreach($mspecialsylhets1 as $national)
                	  <div class="col-md-12">	<article class="article thumb-article">
								<div class="article-img">
								<a href="{{route('singlePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('post',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach

										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
								<p class="" style="font-size:13px;font-weight:500;padding-left:5px;color:#FE0203;">{{$national->op_title}}</p>
				<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;color:white;">{{ $national->title}}</a></p>

								</div>
							</article>
						</div>
                	@endforeach

                	</div><!--.row-->
                </div><!--.item-->


                <div class="item">
                	<div class="row">
                			@foreach($mspecialsylhets2 as $national)
                	  <div class="col-md-12">	<article class="article thumb-article">
								<div class="article-img">
								<a href="{{route('singlePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('post',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach

										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
								<p class="" style="font-size:13px;font-weight:500;padding-left:5px;color:#FE0203;">{{$national->op_title}}</p>
				<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;color:white;">{{ $national->title}}</a></p>

								</div>
							</article>
						</div>
                	@endforeach

                	</div><!--.row-->
                </div><!--.item-->



                </div><!--.carousel-inner-->
                  <!--<a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>-->
                </div><!--.Carousel-->
                @foreach($latestheadline9s as $national)
							@if($loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline9s[2]->title))
<br><b>
								<div style="float:left;overfolw:hidden;width: 160px;height: 175px;" >
									<!-- ARTICLE -->
									<article class="article"  style="" id="mdis1">
										@if($national->category_id == 35)
											<div class="article-img"  style="width:150px;padding-left:15px;">
												<video controls style="height: 150px;width: 200px;">
													<source src="{{url('video-admin/'.$headline->cover_image)}}" type="video/mp4">
													Your browser does not support the audio element.
												</video>
											</div>
										@else
											<div class="article-img"  style="width:150px;padding-left:26px;">
												<a href="{{route('singlePost',['id'=>$national->id])}}">
													<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
												</a>

											</div>
										@endif

										<div class="article-body">
											<!--<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ Str::limit($national->op_title,'20') }}</p>-->
											<p class="" style="padding-left:15px;font-size: 13px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title }}.</a></p>

										</div>
									</article>
									<!-- /ARTICLE -->
								</div>
							@elseif(!$loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline9s[$loop->index-1]->title))

								<div style="float:left;overfolw:hidden;width: 160px;height: 175px;" >
									<!-- ARTICLE -->
									<article class="article" style="" id="mdis1">
										@if($national->category_id == 19)
											<div class="article-img"  style="width:150px;padding-left:15px;">
												<video controls style="height: 150px;width: 200px;">
													<source src="{{url('video-admin/'.$headline->cover_image)}}" type="video/mp4">
													Your browser does not support the audio element.
												</video>
											</div>
										@else
											<div class="article-img"  style="width:150px;padding-left:26px;">
												<a href="{{route('singlePost',['id'=>$national->id])}}">
													<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
												</a>

											</div>
										@endif

										<div class="article-body">
											<!--<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ Str::limit($national->op_title,'20') }}</p>-->
											<p class="" style="padding-left:15px;font-size: 13px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}.</a></p>

										</div>
									</article>
									<!-- /ARTICLE -->
								</div>
							@endif

						@endforeach
					</div>
				</div>
					<!--main news-->
					<!--6 news section desktop-->
					<div class="row" style="margin-top:26px;">
						@foreach($latestheadline2s as $national)
						<!-- Column 3 -->
							@if($loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline2s[2]->title))
						<div class="" style="float:left;overflow:hidden;width:300px;height:310px;padding:10px" id="dis">
							<!-- ARTICLE -->
								<article class="article"  style="background-color:white;height:270px;">

										<div class="article-img">
											<a href="{{route('singlePost',['id'=>$national->id])}}">
												<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
											</a>



									<div class="article-body">

										<p class="text-center " style="font-size:12px;padding-left:5px;color:#FE0203;font-weight: 500;margin-top:10px">{{ $national->op_title}}</p>

										<p class="" style="font-size: 15px;color:white;padding: 6px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{$national->title}}.</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
						</div>
						@elseif(!$loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline2s[$loop->index-1]->title))
						<div class="" style="float:left;overflow:hidden;width:300px;height:310px;padding:10px" id="dis">
							<!-- ARTICLE -->
								<article class="article"  style="background-color:white;height:270px;">

										<div class="article-img">
											<a href="{{route('singlePost',['id'=>$national->id])}}">
												<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
											</a>



									<div class="article-body">

										<p class="text-center mt-2" style="font-size:12px;padding-left:5px;color:#FE0203;font-weight: 500;margin-top:10px">{{ $national->op_title}}</p>

										<p class="" style="font-size: 15px;color:white;padding: 6px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{$national->title}}.</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
						</div>
						@endif
						@endforeach
					</div>
					<!--6 news section desktop-->
				</div>
				<div class="col-sm-3 col-md-3">
									<!-- article widget -->
		<div class="widget" id="mdis3" style="background: white;width:302px;">
							<br>
							<!-- tab nav -->
							<ul class="tab-nav text-center" >
						<li class="active" ><a data-toggle="tab" href="#tab1"  id="la"><b>
                            @if(session()->get('locale') == 'sp')
                            Latest:
                                                    @else

                                                    সর্বশেষ

                                                    @endif




                        </b></a></li>
					<li ><a data-toggle="tab" href="#tab2" id="fa"><b>

                        @if(session()->get('locale') == 'sp')
                            Famous
                                                    @else

                                                    জনপ্রিয়

                                                    @endif




                    </b></a></li>

							</ul><br>
							<!-- /tab nav -->
							<div class="tab-content mt-3" style="height: 369px;width: 303px;overflow: hidden;overflow-y: scroll;">
							<!-- জাতীয় -->
							<div id="tab1" class="tab-pane fade in active">
								@foreach($latestheadline3s as $national)
								<!-- ARTICLE -->

										<article class="article widget-article" style="margin-bottom:0px;">
											<div class="article-img">
												<a href="{{route('singlePost',['id'=>$national->id])}}">
													<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
												<h5 class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-weight:500px;font-size:15px;">{{ $national->title }}</a></h5>

											</div>
										</article>
										<hr>


							<!-- /ARTICLE -->

							@endforeach
						   </div>
						   <div id="tab2" class="tab-pane fade ">
						   	@foreach($famousposts as $national)
							<!-- ARTICLE -->

									<article class="article widget-article" style="margin-bottom:0px;">
										<div class="article-img">
											<a href="{{route('singlePost',['id'=>$national->id])}}">
												<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
											</a>
										</div>
										<div class="article-body">
											<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
											<h5 class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-weight:500px;font-size:15px;">{{ $national->title }}</a></h5>

										</div>
									</article>
									<hr>


							<!-- /ARTICLE -->

							@endforeach
						   </div>
						</div>

						</div>
						<!-- /article widget -->
						@foreach($homead as $ad)
						<div class="widget center-block hidden-xs" style="margin-top: 15px;">
							<img class="center-block" src="{{asset('/')}}{{$ad->image}}" alt="">
						</div>
                        @endforeach
				</div>
			</div>
		</div>
	</div>
		<!--new section jagoron-->

		<!-- SECTION -->
		<div class="section">

			<div class="container">
								<div class="row">
					<!--left-side-->
					<div class="col-sm-8 col-md-8">

					<!--sylhet-->
						<div class="row">
							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
							<a href="{{route('post',['id'=>4])}}"><h2 class="title">আন্তর্জাতিক </h2></a>
								</div>
							</div>
							<!-- /section title -->
							@foreach($inters as $national)
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6" >
								<!-- ARTICLE -->
								<article class="article" style="background-color:#EFF3F4;">
									<div class="article-img">
									<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body" style="padding:5px;">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
	<p><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:25px;font-weight: 500;"><b>{{ $national->title }}</b></a><p>

										<p style="font-weight: 500;">{!!  substr(strip_tags($national->paragraph), 0, 1400) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							@endforeach
							<!-- /Column 2 -->
							<div class="col-md-6 col-sm-6">

								<!-- row -->
						<div class="row">



							@foreach($saminters as $national)
							<!-- Column 3 -->
							<div class="col-md-12 col-sm-12">
								<div class="panel panel-default" style="background-color:#EFF3F4;">

            <div class="panel-body" id="dis">
                   <div class="row">
                   	<div class="col-md-5">
                   		<a href="{{route('singlePost',['id'=>$national->id])}}"><img src="{{asset('/')}}{{$national->cover_image}}" class="" style="height: 60px;width:120px;" alt="Cinque Terre"></a>
                   	</div>
                   	<div class="col-md-7">
                   		<span class="" style="font-size:13px;color:#FE0203;">{{ $national->op_title }}</span>
						<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 18px;">{{ $national->title}}</a></p>
                   	</div>
                   </div>
              </div>
              <div class="panel-body" id="mdis1">
                   <div class="row">
                   	<div class="" style="float:left;overflow:hidden;width:106px">
                   		<a href="{{route('singlePost',['id'=>$national->id])}}"><img src="{{asset('/')}}{{$national->cover_image}}" class="" style="height: 60px;width:100px;" alt="Cinque Terre"></a>
                   	</div>
                   	<div class="" style="float:left;overflow:hidden;width:190px">
                   		<span class="" style="font-size:13px;color:#FE0203;">{{ $national->op_title }}</span>
						<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 15px;">{{ $national->title}}</a></p>
                   	</div>
                   </div>
              </div>
             </div>
							</div>
							<!-- /Column 3 -->
							@endforeach
						</div>
						<!-- /row -->
							</div>
							<!-- /Column 2 -->

						</div>
						<!-- /row -->

						<!-- row -->

						<!-- /row -->
						<!--sylhet section-->
						<!-- start sylhet zila section-->

					</div>


					<!--left-side-->
					<!--right-side-->
					<div class="col-sm-4 col-md-4">


					<!-- social widget -->
						<div class="widget social-widget">
							<div class="widget-title">
								<h2 class="title" style="color:#9B0E0E">Follow Us</h2>
							</div>
							<div style="">
							<div class="fb-page"  data-href="https://www.facebook.com/DailyBanglaTimesCom/" data-tabs="timeline" data-width="400" data-height="260" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://web.facebook.com/DailyJaintaBarta/" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/DailyJaintaBarta/">Daily Jainta Barta</a></blockquote></div>
						</div>
						</div>
						<!-- /social widget -->
						<!-- article widget -->
						<div class="widget" style="background-color:#EFF3F4;">
							<!-- section title -->
								<div class="section-title">
							<a href="{{route('post',['id'=>13])}}">		<h2 class="title">
                             মুক্তমত</h2></a>
								</div>
								<!-- /section title -->


						@foreach($nagos as $national)

							<!-- ARTICLE -->
							<article class="article widget-article" style="margin-bottom:0px;"  >



									<div class="" style="float: left;overflow: hidden">
										<div class="article-img">
									<a href="{{route('singlePost',['id'=>$national->id])}}">
										<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
									</a>
								</div>
								</div>
								<div class="" style="float: left;overflow: hidden">
										<div class="article-body" style="padding-left: 10px;">
											<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<h5 class="article-title3" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="">{{ $national->title }}</a></h5>

								</div>
									</div>

						</article>
							<!-- /ARTICLE -->
							<hr style="color:white;">
							@endforeach


						</div>
						<!-- /article widget -->






					</div>
				</div>
					<!--right-side-->
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->


		<!-- SECTION -->
		<div class="section" style="background-color:#EFF3F4;">
			<!-- CONTAINER -->
			<div class="container">
			<!-- new international section-->
				<div class="row" >
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>3])}}">
						<h2 class="title">
জাতীয়
 </h2>
					</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($mainnats as $national)
								<!-- ARTICLE -->
								<article class="article" >
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>

										<p style="padding:10px;font-weight:500;">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach

							@foreach($samnats as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
				<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title }}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->

								@endforeach

								</div>
							</div>
							<!-- /Column 1 -->

							<!-- Column 2 -->
							<div class="col-md-4 col-sm-4" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>47])}}"><h2 class="title">রাজনীতি
</h2></a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($habi as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">

										    {!!  substr(strip_tags($national->op_title), 0, 20) !!}
										    </p>
										<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samplehabi as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								</div>
							</div>
							<!-- /Column 2 -->

							<!-- Column 3 -->
							<div class="col-md-4 col-sm-4" >
								<!-- section title -->
								<div class="section-title">
								<a href="{{route('post',['id'=>14])}}">
									<h2 class="title">অর্থনীতি
</h2>
								</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($mol as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
							<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samplemol as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								</div>
							</div>
							<!-- /Column 3 -->
						</div>
						<!-- /row -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->

<!-- sports+life style section section -->
	<!-- SECTION -->
		<div class="section" >
		<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12 col-sm-12">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>6])}}">
							<h2 class="title">খেলা </h2>
						</a>
						</div>


				<div class="row">
					<div class="col-md-4">

						@foreach($sports as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
							<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samsports as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach

					</div>
					<div class="col-md-4">

						@foreach($samsports1 as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
							<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samsports2 as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach

					</div>
					<div class="col-md-4">
						@foreach($samsports3 as $national)
						<!-- ARTICLE -->
							<article class="article widget-article" style="margin-bottom:0px;" >


									<div class="" style="float: left;overflow: hidden">
										<div class="article-body" style="padding-left: 10px;">
											<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p class="article-title3" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 15px;">{{ $national->title }}</a></p>

								</div>
									</div>
									<div class="" style="float: left;overflow: hidden">
										<div class="article-img">
									<a href="{{route('singlePost',['id'=>$national->id])}}">
										<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
									</a>
								</div>
								</div>

						</article>
						<hr>
						@endforeach	<!-- /ARTICLE -->
					</div>

				</div>



				</div>

				</div>

			</div>
   </div>

	<!--section-->
<!-- end extra section -->
<!--new section-main-->
<!-- SECTION -->
		<div class="section" style="background-color:#EFF3F4;">
			<!-- CONTAINER -->
			<div class="container">
			<!-- new international section-->
				<div class="row" >
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>21])}}">
						<h2 class="title">আইন-আদালত </h2>
					</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($su as $national)
								<!-- ARTICLE -->
								<article class="article" >
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach

							@foreach($samplesu as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
				<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title }}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->

								@endforeach

								</div>
							</div>
							<!-- /Column 1 -->

							<!-- Column 2 -->
							<div class="col-md-4 col-sm-4" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>17])}}"><h2 class="title">এক্সক্লুসিভ
</h2></a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($specialsylhets as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($specialsylhets1 as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								</div>
							</div>
							<!-- /Column 2 -->

							<!-- Column 3 -->
							<div class="col-md-4 col-sm-4" >
								<!-- section title -->
								<div class="section-title">
								<a href="{{route('post',['id'=>8])}}">
									<h2 class="title">স্বাস্থ্য</h2>
								</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($arts as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
							<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samarts as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								</div>
							</div>
							<!-- /Column 3 -->
						</div>
						<!-- /row -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
<!--new section-main-->
<!--add section-->
<div class="section" >
		<div class="container">
		<div class="row">
					<!-- Main Column -->
		<div class="col-md-12 col-sm-12">
			<div class="visible-lg visible-md">
			<img class="center-block" src="{{ asset('/') }}public/front/img/ad-3.jpg" alt="">
		</div>
		</div>
		</div>
	</div>
</div>
<!--ad section-->
<!-- start extra section -->
	<!-- SECTION -->
		<div class="section" style="background-color:#EFF3F4;">
		<div class="container">
				<!-- ROW -->
				<div class="row">

						<div class="col-md-12 col-sm-12">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>7])}}">
							<h2 class="title">বিনোদন </h2>
						</a>
						</div>
						<!-- /section title -->
						<div class="row">
						<!-- Column 1 -->
							<div class="col-md-5 col-sm-5">
								@foreach($ens as $national)
								<!-- ARTICLE -->
							<article class="article" style="background: white;">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>

									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
							</div>
							<!-- /Column 1 -->

							<!-- /Column 2 -->
							<div class="col-md-7 col-sm-7">
								<!-- row -->
						<div class="row">
							@foreach($samens as $national)
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6" style="margin-top: 10px;">
								<!-- ARTICLE -->
								<div class="" style="position:relative;width:310px;">
								<a href="{{route('singlePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt="" class="img-thumbnail" style=""></a>

				<div class="text-block" style=" position: absolute; bottom: 5px;right: 6px; background-color: black;color: white;padding: 10px;opacity: .6;width: 298px;">

    <p class=""><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 15px;color:white;">{{ $national->title }}</a></p>
  </div>
							</div>

						</div>
							<!-- /Column 1 -->
							@endforeach
					</div>
						<!-- /row -->

							</div>
							</div>
							<div class="row">
								@foreach($samens1 as $national)
							<div class="col-md-3" >
								<div class="" style="position:relative;width:310px;padding: 20px;">
								<a href="{{route('singlePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt="" class="img-thumbnail" ></a>

				<div class="text-block" style=" position: absolute;
    bottom: 24px;
    right: 27px;
    background-color: black;
    color: white;
    padding: 10px;
    opacity: .6;
    width: 256px;">

    <p class=""><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 15px;color:white;">{{ $national->title }}</a></p>
  </div>
							</div>
							</div>
						@endforeach
							</div>

						</div>
				</div>
</div>
   </div>

	<!--section-->
<!-- sports+life style section section -->

<div class="section" style="background-color:white;height: 50px;">
		<div class="container">
				<!-- ROW -->
				<div class="row">
		</div>
		</div>
		</div>
<!-- SECTION -->
		<div class="section" style="background-color:#EFF3F4;">
			<!-- CONTAINER -->
			<div class="container">
			<!-- new international section-->
				<div class="row" >
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>15])}}">
						<h2 class="title">শিল্প ও সাহিত্য </h2>
					</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($sings as $national)
								<!-- ARTICLE -->
								<article class="article" >
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach

							@foreach($samsings as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
				<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title }}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->

								@endforeach

								</div>
							</div>
							<!-- /Column 1 -->

							<!-- Column 2 -->
							<div class="col-md-4 col-sm-4" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>18])}}"><h2 class="title">ফিচার</h2></a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($muktos as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($sammuktos as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								</div>
							</div>
							<!-- /Column 2 -->

							<!-- Column 3 -->
							<div class="col-md-4 col-sm-4" >
								<!-- section title -->
								<div class="section-title">
								<a href="{{route('post',['id'=>19])}}">
									<h2 class="title">নারী</h2>
								</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($vrs as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
							<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samvrs as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p class="headfont"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								</div>
							</div>
							<!-- /Column 3 -->
						</div>
						<!-- /row -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
<!-- more extra section -->
<div class="section" style="">
		<div class="container">
				<!-- ROW -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
									<a href="{{route('post',['id'=>12])}}"><h2 class="title">লাইফষ্টাইল </h2></a>
								</div>
							</div>
							<!-- /section title -->
							@foreach($allcountries as $national)
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article" style="background-color:#EFF3F4;border-bottom: 1px solid #B30F0F;">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->

						@endforeach

						</div>
						<div class="row" >
							@foreach($allcountries1 as $national)
							<!-- Column 1 -->
							<div class="col-md-3 col-sm-3">
								<!-- ARTICLE -->
								<article class="article" style="background-color:#EFF3F4;border-bottom: 1px solid #B30F0F;">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->

						@endforeach
						</div>
					</div>
					<div class="col-md-4"></div>
		</div>
		</div>
		</div>
	<!-- SECTION -->
	<div class="section" style="background-color:#EFF3F4;">
			<!-- CONTAINER -->
			<div class="container">
			<!-- new international section-->
				<div class="row" >
							<!-- Column 1 -->
							<div class="col-md-3 col-sm-3" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>22])}}">
						<h2 class="title">শেয়ারবাজার</h2>
					</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($cams as $national)
								<!-- ARTICLE -->
								<article class="article" >
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach

							@foreach($samcams as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
				<p style="font-size: 14px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title }}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->

								@endforeach

								</div>
							</div>
							<!-- /Column 1 -->

							<!-- Column 2 -->
							<div class="col-md-3 col-sm-3" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>23])}}"><h2 class="title">জবস</h2></a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($lans as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samlans as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!} </p>
					<p style="font-size: 14px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								</div>
							</div>
							<!-- /Column 2 -->

							<!-- Column 3 -->
							<div class="col-md-3 col-sm-3" >
								<!-- section title -->
								<div class="section-title">
								<a href="{{route('post',['id'=>41])}}">
									<h2 class="title">কৃষি</h2>
								</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($lan1s as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
								<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samlan1s as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p style="font-size: 14px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								</div>
							</div>
							<!-- /Column 3 -->
							<div class="col-md-3 col-sm-3" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>16])}}">
						<h2 class="title">বিবিধ</h2>
					</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($lan2s as $national)
								<!-- ARTICLE -->
								<article class="article" >
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach

							@foreach($samlan2s as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
				<p class=""><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 14px;">{{ $national->title }}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->

								@endforeach

								</div>
							</div>
						</div>
						<!-- /row -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		<div class="section" style="background-color:white;height: 50px;">
		<div class="container">
				<!-- ROW -->
				<div class="row">
		</div>
		</div>
		</div>
		<div class="section" style="background-color:#EFF3F4;">
		<div class="container">
			<div class="row">
			<div class="col-md-8">
				<div class="section-title">
							<a href="{{route('post',['id'=>46])}}">
							<h2 class="title">সারা দেশ</h2>
						</a>
						</div>
						<div class="row">
							<div class="col-md-6">
								@foreach($lifes as $national)
								<!-- ARTICLE -->
							<article class="article" style="background: white;">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 280) !!}</p>

									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
							</div>
							<div class="col-md-6">
								<div class="row" style="margin-right:10px;">
									@foreach($samlifes as $national)
							<!-- Column 3 -->
							<div class="col-md-6 col-sm-6">

								<!-- ARTICLE -->
							<article class="article" style="background: white;">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
				<p class="text-center"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 12px;">{{ $national->title}}</a></p>


									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 3 -->
							@endforeach
								</div>
							</div>
						</div>

			</div>
			<div class="col-md-4">
				<div class="section-title">
							<a href="{{route('post',['id'=>25])}}">
							<h2 class="title">এক ক্লিকে বিভাগের সব খবর</h2>
						</a>
						</div>

						<div class="single-block" style="background: #fff;
    position: relative;
    padding: 14px;
    margin-top: 30px;">
          <div class="row jagaran-row">
            <div class="col-sm-12 jagaran-padding">

                <div class="row form-group jagaran-row">
                  <div class="col-sm-6 jagaran-padding">
                    <label for="division" class="" style="padding-left:50px;">বিভাগ</label>
                    <select class="form-control division-style" name="category_id" id="prod_cat_id">
                      <option value="">--বিভাগ--</option>
                       @foreach($search_categories as $category)
        <option selected value="{{ $category->id}}">{{ $category->name }}</option>
        @endforeach
                    </select>
                  </div>
                <label for="division" class="" style="padding-left:50px;">জেলা</label>
                  <form method="GET" action="{{route('division_search') }}">
                  <div class="col-sm-6 jagaran-padding">
                     <div class="form-line" id="subcategory">
                                   <select class="form-control productname" name="subcategory_id"  value="{{ isset($subcategory_id) ? $subcategory_id : '' }} >

                            <option value="0" disabled="true" selected="true">--জেলা--</option>
                        </select>
                                </div>
                  </div>
                </div>
                <div class="row jagaran-row">
                  <div class="col-sm-6 m-auto jagaran-padding">
                    <button type="submit" class="btn btn-date-picker btn-block"> অনুসন্ধান করুন </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

			</div>
		</div>
		</div>
		</div>
		<!-- /SECTION -->
		<div class="section" style="background-color:white;height: 50px;">
		<div class="container">
				<!-- ROW -->
				<div class="row">
		</div>
		</div>
		</div>
			<!-- SECTION -->
	<div class="section" style="background-color:#EFF3F4;">
			<!-- CONTAINER -->
			<div class="container">
			<!-- new international section-->
				<div class="row" >
							<!-- Column 1 -->
							<div class="col-md-3 col-sm-3" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>20])}}">
						<h2 class="title">সোশ্যাল মিডিয়া </h2>
					</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($fors as $national)
								<!-- ARTICLE -->
								<article class="article" >
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach

							@foreach($samfors as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
				<p style="font-size: 14px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title }}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->

								@endforeach

								</div>
							</div>
							<!-- /Column 1 -->

							<!-- Column 2 -->
							<div class="col-md-3 col-sm-3" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>48])}}"><h2 class="title">ব্যবসা বানিজ্য</h2></a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($ph1s as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($ph2s as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p style="font-size: 14px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								</div>
							</div>
							<!-- /Column 2 -->

							<!-- Column 3 -->
							<div class="col-md-3 col-sm-3" >
								<!-- section title -->
								<div class="section-title">
								<a href="{{route('post',['id'=>50])}}">
									<h2 class="title">ধর্ম ও জিবন</h2>
								</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($drs as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
							<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samdrs as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
						<p style="font-size: 14px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ $national->title}}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								</div>
							</div>
							<!-- /Column 3 -->
							<div class="col-md-3 col-sm-3" >
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>11])}}">
						<h2 class="title">বিজ্ঞান ও প্রযুক্তি</h2>
					</a>
								</div>
								<!-- /section title -->
								<div style="background-color:white;">
								@foreach($scs as $national)
								<!-- ARTICLE -->
								<article class="article" >
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700">{{ $national->title}}</a></p>


										<p style="padding:10px;font-weight:500">{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach

							@foreach($samscs as $national)
							<hr>
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{ {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
				<p class=""><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 14px;">{{ $national->title }}</a></p>

									</div>
								</article>
								<!-- /ARTICLE -->

								@endforeach

								</div>
							</div>
						</div>
						<!-- /row -->
			</div>
			<!-- /CONTAINER -->
		</div>

		<div class="section" >
		<div class="container">
			<div class="section-title">
							<a href="{{route('post',['id'=>51])}}">
							<h2 class="title">
ফটো গ্যালারি</h2>
						</a>
						</div>
				<!-- ROW -->
				<div class="row">
					<div class="col-md-7 col-sm-7">
			        <!-- section title -->

						<div id="Carousel" class="carousel slide mw">

                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>

                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner" style="">

                <div class="item active">
                	<div class="row">
                		@foreach($mspecialsylhets11 as $national)
                	  <div class="col-md-12">	<article class="article thumb-article">
								<div class="article-img">
								<a href="{{route('singlePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('post',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach

										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
									<!--<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ Str::limit($national->op_title,'20') }}</p>-->
				<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:25px;color:white;">{{ $national->title}}</a></p>

								</div>
							</article>
						</div>
                	@endforeach
                	 </div>
                </div><!--.item-->

                <div class="item">
                	<div class="row">
                			@foreach($mspecialsylhets12 as $national)
                	  <div class="col-md-12">	<article class="article thumb-article">
								<div class="article-img">
								<a href="{{route('singlePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('post',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach

										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
								<!--<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>-->
				<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:25px;color:white;">{{ $national->title}}</a></p>

								</div>
							</article>
						</div>
                	@endforeach

                	</div><!--.row-->
                </div><!--.item-->


                <div class="item">
                	<div class="row">
                			@foreach($mspecialsylhets13 as $national)
                	  <div class="col-md-12">	<article class="article thumb-article">
								<div class="article-img">
								<a href="{{route('singlePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('post',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach

										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
								<!--<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>-->
				<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:25px;color:white;">{{ $national->title}}</a></p>

								</div>
							</article>
						</div>
                	@endforeach

                	</div><!--.row-->
                </div><!--.item-->



                </div><!--.carousel-inner-->
                  <!--<a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>-->
                </div><!--.Carousel-->
				</div>
				<div class="col-md-5">
					<div class="row" style="margin-right:10px;">
									@foreach($ph3s as $national)
							<!-- Column 3 -->
							<div class="col-md-6 col-sm-6">

								<!-- ARTICLE -->
							<article class="article" style="background: white;">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;"> {!!  substr(strip_tags($national->op_title), 0, 20) !!}</p>
				<p class="text-center"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size: 12px;">{{ $national->title}}</a></p>


									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 3 -->
							@endforeach
								</div>
				</div>
			<div>
		</div>
	</div>
</div>
</div>
<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->

						<div class="section-title">
						<a href="{{route('post',['id'=>52])}}"><h2 class="title">ভিডিও গ্যালারি</h2></a>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
						<!-- /section title -->

						<!-- owl carousel 2 -->
						<div id="owl-carousel-2" class="owl-carousel owl-theme">
							@foreach($nagos1 as $national)
							<!-- ARTICLE -->
							<article class="article thumb-article" style="">

								<iframe width="400" height="200" src="{{$national->cover_image}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('post',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach

										<li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
					<p class="" style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:17px;font-weight:700;color:white;">{{ $national->title}}</a></p>




								</div>
							</article>
							<!-- /ARTICLE -->
							@endforeach

						</div>
						<!-- /owl carousel 2 -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->








		<!-- FOOTER -->
		@include('front.include.footer')

		<!-- /FOOTER -->



		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->

		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->
			<script type="text/javascript">

    $(document).ready(function(){

        $('#prod_cat_id').on('change',function(){
            //console.log("hmm its change");

            var category_id=$(this).val();
             //console.log(cat_id);
             var div=$(this).parent();


             var op=`<select class="form-control productname"  name="subcategory_id" >`;

             $.ajax({
                type:'get',
                url:'{!!URL::to('findProductName')!!}',
                data:{'id':category_id},
               success:function(data){

                  //console.log('success');

                    //console.log(data);

                    //console.log(data.length);

                   // op+='<option value="0" selected disabled>choose sub-category</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].sub_name+'">'+data[i].sub_name+'</option>';
                   }
                  // console.log(op)

                  op+= `</select>`

                 $('#subcategory').html(op);
                  // div.find('#subcategory').append(op);


               },
               error:function(){

                }

             });

        });
    });

</script>
<script src="https://cdn.by.wonderpush.com/sdk/1.1/wonderpush-loader.min.js" async></script>
<script>
window.WonderPush = window.WonderPush || [];
WonderPush.push(["init", {
    webKey: "dabe8ab23c04efad297305b96eb9f55b4fa54e5b586be8723121f553e19b9718",
}]);
</script>
		<!-- jQuery Plugins -->
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=2323306957775742&autoLogAppEvents=1"></script>
 <script type="text/javascript">
$(document).ready(function () {
   //Disable cut copy paste
    /*$('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });


    $("body").on("contextmenu",function(e){
        return false;
    });*/

});
</script>
<script type="text/javascript">
	function pop() {
    var popup = document.getElementById('myPopup');
    popup.classList.toggle('show');
}
</script>

		<script src="{{asset('/')}}public/front/js/bootstrap.min.js"></script>
		<script src="{{asset('/')}}public/front/js/owl.carousel.min.js"></script>
		<script src="{{asset('/')}}public/front/js/main.js"></script>
		<script src="{{asset('/')}}public/front/js/bootnavbar.js"></script>
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script type="text/javascript">

            var url = "{{ route('changeLang') }}";

            $(".changeLang").change(function(){
                window.location.href = url + "?lang="+ $(this).val();
            });

        </script>
	</body>
</html>
