<?php
header('Content-type: image/png');

$width = 400;
$height = 700;

$image = imageCreate($width, $height);
$bg = imageColorAllocate($image, 255, 255, 255);

$black = imageColorAllocate($image, 0, 0, 0);
$orange = imageColorAllocate($image, 244, 98, 49);
$ginger = imageColorAllocate($image, 187, 60, 27);
$brown = imageColorAllocate($image, 152, 44, 18);
$blue = imageColorAllocate($image, 7, 151, 237);
$sand = imageColorAllocate($image, 245, 162, 84);

$ang_start = 0;
$ang_end = 360;

//tail
$center_x = 100; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 600; //Центр окружности по Y
$rad_1 = 100; //Ширина окружности
$rad_2 = 100; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );
$center_x = 100; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 560; //Центр окружности по Y
$rad_1 = 100; //Ширина окружности
$rad_2 = 100; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start, $ang_end, $bg, IMG_ARC_PIE );
$center_x = 20; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 599; //Центр окружности по Y
$rad_1 = 50; //Ширина окружности
$rad_2 = 50; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2+10, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );
$center_x = 0; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 627; //Центр окружности по Y
$rad_1 = 85; //Ширина окружности
$rad_2 = 70; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2+10, $rad_1, $ang_start, $ang_end, $bg, IMG_ARC_PIE );


//body
$center_x = 280; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 540; //Центр окружности по Y
$rad_1 = 350; //Ширина окружности
$rad_2 = 350; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start, $ang_end, $orange, IMG_ARC_PIE );
$center_x = 170; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 590; //Центр окружности по Y
$rad_1 = 350; //Ширина окружности
$rad_2 = 150; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start, $ang_end, $orange, IMG_ARC_PIE );
imageFilledRectangle($image, 0, 700, 350, 650, $bg);
imageFilledRectangle($image, 250, 700, 400, 365, $bg);
$center_x = 150; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 487; //Центр окружности по Y
$rad_1 = 350; //Ширина окружности
$rad_2 = 350; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start+70, $ang_end-250, $orange, IMG_ARC_PIE );
$center_x = 280; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 580; //Центр окружности по Y
$rad_1 = 200; //Ширина окружности
$rad_2 = 100; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start, $ang_end, $bg, IMG_ARC_PIE );
$center_x = 166; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 455; //Центр окружности по Y
$rad_1 = 200; //Ширина окружности
$rad_2 = 200; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start-50, $ang_end-310, $orange, IMG_ARC_PIE );
$center_x = 150; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 450; //Центр окружности по Y
$rad_1 = 400; //Ширина окружности
$rad_2 = 200; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start-50, $ang_end-360, $orange, IMG_ARC_PIE );
$center_x = 216; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 510; //Центр окружности по Y
$rad_1 = 300; //Ширина окружности
$rad_2 = 100; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start+65, $ang_end-240, $orange, IMG_ARC_PIE );
imageFilledRectangle($image, 200, 500, 250, 560, $orange);
$center_x = 170; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 475; //Центр окружности по Y
$rad_1 = 400; //Ширина окружности
$rad_2 = 200; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start+65, $ang_end-240, $orange, IMG_ARC_PIE );
imageFilledRectangle($image, 200, 500, 250, 560, $orange);
$center_x = 262; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 555; //Центр окружности по Y
$rad_1 = 70; //Ширина окружности
$rad_2 = 70; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $bg, IMG_ARC_PIE );

//head
$center_x = 190; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 200; //Центр окружности по Y
$rad_1 = 150; //Ширина окружности
$rad_2 = 200; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start + 180, $ang_end - 60, $orange, IMG_ARC_PIE );
$center_x = 190; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 210; //Центр окружности по Y
$rad_1 = 330; //Ширина окружности
$rad_2 = 250; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start+40, $ang_end-230, $orange, IMG_ARC_PIE );
$center_x = 190; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 370; //Центр окружности по Y
$rad_1 = 50; //Ширина окружности
$rad_2 = 50; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start, $ang_end, $orange, IMG_ARC_PIE );

