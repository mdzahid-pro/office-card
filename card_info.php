<?php 
	function main_name($txt){
		// (A) OPEN IMAGE 
		$img = imagecreatefromjpeg('../card-id copy.jpg');
		$file_name = 'images/front/'.uniqid().".jpeg";
		
		//(B) WRITE TEXT
		$white = imagecolorallocate($img,255,255,255);
		$font = "C:\Windows\Fonts\arial.ttf";
		
		// THE TEXT SIZE
		$text_size = imagettfbbox(45,0,$font,$txt);
		$width = imagesx($img);
		$text_width = max([$text_size[2], $text_size[4] - min([$text_size[0],$text_size[6]])]);
		
		// CENTERING THE TEXT BLOCK
		$centerX = CEIL(($width - $text_width) / 2);
		$centerX = $centerX < 0 ? 0 : $centerX;
		
		imagettftext($img,45,0,$centerX,630,$white,$font,$txt);
		// (C) OUTPUT IMAGE
		header("Content-Type: image/jpeg");
		imagejpeg($img,$file_name);
		imagedestroy($img);
		
		return $file_name;
	}
	
	//main_category(main_name($img,$name),"Founder And CEO");
	function main_category($img_name,$txt){
		//OPNE IMAGE
		$img = imagecreatefromjpeg($img_name);
		//(B) WRITE TEXT
		$white = imagecolorallocate($img,255,255,255);
		$font = "C:\Windows\Fonts\arial.ttf";
		// THE IMAGE SIZE 
		$width = imagesx($img);
		
		//THE TEXT SIZE 
		$text_size = imagettfbbox(20,0,$font,$txt);
		$text_width = max([$text_size[2],$text_size[4] - min([$text_size[0],$text_size[6]])]);
		
		//CENTERING TEXT
		$centerX = CEIL(($width - $text_width) / 2);
		$centerX = $centerX < 0 ? 0 : $centerX;
		imagettftext($img,20,0,$centerX,700,$white,$font,$txt);
		
		// (C) OUTPUT IMAGE
		header("Content-Type: image/jpeg");
		imagejpeg($img,$img_name);
		imagedestroy($img);
		
		return $img_name;
	}
	
	//crop image
	function make_circle($img_name){
		$images = imagecreatefromstring(file_get_contents($img_name));
		$width = imagesx($images);
		$height = imagesy($images);
		
		$new_width = 220;
		$new_height = 220;
		$image = imagecreatetruecolor($new_width,$new_height);
		
		imagealphablending($image,true);
		imagecopyresampled($image,$images,0,0,0,0,$new_width,$new_height,$width,$height);
		
		//create masking
		$mask = imagecreatetruecolor($new_width,$new_height);
		
		$transparent = imagecolorallocate($mask,255,0,0);
		imagecolortransparent($mask,$transparent);
		
		imagefilledellipse($mask,$new_width / 2,$new_height / 2,$new_width,$new_height,$transparent);
		
		$red = imagecolorallocate($mask,0,0,0);
		imagecopymerge($image,$mask,0,0,0,0,$new_width,$new_height,100);
		imagecolortransparent($image,$red);
		imagefill($image,0,0,$red);
		
		//output save and free memory
		header("Content-Type: image/png");
		imagepng($image,$img_name);
		imagedestroy($image);
		imagedestroy($mask);
		
		return $img_name;
	}
	
	// make_circle("images/my/pic.jpg");
	
	
	// merge_image("images/600ecea7c6ce2.jpg","images/pic.png");
	function merge_image($img_name,$img2){
		list($width,$height) = getimagesize($img2);
		list($width2,$height2) = getimagesize($img_name);
		$img1 = imagecreatefromstring(file_get_contents($img_name));
		$img2 = imagecreatefromstring(file_get_contents($img2));
		
		$centerX = ($width2 - 220) / 2;
		
		
		imagecopymerge($img1,$img2,$centerX,300,0,0,$width,$height,100);
		header("Content-Type: image/png");
		imagepng($img1,$img_name);
		imagedestroy($img1);
	}
	
	
	// create_user_id("images/600ecea7c6ce2.jpeg",$id_no);
	function create_user_id($img_name,$id_no){
		// (A) OPEN IMAGE
		$img = imagecreatefromjpeg($img_name);

		// (B) WRITE TEXT
		$white = imagecolorallocate($img, 255, 255, 255);
		$txt = $id_no;
		$font = "C:\Windows\Fonts\arial.ttf"; 
		imagettftext($img, 20, 0, 190, 760, $white, $font, $txt);

		// (C) OUTPUT IMAGE
		header('Content-type: image/jpeg');
		imagejpeg($img,$img_name);
		imagedestroy($img);

		// OR SAVE TO A FILE
		// THE LAST PARAMETER IS THE QUALITY FROM 0 to 100
		// imagejpeg($img, "test.jpg", 100);
	}
	
	// make_email("images/600ecea7c6ce2.jpeg",'mdzahidulislam247@gmail.com');
	function make_email($img_name,$email){
		// OPEN IMAGE
		$img = imagecreatefromjpeg($img_name);
		
		// WRITE TEXT
		$white = imagecolorallocate($img,255,255,255);
		$font = "C:\Windows\Fonts\arial.ttf";
		imagettftext($img, 18,0,190,805,$white,$font,$email);
		
		// OUTPUT IMAGE
		header("Content-Type: image/jpeg");
		imagejpeg($img,$img_name);
		imagedestroy($img);
	}
	
	// make_number("images/600ecea7c6ce2.jpeg",'01400127177');
	function make_number($img_name,$email){
		// OPEN IMAGE
		$img = imagecreatefromjpeg($img_name);
		
		// WRITE TEXT
		$white = imagecolorallocate($img,255,255,255);
		$font = "C:\Windows\Fonts\arial.ttf";
		imagettftext($img, 18,0,190,845,$white,$font,$email);
		
		// OUTPUT IMAGE
		header("Content-Type: image/jpeg");
		imagejpeg($img,$img_name);
		imagedestroy($img);
	}
	
	
	// make_address("images/600ecea7c6ce2.jpeg",'Tongi Bazar,Tongi,Gazipur');
	function make_address($img_name,$email){
		// OPEN IMAGE
		$img = imagecreatefromjpeg($img_name);
		
		// WRITE TEXT
		$white = imagecolorallocate($img,255,255,255);
		$font = "C:\Windows\Fonts\arial.ttf";
		imagettftext($img, 18,0,190,880,$white,$font,$email);
		
		// OUTPUT IMAGE
		header("Content-Type: image/jpeg");
		imagejpeg($img,$img_name);
		imagedestroy($img);
	} 
	
	//make QRcode 
	function makeqrcode($text){
		// create qrcode 
		// $file_name = 'images/back/'.uniqid().".jpeg";
	
		$file_name = 'images/back/'.uniqid();
		QRcode::png($text,$file_name.'.png','s',5,0);


		$image1 = 'images/card/back-card.jpg';
		$image2 = $file_name.'.png';
		
		list($width,$height) = getimagesize($image1);
		list($width2,$height2) = getimagesize($image2);
		$img1 = imagecreatefromstring(file_get_contents($image1));
		$img2 = imagecreatefromstring(file_get_contents($image2));
			
		$centerX = ($width - $width2) / 2;
			
			
		imagecopymerge($img1,$img2,$centerX,340,0,0,$width2,$height2,100);
		header("Content-Type: image/png");
		imagepng($img1,$image2);
		imagedestroy($img1);
		
		return $image2;
	}
	
	function do_all_work($name,$title,$email,$number,$addr,$img){
		//create name
		$image = main_name($name);
		//employee email
		make_email($image,$email);
		//employee number
		make_number($image,$number);
		//employee Address 
		make_address($image,$addr);
		//employee title
		main_category($image,$title);
		//employee id
		$id = substr(uniqid(),5,8);
		create_user_id($image,$id);
		//employee picture
		//make circle
		$circle = make_circle($img);
		//megre image in card 
		merge_image($image,$circle);
		
		$all_info  = 'Name: '.$name;
		$all_info .= ' Role: '.$title;
		$all_info .= ' Id: '.$id;
		$all_info .= ' Email: '.$email;
		$all_info .= ' Number: '.$number;
		$all_info .= ' Address: '.$addr;
		
		//create qrcode 
		$qrcode = makeqrcode($all_info);
		
		return [$image,$circle,$qrcode];
	}