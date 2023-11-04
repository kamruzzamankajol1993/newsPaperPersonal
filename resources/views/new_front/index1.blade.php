@extends('new_front.master.master')

@section('title')
TV19 Online
@endsection

@section('body')

@include('new_front.include.banner')
<?php
$engDATE = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Saturday', 'Sunday',
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
$bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে',
    'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', '
বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
);

?>
    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-8 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head feature-head">

                            <!-- Title -->
                            <h4 class="title">বাংলাদেশ</h4>



                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="feature-cat-1">

                                    <div class="row">

                                        <!-- Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            @foreach($bangladeshPartOne as $bangladeshPartOnes)

                                            <!-- Post Start -->
                                            <div class="post feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ route('singlePost',$bangladeshPartOnes->id) }}"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="{{ route('singlePost',$bangladeshPartOnes->id) }}">{{ $bangladeshPartOnes->title }}</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">

                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$bangladeshPartOnes->created_at->format('d F Y')) }}</span>

                                                        </div>

                                                        <!-- Description -->
                                                        <p>{!!  substr(strip_tags($bangladeshPartOnes->paragraph), 0, 150) !!}.</p>

                                                    </div>

                                                </div>
                                            </div><!-- Post End -->

                                            @endforeach



                                        </div><!-- Post Wrapper End -->

                                        <!-- Small Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            @foreach($bangladeshPartTwo as $bangladeshPartOnes)

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ route('singlePost',$bangladeshPartOnes->id) }}"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="{{ route('singlePost',$bangladeshPartOnes->id) }}">{{ $bangladeshPartOnes->title }}</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$bangladeshPartOnes->created_at->format('d F Y')) }}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->
@endforeach


                                        </div><!-- Small Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->



                            </div><!-- Tab Content End-->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Sidebar Start -->


                <!-- Sidebar Start -->
                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Single Sidebar -->
                    <div class="single-sidebar">

                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">

                            <!-- Sidebar Block Head Start -->
                            <div class="head education-head">

                                <!-- Tab List -->
                                <div class="sidebar-tab-list education-sidebar-tab-list nav">
                                    <a class="active" data-bs-toggle="tab" href="#latest-news">সর্বশেষ খবর</a>
                                    <a data-bs-toggle="tab" href="#popular-news">জনপ্রিয় খবর</a>
                                </div>

                            </div><!-- Sidebar Block Head End -->

                            <!-- Sidebar Block Body Start -->
                            <div class="body">

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="latest-news">

                                        @foreach($latestheadlines as $latestheadliness)

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="{{ route('singlePost',$latestheadliness->id) }}"><img src="{{ asset('/') }}{{ $latestheadliness->cover_image }}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="{{ route('singlePost',$latestheadliness->id) }}">{{ $latestheadliness->title }}</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$latestheadliness->created_at->format('d F Y')) }}</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->
                                        @endforeach



                                    </div>
                                    <div class="tab-pane fade" id="popular-news">
                                        @foreach($famousheadlines as $famousheadliness)
                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="{{ route('singlePost',$famousheadliness->id) }}"><img src="{{ asset('/') }}{{ $famousheadliness->cover_image }}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="{{ route('singlePost',$famousheadliness->id) }}">{{ $famousheadliness->title }}</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$famousheadliness->created_at->format('d F Y')) }}</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->
                                      @endforeach


                                    </div>
                                </div>

                            </div><!-- Sidebar Block Body End -->

                        </div>

                    </div>

                     <!-- Single Sidebar -->
                     <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Banner -->
                        <a href="#" class="sidebar-banner"><img src="{{ asset('/') }}public/newfront/img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

                    </div>

                </div><!-- Sidebar End -->


                <!-- Sidebar End -->

            </div><!-- Feature Post Row End -->

            <!-- Life Style Post Row Start -->
            <div class="row ">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head life-style-head">

                            <!-- Title -->
                            <h4 class="title">কিটো ডায়েট/বাবলুর ইতালিয়ান রেসিপি</h4>



                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="life-style-cat-1">

                                    <div class="row">

                                        <!-- Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            @foreach($kitoPartOne as $bangladeshPartOnes)

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                     <!-- Image -->
                                                     <a class="image" href="{{ route('singlePost',$bangladeshPartOnes->id) }}"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></a>

                                                     <!-- Content -->
                                                     <div class="content">

                                                         <!-- Title -->
                                                         <h4 class="title"><a href="{{ route('singlePost',$bangladeshPartOnes->id) }}">{{ $bangladeshPartOnes->title }}</a></h4>

                                                         <!-- Meta -->
                                                         <div class="meta fix">

                                                             <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$bangladeshPartOnes->created_at->format('d F Y')) }}</span>

                                                         </div>

                                                         <!-- Description -->
                                                         <p>{!!  substr(strip_tags($bangladeshPartOnes->paragraph), 0, 150) !!}.</p>

                                                     </div>

                                                </div>
                                            </div><!-- Overlay Post End -->
