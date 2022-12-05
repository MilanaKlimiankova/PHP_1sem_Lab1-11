<?php
	session_start();
 	ob_start();
	// создаем случайное число и сохраняем в сессии
    $random1 = rand(1, 9);
 	$random2 = rand(1, 9);
	$random = $random1*$random2;
	$_SESSION['random'] = $random;

	//создаем изображение
	$im = imagecreatetruecolor(150, 50);
 
	//цвета:
	$bg = imagecolorallocatealpha($im, 0, 0, 0, 127); //прозрачный
	$white = imagecolorallocate($im, 255, 255, 255);
	$grey = imagecolorallocate($im, 128, 128, 128);
	$red = imagecolorallocate($im, 148, 90, 90);
	$black = imagecolorallocate($im, 0, 0, 0);

	//путь к шрифту:
	$font = dirName(__FILE__).'/fonts/font.otf';

	imagesavealpha($im, true);
	imagefill($im, 0, 0, $bg);

	$img_arr = array("background/back1.png","background/back2.png","background/back3.png", "background/back4.png","background/back5.png","background/back6.png");

	$img_fn = $img_arr[rand(0, sizeof($img_arr)-1)];

	$im = imagecreatefrompng ($img_fn);

	$linenum = rand(3, 7);
	for ($i=0; $i<$linenum; $i++){

		$color = imagecolorallocate($im, rand(0, 255), rand(0, 200), rand(0, 255));

		imageline($im, rand(0, 10), rand(1, 60), rand(160, 200), rand(1, 60), $color);
	}

	//рисуем текст:
	imagettftext($im, 35, 0, 22, 44, $red, $font, $random1.'x'.$random2);
	imagettftext($im, 35, 0, 15, 46, $white, $font, $random1.'x'.$random2);

	//отсылаем изображение браузеру
	header ("Content-type: image/gif");
	imagegif($im);
	imagedestroy($im);
?>