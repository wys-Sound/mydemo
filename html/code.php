<?php
	function gernerateVerify($type=2,$length=4,$width=100,$height=30){
	$image=imagecreatetruecolor($width,$height);
	$white=imagecolorallocate($image,255,255,255);
	imagefilledrectangle($image,0,0,$width,$height,$white);
	function randColor($image){
		return imagecolorallocate($image,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	}
	switch($type){
		case 0:
			$str=join('',array_rand(range(0,9),$length));
		break;
		case 1:
			$str=join('',array_rand(array_flip(array_merge(range('a','z'),range('A','Z'))),$length));
		break;
		case 2:
			$str=join('',array_rand(array_flip(array_merge(range('a','z'),range('A','Z'),range(0,9))),$length));
		break;
	}
	for($i=0;$i<$length;$i++){
		imagettftext($image,15,mt_rand(-30,30),$i*($width/$length),mt_rand(15,30),randColor($image),'./zhapo.ttf',$str[$i]);
	}
	for($i=1;$i<=100;$i++){
		imagesetpixel($image,mt_rand(0,$width),mt_rand(0,$height),randColor($image));
	}
	header('Content-Type:image/png');
	imagepng($image);
	imagedestroy($image);
	return $str;
	}
?>