@extends('new_front.master.master')

@section('title')
{{ $ins_name }}
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
                        <a href="#" class="sidebar-banner"><img src="{{ asset('/') }}{{ $homead1 }}" alt="Sidebar Banner"></a>

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
                                <div class="head life-style-head" style="background:#EE0000;">

                                    <!-- Title -->
                                    <center>   <a href="{{ route('contributor') }}" target="_blank"><h4 class="title" style="color:white;">টিভি ১৯ পরিবার</h4>
                                   </a></center>

                                </div><!-- Sidebar Block Head End -->

                             </div>

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper mt-5">

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
                            <a href="#" class="sidebar-banner"><img src="{{ asset('/') }}{{ $homead2 }}" alt="Sidebar Banner"></a>

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
                                    <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100063464174913" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/profile.php?id=100063464174913" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=100063464174913">Tv19online</a></blockquote></div>


                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{ asset('/') }}{{ $homead3 }}" alt="Sidebar Banner"></a>

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
                            <h4 class="title">আন্তর্জাতিক</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">
                            @foreach($intPartOne as $bangladeshPartOnes)
                            <!-- Small Post Start -->
                            <div class="post sports-post post-separator-border">
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
                            </div><!-- Small Post End -->
                            @endforeach
                            @foreach($intPartTwo as $bangladeshPartOnes)
                            <!-- Small Post Start -->
                            <div class="post post-small post-list sports-post post-separator-border">
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



                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">ধর্ম/আইন-আদালত</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            @foreach($relPartOne as $bangladeshPartOnes)

                            <!-- Small Post Start -->
                            <div class="post sports-post post-separator-border">
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
                            </div><!-- Small Post End -->
                            @endforeach
                            @foreach($relPartTwo as $bangladeshPartOnes)
                            <!-- Small Post Start -->
                            <div class="post post-small post-list sports-post post-separator-border">
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


                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">কমিউনিটি</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            @foreach($comPartOne as $bangladeshPartOnes)
                            <!-- Small Post Start -->
                            <div class="post sports-post post-separator-border">
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
                            </div><!-- Small Post End -->
                            @endforeach
                            @foreach($comPartTwo as $bangladeshPartOnes)
                            <!-- Small Post Start -->
                            <div class="post post-small post-list sports-post post-separator-border">
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
                            <h4 class="title">খেলাধুলা</h4>



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
                                                @foreach($sportsPartOne as $bangladeshPartOnes)
                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay post-large sports-post col-12 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="{{ route('singlePost',$bangladeshPartOnes->id) }}">{{ $bangladeshPartOnes->title }}</a></h2>

                                                            <!-- Meta -->
                                                            <div class="meta fix">

                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$bangladeshPartOnes->created_at->format('d F Y')) }}</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                @endforeach
                                                @foreach($sportsPartTwo as $bangladeshPartOnes)
                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="{{ route('singlePost',$bangladeshPartOnes->id) }}">{{ $bangladeshPartOnes->title }}</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$bangladeshPartOnes->created_at->format('d F Y')) }}</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                @endforeach



                                            </div>

                                        </div><!-- Overlay Post Wrapper End -->

                                        <!-- Post Wrapper Start -->
                                        <div class="col-lg-4 col-12">
                                           <div class="row">

                                               <div class="col-lg-12 col-md-6 col-12 mb-20">
                                                @foreach($sportsPartThree as $bangladeshPartOnes)
                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
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


                                                </div>

                                               <div class="col-lg-12 col-md-6 col-12 mb-20">
                                                @foreach($sportsPartFour as $bangladeshPartOnes)
                                                    <!-- Post Start -->
                                                    <div class="post sports-post">
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

                                                                <!-- Description s-->
                                                                <p>{!!  substr(strip_tags($bangladeshPartOnes->paragraph), 0, 150) !!}</p>

                                                            </div>
                                                        </div>
                                                    </div><!-- Post End -->
                                                    @endforeach

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

                    <a href="#" class="post-middle-banner"><img src="{{ asset('/') }}{{ $homead4 }}" alt="Banner"></a>

                </div>

            </div><!-- Banner Row End -->

            <!-- Youtube Video Row Start -->
            <div class="row">
