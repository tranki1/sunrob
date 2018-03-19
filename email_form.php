<?php
if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sunrob@sunrob.com";
    $email_subject = "From SunRob Website";
    function died($error_message) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error_message."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    // validation expected data exists
    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    $name = $_POST['name']; // required
	$email = $_POST['email']; // required
    $message = $_POST['message']; // required 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  	if(!preg_match($email_exp,$email)) {$error_message .= 'Email Address you entered does not appear to be valid.<br />';}
	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$name)) {$error_message .= 'The Name you entered does not appear to be valid.<br />';	}
  	if(strlen($message) < 2) {$error_message .= 'The Message you entered do not appear to be valid.<br />';}
 	if(strlen($error_message) > 0) {died($error_message);}
	$email_message = "Form details below.\n\n";
	function clean_string($string) {$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}
	$email_message .= "Name: ".clean_string($name)."\n";
	$email_message .= "Email: ".clean_string($email)."\n";
	$email_message .= "Message: ".clean_string($message)."\n";
	// create email headers
	$headers = 'From: '.$email."\r\n".
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);  
	?>
<!-- include your own success html here -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/icon/Logo.png">
	<title>SunRob</title>
	<link rel="stylesheet" href="css/SunRob.css">
</head>
<body>
<div id="wrapper">
	<section id="intro">
	<div class="intro">
    	<h1>Thank you</h1>
        <h5 class="subtitle" style="text-decoration:underline;"><a href="http://www.sunrob.fi">Go back to the main website</a></h6>
   	</div>
</section>
</div>
</body>
</html>
<?php
}
?>