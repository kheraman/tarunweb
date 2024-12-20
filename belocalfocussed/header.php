<?php
//session_start();
error_reporting(1);
require_once('includes/config.php');

$bname = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

//$bname == "allcategories.php";
if($bname == "allcategories.php")
{		$page_type = "all_categories";	}

elseif($bname == "grid-fullwidth.php")
{		$page_type = "single_category";	}

elseif($bname == "listing-single.php")
{		$page_type = "single_listing";	}

elseif($bname == "contact.php")
{		$page_type = "contactus";	}

elseif($bname == "privacy-policy.php")
{		$page_type = "privacy_policy";	}

elseif($bname == "termsandconditions.php")
{		$page_type = "terms_condition";	}
else
{
	$page_type = "index";	
}	
 	$sql = "select * from meta_tags where page_type = '".$page_type."'";		 //die;					
	$result = mysqli_query($sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
// 	//print_r($row); die("hhh");
if(isset($_GET["cat_id"]) && $_GET["cat_id"] !="")	
 {
 	$catsqlname = "select * from category_master where cat_id=".$_GET['cat_id'];							
							
 							$catresultname = mysqli_query($con,$catsqlname);	
 							$catrowname = mysqli_fetch_array($catresultname, MYSQLI_ASSOC);

	
  	//echo str_replace("[Category Name]",$catrowname,"Hello world!");
  	$meta_title= str_replace("[Category Name]",$catrowname['category_name'],$row["meta_title"]);
  	$meta_desc= str_replace("[Category Name]",$catrowname['category_name'],$row["meta_desc"]);
  	$meta_keywords= str_replace("[Category Name]",$catrowname['category_name'],$row["meta_keywords"]);
	
  }
  /*elseif(isset($_GET["lid"]) && $_GET["lid"] !="")	/* because here data is coming from API which is running on listing single page but here we need to
  run it here to get business name etc..so this is the challenge
 {
  	$catsqlname = "select * from category_master where cat_id=".$_GET['cat_id'];							
							
 						$catresultname = mysqli_query($con,$catsqlname);	
  							$catrowname = mysqli_fetch_array($catresultname, MYSQLI_ASSOC);

	
  	//echo str_replace("[Category Name]",$catrowname,"Hello world!");
  	$meta_title= str_replace("[Category Name]",$catrowname['category_name'],$row["meta_title"]);
  	$meta_desc= str_replace("[Category Name]",$catrowname['category_name'],$row["meta_desc"]);
  	$meta_keywords= str_replace("[Category Name]",$catrowname['category_name'],$row["meta_keywords"]);
	
  }*/
  else
  {
  	$meta_title= $row["meta_title"];//die("kkk");
  	$meta_desc= $row["meta_desc"];
 	$meta_keywords= $row["meta_keywords"];

  }
						
					

					

?>

<head>
    <title><?php echo $meta_title;?></title>
	<base href="https://belocalfocussed.com/">
	<meta name="description" content="<?php echo $meta_desc;?>">
	<meta name="keywords" content="<?php echo $meta_keywords;?>">
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
<header class="main-header header-transparent sticky-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="https://belocalfocussed.com/">
                <img src="img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
           
  

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav header-ml">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-home" style="font-size:18px"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/index">Home</a></li>
                            <!--li><a class="dropdown-item" href="index-2.html">Index 02</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Index 03</a></li>
                            <li><a class="dropdown-item" href="index-4.html">Index 04</a></li>
                            <li><a class="dropdown-item" href="index-5.html">Index 05</a></li>
                            <li><a class="dropdown-item" href="index-6.html">Index 06</a></li-->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Listings
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <!--li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">List Layout</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="list-sidebar.html">Listing Sidebar</a></li>
                                    <li><a class="dropdown-item" href="list-fullwidth.html">Listing Fullwidth</a></li>
                                    <li><a class="dropdown-item" href="list-sidebar-map.html">Listing Sidebar Map</a></li>
                                    <li><a class="dropdown-item" href="fullwidth-map.html">Listing Fullwidth Map</a></li>
                                </ul>
                            </li-->
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Categories</a>
                                <ul class="dropdown-menu">
                                    
                                    <li><a class="dropdown-item" href="/allcategories">All</a></li>
									<!--li><a class="dropdown-item" href="grid-sidebar.html">Listing Sidebar</a></li>
                                    <li><a class="dropdown-item" href="grid-sidebar-map.html">Listing Sidebar Map</a></li>
                                    <li><a class="dropdown-item" href="fullwidth-map.html">Listing Fullwidth Map</a></li-->
                                </ul>
                            </li>
                            <!--li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Single Listing</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="listing-single.html">Style 1</a></li>
                                    <li><a class="dropdown-item" href="listing-single-2.html">Style 2</a></li>
                                    <li><a class="dropdown-item" href="listing-single-3.html">Style 3</a></li>
                                </ul>
                            </li-->
                        </ul>
                    </li>
                    <!--li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User Panel
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                            <li><a class="dropdown-item" href="my-listings.html">My Listings</a></li>
                            <li> <a class="dropdown-item" href="my-invoices.html">My Invoices</a></li>
                            <li><a class="dropdown-item" href="favorited-listings.html">Favorited Listings</a></li>
                            <li><a class="dropdown-item" href="messages.html">Messages</a></li>
                            <li><a class="dropdown-item" href="bookings.html">Bookings</a></li>
                            <li><a class="dropdown-item" href="add-listing.html">Add Listing</a></li>
                            <li><a class="dropdown-item" href="my-profile.html">My Profile</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="megamenu-area">
                                <div class="row sobuz">
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="about.html">About</a>
                                            <a class="dropdown-item" href="user-profile.html">User Profile</a>
                                            <a class="dropdown-item" href="team.html">Our Team</a>
                                            <a class="dropdown-item" href="how-it-work.html">How It Work</a>
                                            <a class="dropdown-item" href="shop.html">Shop</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="pricing-tables.html">Pricing Tables</a>
                                            <a class="dropdown-item" href="gallery-3column.html">Gallery</a>
                                            <a class="dropdown-item" href="typography.html">Typography</a>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                            <a class="dropdown-item" href="faq.html">Faq</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="contact.html">Contact</a>
                                            <a class="dropdown-item" href="icon.html">Icons</a>
                                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                            <a class="dropdown-item" href="404.html">Error Page</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink7">
                            <li><a class="dropdown-item" href="blog-columns-1.html">Blog 1 Columns</a></li>
                            <li><a class="dropdown-item" href="blog-columns-2.html">Blog 2 Columns</a></li>
                            <li><a class="dropdown-item" href="blog-columns-3.html">Blog 3 Columns</a></li>
                            <li><a class="dropdown-item" href="blog-details.html">Blog Detele</a></li>
                        </ul>
                    </li-->
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink7">
                            <li><a class="dropdown-item" href="/contact">Contact Us</a></li>
                            
                        </ul>
                    </li>
                </ul>
                <!--ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="login.html">
                            <i class="flaticon-logout"></i>Sign In
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="add-listing.html" class="nav-link link-color"><i class="fa fa-plus"></i> Add Listing</a>
                    </li>
                </ul-->
            </div>
			      </nav>
    </div>
</header>
