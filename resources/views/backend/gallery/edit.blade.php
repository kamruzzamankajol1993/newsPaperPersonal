@extends('backend.master.master')

@section('title')
Edit Add  |{{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Edit Add</h4>

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
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
      <h4 class="text-center text-primary"> Update  Advertisement</h4>

        </div>
        <div class="card-body">
          <form method="post" action="{{route('admin.ad.update')}}" enctype="multipart/form-data">
            @csrf
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail4">Category Name </label>
<input type="text" class="form-control" name="name" value="{{$post->name}}" placeholder="Post Title">
<input type="hidden" class="form-control" name="id" value="{{$post->id}}" placeholder="Post Title">
</div>


<div class="form-group col-md-12 mt-3">
<label for="exampleFormControlFile1">Image</label>
<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
<img src="{{asset('/')}}{{$post->image}}" height="50px" width="50px">
</div>


<div class="form-group col-md-12 mt-3">

  <input type="submit" class="btn btn-primary col-12" value="submit">
</div>

</form>
        </div>
    </div>
  </div>

<div class="col-md-4">
    <div class="card">
        <div class="card-header text-danger text-center"><h3><b>Some Instruction</b></h3>
        <small class="text-danger">When you try to update ,please follow the instruction for updating <b>Category Name</b></small>
        </div>

        <div class="card-body">

            <ul>
                <li>For Header-section  use name:- <b class="text-danger">Header_Section</b></li>

                <li>For category page section  use name:- <b class="text-danger">category_Sectionn</b></li>
                <li>For single page section  use name:- <b class="text-danger">singlecategory_Section</b></li>
            </ul>
        </div>
    </div>

</div>
 </div>
@endsection


@section('script')

@endsection
