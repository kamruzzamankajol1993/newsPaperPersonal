
@if(session()->get('locale') == 'sp')

<?php
date_default_timezone_set('Asia/Dhaka');
$currentDate = date("l, F j, Y , h:i:s a",time());
$engDATE = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Saturday', 'Sunday',
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
$bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে',
    'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', '
বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
);
$convertedDATE =$currentDate;
?>
@else

<?php
date_default_timezone_set('Asia/Dhaka');
$currentDate = date("l, F j, Y ,
সময়: h:i:s মিনিট",time());
$engDATE = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Saturday', 'Sunday',
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
$bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে',
    'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', '
বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
);
$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);

?>
@endif

<style>

    .search-button-responsive{
        display:none;
    }
    .custom_bg_color{
            background: red;
    }

    @media screen and (min-width: 1199px) and (max-width: 2024px) {
        .nav-logo{
            display:none;
        }
    }
    @media screen and (min-width: 768px) and (max-width: 1199px) {
        .search-button-responsive{
            display: flex;

        }
        .nav-logo{
            display:none;
        }
        .search-button-responsive > button{
            padding: 4px 8px !important;
            background-color: #B30F0F;
            color: white;
            border-color: #B30F0F;
        }
    }

    .image-betwen-icon{
        width:140%;
    }
    .custom-padding-srbtn{
        padding: 4px 25px !important;
    }
    @media screen and (min-width: 768px) and (max-width: 1199px)  {
        #header #nav-header {

            height: 102px;

        }

    }
    @media screen and (min-width: 768px) and (max-width: 2024px)  {
        .logo-betwn-icon{
            display: none !important;
        }

    }

    @media screen and (min-width: 0px) and (max-width: 766px) {
        .content-news-logo { display: none; }
        #top-header{
            display:none;
        }
        #nav-header {
            background-color:white !important;

        }
        .button-nav > button{
            color:black;

        }
        .image-betwen-icon{
            display: inline-block;

        }

    }
    @media screen and (min-width: 0px) and (max-width: 768px) {
        .image-betwen-icon{

            margin-left:  64%;
        }
    }
    @media screen and (min-width: 0px) and (max-width: 700px) {
        .image-betwen-icon{

            margin-left: 44%;
        }
    }
    @media screen and (min-width:0px) and (max-width: 580px) {
        .image-betwen-icon{

            margin-left: 14%;
        }
    }
    @media screen and (min-width:0px) and (max-width: 471px) {
        .image-betwen-icon{

            margin-left: 10%;
            width:120%;
        }
    }
    @media screen and (min-width:0px) and (max-width: 425px) {
        .image-betwen-icon{

            margin-left: 5%;
            width:110%;
        }

    }
    @media screen and (min-width:0px) and (max-width: 402px) {
        .image-betwen-icon{

    width:100%;
    margin-top: 13px;
        }
        .logo-betwn-icon{
            width:50%;
             }
    }
    @media screen and (min-width:0px) and (max-width: 320px) {
        .image-betwen-icon{
            width:80%;
        }
        .logo-betwn-icon{
            width: 44%;
            padding-top: 11px;
        }
    }
    .custom-size{
        width: 30px;
        height: 40px;
        line-height: 40px;
        margin: auto;
        display: block;
        font-size: 24px;
        cursor: pointer;
        margin: 0;

    }
    @media only screen and (max-width: 1118px) {

        .nav > li > a {

            padding: 10px 12px;
        }
    }
    @media only screen and (max-width: 980px){
        .nav > li > a {
            padding: 5px 12px;
        }
    }
</style>

<header id="" Style="margin-left: 29PX;">
    <!-- Top Header -->
    <div id="top-header" style="
    margin-top: 5px;
