<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Business</title>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
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

          <!-- <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="team.html">Team</a></li>

              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li> -->



          <li><a href="Business">Create Business</a></li>

          @auth
          <li>
            <a href="{{ url('/dashboard') }}">Dashboard</a>

          </li>
          @else
          <li>
            <a href="{{ route('login') }}">Log in</a>

          </li>


          @if (Route::has('register'))
          <li>
            <a href="{{ route('register') }}">Register</a>

          </li>

          @endif
          @endauth

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <div id="hideMain">
    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
          <button class="btn btn-success">
            <a id="newBusiness">Add Business</a>
          </button>



        </div>
      </section><!-- End Breadcrumbs -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container">

          <div class="row">

            <div class="col-lg-8 entries">



              <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li class="disabled"><i class="icofont-rounded-left"></i></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                </ul>
              </div>

            </div><!-- End blog entries list -->

            <div class="col-lg-4">

              <div class="sidebar">

                <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-item search-form">
                  <form action="">
                    <input type="text">
                    <button type="submit"><i class="icofont-search"></i></button>
                  </form>

                </div><!-- End sidebar search formn-->



              </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

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
  </div>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- ///////////////////////////////////////////////////////////////////////////////////// -->
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
      // $('#normalUser').click(function() {
      //   $('#business').attr('hidden', true);
      // });
    });
  </script>
  <script>
    CKEDITOR.replace('editor1');
  </script>
</body>

</html>