@extends('new_front.master.master')
@section('title')
{{ $search_txt }}
@stop
@section('body')

<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">

						<!-- breadcrumb -->
						<ul class="article-breadcrumb">
							<li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="#">

							    </a></li>
							<li><a href="#">{{ $search_txt}}</a></li>


						</ul>
						<!-- /breadcrumb -->
						@if($newses->count() == 0 )
						<h4 class="article-title text-danger">404 NOt Found</h4>
						@else
						<div class="row">
					<!-- Main Column -->
					@foreach($newses as $news)
					<div class="col-md-6">
						<!-- ARTICLE POST -->
						<article class="article article-post">
							@if($news->category_id == 52)
							<div class="article-main-img">
				<video controls style="height: 200px;width: 300px;" >
 <source src="{{url('video-admin/'.$news->cover_image)}}" type="video/mp4">
Your browser does not support the audio element.
</video>
</div>
							@else
							<div class="article-main-img">
								<img src="{{asset('/')}}{{$news->cover_image}}" alt="">
							</div>
							@endif
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">{{ $search_txt }}</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h4 class="article-title"><a href="{{route('singlePost',['id'=>$news->id])}}">{{ $news->title }}</a></h4>

								{!!  substr(strip_tags($news->paragraph), 0, 540) !!}

							</div>
						</article>
						<!-- /ARTICLE POST -->
					</div>
					@endforeach

				</div>
				@endif
			</div>
					<!-- /Main Column -->

					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- Ad widget -->
						<div class="widget center-block hidden-xs">
							<img class="center-block" src="{{asset('/')}}public/front/image_750x_5e78a3d56368d.jpg" alt="" height="500px" width="350px;">
						</div>
						<!-- /Ad widget -->

			</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->

		<!-- AD SECTION -->
		<div class="visible-lg visible-md">
			<img class="center-block" src="./img/ad-3.jpg" alt="">
		</div>
		<!-- /AD SECTION -->


@endsection