@endforeach


                                        </div><!-- Post Wrapper End -->

                                        <!-- Small Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            @foreach($kitoPartTwo as $bangladeshPartOnes)

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ route('singlePost',$bangladeshPartOnes->id) }}"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="{{ route('singlePost',$bangladeshPartOnes->id) }}">{{ $bangladeshPartOnes->title }}</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$bangladeshPartOnes->created_at->format('d F Y')) }}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                            @endforeach



                                        </div><!-- Small Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->



                            </div><!-- Tab Content End-->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head life-style-head">

                                    <!-- Title -->
                                    <h4 class="title">মতামত</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                        <!-- Sidebar Post Slider Start -->
                                        <div class="sidebar-post-carousel post-block-carousel life-style-post-carousel">

                                            @foreach($commentPartOne as $bangladeshPartOnes)

                                            <!-- Post Start -->
                                            <div class="post life-style-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ route('singlePost',$bangladeshPartOnes->id) }}"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="{{ route('singlePost',$bangladeshPartOnes->id) }}">{{ $bangladeshPartOnes->title }}</a></h4>

                                                        <!-- Read More Button -->
                                                        <a href="{{ route('singlePost',$bangladeshPartOnes->id) }}" class="read-more">পড়া চালিয়ে যান</a>

                                                    </div>

                                                </div>
                                            </div><!-- Post End -->

                                            @endforeach



                                        </div><!-- Sidebar Post Slider End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{ asset('/') }}public/newfront/img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Life Style Post Row End -->



            <!--new code start-->

            <!-- Life Style Post Row Start -->
            <div class="row ">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head life-style-head">

                            <!-- Title -->
                            <h4 class="title">বিশেষ অনুষ্ঠান</h4>



                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="life-style-cat-1">

                                    <div class="row">

                                        <!-- Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            @foreach($specialPartOne as $bangladeshPartOnes)

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                     <!-- Image -->
                                                     <a class="image" href="{{ route('singlePost',$bangladeshPartOnes->id) }}"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></a>

                                                     <!-- Content -->
                                                     <div class="content">

                                                         <!-- Title -->
                                                         <h4 class="title"><a href="{{ route('singlePost',$bangladeshPartOnes->id) }}">{{ $bangladeshPartOnes->title }}</a></h4>

                                                         <!-- Meta -->
                                                         <div class="meta fix">

                                                             <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$bangladeshPartOnes->created_at->format('d F Y')) }}</span>

                                                         </div>

                                                         <!-- Description -->
                                                         <p>{!!  substr(strip_tags($bangladeshPartOnes->paragraph), 0, 150) !!}.</p>

                                                     </div>

                                                </div>
                                            </div><!-- Overlay Post End -->
