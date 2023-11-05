   <!-- Footer Top Section Start -->
   <div class="footer-top-section section bg-dark">
    <div class="container-fluid">
        <div class="row">

            <!-- Footer Widget Start -->
            <div class="footer-widget col-xl-4 col-md-6 col-12 mb-60">

                <!-- Title -->
                <h4 class="widget-title">Contact address</h4>

                <div class="content fix">


                    <!-- Footer Contact -->
                    <ol class="footer-contact">
                        <li><i class="fa fa-home"></i>UK Office: <br> {{ $system_all->about_us }}</li>
                        <li><i class="fa fa-home"></i>BD Office: <br> {{ $system_all->Address }}</li>
                        <li><i class="fa fa-envelope-open"></i>{{ $system_all->Email }}</li>

                    </ol>



                </div>

            </div><!-- Footer Widget End -->

             <!-- Footer Widget Start -->
             <div class="footer-widget col-xl-4 col-md-6 col-12 mb-60">

                <!-- Title -->
                <h4 class="widget-title">Editorial Board</h4>

                <div class="content fix">


                    <!-- Footer Contact -->
                    <ol class="footer-contact">
                        @foreach($teamList as $teamLists)
                        <li></i><b>{{ $teamLists->p_status }}:</b> {{ $teamLists->name }}</li>
@endforeach

                    </ol>



                </div>

            </div><!-- Footer Widget End -->

             <!-- Footer Widget Start -->
             <div class="footer-widget col-xl-4 col-md-6 col-12 mb-60">

                <!-- Title -->
                <h4 class="widget-title">Follow on us</h4>

                <div class="content fix">
                    <p><img src="{{asset('/')}}{{ $logo }}" style="width: 220px;" alt="Logo"></p>



                    <!-- Footer Social -->
                    <div class="footer-social">

                        @foreach($ss_link_list as $all_ss_link_list)

                        @if($all_ss_link_list->linkn == 'Facebook')


               <a href="{{$all_ss_link_list->name}}" class="facebook"><i
                                 class="fa fa-facebook"></i></a>



                                 @elseif($all_ss_link_list->linkn == 'Twitter')
             <a href="{{$all_ss_link_list->name}}" class="twitter"><i class="fa fa-twitter"></i></a>

             @elseif($all_ss_link_list->linkn == 'Linkedin')
             <a href="{{$all_ss_link_list->name}}" class="link"><i class="fa fa-linkedin"></i></a>


                    @elseif($all_ss_link_list->linkn == 'Instagram')
                       <a href="{{$all_ss_link_list->name}}" class="pin"><i class="fa fa-pinterest-p"></i></a>
@else
              <a href="{{$all_ss_link_list->name}}" class="you"><i class="fa fa-youtube-play"></i></a>

                 @endif

                   @endforeach





                    </div>

                </div>

            </div><!-- Footer Widget End -->



        </div>
    </div>
</div><!-- Footer Top Section End -->

<!-- Footer Bottom Section Start -->
<div class="footer-bottom-section section bg-dark">
    <div class="container">
        <div class="row">

            <!-- Copyright Start -->
            <div class="copyright text-center col">
                <p>© 2023 {{ $ins_name }}</p>
            </div><!-- Copyright End -->

        </div>
    </div>
</div><!-- Footer Bottom Section End -->
