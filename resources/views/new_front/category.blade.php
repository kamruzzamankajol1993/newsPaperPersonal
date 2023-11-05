@extends('new_front.master.master')

@section('title')
@if(Route::is('search'))
Search | {{ $ins_name }}
@else
{{ $postCatname }} | {{ $ins_name }}
@endif
@endsection

@section('body')
<?php
$engDATE = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Saturday', 'Sunday',
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
$bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে',
    'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', '
বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
);

?>
    @if(Route::is('search'))
@else
<!-- Popular Section Start -->
<div class="popular-section section bg-dark pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Popular Post Slider Start -->
                <div class="popular-post-slider">

                    @foreach($newsesOne as $bangladeshPartOnes)

                    <!-- Overlay Post Start -->
                    <div class="post post-overlay">
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
                    </div><!-- Overlay Post End -->

                    @endforeach



                </div><!-- Popular Post Slider End -->

            </div>
        </div>
    </div>
</div><!-- Popular Section End -->
@endif
<!-- Post Section Start -->
<div class="post-section section mt-50">
    <div class="container">

        <!-- Feature Post Row Start -->
        <div class="row">

            <div class="col-lg-8 col-12 mb-50">

                <!-- Post Block Wrapper Start -->
                <div class="post-block-wrapper">

                    <!-- Post Block Body Start -->
                    <div class="body">
                        <div class="row">
                            @foreach($newses as $bangladeshPartOnes)
                            <!-- Post Start -->
                            <div class="post post-overlay life-style-post post-separator-border col-md-6 col-12">
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

                                    </div>

                                </div>
                            </div><!-- Post End -->
                            @endforeach


                            {{-- <div class="page-pagination text-center col-12">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div><!-- Post Block Body End -->

                </div><!-- Post Block Wrapper End -->

            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4 col-12 mb-50">
                <div class="row">



                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Banner -->
                        <a href="#" class="sidebar-banner"><img src="{{ asset('/') }}{{ $homead5 }}" alt="Sidebar Banner"></a>

                    </div>

                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Banner -->
                        <a href="#" class="sidebar-banner"><img src="{{ asset('/') }}{{ $homead6 }}" alt="Sidebar Banner"></a>

                    </div>



                </div>
            </div><!-- Sidebar End -->

        </div><!-- Feature Post Row End -->

    </div>
</div><!-- Post Section End -->
@endsection
