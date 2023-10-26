@extends('user.layout.pageMaster')
@section('title')
Gellery
@stop
@section('content')
<?php 
use App\Http\Controllers\UserController;
$ob=new UserController;
?>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/styles/blog_single.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/styles/blog_single_responsive.css">
<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="{{route('home')}}">Home</a></li>
								<li>Gallery</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-12">
					
					<h1 class="text-center">Gallery</h1>
				</div>

				<!-- Blog Sidebar -->
				
			</div>
		</div><br><br>
		<div class="container">
			<div class="row ">
				
		@foreach($galleries as $cat)
				<!-- Event -->
				<div class="col-lg-3 mt-3 ">
					<div class="card" style="width: 18rem;">
  <img src="{{asset($cat->image)}}" class="card-img-top" alt="...">
  
  </div>
</div>
@endforeach	

				
                    
			</div>
		</div>

		</div>
		</div>
	</div>

@stop