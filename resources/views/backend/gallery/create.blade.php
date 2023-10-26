@extends('backend.master.master')

@section('title')
Create Add  |{{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Create Add</h4>

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
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                @include('flash_message')

                <form method="post" action="{{route('admin.ad.store')}}" enctype="multipart/form-data">
                    @csrf
    <div class="form-row">
     <div class="form-group col-12">
      <label >Advertisement Category</label>
      <select class="form-control" name="name">
        <option value="Social Banner">Social Banner</option>

        <option value="Home_Section">Home_section</option>
       <option value="category_Section">Category Page</option>
       <option value="singlecategory_Section">Single Category Page</option>

      </select>

    </div>

    <div class="form-group col-md-12 mt-3">
      <label for="exampleFormControlFile1">Image</label>
      <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>

      <div class="form-group col-md-12 mt-3">
        <label for="inputState">Status</label>
        <select id="inputState" class="form-control" name="status">
          <option selected value="1">Active</option>
          <option value="0">InActive</option>
        </select>
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
           <small class="text-danger">For uploading photo please follow the  Dimension</b></small>
           </div>

           <div class="card-body">

               <ul>
                   <li>For Home-section  photo size:- <b>height*width:</b><b class="text-danger">300*250</b></li>

                   <li>For category page section  photo size:-<b>height*width:</b> <b class="text-danger">300*250</b></li>
                   <li>For single page section  photo size:- <b>height*width:</b><b class="text-danger">980*120</b></li>
               </ul>
           </div>
       </div>
   </div>

</div>
    @endsection
                @section('script')

                @endsection
