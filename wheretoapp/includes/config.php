<?php
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

global $my_global_variable;

// Set the value of the global variable
$my_global_variable = "https://wheretoapp.com/";


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
