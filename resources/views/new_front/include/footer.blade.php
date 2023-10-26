<style>
	.popup {
    display: inline-block;
}
.popup .popuptext {
    visibility: hidden;
    width: 211px;
    background-color: #f5f6f7;
    color: #1d2129;
    text-align: center;
    border-radius: 6px;
    padding: 20px;
    position: relative;
    top: -9px;
    right: 473px;
}
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
</style>

<footer id="footer" >

	<!-- Top Footer -->
			<div id="top-footer" class="" style="background-color:#B3B6B7;">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- Column 1 -->
						
						<div class="col-sm-4 col-md-4" >

					
						
								<div class="footer-widget1 social-widget text-center"  style="margin-top: 60px;" >
		<ul id="llg">
								 
								    
								      

								
                                 @foreach($ss_link_list as $all_ss_link_list)
                               
                               @if($all_ss_link_list->linkn == 'Facebook')
                               
                               
                        <li><a href="{{$all_ss_link_list->name}}" class="facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                                        
                                        @elseif($all_ss_link_list->linkn == 'Twitter')
                        <li><a href="{{$all_ss_link_list->name}}" class="twitter"><i class="fa fa-twitter"></i></a></li>
                          @elseif($all_ss_link_list->linkn == 'Instagram')
                                   <li><a href="{{$all_ss_link_list->name}}" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    @elseif($all_ss_link_list->linkn == 'Linkedin')
                                   <li><a href="{{$all_ss_link_list->name}}" class="facebook"><i class="fa fa-linkedin"></i></a></li>
   @else
                        <li><a href="{{$all_ss_link_list->name}}" class="youtube"><i class="fa fa-youtube"></i></a></li>
                        
                        @endif
                        
                          @endforeach

								</ul>
							
								
							</div>
							<!-- /footer about -->



						</div>
						<!-- /Column 1 -->
					<div class="col-sm-4 col-md-4" >

						<div class="footer-widget about-widget text-center" id="mdis1">
								<div class="footer-logo">
<center>	<a href="#" class="logo"><img src="https://bangla.dailybanglatimes.com/{{ $bb_site_logo_footer }}" alt="" id="im1" style=""></a></center>

								</div>
							</div>



							<!-- footer about -->
							<div class="footer-widget about-widget" id="mdis4">
								<div class="footer-logo">
<center>	<a href="#" class="logo"><img src="https://bangla.dailybanglatimes.com/{{ $bb_site_logo_footer }}" alt="" id="im1" style=""></a></center>

								</div>
								
								
							</div>
						
								<div class="footer-widget1 social-widget text-center"  style="margin-bottom: 12px;" >
		<ul id="llg">
								 
								    
								                     <li>
                        <button class="btn btn-success btn-sm" target="_blank"  id="ggg"  onclick="window.location.href='https://bangla.dailybanglatimes.com'" >বাংলা</button>
                 
                    
                               </li> 
                <li>
                        <button class="btn btn-success btn-sm" target="_blank"  id="ggg"  onclick="window.location.href='https://dailybanglatimes.com'" >English</button>
                 
                    
                               </li> 
								
                               

								</ul>
							
								
							</div>
							<!-- /footer about -->



						</div>

							<div class="col-sm-4 col-md-4">
						    	<div class="footer-widget1 galery-widget text-center" id="mdis1" style="margin-bottom:20px">

								<div class="widget-title">
									<h5 style=""><u>Useful Links</u></h5>
								</div>
								<ul >
						          <p> <a href="{{route('term_and_condition')}}" style="color:Black;">Terms And Condition</a></p>
						          <p> <a href="{{route('privacy_policy')}}" style="color:Black;">Privacy Policy</a></p>

								</ul>
							</div>
							<!-- footer galery -->
							<div class="footer-widget galery-widget" id="mdis4">
								<div class="widget-title">
									<h5 style=""><u>Useful Links</u></h5>
								</div>
								<ul >
						       <p> <a href="{{route('term_and_condition')}}" style="color:Black;">Terms And Condition</a></p>
						          <p> <a href="{{route('privacy_policy')}}" style="color:Black;">Privacy Policy</a></p>

								</ul>
							</div>
							<!-- /footer galery -->

				        </div>

					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Top Footer -->
			<!-- Top Footer -->
			<div id="top-footer" class="" style="background-color:#242424;">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- Column 1 -->
						<div class="col-sm-12 col-md-6">
	<div class="footer-widget about-widget text-center" id="mdis1">
							<a href="{{route('about')}}"><h3 style="color:white;">About</h3></a>
							
							<p style="font-weight: lighter;text-align: justify;">{{$system_all->about_us}}</p>
							</div>



							<!-- footer about -->
							<div class="footer-widget about-widget" id="mdis4">
									<a href="{{route('about')}}"><h3 style="color:white;">About</h3></a>
										
									<p style="font-weight: lighter;text-align: justify;">{{$system_all->about_us}}</p>
							</div>
							



						</div>
						<div class="col-sm-12 col-md-2">
						    </div>
						<!-- /Column 1 -->
						<!--<div class="col-md-2">-->
						<!--	</div>-->

						<div class="col-sm-12 col-md-4">
						    	<div class="footer-widget1 galery-widget text-center" id="mdis1">
							<div class="widget-title">
									<a href="{{route('publisher_and_editor_in_chief')}}">	<h3 style="font-weight:300;color:white;"><b>Publisher and Editor-in-Chief:</b></h3></a>
				
								</div>
								<ul style="">
									<p style="color:white;font-weight: 200;" data-toggle="modal" data-target="#exampleModal"><span><i class="fa fa-address-card-o"></i> {{$system_all->editor_name}}</span></p>
										<p style="color:white;font-weight: 200;"><span><i class="fa fa-user"><a href="{{route('contributor')}}"><h3 style="color:white;">Contributer</h3></a></i></span></p>
								<p style="color:white;font-weight: 200;"><span><i class="fa fa-phone"> {{$system_all->phone_one}}</i></span></p>
									<p style="color:white;font-weight: 200;"><span><i class="fa fa-phone"> {{$system_all->Phone}}</i></span></p>
									<p style="color:white;font-weight: 200;"><span><i class="fa fa-envelope"></i> {{$system_all->Email}}</span> <a href=""></a></p>
										<p style="color:white;font-weight: 200;"><span><i class="fa fa-envelope"></i> {{$system_all->email_one}}</span> <a href=""></a></p>
										<span style="color:white;">USA Office:</span>
											<p style="color:white;font-weight: 200;"><span><i class="fa fa-map-marker"> {{$system_all->Address}}</i></span></p>
						<p style="font-weight: 200;color:white;">
										    <span><i class="fa fa-copyright" aria-hidden="true" style="color:black;"></i></span> 
										    <span style="color:black;">
