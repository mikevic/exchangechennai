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

	<link rel="stylesheet/less" href="../less/style.less">
	<link type="text/css" href="../css/colorbox.css" rel="stylesheet" />
	<script src="../js/libs/less-1.3.0.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/jquery.jqEasyCharCounter.min.js" type="text/javascript"></script>
	<!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
	to style.css, and replace the 2 lines above by this one:

	<link rel="stylesheet" href="less/style.css">
	 -->
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
	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>

    
</head>
<body>
<div class="container">
	<legend>Case Study Generator</legend>
    <hr>
    <form action="generate.php" method="post" enctype="multipart/form-data">
    <label>Picture:</label><input type="file" name="picture" id="picture" /><br>
    Upload only .jpg images <br>
    Recomended Size : 800 X 550 px width.<br>
    <label>First name : </label><input type="text" placeholder="Enter your first name here" name="first_name">
    <label>Last name : </label><input type="text" placeholder="Enter your last name here" name="last_name">
    <label>Position : </label><input type="text" placeholder="Enter your position here" name="position" id="position">
    <label>LC Name : </label><input type="text" placeholder="Enter your LC name here" name="lc_name">
    <label>Age : </label><input type="text" placeholder="Enter your age here" name="age"> years
    <label>Text : </label><textarea id="text_field" rows="4" name="text_field" ></textarea><div id="charNum">​</div>
    <br><button type="submit" class="btn">Submit</button>
    </form>
</div>
 
</body>

</html>