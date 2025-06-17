<?php

error_reporting(0);


global $my_global_variable,$cate_list,$response;

// Set the value of the global variable
$my_global_variable = "https://golocalpages.com/";

//$my_global_variable = "http://localhost/Synup_LIVE_websites/SYNUP/golocalpages/";



function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'x-api-key: 8KHjv4sZeCafv4YCGnf9F2TKE6MW016Koz7MhUAf',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}


$get_all_cate_data = callAPI('GET', 'https://localist360.com/api/category', false);
$all_cate_list = json_decode($get_all_cate_data, true);
shuffle($all_cate_list);


$get_data = callAPI('GET', 'https://app.synup.com/locations?location_id='.$_GET['lid'], false);
$response = json_decode($get_data, true);
		/*echo "<pre>";	
					print_r($response['location_info']['business_hours']);	
					echo "</pre>";
					//die;
		 	 	/*			
			[file_name] => woops-new-pink-logo.png
					[category_name] => Logo
                            [category] => Logo */





// Perform a query
//$result = $con->query("SELECT VERSION()");

// Fetch and output the result
//if ($result) {
  //  $row = $result->fetch_row();
  //  echo "MySQL Version: " . $row[0];
//} else {
//    echo "Error: " . $con->error;
//}

// Close the connection
//$con->close();

?>
