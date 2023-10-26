@extends('backend.master.master')

@section('title')
Create News  |{{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Create News</h4>

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
                <form method="post" action="{{route('admin.news.storee')}}" enctype="multipart/form-data">
                    @csrf
                    <?php
  $dt = new DateTime();
  $dt->setTimezone(new DateTimezone('Asia/Dhaka'));

  ?>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputEmail4">Post Title</label>
        <input type="text" class="form-control" name="title" placeholder="Post Title">
       <input type="hidden" class="form-control" name="created_at" value="<?php echo $dt->format('Y-m-d H:i:s');?>" placeholder="Post Title">
      </div>
      <div class="form-group col-md-12 mt-2">
        <label for="inputEmail4">Optional Title</label>
        <input type="text" class="form-control" name="op_title" placeholder="Optional Post Title">

      </div>
       <div class="form-group col-12 mt-2">
      <label for="exampleFormControlTextarea1">News Content</label>
      <textarea class="textarea" name="content" placeholder="Place some text here"
                            style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
    </div>

     <div class="form-group col-12 mt-2">
      <label >News Category</label>
      <select class="selectpicker form-control"  data-live-search="true" name="category_id">
        @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->eng_name}}</option>
        @endforeach

      </select>

    </div>
     <!--<div class="form-group col-12">
      <label >News Sub Category</label>
      <select class=" form-control"  name="subcategory_id">

        @foreach($subcategories as $subcat)
        <option value="{{$subcat->id}}">{{$subcat->sub_name}}</option>
        @endforeach

      </select>

    </div>-->
    <div class="form-group mt-2">
      <label for="exampleFormControlFile1">Cover Image</label>
      <input type="file" class="form-control-file" name="cover_image" id="profile_image" onchange="loadPreview(this);">
       <br>
      <label for="profile_image"></label>
            <img id="preview_img" src="https://w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" class="" width="200" height="150"/>
    </div>
    <script>
      function show() {
          if(document.getElementById('benefits').style.display=='none') {
              document.getElementById('benefits').style.display='block';
          }
          return false;
      }
      function hide() {
          if(document.getElementById('benefits').style.display=='block') {
              document.getElementById('benefits').style.display='none';
          }
          return false;
      }
  </script>

  <!--<div class="form-group col-md-12 mt-2">-->
  <!-- <div id="opener"><a href="#1" name="1" onclick="return show();"><h5><b>Upload From Your Storage</b></h5></a></div>-->
  <!--    <div id="benefits"  style="display:none;overflow: hidden;overflow-y: scroll;height:300px;">-->
  <!--      <div class="row">-->
  <!--       @foreach($cats as $post)-->
  <!--            @if($loop->first && str_replace(' ', '', $post->cover_image) !== str_replace(' ', '', $cats[2]->cover_image))-->
  <!--        <div class="col-md-3 mt-3">-->
  <!--          <img src="{{asset('/')}}{{$post->cover_image}}" class="img-thumbnail"/>-->
  <!--          <input name="cover_image" type="checkbox" value="{{$post->cover_image}}" >-->

  <!--        </div>-->
  <!--@elseif(!$loop->first &&  str_replace(' ', '', $post->cover_image) !== str_replace(' ', '', $cats[$loop->index - 1]->cover_image))-->
  <!-- <div class="col-md-3 mt-3">-->
  <!--          <img src="{{asset('/')}}{{$post->cover_image}}" class="img-thumbnail"/>-->
  <!--          <input name="cover_image" type="checkbox" value="{{$post->cover_image}}" >-->

  <!--        </div>-->
  <!--        @endif-->
  <!--        @endforeach-->

  <!--      </div>-->
  <!--           <div id="upbutton"><a onclick="return hide();" class="btn btn-danger mt-5 text-light">Close</a></div>-->
  <!--    </div>-->
  <!--  </div>-->
     <div class="form-group col-md-12 mt-2">
        <label for="inputEmail4">Image Caption</label>
        <input type="text" class="form-control" name="caption" placeholder="Image Caption">

      </div>
    <div class="form-group col-md-12 mt-2">
        <label for="inputEmail4">Source</label>
        <input type="text" class="form-control" name="total_view" value="Daily Bangla Times" placeholder="Source Name" required>
      </div>

      <div class="form-group col-md-12 mt-2">
        <label for="inputState">Status</label>
        <select id="inputState" class="form-control" name="status">
          <option selected value="1">Active</option>
          <option value="0">Inactive</option>
        </select>
      </div>

      <div class="form-group col-md-12 mt-2">
        <label for="inputState">Publish Site</label>
        <select id="inputState" class="form-control" name="public_site">
          <option selected value="1">Bangla</option>
          <option value="0" selected>English</option>
        </select>
      </div>
<div class="form-group col-md-12 mt-2">
        <label for="inputState">Extra Publish Option</label>
        <select id="inputState" class="form-control" name="extra_publish_option">
          <option selected value="1">Inside Slider</option>
          <option value="0">Under Madam Image</option>
        </select>
      </div>
     <div class="form-group col-md-12 mt-2">

          <input type="submit" class="btn btn-primary col-12" name="dvalue" value="submit">
          
          <input type="submit" class="btn btn-info col-12 mt-2" name="dvalue" value="draft_english">
        </div>

  </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
  function loadPreview(input, id) {
    id = id || '#preview_img';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
 
        reader.onload = function (e) {
            $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
 }
</script>
<script>
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })
  </script>
@endsection
