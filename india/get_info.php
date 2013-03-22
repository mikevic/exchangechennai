<?php
$filename = $_GET['file'];
?>
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

</head>
<body>
<div class="container">
	<br>
    <br>
    <div class="title"><h2>AIESEC India Case Study Generator</h2></div>
    <hr>
    <h4>Step 3 : Provide Information</h4>
    <form action="generate.php" method="post" enctype="multipart/form-data">
    <label>Name : </label><input type="text" placeholder="" name="name" id="name">
    <label>Home City : </label><input type="text" placeholder="" name="home_city" id="home_city">
    <input type="hidden" name="filename" value="<?php echo $filename; ?>">
    <label>Name of the Project : </label><input type="text" placeholder="" name="project" id="project">
    <label>Destination City : </label><input type="text" placeholder="" name="d_city" id="d_city">
    <label>Destination Country : </label><input type="text" placeholder="" name="d_country" id="d_country">
    <div id="charNum">​</div>
    <br><button type="submit" class="btn">Submit</button>
    </form>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Page specific Java Script -->
<script src="js/jquery.jqEasyCharCounter.min.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
		$('#name').jqEasyCounter({
			'maxChars': 20,
			'maxCharsWarning': 15
			});
		$('#home_city').jqEasyCounter({
			'maxChars': 20,
			'maxCharsWarning': 15
			});
		$('#project').jqEasyCounter({
			'maxChars': 24,
			'maxCharsWarning': 20
			});
		$('#d_city').jqEasyCounter({
			'maxChars': 24,
			'maxCharsWarning': 20
			});
		$('#d_country').jqEasyCounter({
			'maxChars': 24,
			'maxCharsWarning': 20
			});
		});
	</script>
<!-- end: Java Script -->

</body>
</html>