<?php
	$ep_name = $_POST['ep_name'];
	$ep_id = $_POST['ep_id'];
	$email = $_POST['email'];
	$project = $_POST['project'];
	$lc = $_POST['lc'];
	$country = $_POST['country'];
	$date = $_POST['date'];
	$skype = $_POST['skype'];
	$to = "mike.aiesec@gmail.com";
	$subject = "Exchange Chennai - ICX";
	$message = 'EP Name : '.$ep_name."\n".'EP ID : '.$ep_id."\n".'Email : '.$email."\n".'Project intrested in : '.$project."\n".'LC/Country : '.$lc.'  -  '.$country."\n".'Date Available :'.$date."\n".'Sykpe : '.$skype;
	$from = "interviews@exchangechennai.in";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
	echo "A mail has been sent to the TN Manager. He/She will contact you directly as soon as possible!";
?>