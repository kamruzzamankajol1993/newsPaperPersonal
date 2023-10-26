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
						<div class="col-sm-6 col-md-3" id="f">

							<ul style="padding: 15px;">
								@foreach($f1 as $cat)
								<li style="    padding: 15px;
    box-sizing: content-box;color: 	black;"><a href="{{route('post',['id'=>$cat->id])}}" style="color:black;">

@if(session()->get('locale') == 'sp')
{{ $cat->eng_name }}

@else

{{ $cat->name }}

@endif


</a></li>
		@endforeach
							</ul>



						</div>
						<div class="col-sm-6 col-md-3" id="mdis1">

							<ul class="text-center">

							@foreach($f1 as $cat)
								<li style="    padding: 15px;
    box-sizing: content-box;color: 	black;"><a href="{{route('post',['id'=>$cat->id])}}" style="color:black;">

@if(session()->get('locale') == 'sp')
{{ $cat->eng_name }}

@else

{{ $cat->name }}

@endif

</a></li>
		@endforeach
							</ul>



						</div>
						<!-- /Column 1 -->
						<div class="col-sm-6 col-md-3" id="f">
							<ul style="padding: 15px;">
										@foreach($f2 as $cat)
								<li style="    padding: 15px;
    box-sizing: content-box;color: 	black;"><a href="{{route('post',['id'=>$cat->id])}}" style="color:black;">

@if(session()->get('locale') == 'sp')
{{ $cat->eng_name }}

@else

{{ $cat->name }}

@endif

</a></li>
		@endforeach
							</ul>
							</div>
							<div class="col-sm-6 col-md-3" id="mdis1">
							<ul class="text-center">
												@foreach($f2 as $cat)
								<li style="    padding: 15px;
    box-sizing: content-box;color: 	black;"><a href="{{route('post',['id'=>$cat->id])}}" style="color:black;">

@if(session()->get('locale') == 'sp')
{{ $cat->eng_name }}

@else

{{ $cat->name }}

@endif

</a></li>
		@endforeach
							</ul>
							</div>
						<div class="col-sm-6 col-md-3" id="f">
							<ul style="padding: 15px;">
											@foreach($f3 as $cat)
								<li style="    padding: 15px;
    box-sizing: content-box;color: 	black;"><a href="{{route('post',['id'=>$cat->id])}}" style="color:black;">
    @if(session()->get('locale') == 'sp')
    {{ $cat->eng_name }}

    @else

    {{ $cat->name }}

    @endif
</a></li>
		@endforeach
							</ul>
							</div>
							<div class="col-sm-6 col-md-3" id="mdis1">
							<ul class="text-center">
							 				@foreach($f3 as $cat)
								<li style="    padding: 15px;
    box-sizing: content-box;color: 	black;"><a href="{{route('post',['id'=>$cat->id])}}" style="color:black;">


@if(session()->get('locale') == 'sp')
{{ $cat->eng_name }}

@else

{{ $cat->name }}

@endif

</a></li>
		@endforeach
							</ul>
							</div>

						<div class="col-sm-12 col-md-3">
						    	<div class="footer-widget1 galery-widget text-center" id="mdis1" style="margin-bottom:20px">

								<div class="widget-title">
									<h3 style=""><b>Subscribe To Us</b></h3>
								</div>
								<ul style="color:white;">
									<form class="form-inline">

  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Email</label>
    <input type="email" class="form-control" id="inputPassword2" placeholder="Email" style="">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Subscribe
</button>
</form>

								</ul>
							</div>
							<!-- footer galery -->
							<div class="footer-widget galery-widget" id="mdis4">
								<div class="widget-title">
									<h3 style=""><b>Subscribe To Us</b></h3>
								</div>
								<ul style="color:white;">
									<form class="form-inline">

  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Email</label>
    <input type="email" class="form-control" id="inputPassword2" placeholder="Email" style="width: 170px">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Subscribe
