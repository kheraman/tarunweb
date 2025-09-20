<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Bizmetron</title>
<base href="https://bizmetron.com/">
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->

<meta name="google-site-verification" content="DtsJsTrIhoKe24s6o2ZAacHTOayJD77nH8zzUIp-g2U" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->


</head>

<body>

<div class="page-wrapper bg_alice">

    <!-- Preloader -->
  <div class="preloader"></div> 
    
    <!-- Main Header-->
    

<!-- Main header start -->
<?php include("header.php");?>
<!-- Main header end -->
            <!--Nav Box-->
          
        
    <!--End Main Header -->

    <!-- Banner Section / Style Three-->
    <section class="banner-section style-three">
        <!-- Background Layer -->
        <div class="background-layer pink-gradient"></div>

        <div class="auto-container">
            <div class="content-box">
                <!-- Upper Heading -->
                <div class="upper-heading">
                    <h3>
                        Discover The 
                        <!-- Typed words can be configured in script settings at the bottom of this HTML file -->
                        <span class="typed-words"></span>
                    </h3>
                    <p>Find great places to stay, eat, shop, or visit from local experts.</p>
                </div>

                <!-- Listing Search Tabs -->
                <div class="listing-search-tabs tabs-box">
                    <!--ul class="tab-buttons">
                        <li class="tab-btn active-btn" data-tab="#tab1">Places</li>
                        <li class="tab-btn" data-tab="#tab2">Events</li>
                        <li class="tab-btn" data-tab="#tab3">Jobs</li>
                        <li class="tab-btn" data-tab="#tab4">Real Estate</li>
                        <li class="tab-btn" data-tab="#tab5">Cars</li>
                    </ul-->

                    <div class="tabs-content">
                        <!--Tab-->
                        <div class="tab active-tab" id="tab1">
                            <!--div class="listing-search-form">
                                <form method="post" action="/categorylisting" enctype="multipart/form-data" onsubmit='return onsubmitform();'>
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <input type="text" name="searchtext" id="searchtext" placeholder="What are you looking for?" required>
                                        </div>
                                        <!-- Form Group >
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12 location">
                                            <input type="text" name="location" id="location" placeholder="Location">
                                            <span class="icon flaticon-placeholder" data-text="Type and hit enter"></span>
                                        </div>
										<?php
										//$sql = "select * from category_master";							
										//$result = mysqli_query($con,$sql);							
										
													//die;
													
													?>
                                        <!-- Form Group >
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select name="cid" class="chosen-select">
												<option value="0">All Categories</option>
                                                <?php
												/*
												while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
												{		
												?>
														<option value="<?php echo $row["cat_id"];?>"><?php echo $row["category_name"];?></option>
                                                <?php } */ ?>
                                            </select>
                                        </div>

                                        <!-- Form Group >
                                        <div class="form-group col-lg-2 col-md-6 col-sm-12 text-right">
                                            <input type="submit" name="submit" style="background-color: #ff007a;border-color: #ff007a;    color: #ffffff; font-weight: bold; font-size: 18px;">
                                        </div>
                                    </div>
                                </form>
                            </div-->
                        </div>

                        <!--Tab>
                        <div class="tab" id="tab2">
                            <div class="listing-search-form">
                                <form method="post" action="index.html">
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <input type="text" name="listing-search" placeholder="What are you looking for?">
                                        </div>
                                        <!-- Form Group >
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12 location">
                                            <input type="text" name="listing-search" placeholder="Lucation">
                                            <span class="icon flaticon-placeholder" data-text="Type and hit enter"></span>
                                        </div>

                                        <!-- Form Group >
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="chosen-select">
                                                <option>All Categories</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Industrial</option>
                                                <option>Apartments</option>
                                            </select>
                                        </div>

                                        <!-- Form Group >
                                        <div class="form-group col-lg-2 col-md-6 col-sm-12 text-right">
                                            <button type="submit" class="theme-btn btn-style-one bg-pink">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--Tab>
                        <div class="tab" id="tab3">
                            <div class="listing-search-form">
                                <form method="post" action="index.html">
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <input type="text" name="listing-search" placeholder="What are you looking for?">
                                        </div>
                                        <!-- Form Group >
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12 location">
                                            <input type="text" name="listing-search" placeholder="Lucation">
                                            <span class="icon flaticon-placeholder" data-text="Type and hit enter"></span>
                                        </div>

                                        <!-- Form Group >
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="chosen-select">
                                                <option>All Categories</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Industrial</option>
                                                <option>Apartments</option>
                                            </select>
                                        </div>

                                        <!-- Form Group >
                                        <div class="form-group col-lg-2 col-md-6 col-sm-12 text-right">
                                            <button type="submit" class="theme-btn btn-style-one bg-pink">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--Tab>
                        <div class="tab" id="tab4">
                            <div class="listing-search-form">
                                <form method="post" action="index.html">
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <input type="text" name="listing-search" placeholder="What are you looking for?">
                                        </div>
                                        <!-- Form Group >
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12 location">
                                            <input type="text" name="listing-search" placeholder="Lucation">
                                            <span class="icon flaticon-placeholder" data-text="Type and hit enter"></span>
                                        </div>

                                        <!-- Form Group >
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="chosen-select">
                                                <option>All Categories</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Industrial</option>
                                                <option>Apartments</option>
                                            </select>
                                        </div>

                                        <!-- Form Group >
                                        <div class="form-group col-lg-2 col-md-6 col-sm-12 text-right">
                                            <button type="submit" class="theme-btn btn-style-two">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--Tab>
                        <div class="tab" id="tab5">
                            <div class="listing-search-form">
                                <form method="post" action="index.html">
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <input type="text" name="listing-search" placeholder="What are you looking for?">
                                        </div>
                                        <!-- Form Group >
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12 location">
                                            <input type="text" name="listing-search" placeholder="Lucation">
                                            <span class="icon flaticon-placeholder" data-text="Type and hit enter"></span>
                                        </div>

                                        <!-- Form Group >
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <select class="chosen-select">
                                                <option>All Categories</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Industrial</option>
                                                <option>Apartments</option>
                                            </select>
                                        </div>

                                        <!-- Form Group >
                                        <div class="form-group col-lg-2 col-md-6 col-sm-12 text-right">
                                            <button type="submit" class="theme-btn btn-style-two">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section-->
    
    <!-- Features Section -->
    <section class="features-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>What are you interested in?</h2>
                <span class="divider"></span>
                <div class="text">Explore some of the best tips from around the city from our partners and friends.</div>
            </div>

            <div class="row">
			<?php
					for($i=0;$i<6;$i++)
					{
					?>
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box" >
                        <figure class="image"><img src="images/cate/Hotels_Travel.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <span class="icon-box flaticon-star"></span>
                                <h5><a style="color:white;" href="<?php echo $my_global_variable;?>categorylisting.php?category_id=<?php echo $all_cate_list[$i]['cat_id']?>"><?php echo $all_cate_list[$i]['name'];?></a></h5>

                               
                                
                            </div>
                        </div>
                    </div>
                </div>
<?php } ?>
            </div>

        </div>
    </section>
    <!-- End Features Section -->

	
    <!-- Listing Section >
    <section class="listing-section style-two">
        <div class="container-fluid">
            <div class="sec-title text-center">
                <h2>Best Things to Do in the City</h2>
                <span class="divider"></span>
                <div class="text">Explore some of the best tips from around the city from our partners and friends.</div>
            </div>

            <div class="carousel-outer">
                <div class="four-items-carousel owl-carousel owl-theme default-nav">
                    <!-- Listing lLock -->
                    
					<?php
				//echo "test";
				/*
				$sql = "select * from listing_master as a left join category_master as b on a.category_id = b.cat_id order by a.id desc LIMIT 196,10";							
					$result = mysqli_query($con,$sql);							
							
							//die;
					
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
						{				
				?>
					
					<div class="listing-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/cate/<?php echo $row["image"];?>" alt=""></figure>
                                <!--div class="tags">
                                    <span>Featured</span>
                                    <span>$25 - $35</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a-->
                            </div>
                            <div class="lower-content">
                                <!--div class="user-thumb"><img src="images/resource/user-thumb-1.jpg" alt="" /></div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="title">(7 review)</span>
                                </div-->
                                <h3><a href="<?php echo $my_global_variable;?>Listing/L-<?php echo $row['yid'];?>"><?php echo $row['name'];?> <span class="icon icon-verified"></span></a></h3>
                                <div class="text"><?php echo substr($row['description'], 0, 20);?>...</div>
                                <ul class="info">
                                    <li><span class="flaticon-pin"></span> <?php echo $row['street'];?>, <?php echo $row['city'];?>-<?php echo $row['postal_code'];?></li>
                                    <li><span class="flaticon-phone-call"></span> <?php echo $row['phone'];?> </li>
                                </ul>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place"><span class="icon flaticon-bed"></span> <?php echo $row["category_name"];?> </div>
                                    <!--span class="count">+3</span-->
                                </div>
                                <div class="status">Open</div>
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

                    <Listing lLock >
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

                    < Listing lLock >
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

                    <Listing lLock >
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

                    < Listing lLock >
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
                    </div-->
					<?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Listing Section --><?php */?>

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

    <!-- Explore Section >
    <section class="explore-section style-two">
       <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Explore by City</h2>
                <span class="divider"></span>
                <div class="text">Explore some of the best tips from around the city from our partners and friends.</div>
            </div>

            <div class="row">
                <!-- Explore Block >
                <div class="explore-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/explore-1.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <h5>London</h5>
                                <span class="locations">12 Locations</span>
                                <a href="#" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Explore Block >
                <div class="explore-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/explore-2.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <h5>London</h5>
                                <span class="locations">12 Locations</span>
                                <a href="#" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Explore Block >
                <div class="explore-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/explore-3.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <h5>London</h5>
                                <span class="locations">12 Locations</span>
                                <a href="#" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Explore Block >
                <div class="explore-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/explore-4.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <h5>London</h5>
                                <span class="locations">12 Locations</span>
                                <a href="#" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div> 
    </section>
    <!-- End Explore Section -->

    <!-- Listing Section Three >
    <section class="listing-section-three" style="background-image: url(images/background/2.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <h2>Explore Places</h2>
                <span class="divider"></span>
                <div class="text">Browse the latest articles from our blog.</div>
            </div>
            <div class="carousel-outer">
                <!-- Three Items Carousel  >
                <div class="three-items-carousel owl-carousel owl-theme default-nav no-dots">

                    <!-- Listing Block Two >
                    <div class="listing-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/listing/2-1.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25 - $35</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <div class="content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="title">(7 review)</span>
                                    </div>
                                    <h3><a href="#">Shop 3 Secret Bargain NYC <span class="icon icon-verified"></span> </a></h3>
                                    <ul class="info">
                                        <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                        <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place green"><span class="icon flaticon-shopping-cart"></span> Shopping </div>
                                </div>
                                <div class="status">Open</div>
                                <div class="user-thumb"><img src="images/resource/user-thumb-1.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing Block Two >
                    <div class="listing-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/listing/2-2.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25 - $35</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <div class="content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="title">(7 review)</span>
                                    </div>
                                    <h3><a href="#">Moonlight Restourant <span class="icon icon-verified"></span> </a></h3>
                                    <ul class="info">
                                        <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                        <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place pink"><span class="icon flaticon-hotel-1"></span> Restaurant </div>
                                </div>
                                <div class="status">Open</div>
                                <div class="user-thumb"><img src="images/resource/user-thumb-2.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing Block Two >
                    <div class="listing-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/listing/2-3.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25 - $35</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <div class="content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="title">(7 review)</span>
                                    </div>
                                    <h3><a href="#">Nightlife Rooftop Bar & Club <span class="icon icon-verified"></span> </a></h3>
                                    <ul class="info">
                                        <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                        <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place dark-pink"><span class="icon flaticon-hotel-1"></span> Nightlife </div>
                                </div>
                                <div class="status">Open</div>
                                <div class="user-thumb"><img src="images/resource/user-thumb-3.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing Block Two >
                    <div class="listing-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/listing/2-4.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25 - $35</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <div class="content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="title">(7 review)</span>
                                    </div>
                                    <h3><a href="#">Explore the Real Brooklyn <span class="icon icon-verified"></span> </a></h3>
                                    <ul class="info">
                                        <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                        <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place orange"><span class="icon flaticon-weightlifting"></span> Gym & Fitness </div>
                                </div>
                                <div class="status">Open</div>
                                <div class="user-thumb"><img src="images/resource/user-thumb-3.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing Block Two >
                    <div class="listing-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/listing/2-1.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25 - $35</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <div class="content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="title">(7 review)</span>
                                    </div>
                                    <h3><a href="#">Shop 3 Secret Bargain NYC <span class="icon icon-verified"></span> </a></h3>
                                    <ul class="info">
                                        <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                        <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place green"><span class="icon flaticon-shopping-cart"></span> Shopping </div>
                                </div>
                                <div class="status">Open</div>
                                <div class="user-thumb"><img src="images/resource/user-thumb-1.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing Block Two >
                    <div class="listing-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/listing/2-2.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25 - $35</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <div class="content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="title">(7 review)</span>
                                    </div>
                                    <h3><a href="#">Moonlight Restourant <span class="icon icon-verified"></span> </a></h3>
                                    <ul class="info">
                                        <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                        <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place pink"><span class="icon flaticon-hotel-1"></span> Restaurant </div>
                                </div>
                                <div class="status">Open</div>
                                <div class="user-thumb"><img src="images/resource/user-thumb-2.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing Block Two >
                    <div class="listing-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/listing/2-3.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25 - $35</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <div class="content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="title">(7 review)</span>
                                    </div>
                                    <h3><a href="#">Nightlife Rooftop Bar & Club <span class="icon icon-verified"></span> </a></h3>
                                    <ul class="info">
                                        <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                        <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place dark-pink"><span class="icon flaticon-hotel-1"></span> Nightlife </div>
                                </div>
                                <div class="status">Open</div>
                                <div class="user-thumb"><img src="images/resource/user-thumb-3.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing Block Two >
                    <div class="listing-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/listing/2-4.jpg" alt=""></figure>
                                <div class="tags">
                                    <span>Featured</span>
                                    <span>$25 - $35</span>
                                </div>
                                <a href="#" class="like-btn"><span class="flaticon-heart"></span> Save</a>
                                <div class="content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="title">(7 review)</span>
                                    </div>
                                    <h3><a href="#">Explore the Real Brooklyn <span class="icon icon-verified"></span> </a></h3>
                                    <ul class="info">
                                        <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                                        <li><span class="flaticon-tray"></span> +61 2 8236 9200 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-box">
                                <div class="places"> 
                                    <div class="place orange"><span class="icon flaticon-weightlifting"></span> Gym & Fitness </div>
                                </div>
                                <div class="status">Open</div>
                                <div class="user-thumb"><img src="images/resource/user-thumb-3.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Listing Section Three -->

    <!-- News Section >
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Tips & acArticles</h2>
                <span class="divider"></span>
                <div class="text">Browse the latest articles from our blog.</div>
            </div>

            <div class="row">
                <!-- News Block >
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/news-1.jpg" alt="" /></figure>
                            <div class="tags">Lifestyle, Outdoor</div>
                            <a href="blog-single.html" class="overlay-link"></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="blog-single.html">Etiquette Tips For Travellers</a></h3>
                            <div class="date">October 20, 2019</div>
                        </div>
                    </div>
                </div>

                <!-- News Block >
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/news-2.jpg" alt="" /></figure>
                            <div class="tags">Gym, Fitness</div>
                            <a href="blog-single.html" class="overlay-link"></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="blog-single.html">The Annual Gathering Comunity</a></h3>
                            <div class="date">October 20, 2019</div>
                        </div>
                    </div>
                </div>

                <!-- News Block >
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/news-3.jpg" alt="" /></figure>
                            <div class="tags">Hotels, Travel</div>
                            <a href="blog-single.html" class="overlay-link"></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="blog-single.html">The Famous Streets of London</a></h3>
                            <div class="date">October 20, 2019</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Btn Box >
            <div class="btn-box"><a href="#" class="theme-btn btn-style-two bg-pink">View All <span class="flaticon-right"></span></a></div>
        </div>
    </section>
    <!-- End News Section -->

    <?php include("footer.php");?>

</div><!-- End Page Wrapper -->

<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/chosen.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/jquery.hideseek.min.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>

<!-- Typed Script -->
<script src="js/typed.js"></script>
<script>
var typed = new Typed('.typed-words', {
strings: ["City Gems"," Restaurants"," Hotels"],
    typeSpeed: 80,
    backSpeed: 80,
    backDelay: 4000,
    startDelay: 1000,
    loop: true,
    showCursor: true
});
</script>

</body>
</html>
