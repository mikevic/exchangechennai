<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>GCDP TN</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet/less" href="less/style.less">
	<link type="text/css" href="css/modal.css" rel="stylesheet" />
	<script src="js/libs/less-1.3.0.min.js"></script>
	<!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
	to style.css, and replace the 2 lines above by this one:

	<link rel="stylesheet" href="less/style.css">
	 -->

	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>

</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<?
	include 'menu.php';
?>
	

    <div class="container">
		<div id="interview-pic">
			<img src="img/interview.jpg" width="500px">
		</div>
		<div id="interview-form">
			<div align="left">
				We look forward to talking to you!<br />
				Please create a skype id if you do not already have one!
			</div>
			<div align="right">
			<?php
				if(isset($_POST['ep_name']))
				{
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
					
				}
			?>
				<form action="interview.php" method="POST">
					EP Name : <input type="text" name="ep_name" /><br />
					EP ID : <input type="text" name="ep_id" /><br />
					Email : <input type="text" name="email" /><br />
					Project Interested : <input type="text" name="project" /><br />
					Local Committe : <input type="text" name="lc" /><br />
					Country : <input type="text" name="country" /><br />
					Time/Date Available for Interview : <input type="text" name="date" /><br />
					Skype id : <input type="text" name="skype" /><br />
					<input type="submit" value="Schedule my interview!">
				</form>
			</div>
			
		</div>
				


<?
	include 'footer.php';
?>

    </div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script src="js/libs/bootstrap/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.colorbox.js"></script>


</body>
</html>
