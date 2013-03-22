<?
$filename = $_GET['filename'];
require_once('php-sdk/facebook.php');
$config = array(
    'appId' => '194892497319911',
    'secret' => 'f872cff514c48f0bb2eb874fd568ef14',
	'fileUpload' => true,
  );
$facebook = new Facebook($config);
$user_id = $facebook->getUser();
$photo = realpath('generated_case_studies/'.$filename.'.jpg'); 
$message = 'I am an AIESECer!';
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Display Case Study</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

    
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->
    
    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/parallax-slider.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    
</head>
<body>
    <div class="container">
    <div class="title"><h2>Sucess - Your case study has been generated!</h2></div>
    <hr>
        <div class="row">
      		<div class="span6"><img src="generated_case_studies/<? echo $filename; ?>.jpg"></div>
            <div class="span6">
            	<h4>Upload to Facebook</h4>
                <?
                if(!isset($_POST['upl-to-fb']))
				  {
				  ?>
                <form method="POST">
                	<input type="submit" class="btn" value="Upload to Facebook" name="upl-to-fb">
                </form>
                <?
                   }
                 ?>
                <?
                  if(isset($_POST['upl-to-fb']))
				  {
				  
				  if($user_id) {
			
				  // We have a user ID, so probably a logged in user.
				  // If not, we'll get an exception, which we handle below.
				  try {
			
					// Upload to a user's profile. The photo will be in the
					// first album in the profile. You can also upload to
					// a specific album by using /ALBUM_ID as the path 
					$ret_obj = $facebook->api('/me/photos', 'POST', array(
													 'source' => '@' . $photo,
													 'message' => $message,
													 )
												  );
					echo '<pre>Case Study uploaded to Facebook!</pre>';
			
				  } catch(FacebookApiException $e) {
					// If the user is logged out, you can have a 
					// user ID even though the access token is invalid.
					// In this case, we'll get an exception, so we'll
					// just ask the user to login again here.
					$login_url = $facebook->getLoginUrl( array(
								   'scope' => 'photo_upload'
								   )); 
					echo '<pre>Please <a href="' . $login_url . '">login.</a></pre>';
					error_log($e->getType());
					error_log($e->getMessage());
				  }   
			
				  echo '<a href="' . $facebook->getLogoutUrl() . '">logout</a>';
				} else {
			
				  // No user, print a link for the user to login
				  // To upload a photo to a user's wall, we need photo_upload  permission
				  // We'll use the current URL as the redirect_uri, so we don't
				  // need to specify it here.
				  $login_url = $facebook->getLoginUrl( array( 'scope' => 'photo_upload') );
				  echo 'Please <a href="' . $login_url . '">login.</a>';
				}
				  }
				?>

            <h4>Problems?</h4>
            
            Feel free to send me an <a href="mailto:michael.victor@aiesec.net?Subject=Case%20Study%20Generator">email</a>!
            
            </div>
	</div>
    </div>
 <!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.imagesloaded.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script src="js/fancybox.js"></script>
<script defer src="js/custom.js"></script>
<!-- end: Java Script -->
</body>

</html>