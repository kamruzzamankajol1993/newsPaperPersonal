@extends('backend.master.master')

@section('title')
Edit News  |{{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Edit News</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">

                    <li class="breadcrumb-item active"> </li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('flash_message')


                <form method="post" action="{{ route('admin.video.update') }}" enctype="multipart/form-data">
                    @csrf


    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputEmail4">Post Title</label>
        <input type="text" class="form-control" name="title" value="{{ $post->title }}" placeholder="Post Title">
         <input type="hidden" class="form-control" name="id" value="{{ $post->id }}" placeholder="Post Title">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">Optional Title</label>
        <input type="text" class="form-control" name="op_title" value="{{ $post->op_title }}" placeholder="Optional Post Title">

      </div>
       <div class="form-group col-12">
      <label for="exampleFormControlTextarea1">News Content</label>
      <textarea class="textarea" name="content" placeholder="Place some text here"
                            style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                             {!! $post->paragraph !!}
                            </textarea>
    </div>



    <div class="form-group col-md-12">
        <label for="inputEmail4">Cover Image</label>
        <input type="file" class="form-control" name="cover_imge" value="{{$post->cover_imge}}" placeholder="Cover Video Link">
        <img src="{{asset('/')}}{{$post->cover_image}}" height="50px" width="50px">
      </div>

    <div class="form-group col-md-12">
        <label for="inputEmail4">Cover Video</label>
        <input type="text" class="form-control" name="y_link" value="{{$post->y_link}}" placeholder="Cover Video Link">

      </div>


    <div class="form-group col-md-12">
        <label for="inputEmail4">Caption</label>
        <input type="text" class="form-control" name="caption" value="{{$post->caption}}" placeholder="Caption">

      </div>
    <div class="form-group col-md-12">
        <label for="inputEmail4">Source</label>
        <input type="text" class="form-control" name="total_view" value="{{$post->total_view}}" placeholder="Source Name">
      </div>


      <div class="form-group col-md-12 mt-2">
        <label for="inputState">Publish Site</label>
        <select id="inputState" class="form-control" name="public_site">
            <option  value="1" {{ $post->public_site == 1 ? 'selected':'' }}>Bangla</option>
            <option value="0" {{ $post->public_site == 0 ?'selected':'' }}>English</option>
        </select>
      </div>


     <div class="form-group col-md-12">

          <input type="submit" class="btn btn-primary col-12" value="submit">
        </div>

  </form>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })
  </script>
@endsection
