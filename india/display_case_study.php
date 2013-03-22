<?
$filename = $_GET['filename'];
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
	<!-- end: CSS -->

    
</head>
<body>
    <div class="container">
    <div class="title"><h2>Sucess - Your case study has been generated!</h2></div>
    <hr>
        <div class="row">
      		<div class="span6"><img src="generated_case_studies/<? echo $filename; ?>.jpg"></div>
            <div class="span6">
            	

            <h4>Problems?</h4>
            
            Feel free to send us an <a href="mailto:michael.victor@aiesec.net?Subject=Case%20Study%20Generator">email</a>!
            
            </div>
	</div>
    </div>
 <!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- end: Java Script -->
</body>

</html>