$center_x = 170; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 207; //Центр окружности по Y
$rad_1 = 330; //Ширина окружности
$rad_2 = 450; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start+70, $ang_end-260, $orange, IMG_ARC_PIE );
$center_x = 165; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 210; //Центр окружности по Y
$rad_1 = 330; //Ширина окружности
$rad_2 = 250; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start+40, $ang_end-230, $orange, IMG_ARC_PIE );
$center_x = 155; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 210; //Центр окружности по Y
$rad_1 = 350; //Ширина окружности
$rad_2 = 200; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start+130, $ang_end-175, $orange, IMG_ARC_PIE );
$center_x = 150; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 384; //Центр окружности по Y
$rad_1 = 27; //Ширина окружности
$rad_2 = 50; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start-120, $ang_end+100, $bg, IMG_ARC_PIE );
imageFilledRectangle($image, 100, 180, 180, 280, $orange);
imageFilledRectangle($image, 190, 270, 280, 470, $orange);

//ear left
$center_x = 60; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 203; //Центр окружности по Y
$rad_1 = 200; //Ширина окружности
$rad_2 = 300; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start-100, $ang_end-50, $brown, IMG_ARC_PIE );
$center_x = 100; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 180; //Центр окружности по Y
$rad_1 = 280; //Ширина окружности
$rad_2 = 130; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start-235, $ang_end-150, $sand, IMG_ARC_PIE );
$center_x = 55; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 293; //Центр окружности по Y
$rad_1 = 382; //Ширина окружности
$rad_2 = 190; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start+257, $ang_end-47, $sand, IMG_ARC_PIE );
$center_x = 260; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 240; //Центр окружности по Y
$rad_1 = 230; //Ширина окружности
$rad_2 = 180; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start, $ang_end, $orange, IMG_ARC_PIE );

//ear right
$center_x = 340; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 190; //Центр окружности по Y
$rad_1 = 20; //Ширина окружности
$rad_2 = 33; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $ginger, IMG_ARC_PIE );
$center_x = 180; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 170; //Центр окружности по Y
$rad_1 = 230; //Ширина окружности
$rad_2 = 355; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start-80, $ang_end+10, $brown, IMG_ARC_PIE );
$center_x = 340; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 185; //Центр окружности по Y
$rad_1 = 20; //Ширина окружности
$rad_2 = 33; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );
$center_x = 180; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 170; //Центр окружности по Y
$rad_1 = 230; //Ширина окружности
$rad_2 = 300; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start-80, $ang_end+10, $sand, IMG_ARC_PIE );
$center_x = 175; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 263; //Центр окружности по Y
$rad_1 = 230; //Ширина окружности
$rad_2 = 400; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start-90, $ang_end-40, $orange, IMG_ARC_PIE );
$center_x = 220; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 280; //Центр окружности по Y
$rad_1 = 300; //Ширина окружности
$rad_2 = 300; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2 + 30, $rad_1, $ang_start+170, $ang_end-110, $orange, IMG_ARC_PIE );


//dark spots
$center_x = 235; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 250; //Центр окружности по Y
$rad_1 = 130; //Ширина окружности
$rad_2 = 160; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $ginger, IMG_ARC_PIE );
$center_x = 210; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 251; //Центр окружности по Y
$rad_1 = 150; //Ширина окружности
$rad_2 = 200; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+150, $ang_end, $ginger, IMG_ARC_PIE );
$center_x = 215; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 275; //Центр окружности по Y
$rad_1 = 190; //Ширина окружности
$rad_2 = 260; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+170, $ang_end-70, $ginger, IMG_ARC_PIE );
$center_x = 140; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 286; //Центр окружности по Y
$rad_1 = 130; //Ширина окружности
$rad_2 = 130; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $ginger, IMG_ARC_PIE );
$center_x = 230; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 260; //Центр окружности по Y
$rad_1 = 130; //Ширина окружности
$rad_2 = 160; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );
$center_x = 150; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 300; //Центр окружности по Y
$rad_1 = 100; //Ширина окружности
$rad_2 = 130; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );
$center_x = 210; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 271; //Центр окружности по Y
$rad_1 = 150; //Ширина окружности
$rad_2 = 200; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+150, $ang_end, $brown, IMG_ARC_PIE );
$center_x = 214; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 290; //Центр окружности по Y
$rad_1 = 190; //Ширина окружности
$rad_2 = 260; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+170, $ang_end-60, $brown, IMG_ARC_PIE );
$center_x = 215; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 320; //Центр окружности по Y
$rad_1 = 50; //Ширина окружности
$rad_2 = 70; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );
$center_x = 170; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 330; //Центр окружности по Y
$rad_1 = 50; //Ширина окружности
$rad_2 = 50; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );


