<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Case Study Generator</title>
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
    <script src="js/jquery.jqEasyCharCounter.min.js" type="text/javascript"></script>
	<!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
	to style.css, and replace the 2 lines above by this one:

	<link rel="stylesheet" href="less/style.css">
	 -->

	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>

    
</head>
<body>
<div class="container">
	<br>
    <br>
    <div class="title"><h2>Case Study Generator</h2></div>
    <form action="generate.php" method="post" enctype="multipart/form-data">
    <label>Picture:</label><input type="file" name="picture" id="picture" /><br>
    Upload only .jpg or .png images <br>
    Recomended Size : 800 X 550 px width.<br><br>
    <label>First name : </label><input type="text" placeholder="Enter your first name here" name="first_name">
    <label>Last name : </label><input type="text" placeholder="Enter your last name here" name="last_name">
    <label>Position : </label><input type="text" placeholder="Enter your position here" name="position" id="position">
    If you are an Intern, type - Intern <br>
    <label>Type of Association : </label>
    <select name="assoc" required>
                              <option value="Alumni">Alumni</option>
                              <option value="Member">Member</option>
                              <option value="Intern">Intern</option>
                          </select>
    <label>Age : </label><input type="text" placeholder="Enter your age here" name="age"> years
    <label>Text : </label><textarea id="text_field" rows="4" name="text_field" ></textarea><div id="charNum">​</div>
    <br><button type="submit" class="btn">Submit</button>
    </form>
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

<!-- Page specific Java Script -->
<script src="js/jquery.jqEasyCharCounter.min.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
		$('#text_field').jqEasyCounter({
			'maxChars': 600,
			'maxCharsWarning': 450
			});
		$('#position').jqEasyCounter({
			'maxChars': 40,
			'maxCharsWarning': 35
			});
		});
	</script>
<!-- end: Java Script -->
 
</body>

</html>