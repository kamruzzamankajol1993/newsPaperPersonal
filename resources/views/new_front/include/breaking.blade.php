<!-- Breaking News Section Start -->


<div class="breaking-news-section section">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Breaking News Wrapper Start -->
                <div class="breaking-news-wrapper">

                    <!-- Breaking News Title -->
                    <h5 class="breaking-news-title float-start">ব্রেকিং নিউজ </h5>

                    <!-- Breaking Newsticker Start -->
                    <ul class="breaking-news-ticker float-start">
                        @foreach($breakingNews as $breakingNewsAll)
                        <li><a href="{{ route('singlePost',$breakingNewsAll->id) }}">{{ $breakingNewsAll->title }}</a></li>
                        @endforeach

                    </ul><!-- Breaking Newsticker Start -->

                    <!-- Breaking News Nav -->
                    <div class="breaking-news-nav">
                        <button class="news-ticker-prev"><i class="fa fa-angle-left"></i></button>
                        <button class="news-ticker-next"><i class="fa fa-angle-right"></i></button>
                    </div>

                </div><!-- Breaking News Wrapper End -->

            </div>
        </div>
    </div>
</div><!-- Breaking News Section End -->
