<?php
$engDATE = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'January', 'February', 'March', 'April',
    'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Saturday', 'Sunday',
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
$bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে',
    'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', '
বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
);

?>

  <!-- Hero Section Start -->
  <div class="hero-section section mt-30 mb-30">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row row-1">

                    <div class="order-lg-2 col-lg-6 col-12">

                        <!-- Hero Post Slider Start -->
                        <div class="post-carousel-1">

                            @foreach($topNews as $topNewss)

                            <!-- Overlay Post Start -->
                            <div class="post post-large post-overlay hero-post">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <div class="image"><img src="{{ asset('/') }}{{ $topNewss->cover_image }}" alt="post"></div>

                                    <!-- Category -->
                                    <a href="{{route('post',['id'=>$topNewss->id])}}" class="category politic">

                                        <?php

$getCategory = DB::table('post_categories')->where('id',$topNewss->category_id)->value('name');


                                            ?>

                                       {{ $getCategory }}

                                    </a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h2 class="title"><a href="{{ route('singlePost',$topNewss->id) }}">{{ $topNewss->title }}</a></h2>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$topNewss->created_at->format('d F Y')) }}</span>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- Overlay Post End -->
                            @endforeach



                        </div><!-- Hero Post Slider End -->

                    </div>

                    <div class="order-lg-1 col-lg-3 col-12">
                        <div class="row row-1">
                            @foreach($leftNew as $topNewss)
                            <!-- Overlay Post Start -->
                            <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <div class="image"><img src="{{ asset('/') }}{{ $topNewss->cover_image }}" alt="post"></div>

                                    <!-- Category -->
                                    <a href="{{route('post',['id'=>$topNewss->id])}}" class="category travel">                           <?php

                                        $getCategory = DB::table('post_categories')->where('id',$topNewss->category_id)->value('name');


                                                                                    ?>

                                                                               {{ $getCategory }}</a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h4 class="title"><a href="{{ route('singlePost',$topNewss->id) }}">{{ $topNewss->title }}</a></h4>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$topNewss->created_at->format('d F Y')) }}</span>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Overlay Post End -->

@endforeach

                        </div>
                    </div>

                    <div class="order-lg-3 col-lg-3 col-12">
                        <div class="row row-1">
                            @foreach($rightNew as $topNewss)
                            <!-- Overlay Post Start -->
                            <div class="post post-overlay gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <div class="image"><img src="{{ asset('/') }}{{ $topNewss->cover_image }}" alt="post"></div>

                                    <!-- Category -->
                                    <a href="{{route('post',['id'=>$topNewss->id])}}" class="category sports">                           <?php

                                        $getCategory = DB::table('post_categories')->where('id',$topNewss->category_id)->value('name');


                                                                                    ?>

                                                                               {{ $getCategory }}</a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h4 class="title"><a href="{{ route('singlePost',$topNewss->id) }}">{{ $topNewss->title }}</a></h4>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ str_replace($engDATE, $bangDATE,$topNewss->created_at->format('d F Y')) }}</span>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Overlay Post End -->
                            @endforeach


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero Section End -->
