<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

 require ('../project/connect/db.php');
?>

<html>
<head>
 <meta charset="utf-8">
 <title>Лабораторная работа 7</title>
 <link rel="stylesheet" href="style.css">
 <meta charset="utf-8" />
</head>
<header>
	<?php
 require ('../project/blocks/header.php');
 require ('../project/modules/auth/auth_result.php');
	?>
</header>
<body>

 <div class="title">
 <h1>
Лабораторная работа 7
 </h1>
 <a class = 'back' style = 'padding: 5px 7px 5px 7px;' href = 'http://localhost/labworks/project/index.php'>Назад</a><br><br>
 <?php
 /*1. Если в заданной матрице A(N,N) есть хотя бы один элемент, больший ста, то элементы обеих
диагоналей заменить нулями.*/
echo 'Задание 1 <br><br>';

$arr = array(
array(1, 200, 1),
array(2, 1, 3),
array(110, 3, 1)
);

/*$arr = array(
array(2, 1),
array(1, 2),
);*/

echo 'Исходная матрица: <br>';
foreach ($arr as $value) {
	foreach ($value as $elem)
	echo $elem, ' ';
	echo '<br>';
}
echo '<br>';

$flag = false;
foreach ($arr as $value) {
	foreach ($value as $elem){
		if ($elem > 100){
			$flag = true;
			break;
		}
	}
}

if ($flag){
	for ($i = 0, $j = count($arr)-1; $i < count($arr); $i++, $j--) {
		$arr[$i][$i] = 0;
		$arr[$i][$j] = 0;	
	}
echo 'Матрица после преобразования: <br>';
foreach ($arr as $value) {
	foreach ($value as $elem)
	echo $elem, ' ';
	echo '<br>';
}
echo '<br>';
}else echo 'Нет элементов больше 100<br><br>';

/*2. В заданном массиве A(N,M) переставить строки так, чтобы суммы их элементов возрастали*/
echo 'Задание 2 <br><br>';

$arr = array(
array(2, 3, 1),
array(3, 1, 8),
array(1, 2, 1),
array(2, 3, 5)
);

echo 'Исходная матрица: <br>';
foreach ($arr as $value) {
	foreach ($value as $elem)
	echo $elem, ' ';
	echo '<br>';
}
echo '<br>';

$sum = array();
$s = 0;
$temp; 

for($i=0; $i<4; $i++){
	for($j=0; $j<3; $j++){
		$s += $arr[$i][$j];		
	}	
	array_push($sum, $s);
	$s = 0;
}

for($i = 0; $i < 4; $i++){
	$min = $i;
	for($j=$i+1; $j<4; $j++){
		if($sum[$j] < $sum[$min]){
			$min = $j;
		}
	}

	if ($min != $i){
		$temp = $sum[$min];
		$sum[$min] = $sum[$i];
		$sum[$i] = $temp;

		$temp = $arr[$min];
		$arr[$min] = $arr[$i];
		$arr[$i] = $temp;
	}	
}

echo 'Полученная матрица: <br>';
foreach ($arr as $value) {
	foreach ($value as $elem)
	echo $elem, ' ';
	echo '<br>';
}
echo '<br>';
/*3. Найти сумму цифр заданного натурального числа.*/
echo 'Задание 3 <br><br>';
//$N = 5;
//$N = 32767;
$N = 2141010101;
$arr = str_split($N);
$sum = 0;

for($i=0; $i<count($arr); $i++){
	$sum += $arr[$i];		
}

echo "Сумма цифр числа $N равна $sum<br><br>";

/*4. Дана целочисленная матрица А(N,N). Найти номер первой из её строк, которые начинаются с К
положительных чисел подряд.*/
echo 'Задание 4 <br><br>';

$arr = array(
array(1, -2, 1),
array(2, 1, -1),
array(1, 3, 1)
);

$n = 3;
$k = 2; //число полож. чисел
$s = 0; //искомая строка

echo 'Исходная матрица: <br>';
foreach ($arr as $value) {
	foreach ($value as $elem)
	echo $elem, ' ';
	echo '<br>';
}
echo '<br>';

