<html>
<head>
 <meta charset="utf-8">
 <title>Лабораторная работа 4-5</title>
 <link rel="stylesheet" href="style.css">
 <meta charset="utf-8" />
</head>
<body>
 <div class="title">
 <h1>
Лабораторная работа 4-5
 </h1>

 <?php
 echo "Д/з<br><br> Задание 1<br>";
 $φA = 52.48; $λA = 13.05;
 $φB = 52.22; $λB = 21.01;
 # преобразование грудусов в радианы
 $φArad = deg2rad($φA); $λArad = deg2rad($λA);
 $φBrad = deg2rad($φB); $λBrad = deg2rad($λB);
 # вычисление косинусов и синусов широт и разницы долгот
 $cA = cos($φArad);
 $cB = cos($φBrad);
 $sA = sin($φArad);
 $sB = sin($φBrad);
 $delta = $λArad - $λBrad;
 $cdelta =cos($delta);
 $sdelta =sin($delta);
 # вычисление расстояния
 $a = pow($cB*$sdelta,2);
 $a = $a + pow($cA*$sB-$sA*$cB*$cdelta,2);
 $a = sqrt($a);
 $b = $sA*$sB+$cA*$cB*$cdelta;
 $ad = atan2($a, $b);
 $R = 6372.795;
 $s = $ad * $R;
 $s = sprintf ("%01.4f", $s);
 echo "Расстояние между Берлином и Варшавой $s км<br>";
 $s = 2 * $R * sin($ad / 2);
 $s = sprintf ("%01.4f", $s);
 echo "Расстояние между Берлином и Варшавой, если земя плоская, $s км<br><br>";

 echo "Задание 2<br>";
 $a=16; $b=-8; $c=1;
 echo "Уравнение:$a<i>x</i><sup>2</sup>+$b<i>x</i>+$c=0<br/>";

 $D = $b**2-4*$a*$c;
 echo "Дискриминант: $D<br />";

 $x2 = ($D < 0) || ($D == 0) ? "нет корня" : (-$b - sqrt($D)) / 2 / $a;
 //$x2 = ($D > 0) ? (-$b-sqrt($D))/2/$a : $x2;
 //$x1 = ($D > 0) ? (-$b+sqrt($D))/2/$a:"нет корня";
 //$x1 = ($D == 0) ? (-$b+sqrt($D))/2/$a : $x1;
 $x1 = ($D > 0) || ($D == 0) ? (-$b - sqrt($D)) / 2 / $a : "нет корня";
 echo "Корни: x<sub>1</sub>=$x1 x<sub>2</sub>=$x2<br><br>";

 echo "Задание 3<br>";
 $str = '123456789';
 $slen = strlen($str); #определяем длину строки
 echo "Исходная строка $str";
 if( $slen < 6 )
 {
 echo "<br>Количество цифр меньше шести";
 }
 else
 {
 # берем первые три символа строки
 $str1 = substr($str,0,3);
 # берем последние три символа строки
 $str2 = substr($str,-3);
 $sum1 = $str1{0} + $str1{1} + $str1{2};
 $sum2 = $str2{0} + $str2{1} + $str2{2};
 echo "<br>Первые три символов строки \$str -
$str1. Их сумма равна $sum1";
 echo "<br>Последние три символов строки \$str -
$str2. Их сумма равна $sum2";
 if( $sum1==$sum2)
 {
 echo "<br>Да<br>";
 }
 else {
 echo "<br>Нет<br>";
 }
 }
 /*Выполните модификацию скрипта таким образом, чтобы находилась сумма трех цифр начиная со второй, и сумма двух цифр, расположенных начиная с третьей от конца строки.*/
 $str1 = substr($str,1,3);
 $sum1 = $str1{0} + $str1{1} + $str1{2};
 echo "Cумма трех цифр начиная со второй: $sum1<br>";
 $str2 = substr($str,-4, 2);
 $sum2 = $str2{0} + $str2{1};
 echo "Cумма двух цифр, расположенных начиная с третьей от конца строки: $sum2<br><br>";


 echo "Задание 4<br>";
 $str = "Мы строили, строили и наконец построили.";
 $str_md5 = md5($str);
 echo "<br>Исходная строка: $str";
 echo "<br>MD5-хеш этой строки: $str_md5";

 # выделим из строки md5-хеш функции буквы
 # для этого создаем массив с цифрами
 $a_dig = array(1,2,3,4,5,6,7,8,9,0);
 $str_b = str_replace($a_dig,"",$str_md5);
 $slen_b = strlen($str_b);
 //$slen_d = 32 - $slen_b; 
 $slen_d = strlen($str_md5) - $slen_b; 
 echo "<br />Буквы содержащиеся в MD5-хеш функции - $str_b.";
 echo "<br />Количество букв в MD5-хеш функции - $slen_b";
 echo "<br />Количество цифр в MD5-хеш функции - $slen_d<br><br>";




 /*1.Естьстрока $mainstrmain_str= «Many people admire the paintings and sculptures that artists create.». Вывести сообщение «последовательность найдена»,есливэтой строке имеется подстрока символов $mainstrsub_str=«people»и  она  располагается  во  второй  половине строки $mainstrmain_str,  в противном случаевывести сообщение «нет такой последовательности».*/
 $str = 'Many people admire the paintings and sculptures that artists create.';
 $substr = 'people';
 (stripos($str, $substr) > strlen($str)/2) ? ($message = 'последовательность найдена') : ($message = 'нет такой последовательности'); 
 echo "Задание 1 <br> $message <br><br>";

 /*2. Дана строка 'abc abc abc'. Определите позицию первой и последней буквы 'b'. Найдитепозицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.*/
 $str = 'abc abc abc';
 echo "Задание 2 <br>";
 echo "Исходная строка: $str <br>";
 $pos = stripos($str, 'b');
 echo "Позиция первой b: $pos <br>";
 $pos = strripos($str, 'b');
 echo "Позиция последней b: $pos <br>";
 $pos = stripos(substr($str, 3), 'b');
 echo "Позиция первой b, начиная с позиции 3: $pos <br><br>"; 

 /*3. Дано предложение, состоящее из нескольких слов.Написать программу, которая первые два слова предложения переставит в конец, а последние в начало. Переставленные слова должны быть написаны заглавными буквами. Вывести на экран исходное и полученное предложения и их хэш-коды.Zolotaya osenukrasila zemlyu–>ZEMLYUukrasila ZOLOTAYA OSEN.*/
  $str = 'Many people admire artists create';
  $hash = md5($str);
  echo "Задание 3 <br> Исходная строка: $str <br> Её хеш-код: $hash<br>";

  $pos = stripos($str, ' ');
  $first = substr($str, 0, $pos);
  $str = substr($str, $pos+1);

  $pos = stripos($str, ' ');
  $second = substr($str, 0, $pos);
  $str = substr($str, $pos+1);

  $pos = strripos($str, ' ');
  $last = substr($str, $pos);
  $str = substr($str, 0, $pos);

  $pos = strripos($str, ' ');
  $prelast = substr($str, $pos);
  $str = substr($str, 0, $pos);

  $newStr = strtoupper($last).' '.strtoupper($prelast).' '.$str.' '.strtoupper($first).' '.strtoupper($second);

  $hash = md5($newStr);
  echo "Полученная строка: $newStr <br> Её хеш-код: $hash<br><br>";

 /*4. Дана строка 'aaa bbbbb ccc ss aaa'. Найти позицию второго пробела.*/
 $str = 'aaa bbbbb ccc ss aaa';
 echo "Задание 4 <br> Исходная строка: $str <br>";
 $pos = stripos($str, ' ') + 1; //позиция первго пробела, только +1, чтобы начать отсчёт с буквы
 $pos = stripos(substr($str, $pos), ' ') + $pos + 1; 
 echo "Позиция второго пробела: $pos <br><br>"; 

 /*5. Дана строка. Если ее длина больше 10, то оставить в строке только первые 6 символов, иначе дополнить строку символами 'o' до длины 12.*/
 $str = 'aaa bbaabbb ccaac ss aass';
 (strlen($str) > 10) ? ($str = substr($str, 0, 6)) : ($str = str_pad('o', 12));
 echo "Задание 5 <br> $str <br><br>";

 /*6. Дана  строка'aaa bbaabbb ccaac ss aass'. Найти  последнее  вхождение подстроки'aa'.*/
 $str = 'aaa bbaabbb ccaac ss aass';
 echo "Задание 6 <br> Исходная строка: $str <br>";
 $pos = strripos($str, 'aa');
 echo "Последнее  вхождение подстроки 'aa': $pos <br><br>";

 /*7. Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры.*/
 $numbers = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
 $str = '1a2b3c4b5d6e7f8g9h0';
 echo "Задание 7 <br> Исходная строка: $str <br>";
 $str = str_replace($numbers, '', $str);
 echo "Полученная строка: $str <br><br>";

 /*8. Задана строка символов длиной не менее 17 символов. Разделить строку на две части в  пропорции  7к  3.  В  первой  части  строки  подсчитать  сумму ASCII кодов  центрального, предпоследнего и последнегосимвола. Если в первой части строки есть сочетание символов «AL»,заменить следующие за нимдва символа на символы «RT». Во второй части строки все символы  преобразовать  в  символы  верхнего  регистра,  кроме  первого  и  предпоследнего. Вывести  исходную  строку символов  и  полученные  строки,  а  также  сумму  ASCII  кодов первого и последнего символа второй строки в окне браузера.*/

 $str = 'Many people ALadfgfggfgfmire the paintings and sculptures that artists create';
 echo "Задание 8 <br> Исходная строка: $str <br><br>";
 $length = strlen($str);

 $str1 = substr($str, 0, round($length * 0.7));
 echo "Первая подстрока: $str1 <br>";
 $length1 = strlen($str1);
 $mid = (int)round(($length1 - 1) / 2);
 $sum = ord($str1[$mid]) + ord($str1[$length1 - 2])+ ord($str1[$length1 - 1]);
 echo "Сумма кодов центрального, предпоследнего и последнего символа: $sum <br>";

 $substr = 'AL';
 $pos = stripos($str1, $substr);
 if ($pos) {
 	$str1[$pos + strlen($substr)] = 'R';
 	$str1[$pos + strlen($substr) + 1] = 'T';
 }
 echo "Изменённая первая подстрока: $str1 <br><br>";

 $str2 = substr($str, round($length * 0.7));
 echo "Вторая подстрока: $str2 <br>";
 $str2 = lcfirst(strtoupper($str2));
 $str2[strlen($str2) - 2] = strtolower( $str2[strlen($str2) - 2]);
 echo "Изменённая вторая подстрока: $str2 <br>";

 $sum = ord($str2[0]) + ord($str2[strlen($str2) - 1]);
 echo "Сумма кодов первого и последнего символа: $sum <br>";
 ?>
</body>
</html>
