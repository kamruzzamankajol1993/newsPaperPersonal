@extends('new_front.master.master')
@section('title')
{{ $postCatname }}
@stop
@section('body')
<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
		<div class="" id="mainCat" style="">
			<div class="row">
			<div class="col-sm-8 col-md-8">
				<!-- breadcrumb -->
						<ul class="article-breadcrumb">
							<li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="{{route('post',['id'=>$postCatid])}}">{{ $postCatname }}</a></li>


						</ul>
						<!-- /breadcrumb -->
				<div class="row">
				@foreach($newses as $news)
				<div class="col-md-6 col-sm-6">
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
							<a href="{{route('subsinglePost',['id'=>$news->id])}}">
								<img src="{{asset('/')}}{{$news->cover_image}}" alt="">
							</a>
							</div>
							@endif
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">{{ $postCatname }}</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<p class="text-danger" style="padding-left: 5px">{{ str_limit($news->op_title,'30') }}</p>
								<h4 class="article-title"><a href="{{route('subsinglePost',['id'=>$news->id])}}">{{ str_limit($news->title,'35') }}</a></h4>

								{!!  substr(strip_tags($news->paragraph), 0, 300) !!}

							</div>
						</article>
						<!-- /ARTICLE POST -->
				</div>
				@endforeach
				</div>
				{{ $newses->onEachSide(1)->links() }}
		    </div>

		   <div class="col-sm-4 col-md-4">
		   	<div class="widget center-block hidden-xs" style="margin-left:-53px;">
						@foreach($categoryad as $ad)
							<img class="center-block" src="{{asset('/')}}{{$ad->image}}" alt="" style="margin-top: 36px;height: 560px;width: 373px;">
							@endforeach
						</div>
		    </div>
			</div>

		</div>
	</div>


@endsection
