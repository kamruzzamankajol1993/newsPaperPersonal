@extends('user.master.master')
@section('title')
যোগাযোগ - নতুন সিলেট ডট কম
@stop
@section('body')
<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-5">

						<!-- breadcrumb -->
						<ul class="article-breadcrumb">
							<li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="#">Contact</a></li>
							
							
						</ul>
						<!-- /breadcrumb -->
						<!-- footer galery -->
							<div class="footer-widget galery-widget">
								<div class="widget-title">
									<h2 class="title">সম্পাদক ও প্রকাশক: ফারুক আহমদ</h2>
								</div>
								<ul>
									<li>বার্তা ও বাণিজ্যিক কার্য়ালয়: কাকলি শপিং সেন্টার (৪র্থ তলা), জল্লারপার রোড, জিন্দাবাজার, সিলেট।</li>
									<h5 style="color:white;">যোগাযোগ : +01707070370</h5>
									<h5 style="color:white;">ইমেইল : jaintabarta@yahoo.com, jaintabarta@gmail.com</h5>
									
								</ul>
							</div>
							<!-- /footer galery -->
					
			</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					<div class="col-md-7">
						<h4>Send Us A Message</h4>
						<form action="{{ route('message') }}" method="post">
							 @csrf
							<div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
           
			</div>
					<!-- /Aside Column -->
				</div><br>
				<!-- /ROW -->
				<div class="row mt-5">
					<div class="col-md-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1849404.1462698863!2d91.878262!3d25.131719!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552af8919883%3A0x6fc2fe33c01b3797!2sZindabazar%2C%20Sylhet%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1587282816923!5m2!1sen!2sus" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		
		
		
@endsection
