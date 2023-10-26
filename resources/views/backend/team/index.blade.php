@extends('backend.master.master')

@section('title')
Team information | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">team Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li> --}}
                    <li class="breadcrumb-item active"></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
                        <div class="col-sm-6">
                            <div class="float-right d-md-block">
                                <div class="dropdown">
                                @if (Auth::guard('admin')->user()->can('team_add'))
<button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add team Information
                                    </button>

                                   
@endif
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
<div class="table-responsive">
    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                            <th>SL</th>
<th>Image</th>
                                    <th>Name</th>

                                    <th>Postition</th>

<th>About</th>
<th>Facebook</th>
<th>Twitter</th>
<th>Youtube</th>
<th>Instagram</th>
<th>Status</th>
<th>Position Status</th>
                                    <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($category_list as $user)


                                <tr>
                                   <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td><img src="{{asset('/')}}{{$user->image}}"/ style="height:40px;"></td>

                                <td>



                                    {{ $user->name }}


                                </td>
                                <td>{{ $user->position }}</td>
<td>{{ $user->des }}</td>
                                <td>



                                    {{ $user->fblink }}


                                </td>
                                 <td>



                                    {{ $user->twlink }}


                                </td>
                                 <td>



                                    {{ $user->yolink }}


                                </td>
                                 <td>



                                    {{ $user->inslink }}


                                </td>
                                
                                <td>



                                    {{ $user->status }}


                                </td>
                                
                                <td>
                                    {{ $user->p_status }}
                                    
                                    
                                </td>


                                    <td>
                                      @if (Auth::guard('admin')->user()->can('team_update'))

                    <button type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                          class="btn btn-primary waves-light waves-effect  btn-sm" >
                                          <i class="fas fa-pencil-alt"></i></button>


                                          <!-- Modal -->
                                          <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Team Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form class="custom-validation" action="{{ route('admin.team_list.update') }}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
<div class="row">
<div class="form-group col-md-12 col-sm-12">
                                    <label for="password"> Name</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $user->name }}" name="name" placeholder="Enter Name">

                        <input type="hidden" class="form-control form-control-sm" value="{{ $user->id }}" name="id" placeholder="Enter Name">
                                                            </div>

                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Position</label>
                                                            <input type="text" class="form-control form-control-sm" value="{{ $user->position }}"  name="position" placeholder="Enter Name">


                                                            </div>
                                                            
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Image</label>
                                                            <input type="file" class="form-control form-control-sm"  name="image" placeholder="Enter Name">

<img src="{{asset('/')}}{{$user->image}}"/ style="height:40px;">
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">About</label>
                                                            <textarea class="form-control form-control-sm" value=""  name="des" placeholder="Enter About">
                                                                
                                                                {{ $user->des }}
                                                                </textarea>


                                                            </div>
                                                            
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Facebook</label>
                                                            <input type="text" class="form-control form-control-sm" value="{{ $user->fblink }}"  name="fblink" placeholder="Enter Link">


                                                            </div>
                                                            
                                                              <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Twitter</label>
                                                            <input type="text" class="form-control form-control-sm" value="{{ $user->twlink }}"  name="twlink" placeholder="Enter Link">


                                                            </div>
                                                            
                                                            
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Youtube</label>
                                                            <input type="text" class="form-control form-control-sm" value="{{ $user->yolink }}"  name="yolink" placeholder="Enter Link">


                                                            </div>
                                                            
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Instagram</label>
                                                            <input type="text" class="form-control form-control-sm" value="{{ $user->inslink }}"  name="inslink" placeholder="Enter Link">


                                                            </div>


                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Status</label>
                                                            <select class="form-control form-control-sm"  name="status" placeholder="Enter Name">
                                                                <option value="12">--Please Select --</option>
                                                                <option value="Active" {{ $user->status == 'Active' ? 'Selected':''}}>Active</option>
                                                                <option value="InActive" {{ $user->status == 'InActive' ? 'Selected':''}}>InActive</option>
                                                            </select>


                                                            </div>
                                                            
                                                             <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Position Status</label>
                                                            <select class="form-control form-control-sm"  name="p_status" placeholder="Enter Name">
                                                                <option value="12">--Please Select --</option>
                                                                <option value="contributer" {{ $user->p_status == 'contributer' ? 'Selected':''}} >Contributer</option>
                                                                <option value="other" {{ $user->p_status == 'other' ? 'Selected':''}} >Other</option>
                                                                <option value="publisher_and_editor_in_chief" {{ $user->p_status == 'publisher_and_editor_in_chief' ? 'Selected':''}}>Publisher & Editor-in-chief</option>
                                                            </select>


                                                            </div>

                        </div>


                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-lg-12">

                                                <div>
                                                    <button type="submit" class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                                       Update
                                                    </button>
                                                </div>

                                    </div>
                                </div> <!-- end col -->
                            </form>
      </div>

    </div>
  </div>
