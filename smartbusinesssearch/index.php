<?php 
////session_start();
//
require_once('includes/config.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    
</head>
<body>
<div class="page_loader"></div>

<!-- Main header start -->
<?php include("header.php");?>
<!-- Main header start -->

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-3.png" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex text-center"></div>
            </div>
        </div>
    </div>
    <div class="bi-4">
        <div class="container">
            <div class="text-center">
			
			<h1 class="b-text">Welcome to Smart Business Search</h1>
                <p>The forefront of innovative business listings</p>
				<!--div class="banner-info">
                    <ul>
                        <li><a href="#"><i class="flaticon-hotel color-red"></i> <h5>Hotels</h5></a></li>
                        <li><a href="#"><i class="flaticon-cook color-green"></i> <h5>Resturent</h5></a></li>
                        <li><a href="#"><i class="flaticon-shop color-yellow"></i> <h5>Shops</h5></a></li>
                        <li><a href="#"><i class="flaticon-gym color-blue"></i> <h5>Gym</h5></a></li>
                        <li><a HREF="#"><i class="flaticon-monitor color-grey"></i> <h5>Event</h5></a></li>
                    </ul>
                </div>
                <div class="banner-info-2">
                    <ul>
                        <li><a href="#"><i class="flaticon-hotel color-red"></i>Hotels</a></li>
                        <li><a href="#"><i class="flaticon-cook color-green"></i>Resturent</a></li>
                        <li><a href="#"><i class="flaticon-shop color-yellow"></i>Shops</a></li>
                        <li><a href="#"><i class="flaticon-gym color-blue"></i>Gym</a></li>
                        <li><a HREF="#"><i class="flaticon-monitor color-grey"></i>Event</a></li>
                    </ul>
                </div>
                
                <div class="inline-search-area ml-auto mr-auto">
                    <div class="search-boxs">
                        <div class="search-col">
                            <input type="text" name="search" class="form-control has-icon b-radius" placeholder="What are you looking for?">
                        </div>
                        <div class="search-col">
                            <i class="fa fa-map-marker icon-append"></i>
                            <input type="text" name="location" class="form-control has-icon b-radius" placeholder="Location">
                        </div>
                        <div class="search-col categories b-radius">
                            <select class="selectpicker search-fields" name="location">
                                <option>All Categories</option>
                                <option>Shops</option>
                                <option>Hotels</option>
                                <option>Restaurants</option>
                                <option>Fitness</option>
                            </select>
                        </div>
                        <div class="find">
                            <button class="btn button-theme btn-search btn-block b-radius">
                                <i class="fa fa-search"></i><strong>Find</strong>
                            </button>
                        </div>
                    </div>
                </div-->
                
            </div>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Categories strat -->
<div class="categories content-area-7">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Featured Categories</h1>
            <p>Recent additions and updates on SmartBusinessSearch</p>
        </div>
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <?php
					for($i=0;$i<8;$i++)
					{
					?>
								<div class="feature-block col-lg-3 col-md-6 col-sm-12" style="padding: 15px;">
									<div class="inner-box" style="
										background: linear-gradient(135deg, rgba(51,196,235,0.95), rgba(160,233,247,0.95)), url('images/bg-pattern.png');
										background-size: cover;
										background-position: center;
										border-radius: 15px;
										overflow: hidden;
										box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
										text-align: center;
										padding: 20px;
										min-height: 140px;
										display: flex;
										flex-direction: column;
										justify-content: space-between;
									">
										
										<div class="overlay-box" style="flex-grow: 1;">
											<div class="content" style="color: #fff;">
												<span class="icon-box flaticon-star" style="font-size: 24px; display: block; margin-bottom: 10px;"></span>
												<h5 style="margin-bottom: 10px; font-weight: bold;"><?php echo $row["category_name"]; ?></h5>
												<a style="color: #fff; font-weight: bold; text-decoration: underline;" href="<?php echo $my_global_variable;?>grid-fullwidth.php?category_id=<?php echo $all_cate_list[$i]['cat_id']?>"><?php echo $all_cate_list[$i]['name'];?></a>
											</div>
										</div>
									</div>
								</div>

								<?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories end -->
<?php /* ?>
<!-- Listing item start -->
<div class="listing-item content-area-14 bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Popular Listings</h1>
            <p>Check out the recent businesses on Smart Business Search...</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <?php
				echo "test";
				$sql = "select * from listing_master as a left join category_master as b on a.category_id = b.cat_id order by a.id desc LIMIT 0,10";							
					$result = mysqli_query($con,$sql);							
							
							//die;
					
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
						{				
				?>
				
				<div class="slick-slide-item">
                    <div class="listing-item-box">
                        <div class="listing-thumbnail">
                            <a href="<?php echo $my_global_variable;?>Listing/L-<?php echo $row['yid'];?>" class="listing-photo">
                                <div class="tag"><?php echo $row["category_name"];?></div>
                                <img class="d-block w-100" src="img/cate/<?php echo $row["image"];?>" alt="listing-photo">
                                <div class="user">
                                    <!--div class="avatar">
                                        <img src="img/avatar/avatar-1.png" alt="avatar" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="name">
                                        <h5><?php //echo $row["name"];?></h5>
                                    </div-->
                                </div>
                            </a>
                        </div>
                        <div class="detail">
                            <div class="top">
                                <h3 class="title">
                                    <a href="<?php echo $my_global_variable;?>Listing/L-<?php echo $row['yid'];?>"><?php echo $row["name"];?></a>
                                </h3>
                                <div class="location">
                                    <a href="#"><i class="flaticon-pin"></i><?php echo $row['street'];?>, <?php echo $row['city'];?>-<?php echo $row['postal_code'];?></a>
                                </div>
                                <p><?php echo substr($row['description'], 0, 20);?>...</p>
                            </div>
                            <!--div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>( 14 Reviews )</span>
                            </div-->
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="slick-btn">
                <div class="slick-prev slick-arrow-buton-2 sab-4">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="slick-next slick-arrow-buton-2 sab-3">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Listing item end -->
<?php */ ?>
<!-- Services start >
<div class="services content-area ">
    <div class="container">
        <!-- Main title >
        <div class="main-title text-center">
            <h1>How It Works</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-find-1"></i>
                    </div>
                    <h3>Find Interesting Place</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-mail"></i>
                    </div>
                    <h3>Contact a Few Owners</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <h3>Make a Reservation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->

<!-- Counters strat >
<div class="counters overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="counter-box">
                    <!--i class="flaticon-category"></i>
                    <h2 class="counter">2381</h2>
                    <p>Categories</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="counter-box">
                    <!--i class="flaticon-list"></i>
                    <h2 class="counter">22458</h2>
                    <p>Listings</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="counter-box">
                    <!--i class="flaticon-countries"></i>
                    <h2 class="counter">43</h2>
                    <p>Countries</p>
                </div>
            </div>
            <!--div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-monitor"></i>
                    <h2 class="counter">177</h2>
                    <p>Projects</p>
                </div>
            </div>
        </div>
    </div>
</div>
< Counters end -->

<!-- Pricing tables start >
<div class="pricing-tables content-area">
    <div class="container">
        <!-- Main title >
        <div class="main-title text-center">
            <h1>Pricing Tables</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="pricing">
                    <div class="price-header">
                        <div class="title">Basic Plan</div>
                        <div class="price">$20.99</div>
                    </div>
                    <div class="content">
                        <ul>
                            <li>20 Projects</li>
                            <li>32GB Storage</li>
                            <li>50 Email Accounts</li>
                            <li>12GB Bandwidth</li>
                            <li>32GB Storage</li>
                        </ul>
                        <div class="button"><a href="#" class="btn btn-outline pricing-btn">Get Started</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="pricing featured">
                    <div class="listing-badges">
                        <span class="featured">Featured</span>
                    </div>
                    <div class="price-header price-header-2">
                        <div class="title">Professional</div>
                        <div class="price">$20.99</div>
                    </div>
                    <div class="content">
                        <ul>
                            <li>20 Projects</li>
                            <li>32GB Storage</li>
                            <li>50 Email Accounts</li>
                            <li>12GB Bandwidth</li>
                            <li>32GB Storage</li>
                        </ul>
                        <div class="button"><a href="#" class="btn btn-outline pricing-btn button-theme">Get Started</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="pricing">
                    <div class="price-header">
                        <div class="title">Exclusive</div>
                        <div class="price">$20.99</div>
                    </div>
                    <div class="content">
                        <ul>
                            <li>20 Projects</li>
                            <li>32GB Storage</li>
                            <li>50 Email Accounts</li>
                            <li>12GB Bandwidth</li>
                            <li>32GB Storage</li>
                        </ul>
                        <div class="button"><a href="#" class="btn btn-outline pricing-btn">Get Started</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing tables end -->

<!-- Testimonial start >
<div class="testimonial overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h1>Our Testimonial</h1>
                </div>
            </div>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="img/avatar/avatar-1.png" alt="testimonial" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Maria Blank</h5>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="img/avatar/avatar-2.png" alt="testimonial" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Karen Paran</h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="img/avatar/avatar-3.png" alt="testimonial" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="img/avatar/avatar-4.png" alt="testimonial" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->

<!-- Blog start >
<div class="blog content-area">
    <div class="container">
        <!-- Main title >
        <div class="main-title">
            <h1>Tips & Articles</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <!-- Slick slider area start >
        <div class="slick-slider-area clearfix">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-1.png" alt="blog" class="img-fluid">
                            <div class="date-box">
                                23 Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Starting your fitnees</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry....</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-3.png" alt="blog" class="img-fluid">
                            <div class="date-box">
                                27 Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Top 35 Hotel in canada</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry....</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-2.png" alt="blog" class="img-fluid">
                            <div class="date-box">
                                27 Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">The best food in dubai</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry....</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-1.png" alt="blog" class="img-fluid">
                            <div class="date-box">
                                23 Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Starting your fitnees</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-1.png" alt="blog" class="img-fluid">
                            <div class="date-box">
                                23 Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Starting your fitnees</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-2.png" alt="blog" class="img-fluid">
                            <div class="date-box">
                                27 Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">The best food in dubai</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<div class="clearfix"></div>
<!-- Partners strat >
<div class="partners">
    <div class="container">
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                <div class="slick-slide-item"><img src="img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->

<!-- Footer start -->
<?php include("footer.php");?>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/moment.min.js"></script>
<script  src="js/daterangepicker.min.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>