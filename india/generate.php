<?php
$name = $_POST['name'];
$home_city = $_POST['home_city'];
$filename = $_POST['filename'];
$project = $_POST['project'];
$d_city = $_POST['d_city'];
$d_country = $_POST['d_country'];

$base_picture = imagecreatetruecolor(3508,4961);
$uploaded_image = imagecreatefromjpeg('upload_pic/'.$filename.'.jpg');	
$source_image = imagecreatefrompng('images/source_image.png');
imagecopyresampled($base_picture, $uploaded_image, 0, 0, 0, 0, 3508, 4961, 3508, 4961);
imagecopyresampled($base_picture, $source_image, 0, 0, 0, 0, 3508, 4961, 3508, 4961);

//colour
$textCol = imagecolorallocate($base_picture, 255, 255, 255); // Create a white colour


//fonts
$gil_condensed = 'fonts/gil.ttf';

//Inserting Name
$name_posY = 3610;
$name_posX = 2220;
imagettftext($base_picture, 90, 0, $name_posX, $name_posY, $textCol, $gil_condensed, $name);

//Inserting Home City
$home_city_posY = 3740;
$home_city_posX = 2220;
imagettftext($base_picture, 90, 0, $home_city_posX, $home_city_posY, $textCol, $gil_condensed, $home_city.', India');

//Inserting Destination City
$bbox = imagettfbbox (100, 0, $gil_condensed, $d_city); 
$d_city_posX = 2750 - $bbox[2]/2;
$d_city_posY = 2600;
imagettftext($base_picture, 100, 0, $d_city_posX, $d_city_posY, $textCol, $gil_condensed, $d_city.',');

//Inserting Destination Country
$bbox = imagettfbbox (100, 0, $gil_condensed, $d_country); 
$d_country_posX = 2750 - $bbox[2]/2;
$d_country_posY = 2750;
imagettftext($base_picture, 100, 0, $d_country_posX, $d_country_posY, $textCol, $gil_condensed, $d_country);

//Inserting Project Name
$bbox = imagettfbbox (100, 0, $gil_condensed, 'Project'); 
$project1_posX = 2750 - $bbox[2]/2;
$project1_posY = 2000;
imagettftext($base_picture, 100, 0, $project1_posX, $project1_posY, $textCol, $gil_condensed, 'Project');

$y = 2130;
$lines = explode('|', wordwrap($project, 12, '|'));
foreach ($lines as $line)
{
	$bbox = imagettfbbox (100, 0, $gil_condensed, $line);
	$line_posX = 2750 - $bbox[2]/2;
	imagettftext($base_picture, 100, 0, $line_posX, $y, $textCol, $gil_condensed, $line);
	// Increment Y so the next line is below the previous line
	$y += 130;
}


$name = str_replace(' ', '', $name);
imagejpeg($base_picture, 'generated_case_studies/'.$name.'.jpg');
header('Location: display_case_study.php?filename='.$name);

?>