">
        <div class="container">
            <div class="header-links">
                <ul>

                    <li>
                        <b><?php echo "$convertedDATE";?></b>
                    </li>


                </ul>
            </div>
             <div class="header-links" style="padding-left: 58px;">
          <form class="" method="GET" action="{{ route('search') }}">
                <div class="wrap">
   <div class="search">

    @if(session()->get('locale') == 'sp')
        <input type="text" class="searchTerm" placeholder="Search Here" value="{{ isset($query) ? $query : '' }}" name="query">
        @else
          <input type="text" class="searchTerm" placeholder="এখানে অনুসন্ধান করুন" value="{{ isset($query) ? $query : '' }}" name="query">
    @endif

    <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
    </form>

            </div>
            <div class="header-social">
                <ul>

                    <li> <select class="changeLang" style="width:45px;">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>{{ trans('message.language_one')}}</option>

                        <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>{{ trans('message.language_two')}}</option>
                    </select></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Top Header -->

    <!-- Center Header -->
    <div id="center-header">
        <div class="container">
            <div class="header-logo content-news-logo">

                <center><div style="">
                    <a href="{{ route('home1') }}" class="logo"><img src="{{asset('/')}}{{$logo}}"
                                                                    alt=""></a>

                </div></center>


            </div>


        </div>
    </div>
   <div id="" class="nav-header1" style="margin-bottom: 10px;">

            <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12" style="background-color:green;">

                    <div class="last" style="">

                    <h6 style="font-size:20px;padding-left: 13px;padding-top:18px;">

                        @if(session()->get('locale') == 'sp')
Latest:
                        @else

                        সর্বশেষ:

                        @endif
</h6>
                    </div>
                    <div class="" style="overflow: hidden;margin-top:9px;background-color:green">
                     <marquee behavior="" direction="" onmouseover="this.stop();"
           onmouseout="this.start();">
                     <div style="display: inline;color:white;"  id="districts" class="bg-dark text-light">
             @foreach($footers as $headline)
             	@if($loop->first && str_replace(' ', '', $headline->title) !== str_replace(' ', '', $footers[2]->title))
        <li style="display: inline;padding: 10px;">
            	<img src="{{asset('/')}}{{$headline->cover_image}}" alt="" style="height:60px;width:85px;">
            <span style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$headline->id])}}" style="color:white;" class="last1">{{ $headline->title }}</a></span>
        </li>
        	@elseif(!$loop->first && str_replace(' ', '', $headline->title) !== str_replace(' ', '', $footers[$loop->index-1]->title))
        	  <li style="display: inline;padding: 10px;">
            	<img src="{{asset('/')}}{{$headline->cover_image}}" alt="" style="height:60px;width:85px;">
            <span style="padding-left: 10px;"><a href="{{route('singlePost',['id'=>$headline->id])}}" style="color:white;" class="last1">{{ $headline->title }}</a></span>
        </li>
        	@endif
            @endforeach


                    </div>
                    </marquee>
                       </div>


                </div>
        </div>

    </div>
</div>
    <!-- /Center Header -->
    <!-- /Center Header -->

    <!-- Nav Header -->
    <!--mobile-->
<div id="nav-header" class="mdis1">
        <div class="container ">
            <nav id="main-nav">
                <div class="nav-logo">
                     <div class="button-nav" >
                            <button class="nav-collapse-btn" style=""><i class="fa fa-close" style="color: #ef233c;
    font-size: 25px;"></i></button>
                        </div>
                  <div class="nav-logo">
                        <a href="{{ route('home1') }}" class="logo"><img src="{{asset('/')}}{{ $logo }}" alt="" > </a>
                    </div>

                </div>
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="{{ route('home1') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i>
                        </a></li>
                   @foreach($categories as $category)
                            <li><a href="{{route('post',['id'=>$category->id])}}">

                                @if(session()->get('locale') == 'sp')
                                {{ $category->eng_name }}

@else

                                {{ $category->name }}

                                @endif


                            </a></li>
                        @endforeach



                         @foreach($latestPosts1 as $category)
    <li class="dropdown">
        <a class="dropdown-toggle"href="#" data-toggle="dropdown" style="">


            @if(session()->get('locale') == 'sp')
            {{ $category->eng_name }}

@else

            {{ $category->name }}

            @endif



            <span style="padding-left: 5px;"><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
