@extends('new_front.master.master')

@section('title')
{{ $news->title }} | {{ $ins_name }}
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
<!-- Blog Section Start -->
<div class="blog-section section mt-30 mb-30">
    <div class="container">

        <!-- Feature Post Row Start -->
        <div class="row">

            <div class="col-lg-8 col-12 mb-50">

                <!-- Single Blog Start -->
                <div class="single-blog mb-50">
                    <div class="blog-wrap">

                        <!-- Meta -->
                        <div class="meta fix">
                            <a href="#" class="meta-item category fashion">{{ $postCatname }}</a>

                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$news->created_at->format('d F Y')) }}</span>

                        </div>
                        <div class="tags-social float-start">



                            <div class="blog-social float-start">
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current()) }}" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="https://twitter.com/intent/tweet?url={{urlencode(url()->current()) }}" class="twitter"><i class="fa fa-twitter"></i></a>

                                <a target="_blank" href="https://wa.me/?text={{urlencode(url()->current()) }}" class="what"><i class="fa fa-whatsapp"></i></a>



                                {{-- <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> --}}
                            </div>

                        </div>
                        <!-- Title -->
                        <h3 class="title">{{ $news->title }}</h3>

                        <!-- Image -->
                        <div class="image"><img src="{{ asset('/') }}{{ $news->cover_image }}" alt="post"></div>

                        <!-- Content -->
                        <div class="content">

                            <!-- Description -->
                            <p>{!! $news->paragraph!!}</p>

                        </div>



                    </div>
                </div><!-- Single Blog End -->

                <!-- Previous & Next Post Start -->
                <div class="post-nav mb-50">
                    @if(!$pnews)
                    @else
                    <a href="{{ route('singlePost',$pnews->id) }}" class="prev-post"><span>পূর্ববর্তী</span>{{ $pnews->title }}</a>
                    @endif
                    @if(!$nnews)
                    @else
                    <a href="{{ route('singlePost',$nnews->id) }}" class="next-post"><span>পরবর্তী</span>{{ $nnews->title }}</a>
                    @endif
                </div><!-- Previous & Next Post End -->



                <!-- Post Block Wrapper Start -->
                <div class="post-block-wrapper mb-50">

                    <!-- Post Block Head Start -->
                    <div class="head">

                        <!-- Title -->
                        <h4 class="title">আরো পড়ুন!</h4>

                    </div><!-- Post Block Head End -->

                    <!-- Post Block Body Start -->
                    <div class="body">

                        <div class="two-column-post-carousel column-post-carousel post-block-carousel slick-space">

                            @foreach($randomposts as  $bangladeshPartOnes)

                            <div class="slick-slide">

                                <!-- Overlay Post Start -->
                                <div class="post post-overlay hero-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div class="image"><img src="{{ asset('/') }}{{ $bangladeshPartOnes->cover_image }}" alt="post"></div>

                                        <!-- Category -->
                                        <a href="{{route('post',['id'=>$bangladeshPartOnes->category_id])}}" class="category gadgets">{{ $postCatname }}</a>

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

                            </div>

                            @endforeach



                        </div>

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
                            <div class="head feature-head">

                                <!-- Title -->
                                <h4 class="title">মোট পঠিত:</h4>

                            </div><!-- Sidebar Block Head End -->

                            <!-- Sidebar Block Body Start -->
                            <div class="body">

                                <div class="sidebar-social-follow">
                                    <div>
                                        <a href="#" class="facebook">
                                            <i class="fa fa-user"></i>
                                            <h3>{{ $totalView }}</h3>

                                        </a>
                                    </div>

                                </div>

                            </div><!-- Sidebar Block Body End -->

                        </div>

                    </div>

                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Banner -->
                        <a href="#" class="sidebar-banner"><img src="{{ asset('/') }}{{ $homead7 }}" alt="Sidebar Banner"></a>

                    </div>

                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Banner -->
                        <a href="#" class="sidebar-banner"><img src="{{ asset('/') }}{{ $homead8 }}" alt="Sidebar Banner"></a>

                    </div>



                </div>
            </div><!-- Sidebar End -->

        </div><!-- Feature Post Row End -->

    </div>
</div><!-- Blog Section End -->
@endsection
