@extends('backend.master.master')

@section('title')
News Detail  |{{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">News Detail</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">

                    <li class="breadcrumb-item active"> </li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">

	<div class="col-12">

	</div>

	<div class="offset-md-1 col-10 mt-1 border p-1">
	<div class="col-12 pt-2 text-center">
		<h2>{{$post->title}}</h2>
	</div>
	<div class="row">
	<div class="col-4">
		 @if(!empty($post->cover_image))
    <iframe width="400" height="200" src="{{$post->cover_image}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
@else
<h6 class="lead text-center text-success">Video Not Available</h6>
@endif
	</div>


		<div class="col-8 ">

			<p>{!!$post->paragraph!!}</p>
		</div>

	</div>
	</div>
</div>

@section('script')

@endsection
