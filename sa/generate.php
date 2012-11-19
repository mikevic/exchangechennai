<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$name = $first_name.' '.$last_name;
$lc_name = $_POST['lc_name'];
$position = $_POST['position'];
$text = $_POST['text_field'];
$age = $_POST['age'];
move_uploaded_file($_FILES["picture"]["tmp_name"], "pictures/" . $_FILES["picture"]["name"]);
$extension = substr($_FILES["picture"]["name"], -3);
if($extension == 'jpg')
{
	
	$image = imagecreatefromjpeg('source_image.jpg');
	$save_image_name = str_replace(' ', '', $name);
	$uploaded_picture = imagecreatefromjpeg('pictures/' . $_FILES["picture"]["name"]);
	
	$uploaded_picture_width = imagesx($uploaded_picture);
	$uploaded_picture_height = imagesy($uploaded_picture);

	$new_height = 550;
	$ratio = $uploaded_picture_height / 550;
	$new_width = $uploaded_picture_width / $ratio;
	
	if($new_width < 800)
	{
	$ratio = $uploaded_picture_width /800;
	$new_height = $uploaded_picture_height / $ratio;
	$new_width = 800;
	}

	
	$resized_uploaded_picture = imagecreatetruecolor(800, 550);
	imagecopyresampled($resized_uploaded_picture, $uploaded_picture, 0, 0, 0, 0, $new_width, $new_height, $uploaded_picture_width, $uploaded_picture_height);
	imagejpeg($resized_uploaded_picture, 'resized_uploaded_pictures/'.$save_image_name.'.jpg');
	
	
	$width = imagesx($image);
	imagecopy($image, $resized_uploaded_picture, 0, 0, 0, 0, 800, 550);
	
		
	//fonts
	$jenna_sue_font = 'fonts/JennaSue.ttf';
	$aiesecer_font = 'fonts/IamanAIESECer.ttf';
	$arial_bold_font = 'fonts/arialbd.ttf';
	$arial_font = 'fonts/arial.ttf';
	$just_cole_font = 'fonts/JustCole.ttf';
	$cinamon_cake_font = 'fonts/cinnamoncake.ttf';
		
		
	//Inserting Rectangle to draw Name, LC and Position
	$rectCol = imagecolorallocatealpha($image, 0, 0, 0, 40); // Create a black colour, slightly transparent
	$textCol = imagecolorallocate($image, 255, 255, 255); // Create a white colour
	imagefilledrectangle($image, 0, 440, $width, 550, $rectCol);
		
	//Inserting "I Am An AIESECer"
	$aiesecer_posY = 515;
	$aiesecer_posX = 400;
	imagettftext($image, 30, 0, $aiesecer_posX, $aiesecer_posY, $textCol, $aiesecer_font, '"I Am An AIESECer!"');
		
	//Inserting Name
	$name_posY = 465;
	$name_posX = 40;
	imagettftext($image, 16, 0, $name_posX, $name_posY, $textCol, $arial_bold_font, $name);
		
	//Inserting Postion
	$position_posY = 490;
	$position_posX = 40;
	imagettftext($image, 14, 0, $position_posX, $position_posY, $textCol, $arial_font, $position);
		
	//Inserting LC Name
	$lc_name_posY = 515;
	$lc_name_posX = 40;
	imagettftext($image, 14, 0, $lc_name_posX, $lc_name_posY, $textCol, $arial_font, $lc_name);
	
	//Inserting Age
	$lc_name_posY = 540;
	$lc_name_posX = 40;
	imagettftext($image, 14, 0, $lc_name_posX, $lc_name_posY, $textCol, $arial_font, $age.' years');
	
	//Starting value of text
	$y = 600;
	
	//Splitting into paragraphs
	$paras = explode("\n", $text);
	
	
	foreach ($paras as $para)
	{
		//Splitting into Lines
		$lines = explode('|', wordwrap($para, 65, '|'));
		foreach ($lines as $line)
		{
			imagettftext($image, 20, 0, 40, $y, $textCol, $cinamon_cake_font, $line);
			// Increment Y so the next line is below the previous line
			$y += 25;
		}
	}

	imagejpeg($image, 'generated_case_studies/'.$save_image_name.'.jpg');

	// Free up some space:
	imagedestroy($image);
	
	header('Location: display-case-study.php?filename='.$save_image_name);
}
else
{
	echo 'Image is in the wrong format, please only use .jpg images';	
}

?>