</button>
</form>

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
						<div class="col-sm-12 col-md-4">
	<div class="footer-widget about-widget text-center" id="mdis1">
								<div class="footer-logo">
	<a href="#" class="logo"><img src="{{asset('/')}}{{ $logo }}" alt="" id="im1" style=""></a>

								</div>
							</div>



							<!-- footer about -->
							<div class="footer-widget about-widget" id="mdis4">
								<div class="footer-logo">
	<a href="#" class="logo"><img src="{{asset('/')}}{{ $logo }}" alt="" id="im1" style=""></a>

								</div>
							</div>
								<div class="footer-widget social-widget text-center" id="dis" style="    margin-right: 152px;
    margin-top: -30px;">

								<ul>
									<li><a href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>

									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>

								</ul>
							</div>
							<!-- /footer about -->



						</div>
						<!-- /Column 1 -->
						<div class="col-md-2">
							</div>

						<div class="col-sm-12 col-md-5">
						    	<div class="footer-widget1 galery-widget text-center" id="mdis1">
							<div class="widget-title">
									<h3 style="font-weight:300;color:white;"><b>Editor in Chief :</b></h3>
										<p style="font-weight: 200;color:white;"><span><i class="fa fa-copyright" aria-hidden="true" style="color:black;"></i></span> <span style="color:black;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;2010-<script>document.write(new Date().getFullYear());</script> <b>Bartabd</b><span style="padding-left:5px;"><img src="{{asset('/')}}{{ $logo }}" alt="" id="im1" style="height:20px;width:20px;"></span>  |
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
</p>
								</div>
								<ul style="">
									<p style="color:white;font-weight: 200;"><span><i class="fa fa-address-card-o"></i></span></p>
									<p style="color:white;font-weight: 200;"><span><i class="fa fa-phone"></i></span></p>
									<p style="color:white;font-weight: 200;"><span><i class="fa fa-envelope"></i></span> <a href="mailto:info@bartabd.news"></a></p>

								</ul>
							</div>
								<div class="footer-widget1 social-widget text-center" id="mdis1" style="margin-bottom: 12px;
    margin-top: 22px;" >

								<ul>
                                    <li> <select class="changeLang" style="width:80px;">
                                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>{{ trans('message.language_one')}}</option>

                                        <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>{{ trans('message.language_two')}}</option>
                                    </select></li>
									<li><a href="https://web.facebook.com/softtouchbd.net" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>

									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>

								</ul>
							</div>
							<!-- footer galery -->
							<div class="footer-widget galery-widget" id="mdis4">
								<div class="widget-title">
									<h3 style="font-weight:300;color:white;"><b>Editor in Chief :</b></h3>
										<p style="font-weight: 200;"><span><i class="fa fa-copyright" aria-hidden="true" style="color:white;"></i></span> <span style="color:white;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;2010-<script>document.write(new Date().getFullYear());</script> <b>Daily Bangla News</b><span style="padding-left:5px;"><img src="{{asset('/')}}{{ $logo }}" alt="" id="im1" style="height:20px;width:20px;"></span>  |
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
</p>
								</div>
								<ul style="">
									<p style="color:white;font-weight: 200;"><span><i class="fa fa-address-card-o"></i></span></p>
									<p style="color:white;font-weight: 200;"><span><i class="fa fa-phone"></i></span></p>
									<p style="color:white;font-weight: 200;"><span><i class="fa fa-envelope"></i></span> <a href="mailto:info@bartabd.news"></a></p>

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
    padding-right: 8px;"> এই ওয়েবসাইটে প্রকাশিত সংবাদ,আলোকচিত্র ও ভিডিওচিত্র বিনা অনুমতিতে অন্য কোথাও প্রকাশ করা সম্পূর্ণ  বেআইনি । সকল স্বত্ব dailybanglatimes.com কর্তৃক সংরক্ষিত</p>

							</ul>
						</div>

						<div class="col-sm-3 col-md-3 ">

						</div>

					</div>

				</div>

			</div>

		</footer>

		<!--headline-->
		<!--<footer id="" style="position: fixed;
  left: 0;
  bottom: 0;
  width: 40%;
 margin-bottom: 16px;
  color: white;
  text-align: center;">
			<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="popup">
    <span class="popuptext" id="myPopup">
      <p style="color:#BBA7A8;">Manage Notification</p>
      <hr>
      <button class="btn btn-block" style="background-color:#E54B4D;color:white">Subscribe</button>
    </span>
  </div>
					<div class="" style="width:50px;
    height: 50px;
    border-radius: 50%;background-color:#E54B4D;" onclick="pop()">

					<i class="fa fa-bell-o" style="font-size:36px;margin-top: 7px;"></i>
					</div>
			</div>
		</div>
		</footer>-->
		<!--headline-->

