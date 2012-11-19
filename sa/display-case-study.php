<?
$filename = $_GET['filename'];
require_once('php-sdk/facebook.php');
$config = array(
    'appId' => '385075144906203',
    'secret' => 'e0efd5d6d19581837bd33a20a3e7843d',
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

	<link rel="stylesheet/less" href="../less/style.less">
	<link type="text/css" href="../css/colorbox.css" rel="stylesheet" />
	<script src="../js/libs/less-1.3.0.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/jquery.jqEasyCharCounter.min.js" type="text/javascript"></script>
	<!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
	to style.css, and replace the 2 lines above by this one:

	<link rel="stylesheet" href="less/style.css">
	 -->
	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>

    
</head>
<body>
    <div class="container">
    <h4>Sucess - Your case study has been generated!</h4>
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
 
</body>

</html>