for ($i = 0; $i < $n + 1; $i++){
	$count = 0;
	for ($j = 0; $j < $k; $j++){
		if ($arr[$i][$j] > 0 ) $count++;
	}
	if ($count == $k){
		$s = $i + 1;
		echo "Номер первой строки, которая начин. с $k
		положительных чисел подряд: $s<br><br>";
		break;
	}
	
}
if (!$s) echo "Такой строки нет<br><br>";

/*5. Вычислить при заданном натуральном n и a: */
echo 'Задание 5 <br><br>';
$a = 2;
$n = 5;
$result = 0;

for ($i = $n + 1; $i >= 2; $i--){
	$result = pow(($a + $result), 1/$i);
}
echo "Результат: $result<br><br>";

/*6. Вычислите значения (n и х задайте самостоятельно):
*/
echo 'Задание 6 <br><br>';
$n = 13;
$x = 2;

$a = 0;
$b = 0;
$c = 0;

$i = 1;

while ($i <= $n){
	$a += pow(sin(deg2rad($x)),$i);
	$b += sin(deg2rad(pow($x, $i)));
	$c += pow(sin(deg2rad(pow($x, $k))),$i);
	$i++;
}
echo "Результаты: <br>a) $a <br>б) $b <br>c) $c<br><br>";


/*7. В заданной матрице A(N, M) поменять местами строки с номерами P и Q
(1 <= P <= N, 1 <= Q <= N).*/
echo 'Задание 7 <br><br>';

$arr = array(
array(1, 2, 1),
array(2, 2, 2),
array(3, 1, 3)
);
$P = 1;
$Q = 3;

echo 'Исходная матрица: <br>';
foreach ($arr as $value) {
	foreach ($value as $elem)
	echo $elem, ' ';
	echo '<br>';
}

for ($i = 0; $i < 3; $i++){
	$temp = $arr[$P - 1][$i];
	$arr[$P - 1][$i] = $arr[$Q - 1][$i];
	$arr[$Q - 1][$i] = $temp;
}

echo 'Конечная матрица: <br>';
foreach ($arr as $value) {
	foreach ($value as $elem)
	echo $elem, ' ';
	echo '<br>';
}
echo '<br>';

/*8 Даны три целочисленных массива A(N), B(M) и C(L). Найти хотя бы одно число, встречающееся во
всех трех массивах. Если таких чисел нет, вывести соответствующее сообщение.*/
echo 'Задание 8 <br><br>';
$A = array(3, 2, 5);
$B = array(1, 5);
$C = array(1, 2, 5, 1);

$elem = array();

for($i = 0; $i < count($A); $i++){
	for($j=0; $j<count($B); $j++){
		for($k=0; $k<count($C); $k++){
		if ($A[$i]==$B[$j] && $B[$j]==$C[$k]) array_push($elem, $A[$i]);
	}	
	}	
}

if (count($elem)){
	echo "Повторяющиеся числа: "; 
	foreach ($elem as $key => $value) {
		echo $value, ' ';
	}
} else echo "Таких чисел нет";
echo '<br><br>';

/*9. В заданной целочисленной матрице A(N, M) найти количество строк, содержащих нули.*/
echo 'Задание 9 <br><br>';

$arr = array(
array(2, 3, 1),
array(3, 0, 0),
array(1, 2, 0),
array(2, 3, 5)
);

$number = 0;

echo 'Исходная матрица: <br>';
foreach ($arr as $value) {
	foreach ($value as $elem)
	echo $elem, ' ';
	echo '<br>';
}

foreach ($arr as $value) {
	foreach ($value as $elem)
	{
		if($elem == 0) {
			$number++;
			break;
		}
	}
}

if ($number){
	echo "Кол-во строк с нулями: $number<br><br>";
} else echo "Строк с нулями нет<br><br>";

/*10. Найти любое трёхзначное число, кратное заданному Р и не равное ему.*/
echo 'Задание 10 <br><br>';
$P = 100;
$i = 100;
$rezult = 0;

while ($i < 1000){
	if ($i % $P == 0 && $i != $P){
		$result = $i;
		break;
	}
	$i++;
}
if ($result) {
	echo "Искомое число: $result<br><br>";
} else echo "Нет такого числа<br><br>";
 ?>
</div>
</body>

<footer>

<?php
require ('../project/blocks/footer.php');
?>
</footer>

</html>
