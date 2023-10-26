@extends('user.master.master')
@section('title')
JaintaBarta.com – Daily Jainta Barta is one of the most reliable and popular local daily newspaper of Sylhet division. We provide latest reliable local news about various categories for 24/7 days.
@stop
@section('body')
<!-- Owl Carousel 1 -->
		<!--<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">

			@foreach($latestheadlines as $headline)
			
			<article class="article thumb-article">
				@if($headline->category_id == 19)
						<video controls style="height: 445px;width: 847px;">
 <source src="{{url('video-admin/'.$headline->cover_image)}}" type="video/mp4">
Your browser does not support the audio element.
</video>
				@else
				<div class="article-img">
					<img src="{{asset('/')}}{{$headline->cover_image}}" alt="">
				</div>
				@endif
				
				<div class="article-body">
					<ul class="article-info">
						@foreach($newcats as $newcat)
						@if($headline->category_id == $newcat->id)
		<li class="article-category"><a href="{{route('post',['id'=>$newcat->id])}}">{{ $newcat->name }}</a></li>
						@endif
						@endforeach
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
	<h2 class="article-title"><a href="{{route('singlePost',['id'=>$headline->category_id])}}">
		
		{{ str_limit($headline->title,'40') }}
	</a></h2>
				</div>
			</article>
			
			@endforeach
			
			
			
		</div>-->
		<!-- /Owl Carousel 1 -->

		
		
		<!-- SECTION -->
		<div class="section">
			
			<div class="container">
								<div class="row">
					<!--left-side-->
					<div class="col-sm-8 col-md-8">
						<div class="row">
						<!--left-side-->
					<div class="col-sm-8 col-md-8">

						@foreach($latestheadlines as $headline)
						<!-- ARTICLE -->
								<article class="article bg-dark" style="background-color:#607D8B;">

									<div class="article-img">
					<a href="{{route('singlePost',['id'=>$headline->id])}}">
					<img src="{{asset('/')}}{{$headline->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($headline->op_title,'20') }}</p>
				<h3 class="article-title" ><a href="{{route('singlePost',['id'=>$headline->id])}}" style="color:white">{{ str_limit($headline->title,'45') }}</a></h3>

						<p style="color:white;padding: 5px;">{!!  substr(strip_tags($headline->paragraph), 0,700) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								
                                <div class="row">
                                @foreach($latestheadline1s as $headline)
										@if($loop->first && str_replace(' ', '', $headline->title) !== str_replace(' ', '', $latestheadline1s[2]->title))
											<div class="col-sm-6 col-md-12"  id="dis">
												<!-- ARTICLE -->
												<article class="article widget-article" style="margin-bottom:0px; ">
													<div class="article-img" id="mm" style="">
														<a href="{{route('singlePost',['id'=>$headline->id])}}">
															<img src="{{asset('/')}}{{$headline->cover_image}}" alt="" class="rounded" >
														</a>
													</div>
													<div class="article-body">
													<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($headline->op_title,'20') }}</p>
														<h4 class="article-title"><a href="{{route('singlePost',['id'=>$headline->id])}}">{{ str_limit($headline->title,'15') }}</a></h4>
														<ul class="article-meta1" style="color:black;" id="dis">
															<li>{!!  substr(strip_tags($headline->paragraph), 0, 210) !!}</li>

														</ul>

													</div>
												</article>
												<!-- /ARTICLE -->
											</div>
										@elseif(!$loop->first && str_replace(' ', '', $headline->title) !== str_replace(' ', '', $latestheadline1s[$loop->index-1]->title))
											<div class="col-sm-6 col-md-12"  id="dis">
												<!-- ARTICLE -->
												<article class="article widget-article" style="margin-bottom:0px; ">
													<div class="article-img" id="mm" style="">
														<a href="{{route('singlePost',['id'=>$headline->id])}}">
															<img src="{{asset('/')}}{{$headline->cover_image}}" alt="" class="rounded" >
														</a>
													</div>
													<div class="article-body">
														<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($headline->op_title,'20') }}</p>
														<h4 class="article-title"><a href="{{route('singlePost',['id'=>$headline->id])}}">{{ str_limit($headline->title,'15') }}</a></h4>
														<ul class="article-meta1" style="color:black;" id="dis">
															<li>{!!  substr(strip_tags($headline->paragraph), 0, 210) !!}</li>

														</ul>

													</div>
												</article>
												<!-- /ARTICLE -->
											</div>
										@endif

                                @endforeach
                                </div>
								
								
					</div>
                     <!--left-side--> 

                     <!--right-side-->
					<div class="col-sm-4 col-md-4">
						<!--mobile-->
                     	
						<!-- Column 3 -->

						@foreach($latestheadline9s as $national)
							@if($loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline9s[2]->title))

								<div style="float: left;overfolw:hidden;width:150px;">
									<!-- ARTICLE -->
									<article class="article" id="mdis1" style="">
										@if($national->category_id == 19)
											<div class="article-img"  style="width:150px;padding-left:15px;">
												<video controls style="height: 150px;width: 200px;">
													<source src="{{url('video-admin/'.$headline->cover_image)}}" type="video/mp4">
													Your browser does not support the audio element.
												</video>
											</div>
										@else
											<div class="article-img"  style="width:150px;padding-left:15px;">
												<a href="{{route('singlePost',['id'=>$national->id])}}">
													<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
												</a>

											</div>
										@endif

										<div class="article-body">
											<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
											<p class="" style="padding-left:15px;font-size: 13px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}.</a></p>

										</div>
									</article>
									<!-- /ARTICLE -->
								</div>
							@elseif(!$loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline9s[$loop->index-1]->title))

								<div style="float: left;overfolw:hidden;width:150px;">
									<!-- ARTICLE -->
									<article class="article" id="mdis1" style="">
										@if($national->category_id == 19)
											<div class="article-img"  style="width:150px;padding-left:15px;">
												<video controls style="height: 150px;width: 200px;">
													<source src="{{url('video-admin/'.$headline->cover_image)}}" type="video/mp4">
													Your browser does not support the audio element.
												</video>
											</div>
										@else
											<div class="article-img"  style="width:150px;padding-left:15px;">
												<a href="{{route('singlePost',['id'=>$national->id])}}">
													<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
												</a>

											</div>
										@endif

										<div class="article-body">
											<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
											<p class="" style="padding-left:15px;font-size: 13px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}.</a></p>

										</div>
									</article>
									<!-- /ARTICLE -->
								</div>
							@endif

						@endforeach
							
								
						
							<!-- /Column 3 -->
							
						<!--mobile-->
						@foreach($latestheadline2s as $national)	
						<!-- Column 3 -->
							@if($loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline2s[2]->title))
							<!-- ARTICLE -->
								<article class="article" id="dis">
									@if($national->category_id == 19)
										<div class="article-img">
											<video controls style="height: 150px;width: 200px;">
												<source src="{{url('video-admin/'.$headline->cover_image)}}" type="video/mp4">
												Your browser does not support the audio element.
											</video>
										</div>
									@else
										<div class="article-img">
											<a href="{{route('singlePost',['id'=>$national->id])}}">
												<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-file-text"></i></li>
											</ul>
										</div>
									@endif

									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
										<h4 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}.</a></h4>

									</div>
								</article>
								<!-- /ARTICLE -->
							@elseif(!$loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline2s[$loop->index-1]->title))
							<!-- ARTICLE -->
								<article class="article" id="dis">
									@if($national->category_id == 19)
										<div class="article-img">
											<video controls style="height: 150px;width: 200px;">
												<source src="{{url('video-admin/'.$headline->cover_image)}}" type="video/mp4">
												Your browser does not support the audio element.
											</video>
										</div>
									@else
										<div class="article-img">
											<a href="{{route('singlePost',['id'=>$national->id])}}">
												<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-file-text"></i></li>
											</ul>
										</div>
									@endif

									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
										<h4 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}.</a></h4>

									</div>
								</article>
								<!-- /ARTICLE -->
							@endif

						
							<!-- /Column 3 -->
							@endforeach
						</div>
						<!--mobile version new-->
						<div class="widget" id="mdis1" style="background:linear-gradient(to right top,#0B5382,#0592D5);">
							<div class="article-img">
									<a href="#">
			<img class="" src="{{asset('/')}}public/front/coronavirus.jpg" alt="" height="100px" width="100%" style="padding: 3px;">
									</a>
								</div>
							
							<script>
    jQuery(function(){
        jQuery.get('https://fastaar.com/api', function(res){
            console.log(res);
            jQuery('#confirmed').html(res.total.confirmed)
            jQuery('#recovered').html(res.total.recovered)
            jQuery('#deaths').html(res.total.deaths)

            res.districts.forEach(function(district){
                var ul = jQuery("<ul></ul>");
                ul.append(`<li>  ${district.name} - ${district.confirmed} ,  </li>`);
                jQuery('#districts').append(ul);
            });
        });
    });
