<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>justcall</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Eterna - v2.2.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <script src="https://use.fontawesome.com/9b14ada75b.js"></script> -->

    <script src="https://kit.fontawesome.com/51172de397.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="home"><span>Justcall</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="home">Home</a></li>




                    <li class="drop-down"><a href="#">My Profile</a>
                        <ul>


                            @auth
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                        Logout
                                    </a>
                                </form>

                                @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @endauth



                            <li><a href="admin">Admin Panel</a></li>


                            <!-- <li><a href="team.html">Team</a></li>

                            <li class="drop-down"><a href="#">Drop Down 2</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>













                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Eterna</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated fanimate__adeInDown">Lorem <span>Ipsum Dolor</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Sequi ea <span>Dime Lara</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->




    <main id="main">

        <section id="blog" class="blog">

            <div style="max-width: inherit;" class="container">



                <div class="row">




                    <div class="col col-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search Business</h3>
                            <div class="sidebar-item search-form">
                                <form id="search">
                                    @csrf
                                    <input type="text" name="search">
                                    <button type="submit"><i class="icofont-search"></i></button>
                                </form>

                            </div><!-- End sidebar search formn-->

                            <script>
                                $('#search').submit(function(e) {
                                    e.preventDefault();
                                    var row = '';
                                    $.ajax({
                                        url: "{{route('post.search')}}",
                                        method: "post",
                                        data: new FormData(this),
                                        processData: false,
                                        dataType: "json",
                                        contentType: false,

                                        success: function(data) {

                                            if (data.data == '') {
                                                row += '<article style="margin-bottom: 26px;" class="entry row">';

                                                row += '<div style="margin-left: 329px;" class="entry-content">';


                                                row += ' <p class="text-danger">' + "Sorry! There is no matching item..." + '</p>';




                                                row += '</div>';


                                                row += '</article>';
                                                $('#listBusiness').html(row);

                                            } else {
                                                for (x in data.data) {

                                                    row += '<article style="margin-bottom: 26px;" class="entry row">';

                                                    row += '<div class="col-2 p-1">';
                                                    row += '<img style="width: 100px;" src="Db/image/' + data.data[x].logo + '">';

                                                    row += '</div>';

                                                    row += '<div class="col-10">';


                                                    row += '<h2 class="entry-title">';
                                                    row += '<a href="businessdetail?id=' + data.data[x].businessId + '">' + data.data[x].title + '</a>';
                                                    row += '</h2>';




                                                    row += '<div class="entry-meta">';
                                                    row += '<ul>';
                                                    row += '<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">' + data.data[x].userName + '</a></li>';
                                                    row += ' <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>';
                                                    row += '</ul>';
                                                    row += '</div>';



                                                    row += '<div class="entry-content">';
                                                    row += ' <div id="content' + data.data[x].businessId + '">';
                                                    row += ' <p>' + data.data[x].shortDescription + '</p>';
                                                    row += '</div>';
                                                    row += '</div>';
                                                    row += '</div>';


                                                    row += '</div>';

                                                    row += ' <div class="entry-meta">';

                                                    row += ' <ul>';

                                                    row += '<li id="divbusinessLike' + data.data[x].businessId + '" class="d-flex align-items-center p-2">';

                                                    // row += '<button id="businessLike' + data.data[x].businessId + '" class="text-danger ">Like <span>' + data.data[x].liked + '</span></button>';

                                                    row += '<i style="font-size: 27px;" class="fas fa-thumbs-up fa-5x"><span>' + data.data[x].liked + '</span></i>';

                                                    row += '</li>';

                                                    row += '<li id="divbusinessDislike' + data.data[x].businessId + '" class="d-flex align-items-center p-2">';

                                                    row += '<i style="font-size: 27px;" class="fas fa-thumbs-down fa-5x"><span>' + data.data[x].disliked + '</span></i>';

                                                    // row += '<button id="businessDislike' + data.data[x].businessId + '" class="text-danger">Dislike <span>' + data.data[x].disliked + '</span></button>';

                                                    row += '</li>';
                                                    row += '</ul>';
                                                    row += '</div>';




                                                    row += '</article>';

                                                    //console.log(data.data[x].logo);

                                                }




                                                $('#listBusiness').html(row);
                                            }
                                        },
                                        error: function(xhr, status, error) {

                                        },
                                    });
                                });
                            </script>


                            <script>
                                function selectBusiness(param) {


                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });

                                    var row = '';
                                    $.post("{{route('post.search')}}", {
                                        search: param,
                                    }, (data, status) => {
                                        // console.log(data.data);
                                        if (data.data == '') {
                                            row += '<article style="margin-bottom: 26px;" class="entry row">';

                                            row += '<div style="margin-left: 329px;" class="entry-content">';


                                            row += ' <p class="text-danger">' + "Sorry! There is no matching item..." + '</p>';




                                            row += '</div>';


                                            row += '</article>';
                                            $('#listBusiness').html(row);

                                        } else {


                                            for (x in data.data) {

                                                row += '<article style="margin-bottom: 26px;" class="entry row">';

                                                row += '<div class="col-2 p-1">';
                                                row += '<img style="width: 100px;" src="Db/image/' + data.data[x].logo + '">';

                                                row += '</div>';

                                                row += '<div class="col-10">';

                                                row += ' @auth';
                                                row += '<h2 class="entry-title">';
                                                row += '<a href="businessdetail?id=' + data.data[x].businessId + '">' + data.data[x].title + '</a>';
                                                row += '</h2>';

                                                row += '@else';

                                                row += ' <h2 class="entry-title">';
                                                row += ' <a href="{{ route("login") }}">' + data.data[x].title + '</a>';
                                                row += ' </h2>';

                                                row += ' @endauth';

                                                row += '<div class="entry-meta">';
                                                row += '<ul>';
                                                row += '<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">' + data.data[x].userName + '</a></li>';
                                                row += ' <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>';
                                                row += '</ul>';
                                                row += '</div>';



                                                row += '<div class="entry-content">';
                                                row += ' <div id="content' + data.data[x].businessId + '">';
                                                row += ' <p>' + data.data[x].shortDescription + '</p>';

                                                row += '</div>';
                                                row += '</div>';
                                                row += '</div>';


                                                row += '</div>';

                                                row += ' <div class="entry-meta">';
                                                row += ' <ul>';

                                                row += '<li id="divbusinessLike' + data.data[x].businessId + '" class="d-flex align-items-center p-2">';

                                                // row += '<button id="businessLike' + data.data[x].businessId + '" class="text-danger ">Like <span>' + data.data[x].liked + '</span></button>';

                                                row += '<i style="font-size: 27px;" class="fas fa-thumbs-up fa-5x"><span>' + data.data[x].liked + '</span></i>';

                                                row += '</li>';

                                                row += '<li id="divbusinessDislike' + data.data[x].businessId + '" class="d-flex align-items-center p-2">';

                                                row += '<i style="font-size: 27px;" class="fas fa-thumbs-down fa-5x"><span>' + data.data[x].disliked + '</span></i>';

                                                // row += '<button id="businessDislike' + data.data[x].businessId + '" class="text-danger">Dislike <span>' + data.data[x].disliked + '</span></button>';

                                                row += '</li>';
                                                row += '</ul>';
                                                row += '</div>';




                                                row += '</article>';


                                            };


                                            $('#listBusiness').html(row);



                                        };



                                    });
                                };
                            </script>
                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li style="cursor: pointer;"><a onclick="selectBusiness('Photographer')">Photographer</a></li>
                                    <li style="cursor: pointer;"><a onclick="selectBusiness('Designer')">Designer </a></li>
                                    <li style="cursor: pointer;"><a onclick="selectBusiness('Travel')">Travel </a></li>
                                    <li style="cursor: pointer;"><a onclick="selectBusiness('Education')">Education</a></li>

                                </ul>

                            </div><!-- End sidebar categories-->



                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->



                    <div id="listBusiness" class="col col-8 entries">

                        @foreach($data as $business)
                        <article style="margin-bottom: 26px;" class="entry row">

                            <div class="col-2 p-1">
                                <img style="width: 100px;" src="{{asset('Db/image/'. $business->logo)}}">
                            </div>

                            <div class="col-10">

                                <h2 class="entry-title">
                                    <a href="businessdetail?id={{$business->businessId}}">{{$business->title}}</a>
                                </h2>



                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{{$business->userName}}</a></li>
                                        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>

                                    </ul>
                                </div>

                                <div class="entry-content">

                                    <div id="content{{$business->businessId}}">
                                        <p>
                                            {{$business->shortDescription}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li id="divbusinessLike{{$business->businessId}}" class="d-flex align-items-center p-2">


                                        <!-- <button id="businessLike{{$business->businessId}}" class="text-danger ">Like <span>{{$business->liked}}</span></button> -->

                                        <i style="font-size: 27px;" class="fas fa-thumbs-up fa-5x"><span>{{$business->liked}}</span></i>




                                    </li>


                                    <li id="divbusinessDislike{{$business->businessId}}" class="d-flex align-items-center p-2">


                                        <!-- <button id="businessDislike{{$business->businessId}}" class="text-danger">Dislike <span>{{$business->disliked}}</span></button> -->

                                        <i style="font-size: 27px;" class="fas fa-thumbs-down fa-5x"><span>{{$business->disliked}}</span></i>


                                    </li>
                                </ul>
                            </div><!-- End blog author bio -->








                        </article>
                        @endforeach





                    </div>
                </div>
            </div>



        </section><!-- End Blog Section -->

    </main><!-- End #main -->





    <!-- ======= Footer ======= -->
    <footer id="footer">



        <h1 class="text-center p-2">justcall</h1>




    </footer><!-- End Footer -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>