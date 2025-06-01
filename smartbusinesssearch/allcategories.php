<?php 
////session_start();
//
require_once('includes/config.php')
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Main header start -->
<?php include("header.php");?>
<!-- Main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Choose Category</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">All Category</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Listing section start -->
<div class="listing-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div style="margin-bottom:20px; text-align:center;">
  Select the Category starting with:
  <?php
    $selected = isset($_GET['letter']) ? $_GET['letter'] : '';
    foreach (range('A', 'Z') as $char) {
        $style = 'margin:5px; font-weight:bold; color:#33c4eb; text-decoration:none;';
        if ($char === $selected) {
            $style .= ' background-color:#33c4eb; color:white; padding:5px 10px; border-radius:4px;';
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
        $cat_id = $cat['cat_id'];

        if ($selected_letter && strtoupper($cat_name[0]) !== $selected_letter) continue;

        echo '<a href="grid-fullwidth.php?category_id=' . urlencode($cat_id) . '" style="text-decoration:none;">
            <span style="
                display:inline-block;
                border: 1px solid #33c4eb;
                background-color: #e6f9fd;
                color: #33c4eb;
                padding:8px 15px;
                border-radius:20px;
                font-size:14px;
                white-space:nowrap;
                transition:all 0.3s ease;
            " onmouseover="this.style.backgroundColor=\'#33c4eb\'; this.style.color=\'white\';" onmouseout="this.style.backgroundColor=\'#e6f9fd\'; this.style.color=\'#33c4eb\';">'
            . htmlspecialchars($cat_name) .
            '</span></a>';
    }

    echo '</div>';
  ?>


                    <!--div class="col-lg-4 col-md-6 col-sm-12" >
                        <div class="listing-item-box">
                            <div class="listing-thumbnail">
                                <a href="listing-single.php" class="listing-photo">
                                    <div class="tag">Restourant</div>
                                    <img class="d-block w-100" src="img/listing/img-1.png" alt="listing-photo">
                                    <div class="user">
                                        <div class="avatar">
                                            <img src="img/avatar/avatar-2.png" alt="avatar" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="name">
                                            <h5>Antony</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="detail">
                                <div class="top">
                                    <h3 class="title">
                                        <a href="listing-single.php">The Green Restourant</a>
                                    </h3>
                                    <div class="location">
                                        <a href="#"><i class="flaticon-pin"></i>123 Kathal St. Tampa City,</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                </div>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>( 254 Reviews )</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" >
                        <div class="listing-item-box">
                            <div class="listing-thumbnail">
                                <a href="listing-single.php" class="listing-photo">
                                    <div class="tag">Eat & Drink</div>
                                    <img class="d-block w-100" src="img/listing/img-5.png" alt="listing-photo">
                                    <div class="user">
                                        <div class="avatar">
                                            <img src="img/avatar/avatar-3.png" alt="avatar" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="name">
                                            <h5>Adnan Ta</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="detail">
                                <div class="top">
                                    <h3 class="title">
                                        <a href="listing-single.php">Best Place For Drink</a>
                                    </h3>
                                    <div class="location">
                                        <a href="#"><i class="flaticon-pin"></i>123 Kathal St. Tampa City,</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                </div>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>( 254 Reviews )</span>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-lg-4 col-md-6 col-sm-12" >
                        <div class="listing-item-box">
                            <div class="listing-thumbnail">
                                <a href="listing-single.php" class="listing-photo">
                                    <div class="tag">Event</div>
                                    <img class="d-block w-100" src="img/listing/img-4.png" alt="listing-photo">
                                    <div class="user">
                                        <div class="avatar">
                                            <img src="img/avatar/avatar-4.png" alt="avatar" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="name">
                                            <h5>Kanty</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="detail">
                                <div class="top">
                                    <h3 class="title">
                                        <a href="listing-single.php">My Parsonal Event</a>
                                    </h3>
                                    <div class="location">
                                        <a href="#"><i class="flaticon-pin"></i>123 Kathal St. Tampa City,</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                </div>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>( 254 Reviews )</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" >
                        <div class="listing-item-box">
                            <div class="listing-thumbnail">
                                <a href="listing-single.php" class="listing-photo">
                                    <div class="tag">Hotels</div>
                                    <img class="d-block w-100" src="img/listing/img-2.png" alt="listing-photo">
                                    <div class="user">
                                        <div class="avatar">
                                            <img src="img/avatar/avatar-4.png" alt="avatar" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="name">
                                            <h5>Kanty</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="detail">
                                <div class="top">
                                    <h3 class="title">
                                        <a href="listing-single.php">The Hotel Alpha</a>
                                    </h3>
                                    <div class="location">
                                        <a href="#"><i class="flaticon-pin"></i>123 Kathal St. Tampa City,</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                </div>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>( 254 Reviews )</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" >
                        <div class="listing-item-box">
                            <div class="listing-thumbnail">
                                <a href="listing-single.php" class="listing-photo">
                                    <div class="tag">Shops</div>
                                    <img class="d-block w-100" src="img/listing/img-6.png" alt="listing-photo">
                                    <div class="user">
                                        <div class="avatar">
                                            <img src="img/avatar/avatar-4.png" alt="avatar" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="name">
                                            <h5>Ai Mamun</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="detail">
                                <div class="top">
                                    <h3 class="title">
                                        <a href="listing-single.php">Shop In City</a>
                                    </h3>
                                    <div class="location">
                                        <a href="#"><i class="flaticon-pin"></i>123 Kathal St. Tampa City,</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                </div>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>( 254 Reviews )</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div-->
                <!-- Page navigation start -->
				<?php /*?>
                <div class="pagination-box text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
						 
						<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
						<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
						</li>
						 
						<?php
						if ($total_no_of_pages <= 10){
						for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?page_no=$counter'>$counter</a></li>";
						}
						}
						}
						elseif($total_no_of_pages > 10){
						 
						if($page_no <= 4) {
						for ($counter = 1; $counter < 8; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?page_no=$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
						echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
						echo "<li><a href='?page_no=1'>1</a></li>";
						echo "<li><a href='?page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";
						for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?page_no=$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
						echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						else {
						echo "<li><a href='?page_no=1'>1</a></li>";
						echo "<li><a href='?page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";
						 
						for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='?page_no=$counter'>$counter</a></li>";
						}
						}
						}
						}
						?>
						 
						<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
						<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
						</li>
						<?php if($page_no < $total_no_of_pages){
						echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
						} ?>
						</ul>
                    </nav>
                </div>
				<?php */ ?>
            </div>
        </div>
    </div>
</div>
<!-- Listing section end -->

<?php include("footer.php");?>

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="index.php#">
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