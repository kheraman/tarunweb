<?php



include('includes/config.php');

$fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
 /*
[file] => Array
        (
            [name] => Book2999.csv
            [type] => text/csv
            [tmp_name] => E:\xampp\tmp\phpC5D2.tmp
            [error] => 0
            [size] => 3609700
        )
 */


 
    // Validate selected file is a CSV file or not
    if (!empty($_FILES['file']['name']))
    {
 
        $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
             $sql = "INSERT into listing_master (id,yid,name,biz_url,street,city,	postal_code,	phone,	latitude,	longitude,	owner_name,	category_id,	sub_category_id,	created_at,	updated_at,	archived,	facebook_url,	twitter_url,	tagline,	description,	owner_email,	year_of_incorporation,	googleplus_url,	linkedin_url,	uid,	plan_id,	hide_address,	approved,	archived_at,	activated_at,	source,	business_hours,	enabled_site_ids,	country_iso,	state_iso,	additional_category_ids,	videos,	store_id,	offerings_url,	booking_url,	reservation_url,	street1,	parent_id,	is_chain_business,	biz_url_utm,	more_hours	
) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."','".$getData[23]."','".$getData[24]."','".$getData[25]."','".$getData[26]."','".$getData[27]."','".$getData[28]."','".$getData[29]."','".$getData[30]."','".$getData[31]."','".$getData[32]."','".$getData[33]."','".$getData[34]."','".$getData[35]."','".$getData[36]."','".$getData[37]."','".$getData[38]."','".$getData[39]."','".$getData[40]."','".$getData[41]."','".$getData[42]."','".$getData[43]."','".$getData[44]."','".$getData[45]."')";
				 //  echo $sql;
				   //die;
                   $result = mysqli_query($con, $sql);
				 //  die;
				if(!isset($result))
				{
				  echo "<script type=\"text/javascript\">
					  alert(\"Invalid File:Please Upload CSV File.\");
					  window.location = \"index.php\"
					  </script>";    
				}
				else {
					echo "<script type=\"text/javascript\">
					alert(\"CSV File has been successfully Imported.\");
					window.location = \"index.php\"
				  </script>";
				}
           }
      
           fclose($file);  
     }        
    }


?>
