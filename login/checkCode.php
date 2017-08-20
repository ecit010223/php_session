<?php
	session_start();
	$check_code="";
	for($i=0;$i<4;$i++){
		$check_code.=dechex(rand(1, 15));	//dechex()函数将一个十进制的数转换成十六进制
	}
	//将随机验证码保存到session中
	$_SESSION['my_check_code']=$check_code;
	//创建图片（图片的大小为110*30），并把随机数画上去
	$img=imagecreatetruecolor(110, 30);
	//背景默认是黑色
	//可以自定义背景颜色
	$bgcolor=imagecolorallocate($img, 0, 0, 0);
	imagefill($img,0, 0, $bgcolor);
	//创建新的颜色
	$white=imagecolorallocate($img, 255, 255, 255);
	$blue=imagecolorallocate($img, 0, 0, 255);
	$red=imagecolorallocate($img, 255, 0, 0);
	$green=imagecolorallocate($img, 255, 0, 0);
	//画出干扰线段
	for($i=0;$i<20;$i++){
		imageline($img, rand(0, 110), rand(0, 30), rand(0,110), rand(0, 30), imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255)));

	}
	imagestring($img, rand(1, 5), rand(2, 80), rand(2, 10), $check_code, $white);
	header("content-type:image/png");
	imagepng($img);
?>