</script>
							<!-- owl carousel 3 -->
							
								<!-- ARTICLE -->
								<article class="article">
									<div style="padding-left: 10px;">
									<iframe src="https://fastaar.com/widget1" height="300" width="310" frameborder="0"></iframe>
        

        <marquee behavior="" direction="" ><div style="display:flex;color:white;"  id="districts" class="bg-dark text-light"></div></marquee>
    </div>
								</article>
								<!-- /ARTICLE -->
								
						</div>
						<!--mobile version new-->
						<!--mobile version-->

<div class="widget" id="mdis1" style="background:linear-gradient(to right top,#0B5382,#0592D5);">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">
কোভিড-১৯
 </h2>
								</div>
								<!-- /section title -->
								
							
							<!-- /owl carousel 3 -->
							
							
							
							@foreach($coronas as $national)
							
							<!-- ARTICLE -->
							<article class="article widget-article" style="margin-bottom:0px;" >

								
									<div class="" style="float: left;overflow: hidden">
										<div class="article-body" style="padding-left: 10px;">
											<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h5 class="article-title3" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="color:white;">{{ str_limit($national->title,'22') }}</a></h5>
									
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
							<!-- /ARTICLE -->
							<hr style="color:white;">
							@endforeach
						</div>
						<!-- /article widget -->	
						<!--mobile version-->
						<!--news mobile version -->
						<div class="widget" id="mdis1" >
							
							<!-- tab nav -->
							<ul class="tab-nav text-center" >
						<li class="active" ><a data-toggle="tab" href="#tab5" ><b>সর্বশেষ</b></a></li>
					<li ><a data-toggle="tab" href="#tab6" ><b>জনপ্রিয়</b></a></li>
								
							</ul><br>
							<!-- /tab nav -->
							<div class="tab-content mt-3" style="height: 369px;width: 358px;overflow: hidden;overflow-y: scroll;">
							<!-- জাতীয় -->
							<div id="tab5" class="tab-pane fade in active">

								@foreach($latestheadline3s as $national)

										<article class="article widget-article" style="margin-bottom:0px;">
											<div class="article-img">
												<a href="{{route('singlePost',['id'=>$national->id])}}">
													<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
												<h5 class="article-title" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-weight:500px;">{{ str_limit($national->title,'30') }}</a></h5>

											</div>
										</article>
								<!-- ARTICLE -->

							<!-- /ARTICLE -->
							<hr>
							@endforeach
						   </div>
						   <div id="tab6" class="tab-pane fade ">
						   	@foreach($famousposts as $national)
							<!-- ARTICLE -->
							<article class="article widget-article" style="margin-bottom:0px;">
								<div class="article-img">
									<a href="{{route('singlePost',['id'=>$national->id])}}">
										<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
									</a>
								</div>
								<div class="article-body">
									<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<h5 class="article-title" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-weight:500px;">{{ str_limit($national->title,'30') }}</a></h5>
									
								</div>
							</article>
							<!-- /ARTICLE -->
							<hr>
							@endforeach
						   </div>
						</div>
							
						</div>
						<!--news mobile version-->
					</div>
					<!--right-side-->
					<!--sylhet-->
						<div class="row">
							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
							<a href="{{route('post',['id'=>3])}}"><h2 class="title">সিলেট </h2></a>
								</div>
							</div>
							<!-- /section title -->
							@foreach($latestsylhets as $national)
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
	<p><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:15px;"><b>{{ str_limit($national->title,'35') }}</b></a><p>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 300) !!}</p>
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
							
							
						
							@foreach($samplesylhets as $national)
							<!-- Column 3 -->
							<div class="col-md-6 col-sm-6">
								<!-- ARTICLE -->
								<article class="article widget-article" style="margin-bottom:0px; ">
									<div class="article-img" style="width:172px;">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">

										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
			<h4 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'40') }}.</a></h4>
										
									</div>
								</article>
								<!-- /ARTICLE -->
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
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4">
								<!-- section title -->
								<div class="section-title">
							<a href="{{route('subpost',['id'=>3])}}">		<h2 class="title">মৌলভীবাজার </h2></a>
								</div>
								<!-- /section title -->
								@foreach($mol as $national)
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="{{route('subsinglePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<h5 class="article-title"><a href="{{route('subsinglePost',['id'=>$national->id])}}" style="font-size: 15px;">{{ str_limit($national->title,'35') }}</a></h5>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							    <hr>
								@foreach($samplemol as $national)
								<!-- ARTICLE -->
								<article class="article widget-article" style="margin-bottom:5px;">
									
									<div class="article-body"><span style="float:left;"><i class="fa fa-square" style="color:#B30F0F;font-size:10px;"></i></span>
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<p class="" ><a href="{{route('subsinglePost',['id'=>$national->id])}}" style="padding-left: 5px;">{{ str_limit($national->title,'40') }}</a></p>
										
									</div>
								</article>
							
								<!-- /ARTICLE -->
								@endforeach
								
							</div>
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							<div class="col-md-4 col-sm-4">
								<!-- section title -->
								<div class="section-title">
							<a href="{{route('subpost',['id'=>2])}}">		<h2 class="title">হবিগঞ্জ </h2></a>
								</div>
								<!-- /section title -->
								
									@foreach($habi as $national)
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="{{route('subsinglePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<h5 class="article-title"><a href="{{route('subsinglePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							<hr>
								@foreach($samplehabi as $national)
								<!-- ARTICLE -->
					<article class="article widget-article" style="margin-bottom:5px;">
									
									<div class="article-body"><span style="float:left;"><i class="fa fa-square" style="color:#B30F0F;font-size:10px;"></i></span>
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<p class="" ><a href="{{route('subsinglePost',['id'=>$national->id])}}" style="padding-left: 5px;">{{ str_limit($national->title,'40') }}</a></p>
										
									</div>
								</article>
								
								<!-- /ARTICLE -->
								@endforeach
							</div>
							<!-- /Column 2 -->

							<!-- Column 3 -->
							<div class="col-md-4 col-sm-4">
								<!-- section title -->
								<div class="section-title">
							<a href="{{route('subpost',['id'=>4])}}">		<h2 class="title">সুনামগঞ্জ</h2></a>
								</div>
								<!-- /section title -->
								
									@foreach($su as $national)
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="{{route('subsinglePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h5 class="article-title"><a href="{{route('subsinglePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								<hr>
								@foreach($samplesu as $national)
								<!-- ARTICLE -->
								<article class="article widget-article" style="margin-bottom:5px;">
									
									<div class="article-body"><span style="float:left;"><i class="fa fa-square" style="color:#B30F0F;font-size:10px;"></i></span>
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<p class="" ><a href="{{route('subsinglePost',['id'=>$national->id])}}" style="padding-left: 5px;">{{ str_limit($national->title,'40') }}</a></p>
										
									</div>
								</article>
								
								<!-- /ARTICLE -->
								@endforeach
							</div>
							<!-- /Column 3 -->
						</div>
						<!-- /row -->
						<!--today news-->
						<!--special jainta barta-->
						<!--mobile version-->
								<!-- ROW -->
				<div class="row" id="mdis1">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
						<a href="{{route('post',['id'=>10])}}"><h2 class="title">জৈন্তা বার্তা স্পেশাল</h2></a>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
					
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner" style="">
                    
                <div class="item active">
                	<div class="row">
                		@foreach($mspecialsylhets as $national)
                	  <div class="col-md-12">	<article class="article thumb-article">
								<div class="article-img">
								<a href="{{route('subsinglePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('subpost',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach
										
										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
									<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<p class="" ><a href="{{route('subsinglePost',['id'=>$national->id])}}" style="font-size:13px;color:white;">{{ str_limit($national->title,'30') }}</a></p>
									
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
								<a href="{{route('subsinglePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('subpost',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach
										
										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
									<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<p class="" ><a href="{{route('subsinglePost',['id'=>$national->id])}}" style="font-size:13px;color:white;">{{ str_limit($national->title,'30') }}</a></p>
									
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
								<a href="{{route('subsinglePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('subpost',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach
										
										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
									<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<p class="" ><a href="{{route('subsinglePost',['id'=>$national->id])}}" style="font-size:13px;color:white;">{{ str_limit($national->title,'30') }}</a></p>
									
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
					<!-- /Main Column -->
				</div>
				<!-- /ROW --><br>
						<!--mobile version-->
									<!-- ROW -->
				<div class="row" id="dis">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
						<a href="{{route('post',['id'=>10])}}"><h2 class="title">জৈন্তা বার্তা স্পেশাল</h2></a>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
					
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner" style="width:744px;">
                    
                <div class="item active">
                	<div class="row">
                		@foreach($specialsylhets as $national)
                	  <div class="col-md-4">	<article class="article thumb-article">
								<div class="article-img">
								<a href="{{route('subsinglePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('subpost',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach
										
										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
									<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<p class="" ><a href="{{route('subsinglePost',['id'=>$national->id])}}" style="font-size:13px;color:white;">{{ str_limit($national->title,'30') }}</a></p>
									
								</div>
							</article>
						</div>
                	@endforeach
                	 </div>
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                			@foreach($specialsylhets1 as $national)
                	  <div class="col-md-4">	<article class="article thumb-article">
								<div class="article-img">
								<a href="{{route('subsinglePost',['id'=>$national->id])}}">	<img src="{{asset('/')}}{{$national->cover_image}}" alt=""></a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										@foreach($subcats as $newcat)
						@if($national->subcategory_id == $newcat->id)
						<li class="article-category"><a href="{{route('subpost',['id'=>$newcat->id])}}">{{ $newcat->sub_name }}</a></li>
						@endif
						@endforeach
										
										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
									<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<p class="" ><a href="{{route('subsinglePost',['id'=>$national->id])}}" style="font-size:13px;color:white;">{{ str_limit($national->title,'30') }}</a></p>
									
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
					<!-- /Main Column -->
				</div>
				<!-- /ROW --><br>
						<!--special jainta barta-->
						<div class="row">
							<div class="col-md-6">
							
								<div class="section-title">
									<a href="{{route('post',['id'=>5])}}"><h2 class="title">আজকের পত্রিকা</h2></a>
								</div>
                  @foreach($rlatestheadlines as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
	<p><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:15px;"><b>{{ str_limit($national->title,'35') }}</b></a><p>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 300) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
						@endforeach
							</div>
							<div class="col-md-3">
								<div class="section-title">
									<a href="{{route('post',['id'=>5])}}"><h2 class="title">প্রথম পাতা</h2></a></div>
									@foreach($firsts as $national)
								<!-- ARTICLE -->
								<article class="article widget-article" style="margin-bottom:5px;">
									
									<div class="article-body"><span style="float:left;"><i class="fa fa-square" style="color:#B30F0F;font-size:10px;"></i></span>
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="padding-left: 5px;">{{ str_limit($national->title,'40') }}</a></p>
										
									</div>
								</article>
								<hr>
								<!-- /ARTICLE -->
								@endforeach
								
							</div>
							<div class="col-md-3">
								<div class="section-title">
									<a href="{{route('post',['id'=>4])}}"><h2 class="title">শেষ পাতা</h2></a>
								</div>
								@foreach($lasts as $national)
								<!-- ARTICLE -->
								<article class="article widget-article" style="margin-bottom:5px;">
									
									<div class="article-body"><span style="float:left;"><i class="fa fa-square" style="color:#B30F0F;font-size:10px;"></i></span>
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<p class="" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="padding-left: 5px;">{{ str_limit($national->title,'40') }}</a></p>
										
									</div>
								</article>
								<hr>
								<!-- /ARTICLE -->
								@endforeach
							</div>
						</div>
						<!--today news-->
						<!-- row -->
						<div class="row">
							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
									<a href="{{route('post',['id'=>36])}}"><h2 class="title">দেশজুড়ে  </h2></a>
								</div>
							</div>
							<!-- /section title -->
							@foreach($allcountries as $national)
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4">
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							
						@endforeach
							
						</div>
						<!-- /row -->
						<!-- end sylhet zila section-->
					<!--syllhet-->

								<!--nationnal section-->
						<!-- row -->
						<div class="row">
							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
							<a href="{{route('post',['id'=>4])}}"><h2 class="title">জাতীয় </h2>
								</div></a>
							</div>
							<!-- /section title -->
							@foreach($mainnats as $national)
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="" >
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							@endforeach
							<!-- /Column 2 -->
							<div class="col-md-6 col-sm-6" >
								
								<!-- row -->
						<div class="row" style="margin-right:10px;">
							
							
						
							@foreach($samnats as $national)
							<!-- Column 3 -->
							<div class="col-md-6 col-sm-6">
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="" style="padding-right:15px;">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
			<h4 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-size:12px;">{{ str_limit($national->title,'25') }}.</a></h4>
										
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 3 -->
							@endforeach
						</div>
						<!-- /row -->
							</div>
							<!-- /Column 2 -->
						</div>
						<!-- /row -->
						
						
						<!--national section-->
                      </div>
						
					
					<!--left-side-->
					<!--right-side-->
					<div class="col-sm-4 col-md-4">
						<!-- article widget -->
		<div class="widget" id="mdis3" >
							
							<!-- tab nav -->
							<ul class="tab-nav text-center" >
						<li class="active" ><a data-toggle="tab" href="#tab1" ><b>সর্বশেষ</b></a></li>
					<li ><a data-toggle="tab" href="#tab2" ><b>জনপ্রিয়</b></a></li>
								
							</ul><br>
							<!-- /tab nav -->
							<div class="tab-content mt-3" style="height: 369px;width: 358px;overflow: hidden;overflow-y: scroll;">
							<!-- জাতীয় -->
							<div id="tab1" class="tab-pane fade in active">
								@foreach($latestheadline3s as $national)
								<!-- ARTICLE -->
								@if($loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline3s[2]->title))
										<article class="article widget-article" style="margin-bottom:0px;">
											<div class="article-img">
												<a href="{{route('singlePost',['id'=>$national->id])}}">
													<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
												<h5 class="article-title" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-weight:500px;">{{ str_limit($national->title,'30') }}</a></h5>

											</div>
										</article>
										<hr>
									@elseif(!$loop->first &&  str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline3s[$loop->index - 1]->title))
										<article class="article widget-article" style="margin-bottom:0px;">
											<div class="article-img">
												<a href="{{route('singlePost',['id'=>$national->id])}}">
													<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
												<h5 class="article-title" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-weight:500px;">{{ str_limit($national->title,'30') }}</a></h5>

											</div>
										</article>
										<hr>
									@endif

							<!-- /ARTICLE -->

							@endforeach
						   </div>
						   <div id="tab2" class="tab-pane fade ">
						   	@foreach($famousposts as $national)
							<!-- ARTICLE -->
								@if($loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline3s[2]->title))
									<article class="article widget-article" style="margin-bottom:0px;">
										<div class="article-img">
											<a href="{{route('singlePost',['id'=>$national->id])}}">
												<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
											</a>
										</div>
										<div class="article-body">
											<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
											<h5 class="article-title" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-weight:500px;">{{ str_limit($national->title,'30') }}</a></h5>

										</div>
									</article>
									<hr>
								@elseif(!$loop->first && str_replace(' ', '', $national->title) !== str_replace(' ', '', $latestheadline3s[$loop->index-1]->title))
									<article class="article widget-article" style="margin-bottom:0px;">
										<div class="article-img">
											<a href="{{route('singlePost',['id'=>$national->id])}}">
												<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
											</a>
										</div>
										<div class="article-body">
											<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
											<h5 class="article-title" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="font-weight:500px;">{{ str_limit($national->title,'30') }}</a></h5>

										</div>
									</article>
									<hr>
								@endif

							<!-- /ARTICLE -->

							@endforeach
						   </div>
						</div>
							
						</div>
						<!-- /article widget -->
					<!-- article widget -->
						<div class="widget" id="mdis2" style="background:linear-gradient(to right top,#0B5382,#0592D5);">
							<div class="article-img">
									<a href="#">
			<img class="" src="{{asset('/')}}public/front/coronavirus.jpg" alt="" height="100px" width="100%" style="padding: 3px;">
									</a>
								</div>
							
							<script>
    jQuery(function(){
        jQuery.get('https://fastaar.com/api', function(res){
            console.log(res);
            jQuery('#confirmed').html(res.total.confirmed)
            jQuery('#recovered').html(res.total.recovered)
            jQuery('#deaths').html(res.total.deaths)

            res.districts.forEach(function(district){
                var ul = jQuery("<ul></ul>");
                ul.append(`<li>  ${district.name} - ${district.confirmed} ,  </li>`);
                jQuery('#districts').append(ul);
            });
        });
    });
</script>
							<!-- owl carousel 3 -->
							
								<!-- ARTICLE -->
								<article class="article">
									<div style="padding-left: 10px;">
									<iframe src="https://fastaar.com/widget1" height="300" width="310" frameborder="0"></iframe>
        

        <marquee behavior="" direction="" ><div style="display:flex;color:white;"  id="districts" class="bg-dark text-light"></div></marquee>
    </div>
								</article>
								<!-- /ARTICLE -->
								
						</div>

					<div class="widget" id="mdis2" style="background:linear-gradient(to right top,#0B5382,#0592D5);">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">
কোভিড-১৯
 </h2>
								</div>
								<!-- /section title -->
								
							
							<!-- /owl carousel 3 -->
							
							
							
							@foreach($coronas as $national)
							
							<!-- ARTICLE -->
							<article class="article widget-article" style="margin-bottom:0px;" >

								
									<div class="" style="float: left;overflow: hidden">
										<div class="article-body" style="padding-left: 10px;">
											<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h5 class="article-title3" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="color:white;">{{ str_limit($national->title,'22') }}</a></h5>
									
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
							<!-- /ARTICLE -->
							<hr style="color:white;">
							@endforeach
						</div>
						<!-- /article widget -->	
					<!-- social widget -->
						<div class="widget social-widget">
							<div class="widget-title">
								<h2 class="title" style="color:#9B0E0E">Follow Us</h2>
							</div>
							<div style="padding-left: 10px;">
							<div class="fb-page"  data-href="https://web.facebook.com/DailyJaintaBarta/" data-tabs="timeline" data-width="310" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://web.facebook.com/DailyJaintaBarta/" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/DailyJaintaBarta/">Daily Jainta Barta</a></blockquote></div>
						</div>
						</div>
						<!-- /social widget -->
						<!-- article widget -->
						<div class="widget" style="background:linear-gradient(to right top,#0D639A,#069EE3);">
							<!-- section title -->
								<div class="section-title">
							<a href="{{route('post',['id'=>3])}}">		<h2 class="title">
                             জাতীয়</h2></a>
								</div>
								<!-- /section title -->
							
						
						@foreach($nagos as $national)
							
							<!-- ARTICLE -->
							<article class="article widget-article" style="margin-bottom:0px;" >

								
									<div class="" style="float: left;overflow: hidden">
										<div class="article-body" style="padding-left: 10px;">
											<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h5 class="article-title3" ><a href="{{route('singlePost',['id'=>$national->id])}}" style="color:white;">{{ str_limit($national->title,'22') }}</a></h5>
									
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
							<!-- /ARTICLE -->
							<hr style="color:white;">
							@endforeach
							
							
						</div>
						<!-- /article widget -->
						
					<!-- Ad widget -->
						<div class="widget center-block hidden-xs">
							<img class="center-block" src="{{asset('/')}}public/front/image_750x_5e78a3d56368d.jpg" alt="" height="500px" width="350px;"> 
						</div>
						<!-- /Ad widget -->		

						
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
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!--sylhet section-->
						<!-- row -->
					
						
					<!--all country section-->
						
						
						
						<!--all country section-->
				<!--রাজনীতি section-->
						
						
						
						<!--রাজনীতি section-->

						<!-- all section-->
						<!-- row -->
					
						<!-- all section-->
						
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					<div class="col-md-4">
						
					
							
						
						
						
						
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
			<!-- new international section-->
				<div class="row">
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4">
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>11])}}">
						<h2 class="title">আন্তর্জাতিক </h2>
					</a>
								</div>
								<!-- /section title -->
								
								@foreach($inters as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35')}}</a></h5>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($saminters as $national)
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></h5>
										
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								
								
							</div>
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							<div class="col-md-4 col-sm-4">
								<!-- section title -->
								<div class="section-title">
					<a href="{{route('post',['id'=>20])}}"><h2 class="title">প্রবাসী সংবাদ </h2></a>
								</div>
								<!-- /section title -->
								
								@foreach($fors as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samfors as $national)
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<h4 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></h4>
										
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								
							</div>
							<!-- /Column 2 -->

							<!-- Column 3 -->
							<div class="col-md-4 col-sm-4">
								<!-- section title -->
								<div class="section-title">
								<a href="{{route('post',['id'=>28])}}">	
									<h2 class="title">সতের পরগনা সংবাদ</h2>
								</a>
								</div>
								<!-- /section title -->
								
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
							<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							@foreach($samarts as $national)
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
											<img src="{{asset('/')}}{{$national->cover_image}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h4 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></h4>
										
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								
							</div>
							<!-- /Column 3 -->
						</div>
						<!-- /row -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
	<!-- startnew photo feture + video section -->
	<!-- SECTION -->
		<div class="section" style="background-color:black;">
		<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-6 col-sm-6">
				<div class="row">
							<!-- Column 1 -->
							<div class="col-md-12 col-sm-12">
								<!-- section title -->
								<div class="section-title">
								<a href="{{route('post',['id'=>30])}}">
									<h2 class="title">
                              ছবি   </h2>
                          </a>
								</div>
								<!-- /section title -->
								@foreach($ph1s as $national)
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
										  <video controls style="height: 300px;width: 600px;">
 <source src="{{url('video-admin/'.$national->cover_image)}}" type="video/mp4">
Your browser does not support the audio element.
</video>
										</a>
										
									</div>
									<div class="article-body">
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
		<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}" style="color:white;">{{ str_limit($national->title,'30') }}</a></h5>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
							</div>
							<!-- /Column 1 -->
							
							
							
							
						</div>
						<!-- /row -->
					<div class="row">
						@foreach($ph2s as $national)
							<!-- Column 1 -->
							<div class="col-md-3 col-sm-3">
								
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}" style="color:white;">{{ str_limit($national->title,'30') }}</a></h5>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
						@endforeach	
					</div>
						<!-- /row -->
					</div>

				<div class="col-md-6 col-sm-6">
						<!--sylhet section-->
						<!-- row -->
						<div class="row">
							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
					<a href="{{route('post',['id'=>35])}}">	
						<h2 class="title">ভিডিও </h2>
					</a>
								</div>
							</div>
							<!-- /section title -->
							@foreach($ph3s as $national)
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="{{route('singlePost',['id'=>$national->id])}}">
							<video controls style="height: 250px;width: 200px;">
 <source src="{{url('video-admin/'.$national->cover_image)}}" type="video/mp4">
