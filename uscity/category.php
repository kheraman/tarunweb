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

    <!-- Map Section Begin >
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd"
            height="657" style="border:0;" allowfullscreen="">
        </iframe>
        <img src="img/pin.png" alt="">
    </div>
    <!-- Map Section End -->
<!-- Hero Section Begin -->
    <div class="hero-listing set-bg" data-setbg="img/blog/blog-2.jpg">
    </div>
    <!-- Hero Section End -->
    <!-- Search Filter Section Begin >
    <section class="search-filter spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="filter-search">
                        <div class="category-search">
                            <h5>Search Category</h5>
                            <select class="ca-search">
                                <option>Restaurants</option>
                                <option>Hotels</option>
                                <option>Food & Drinks</option>
                                <option>Home Delievery</option>
                                <option>Commercial Shops</option>
                            </select>
                        </div>
                        <div class="location-search">
                            <h5>Your Location</h5>
                            <select class="lo-search">
                                <option>New York</option>
                            </select>
                        </div>
                        <button type="submit">Search Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Filter Section End -->

    <!-- Filter Section Begin -->
    <section class="howitworks-section spad">
        <div class="container">
            <div class="row">
                <!--div class="col-lg-3">
                    <div class="filter-left">
                        <div class="category-filter">
                            <h3>Category Filter</h3>
                            <div class="category-option">
                                <div class="co-item">
                                    <input type="radio">
                                    <label class="active">Restaurants</label>
                                </div>
                                <div class="co-item">
                                    <input type="radio">
                                    <label>Hotels</label>
                                </div>
                                <div class="co-item">
                                    <input type="radio">
                                    <label>Resorts & spa</label>
                                </div>
                                <div class="co-item">
                                    <input type="radio">
                                    <label>Bars & Pubs</label>
                                </div>
                                <div class="co-item">
                                    <input type="radio">
                                    <label>Clubs</label>
                                </div>
                                <div class="co-item">
                                    <input type="radio">
                                    <label>Shopping Malls</label>
                                </div>
                                <div class="co-item">
                                    <input type="radio">
                                    <label>Education</label>
                                </div>
                            </div>
                        </div>
                        <div class="rating-filter">
                            <h3>Ratings</h3>
                            <div class="rating-option">
                                <div class="ro-item">
                                    <input type="radio">
                                    <label class="active">5.0</label>
                                    <div class="rating-pic">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="ro-item">
                                    <input type="radio">
                                    <label>4.0</label>
                                    <div class="rating-pic">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star grey-bg"></i>
                                    </div>
                                </div>
                                <div class="ro-item">
                                    <input type="radio">
                                    <label>3.0</label>
                                    <div class="rating-pic">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star grey-bg"></i>
                                        <i class="fa fa-star grey-bg"></i>
                                    </div>
                                </div>
                                <div class="ro-item">
                                    <input type="radio">
                                    <label>2.0</label>
                                    <div class="rating-pic">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star grey-bg"></i>
                                        <i class="fa fa-star grey-bg"></i>
                                        <i class="fa fa-star grey-bg"></i>
                                    </div>
                                </div>
                                <div class="ro-item">
                                    <input type="radio">
                                    <label>1.0</label>
                                    <div class="rating-pic">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star grey-bg"></i>
                                        <i class="fa fa-star grey-bg"></i>
                                        <i class="fa fa-star grey-bg"></i>
                                        <i class="fa fa-star grey-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="distance-filter">
                            <h3>Distance</h3>
                            <div class="distance-option">
                                <div class="do-item">
                                    <input type="radio">
                                    <label class="active">0.0-0.3km</label>
                                </div>
                                <div class="do-item">
                                    <input type="radio">
                                    <label>0.3-0.6km</label>
                                </div>
                                <div class="do-item">
                                    <input type="radio">
                                    <label>0.6-0.9km</label>
                                </div>
                                <div class="do-item">
                                    <input type="radio">
                                    <label>1.0-3.0km</label>
                                </div>
                                <div class="do-item">
                                    <input type="radio">
                                    <label>3.0-10.0km</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div-->
					
				<div class="col-lg-12">
					<div class="section-title">
                            <h2>Explore All Categories!</h2>
                            <p>Explore some of the best places in the world</p>
                    </div>
				</div>		
                <div class="col-lg-12">
                    <div class="row">
					
                        <!--div class="col-lg-12">
                            <form action="#" class="arrange-select">
                                <span>Arrange by</span>
                                <select>
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                </select>
                            </form>
                        </div-->
						<?php
					
							/*Pagination
							if (isset($_GET['page_no']) && $_GET['page_no']!="") {
							$page_no = $_GET['page_no'];
							} 
							else 
							{
								$page_no = 1;
							}
							
							$total_records_per_page = 9;
							$offset = ($page_no-1) * $total_records_per_page;
							
							$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM listing_master ");
							$total_records = mysqli_fetch_array($result_count);
							$total_records = $total_records['total_records'];
							$total_no_of_pages = ceil($total_records / $total_records_per_page);
							*/
							
							$sql = "select * from category_master order by category_name asc";							
							$result = mysqli_query($con,$sql);							
									
									//die;
							
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
								{				
							
							?>
                        <div class="col-lg-4 col-sm-6">
                            <a class="arrange-items" href="Category/<?php echo $row['cat_id'];?>">
                                <div class="arrange-pic">
                                    <img src="img/cate/<?php echo $row['image'];?>" alt="">
                                    <!--div class="rating">4.9</div-->
                                    <div class="tic-text"><?php echo $row['category_name'];?></div>
                                </div>
                                <div class="arrange-text">
                                    <!--h5>New Place Restaurant</h5-->
                                    <span style="font-size:22px;"><?php echo $row['category_name'];?></span>
                                    <!--p>Fusce urna quam, euismod sit</p>
                                    <div class="open tomorrow">Opens Tomorow at 10am</div-->
                                </div>
                            </a>
                        </div>
						<?php } ?>
                        <!--div class="col-lg-4 col-sm-6">
                            <a class="arrange-items" href="single-listing.php">
                                <div class="arrange-pic">
                                    <img src="img/arrange/arrange-2.jpg" alt="">
                                    <div class="rating">4.9</div>
                                    <div class="tic-text">Restaurants</div>
                                </div>
                                <div class="arrange-text">
                                    <h5>Grand Bistro</h5>
                                    <span>Main Road , No 25/11</span>
                                    <p>Euismod sit amet mollis.</p>
                                    <div class="open">Open Until 3am</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="arrange-items" href="single-listing.php">
                                <div class="arrange-pic">
                                    <img src="img/arrange/arrange-3.jpg" alt="">
                                    <div class="rating">4.9</div>
                                    <div class="tic-text">Restaurants</div>
                                </div>
                                <div class="arrange-text">
                                    <h5>Pizza Oven</h5>
                                    <span>Main Road , No 25/11</span>
                                    <p>Euismod sit amet mollis.</p>
                                    <div class="open">Open Until 3am</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="arrange-items" href="single-listing.php">
                                <div class="arrange-pic">
                                    <img src="img/arrange/arrange-4.jpg" alt="">
                                    <div class="rating">4.9</div>
                                    <div class="tic-text">Restaurants</div>
                                </div>
                                <div class="arrange-text">
                                    <h5>Petit Place Cafe</h5>
                                    <span>Main Road , No 25/11</span>
                                    <p>Fusce urna quam, euismod.</p>
                                    <div class="open tomorrow">Opens Tomorow at 10am</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="arrange-items" href="single-listing.php">
                                <div class="arrange-pic">
                                    <img src="img/arrange/arrange-5.jpg" alt="">
                                    <div class="rating">4.9</div>
                                    <div class="tic-text">Restaurants</div>
                                </div>
                                <div class="arrange-text">
                                    <h5>Green Pub</h5>
                                    <span>Main Road , No 25/11</span>
                                    <p>Urna quam, euismod sit amet.</p>
                                    <div class="open">Open Until 3am</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="arrange-items" href="single-listing.php">
                                <div class="arrange-pic">
                                    <img src="img/arrange/arrange-6.jpg" alt="">
                                    <div class="rating">4.9</div>
                                    <div class="tic-text">Restaurants</div>
                                </div>
                                <div class="arrange-text">
                                    <h5>Cosmo Pub</h5>
                                    <span>Main Road , No 25/11</span>
                                    <p>Urna quam, euismod sit amet.</p>
                                    <div class="open">Open Until 3am</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="arrange-items" href="single-listing.php">
                                <div class="arrange-pic">
                                    <img src="img/arrange/arrange-7.jpg" alt="">
                                    <div class="rating">4.9</div>
                                    <div class="tic-text">Restaurants</div>
                                </div>
                                <div class="arrange-text">
                                    <h5>Trocadero Restaurant</h5>
                                    <span>Main Road , No 25/11</span>
                                    <p>Euismod sit amet mollis.</p>
                                    <div class="open closed">Closed Now</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="arrange-items" href="single-listing.php">
                                <div class="arrange-pic">
                                    <img src="img/arrange/arrange-8.jpg" alt="">
                                    <div class="rating">4.9</div>
                                    <div class="tic-text">Restaurants</div>
                                </div>
                                <div class="arrange-text">
                                    <h5>Pizza Bistro</h5>
                                    <span>Main Road , No 25/11</span>
                                    <p>Fusce urna quam, euismod.</p>
                                    <div class="open">Open Until 3am</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="arrange-items" href="single-listing.php">
                                <div class="arrange-pic">
                                    <img src="img/arrange/arrange-9.jpg" alt="">
                                    <div class="rating">4.9</div>
                                    <div class="tic-text">Restaurants</div>
                                </div>
                                <div class="arrange-text">
                                    <h5>Ciao Pub</h5>
                                    <span>Main Road , No 25/11</span>
                                    <p>Fusce urna quam, euismod.</p>
                                    <div class="open">Open Until 3am</div>
                                </div>
                            </a>
                        </div-->
                        <div class="col-lg-12 text-right">
                            <div class="pagination-num">
                                <a href="#">01</a>
                                <a href="#">02</a>
                                <a href="#">03</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container-fluid">
            <div class="howit-bg">
                <img src="img/howit-bg.png" alt="">
            </div>
        </div>
		
    </section>
    <!-- Filter Section End -->

    <!-- App Section Begin -->
    <section>
        <!--div class="container">
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
                        <p>Morbi id dictum quam, ut commodo lorem. Donec bibendum, enim ut luctus dictum, nisl turpis scelerisque sem, in dapibus neque odio eu sapien. Morbi ac aliquet erat. Sed dapibus, augue et malesuada maximus.</p>
                        <ul>
                            <li><i class="fa fa-check"></i>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis veli</li>
                            <li><i class="fa fa-check"></i>Vestibulum malesuada aliquet libero viverra cursus</li>
                            <li><i class="fa fa-check"></i>Urna quam, euismod sit amet mollis quis, vestibulum quis veli</li>
                        </ul>
                        <a href="#"><img src="img/apple-store.jpg" alt=""></a>
                        <a href="#"><img src="img/google-store.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div-->
		
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