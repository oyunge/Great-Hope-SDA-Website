{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Crose - Modern Church Template | Sermons</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color:#2222B3;
          color: white;
          text-align: center;
        }
        </style>

</head>

<body> --}}
    @extends('layouts.app')

@section('content')
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <!-- Line -->
        <div class="line-preloader"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        

        <!-- ***** Navbar Area ***** -->
        <div class="crose-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="croseNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/departments">Departments</a></li>
                                    <li><a href="/events">Events</a></li>
                                    <li><a href="/sermons">Sermons</a></li>
                                    <li><a href="/contact">Contact</a></li>
                              



                                </ul>



                                <!-- Donate Button -->
                                <a href="#" class="btn crose-btn header-btn">Donate Us</a>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ***** Search Form Area ***** -->
            <div class="search-form-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="searchForm">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Enter keywords &amp; hit enter...">
                                    <button type="submit" class="d-none"></button>
                                </form>
                                <div class="close-icon" id="searchCloseIcon"><i class="fa fa-close" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Navbar Area ***** -->
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sermons</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Sermons Area Start ##### -->
    <div class="sermons-content-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sermons-content-thumbnail">
                        <img src="img/bg-img/31.jpg" alt="">
                    </div>
                    <!-- Sermons Text -->
                    <div class="sermons-text text-center">
                        <h2>Start a New Way of Living</h2>
                        <div class="sermons-meta-data d-flex flex-wrap justify-content-center">
                            <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>Jorge Malone</span></p>
                            <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>God, Pray</span></p>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> March 10 on <span>9:00 am - 11:00 am</span></p>
                        </div>
                        <div class="sermons-cata">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Video"><i class="fa fa-video-camera" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Audio"><i class="fa fa-headphones" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Docs"><i class="fa fa-file" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use
                            a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassin.</p>
                        <div class="read-more-share d-flex flex-wrap justify-content-between">
                            <div class="read-more-btn">
                                <a href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                            <!-- Share -->
                            <div class="share">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Sermons Area End ##### -->

    <!-- ##### Latest Sermons Area Start ##### -->
    <section class="latest-sermons-area">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Popular Sermons</h2>
                        <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Latest Sermons -->
                <?php foreach ($sermons as $sermon){ ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-latest-sermons mb-100">
                        <div class="sermons-thumbnail">
                            <img src="/storage/cover_images/{{$sermon->cover_image}}" alt="" class="img-fluid">
                            <!-- Date -->
                            <div class="sermons-date">
                                <h6><span>10</span>MAR</h6>
                            </div>
                        </div>
                        <div class="sermons-content">
                            <div class="sermons-cata">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Video"><i class="fa fa-video-camera" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Audio"><i class="fa fa-headphones" aria-hidden="true"><?php echo $sermon['featured_mp3']; ?></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Docs"><i class="fa fa-file" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            </div>
                            <h4><?php echo $sermon['title']; ?></h4>
                            <div class="sermons-meta-data">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span><?php echo $sermon['sermonFrom']; ?></span></p>
                                <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span><?php echo $sermon['categories']; ?></span></p>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i><span>{{$sermon ->created_at}}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
                               
               
                  
    </section>
    @endsection
    <!-- ##### Latest Sermons Area End ##### -->

   
    <!-- ##### Subscribe Area End ##### -->
    {{-- <footer class="footer">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;
        <script>
            document.write(new Date().getFullYear());
        </script>Syokimau SDA Church| All rights reserved 
             <!-- Footer Social Icon -->
             <div class="col-12 col-md-6">
                <div class="footer-social-icon">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>
      
    </footer> --}}
    <!-- ##### Footer Area Start ##### -->
    {{-- <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <a href="#" class="footer-logo"><img src="img/core-img/logo2.png" alt=""></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Quick Link</h5>
                            <nav class="footer-menu">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Event</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gallery</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sermons</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Blogs</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Donate</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">News Latest</h5>

                            <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <a href="#">Polish schools in UK warned</a>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> November 11, 2017</p>
                            </div>

                            <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <a href="#">University league tables 2018</a>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> November 11, 2017</p>
                            </div>

                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Contact Us</h5>

                            <div class="contact-information">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 40 Baria Sreet, NewYork City, US</p>
                                <a href="callto:001-1234-88888"><i class="fa fa-phone" aria-hidden="true"></i> 001-1234-88888</a>
                                <a href="mailto:info.deercreative@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> info.deercreative@gmail.com</a>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Mon - Fri: 08.00am - 18.00pm</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copwrite Area -->
        <div class="copywrite-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center flex-wrap">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                    <!-- Footer Social Icon -->
                    <div class="col-12 col-md-6">
                        <div class="footer-social-icon">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    {{-- <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html> --}}