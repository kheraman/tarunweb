<?php 
////session_start();
//
require_once('includes/config.php');


//error_reporting(-1);
//ini_set('display_errors', 'On');
//set_error_handler("var_dump");

/*
print_r($_POST);
print_r($_SESSION);


Array ( [name] => Raman Kheterpal [email] => khe.raman@gmail.com [subject] => 444444dgfdg [phone] => 09811985010 [message] => dgdgd dfgdfg [captcha] => 5110 ) Array ( [code] => 5110 )
*/


$Name = Trim(stripslashes($_POST['name'])); 
$Tel = Trim(stripslashes($_POST['phone'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Subject = Trim(stripslashes($_POST['subject']));
$Message = Trim(stripslashes($_POST['message'])); 


$EmailFrom = $Email;
$EmailTo = "tarun.ravindran@synup.com,khe.raman@gmail.com";
//$Subject = "Contact Us - BeLocalFocussed";

// validation


	if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
    {
					// prepare email body text
			$Body = "";
			$Body .= "Name: ";
			$Body .= $Name;
			$Body .= "\n";
			$Body .= "Tel: ";
			$Body .= $Tel;
			$Body .= "\n";
			$Body .= "Email: ";
			$Body .= $Email;
			$Body .= "\n";
			$Body .= "Subject: ";
			$Body .= $Subject;
			$Body .= "\n";
			$Body .= "Message: ";
			$Body .= $Message;
			$Body .= "\n";

			// send email 
			
			/*echo $EmailTo;
			echo $Subject;
			echo $Body;
			echo $EmailFrom;
			die;*/
			
			//echo "insert into contactlisting (name,email,subject,phone,message) values ('".$Name."','".$Email."','".$Subject."','".$Tel."','".$Message."')";
			$insertdata = "insert into contactlisting (name,email,subject,phone,message) values ('".$Name."','".$Email."','".$Subject."','".$Tel."','".$Message."')";							
							
							$catresultname = mysqli_query($con,$insertdata);	
							//$catrowname = mysqli_fetch_array($catresultname, MYSQLI_ASSOC);
			
			$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

			// redirect to success page 
			if ($catresultname){
			  print "<meta http-equiv=\"refresh\" content=\"0;URL=singlelisting.php?lid=".$_POST['lid']."&value=thanks\">";
			}
			else{
				//echo "333";die;
			  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
			}
	}	
	else
	{
		echo "4444";die;
		print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
		exit;
	}



?>