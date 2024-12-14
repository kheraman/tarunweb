<?php 
session_start();
error_reporting(0);
date_default_timezone_set("Asia/calcutta");



/*
define('HOST','localhost');
define('USER','');
define('PASSWORD','');
define('DBNAME','yplisting');
define('EXTRA','');
define('SITENAME','');
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].''.EXTRA);
define('SERVER_NAME','https://'.$_SERVER['SERVER_NAME'].''.EXTRA);
define('Admin_Email','admin@myexamplan.com');
define('FROM_Email','admin@myexamplan.com');
define('BCC_Email','neelesh@myexamplan.com,tarun@myexamplan.com');
define('CC_Email','');

$examcount = array();

$examcount['Basic'] ='2';
$examcount['Silver'] ='6';
$examcount['Gold'] ='8';
$examcount['Platinum'] ='0';

$examcount['1'] ='3';
$examcount['2'] ='6';
$examcount['3'] ='9';
$examcount['4'] ='10000000000000000000000000000';
*/

// Create connection
$con = new mysqli("localhost","ppvbuhtqam","zrTWSkSw3c");

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
else
{	//echo "Connected successfully";
}
/*

$con = mysqli_connect();
if (!$con)
{
  die('Could not connect: ' . mysqli_error());
}
echo "hello"; die("I amnn uujjjdead");*/


// Declare a global variable called $my_global_variable
global $my_global_variable;

// Set the value of the global variable
$my_global_variable = "https://belocalfocussed.com/";

//define('SITENAME','https://belocalfocussed.com/');


//define('__ROOT__','https://belocalfocussed.com/');





$select_db = mysqli_select_db( $con, 'ppvbuhtqam' );
if ( !$select_db ) {
    die( 'Database Selection Failed' . mysqli_error( $con ) );	
}
else
{ //echo "DB Selected";
}	

?>