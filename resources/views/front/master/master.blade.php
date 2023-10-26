<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
         <meta property="og:url"           content="https://www.dailybanglatimes.com/" />
         <meta property="og:type"          content="NEWS" />
         <meta property="og:title"         content="Daily Bangla Time-" />
         <meta property="og:description"   content="dailybanglatimes.com is one of the most reliable and popular local daily newspaper. We provide latest reliable local news about various categories for 24/7 days." />
         <meta property="og:image"         content="dailybanglatimes.com/public/front/img/logo-ol3t6tqtnvngxth3oqe5r1rnder00ua1dt7qcy4lj6_182x70.png"  />
    <meta property="og:image:width" content="200"/>
    <meta property="og:image:height" content="200"/>

		<title>@yield('title')</title>
        <link rel="icon" href="{{ asset('/') }}{{ $icon }}" />
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/front/css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/front/css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/front/css/owl.theme.default.css" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('/')}}public/front/css/font-awesome.min.css">
 <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('/')}}public/front/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
       <style>
		.top-date{
		float: right;font-weight:400;color: #343a40;font-size:15px;margin-top:-3px;
		}
		.dropdown-menu > li a:hover, .dropdown-menu > li.show {
			background:black;
			color: white;
		}
		.navbar-dark .navbar-nav .nav-link {
			color: #f8f9fa;
		}
		label{
			font-weight: bold;
		}
		.label-optional{
			font-size: 13px;
		}
		.task-menu{
			margin-top: 2px;
			position: absolute;
			background: white;
			z-index: 1;
			float: right;
			right: 0px;
			box-shadow: 0 0 1px 0px;
			display: none;

		}
		.task-btn{
			color:#428bca;
			cursor: pointer;
			margin-bottom: 0px;
			font-size: 20px;
			padding-top: 5px;
			padding-left: 7px;
			padding-right: 7px;
		}
		.task-btn:active{
			color:#428bca;
			border: 0px;
		}
		.task-icon{
			color:#428bca;
		}
		.task-label{
			color:#428bca;

		}
		.dropdown-item{
			font-size: 14px;
		}
		.action-btn{
			width: 90px;
			border-radius: 0px;
			height: 30px;
			font-size: 15px;
			padding-top: 4px;
			text-align: center;
			background: #428bca;
			color: white;
			cursor: pointer;
		}
		.action-menu{
			margin-right:60px;margin-top:5px;
		}
		::-webkit-scrollbar{
		    display: none;
		  }

       .footer-logo img:hover {
  filter:none;
}



	</style>
	<style>
	.carousel {
    margin-bottom: 0;

}
/* The controlsy */
.carousel-control {
	left: -12px;
    height: 40px;
	width: 40px;
    background: none repeat scroll 0 0 #222222;
    border: 4px solid #FFFFFF;
    border-radius: 23px 23px 23px 23px;
    margin-top: 60px;
}
.carousel-control.right {
	right: -12px;
}
/* The indicators */
.carousel-indicators {
	right: 50%;
	top: auto;
	bottom: -19px;
	margin-right: -19px;
}
/* The colour of the indicators */
.carousel-indicators li {
	background: #cecece;
}
.carousel-indicators .active {
background: #428bca;
}
</style>

	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
	<script src="{{asset('/')}}public/front/js/bongabdo.js"></script>
	<script type="text/javascript">

	$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});

	$(document).ready(function() {
    $('.mw').carousel({
        interval: 5000
    })
});

    $(document).ready(function(){
    $('.bongabdo').bongabdo({
    	showSeason: true,
    format: "DD-MM [YY]"
    });
    });
</script>
	<!--<script src="{{asset('/')}}public/front/js/jquery.min.js"></script>-->
    </head>
	<body>

		<!-- Header -->
		@include('front.include.header1')
		<!-- /Header -->

		@yield('body')



		<!-- FOOTER -->
		@include('front.include.footer')

		<!-- /FOOTER -->



		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->

		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->

		<!-- jQuery Plugins -->
		<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=2323306957775742&autoLogAppEvents=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <script type="text/javascript">
$(document).ready(function () {
   //Disable cut copy paste
   /* $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });


    $("body").on("contextmenu",function(e){
        return false;
    });*/

});
</script>
<script src="https://cdn.by.wonderpush.com/sdk/1.1/wonderpush-loader.min.js" async></script>
<script>
window.WonderPush = window.WonderPush || [];
WonderPush.push(["init", {
    webKey: "dabe8ab23c04efad297305b96eb9f55b4fa54e5b586be8723121f553e19b9718",
}]);
</script>

		<script src="{{asset('/')}}public/front/js/bootstrap.min.js"></script>
		<script src="{{asset('/')}}public/front/js/owl.carousel.min.js"></script>
		<script src="{{asset('/')}}public/front/js/main.js"></script>
		<script src="{{asset('/')}}public/front/js/bootnavbar.js"></script>
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script type="text/javascript">

            var url = "{{ route('changeLang') }}";

            $(".changeLang").change(function(){
                window.location.href = url + "?lang="+ $(this).val();
            });

        </script>
	</body>
</html>
