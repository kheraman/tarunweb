<?php 
//session_start();
error_reporting(0);
require_once('includes/config.php')
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Belocalfocussed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>

<!-- Main header start -->
<?php include("header.php");?>
<!-- Main header end -->
<?php

$get_cate_wise_data = callAPI('GET', 'https://localist360.com/api/business?category_id=' . $_GET["category_id"], false);

$all_cate_wise_data = json_decode($get_cate_wise_data, true);
usort($all_cate_wise_data, function ($a, $b) {
    return strcmp($a['name'], $b['name']);
});
$count = count($all_cate_wise_data);
//echo "Total records: $count";

?>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1><?php if (!empty($all_cate_wise_data)) {
    echo $all_cate_wise_data[0]['data']['category'];
}
else
	
	{echo "No records found.";}
?></h1>
            <!--ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active"><?php //echo $catrowname["category_name"];?></li>
            </ul-->
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Listing section start -->
<div class="listing-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <!-- Option bar start -->
                <!--div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-8 col-8">
                            <div class="sorting-options2">
                                <span class="sort">Sort by:</span>
                                <select class="selectpicker search-fields" name="default-order">
                                    <option>Default Order</option>
                                    <option>Price High to Low</option>
                                    <option>Price: Low to High</option>
                                    <option>Newest listing</option>
                                    <option>Oldest listing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-4 col-4">
                            <div class="sorting-options">
                                <a href="list-fullwidth.html" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="grid-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div-->
                <div class="row">
                    <?php
					
					/*Pagination*/
					if (isset($_GET['page_no']) && $_GET['page_no']!="") {
					$page_no = $_GET['page_no'];
					} 
					else 
					{
						$page_no = 1;
					}
					
					$total_records_per_page = 9;
					$offset = ($page_no-1) * $total_records_per_page;					
					
					//$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM listing_master where category_id=".$_GET["cat_id"]);
					//$total_records = mysqli_fetch_array($result_count);
					$total_records = $count;
					$total_no_of_pages = ceil($total_records / $total_records_per_page);
					
					
					foreach ($all_cate_wise_data as $cat_data) {
							?>
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="listing-item-box compact-listing">
							<div class="detail">
								<div class="top">
									<h5 class="title">
										<a href="<?php echo $my_global_variable;?>Listing/L-<?php echo $cat_data['yid'];?>"><?php echo $cat_data['name'];?></a>
									</h5>
									<div class="location">
										<i class="flaticon-pin"></i><?php echo $cat_data['city'];?>, <?php echo $cat_data['country_iso'];?>-<?php echo $cat_data['postal_code'];?></a>
									</div>
									
									
								</div>
							</div>
						</div>
					</div>


					<?php } ?>
                   
                <!-- Page navigation start -->
				
				<?php
				$previous_page = $_GET['page_no']-1;
				$next_page = $_GET['page_no']+1;
				?>
				
                <div class="pagination-box text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
						 
						<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
						<a <?php if($page_no > 1){ echo "href='grid-fullwidth.php?category_id=".$_GET["category_id"]."&page_no=".$previous_page."'"; } ?>>Previous</a>
						</li>
						 
						<?php
						if ($total_no_of_pages <= 10){
						for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."&page_no=".$counter."'>$counter</a></li>";
						}
						}
						}
						elseif($total_no_of_pages > 10){
						 
						if($page_no <= 4) {
						for ($counter = 1; $counter < 8; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."&page_no=".$counter."'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."/$second_last'>$second_last</a></li>";
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."/$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."&page_no=1'>1</a></li>";
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."&page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";
						for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."&page_no=".$counter."'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."/$second_last'>$second_last</a></li>";
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."/$total_no_of_pages'>$total_no_of_pages</a></li>";
						}
						 
						else {
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."/1'>1</a></li>";
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."/2'>2</a></li>";
						echo "<li><a>...</a></li>";
						 
						for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";
						}else{
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."&page_no=".$counter."'>$counter</a></li>";
						}
						}
						}
						}
						?>
						 
						<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
						<a <?php if($page_no < $total_no_of_pages) { echo "href='grid-fullwidth.php?category_id=".$_GET["category_id"]."/$next_page'"; } ?>>Next</a>
						</li>
						<?php if($page_no < $total_no_of_pages){
						echo "<li><a href='grid-fullwidth.php?category_id=".$_GET["category_id"]."/$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
						} ?>
						</ul>
                    </nav>
                </div>
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