$center_x = 170; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 600; //Центр окружности по Y
$rad_1 = 90; //Ширина окружности
$rad_2 = 50; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $ginger, IMG_ARC_PIE );
$center_x = 215; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 586; //Центр окружности по Y
$rad_1 = 80; //Ширина окружности
$rad_2 = 30; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $ginger, IMG_ARC_PIE );
$center_x = 175; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 600; //Центр окружности по Y
$rad_1 = 70; //Ширина окружности
$rad_2 = 30; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );
$center_x = 215; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 590; //Центр окружности по Y
$rad_1 = 65; //Ширина окружности
$rad_2 = 20; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );

//eyes
$center_x = 240; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 270; //Центр окружности по Y
$rad_1 = 70; //Ширина окружности
$rad_2 = 65; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $blue, IMG_ARC_PIE );
$center_x = 260; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 270; //Центр окружности по Y
$rad_1 = 40; //Ширина окружности
$rad_2 = 25; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $black, IMG_ARC_PIE );
$center_x = 250; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 260; //Центр окружности по Y
$rad_1 = 10; //Ширина окружности
$rad_2 = 15; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $bg, IMG_ARC_PIE );
$center_x = 250; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 295; //Центр окружности по Y
$rad_1 = 45; //Ширина окружности
$rad_2 = 80; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );
$center_x = 130; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 300; //Центр окружности по Y
$rad_1 = 70; //Ширина окружности
$rad_2 = 65; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $blue, IMG_ARC_PIE );
$center_x = 150; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 299; //Центр окружности по Y
$rad_1 = 40; //Ширина окружности
$rad_2 = 25; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $black, IMG_ARC_PIE );
$center_x = 140; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 285; //Центр окружности по Y
$rad_1 = 10; //Ширина окружности
$rad_2 = 15; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $bg, IMG_ARC_PIE );
$center_x = 130; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 321; //Центр окружности по Y
$rad_1 = 45; //Ширина окружности
$rad_2 = 80; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $brown, IMG_ARC_PIE );

//lines
$center_x = 185; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 320; //Центр окружности по Y
$rad_1 = 17; //Ширина окружности
$rad_2 = 25; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start, $ang_end, $black, IMG_ARC_PIE );
$center_x = 320; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 360; //Центр окружности по Y
$rad_1 = 170; //Ширина окружности
$rad_2 = 250; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+220, $ang_end-110, $black, IMG_ARC_NOFILL );
$center_x = 300; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 380; //Центр окружности по Y
$rad_1 = 170; //Ширина окружности
$rad_2 = 250; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+240, $ang_end+270, $black, IMG_ARC_NOFILL );
$center_x = 145; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 400; //Центр окружности по Y
$rad_1 = 170; //Ширина окружности
$rad_2 = 250; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+250, $ang_end-85, $black, IMG_ARC_NOFILL );
$center_x = 205; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 400; //Центр окружности по Y
$rad_1 = 170; //Ширина окружности
$rad_2 = 250; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+230, $ang_end-120, $black, IMG_ARC_NOFILL );
$center_x = 215; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 320; //Центр окружности по Y
$rad_1 = 50; //Ширина окружности
$rad_2 = 70; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+130, $ang_end-160, $black, IMG_ARC_NOFILL  );
$center_x = 162; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 620; //Центр окружности по Y
$rad_1 = 300; //Ширина окружности
$rad_2 = 70; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+164, $ang_end-130, $brown, IMG_ARC_NOFILL  );
$center_x = 264; //Определяем центр по X. Эта переменная не обязательно должна находиться по центру изображения
$center_y = 570; //Центр окружности по Y
$rad_1 = 300; //Ширина окружности
$rad_2 = 130; //Высота окружности
ImageFilledArc( $image, $center_x, $center_y, $rad_2, $rad_1, $ang_start+143, $ang_end-170, $brown, IMG_ARC_NOFILL  );
imageJpeg($image);
imageDestroy($image);

?>

