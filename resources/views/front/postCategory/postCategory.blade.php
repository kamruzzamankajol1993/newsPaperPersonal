@extends('new_front.master.master')
@section('title')
{{ $postCatname }}
@stop
@section('body')
<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
		<div class="container"  style="">
			<div class="row">
			<div class="col-sm-9 col-md-9">
				<!-- breadcrumb -->
						<ul class="article-breadcrumb">
							<li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="{{route('post',['id'=>$postCatid])}}">{{ $postCatname }}</a></li>


						</ul>
						<!-- /breadcrumb -->
				<div class="row">
				@foreach($newses as $news)
				<div class="col-md-4 col-sm-4">
					<!-- ARTICLE POST -->
						<article class="article article-post" style="">
							@if($news->category_id == 52)
							<div class="article-main-img">
		<iframe width="400" height="200" src="{{$news->cover_image}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
							@else
							<div class="article-main-img">
								<a href="{{route('singlePost',['id'=>$news->id])}}"><img src="{{asset('/')}}{{$news->cover_image}}" alt=""></a>
							</div>
							@endif
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">{{ $postCatname }}</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<p class="text-danger" style="padding-left: 5px">{{ Str::limit($news->op_title,'30') }}</p>
					<h4 class="article-title"><a href="{{route('singlePost',['id'=>$news->id])}}">{{ Str::limit($news->title,'35') }}</a></h4>

							<p style="text-align: justify;">	{!!  substr(strip_tags($news->paragraph), 0, 300) !!}<p>

							</div>
						</article>
						<!-- /ARTICLE POST -->
				</div>
				@endforeach
				</div>
				{{ $newses->onEachSide(1)->links() }}
		    </div>

		   <div class="col-sm-3 col-md-3">
		   @foreach($catad as $ad)
						<div class="widget center-block hidden-xs" style="margin-top: 15px;">
							<img class="center-block" src="{{asset('/')}}{{$ad->image}}" alt="">
						</div>
                        @endforeach
		    </div>
			</div>

		</div>
	</div>


@endsection
