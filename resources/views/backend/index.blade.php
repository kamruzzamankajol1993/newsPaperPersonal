@extends('backend.master.master')

@section('title')
Dashboard
@endsection


@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li> --}}
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="total-revenue-chart"></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $total_category }}</span></h4>
                    <p class="text-muted mb-0">Total Category</p>
                </div>

            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="orders-chart"> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $total_draft }}</span></h4>
                    <p class="text-muted mb-0">Total  News In Draft</p>
                </div>
                
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="customers-chart"> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $total_news }}</span></h4>
                    <p class="text-muted mb-0">Total News</p>
                </div>

            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">

        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="growth-chart"></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $total_trust }}</span></h4>
                    <p class="text-muted mb-0">Total News In Trust</p>
                </div>

            </div>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->


<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">Latest News</div>
            <div class="card-body">

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                            <th>SL</th>

                                                    <th>Title</th>



                                                    <th>Status</th>

                                                    <th>Action</th>
                                                            </tr>
                                                        </thead>


                                                        <tbody>

  <?php $counter=0;?>
    @foreach($latest_news as $cat)
    <?php $counter++;?>
    <tr>
      <th scope="row">{{$counter}}</th>
      <td>{{$cat->title}}</td>


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

        @if (Auth::guard('admin')->user()->can('news_delete'))
        <button class="btn btn-danger" type="button" onclick="deleteTag({{ $cat->id }})" data-toggle="tooltip" data-placement="top" title="Delete">
             <i class="fas fa-trash-alt"></i>
                                                </button>
            <form id="delete-form-{{ $cat->id }}" action="{{ route('admin.news.delete',$cat->id) }}" method="POST" style="display: none;">
                @method('DELETE')
                @csrf

                                                </form>
                                                @endif

                                                @if (Auth::guard('admin')->user()->can('news_update'))
                                          <a href="{{ route('admin.news.edit',$cat->id) }}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
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

@endsection
