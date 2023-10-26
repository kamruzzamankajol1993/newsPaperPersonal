<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--for facebook share-->
    <meta property="og:url"           content="https://www.bn.dailybanglatimes.com/" />
    <meta property="og:type"          content="NEWS" />
    <meta property="og:title"         content="Daily Bangla Time-" />
    <meta property="og:description"   content="dailybanglatimes.com is one of the most reliable and popular local daily newspaper. We provide latest reliable local news about various categories for 24/7 days." />
    <meta property="og:image"         content="dailybanglatimes.com/public/front/img/logo-ol3t6tqtnvngxth3oqe5r1rnder00ua1dt7qcy4lj6_182x70.png"  />
<meta property="og:image:width" content="200"/>
<meta property="og:image:height" content="200"/>

   <title>@yield('title')</title>
    <!--end for facebook share-->

    <link rel="icon" href="{{ asset('/') }}{{ $icon }}" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/bootstrap.min.css"/>

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/owl.carousel.css"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/owl.theme.default.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="public/toastr/toastr.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/style.css"/>

    <link type="text/css" rel="stylesheet" href="{{asset('/')}}public/new_front/public/front/css/custom_style.css"/>

  
    <style>
        .top-date {
            float: right;
            font-weight: 400;
            color: #343a40;
            font-size: 15px;
            margin-top: -3px;
        }

        .dropdown-menu > li a:hover, .dropdown-menu > li.show {
            background: black;
            color: white;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #f8f9fa;
        }

        label {
            font-weight: bold;
        }

        .label-optional {
            font-size: 13px;
        }

        .task-menu {
            margin-top: 2px;
            position: absolute;
            background: white;
            z-index: 1;
            float: right;
            right: 0px;
            box-shadow: 0 0 1px 0px;
            display: none;

        }

        .task-btn {
            color: #428bca;
            cursor: pointer;
            margin-bottom: 0px;
            font-size: 20px;
            padding-top: 5px;
            padding-left: 7px;
            padding-right: 7px;
        }

        .task-btn:active {
            color: #428bca;
            border: 0px;
        }

        .task-icon {
            color: #428bca;
        }

        .task-label {
            color: #428bca;

        }

        .dropdown-item {
            font-size: 14px;
        }

        .action-btn {
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

        .action-menu {
            margin-right: 60px;
            margin-top: 5px;
        }

        /*::-webkit-scrollbar {*/
        /*    display: none;*/
        /*}*/

        .footer-logo img:hover {
            filter: none;
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        //desktop version
        $(document).ready(function () {
            $('#Carousel').carousel({
                interval: 5000
            })
        });
        //end desktop version
        //mobile version
        $(document).ready(function () {
            $('.mw').carousel({
                interval: 5000
            })
        });
        //end mobile version
        //bangla date
        /*$(document).ready(function () {
            $('.bongabdo').bongabdo({
                showSeason: true,
                format: "DD-MM [YY]"
            });
        });*/
        //end bangla date
    </script>

</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=2323306957775742&autoLogAppEvents=1" nonce="7P3xDZHr"></script>

@include('new_front.include.header')

@yield('body')


@include('new_front.include.footer')




<!-- /FOOTER -->


<!-- Back to top -->
<div id="back-to-top"></div>
<!-- Back to top -->

<!-- Back to top -->
<div id="back-to-top"></div>
<!-- Back to top -->
<!-- Back to top -->
<script type="text/javascript">

    $(document).ready(function(){

        $('#prod_cat_id').on('change',function(){
            //console.log("hmm its change");

            var category_id=$(this).val();
             //console.log(cat_id);
             var div=$(this).parent();


             var op=`<select class="form-control productname"  name="subcategory_id" >`;

             $.ajax({
                type:'get',
                url:'{!!URL::to('findProductName')!!}',
                data:{'id':category_id},
               success:function(data){

                  //console.log('success');

                    //console.log(data);

                    //console.log(data.length);

                   // op+='<option value="0" selected disabled>choose sub-category</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].sub_name+'">'+data[i].sub_name+'</option>';
                   }
                  // console.log(op)

                  op+= `</select>`

                 $('#subcategory').html(op);
                  // div.find('#subcategory').append(op);


               },
               error:function(){

                }

             });

        });
    });

</script>

 <script type="text/javascript">
$(document).ready(function () {
   //Disable cut copy paste
    /*$('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });


    $("body").on("contextmenu",function(e){
        return false;
    });*/

});
</script>
<script type="text/javascript">
	function pop() {
    var popup = document.getElementById('myPopup');
    popup.classList.toggle('show');
}
</script>

<script src="{{asset('/')}}public/new_front/public/front/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}public/new_front/public/front/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}public/new_front/public/front/js/main.js"></script>
<script src="{{asset('/')}}public/new_front/public/front/js/bootnavbar.js"></script>
<script src="public/toastr/toastr.min.js"></script>

<script type="text/javascript"></script>
<script type="text/javascript">

   $('.changeLangg').change(function(){
    window.location = $(this).val();
});

</script>
 <script type="text/javascript">
    // Disable right click on web page
     //$("html").on("contextmenu",function(e){
       // return false;
    //});
    // Disable cut, copy and paste on web page
   // $('html').bind('cut copy paste', function (e) {
       //  e.preventDefault();
    //});
 </script>
</body>

<!-- Mirrored from bartabd.news/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jan 2023 07:36:50 GMT -->
</html>
