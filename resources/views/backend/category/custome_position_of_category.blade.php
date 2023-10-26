@extends('backend.master.master')

@section('title')
Custome Category  | {{ $ins_name }}
@endsection


@section('css')
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Custome Category</h4>

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
        <div class="card">

            <div class="card-body">

      <div class="row mt-5" >
         <div class="col-md-2"></div>
          <div class="col-md-8">

              <ul class="sort_menu list-group">
                  @foreach ($category_list as $cat)
                  <li class="list-group-item" data-id="{{$cat->id}}">
                      <span class="handle"></span>
                      <h6>{{$cat->name}}</h6>
                     </li>
                  @endforeach
              </ul>

          </div>
          <div class="col-md-2"></div>
      </div>
    </div>
</div>
</div>
  <style>
      .list-group-item {
          display: flex;
          align-items: center;
      }

      .highlight {
          background: #f7e7d3;
          min-height: 30px;
          list-style-type: none;
      }

      .handle {
          min-width: 18px;
          background: #607D8B;
          height: 15px;
          display: inline-block;
          cursor: move;
          margin-right: 10px;
      }
  </style>

@endsection

@section('script')

<script>
    $(document).ready(function(){

      function updateToDatabase(idString){
         $.ajaxSetup({ headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'}});

         $.ajax({
              url:'{{url('admin/custome_position_of_category_update')}}',
              method:'GET',
              data:{ids:idString},
              success:function(){
                 alert('Successfully updated')
                 //do whatever after success
              }
           })
      }

        var target = $('.sort_menu');
        target.sortable({
            handle: '.handle',
            placeholder: 'highlight',
            axis: "y",
            update: function (e, ui){
               var sortData = target.sortable('toArray',{ attribute: 'data-id'})
               updateToDatabase(sortData.join(','))
            }
        })

    })
</script>
@endsection







