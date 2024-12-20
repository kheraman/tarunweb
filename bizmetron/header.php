<?php
//session_start();
//error_reporting(0);
require_once('includes/config.php');

?>
<header class="main-header header-style-two">
        
        <!-- Main box -->
        <div class="main-box">
            <div class="logo-box">
                <div class="logo"><a href="/index"><img src="images/logo-2-trans.png" alt="" title=""></a></div>

                <!-- Secssarch Box -->
                
            </div>
<div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation" id="navbar">
						<li><a href="/index">Home</a></li>
                        <!--li class="current dropdown">
                            <span>Home</span>
                            <ul>
                                <li><a href="index.html">Home Page One</a></li>
                                <li><a href="index-2.html">Home Page Two</a></li>
                                <li class="current"><a href="/index">Home Page Three</a></li>
                                <li><a href="index-4.html">Home Page Four</a></li>
                                <li><a href="index-5.html">Home Page Five</a></li>
                            </ul>
                        </li-->
                        <!--li class="dropdown">
                            <span>Pages</span>
                            <ul>
                                <li class="dropdown">
                                    <span>Dashboard</span>
                                    <ul>
                                        <li class="active"><a href="dashboard.html"> Dashboard</a></li>
                                        <li><a href="dashboard-profile.html">Profile</a></li>
                                        <li><a href="dashboard-listing.html">Listings</a></li>
                                        <li><a href="dashboard-messages.html">Messages </a></li>
                                        <li><a href="dashboard-reviews.html">Reviews</a></li>
                                        <li><a href="dashboard-favorites.html">Favorites</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="how-it-works.html">How It Works</a></li>
                                <li><a href="pricing-table.html">Pricing Table</a></li>
                                <li><a href="listing-style.html">Listing Style</a></li>
                                <li><a href="terms-and-condition.html">Terms and Condition</a></li>
                                <li><a href="elements.html">UI Elements</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="error-page.html">Error 404</a></li>
                            </ul>
                        </li-->
						<li><a href="/about-us">About Us</a></li>
						<li><a href="/allcategories">All Listings</a></li>
                        <!--li class="dropdown">
                            <span>Listings</span>
                            <ul>
                                <!--li class="dropdown">
                                    <span>Listing</span>
                                    <ul>
                                        <li><a href="/listingresults">All Categories</a></li>
                                        <!--li><a href="listing-layout-2.html">Layout 02</a></li>
                                        <li><a href="listing-layout-3.html">Layout 03</a></li-->
                                    <!--/ul>
                                </li>
                                <li class="dropdown">
                                    <span>Listing With Map</span>
                                    <ul>
                                        <li><a href="listing-map-layout-1.html">Map Layout 01</a></li>
                                        <li><a href="listing-map-layout-2.html">Map Layout 02</a></li>
                                        <li><a href="listing-map-layout-3.html">Map Layout 03</a></li>
                                        <li><a href="listing-map-layout-4.html">Map Layout 04</a></li>
                                        <li><a href="listing-map-layout-5.html">Map Layout 05</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <span>Listing Single</span>
                                    <ul>
                                        <li><a href="listing-single.html">Listing Single 01</a></li>
                                        <li><a href="listing-single-2.html">Listing Single 02</a></li>
                                        <li><a href="listing-single-3.html">Listing Single 03</a></li>
                                        <li><a href="listing-single-4.html">Listing Single 04</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!--li class="dropdown">
                            <span>Shop</span>
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-single.html">Shop Single</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <span>Blog</span>
                            <ul>
                                <li><a href="blog.html">Blog Grid</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li-->
                        
                        <li><a href="/termsandconditions">Terms & Conditions</a></li>
                <li><a href="/PrivacyPolicy">Privacy Policy</a></li>
                <li><a href="/contact">Contact</a></li>
                        <!--li class="mm-add-listing"><a href="add-listing.html" class="theme-btn btn-style-three"><span class="flaticon-plus-symbol"></span>Add Listing</a></li-->
                    </ul>
                </nav>
                <!-- Main Menu End-->

                <!--div class="outer-box">
                    <!-- Add Listing >
                    <a href="add-listing.html" class="add-listing"> <span class="flaticon-plus-symbol"></span> Add Listing</a>

                    <!-- Cart btn >
                    <div class="cart-btn">
                        <a href="shopping-cart.html"><i class="icon flaticon-shopping-bag"></i> <span class="count">2</span></a>

                        <div class="shopping-cart">
                            <ul class="shopping-cart-items">
                                <li class="cart-item">
                                    <img src="images/resource/item-thumb-1.jpg" alt="" class="thumb" />
                                    <span class="item-name">Dolar Sit Amet</span>
                                    <span class="item-quantity">1 x <span class="item-amount">$7.90</span></span>
                                    <a href="shop-single.html" class="product-detail"></a>
                                    <button class="remove-item"><span class="fa fa-times"></span></button>
                                </li>

                                <li class="cart-item">
                                    <img src="images/resource/item-thumb-2.jpg" alt="" class="thumb"  />
                                    <span class="item-name">Lorem Ipsum</span>
                                    <span class="item-quantity">3 x <span class="item-amount">$7.90</span></span>
                                    <a href="shop-single.html" class="product-detail"></a>
                                    <button class="remove-item"><span class="fa fa-times"></span></button>
                                </li>
                            </ul>

                            <div class="shopping-cart-total"><span>Subtotal: </span> $57.70</div>

                            <div class="cart-footer">
                                <a href="cart.html" class="theme-btn btn-style-one">View Cart</a>
                                <a href="checkout.html" class="theme-btn btn-style-two">Checkout</a>
                            </div>
                        </div> <!--end shopping-cart >
                    </div>

                    <!-- Login/Register >
                    <div class="login-box"> 
                        <span class="flaticon-user"></span> 
                        <a href="login.html" class="call-modal">Login</a> or 
                        <a href="register.html" class="call-modal">Register </a>
                    </div>
                </div-->
            </div>
			
			</div>

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