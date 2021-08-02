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

    <script src="https://kit.fontawesome.com/51172de397.js" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>


    <style>
        .tool {
            position: relative;
            display: inline-block;

        }

        .tool .tooltext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
            bottom: 100%;
            left: 50%;
            margin-left: -60px;
        }

        .tool:hover .tooltext {
            visibility: visible;
        }
    </style>




    <style>
        .showMore {
            height: 40px;
            overflow: hidden;
        }

        .read-more a:hover {
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .hideComment {
            display: none;
        }
    </style>


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <!-- <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section> -->

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

            <div class="container">



                <div class="row">

                    <div class="col-lg-8 entries">
                        @foreach($data as $business)
                        <article class="entry row">

                            <div class="entry-img">
                                <img class="img-fluid" src="{{asset('Db/image/'. $business->images)}}">
                            </div>



                            <h2 class="entry-title">
                                <a href="blog-single.html">{{$business->title}}</a>
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
                                        {{$business->fullDescription}}
                                    </p>
                                </div>
                            </div>

                            <div class="entry-meta">
                                <ul>
                                    <li id="divbusinessLike{{$business->businessId}}" class="d-flex align-items-center p-2">
                                        @if ($business->userId == Auth::user()->id)

                                        <span class="tool"> <i style="font-size: 32px;font-weight:100;" class="fa fa-thumbs-up fa-5x"></i><span class="tooltext">You con not like or dislike your own Business</span></span>


                                        @elseif($business->liked == 1 && $business->userId !== Auth::user()->id)

                                        <!-- <button id="businessLike{{$business->businessId}}" onclick="destroyBusinessLike('{{$business->businessId}}','{{Auth::user()->id}}')" class="text-danger ">Liked</button> -->

                                        <span id="businessLike{{$business->businessId}}" onclick="destroyBusinessLike('{{$business->businessId}}','{{Auth::user()->id}}')">

                                            <i style="font-size: 32px;color: dodgerblue;cursor: pointer;" class="fas fa-thumbs-up fa-5x"></i>

                                        </span>

                                        @else

                                        <!-- <button id="businessLike{{$business->businessId}}" onclick="businessLike('{{$business->businessId}}','{{Auth::user()->id}}')" class="text-danger">Like</button> -->

                                        <span id="businessLike{{$business->businessId}}" onclick="businessLike('{{$business->businessId}}','1')">

                                            <i style="font-size:32px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-up fa-5x"></i>

                                        </span>

                                        @endif
                                    </li>


                                    <li id="divbusinessDislike{{$business->businessId}}" class="d-flex align-items-center p-2">
                                        @if ($business->userId == Auth::user()->id)

                                        <span class="tool"> <i style="font-size: 32px;font-weight:100;" class="fa fa-thumbs-down fa-5x"></i><span class="tooltext">You con not like or dislike your own Business</span></span>


                                        @elseif($business->disliked == 1 && $business->userId !== Auth::user()->id)

                                        <!-- <button id="businessDislike{{$business->businessId}}" onclick="destroyBusinessLike('{{$business->businessId}}','{{Auth::user()->id}}')" class="text-danger">Disliked</button> -->

                                        <span id="businessDislike{{$business->businessId}}" onclick="destroyBusinessDislike('{{$business->businessId}}','{{Auth::user()->id}}')">
                                            <i style="font-size:32px;color: red;cursor: pointer;" class="fas fa-thumbs-down fa-5x"></i>
                                        </span>

                                        @else
                                        <!-- <button id="businessDislike{{$business->businessId}}" onclick="businessDislike('{{$business->businessId}}','{{Auth::user()->id}}')" class="text-danger">Dislike</button> -->

                                        <span id="businessDislike{{$business->businessId}}" onclick="businessDislike('{{$business->businessId}}','0')">

                                            <i style="font-size: 32px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-down fa-5x"></i>

                                        </span>

                                        @endif
                                    </li>

                                    <li id="businessComment{{$business->businessId}}" class="d-flex align-items-center p-2"> <button onclick="getComment('{{$business->businessId}}')"><i class="fa fa-comment"></i>Reviews</button> </li>
                                </ul>
                            </div><!-- End blog author bio -->
                            <script>
                                function businessLike(businessId, likeDislike1) {

                                    $("#divbusinessDislike" + businessId).html('<span id="' + "businessDislike" + businessId + '" onclick="' + "businessDislike(" + businessId + ',' + 1 + ')"> <i style="font-size: 32px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-down fa-5x"></i></span></li>');


                                    $("#divbusinessLike" + businessId).html('<span id="' + "businessLike" + businessId + '" onclick="destroyBusinessLike(' + businessId + ',' + '{{Auth::user()->id}}' + ')"><i style="font-size: 32px;color: dodgerblue;cursor: pointer;" class="fas fa-thumbs-up fa-5x"></i></span>');

                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    var data = {

                                        businessId: businessId,
                                        likeDislike: likeDislike1,
                                    };

                                    $.post("{{route('post.like')}}", {
                                        data: data
                                    }, (data, status) => {
                                        // console.log(data);

                                    });


                                }

                                function destroyBusinessLike(businessId, userId) {

                                    $("#divbusinessLike" + businessId).html('<span id="' + "businessLike" + businessId + '" onclick="businessLike(' + businessId + ',' + 1 + ')"><i style="font-size:32px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-up fa-5x"></i></span>');

                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    var data = {
                                        userId: '{{Auth::id()}}',
                                        businessId: businessId,
                                        likeDislike: 1,
                                    };

                                    $.post("{{route('post.destroylike')}}", {
                                        data: data
                                    }, (data, status) => {
                                        //console.log(data);

                                    });

                                }

                                function businessDislike(businessId, likeDislike) {

                                    $("#divbusinessLike" + businessId).html('<span id="' + "businessLike" + businessId + '" onclick="businessLike(' + businessId + ',' + 1 + ')"><i style="font-size:32px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-up fa-5x"></i></span>');

                                    $("#divbusinessDislike" + businessId).html('<span id="' + "businessDislike" + businessId + '" onclick="' + "destroyBusinessDislike(" + businessId + ',' + "{{Auth::user()->id}}" + ')"><i style="font-size:32px;color: red;cursor: pointer;" class="fas fa-thumbs-down fa-5x"></i></span></li>');

                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    var data = {
                                        businessId: businessId,
                                        likeDislike: likeDislike,
                                    };

                                    $.post("{{route('post.like')}}", {
                                        data: data
                                    }, (data, status) => {
                                        console.log(data);
                                    });



                                }

                                function destroyBusinessDislike(businessId, userId) {

                                    $("#divbusinessDislike" + businessId).html('<span id="' + "businessDislike" + businessId + '" onclick="' + "businessDislike(" + businessId + ',' + 0 + ')"><i style="font-size:32px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-down fa-5x"></i></span></li>');

                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    var data = {
                                        userId: '{{Auth::id()}}',
                                        businessId: businessId,
                                        likeDislike: 0,
                                    };

                                    $.post("{{route('post.destroylike')}}", {
                                        data: data
                                    }, (data, status) => {

                                    });

                                }
                            </script>




                            <div class="blog-comments hideComment" id="detailComment{{$business->businessId}}">

                                <h4 class="comments-count"><span id="commentCount{{$business->businessId}}"></span><span class="p-1">Review</span> </h4>

                                <div id="allComments{{$business->businessId}}">







                                </div>
                                <div class="reply-form">
                                    <h4>Leave a Review</h4>

                                    <form id="comment{{$business->businessId}}" action="">
                                        @csrf
                                        <input type="text" id="findBusinessId{{$business->businessId}}" name="businessId" value="{{$business->businessId}}" hidden>
                                        <input type="text" id="findUserId" name="userId" value="{{Auth::user()->id}}" hidden>
                                        <div class="row">
                                            <div class="col form-group">
                                                <textarea name="comment" id="commentText{{$business->businessId}}" class="form-control" placeholder="Your Comment" required></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Review</button>

                                    </form>
                                </div>

                            </div><!-- End blog comments -->

                            <script>
                                function getComment(businessId) {
                                    $('#businessComment' + businessId).html('<i style="font-size:20px" class="fas fa-spinner fa-spin"></i>');
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });


                                    var data = {
                                        businessId: businessId,
                                    };
                                    //console.log(businessId);

                                    var row = '';
                                    var count = 0;
                                    $.post("{{route('post.commentAll')}}", {
                                        data: data
                                    }, (data, status) => {

                                        $('#businessComment' + businessId).html('<button onclick="getComment(' + businessId + ')"><i class="fa fa-comment"></i>Reviews</button>');

                                        for (x in data.data) {
                                            count += 1;
                                            console.log(data.data);
                                            row += '<div value="' + data.data[x].cId + '" class="comment clearfix">';
                                            row += '<img src="assets/img/comments-2.jpg" class="comment-img  float-left" alt="">';
                                            row += ' <h5><a style="font-size:7px" href="">"' + data.data[x].name + '"</a> </h5>';
                                            row += '<p style="font-size:5px">"' + data.data[x].comment + '"</p>';

                                            row += '<span class="p-1" id="' + "divCommentLike" + businessId + data.data[x].cId + '" >';

                                            if (data.data[x].commentByUserID == '{{Auth::user()->id}}') {

                                                row += '<span class="tool"> <i style="font-size: 32px;font-weight:100;" class="fas fa-thumbs-up fa-5x"></i><span class="tooltext">You con not like or dislike your own comment</span></span>';

                                            } else if (data.data[x].commentByUserID !== '{{Auth::user()->id}}' && data.data[x].liked == 1) {
                                                row += ' <span id="' + "commentLike" + businessId + data.data[x].cId + '" onclick="destroyCommentLike(' + "{{Auth::user()->id}}" + ',' + businessId + ',' + data.data[x].cId + ')" > <i style="font-size: 32px;color: dodgerblue;cursor: pointer;" class="fas fa-thumbs-up fa-5x"></i></span>';
                                            } else {
                                                row += ' <span id="' + "commentLike" + businessId + data.data[x].cId + '" onclick="commentLike(' + "{{Auth::user()->id}}" + ',' + businessId + ',' + data.data[x].cId + ')" ><i style="font-size: 28px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-up fa-5x"></i></span>';
                                            }
                                            row += '</span>';

                                            row += '<span class="p-1" id="' + "divCommentDislike" + businessId + data.data[x].cId + '">';


                                            if (data.data[x].commentByUserID == '{{Auth::user()->id}}') {


                                                row += ' <span class="tool"><i style="font-size: 28px;font-weight:100;" class="fa fa-thumbs-down fa-5x"></i><span class="tooltext">You con not like or dislike your own comment</span></span>';
                                            } else if (data.data[x].commentByUserID !== '{{Auth::user()->id}}' && data.data[x].disliked == 1) {
                                                row += ' <span id="' + "commentDislike" + businessId + data.data[x].cId + '" onclick="destroyCommentDislike(' + "{{Auth::user()->id}}" + ',' + businessId + ',' + data.data[x].cId + ')" > <i style="font-size: 32px;color:red;cursor: pointer;" class="fas fa-thumbs-down fa-5x"></i></span>';
                                            } else {
                                                row += ' <span id="' + "commentDislike" + businessId + data.data[x].cId + '" onclick="commentDislike(' + "{{Auth::user()->id}}" + ',' + businessId + ',' + data.data[x].cId + ')" ><i style="font-size: 28px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-down fa-5x"></i></span>';
                                            }

                                            row += '</span>';


                                            row += '</div>';

                                        }
                                        $('#allComments' + businessId).html(row);
                                        $('#commentCount' + businessId).html(count);
                                    });



                                    $('#detailComment' + businessId).toggleClass('hideComment');
                                };


                                function commentLike(userId, businessId, commentId) {

                                    $("#divCommentLike" + businessId + commentId).html('<span id="' + "commentLike" + businessId + commentId + '" onclick="destroyCommentLike(' + userId + ',' + businessId + ',' + commentId + ')"><i style="font-size: 32px;color: dodgerblue;cursor: pointer;" class="fas fa-thumbs-up fa-5x"></i></span>');

                                    $("#divCommentDislike" + businessId + commentId).html('<span id="' + "commentDislike" + businessId + commentId + '" onclick="commentDislike(' + userId + ',' + businessId + ',' + commentId + ')"><i style="font-size: 28px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-down fa-5x"></i></span>');


                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    var data = {
                                        userId: userId,
                                        businessId: businessId,
                                        commentId: commentId,
                                        likeDislike: 1,
                                    };

                                    //console.log(data);
                                    $.post("{{route('post.commentLike')}}", {
                                        data: data
                                    }, (data, status) => {

                                    });



                                }


                                function commentDislike(userId, businessId, commentId) {

                                    $("#divCommentDislike" + businessId + commentId).html('<span id="' + "commentDislike" + businessId + commentId + '" onclick="destroyCommentDislike(' + userId + ',' + businessId + ',' + commentId + ')"><i style="font-size: 32px;color:red;cursor: pointer;" class="fas fa-thumbs-down fa-5x"></i></span>');

                                    $("#divCommentLike" + businessId + commentId).html('<span id="' + "commentLike" + businessId + commentId + '" onclick="commentLike(' + userId + ',' + businessId + ',' + commentId + ')"><i style="font-size: 28px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-up fa-5x"></i></span>');

                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    var data = {
                                        userId: userId,
                                        businessId: businessId,
                                        commentId: commentId,
                                        likeDislike: 0,
                                    };
                                    //console.log(data);
                                    $.post("{{route('post.commentLike')}}", {
                                        data: data
                                    }, (data, status) => {

                                    });





                                }


                                function destroyCommentLike(userId, businessId, commentId) {


                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    var data = {
                                        userId: userId,
                                        businessId: businessId,
                                        commentId: commentId,
                                        likeDislike: 1,
                                    };

                                    //console.log(data);
                                    $.post("{{route('post.destroyCommentLike')}}", {
                                        data: data
                                    }, (data, status) => {
                                        $("#divCommentLike" + businessId + commentId).html('<span id="' + "commentLike" + businessId + commentId + '" onclick="commentLike(' + userId + ',' + businessId + ',' + commentId + ')"><i style="font-size: 28px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-up fa-5x"></i></span>');
                                    });

                                }

                                function destroyCommentDislike(userId, businessId, commentId) {

                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    var data = {
                                        userId: userId,
                                        businessId: businessId,
                                        commentId: commentId,
                                        likeDislike: 0,
                                    };

                                    //console.log(data);
                                    $.post("{{route('post.destroyCommentLike')}}", {
                                        data: data
                                    }, (data, status) => {
                                        $("#divCommentDislike" + businessId + commentId).html('<span id="' + "commentDislike" + businessId + commentId + '" onclick="commentDislike(' + userId + ',' + businessId + ',' + commentId + ')"><i style="font-size: 28px;cursor: pointer;font-weight:100;" class="fa fa-thumbs-down fa-5x"></i></span>');
                                    });

                                }
                            </script>






                            <script>
                                $("#comment{{$business->businessId}}").submit(function(e) {
                                    e.preventDefault();

                                    var row = '';

                                    $.ajax({
                                        url: "{{route('post.comment')}}",
                                        method: "post",
                                        data: new FormData(this),
                                        processData: false,
                                        dataType: "json",
                                        contentType: false,

                                        success: function(data) {
                                            //console.log(data);

                                            for (x in data.data) {

                                                //console.log(data.data[x].name);
                                                row += '<div value="' + data.data[x].commentId + '" class="comment clearfix">';
                                                row += '<img src="assets/img/comments-2.jpg" class="comment-img  float-left" alt="">';
                                                row += ' <h5><a style="font-size:7px" href="">"' + data.data[x].name + '"</a> </h5>';
                                                row += '<p style="font-size:5px">"' + data.data[x].comment + '"</p>';

                                                row += '<span class="p-1" id="' + "divCommentLike" + "{{$business->businessId}}" + data.data[x].commentId + '" >';

                                                row += ' <span class="tool"><i style="font-size: 28px;font-weight:100;" class="fa fa-thumbs-up fa-5x"></i><span class="tooltext">You con not like or dislike your own comment</span></span>';
                                                row += '</span>';

                                                row += '<span class="p-1" id="' + "divCommentDislike" + "{{$business->businessId}}" + data.data[x].commentId + '">';

                                                row += ' <span class="tool"><i style="font-size: 28px;font-weight:100;" class="fa fa-thumbs-down fa-5x"></i><span class="tooltext">You con not like or dislike your own comment</span></span>';

                                                row += '</span>';

                                                row += '</div>';


                                            }
                                            $('#allComments{{$business->businessId}}').append(row);
                                            $('#commentText{{$business->businessId}}').val('');
                                            var count = parseInt($('#commentCount{{$business->businessId}}').html()) + 1;
                                            $('#commentCount{{$business->businessId}}').html(count);
                                        },
                                        error: function(xhr, status, error) {

                                        },
                                    });


                                });
                            </script>




                    </div><!-- End blog entries list -->



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