</a>
<ul class="dropdown-menu p-0" id="dropdown-background" style="">

    @foreach($latestPosts as $subcat)


                        <li >
    <a class="dropdown-item" href="{{route('post',['id'=>$subcat->id])}}" style="color:black;background-color: white;">


        @if(session()->get('locale') == 'sp')
        {{ $subcat->eng_name }}

@else

        {{ $subcat->name }}

        @endif



</a></li>
@endforeach
                </ul>



    </li>
                        @endforeach


                </ul>
                <div class="footer-widget social-widget text-center" id="mdis1">

                    <ul>
                        <li><a href="https://web.facebook.com/softtouchbd.net" class="facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>

                    </ul>
                </div>
            </nav>
            <div class="button-nav">
                <button class="nav-collapse-btn"><i class="custom-size fa fa-bars"></i></button>
                <a href="{{ route('home1') }}" class="logo logo-betwn-icon ml-3" style="display:inline-block;"><img class="img-fluid image-betwen-icon mr-auto" src="{{asset('/')}}{{ $logo }}"
                                                                    alt=""></a>


                <button class="search-collapse-btn"><i class="custom-size fa fa-search"></i></button>
                <div class="search-form">
                    <form method="GET" action="{{ route('search') }}">
                        <input class="input" type="text" value="{{ isset($query) ? $query : '' }}" name="query"
                               placeholder="Search">
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!--mobile-->
    <div class="container custom_bg_color" >
            <nav id="main-nav">
                <div class="nav-logo">
                    <a href="{{ route('home1') }}" class="logo"><img src="{{asset('/')}}{{$logo}}"
                                                                    alt=""></a>
                    <div class="button-nav">
                        <button class="nav-collapse-btn" style="padding-left: 10px;"><i class="fa fa-close" style="color: #ef233c;
    font-size: 25px;"></i></button>
                    </div>
                </div>
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="{{ route('home1') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i>
                        </a></li>
                   @foreach($categories as $category)
                            <li><a href="{{route('post',['id'=>$category->id])}}">



                                @if(session()->get('locale') == 'sp')
                                {{ $category->eng_name }}

@else

                                {{ $category->name }}

                                @endif

                            </a></li>
                        @endforeach


<li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" style="">
                        @if(session()->get('locale') == 'sp')
Other
                        @else
                        বিবিধ
                        @endif

                        <span style="padding-left: 5px;"><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                    </a>
                    <ul class="dropdown-menu p-0" id="dropdown-background" style="">

                         @foreach($latestPosts as $category)
    <li><a class="dropdown-item" href="{{route('post',['id'=>$category->id])}}" style="padding: 16px 5px;padding-bottom: 0px;color: black;background: white;">

        @if(session()->get('locale') == 'sp')
        {{ $category->eng_name }}

@else

        {{ $category->name }}

        @endif


    </a></li>
                        @endforeach
</ul>
                </li>
                </ul>
                <div class="footer-widget social-widget text-center" id="mdis1">

                    <ul>
                        <li><a href="" class="facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>

                    </ul>


                </div>

            </nav>



        </div>
    <script>
        var $collapse = $('.nav-collapse-btn');
        var $search = $('.search-collapse-btn');
        var $button_nav = $('.button-nav');
        var $image_betwen_icon =('.image-betwen-icon');
        $(window).resize(function() {

            console.log(window.innerWidth);
            if (window.innerWidth <= 882){
                $collapse.addClass('pull-left');
                $search.addClass('pull-right');
                $button_nav.css("float", "none");

            }
            else {
                $collapse.removeClass('pull-left');
                $search.removeClass('pull-right');
                $button_nav.css("float", "right");
            }
        });

        $(document).ready(function () {

            var $collapse = $('.nav-collapse-btn');
            var $search = $('.search-collapse-btn');

            if (window.innerWidth <= 882){
                $collapse.addClass('pull-left');
                $search.addClass('pull-right');
                 $button_nav.css("float",'none');

            }
            else {
                $collapse.removeClass('pull-left');
                $search.removeClass('pull-right');

            }

        })


    </script>
    <!-- /Nav Header -->

</header>
