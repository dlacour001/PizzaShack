<?php

//if "email" variable is filled out, send email

  if (isset($_POST['subject']) && isset($_POST['message']))  {

  

  //Email information

  $admin_email = "testemail@pizzashack.x10host.com";

   $userEmail = $_POST['email'];

  $subject = $_POST['subject'];

  $comment = $_POST['message'];
  
  // would use $headers = "From:" . $email , nut free hosting site only allows sending to internal mail
  $headers = "From:" . $admin_email;
  $comment = "Thank you for your email, we will let you know when the issue has been resolved.";
	
  //send email

 $send = mail($admin_email, $subject, $comment, $headers);
	
if ($send){
	
	header("Location: http://pizzashack.x10host.com/Help");	
	
	
} else{
	echo 'error';
}
$send=mail($userEmail, $subject, $comment, $headers);
if ($send){
	
	header("Location: http://pizzashack.x10host.com/Help");	
	
	
} else{
	echo 'error';
}

}

?>
