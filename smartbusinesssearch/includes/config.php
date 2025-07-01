<?php

error_reporting(0);

/*
$uri = "mysql://avnadmin:AVNS_0ut9vkTOgcNWiXGft99@mysql-262f297f-khe-af93.k.aivencloud.com:18956/defaultdb?ssl-mode=REQUIRED";

$fields = parse_url($uri);

// Set up the database connection details
$host = $fields["host"];
$port = $fields["port"];
$user = $fields["user"];
$pass = $fields["pass"];
$dbname = "synupdb";
$sslcert = "ca.pem";  // Path to the SSL certificate

// Create a connection using mysqli
$con = new mysqli($host, $user, $pass, $dbname, $port);

// Check if the connection was successful
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Set SSL certificates for secure connection
$con->ssl_set(NULL, NULL, $sslcert, NULL, NULL);

// Check if SSL was applied successfully
if (!$con->real_connect($host, $user, $pass, $dbname, $port)) {
    die("Error connecting to database with SSL: " . $con->connect_error);
}

*/

global $my_global_variable,$cate_list,$response;

// Set the value of the global variable
$my_global_variable = "https://smartbusinesssearch.com/";

//$my_global_variable = "http://localhost/Synup_LIVE_websites/SYNUP/smartbusinesssearch/";



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

if (is_array($all_cate_list)) {
    shuffle($all_cate_list);
} else {
    // Optional: log or handle the error
    error_log("Invalid category data: " . $get_all_cate_data);
}

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
