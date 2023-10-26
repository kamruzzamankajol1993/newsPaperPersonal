@extends('new_front.master.master')

@section('title')
Contributer
@endsection

@section('body')
<style>
    #team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
</style>
<div class="section" id="team" style="background-color:#EFF3F4;margin-top: 10px;padding-top: 15px">
    
    
     <div class="container">
        <h5 class="section-title h1">Contributer</h5>
        <div class="row">
            <!-- Team member -->
           @foreach($team_list_all as $all_team_list)
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center mt-3" >
                                    
                                       @if(empty($all_team_list->image))
                                    <p><img class=" img-fluid" style="margin-top:20px;" src=" https://bangla.dailybanglatimes.com/public/uploads/1673778726.png" alt="card image"></p>
                                     @else
                                       <p><img class=" img-fluid" style="margin-top:20px;" src="https://bangla.dailybanglatimes.com/{{$all_team_list->image}}" alt="card image"></p>
                                     @endif
                                    <h4 class="card-title">{{$all_team_list->name}}</h4>
                                    <h4 class="card-title">{{$all_team_list->position}}</h4>
                                
                                
                                 
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-5">
                         
                                    <p class="card-text mt-5 " style="margin-top:15px; text-align: justify;padding:10px;">{{$all_team_list->des}}</p>
                                    <ul class="list-inline">
                                          @if(empty($all_team_list->fblink))
      
      @else
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{$all_team_list->fblink}}">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        @endif
                                        					 @if(empty($all_team_list->twlink))
      
      @else
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{$all_team_list->twlink}}">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        @endif
                                        				 @if(empty($all_team_list->yolink))
      
      @else
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{$all_team_list->yolink}}">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        @endif
                                        		 @if(empty($all_team_list->inslink))
      
      @else
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="{{$all_team_list->inslink}}">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
           
        @endforeach
         

        </div>
    </div>

               </div>
@endsection