@extends('backend.master.master')

@section('title')
Search Type |{{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<style>
    .hidden1 {
  display: none;
}
</style>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Search Type </h4>

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
       
            </div>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
           
                <div class="row">

                    <div class="col-5">
                        <select  name="search_type" id="search_type" class="form-control" required/>
                        <option>--- Search Type---</option>
                        <option value="Daily">Daily</option>
                        <option value="Monthly">Monthly</option>
                        <option value="Yearly">Yearly</option>
                        <option value="Date_Wise">Date Wise</option>
                        </select>
                    </div>

                    

                    
                </div>
            
            </div>
        </div>
    </div>
</div>

<div class="row  hidden1"  id="Daily">
    <div class="col-12">
        <div class="card">
     <div class="card-body">
         
         <form method="get" action="{{route('date_wise_report')}}">
             
           
             
           <div class="form-group">
    <label for="exampleFormControlSelect1">User List</label>
    <select class="form-control" id="exampleFormControlSelect1"  name="user_id">
        <option value="all">All</option>
        @foreach($user_list as $all_user)
      <option value="{{$all_user->id}}">{{$all_user->name}}</option>
      @endforeach
      
    </select>
  </div>
             
             <div class="form-group">
    <label for="exampleFormControlInput1">Date</label>
    <input type="date" class="form-control" value="<?php echo date('Y-m-d');  ?>" name="today_date" id="exampleFormControlInput1" placeholder="">
  </div>
  
  <button type="submit" class="btn btn-success mt-2">Search</button>
             
         </form>
               
    </div>
</div>
</div>
</div>

<div class="row  hidden1"  id="Monthly">
    <div class="col-12">
        <div class="card">
     <div class="card-body">
              <form method="get" action="{{route('monthly_report')}}">
             
           
             
           <div class="form-group">
    <label for="exampleFormControlSelect1">User List</label>
    <select class="form-control" id="exampleFormControlSelect1"  name="user_id">
        <option value="all">All</option>
        @foreach($user_list as $all_user)
      <option value="{{$all_user->id}}">{{$all_user->name}}</option>
      @endforeach
      
    </select>
  </div>
             
            <div class="form-group">
    <label for="exampleFormControlSelect1">Month Name</label>
    <select class="form-control" id="exampleFormControlSelect1"  name="month_name">
        <option value="">-- Please Select --</option>
           <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
      
    </select>
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Year Name</label>
    <select class="form-control" id="exampleFormControlSelect1"  name="year_name">
        <option value="">-- Please Select --</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
            <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
      
    </select>
  </div>
               <button type="submit" class="btn btn-success mt-2">Search</button>
         </form>
    </div>
</div>
</div>
</div>

<div class="row  hidden1"  id="Yearly">
    <div class="col-12">
        <div class="card">
     <div class="card-body">
           <form method="get" action="{{route('yearly_report')}}">
             
           
             
           <div class="form-group">
    <label for="exampleFormControlSelect1">User List</label>
    <select class="form-control" id="exampleFormControlSelect1"  name="user_id">
        <option value="all">All</option>
        @foreach($user_list as $all_user)
      <option value="{{$all_user->id}}">{{$all_user->name}}</option>
      @endforeach
      
    </select>
  </div>
             
          
  
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Year Name</label>
    <select class="form-control" id="exampleFormControlSelect1"  name="year_name">
        <option value="">-- Please Select --</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
            <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
      
    </select>
  </div>
            <button type="submit" class="btn btn-success mt-2">Search</button>   
         </form>
    </div>
</div>
</div>
</div>


<div class="row  hidden1"  id="Date_Wise">
    <div class="col-12">
        <div class="card">
     <div class="card-body">
            <form method="get" action="{{route('from_date_to_date_report')}}">
             
           
             
           <div class="form-group">
    <label for="exampleFormControlSelect1">User List</label>
    <select class="form-control" id="exampleFormControlSelect1"  name="user_id">
         <option value="all">All</option>
        @foreach($user_list as $all_user)
      <option value="{{$all_user->id}}">{{$all_user->name}}</option>
      @endforeach
      
    </select>
  </div>
             
             <div class="form-group">
    <label for="exampleFormControlInput1">From Date</label>
    <input type="date" class="form-control" value="<?php echo date('Y-m-d');  ?>" name="form_date" id="exampleFormControlInput1" placeholder="">
  </div>
  
  
    <div class="form-group">
    <label for="exampleFormControlInput1">To Date</label>
    <input type="date" class="form-control" value="<?php echo date('Y-m-d');  ?>" name="to_date" id="exampleFormControlInput1" placeholder="">
  </div>
               <button type="submit" class="btn btn-success mt-2">Search</button>
         </form>
    </div>
</div>
</div>
</div>



@endsection

@section('script')

<script>
    $(document).ready(function() {
  $('#search_type').change(function() {
      
      var get_search_value = $(this).val();
      
      
      if(get_search_value == 'Daily'){
          
           $('#Daily').removeClass('hidden1');
           $('#Monthly').addClass('hidden1');
           $('#Yearly').addClass('hidden1');
           $('#Date_Wise').addClass('hidden1');
      }
      
      
      if(get_search_value == 'Monthly'){
          
           $('#Daily').addClass('hidden1');
           $('#Monthly').removeClass('hidden1');
           $('#Yearly').addClass('hidden1');
           $('#Date_Wise').addClass('hidden1');
          
      }
      
       if(get_search_value == 'Yearly'){
           
           $('#Daily').addClass('hidden1');
           $('#Monthly').addClass('hidden1');
           $('#Yearly').removeClass('hidden1');
           $('#Date_Wise').addClass('hidden1');
          
      }
      
      
      if(get_search_value == 'Date_Wise'){
          
          
          $('#Daily').addClass('hidden1');
           $('#Monthly').addClass('hidden1');
           $('#Yearly').addClass('hidden1');
           $('#Date_Wise').removeClass('hidden1');
          
      }
      
     
  });
});  
</script>

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