@foreach($videoPartOne as $bangladeshPartOnes)
                <!-- Video Play List Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-50">


                    <!-- Overlay Post Start -->
                    <div class="post post-overlay hero-post">
                        <div class="post-wrap">

                            <!-- Image -->
                            <a href="{{ asset('/') }}{{ $bangladeshPartOnes->y_link }}" class="image video-popup">
                                <img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post">
                                <span class="video-btn"><i class="fa fa-play"></i></span>
                            </a>

                            <!-- Category -->
                            <a href="{{route('post',['id'=>52])}}" class="category sports">ভিডিও গ্যালারি</a>

                        </div>
                    </div><!-- Overlay Post End -->

                </div>
                <!-- Video Play List End-->
                @endforeach







            </div><!-- Youtube Video Banner Row End -->

              <!-- Life Style Post Row Start -->
              <div class="row ">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head life-style-head">

                            <!-- Title -->
                            <h4 class="title">বিনোদন</h4>



                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="life-style-cat-1">

                                    <div class="row">
                                        @foreach($enPartOne as $bangladeshPartOnes)
                                        <!-- Overlay Post Start -->
                                        <div class="post post-large post-overlay life-style-post post-separator-border col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <div class="image"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="{{ route('singlePost',$bangladeshPartOnes->id) }}">{{ $bangladeshPartOnes->title }}</a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">

                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$bangladeshPartOnes->created_at->format('d F Y')) }}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- Overlay Post End -->
                                        @endforeach
                                        @foreach($enPartTwo as $bangladeshPartOnes)
                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator col-md-6 col-12">
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
                                    <h4 class="title">যুক্তরাজ্য/যুক্তরাষ্ট্র</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Slider Start -->
                                    <div class="five-row-post-carousel row-post-carousel post-block-carousel life-style-post-carousel">
                                        @foreach($juktoPartOne as $bangladeshPartOnes)
                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post col">
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
                                    <h4 class="title">ইউরোপ</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Start -->
                                    <div class="row">
                                        @foreach($curopPartOne as $bangladeshPartOnes)
                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
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
                                <h4 class="title">মুখোমুখি</h4>

                            </div><!-- Sidebar Block Head End -->

                            <!-- Sidebar Block Body Start -->
                            <div class="body">

                                <!-- Sidebar Post Start -->
                                <div class="row">

                                    @foreach($motaPartOne as $bangladeshPartOnes)
                                    <!-- Small Post Start -->
                                    <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
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
                                    <h4 class="title">প্রযুক্তি</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Start -->
                                    <div class="row">

                                        @foreach($proPartOne as $bangladeshPartOnes)
                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
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

                                    </div><!-- Sidebar Post End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Technology, Fashion & Other Post Row End -->


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
                                               <h4 class="title">ভ্রমন</h4>

                                           </div><!-- Sidebar Block Head End -->

                                           <!-- Sidebar Block Body Start -->
                                           <div class="body">

                                               <!-- Sidebar Post Start -->
                                               <div class="row">
                                                   @foreach($vorPartOne as $bangladeshPartOnes)
                                                   <!-- Small Post Start -->
                                                   <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
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
                                           <h4 class="title">এক্সক্লুসিভ</h4>

                                       </div><!-- Sidebar Block Head End -->

                                       <!-- Sidebar Block Body Start -->
                                       <div class="body">

                                           <!-- Sidebar Post Start -->
                                           <div class="row">

                                               @foreach($exPartOne as $bangladeshPartOnes)
                                               <!-- Small Post Start -->
                                               <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
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
                                               <h4 class="title">সিলেট</h4>

                                           </div><!-- Sidebar Block Head End -->

                                           <!-- Sidebar Block Body Start -->
                                           <div class="body">

                                               <!-- Sidebar Post Start -->
                                               <div class="row">

                                                   @foreach($syPartOne as $bangladeshPartOnes)
                                                   <!-- Small Post Start -->
                                                   <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
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

                                               </div><!-- Sidebar Post End -->

                                           </div><!-- Sidebar Block Body End -->

                                       </div>

                                   </div>

                               </div>
                           </div><!-- Sidebar End -->

                       </div><!-- Technology, Fashion & Other Post Row End -->


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
                                               <h4 class="title">কৃষি </h4>

                                           </div><!-- Sidebar Block Head End -->

                                           <!-- Sidebar Block Body Start -->
                                           <div class="body">

                                               <!-- Sidebar Post Start -->
                                               <div class="row">
                                                   @foreach($agriPartOne as $bangladeshPartOnes)
                                                   <!-- Small Post Start -->
                                                   <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
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
                                           <h4 class="title">স্বাস্থ্য</h4>

                                       </div><!-- Sidebar Block Head End -->

                                       <!-- Sidebar Block Body Start -->
                                       <div class="body">

                                           <!-- Sidebar Post Start -->
                                           <div class="row">

                                               @foreach($hePartOne as $bangladeshPartOnes)
                                               <!-- Small Post Start -->
                                               <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
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
                                               <h4 class="title">অন্যান্য</h4>

                                           </div><!-- Sidebar Block Head End -->

                                           <!-- Sidebar Block Body Start -->
                                           <div class="body">

                                               <!-- Sidebar Post Start -->
                                               <div class="row">

                                                   @foreach($othPartOne as $bangladeshPartOnes)
                                                   <!-- Small Post Start -->
                                                   <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
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
                @foreach($othPartOne as $bangladeshPartOnes)
                <a href="{{ route('singlePost',$bangladeshPartOnes->id) }}" class="instagram-item"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="instagram"></a>
@endforeach

            </div><!-- Full Width Instagram Carousel End -->
        </div>
    </div><!-- Instagram Section End -->
@endsection
