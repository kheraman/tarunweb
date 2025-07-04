<!DOCTYPE html>
<html lang="zxx">

<?php 
error_reporting(0);
include("header.php");?>

<?php

$get_cate_wise_data = callAPI('GET', 'https://localist360.com/api/business?category_id=' . $_GET["category_id"], false);

$all_cate_wise_data = json_decode($get_cate_wise_data, true);
usort($all_cate_wise_data, function ($a, $b) {
    return strcmp($a['name'], $b['name']);
});
$count = count($all_cate_wise_data);
//echo "Total records: $count";

?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include("header1.php");?>

    <!-- Header End -->

    <!-- Map Section Begin -->
    <!-- Hero Section Begin -->
    <div class="hero-listing set-bg" data-setbg="img/how-it-works-bg.jpg">
    </div>
    <!-- Hero Section End -->
    <!-- Map Section End -->

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
                            <h2><?php if (!empty($all_cate_wise_data)) {
    echo "Category Name : ".$all_cate_wise_data[0]['data']['category'];
}
else
	
	{echo "No records found.";}
?></h2>
							<!--h2>Explore All Categories!</h2>
                            <p>Explore some of the best places in the world</p-->
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
				
					
					foreach ($all_cate_wise_data as $cat_data) {
							?>
						
                        <div class="col-lg-4" style="margin-bottom: 20px;">
						  <div style="
							border: 1px solid #33c4eb;
							border-radius: 12px;
							padding: 20px;
							box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
							background-color: #f9f9f9;
						  ">
							<h5><?php echo $cat_data["name"]; ?></h5>
							<span><?php echo $cat_data['street']; ?>, <?php echo $cat_data['city']; ?>, <?php echo $cat_data['state_iso']; ?>-<?php echo $cat_data['postal_code']; ?></span>

							<div class="open" style="margin-top: 10px;">
							  <a href="Listing/L-<?php echo $cat_data['yid']; ?>" style="color: #33c4eb; font-weight: bold;">Know more</a>
							</div>
						  </div>
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
						<?php
							$previous_page = $_GET['page_no']-1;
							$next_page = $_GET['page_no']+1;
						?>
				
                        <div class="col-lg-12 text-right">
                            <div class="pagination-num">
                                <ul class="pagination">
						 
						<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
						<a <?php if($page_no > 1){ echo "href='Category/".$_GET["cat_id"]."/$previous_page'"; } ?>>Previous</a>
						</li>
						 
						<?php
						if ($total_no_of_pages <= 10){
						for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='Category/".$_GET["cat_id"]."/$counter'>$counter</a></li>";
						}
						}
						}
						elseif($total_no_of_pages > 10){
						 
						if($page_no <= 4) {
						for ($counter = 1; $counter < 8; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='Category/".$_GET["cat_id"]."/$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='Category/".$_GET["cat_id"]."/$second_last'>$second_last</a></li>";
						echo "<li><a href='Category/".$_GET["cat_id"]."/$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
						echo "<li><a href='Category/".$_GET["cat_id"]."/1'>1</a></li>";
						echo "<li><a href='Category/".$_GET["cat_id"]."/2'>2</a></li>";
						echo "<li><a>...</a></li>";
						for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='Category/".$_GET["cat_id"]."/$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='Category/".$_GET["cat_id"]."/$second_last'>$second_last</a></li>";
						echo "<li><a href='Category/".$_GET["cat_id"]."/$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						else {
						echo "<li><a href='Category/".$_GET["cat_id"]."/1'>1</a></li>";
						echo "<li><a href='Category/".$_GET["cat_id"]."/2'>2</a></li>";
						echo "<li><a>...</a></li>";
						 
						for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='Category/".$_GET["cat_id"]."/$counter'>$counter</a></li>";
						}
						}
						}
						}
						?>
						 
						<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
						<a <?php if($page_no < $total_no_of_pages) { echo "href='Category/".$_GET["cat_id"]."/$next_page'"; } ?>>Next</a>
						</li>
						<?php if($page_no < $total_no_of_pages){
						echo "<li><a href='Category/".$_GET["cat_id"]."/$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
						} ?>
						</ul>
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