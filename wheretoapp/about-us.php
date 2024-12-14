<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>About Us </title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">
        
        <!-- Main box -->
        
    <?php include("header.php");?>

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">

                <div class="outer-box">
                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn mobile-search-btn"><i class="flaticon-magnifying-glass"></i></button>
                    </div>

                    <!-- Cart btn -->
                    <div class="cart-btn">
                        <a href="shopping-cart.html"><i class="icon flaticon-shopping-bag"></i> <span class="count">2</span></a>
                    </div>

                    <!-- Login/Register -->
                    <div class="login-box"> 
                        <a href="login.html" class="call-modal"><span class="flaticon-user"></span></a>
                    </div>
                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="fa fa-bars"></span></a>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            
            <div class="search-inner">
                <button class="close-search"><span class="fa fa-times"></span></button>
                <form method="post" action="blog-showcase.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

    </header>
    <!--End Main Header -->

    <!-- Page Title -->
    <section class="listing-banner">
        <div class="background-layer pink-gradient" style="background-image: url(images/banner/3111.jpg);"></div>

        <div class="auto-container">
            <!-- Content Box -->
            <div class="content-box">
                    
                <h1 style="color:white;">About us</h1>
				<!--div class="text">Aliquam erat volutpat. Praesent mattis</div-->
            </div>

			
        </div>
    </section>
    <!-- End Page Title -->

    <!-- What We Do -->
    <section class="what-we-do">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>What we do?</h2>
                <span class="divider"></span>
                <!--div class="text">Explore some of the best tips from around the city from our partners and friends.</div-->
            </div>

            <div class="row">
                <!-- Video Column >
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="video-box">
                        <figure class="image"><img src="images/resource/video-img-2.jpg" alt=""></figure>
                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image"><span class="icon flaticon-multimedia"></span></a>
                    </div>
                </div-->

                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="inner">
                            <!--h4>Our Awesome Story</h4-->
                            <p>At Mylocaledge.com, we're all about giving local businesses the edge they need to succeed. In today's competitive market, staying ahead means being visible, reliable, and connected to your community. That's where we come in. Our directory is meticulously curated to feature businesses that are making waves locally. Whether you're a budding entrepreneur seeking a platform or a resident looking for the best in town, Mylocaledge.com is your trusted guide.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="fact-counter">

                <!--Column>
                <div class="counter-column wow fadeInUp">
                    <div class="count-box">
                        <span class="count-text" data-speed="5000" data-stop="985">0</span>
                        <h4 class="counter-title">Happy customers</h4>
                    </div>
                </div>

                <!--Column>
                <div class="counter-column wow fadeInUp" data-wow-delay="400ms">
                    <div class="count-box">
                        <span class="count-text" data-speed="5000" data-stop="796">0</span>
                        <h4 class="counter-title">Listing pages</h4>
                    </div>
                </div>

                <!--Column>
                <div class="counter-column wow fadeInUp" data-wow-delay="800ms">
                    <div class="count-box">
                        <span class="count-text" data-speed="5000" data-stop="3890">0</span>
                        <h4 class="counter-title">Best followers</h4>
                    </div>
                </div>

                <!--Column>
                <div class="counter-column wow fadeInUp" data-wow-delay="1200ms">
                    <div class="count-box">
                        <span class="count-text" data-speed="5000" data-stop="80">0</span>
                        <h4 class="counter-title">Team members</h4>
                    </div>
                </div>
            </div-->
        </div>
    </section>
    <!-- End What We Do -->

    <!-- How It Works >
    <section class="how-it-works">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>See How It Works</h2>
                <span class="divider"></span>
                <div class="text">Discover how Listable can you help you find everything you want.</div>
            </div>
            <div class="row">
                <!-- Work Block >
                <div class="work-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="images/icons/process-1.png" alt=""></figure>
                        <h4><a href="#">Choose What To Do</a></h4>
                        <div class="text">Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping? </div>
                    </div>
                </div>

                <!-- Work Block >
                <div class="work-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="images/icons/process-2.png" alt=""></figure>
                        <h4><a href="#">Find What You Want</a></h4>
                        <div class="text">Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping? </div>
                    </div>
                </div>

                <!-- Work Block >
                <div class="work-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="images/icons/process-3.png" alt=""></figure>
                        <h4><a href="#">Explore Amazing Places</a></h4>
                        <div class="text">Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping? </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End How It Works -->

    <!-- Call to Action >
    <section class="call-to-action" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="content">
                <h3>Need More Information</h3>
                <div class="text">Keep calm and get a special discount for all oders over $50 from The Naturel Coffee.<br> Hurry up! Only 3 days left.</div>
                <div class="btn-box"><a href="#" class="theme-btn btn-style-three">Explore <span class="flaticon-right"></span></a></div>
            </div>
        </div>
    </section>
    <!-- End Call to Action -->

    <!-- Testimonial Section >
    <section class="testimonial-section style-two">
        <div class="auto-container">
            <!-- Sec Title >
            <div class="sec-title text-center">
                <h2>What Our Users Say</h2>
                <span class="divider"></span>
                <div class="text">Discover how Listable can you help you find everything you want.</div>
            </div>
            
            <div class="testimonial-outer">
                <!-- Product Thumbs Carousel >
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                            <div class="author-info">
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/testi-thumb-2.jpg" alt=""></figure>
                            <div class="author-info">
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/testi-thumb-3.jpg" alt=""></figure>
                            <div class="author-info">
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/testi-thumb-4.jpg" alt=""></figure>
                            <div class="author-info">
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/testi-thumb-5.jpg" alt=""></figure>
                            <div class="author-info">
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Client Testimonial Carousel >
                <div class="client-testimonial-carousel owl-carousel owl-theme">
                
                    <!--Testimonial Block >
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Especially i want to give thanks to support team, this guys are friendly, <br> correct, gave me quick and complete answers. </div>
                            <span class="title">Good job!</span>
                        </div>
                    </div>
                    
                    <!--Testimonial Block >
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Especially i want to give thanks to support team, this guys are friendly, <br> correct, gave me quick and complete answers. </div>
                            <span class="title">Good job!</span>
                        </div>
                    </div>
                    
                    <!--Testimonial Block >
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Especially i want to give thanks to support team, this guys are friendly, <br> correct, gave me quick and complete answers. </div>
                            <span class="title">Good job!</span>
                        </div>
                    </div>
                    
                    <!--Testimonial Block >
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Especially i want to give thanks to support team, this guys are friendly, <br> correct, gave me quick and complete answers. </div>
                            <span class="title">Good job!</span>
                        </div>
                    </div>
                    
                    <!--Testimonial Block >
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Especially i want to give thanks to support team, this guys are friendly, <br> correct, gave me quick and complete answers. </div>
                            <span class="title">Good job!</span>
                        </div>
                    </div>
                    
                    <!--Testimonial Block >
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Especially i want to give thanks to support team, this guys are friendly, <br> correct, gave me quick and complete answers. </div>
                            <span class="title">Good job!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clients-outer">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme">
                    <figure class="image"> <a href="#"><img src="images/clients/1.png" alt=""></a> </figure>
                    <figure class="image"> <a href="#"><img src="images/clients/2.png" alt=""></a> </figure>
                    <figure class="image"> <a href="#"><img src="images/clients/3.png" alt=""></a> </figure>
                    <figure class="image"> <a href="#"><img src="images/clients/4.png" alt=""></a> </figure>
                    <figure class="image"> <a href="#"><img src="images/clients/5.png" alt=""></a> </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Main Footer -->
    
    <?php include("footer.php");?>
    <!-- End Footer -->

</div><!-- End Page Wrapper -->


<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/chosen.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/jquery.hideseek.min.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>


