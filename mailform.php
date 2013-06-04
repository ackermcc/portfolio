<?php
	$email = $_REQUEST['email'] ;
	$subject = $_REQUEST['subject'] ;
	$message = $_REQUEST['message'] ;
	mail("ackermcc@gmail.com", $subject,
	$message, "From:" . $email);
	// print '<script type="text/javascript">'; 
	// print 'alert("Thanks for reaching out!")'; 
	// print '</script>';
	header("Location: index.php");
?>