Your browser does not support the audio element.
</video>
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
			<h6 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}" style="color:white;">{{ str_limit($national->title,'30')}}</a></h6>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
						@endforeach	<!-- /Column 1 -->
							
					</div>
						<!-- /row -->
				</div>
			</div>
   </div>
		</div>
	<!--section-->
<!-- startnew photo feture + video section -->
<!-- sports+life style section section -->
	<!-- SECTION -->
		<div class="section" >
		<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-6 col-sm-6">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>13])}}">	
							<h2 class="title">খেলাধুলা  </h2>
						</a>
						</div>
						<!-- /section title -->
						<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
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
							<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
							<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
							</div>
							<!-- /Column 1 -->
							
							<!-- /Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- row -->
						<div class="row">
							@foreach($samsports as $national)
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<p class="" style="font-size: 13px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							@endforeach
							
							
							
						</div>
						<!-- /row -->
							
							</div>
							<!-- /Column 2 -->	
							
							
							
						</div>
				
						<div class="col-md-6 col-sm-6">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>26])}}">	
							<h2 class="title">লাইফ স্টাইল </h2>
						</a>
						</div>
						<!-- /section title -->
						<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
									@foreach($lifes as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										<p>{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
							</div>
							<!-- /Column 1 -->
							
							<!-- /Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- row -->
						<div class="row">
						@foreach($samlifes as $national)
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<p class="" style="font-size: 13px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							@endforeach
							
							
							
							
						</div>
						<!-- /row -->
							
							</div>
							<!-- /Column 2 -->	
							
							
							
						</div>
						
				
					
					</div>

				
			</div>
   </div>
	
	<!--section-->
<!-- end extra section -->
<!-- start extra section -->
	<!-- SECTION -->
		<div class="section" >
		<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-3 col-sm-3">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>23])}}">
							<h2 class="title">টেকনোলজি </h2>
						</a>
						</div>
						<!-- /section title -->
		@foreach($cars as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
							@foreach($samcars as $national)
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
									<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<h6 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></h6>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
												
							
							
							
						</div>
						<!-- /row -->
						<div class="col-md-6 col-sm-6">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>15])}}">
							<h2 class="title">বিনোদন </h2>
						</a>
						</div>
						<!-- /section title -->
						<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
								@foreach($ens as $national)
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
									<p>{!!  substr(strip_tags($national->paragraph), 0, 200) !!}</p>	
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
							</div>
							<!-- /Column 1 -->
							
							<!-- /Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- row -->
						<div class="row">
							@foreach($samens as $national)
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<p class="article-title" style="font-size: 13px;"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							@endforeach
							
							
							
							
						</div>
						<!-- /row -->
							
							</div>
							<!-- /Column 2 -->	
							
							
							
						</div>
						<!-- /row -->
						<div class="col-md-3 col-sm-3">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>22])}}">
							<h2 class="title">মুক্তচিন্তা</h2>
						</a>
						</div>
						<!-- /section title -->
							
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
										<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
					@foreach($sammuktos as $national)
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
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<h6 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></h6>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
							
						</div>
						<!-- /row -->
				
					
					</div>

				
			</div>
   </div>
	
	<!--section-->