Copyright &copy;2008-<script>document.write(new Date().getFullYear());</script>
<b>Daily Bangla Times</b><span style="padding-left:5px;"><img src="https://bangla.dailybanglatimes.com/{{ $bb_site_logo_footer }}" alt="" id="im1" style="height:20px;width:20px;"></span>  
</span>
</p>
								</ul>
							</div>
							
							<!-- footer galery -->
							<div class="footer-widget galery-widget" id="mdis4">
								<div class="widget-title">
									<a href="{{route('publisher_and_editor_in_chief')}}">	<h3 style="font-weight:300;color:white;"><b>Publisher and Editor-in-Chief:</b></h3></a>
	
								</div>
								<ul style="">
									<p style="color:white;font-weight: 200;" data-toggle="modal" data-target="#exampleModal"><span><img src="https://bangla.dailybanglatimes.com/public/bnn.jpg" height="17px;" width="17px;"/>  {{$system_all->editor_name}}</span></p>
	<p style="color:white;font-weight: 200;"><span><i class="fa fa-user"><a href="{{route('contributor')}}">  Contributer</a></i></span></p>
<p style="color:white;font-weight: 200;"><span><i class="fa fa-phone"> {{$system_all->phone_one}}</i></span></p>
									<p style="color:white;font-weight: 200;"><span><i class="fa fa-phone"> {{$system_all->Phone}}</i></span></p>
									<p style="color:white;font-weight: 200;"><span><i class="fa fa-envelope"></i> {{$system_all->Email}}</span> <a href=""></a></p>
										<p style="color:white;font-weight: 200;"><span><i class="fa fa-envelope"></i> {{$system_all->email_one}}</span> <a href=""></a></p>
										<span style="color:white;">USA Office:</span>
											<p style="color:white;font-weight: 200;"><span><i class="fa fa-map-marker"> {{$system_all->Address}}</i></span></p>
																		<p style="font-weight: 200;"><span><i class="fa fa-copyright" aria-hidden="true" style="color:white;"></i></span> <span style="color:white;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;2008-<script>document.write(new Date().getFullYear());</script> <b>Daily Bangla Times</b><span style="padding-left:5px;"><img src="https://bangla.dailybanglatimes.com/{{ $bb_site_logo_footer }}" alt="" id="im1" style="height:20px;width:20px;"></span>  
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
</p>

								</ul>
							</div>
							<!-- /footer galery -->

				        </div>

					</div>
					<!-- /ROW -->
				</div>

			</div>



			<div id="bottom-footer" class="section" style="background: ##000000;padding-top: 15px;
    padding-bottom: 10px;">

				<div class="container-fluid">

					<div class="row">


						<div class="col-sm-9 col-md-9">
							<ul class="footer-links">

								<p style="font-size: 13px;
    font-weight: 200;
    padding-right: 8px;"> এই ওয়েবসাইটে প্রকাশিত সংবাদ, আলোকচিত্র ও ভিডিওচিত্র বিনা অনুমতিতে অন্য কোথাও প্রকাশ করা সম্পূর্ণ বেআইনি। সকল স্বত্ব dailybanglatimes.com কর্তৃক সংরক্ষিত</p>

							</ul>
						</div>

						<div class="col-sm-3 col-md-3 ">

						</div>

					</div>

				</div>

			</div>

		</footer>

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <img src="https://bangla.dailybanglatimes.com/public/bnn.jpg" class="img-thumbnail"/>
      </div>
      
    </div>
  </div>
</div>

