@extends('backend.master.master')

@section('title')
Advertisement List |{{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Advertisement List</h4>

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
    <div class="col-sm-6">
        <div class="float-right d-md-block">
            <div class="dropdown">
            @if (Auth::guard('admin')->user()->can('ad_add'))


                {{-- <a href="{{ route('admin.ad.create') }}" class="btn btn-success dropdown-toggle waves-effect  btn-sm waves-light" type="button" >
                    <i class="far fa-calendar-plus  mr-2"></i>Add Advertisement
                </a> --}}
@endif
            </div>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('flash_message')


                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>SL</th>
                                                                <th>Name</th>
                                                                <th>Image</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>


                                                        <tbody>

  <?php $counter=0;?>
    @foreach($allPost as $cat)
    <?php $counter++;?>
    @if($cat->id == 14)


    @else
    <tr>
        <th scope="row">{{$counter}}</th>
        <td>{{$cat->name}}</td>
        <td>

            <img src="{{asset($cat->image)}}" height="150" width="300">

            @if($cat->id==16)

            Image Size: 734*90

            @elseif($cat->id==17)

            Image Size: 370*272

            @elseif($cat->id==18)

            Image Size: 370*272

            @elseif($cat->id==19)

            Image Size: 370*272

            @elseif($cat->id==20)

            Image Size: 1170*282

            @elseif($cat->id==21)

            Image Size: 370*451

            @elseif($cat->id==22)

            Image Size: 370*272

            @elseif($cat->id==23)

            Image Size: 370*451

            @elseif($cat->id==24)

            Image Size: 370*272

            @endif


        </td>
        <td>
          @if($cat->status==0)
       Inactive
          @else
     Active
          @endif
        </td>
      <td>
        @if (Auth::guard('admin')->user()->can('ad_delete'))
        {{-- <button class="btn btn-danger" type="button" onclick="deleteTag({{ $cat->id }})" data-toggle="tooltip" data-placement="top" title="Delete">
             <i class="fas fa-trash-alt"></i>
                                                </button> --}}
            <form id="delete-form-{{ $cat->id }}" action="{{ route('admin.ad.delete',$cat->id) }}" method="POST" style="display: none;">
                @method('DELETE')
                @csrf

                                                </form>
                                                @endif
                                                @if (Auth::guard('admin')->user()->can('ad_update'))
                                          <a href="{{ route('admin.ad.edit',$cat->id) }}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                @endif
      </td>
    </tr>
    @endif
   @endforeach

                                                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
{{-- <div class="row">

                <form class="custom-validation" action="{{ route('admin.admins.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="row">

                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-body">


                                      <div class="row">
                  <div class="form-group col-md-4 col-sm-12">
                      <label for="name">Name</label>
                      <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group col-md-4 col-sm-12">
                      <label for="email">Email</label>
                      <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="Enter Email">
                  </div>
                  <div class="form-group col-md-4 col-sm-12">
                      <label for="email">Phone</label>
                      <input type="text" class="form-control form-control-sm" id="email" name="phone" placeholder="Enter Phone">
                  </div>
              </div>




                                  </div>

                              </div>
                          </div>

  <textarea id="summernote"><p>Hello Summernote</p></textarea>

                          <div class="col-lg-12">
                              <div class="float-right d-none d-md-block">
                                  <div class="form-group mb-4">
                                      <div>
                                          <button type="submit" class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                             Submit
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div> <!-- end col -->
                  </form>
           </div> --}}


@endsection

@section('script')
 <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

<script type="text/javascript">
    function deleteTag(id) {
        swal({
            title: 'Are you sure?',
            text: "You will not be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swal(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
            }
        })
    }
</script>
@endsection







