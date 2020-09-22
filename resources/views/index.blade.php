<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Crose - Modern Church Template | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <!-- Line -->
        <div class="line-preloader"></div>
    </div>
<!-- ##### Header Area Start ##### -->
<header class="header-area">
-

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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area hero-post-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/1.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Building The Hope</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Learn about our mission, our beliefs, and the hope we have in Jesus.</p>
                            <a href="#" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Become A Member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/2.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Making Jesus Known</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Learn about our mission, our beliefs, and the hope we have in Jesus.</p>
                            <a href="#" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Become A Member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
<!-- ##### welcome to church Start ##### -->
<div class="container">
    <div class="row">
        <div class="container">
        <!-- Section Heading -->
        <div class="col-12">
            <div class="section-heading">
                <h3>Welcome to Syokimau SDA Church</h3>
                
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <!-- Section Heading -->
        <div class="container">
        <div class="col-12">
            <div >
                <p style="text-align: justify">Cornerstone Seventh-day Adventist Church is a loving Christian community. Our Church is a part of the worldwide Seventh-day Adventist community and our purpose is to spread the Gospel to all Kindred, tongue, and tribe.

                    We follow the footsteps of our Savior and Lord, Jesus Christ, the Chief Cornerstone, by mingling with the community and giving hope to the hopeless and pointing them to Christ the Source of all hope.</p>
                
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <!-- Section Heading -->
        <div class="container">
        <div class="col-12">
            <div class="section-heading">
                <button type="button" class="btn btn-danger">Learn More About Us</button>
                
            </div>
        </div>
        </div>
    </div>
   <!-- ##### welcome to church end ##### -->

   

   

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Our News and Publications</h3>
                        <p>Latest information on religion, church, politics revolves around us</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Blog Post Area -->
                <?php foreach ($newsPublcations as $newsPublcation){ ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                        <div class="post-thumbnail">
                            {{-- <a href="single-post.html"><img src="img/bg-img/10.jpg" alt=""></a> --}}
                           <img src="/storage/cover_images/{{$newsPublcation->cover_image}}" >
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">
                                <h4><?php echo $newsPublcation['title']; ?></h4>
                            </a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Message From:<span><?php echo $newsPublcation['messageFrom']; ?></span></a>
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> {{$newsPublcation ->updated_at}}</a>
                            </div>
                            <p class="post-excerpt"><?php echo $newsPublcation['message']; ?></p>
                        </div>
                    </div>
                </div>
 
           
            <?php }?>
            
            </div>
        </div>
    </section>
</div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Subscribe Area Start ##### -->
    <section class="subscribe-area">
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
    </section>
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