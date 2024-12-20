<?php
////session_start();
//error_reporting(0);
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
	$sql = "select * from meta_tags where page_type = '".$page_type."'";							
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	//print_r($row); die("hhh");
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
    <meta charset="UTF-8">
	<base href="https://uscity.io/">
    <meta name="description" content="<?php echo $meta_desc;?>">
	<meta name="keywords" content="<?php echo $meta_keywords;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    <title><?php echo $meta_title;?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css"  href="css/slick.css">
	
	
</head>