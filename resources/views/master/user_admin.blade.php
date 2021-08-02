<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Admin Panel</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="user_admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="user_admin/assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />


    <script src="https://kit.fontawesome.com/51172de397.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>

    <style>
        .allBusiness {
            display: none;
        }

        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
    <script>
        $(document).ready(function() {
            getBusiness(1);
        });
    </script>
</head>

<body>
    <!-- Left Panel -->
    <div id="main">
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="home"><i class="menu-icon fa fa-laptop"></i>Home</a>
                        </li>

                        <li>

                            @if( count($data) !== 0 )
                            @if($data[0]->noOfUserBusiness < 5 ) <a href="#" id="newBusiness"><i class="menu-icon fa fa-table"></i>Create New Business</a>

                                @else

                                <a href="#" id="noBusiness"><i class="menu-icon fa fa-table"></i>Create New Business</a>
                                @endif
                                @else
                                <a href="#" id="newBusiness"><i class="menu-icon fa fa-table"></i>Create New Business</a>
                                @endif
                        </li>
                        <script>
                            $('#noBusiness').click(function() {
                                alert('You can not create more than Five Business');
                            });
                        </script>
                        <li>
                            <a href="#"> <i class="menu-icon fa fa-table"></i>Most Liked</a>

                        </li>
                        <li>
                            <a href="#"> <i class="menu-icon fa fa-table"></i>Most Commented</a>

                        </li>







                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>
        <!-- /#left-panel -->
        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="home"><span>Justcall</span></a>
                        <!-- <a class="navbar-brand" href="./"><img src="user_admin/images/logo.png" alt="Logo"></a> -->
                        <a class="navbar-brand hidden" href="./"><img src="user_admin/images/logo2.png" alt="Logo"></a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">
                        <div class="header-left">
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>

                            <div class="dropdown for-notification">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="count bg-danger">3</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="notification">
                                    <p class="red">You have 3 Notification</p>
                                    <a class="dropdown-item media" href="#">
                                        <i class="fa fa-check"></i>
                                        <p>Server #1 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <i class="fa fa-info"></i>
                                        <p>Server #2 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <i class="fa fa-warning"></i>
                                        <p>Server #3 overloaded.</p>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown for-message">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-envelope"></i>
                                    <span class="count bg-primary">4</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="message">
                                    <p class="red">You have 4 Mails</p>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="user_admin/images/avatar/1.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Jonathan Smith</span>
                                            <span class="time float-right">Just now</span>
                                            <p>Hello, this is an example msg</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="user_admin/images/avatar/2.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Jack Sanders</span>
                                            <span class="time float-right">5 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="user_admin/images/avatar/3.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Cheryl Wheeler</span>
                                            <span class="time float-right">10 minutes ago</span>
                                            <p>Hello, this is an example msg</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="user_admin/images/avatar/4.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Rachel Santos</span>
                                            <span class="time float-right">15 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="user_admin/images/admin.jpg" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" style="font-weight: 900;color: blue;" href="#"><i class="fa fa- user"></i>{{Auth::user()->name}}</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            <!-- /#header -->
            <!-- Content -->
            <div id="hideMain">
                <div class="content">
                    <!-- Animated -->
                    <div class="animated fadeIn">
                        <!-- Widgets  -->
                        <div class="row">






                        </div>
                        <!-- /Widgets -->

                        <div class="clearfix"></div>
                        <!-- Orders -->
                        <div class="orders">
                            <div id="businessList" class="row allBusiness">
                                <div class="col-11">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="box-title">Business </h4>
                                        </div>
                                        <div class="card-body--">
                                            <div id="editThis" class="table-stats order-table ov-h">
                                                <table class="table ">
                                                    <thead>
                                                        <tr>
                                                            <th class="serial">Sr.</th>
                                                            <th class="avatar">Logo</th>

                                                            <th>Business Title</th>
                                                            <th>Like</th>
                                                            <th>Dislike</th>
                                                            <th>Comment</th>
                                                            <th>Status</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="bodyListBusiness">







                                                    </tbody>
                                                </table>
                                            </div> <!-- /.table-stats -->
                                        </div>
                                    </div> <!-- /.card -->
                                </div> <!-- /.col-lg-8 -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col-lg-8 -->
                    </div> <!-- /.col-lg-8 -->
                </div> <!-- /.col-lg-8 -->


            </div>
        </div>
    </div>

    <div class="container" id="second" hidden>

        <div class="col-11" style="margin-top: 50px;">
            <div class="card">
                <div id="createForm" style=" margin-left: 120px;margin-top: 50px;" class="card-body--">
                    <form action="{{route('post.edit')}}" method="POST" enctype="multipart/form-data">
                        @csrf



                        <div class="form-group row p-2">

                            <div class="col-sm-8">
                                <label for="businessTitle">Title</label>
                                <input type="text" class="form-control @error('businessTitle') is-invalid @enderror" value="" name="businessTitle" placeholder="Business Full Title" required />

                                <input type="text" class="form-control @error('businessTitle') is-invalid @enderror" value="" name="businessId" placeholder="Business Full Title" hidden />
                                @error('lname')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>

                        </div>


                        <div class="form-group row p-2">

                            <div class="col-sm-8">
                                <label for="businessLogo">Logo</label>
                                <span id="businessLogo">

                                </span>
                                <div class="col-sm-8">
                                    <input type="file" value="" name="businessLogo" required />


                                </div>
                            </div>

                        </div>


                        <div class="form-group row p-2">

                            <div class="col-sm-8">
                                <label for="businessImage">Image</label>
                                <span id="businessImage">

                                </span>
                                <div class="col-sm-8">
                                    <input style="padding-top: 3px;" type="file" value="" name="businessImage" required />
                                </div>

                            </div>

                        </div>


                        <div class="form-group row p-2">

                            <div class="col-sm-8">
                                <label for="shortDescription">Short Description</label>
                                <textarea class="form-control" name="shortDescription" required></textarea>

                            </div>

                        </div>


                        <div class="form-group row p-2">

                            <div class="col-sm-8">
                                <label for="fullDescription">Full Description</label>
                                <textarea class="form-control" name="fullDescription" required></textarea>

                            </div>

                        </div>



                        <div class="form-group row p-2">

                            <div class="col-sm-6">

                                <button type="submit" class="btn btn-danger btn-lg ">Submit</button>
                            </div>
                            <div class="col-sm-6">

                                <button onclick="editCancel()" class="btn btn-primary btn-lg ">Cancel</button>
                            </div>

                        </div>



                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        function getBusiness(param) {
            $("#businessList").toggleClass('allBusiness');
            $('#bodyListBusiness').html('<i style="font-size:70px;margin-left:450px;margin-top:50px" class="fas fa-spinner fa-spin"></i>');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            var row = '';
            $.post("{{route('post.userBusiness')}}", {
                search: param,
            }, (data, status) => {

                console.log(data);


                if (data.data == '') {


                    row += '<div style="margin-left: 329px;" class="table-stats order-table ov-h">';


                    row += ' <p class="text-danger">' + " ..Sorry! There is no item..." + '</p>';




                    row += '</div>';



                    $('#businessList').html(row);

                } else {

                    var count = 1;
                    for (x in data.data) {

                        //console.log(data.data[x].deactive);
                        row += '<tr>';


                        row += '<td class="serial">' + count + '</td>';
                        row += '<td class="avatar">';
                        row += '<div class="round-img">';
                        row += ' <a href="#"><img style="width: 100px;" src="Db/image/' + data.data[x].logo + '"></a>';
                        row += '</div>';
                        row += '</td>';

                        row += '<td> <span class="name">' + data.data[x].title + '</span> </td>';
                        row += '<td> <span class="count">' + data.data[x].liked + '</span> </td>';

                        row += '<td><span class="count">' + data.data[x].disliked + '</span></td>';
                        row += '<td><span class="count">' + data.data[x].comment + '</span></td>';
                        if (data.data[x].deactive !== null) {
                            row += '<td><span style="cursor: pointer;padding-left:17px;padding-right:17px;" onclick="deactiveBusiness(' + data.data[x].bId + ')" class="badge badge-complete">active</span></td>';

                        } else {
                            row += '<td><span style="cursor: pointer;background-color:red" onclick="deactiveBusiness(' + data.data[x].bId + ')" class="badge badge-complete">deactive</span></td>';
                        }

                        row += '<td> <span style="cursor: pointer;" onclick="editBusiness(' + data.data[x].bId + ')" class="badge badge-complete">Edit</span> </td>';
                        row += '<td> <span style="cursor: pointer;" onclick="destroyBusiness(' + data.data[x].bId + ')" class="badge badge-complete">Delete</span> </td>';

                        row += '</tr>';


                        count += 1;

                    }
                    $('#bodyListBusiness').html(row);



                }



            });
        }

        function destroyBusiness(params) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            var row = '';
            $.post("{{route('post.destroy')}}", {
                data: params,
            }, (data, status) => {

                var count = 1;
                for (x in data.data) {
                    row += '<tr>';


                    row += '<td class="serial">' + count + '</td>';
                    row += '<td class="avatar">';
                    row += '<div class="round-img">';
                    row += ' <a href="#"><img style="width: 100px;" src="Db/image/' + data.data[x].logo + '"></a>';
                    row += '</div>';
                    row += '</td>';

                    row += '<td> <span class="name">' + data.data[x].title + '</span> </td>';
                    row += '<td> <span class="count">' + data.data[x].liked + '</span> </td>';

                    row += '<td><span class="count">' + data.data[x].disliked + '</span></td>';
                    row += '<td><span class="count">' + data.data[x].comment + '</span></td>';

                    if (data.data[x].deactive !== null) {
                        row += '<td><span style="cursor: pointer;padding-left:17px;padding-right:17px;" onclick="deactiveBusiness(' + data.data[x].bId + ')" class="badge badge-complete">active</span></td>';

                    } else {
                        row += '<td><span style="cursor: pointer;background-color:red" onclick="deactiveBusiness(' + data.data[x].bId + ')" class="badge badge-complete">deactive</span></td>';
                    }


                    row += '<td> <span onclick="editBusiness(' + data.data[x].bId + ')" class="badge badge-complete">Edit</span> </td>';
                    row += '<td> <span onclick="destroyBusiness(' + data.data[x].bId + ')" class="badge badge-complete">Delete</span> </td>';

                    row += '</tr>';


                    count += 1;

                }
                $('#bodyListBusiness').html(row);



            });
        }

        function deactiveBusiness(params) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            var row = '';
            $.post("{{route('post.deactive')}}", {
                data: params,
            }, (data, status) => {
                //console.log(data);
                var count = 1;
                for (x in data.data) {
                    //console.log(data.data[x].deactive);

                    row += '<tr>';


                    row += '<td class="serial">' + count + '</td>';
                    row += '<td class="avatar">';
                    row += '<div class="round-img">';
                    row += ' <a href="#"><img style="width: 100px;" src="Db/image/' + data.data[x].logo + '"></a>';
                    row += '</div>';
                    row += '</td>';

                    row += '<td> <span class="name">' + data.data[x].title + '</span> </td>';
                    row += '<td> <span class="count">' + data.data[x].liked + '</span> </td>';

                    row += '<td><span class="count">' + data.data[x].disliked + '</span></td>';
                    row += '<td><span class="count">' + data.data[x].comment + '</span></td>';


                    if (data.data[x].deactive !== null) {
                        row += '<td><span style="cursor: pointer;padding-left:17px;padding-right:17px;" onclick="deactiveBusiness(' + data.data[x].bId + ')" class="badge badge-complete">active</span></td>';

                    } else {
                        row += '<td><span style="cursor: pointer;background-color:red" onclick="deactiveBusiness(' + data.data[x].bId + ')" class="badge badge-complete">deactive</span></td>';
                    }




                    row += '<td> <span onclick="editBusiness(' + data.data[x].bId + ')" class="badge badge-complete">Edit</span> </td>';
                    row += '<td> <span onclick="destroyBusiness(' + data.data[x].bId + ')" class="badge badge-complete">Delete</span> </td>';

                    row += '</tr>';


                    count += 1;

                }
                $('#bodyListBusiness').html(row);



            });
        }

        function editBusiness(param) {

            $("#main").attr('hidden', true);
            $("#second").attr('hidden', false);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            var row = '';
            $.post("{{route('post.editBusiness')}}", {
                data: param,
            }, (data, status) => {

                console.log(data);
                $("input[name='businessTitle']").val(data.data[0].title);
                $("input[name='businessId']").val(data.data[0].businessId);

                $("textarea[name='shortDescription']").val(data.data[0].shortDescription);
                $("textarea[name='fullDescription']").val(data.data[0].fullDescription);

                //$("#businessLogo").html('<img style="height:50px;width:100px" src="Db/image/' + data.data[0].logo + '" />');
                //$("#businessImage").html('<img style="height:200px;width:200px" src="Db/image/' + data.data[0].images + '" />');



            });
        }

        function editCancel(param) {

            $("#main").attr('hidden', false);
            $("#second").attr('hidden', true);
            $("#businessList").toggleClass('allBusiness');
            getBusiness(param);
        }
    </script>








    <div id="addBusiness" hidden>
        <div class="container-float" style="margin: 150px 300px;background-color:whitesmoke;box-shadow: 16px 20px 35px -19px rgba(9,9,16,.2),-19px 20px 34px -19px rgba(9,9,16,.2),19px -20px 34px -19px rgba(9,9,16,.2)!important;">

            <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->

            <div class=" container" style=" margin-left: 250px;">
                <h3 style="padding: 5px;">
                    Add New Business
                </h3>
            </div>


            <div class=" container" style="margin-left: 120px;">

                <form action="{{route('post.business')}}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <input type="text" name="userId" value="{{Auth::user()->id}}" hidden>
                    <div class="form-group row p-2">

                        <div class="col-sm-8">
                            <label for="businessTitle">Title</label>
                            <input type="text" class="form-control @error('businessTitle') is-invalid @enderror" value="" name="businessTitle" placeholder="Business Full Title" required />
                            @error('lname')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                    </div>


                    <div class="form-group row p-2">

                        <div class="col-sm-8">
                            <label for="businessLogo">Logo</label>
                            <input type="file" class="form-control @error('businessLogo') is-invalid @enderror" value="" name="businessLogo" placeholder="Business Logo" required />
                            @error('lname')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                    </div>


                    <div class="form-group row p-2">

                        <div class="col-sm-8">
                            <label for="businessImage">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" value="" name="businessImage" required />
                            @error('lname')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                    </div>


                    <div class="form-group row p-2">

                        <div class="col-sm-8">
                            <label for="shortDescription">Short Description</label>
                            <textarea class="form-control" name="shortDescription" required></textarea>

                        </div>

                    </div>


                    <div class="form-group row p-2">

                        <div class="col-sm-8">
                            <label for="fullDescription">Full Description</label>
                            <textarea class="form-control" name="fullDescription" required></textarea>

                        </div>

                    </div>



                    <div class="form-group row p-2">

                        <div class="col-sm-8">

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

                            <button id="cancle" class="btn btn-danger btn-lg btn-block">Cancle</button>
                        </div>

                    </div>



                </form>

            </div>

        </div>




    </div>
    <!-- To add new business Form -->
    <script>
        $(document).ready(function() {
            $('#newBusiness').click(function() {
                $('#addBusiness').attr('hidden', false);
                $('#hideMain').attr('hidden', true);
            });
            $('#cancle').click(function() {
                $('#addBusiness').attr('hidden', true);
                $('#hideMain').attr('hidden', false);
            });
            // $('#normalUser').click(function() {
            //   $('#business').attr('hidden', true);
            // });
        });
    </script>
    <script>
        CKEDITOR.replace('editor1');
    </script>












    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Colorlib</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="user_admin/assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="user_admin/assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="user_admin/assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->

</body>

</html>