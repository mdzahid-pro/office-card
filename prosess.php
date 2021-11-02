<?php
	session_start();
	require "../QRcode/qrlib.php";
	require 'card_info.php';
	$file_name = 'images/my/'.uniqid().".jpeg";
	move_uploaded_file($_FILES['emp-image']['tmp_name'],$file_name);
	$_SESSION["image_info"] = do_all_work($_POST['emp-name'],$_POST['emp-title'],$_POST['emp-email'],$_POST['emp-number'],$_POST['emp-addr'],$file_name);
	
	header("Location: index.php");
	
	// $text = "MD Zahidul Islam";
	
	// $file_name = 'images/back/'.uniqid();
	
	// QRcode::png($text,$file_name.'.png','s',10,0);
	

	// $image1 = 'images/card/back-card.jpg';
	// $image2 = $file_name.'.png';
	
	// list($width,$height) = getimagesize($image1);
	// list($width2,$height2) = getimagesize($image2);
	// $img1 = imagecreatefromstring(file_get_contents($image1));
	// $img2 = imagecreatefromstring(file_get_contents($image2));
		
	// $centerX = ($width - $width2) / 2;
		
		
	// imagecopymerge($img1,$img2,$centerX,340,0,0,$width2,$height2,100);
	// header("Content-Type: image/png");
	// imagepng($img1,$image2);
	// imagedestroy($img1);
	
	
	
		
	// list($width,$height) = getimagesize($image2);
	// $image1 = imagecreatefromstring(file_get_contents($image1));
	// $image2 = imagecreatefromstring(file_get_contents($image2));
		
	// imagecopymerge($image1,$image2,220,340,0,0,$width,$height,100);
	// header("Content-Type: image/png");
	// imagepng($image1,$file_name.'.png');
	// unlink($file_name.'.png');
	// imagedestroy(image1);
		
	// return $file_name;
	
	// header("Location: index.php");