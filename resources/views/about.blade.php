<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Syokimau Central</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>

.flex-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  justify-content: space-between;
}
    </style>

</head>

<body>
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
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="container">
    <div class="about-us-area about-page section-padding-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="about-content">
                        <?php foreach ($contents as $content){ ?>
                        <h2><?php echo $content['title']; ?></h2>
                        <p><?php echo $content['about']; ?></p>
                        <?php } ?>
                        <div class="opening-hours-location mt-30 d-flex align-items-center">
                            <!-- Opening Hours -->
                            <div class="opening-hours">
                                <h6><i class="fa fa-clock-o"></i> Opening Hours</h6>
                                <p>Mon - Fri at 08:00 - 21:00 <br>Sunday at 09:00 - 18:00</p>
                            </div>
                            <!-- Location -->
                            <div class="location">
                                <h6><i class="fa fa-map-marker"></i> Location</h6>
                                <p>No 40 Baria Sreet 133/2 NewYork City, NY, United States</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail">
                        <img src="img/bg-img/26.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Our History</h2>
            <hr class="my-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p style="text-align: justify">Cornerstone Church finds its roots back in 2007 when a few of the University of Nairobi SDA group members who had cleared campus, and were living within Thiong’o road decided to be meeting for Friday Vespers in their houses. Within a short time, word went round among the associates living along Waiyaki way, especially Uthiru and Cooperation who started joining the Thiongo group for Friday Vespers. By 2008, the group had grown and at least 20 members were meeting every Friday. In addition to worship, these members started a welfare kitty towards the needy in the society. All these time, the members would only meet on Friday then proceed to their churches of choice on Sabbath. By the close of the year, the members saw it was wise to begin a worship facility within the area to address the following among others:

                Have a place of worship within their area of residence to avoid many movements on Sabbath.
                Establish an English speaking church along the Swahili dominated Waiyaki way.
                Instill responsible Christianity to members who otherwise were guests in churches all year round.
                Evangelize the area around Mountain View estate/Thiong’o road and provide for them a worship facility within reach.
                Address special needs which the university church could not offer to its associate members</p>
            
        </div>
    </div>
    



    <!-- ##### Team Members Area Start ##### -->
    <div class="team-members-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Pastoral Team</h2>
                        <p>A brief overview of what you can expect at our worship experiences.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="flex-container">
                <!-- Team Members Area -->
                <div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <?php foreach ($contents as $content){ ?>
                    <div class="single-team-members text-center mb-100">
                        {{-- <div class="team-thumb" style="background-image: url(img/bg-img/33.jpg);"> --}}
                            <div class="team-thumb" style="background-image: url(/storage/cover_images/{{$content->cover_image}});">
                            
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <h6><?php echo $content['name']; ?></h6>
                        <span><?php echo $content['position']; ?></span>
                    </div>
                    </div>
                    <?php } ?>
                </div>
                </div>
           


           
            </div>
        </div>
    </div>
    <!-- ##### Team Members Area End ##### -->

    <!-- ##### Subscribe Area Start ##### -->
</div>
    {{-- <section class="subscribe-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Subscribe Text -->
                <div class="col-12 col-lg-6">
                    <div class="subscribe-text">
                        <h3>Subscribe To Our Newsletter</h3>
                        <h6>Subcribe Us And Tell Us About Your Story</h6>
                    </div>
                </div>
                <!-- Subscribe Form -->
                <div class="col-12 col-lg-6">
                    <div class="subscribe-form text-right">
                        <form action="#">
                            <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Your Email">
                            <button type="submit" class="btn crose-btn">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ##### Subscribe Area End ##### -->

    <footer class="footer-area">
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
                                    
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Event</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gallery</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sermons</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact</a></li>
                                  
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
                                <a href="#">Adventist Church leaders vote One Humanity statement</a>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> November 11, 2017</p>
                            </div>
    
                            <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <a href="#">Adventist Eductation Is Alive And Well</a>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> November 11, 2017</p>
                            </div>
    
                        </div>
                    </div>
    
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Contact Us</h5>
    
                            <div class="contact-information">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 40 Tom Mboya Sreet, Nairobi City, Kenya</p>
                                <a href="callto:001-1234-88888"><i class="fa fa-phone" aria-hidden="true"></i> 001-1234-88888</a>
                                <a href="mailto:info.deercreative@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> info.edwinoyunge@gmail.com</a>
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
                                </script> Syokimau Central SDA|All rights reserved 
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
    </footer>
    <!-- ##### Footer Area End ##### -->
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>