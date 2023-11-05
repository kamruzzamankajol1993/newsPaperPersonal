@if(session()->get('locale') == 'sp')
<!-- Header -->
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

 <!-- Header Top Start -->
 <div class="header-top section">
    <div class="container">
        <div class="row">

            <!-- Header Top Links Start -->
            <div class="header-top-links col-md-9 col-6">

                <!-- Header Links -->
                <ul class="header-links">
                    <li class="disabled block d-none d-md-block"><a href="#"><i class="fa fa-clock-o"></i><?php echo "$convertedDATE";?></a></li>
                    <li class="d-none d-md-block"><a href="#"><i class="fa fa-map-marker"></i><span class="weather-location">লন্ডন</span></a></li>

                </ul>

            </div><!-- Header Top Links End -->

            <!-- Header Top Social Start -->
            <div class="header-top-social col-md-3 col-6">

                <!-- Header Social -->
                <div class="header-social">

                    @foreach($ss_link_list as $all_ss_link_list)

                               @if($all_ss_link_list->linkn == 'Facebook')


                      <a href="{{$all_ss_link_list->name}}" class="facebook"><i
                                        class="fa fa-facebook"></i></a>

                                        @elseif($all_ss_link_list->linkn == 'Twitter')
                    <a href="{{$all_ss_link_list->name}}" class="twitter"><i class="fa fa-twitter"></i></a>

                    @elseif($all_ss_link_list->linkn == 'Linkedin')
                    <a href="{{$all_ss_link_list->name}}" class="Linkedin"><i class="fa fa-linkedin"></i></a>


                           @elseif($all_ss_link_list->linkn == 'Instagram')
                              <a href="{{$all_ss_link_list->name}}" class="instagram"><i class="fa fa-pinterest-p"></i></a>
   @else
                     <a href="{{$all_ss_link_list->name}}" class="youtube"><i class="fa fa-youtube-play"></i></a>

                        @endif

                          @endforeach


                    {{-- <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-vimeo"></i></a> --}}
                </div>

            </div><!-- Header Top Social End -->

        </div>
    </div>
</div><!-- Header Top End -->

<!-- Header Start -->
<div class="header-section section">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo -->
            <div class="header-logo col-md-4 d-none d-md-block">
                <a href="{{ route('home1') }}" class="logo"><img src="{{asset('/')}}{{ $logo }}" alt="Logo"></a>
            </div>

            <!-- Header Banner -->
            <div class="header-banner col-md-8 col-12">
                <div class="banner"><a href="#"><img src="{{ asset('/') }}{{ $homead }}" alt="Header Banner"></a></div>
            </div>

        </div>
    </div>
</div><!-- Header End -->

<!-- Menu Section Start -->
<div class="menu-section section bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="menu-section-wrap">

                    <!-- Main Menu Start -->
                    <div class="main-menu float-start d-none d-md-block">
                        <nav>
                            <ul>
                                <li><a href="{{ route('home1') }}"><i class="fa fa-home" style="font-size:24px;"></i></a></li>
@foreach($categories as $categoriesAll)
                                <li><a href="{{route('post',['id'=>$categoriesAll->id])}}">{{ $categoriesAll->name }}</a></li>
@endforeach
                                <li class="has-dropdown"><a href="{{route('post',['id'=>16])}}">{{ $extraCatName }}</a>

                                    <!-- Submenu Start -->
                                    <ul class="sub-menu">
                                        @foreach($latestPosts as $latestPostsAll)
                                        <li><a href="{{route('post',['id'=>$latestPostsAll->id])}}">{{ $latestPostsAll->name }}</a></li>
                                        @endforeach

                                    </ul><!-- Submenu End -->

                                </li>

                            </ul>
                        </nav>
                    </div><!-- Main Menu Start -->

                    <div class="mobile-logo d-md-none"><a href="{{ route('home1') }}"><img src="{{asset('/')}}{{ $logo }}" alt="Logo"></a></div>

                    <!-- Header Search -->
                    <div class="header-search float-end">

                        <!-- Search Toggle -->
                        <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                        <!-- Header Search Form -->
                        <div class="header-search-form">
                            <form action="{{ route('search') }}" method="get">
                                <input type="text" name="search" placeholder="Search Here">
                            </form>
                        </div>

                    </div>

                    <!-- Mobile Menu Wrap -->
                    <div class="mobile-menu-wrap d-none">
                        <nav>
                            <ul>

                                <li><a href="{{ route('home1') }}"><i class="fa fa-home" style="font-size:24px;"></i></a></li>
                                @foreach($categories as $categoriesAll)
                                                                <li><a href="{{route('post',['id'=>$categoriesAll->id])}}">{{ $categoriesAll->name }}</a></li>
                                @endforeach
                                <li class="has-dropdown"><a href="{{route('post',['id'=>16])}}">{{ $extraCatName }}</a>

                                    <!-- Submenu Start -->
                                    <ul class="sub-menu">
                                        @foreach($latestPosts as $latestPostsAll)
                                        <li><a href="{{route('post',['id'=>$latestPostsAll->id])}}">{{ $latestPostsAll->name }}</a></li>
                                        @endforeach

                                    </ul><!-- Submenu End -->

                                </li>

                            </ul>
                        </nav>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="mobile-menu"></div>

                </div>
            </div>
        </div>
    </div>
</div><!-- Menu Section End -->
