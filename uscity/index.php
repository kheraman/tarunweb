<!DOCTYPE html>
<html lang="zxx">

<?php include("header.php");?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include("header1.php");?>

    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-text">
                        <img src="img/placeholder.png" alt="">
                        <h1>US CITY</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Trending Restaurant Section Begin -->
    <section class="trending-restaurant spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Top trending for your city</h2>
                        <p>Explore some of the best places in the world</p>
                    </div>
                </div>
            </div>
            <div class="row">
                
				  <?php
					for($i=0;$i<6;$i++)
					{
					?>
						<div class="col-lg-4">
							<div class="trend-item">
								<div class="trend-pic">
									<img src="img/categories/cat-2.jpg" alt="">
									<!--div class="rating">4.9</div-->
								</div>
								<div class="trend-text">
									
									<!--span><?php //echo $row['street'];?>, <?php //echo $row['city'];?>-<?php //echo $row['postal_code'];?></span-->
									<!--p><?php //	echo SUBSTR($row['description'], 0,40);?>...</p>
									<div class="closed">Closed Now</div-->
									<div><a href="category.php?category_id=<?php echo $all_cate_list[$i]['cat_id']?>"><h4><?php echo $all_cate_list[$i]['name'];?></h4></a></div>
									
								</div>
								<!--div class="tic-text">+1 <?php //echo $row['phone'];?></div-->
							</div>
						</div>
						<?php } ?>
            </div>
        </div>
    </section>
    <!-- Trending Restaurant Section End -->

    <!-- Categories Section Begin >
    <section class="categories-section spad">
        <div class="container-fluid">	
			<div class="categories-left">
                <div class="categories-item set-bg large-img" data-setbg="img/cate/Automotive.jpg">
                        <a href="img/cate/Automotive.jpg" class="img-hover pop-up"><img src="img/zoom.png" alt=""></a>
                        <div class="categories-text">
                            <h4>Automotive</h4>
                            <p>2373 Listings</p>
                            <a href="Category/3">View All</a>
                        </div>
                    </div>
            </div>
            <div class="categories-right">
                <div class="row">
                    <div class="col-md-6">
                        <div class="categories-item set-bg" data-setbg="img/cate/Health_Medical.jpg">
                            <a href="img/cate/Health_Medical.jpg" class="img-hover pop-up"><img src="img/zoom.png" alt=""></a>
                            <div class="categories-text">
                                <h4>Health & Medical</h4>
                                <p>2373 Listings</p>
                                <a href="Category/8">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="categories-item set-bg" data-setbg="img/cate/Food.jpg">
                            <a href="img/cate/Food.jpg" class="img-hover pop-up"><img src="img/zoom.png" alt=""></a>
                            <div class="categories-text">
                                <h4>Food</h4>
                                <p>2373 Listings</p>
                                <a href="Category/17">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="categories-item set-bg" data-setbg="img/cate/Hotels_Travel.jpg">
                            <a href="img/cate/Hotels_Travel.jpg" class="img-hover pop-up"><img src="img/zoom.png" alt=""></a>
                            <div class="categories-text">
                                <h4>Hotels</h4>
                                <p>2373 Listings</p>
                                <a href="Category/10">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="categories-item set-bg" data-setbg="img/cate/Restaurants.jpg">
                            <a href="img/cate/Restaurants.jpg" class="img-hover pop-up"><img src="img/zoom.png" alt=""></a>
                            <div class="categories-text">
                                <h4>Restaurants</h4>
                                <p>2373 Listings</p>
                                <a href="Category/15">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Testimonial Section Begin >
    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-item owl-carousel">
                        <div class="single-testimonial-item">
                            <img src="img/testimonial-1.png" alt="">
                            <p>Fusce urna quam, euismod sit amet mollis quis. Fusce urna quam, euismod sit amet mollis
                                quis, vestibulum quis velit. Vestibulum malesuada aliquet libero viverra cursus. Aliquam
                                erat volutpat. Morbi id dictum quam, ut commodo lorem. In at nisi nec arcu porttitor
                                aliquet vitae at dui. Sed sollicitudin nulla non leo viverra.</p>
                            <h4>Michael Smith</h4>
                            <span>CEO Company</span>
                        </div>
                        <div class="single-testimonial-item">
                            <img src="img/testimonial-1.png" alt="">
                            <p>Fusce urna quam, euismod sit amet mollis quis. Fusce urna quam, euismod sit amet mollis
                                quis, vestibulum quis velit. Vestibulum malesuada aliquet libero viverra cursus. Aliquam
                                erat volutpat. Morbi id dictum quam, ut commodo lorem. In at nisi nec arcu porttitor
                                aliquet vitae at dui. Sed sollicitudin nulla non leo viverra.</p>
                            <h4>Michael Smith</h4>
                            <span>CEO Company</span>
                        </div>
                        <div class="single-testimonial-item">
                            <img src="img/testimonial-1.png" alt="">
                            <p>Fusce urna quam, euismod sit amet mollis quis. Fusce urna quam, euismod sit amet mollis
                                quis, vestibulum quis velit. Vestibulum malesuada aliquet libero viverra cursus. Aliquam
                                erat volutpat. Morbi id dictum quam, ut commodo lorem. In at nisi nec arcu porttitor
                                aliquet vitae at dui. Sed sollicitudin nulla non leo viverra.</p>
                            <h4>Michael Smith</h4>
                            <span>CEO Company</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bg-img">
                <img src="img/testimonial-bg.png" alt="">
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- How It Works Section Begin >
    <section class="work-section set-bg" data-setbg="img/line-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>How it works</h2>
                        <p>Explore some of the best places in the world</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-work-item">
                        <div class="number">01.</div>
                        <div class="work-text">
                            <h4>Search the portal</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis.Aliquam erat volutpat. Morbi id dictum quam, ut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-work-item">
                        <div class="number">02.</div>
                        <div class="work-text">
                            <h4>Choose the one 4u</h4>
                            <p>Euismod sit amet mollis quis. Ali-quam erat volutpat. Morbi id dictum quam, ut commodo lorem. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-work-item">
                        <div class="number">03.</div>
                        <div class="work-text">
                            <h4>Book it!</h4>
                            <p>Euismod sit amet mollis quis. Ali-quam erat volutpat. Morbi id dictum quam, ut commodo lorem. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works Section End -->

    <!-- App Section Begin >
    <section class="app-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="img/phone.png" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="app-text">
                        <div class="section-title">
                            <h2>Get the App now!</h2>
                            <p>Explore some of the best places in the world</p>
                        </div>
                        <p>Morbi id dictum quam, ut commodo lorem. Donec bibendum, enim ut luctus dictum, nisl turpis
                            scelerisque sem, in dapibus neque odio eu sapien. Morbi ac aliquet erat. Sed dapibus, augue
                            et malesuada maximus.</p>
                        <ul>
                            <li><img src="img/check-icon.png" alt="">Fusce urna quam, euismod sit amet mollis quis, vestibulum
                                quis veli</li>
                            <li><img src="img/check-icon.png" alt="">Vestibulum malesuada aliquet libero viverra cursus</li>
                            <li><img src="img/check-icon.png" alt="">Urna quam, euismod sit amet mollis quis, vestibulum quis veli
                            </li>
                        </ul>
                        <a href="#"><img src="img/apple-store.jpg" alt=""></a>
                        <a href="#"><img src="img/google-store.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Section End -->



    <!-- Footer Section Begin -->
    <?php include("footer.php");?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>