@endforeach


                                        </div><!-- Post Wrapper End -->

                                        <!-- Small Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            @foreach($specialPartTwo as $bangladeshPartOnes)

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ route('singlePost',$bangladeshPartOnes->id) }}"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="{{ route('singlePost',$bangladeshPartOnes->id) }}">{{ $bangladeshPartOnes->title }}</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$bangladeshPartOnes->created_at->format('d F Y')) }}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                            @endforeach



                                        </div><!-- Small Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->



                            </div><!-- Tab Content End-->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head life-style-head">

                                    <!-- Title -->
                                    <h4 class="title">ফেসবুক পেজ</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">



                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{ asset('/') }}public/newfront/img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Life Style Post Row End -->

            <!-- new code end-->

            <!-- Education & Madical Post Row Start -->
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">sports</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Small Post Start -->
                            <div class="post sports-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a class="image" href="post-details.html"><img src="img/post/post-69.jpg" alt="post"></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="post-details.html">Winning T20 Farewell To Safari.</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <a class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                        </div>

                                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. </p>

                                        <!-- Read More -->
                                        <a href="post-details.html" class="read-more">read-more</a>

                                    </div>

                                </div>
                            </div><!-- Small Post End -->

                            <!-- Small Post Start -->
                            <div class="post post-small post-list sports-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a class="image" href="post-details.html"><img src="img/post/post-40.jpg" alt="post"></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health..</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Small Post End -->

                            <!-- Small Post Start -->
                            <div class="post post-small post-list sports-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a class="image" href="post-details.html"><img src="img/post/post-41.jpg" alt="post"></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Small Post End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">sports</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Small Post Start -->
                            <div class="post sports-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a class="image" href="post-details.html"><img src="img/post/post-69.jpg" alt="post"></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="post-details.html">Winning T20 Farewell To Safari.</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <a class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                        </div>

                                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. </p>

                                        <!-- Read More -->
                                        <a href="post-details.html" class="read-more">read-more</a>

                                    </div>

                                </div>
                            </div><!-- Small Post End -->

                            <!-- Small Post Start -->
                            <div class="post post-small post-list sports-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a class="image" href="post-details.html"><img src="img/post/post-40.jpg" alt="post"></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health..</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Small Post End -->

                            <!-- Small Post Start -->
                            <div class="post post-small post-list sports-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a class="image" href="post-details.html"><img src="img/post/post-41.jpg" alt="post"></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Small Post End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">sports</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Small Post Start -->
                            <div class="post sports-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a class="image" href="post-details.html"><img src="img/post/post-69.jpg" alt="post"></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="post-details.html">Winning T20 Farewell To Safari.</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <a class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                        </div>

                                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. </p>

                                        <!-- Read More -->
                                        <a href="post-details.html" class="read-more">read-more</a>

                                    </div>

                                </div>
                            </div><!-- Small Post End -->

                            <!-- Small Post Start -->
                            <div class="post post-small post-list sports-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a class="image" href="post-details.html"><img src="img/post/post-40.jpg" alt="post"></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health..</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Small Post End -->

                            <!-- Small Post Start -->
                            <div class="post post-small post-list sports-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a class="image" href="post-details.html"><img src="img/post/post-41.jpg" alt="post"></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Small Post End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

            </div><!-- Education & Madical Post Row End -->

            <!-- Sports Post Row Start -->
            <div class="row mb-50">

                <div class="col-12">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">Sports News</h4>

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list sports-post-tab-list nav d-none d-md-block">
                                <li><a class="active" data-bs-toggle="tab" href="#sports-cat-1">Fashion</a></li>
                                <li><a data-bs-toggle="tab" href="#sports-cat-2">Health</a></li>
                                <li><a data-bs-toggle="tab" href="#sports-cat-1">Beauty</a></li>
                                <li><a data-bs-toggle="tab" href="#sports-cat-2">Sports</a></li>
                                <li><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">More</a>

                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="tab" href="#sports-cat-1">Technology</a></li>
                                        <li><a data-bs-toggle="tab" href="#sports-cat-2">Food</a></li>
                                    </ul>

                                </li>
                            </ul><!-- Tab List End -->

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list sports-post-tab-list nav d-sm-block d-md-none">
                                <li><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Category</a>

                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a class="active" data-bs-toggle="tab" href="#sports-cat-1">Fashion</a></li>
                                        <li><a data-bs-toggle="tab" href="#sports-cat-2">Health</a></li>
                                        <li><a data-bs-toggle="tab" href="#sports-cat-1">Beauty</a></li>
                                        <li><a data-bs-toggle="tab" href="#sports-cat-2">Sports</a></li>
                                        <li><a data-bs-toggle="tab" href="#sports-cat-1">Technology</a></li>
                                        <li><a data-bs-toggle="tab" href="#sports-cat-2">Food</a></li>
                                    </ul>

                                </li>
                            </ul><!-- Tab List End -->

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="sports-cat-1">

                                    <div class="row">

                                        <!-- Overlay Post Wrapper Start -->
                                        <div class="col-lg-8 col-12">

                                            <div class="row">

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay post-large sports-post col-12 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="img/post/post-37.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="post-details.html">Mohammedan 05 - Arambagh 04</a></h2>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="img/post/post-38.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="post-details.html">Sreekail 2 - 3 Comilla.</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                                            <img src="img/post/post-39.jpg" alt="post">
                                                            <!-- Video Popup -->
                                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                                        </a>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                            </div>

                                        </div><!-- Overlay Post Wrapper End -->

                                        <!-- Post Wrapper Start -->
                                        <div class="col-lg-4 col-12">
                                           <div class="row">

                                               <div class="col-lg-12 col-md-6 col-12 mb-20">

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="img/post/post-40.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="img/post/post-41.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                </div>

                                               <div class="col-lg-12 col-md-6 col-12 mb-20">

                                                    <!-- Post Start -->
                                                    <div class="post sports-post">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="img/post/post-42.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h4 class="title"><a href="post-details.html">Winning T20 Farewell To Safari.</a></h4>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <a href="#" class="meta-item date"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                                </div>

                                                                <!-- Description s-->
                                                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. </p>

                                                            </div>
                                                        </div>
                                                    </div><!-- Post End -->

                                               </div>

                                            </div>
                                        </div><!-- Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade" id="sports-cat-2">

                                    <div class="row">

                                        <!-- Overlay Post Wrapper Start -->
                                        <div class="col-lg-8 col-12">

                                            <div class="row">

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay post-large sports-post col-12 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="img/post/post-37.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="post-details.html">Mohammedan 05 - Arambagh 04</a></h2>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="img/post/post-38.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="post-details.html">Sreekail 2 - 3 Comilla.</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                                            <img src="img/post/post-39.jpg" alt="post">
                                                            <!-- Video Popup -->
                                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                                        </a>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                            </div>

                                        </div><!-- Overlay Post Wrapper End -->

                                        <!-- Post Wrapper Start -->
                                        <div class="col-lg-4 col-12">
                                           <div class="row">

                                               <div class="col-lg-12 col-md-6 col-12 mb-20">

                                                    <!-- Post Start -->
                                                    <div class="post sports-post">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="img/post/post-42.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h4 class="title"><a href="post-details.html">Winning T20 Farewell To Safari.</a></h4>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <a href="#" class="meta-item date"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                                </div>

                                                                <!-- Description s-->
                                                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. </p>

                                                            </div>
                                                        </div>
                                                    </div><!-- Post End -->

                                               </div>

                                               <div class="col-lg-12 col-md-6 col-12 mb-20">

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="img/post/post-40.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="img/post/post-41.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                </div>

                                            </div>
                                        </div><!-- Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->

                            </div><!-- Tab Content End-->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

            </div><!-- Sports Post Row End -->

            <!-- Banner Row Start -->
            <div class="row mb-50">

                <div class="col-12">

                    <a href="#" class="post-middle-banner"><img src="img/banner/post-middle-1.jpg" alt="Banner"></a>

                </div>

            </div><!-- Banner Row End -->

            <!-- Youtube Video Row Start -->
            <div class="row">

                <!-- Video Play List Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-50">


                    <!-- Overlay Post Start -->
                    <div class="post post-overlay hero-post">
                        <div class="post-wrap">

                            <!-- Image -->
                            <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                <img src="img/post/post-47.jpg" alt="post">
                                <span class="video-btn"><i class="fa fa-play"></i></span>
                            </a>

                            <!-- Category -->
                            <a href="#" class="category sports">sports</a>

                        </div>
                    </div><!-- Overlay Post End -->

                </div>
                <!-- Video Play List End-->

                   <!-- Video Play List Start-->
                   <div class="col-lg-4 col-md-6 col-12 mb-50">


                    <!-- Overlay Post Start -->
                    <div class="post post-overlay hero-post">
                        <div class="post-wrap">

                            <!-- Image -->
                            <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                <img src="img/post/post-47.jpg" alt="post">
                                <span class="video-btn"><i class="fa fa-play"></i></span>
                            </a>

                            <!-- Category -->
                            <a href="#" class="category sports">sports</a>



                        </div>
                    </div><!-- Overlay Post End -->

                </div>
                <!-- Video Play List End-->


                    <!-- Video Play List Start-->
                    <div class="col-lg-4 col-md-6 col-12 mb-50">


                        <!-- Overlay Post Start -->
                        <div class="post post-overlay hero-post">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                    <img src="img/post/post-47.jpg" alt="post">
                                    <span class="video-btn"><i class="fa fa-play"></i></span>
                                </a>

                                <!-- Category -->
                                <a href="#" class="category sports">sports</a>



                            </div>
                        </div><!-- Overlay Post End -->

                    </div>
                    <!-- Video Play List End-->





            </div><!-- Youtube Video Banner Row End -->

              <!-- Life Style Post Row Start -->
              <div class="row ">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head life-style-head">

                            <!-- Title -->
                            <h4 class="title">Life Style</h4>

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list life-style-post-tab-list nav d-none d-md-block">
                                <li><a class="active" data-bs-toggle="tab" href="#life-style-cat-1">Fashion</a></li>
                                <li><a data-bs-toggle="tab" href="#life-style-cat-2">Health</a></li>
                                <li><a data-bs-toggle="tab" href="#life-style-cat-1">Beauty</a></li>
                                <li><a data-bs-toggle="tab" href="#life-style-cat-2">Sports</a></li>
                                <li><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">More</a>

                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a data-bs-toggle="tab" href="#life-style-cat-1">Technology</a></li>
                                        <li><a data-bs-toggle="tab" href="#life-style-cat-2">Food</a></li>
                                    </ul>

                                </li>
                            </ul><!-- Tab List End -->

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list life-style-post-tab-list nav d-sm-block d-md-none">
                                <li><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Category</a>

                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a class="active" data-bs-toggle="tab" href="#life-style-cat-1">Fashion</a></li>
                                        <li><a data-bs-toggle="tab" href="#life-style-cat-2">Health</a></li>
                                        <li><a data-bs-toggle="tab" href="#life-style-cat-1">Beauty</a></li>
                                        <li><a data-bs-toggle="tab" href="#life-style-cat-2">Sports</a></li>
                                        <li><a data-bs-toggle="tab" href="#life-style-cat-1">Technology</a></li>
                                        <li><a data-bs-toggle="tab" href="#life-style-cat-2">Food</a></li>
                                    </ul>

                                </li>
                            </ul><!-- Tab List End -->

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="life-style-cat-1">

                                    <div class="row">

                                        <!-- Overlay Post Start -->
                                        <div class="post post-large post-overlay life-style-post post-separator-border col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <div class="image"><img src="img/post/post-55.jpg" alt="post"></div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="post-details.html">Creat Your Home With A Great Designer.</a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- Overlay Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-21.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-22.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-23.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Fish Fry With green vegetables.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-24.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                    </div>

                                </div><!-- Tab Pane End-->

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade" id="life-style-cat-2">

                                    <div class="row">

                                        <!-- Overlay Post Start -->
                                        <div class="post post-large post-overlay life-style-post post-separator-border col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <div class="image"><img src="img/post/post-55.jpg" alt="post"></div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="post-details.html">Creat Your Home With A Great Designer.</a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- Overlay Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-21.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-22.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-23.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Fish Fry With green vegetables.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-24.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                    </div>

                                </div><!-- Tab Pane End-->

                            </div><!-- Tab Content End-->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head life-style-head">

                                    <!-- Title -->
                                    <h4 class="title">Interior News</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Slider Start -->
                                    <div class="five-row-post-carousel row-post-carousel post-block-carousel life-style-post-carousel">

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-56.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-57.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-58.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">7 Outrageous Ideas For Your Graphic Class.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-59.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-60.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-56.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-57.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-58.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">7 Outrageous Ideas For Your Graphic Class.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-59.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-60.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                    </div><!-- Sidebar Post Slider End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Life Style Post Row End -->

            <!-- Technology, Fashion & Other Post Row Start -->
            <div class="row">

                 <!-- Sidebar Start -->
                 <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head education-head">

                                    <!-- Title -->
                                    <h4 class="title">other news</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Start -->
                                    <div class="row">

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-13.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-16.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-23.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">7 Outrageous Ideas For Your Graphic Class.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-33.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-34.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                    </div><!-- Sidebar Post End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

               <!-- Sidebar Start -->
               <div class="col-lg-4 col-12 mb-50">
                <div class="row">

                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-12">

                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">

                            <!-- Sidebar Block Head Start -->
                            <div class="head education-head">

                                <!-- Title -->
                                <h4 class="title">other news</h4>

                            </div><!-- Sidebar Block Head End -->

                            <!-- Sidebar Block Body Start -->
                            <div class="body">

                                <!-- Sidebar Post Start -->
                                <div class="row">

                                    <!-- Small Post Start -->
                                    <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="post-details.html"><img src="img/post/post-13.jpg" alt="post"></a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Small Post End -->

                                    <!-- Small Post Start -->
                                    <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="post-details.html"><img src="img/post/post-16.jpg" alt="post"></a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h5 class="title"><a href="post-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Small Post End -->

                                    <!-- Small Post Start -->
                                    <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="post-details.html"><img src="img/post/post-23.jpg" alt="post"></a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h5 class="title"><a href="post-details.html">7 Outrageous Ideas For Your Graphic Class.</a></h5>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Small Post End -->

                                    <!-- Small Post Start -->
                                    <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="post-details.html"><img src="img/post/post-33.jpg" alt="post"></a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Small Post End -->

                                    <!-- Small Post Start -->
                                    <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="post-details.html"><img src="img/post/post-34.jpg" alt="post"></a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Small Post End -->

                                </div><!-- Sidebar Post End -->

                            </div><!-- Sidebar Block Body End -->

                        </div>

                    </div>

                </div>
            </div><!-- Sidebar End -->

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head education-head">

                                    <!-- Title -->
                                    <h4 class="title">other news</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Start -->
                                    <div class="row">

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-13.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-16.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-23.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">7 Outrageous Ideas For Your Graphic Class.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-33.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="img/post/post-34.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2023</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                    </div><!-- Sidebar Post End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Technology, Fashion & Other Post Row End -->

        </div>
    </div><!-- Post Section End -->

    <!-- Instagram Section Start -->
    <div class="instagram-section section">
        <div class="container-fluid ps-0 pe-0">

            <!-- Full Width Instagram Carousel Start -->
            <div class="fullwidth-instagram-carousel instagram-carousel">

                <a href="#" class="instagram-item"><img src="img/instagram/1.jpg" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="img/instagram/2.jpg" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="img/instagram/3.jpg" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="img/instagram/4.jpg" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="img/instagram/5.jpg" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="img/instagram/6.jpg" alt="instagram"></a>

            </div><!-- Full Width Instagram Carousel End -->
        </div>
    </div><!-- Instagram Section End -->
@endsection