</div>


@endif



@if($user->id == 3)

@else


                                  @if (Auth::guard('admin')->user()->can('team_delete'))

 <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.team_list.delete',$user->id) }}" method="POST" style="display: none;">
                      @method('DELETE')
                                                    @csrf

                                                </form>
                                                @endif
                                                @endif
                                    </td>
                                </tr>
@endforeach


                                        </tbody>
                                    </table>
</div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->






<!--  Modal content for the above example -->

  <!--  Large modal example -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Team Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.team_list.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="row">


                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-body">
                                    <div class="row">
<div class="form-group col-md-12 col-sm-12">
                                    <label for="password"> Name</label>
                        <input type="text" class="form-control form-control-sm"  name="name" placeholder="Enter Name">

             
                                                            </div>

                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Position</label>
                                                            <input type="text" class="form-control form-control-sm"   name="position" placeholder="Enter Name">


                                                            </div>
                                                            
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Image</label>
                                                            <input type="file" class="form-control form-control-sm"  name="image" placeholder="Enter Name">


                                                            </div>
                                                            
                                                            
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">About</label>
                                                            <textarea class="form-control form-control-sm" value=""  name="des" placeholder="Enter About">
                                                                
                                                            
                                                                </textarea>


                                                            </div>
                                                            
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Facebook</label>
                                                            <input type="text" class="form-control form-control-sm"   name="fblink" placeholder="Enter Link">


                                                            </div>
                                                            
                                                              <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Twitter</label>
                                                            <input type="text" class="form-control form-control-sm"   name="twlink" placeholder="Enter Link">


                                                            </div>
                                                            
                                                            
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Youtube</label>
                                                            <input type="text" class="form-control form-control-sm"   name="yolink" placeholder="Enter Link">


                                                            </div>
                                                            
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Instagram</label>
                                                            <input type="text" class="form-control form-control-sm"   name="inslink" placeholder="Enter Link">


                                                            </div>


                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Status</label>
                                                            <select class="form-control form-control-sm"  name="status" placeholder="Enter Name">
                                                                <option value="12">--Please Select --</option>
                                                                <option value="Active" >Active</option>
                                                                <option value="InActive" >InActive</option>
                                                            </select>


                                                            </div>
                                                            
                                                             <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Position Status</label>
                                                            <select class="form-control form-control-sm"  name="p_status" placeholder="Enter Name">
                                                                <option value="12">--Please Select --</option>
                                                                 <option value="contributer">Contributer</option>
                                                                <option value="other" >Other</option>
                                                                <option value="publisher_and_editor_in_chief" >Publisher & Editor-in-chief</option>
                                                            </select>


                                                            </div>

                        </div>
</div>
</div>



                          <div class="col-lg-12">

                                      <div>
                                          <button type="submit" class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                             Submit
                                          </button>
                                      </div>

                          </div>
                      </div> <!-- end col -->
                  </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')

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
<script type="text/javascript">
    $(document).ready(function () {

        $('#cat_type').on('change', function () {
            var cat_type = $(this).val();
//alert(cat_type);

$.ajax({
            url: "{{ route('category_type') }}",
            method: 'GET',
            data: {cat_type:cat_type},
            success: function(data) {
              $("#final_result_cat").html('');
              $("#final_result_cat").html(data);
            }
        });
    });
});
    </script>
@endsection







