@extends('new_front.master.master')
@section('title')
শেষ_পাতা
@stop
@section('body')
<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
		<div class="container">
			<div class="row">
			<div class="col-sm-10 col-md-10">
				<!-- breadcrumb -->
						<ul class="article-breadcrumb">
							<li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="{{route('today')}}">শেষ_পাতা</a></li>


						</ul>
						<!-- /breadcrumb -->
				<div class="row">
				@foreach($newses as $news)
				<div class="col-md-4 col-sm-4">
					<!-- ARTICLE POST -->
						<article class="article article-post">
							@if($news->category_id == 19)
							<div class="article-main-img">
				<video controls style="height: 200px;width: 300px;" >
 <source src="{{url('video-admin/'.$news->cover_image)}}" type="video/mp4">
Your browser does not support the audio element.
</video>
</div>
							@else
							<div class="article-main-img">
								<a href="{{route('singlePost',['id'=>$news->id])}}"><img src="{{asset('/')}}{{$news->cover_image}}" alt=""></a>
							</div>
							@endif
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">শেষ_পাতা</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
					<h4 class="article-title"><a href="{{route('singlePost',['id'=>$news->id])}}">{{ str_limit($news->title,'35') }}</a></h4>

								{!!  substr(strip_tags($news->paragraph), 0, 300) !!}

							</div>
						</article>
						<!-- /ARTICLE POST -->
				</div>
				@endforeach
				</div>
				{{ $newses->onEachSide(1)->links() }}
		    </div>

		   <div class="col-sm-2 col-md-2">
		   	<div class="widget center-block hidden-xs">
							<img class="center-block" src="{{asset('/')}}public/front/image_750x_5e78a3d56368d.jpg" alt="" height="500px" width="350px;">
						</div>
		    </div>
			</div>

		</div>
	</div>


@endsection