<!-- sports+life style section section -->	

<!-- more extra section -->
	<!-- SECTION -->
		<div class="section" >
		<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-3 col-sm-3">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>25])}}">
							<h2 class="title">শিল্প ও সাহিত্য</h2>
						</a>
						</div>
						<!-- /section title -->
		@foreach($sings as $national)
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
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
					@foreach($samsings as $national)
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
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h6 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></h6>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
												
							
							
							
						</div>
						<!-- /row -->
						<!-- /row -->
						<div class="col-md-3 col-sm-3">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>17])}}">
							<h2 class="title">ক্যাম্পাস </h2>
						</a>
						</div>
						<!-- /section title -->
							
						@foreach($cams as $national)
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
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
					@foreach($samcams as $national)
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

							<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h6 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></h6>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
								
							
							
						</div>
						<!-- /row -->
						<!-- /row -->
						<div class="col-md-3 col-sm-3">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>19])}}">
							<h2 class="title">ভ্রমণ</h2>
						</a>
						</div>
						<!-- /section title -->
							
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
								<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{str_limit($national->title,'35') }}</a></h5>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
					@foreach($samvrs as $national)
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
							<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
					<h6 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></h6>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
						
							
							
						</div>
						<!-- /row -->
						
						<!-- /row -->
						<div class="col-md-3 col-sm-3">
			        <!-- section title -->
						<div class="section-title">
							<a href="{{route('post',['id'=>39])}}">
							<h2 class="title">ধর্ম ও জীবন </h2>
						</a>
						</div>
						<!-- /section title -->
							
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
						<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
				<h5 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'35') }}</a></h5>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
					@foreach($samdrs as $national)
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
							<p class="" style="font-size:13px;padding-left:5px;color:#FE0203;">{{ str_limit($national->op_title,'20') }}</p>
						<h6 class="article-title"><a href="{{route('singlePost',['id'=>$national->id])}}">{{ str_limit($national->title,'30') }}</a></h6>
										
										
									</div>
								</article>
								<!-- /ARTICLE -->
							@endforeach
								
							
							
							
						</div>
						<!-- /row -->
				
					
					</div>

				
			</div>
   </div>
	
	<!--section-->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=2323306957775742&autoLogAppEvents=1"></script>
@stop