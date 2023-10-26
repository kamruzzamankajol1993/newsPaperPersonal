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

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
      <h4 class="text-center text-primary">Update News</h4>

        </div>
        <div class="card-body">
          <form method="post" action="{{route('admin.news.update')}}" enctype="multipart/form-data">
            @csrf
<div class="form-row">
<div class="form-group col-md-12 mt-2">
<label for="inputEmail4">Post Title</label>
<input type="text" class="form-control" name="title" value="{{ $post->title }}" placeholder="Post Title">
<input type="hidden" class="form-control" name="id" value="{{ $post->id }}" placeholder="Post Title">
</div>

<div class="form-group col-md-12 mt-2">
    <label for="inputEmail4">Optional Title</label>
    <input type="text" class="form-control" value="{{ $post->op_title }}" name="op_title" placeholder="Optional Post Title">

  </div>


<div class="form-group col-12 mt-2">
<label for="exampleFormControlTextarea1">News Content</label>
<textarea class="textarea" name="paragraph" placeholder="Place some text here"
                    style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                      {!! $post->paragraph !!}
                    </textarea>
</div>

<div class="form-group col-12 mt-2">
    <label >News Category</label>
    <select class="selectpicker form-control" name="category_id">
      @foreach($categories as $cat)
      <option value="{{$cat->id}}"  {{ $cat->id == $post->category_id  }}>{{$cat->name}}</option>
      @endforeach

    </select>

  </div>
<div class="form-group mt-2">
<label for="exampleFormControlFile1">Cover Image</label>
<input type="file" class="form-control-file" name="cover_image">
<img src="{{asset('/')}}{{$post->cover_image}}" height="50px" width="50px">
</div>

<div class="form-group col-md-12 mt-2">
    <label for="inputEmail4">Image Caption</label>
    <input type="text" class="form-control" value="{{ $post->caption }}" name="caption" placeholder="Image Caption">

  </div>


<div class="form-group col-md-12 mt-3">
<label for="inputEmail4">Source</label>
<input type="text" class="form-control" value="{{ $post->total_view }}" name="total_view" placeholder="Source Name">

</div>


<div class="form-group col-md-12 mt-2">
    <label for="inputState">Status</label>
    <select id="inputState" class="form-control" name="status">
      <option  value="1" {{ $post->status == 1 ? 'selected':'' }}>Active</option>
      <option value="0" {{ $post->status == 0 ?'selected':'' }}>Inactive</option>
    </select>
  </div>

  <div class="form-group col-md-12 mt-2">
    <label for="inputState">Publish Site</label>
    <select id="inputState" class="form-control" name="public_site">
      <option  value="1" {{ $post->public_site == 1 ? 'selected':'' }}>Bangla</option>
      <option value="0" {{ $post->public_site == 0 ?'selected':'' }}>English</option>
    </select>
  </div>

<div class="form-group col-md-12 mt-2">
        <label for="inputState">Extra Publish Option</label>
        <select id="inputState" class="form-control" name="extra_publish_option">
          <option  value="1" {{ $post->extra_publish_option == 1 ? 'selected':'' }}>>Inside Slider</option>
          <option value="0" {{ $post->extra_publish_option == 0 ? 'selected':'' }}>>Under Madam Image</option>
        </select>
      </div>
      
      
<div class="form-group col-md-12 mt-3">

  <input type="submit" class="btn btn-primary col-12" value="Update">
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
