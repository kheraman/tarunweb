<?php 
////session_start();
//
require_once('includes/config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Categories </title>

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

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    

            <!--Nav Box-->
            <?php include("header.php");  ?>
        
    <!--End Main Header -->

    <!-- Features Section -->
    <section class="features-section bg_alice">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Category List</h2>
                <span class="divider"></span>
                <div class="text">Explore some of the best tips from around the city from our partners and friends.</div>
            </div>
			<div style="margin-bottom:20px; text-align:center;">
  Select the Category starting with:
  <?php
    $selected = isset($_GET['letter']) ? $_GET['letter'] : '';
    foreach (range('A', 'Z') as $char) {
        $style = 'margin:5px; font-weight:bold; color:#f25620; text-decoration:none;';
        if ($char === $selected) {
            $style .= ' background-color:#f25620; color:white; padding:5px 10px; border-radius:4px;';
        }
        echo '<a href="allcategories.php?letter=' . $char . '" style="' . $style . '">' . $char . '</a>';
    }
  ?>
</div>
			<div class="row">
			 <?php
			
			$selected_letter = isset($_GET['letter']) ? strtoupper($_GET['letter']) : null;
			
			 echo '<div style="display:flex; flex-wrap:wrap; gap:10px;padding-bottom:50px;">';

						foreach ($all_cate_list as $cat) {
							$cat_name = $cat['name'];
							$cat_id = $cat['cat_id']; // or use the appropriate key
							
							
							if ($selected_letter && strtoupper($cat_name[0]) !== $selected_letter) continue;

							echo '<a href="categorylisting.php?category_id=' . urlencode($cat_id) . '" style="text-decoration:none;">
							<span style="
								display:inline-block;
								border: 1px solid #f25620;
								background-color: #ffe5d6;
								color: #f25620;
								padding:8px 15px;
								border-radius:20px;
								font-size:14px;
								white-space:nowrap;
								transition:all 0.3s ease;
							" onmouseover="this.style.backgroundColor=\'#f25620\'; this.style.color=\'white\';" onmouseout="this.style.backgroundColor=\'#ffe5d6\'; this.style.color=\'#f25620\';">'
							. htmlspecialchars($cat_name) .
							'</span></a>';

						}

						echo '</div>';?>
                <!-- Feature Block >
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/interested-2.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <span class="icon-box flaticon-hotel-bell"></span>
                                <h5>Restaurant</h5>
                                <span class="locations">58 Locations</span>
                                <a href="#" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block >
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/interested-3.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <span class="icon-box flaticon-weightlifting"></span>
                                <h5>Gym & Fitness</h5>
                                <span class="locations">43 Locations</span>
                                <a href="#" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
						
                <!-- Feature Block >
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/interested-4.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <span class="icon-box flaticon-museum"></span>
                                <h5>Art & History</h5>
                                <span class="locations">13 Locations</span>
                                <a href="#" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block >
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/interested-5.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <span class="icon-box flaticon-bed"></span>
                                <h5>Hotels</h5>
                                <span class="locations">129 Locations</span>
                                <a href="#" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block >
                <div class="feature-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/interested-6.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <span class="icon-box flaticon-tent"></span>
                                <h5>Outdoor Activities</h5>
                                <span class="locations">94 Locations</span>
                                <a href="#" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div-->
            </div>
        </div>
    </section>
    <!-- End Features Section -->

    <!-- Features Section Two >
    <section class="features-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Category List</h2>
                <span class="divider"></span>
                <div class="text">What type of listing would you like to add?</div>
            </div>

            <div class="row">
                <!-- Feature Block Two >
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/feature-img.jpg" alt=""></figure>
                        <div class="content">
                            <span class="icon-box flaticon-musical-note"></span>
                            <h5>Nightlife</h5>
                            <span class="locations">07 Locations</span>
                            <a href="#" class="overlay-link"></a>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Two >
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/feature-img.jpg" alt=""></figure>
                        <div class="content">
                            <span class="icon-box flaticon-hotel-1"></span>
                            <h5>Restaurant</h5>
                            <span class="locations">58 Locations</span>
                            <a href="#" class="overlay-link"></a>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Two >
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/feature-img.jpg" alt=""></figure>
                        <div class="content">
                            <span class="icon-box flaticon-weightlifting"></span>
                            <h5>Gym & Fitness</h5>
                            <span class="locations">07 Locations</span>
                            <a href="#" class="overlay-link"></a>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Two >
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/feature-img.jpg" alt=""></figure>
                        <div class="content">
                            <span class="icon-box flaticon-museum"></span>
                            <h5>Art & History</h5>
                            <span class="locations">07 Locations</span>
                            <a href="#" class="overlay-link"></a>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Two >
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/feature-img.jpg" alt=""></figure>
                        <div class="content">
                            <span class="icon-box flaticon-bed"></span>
                            <h5>Hotels</h5>
                            <span class="locations">07 Locations</span>
                            <a href="#" class="overlay-link"></a>
                        </div>
                    </div>
                </div>
				
				<!-- Feature Block Two >
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/feature-img.jpg" alt=""></figure>
                        <div class="content">
                            <span class="icon-box"><img src="images/icons/pet.png" alt="" width="40" height="48"></span>
                            <h5>Pets</h5>
                            <span class="locations">07 Locations</span>
                            <a href="#" class="overlay-link"></a>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Two >
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/feature-img.jpg" alt=""></figure>
                        <div class="content">
                            <span class="icon-box flaticon-tent"></span>
                            <h5>Outdoor Activities</h5>
                            <span class="locations">07 Locations</span>
                            <a href="#" class="overlay-link"></a>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Two >
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/feature-img.jpg" alt=""></figure>
                        <div class="content">
                            <span class="icon-box flaticon-shopping-cart"></span>
                            <h5>Shopping</h5>
                            <span class="locations">07 Locations</span>
                            <a href="#" class="overlay-link"></a>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Two >
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/feature-img.jpg" alt=""></figure>
                        <div class="content">
                            <span class="icon-box flaticon-hamburger"></span>
                            <h5>Eat & Drink</h5>
                            <span class="locations">07 Locations</span>
                            <a href="#" class="overlay-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section Two -->

    <!-- Listing Section >
    <section class="listing-section alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Explore Places</h2>
                <span class="divider"></span>
                <div class="text">Explore the greates places in the city. You won’t be disappointed.</div>
            </div>

            <div class="three-items-carousel owl-carousel owl-theme default-nav">
                <!-- Listing lLock >
                <div class="listing-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/listing/1-1.jpg" alt=""></figure>
                            <div class="tags">
                                <span>Featured</span>
                                <span>$25 - $35</span>
                            </div>
                            <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                        </div>
                        <div class="lower-content">
                            <div class="user-thumb"><img src="images/resource/user-thumb-1.jpg" alt="" /></div>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="title">(7 review)</span>
                            </div>
                            <h3><a href="#">Private Hotel-Spa <span class="icon icon-verified"></span></a></h3>
                            <div class="text">Luxury hotel in the heart of Bloomsbury.</div>
                            <ul class="info">
                                <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                <li><span class="flaticon-phone-call"></span> +61 2 8236 9200 </li>
                            </ul>
                        </div>
                        <div class="bottom-box">
                            <div class="places"> 
                                <div class="place"><span class="icon flaticon-bed"></span> Hotels </div>
                                <span class="count">+3</span>
                            </div>
                            <div class="status">Now Closed</div>
                        </div>
                    </div>
                </div>

                <!-- Listing lLock >
                <div class="listing-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/listing/1-2.jpg" alt=""></figure>
                            <div class="tags">
                                <span>Featured</span>
                            </div>
                            <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                        </div>
                        <div class="lower-content">
                            <div class="user-thumb"><img src="images/resource/user-thumb-2.jpg" alt="" /></div>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="title">(7 review)</span>
                            </div>
                            <h3><a href="#">Moonlight Restourant </a></h3>
                            <div class="text">Italian traditional served pizzeria.</div>
                            <ul class="info">
                                <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                            </ul>
                        </div>
                        <div class="bottom-box">
                            <div class="places"> 
                                <div class="place pink"><span class="icon flaticon-hotel-1"></span> Restourant </div>
                                <span class="count">+3</span>
                            </div>
                            <div class="status">Open</div>
                        </div>
                    </div>
                </div>

                <!-- Listing lLock >
                <div class="listing-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/listing/1-3.jpg" alt=""></figure>
                            <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                        </div>
                        <div class="lower-content">
                            <div class="user-thumb"><img src="images/resource/user-thumb-3.jpg" alt="" /></div>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="title">(7 review)</span>
                            </div>
                            <h3><a href="#">Best Museum</a></h3>
                            <div class="text">This cafe is small but bustling.</div>
                            <ul class="info">
                                <li><span class="flaticon-pin"></span> Art & History</li>
                                <li><span class="flaticon-phone-call"></span> +61 2 8236 9200 </li>
                            </ul>
                        </div>
                        <div class="bottom-box">
                            <div class="places"> 
                                <div class="place purple"><span class="icon flaticon-museum"></span>Art & History </div>
                                <span class="count">+3</span>
                            </div>
                            <div class="status">Now Closed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Listing Section -->

    <!-- Listing Section Four>
    <section class="listing-section-four alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Cars For Sale</h2>
                <span class="divider"></span>
                <div class="text">Explore some of the best tips from around the city from our partners and friends.</div>
            </div>

            <div class="carousel-outer">            
                <!-- Three Items Carousel >
                <div class="three-items-carousel owl-carousel owl-theme default-nav no-dots">
                    <!-- Listing lLock Three>
                    <div class="listing-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/cars/7.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25.000</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <ul class="features">
                                    <li>2013</li>
                                    <li>Disel</li>
                                    <li>Automatic</li>
                                    <li>28.000</li>
                                </ul>
                            </div>
                            <div class="title-box">
                                <div class="user-thumb"><img src="images/resource/user-thumb-1.jpg" alt="" /></div>
                                <h3><a href="#">BMW X5 XDrive 40 i</a></h3>
                                <div class="text">Lorem Ipsum is simply dummy text.</div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place green"><span class="icon flaticon-car-2"></span> BMW</div>
                                </div>
                                <div class="status"> <span class="flaticon-pin"></span> Santa Monica, CA </div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing lLock Three>
                    <div class="listing-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/cars/8.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25.000</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <ul class="features">
                                    <li>2013</li>
                                    <li>Disel</li>
                                    <li>Automatic</li>
                                    <li>28.000</li>
                                </ul>
                            </div>
                            <div class="title-box">
                                <div class="user-thumb"><img src="images/resource/user-thumb-2.jpg" alt="" /></div>
                                <h3><a href="#">Audi E-Tron 2019 4K</a></h3>
                                <div class="text">Lorem Ipsum is simply dummy text.</div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place green"><span class="icon flaticon-car-2"></span> Audi</div>
                                </div>
                                <div class="status"> <span class="flaticon-pin"></span> Santa Monica, CA </div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing lLock Three>
                    <div class="listing-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/cars/9.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25.000</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <ul class="features">
                                    <li>2013</li>
                                    <li>Disel</li>
                                    <li>Automatic</li>
                                    <li>28.000</li>
                                </ul>
                            </div>
                            <div class="title-box">
                                <div class="user-thumb"><img src="images/resource/user-thumb-3.jpg" alt="" /></div>
                                <h3><a href="#">Mercedes-Benz C-Class</a></h3>
                                <div class="text">Lorem Ipsum is simply dummy text.</div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place green"><span class="icon flaticon-car-2"></span> Mercedes</div>
                                </div>
                                <div class="status"> <span class="flaticon-pin"></span> Santa Monica, CA </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Listing Section -->

    <!-- Listing Section Four>
    <section class="listing-section-four alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Featured Homes</h2>
                <span class="divider"></span>
                <div class="text">Explore the greates places in the city. You won’t be disappointed.</div>
            </div>

            <div class="carousel-outer">            
                <!-- Three Items Carousel >
                <div class="three-items-carousel owl-carousel owl-theme default-nav no-dots">
                    <!-- Listing lLock Four>
                    <div class="listing-block-four">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/home/1.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25.000</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <h3><a href="#">Bright, Comfortable Room</a></h3>
                            </div>
                            <div class="features-box">
                                <div class="user-thumb"><img src="images/resource/user-thumb-1.jpg" alt="" /></div>
                                <ul class="features">
                                    <li>3 Bedrooms</li>
                                    <li>2 Baths</li>
                                    <li>8 Rooms</li>
                                    <li>322 sq ft</li>
                                </ul>
                            </div>
                            <div class="bottom-box">
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="title">(7 review)</span>
                                </div>
                                <div class="location"> <span class="flaticon-pin"></span> Santa Monica, CA </div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing lLock Four>
                    <div class="listing-block-four">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/home/2.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25.000</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <h3><a href="#">Right by the Thames</a></h3>
                            </div>
                            <div class="features-box">
                                <div class="user-thumb"><img src="images/resource/user-thumb-2.jpg" alt="" /></div>
                                <ul class="features">
                                    <li>3 Bedrooms</li>
                                    <li>2 Baths</li>
                                    <li>8 Rooms</li>
                                    <li>322 sq ft</li>
                                </ul>
                            </div>
                            <div class="bottom-box">
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="title">(7 review)</span>
                                </div>
                                <div class="location"> <span class="flaticon-pin"></span> Santa Monica, CA </div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing lLock Four>
                    <div class="listing-block-four">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/home/3.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25.000</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <h3><a href="#">Modern & light 2 bed flat</a></h3>
                            </div>
                            <div class="features-box">
                                <div class="user-thumb"><img src="images/resource/user-thumb-3.jpg" alt="" /></div>
                                <ul class="features">
                                    <li>3 Bedrooms</li>
                                    <li>2 Baths</li>
                                    <li>8 Rooms</li>
                                    <li>322 sq ft</li>
                                </ul>
                            </div>
                            <div class="bottom-box">
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="title">(7 review)</span>
                                </div>
                                <div class="location"> <span class="flaticon-pin"></span> Santa Monica, CA </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Listing Section -->

    <!-- Main Footer -->
    <!--footer class="main-footer style-two">
        <!-- Footer Upper >
        <div class="footer-upper">
            <ul class="footer-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Listings</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- Footer Content >
        <div class="footer-content">
            <div class="auto-container">
                <ul class="social-icon-two">
                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                </ul>

                <ul class="copyright-text">
                    <li>Copyright © 2019 Listdo</li>
                    <li>New York, NY</li>
                    <li><a href="#">+61 2 8236 9200</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom >
        <div class="footer-bottom">
            <div class="text">Proudly Listdo by CreativeLayers</div>
        </div>

        <!-- Scroll To Top >
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up"></span></div>
    </footer>
    <!-- End Footer -->
<?php include("footer.php");?>
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


