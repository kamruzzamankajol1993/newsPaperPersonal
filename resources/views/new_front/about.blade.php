@extends('new_front.master.master')

@section('title')

About
@endsection

@section('body')
<div class="section" style="background-color:#EFF3F4;margin-top: 10px;padding-top: 15px">
    <div class="container">
        <div class="row">
            <!--left-side-->
            @foreach($team_list_all as $all_team_list)
            <div class="col-sm-4 col-md-3">
                 <div class="card" style="">
                     
                     @if(empty($all_team_list->image))
                                           <img class="card-img-top" src=" https://bn.dailybanglatimes.com/public/uploads/1673778726.png" alt="Card image" style="width:100%">
                     @else
                      <img class="card-img-top" src="{{asset('/')}}{{$all_team_list->image}}" alt="Card image" style="width:100%">
                     @endif
                     
   
   
    
    
    <div class="card-body">
      <h4 class="card-title">{{$all_team_list->name}}</h4>
      <h6 class="card-title">{{$all_team_list->position}}</h6>
      <p class="card-text">{{$all_team_list->des}}</p>
      
      @if(empty($all_team_list->fblink))
      
      @else
      
								<span style="padding:10px;"><a href="{{$all_team_list->fblink}}"><i class="fa fa-facebook" style="font-size:20px;color:red;"></i></a></span>
								@endif
								
								 @if(empty($all_team_list->twlink))
      
      @else
								<span style="padding:10px;"><a href="{{$all_team_list->twlink}}"><i class="fa fa-twitter" style="font-size:20px;color:red;"></i></a></span>
								@endif
								 @if(empty($all_team_list->yolink))
      
      @else
						<span style="padding:10px;"><a href="{{$all_team_list->yolink}}"><i class="fa fa-youtube" style="font-size:20px;color:red;"></i></a></span>
						@endif
						 @if(empty($all_team_list->inslink))
      
      @else
							<span style="padding:10px;"><a href="{{$all_team_list->inslink}}"><i class="fa fa-instagram" style="font-size:20px;color:red;"></i> </a></span>
							@endif

							
    </div>
  </div>
                </div>
                @endforeach
     </div>
          </div>
               </div>
@endsection