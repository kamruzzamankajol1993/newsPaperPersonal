@extends('backend.master.master')

@section('title')
News List |{{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">News List</h4>

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
         <a href="{{ route('report') }}" class="btn btn-danger dropdown-toggle waves-effect  btn-sm waves-light" type="button" >
                    <i class="far fa-calendar-plus  mr-2"></i>Previous Page
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="get" action="{{ route('date_wise_report') }}">
                <div class="row">

                    <div class="col-5">
                         <select class="form-control" id="exampleFormControlSelect1"  name="user_id">
                             <option value="all">User List</option>
        <option value="all" {{$user_id =='all' ? 'selected':''}}>All</option>
        @foreach($user_list as $all_user)
      <option value="{{$all_user->id}}" {{$user_id ==$all_user->id ? 'selected':''}} >{{$all_user->name}}</option>
      @endforeach
      
    </select>
                    </div>

                    <div class="col-5">
                      <input type="date" class="form-control" value="{{$date_today}}" name="today_date"  placeholder="">
                    </div>

                    <div class="col-2">
                        <input type="submit" value="Search" class="btn btn-primary"/>
                    </div>
                </div>
            </form>
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

                                                    <th>Title</th>

                                                    <th>Category Name</th>
                                                      <th>Added by</th>
                                                    <th>Created At</th>

                                                    <th>Status</th>

                                                    <th>Action</th>
                                                            </tr>
                                                        </thead>


                                                        <tbody>

  <?php $counter=0;?>
    @foreach($all_post_search as $cat)
    <?php $counter++;?>
    <tr>
      <th scope="row">{{$counter}}</th>
      <td>{{$cat->title}}</td>
      <td>
        @foreach($cats as $cat1)
        @if($cat->category_id == $cat1->id)
        {{ $cat1->name }}
        @endif
        @endforeach
      </td>
      <td>
          <?php 
          
           $users = DB::table('admins')->where('id',$cat->user_id)->value('name');
          ?>
          {{$users}}
      </td>
<td>{{$cat->created_at}}</td>
      <td>
        @if($cat->status==0)
        Inactive
        @else
        Active
        @endif
      </td>
      <td>
        @if (Auth::guard('admin')->user()->can('news_view'))
        <a href="{{route('admin.news.detail',$cat->id)}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
        @endif

       

                                             
                                        
                                               
      </td>
    </tr>
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







