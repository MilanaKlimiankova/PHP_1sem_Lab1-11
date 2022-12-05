<?php
$info_array = array(
        "Add T." => rand(50, 999),
        "Cole N." => rand(50, 999),
        "Sofie R." => rand(50, 999),
        "Nick P." => rand(50, 999),
        "Clara G." => rand(50, 999),
        "Carol L." => rand(50, 999),
        "Samuel T." => rand(50, 999),
        "Mickael J." => rand(50, 999),
        "John S." => rand(50, 999),
        "Sher P." => rand(50, 999),
        "Sher P." => rand(50, 999));


  function imagebar($im,$x,$y,$w,$h,$dx,$dy,$c1,$c2,$c3) {

    /*if ($dx<0) {
        imagefilledpolygon($im,
            Array(
                $x, $y-$h,
                $x+$w, $y-$h,
                $x+$w+$dx, $y-$h-$dy,
                $x+$dx, $y-$dy-$h
            ), 4, $c1);
   
        imagefilledpolygon($im,
            Array(
                $x+$w, $y-$h,
                $x+$w, $y,
                $x+$w+$dx, $y-$dy,
                $x+$w+$dx, $y-$dy-$h
            ), 4, $c3);
        }*/

    imagefilledrectangle($im, $x, $y-$h, $x+$w, $y, $c2);
    }


  $W=1000;
  $H=500;

  // Псевдо-глубина графика
  $DX=30;
  $DY=20;

  $MB=20; //отступы
  $ML=10;
  $M=5;

  // Ширина одного символа
  $LW=imagefontwidth(2);

  $count=count($info_array);
 
  // Вычисляем максимальное значение
  $max=0;
  foreach ($info_array as $key=>$value) {
        if ($value > $max) $max = $value;
  }

  $max=intval($max+($max/10)); // Увеличим максимальное значение на 10% (для того, чтобы столбик соответствующий максимальному значение не упирался в в границу графика

  $im=imagecreate($W,$H);

  $bg=imagecolorallocate($im,255,255,255);
  $c=imagecolorallocate($im,184,184,184);
  $text=imagecolorallocate($im,136,136,136);
  $bar[0][0]=imagecolorallocate($im,201,113,113);
  $bar[0][1]=imagecolorallocate($im,201,113,113);
  $bar[0][2]=imagecolorallocate($im,201,113,113);

  $county=10; // Количество подписей и горизонтальных линий сетки по оси Y.

  // Подравняем левую границу с учетом ширины подписей по оси Y
  $text_width=strlen($max)*$LW;
  $ML+=$text_width;

  imageline($im, $ML, $M+$DY, $ML, $H-$MB, $c);
  imageline($im, $ML, $H-$MB, $W-$M-$DX, $H-$MB, $c);

  $RW=$W-$ML-$M-$DX; // Пересчитаем размеры графика с учетом подписей и отступов
  $RH=$H-$MB-$M-$DY;

  $X0=$ML+$DX; // Координаты нулевой точки графика
  $Y0=$H-$MB-$DY;

  $step=$RH/$county;


$i=0; //столбцы
  foreach($info_array as $key=> $value){
    imagebar($im, $X0+$i*($RW/$count)+4-1*intval($DX/3),
                  $Y0+1*intval($DY/3),
                  intval($RW/$count)-4,
                  $RH/$max*$value,
                  intval($DX/3)-5,
                  intval($DY/3)-3,
                  $bar[0][0], $bar[0][1], $bar[0][2]);
    $i++;
}

  for ($i=1;$i<=$county;$i++) { //цифры
    $str=intval(($max/$county)*$i);
    imagestring($im,2, $X0-$DX-strlen($str)*$LW-$ML/4-2,
                       $Y0+$DY-$step*$i-imagefontheight(2)/2,
                       $str,$text);
  }


  $prev=100000; 
  $twidth=$LW*10+6;
  $i=$X0+$RW-$DX;

    foreach($info_array as $key => $value){ //подписи
        if ($prev-$twidth>$i) {
        $drawx=$i+1-($RW/$count)/2;

        if ($drawx>$X0-$DX) {
            $str=$key;
            imageline($im,$drawx,$Y0+$DY,$i+1-($RW/$count)/2,$Y0+$DY+5,$text);
            imagestring($im,2, $drawx+1-(strlen($str)*$LW)/2 ,$Y0+$DY+7,$str,$text);
            }
        $prev=$i;
        }
    $i-=$RW/$count;

    }

  header("Content-Type: image/png");

  imagepNG($im);

  imagedestroy($im);



?>

