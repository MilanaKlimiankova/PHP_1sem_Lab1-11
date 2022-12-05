<html>
<head>
 <meta charset="utf-8">
 <title>Лабораторная работа 6</title>
 <link rel="stylesheet" href="style.css">
 <meta charset="utf-8" />
</head>
<body>
 <div class="title">
 <h1>
Лабораторная работа 6
 </h1>
<?php
/*1. Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива навторой, а третий элемент на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной*/
echo "Задание 1<br>";

$arr01 = array(2, 5, 3, 9);
$result01 = $arr01[0]*$arr01[1]+$arr01[2]*$arr01[3];

echo "$result01 <br><br>";

/*2. Дан  массив  X(N).  Получить  новый  массив  Y(N)  такой,  что  в  нем  сначала  идут положительные числа, затем нулевые, и затем отрицательные из X. */
echo "Задание 2<br>";

$X = array(-1, 2, 0, 4, -3, -2, 0);
$pos = array();
$zero = array();
$neg = array();
foreach ($X as $value) {
	if ($value < 0) array_push($neg, $value);
	if ($value == 0) array_push($zero, $value);
	if ($value > 0) array_push($pos, $value);
}
asort($pos);
$Y = array_merge($pos, $zero, $neg);

print_r($Y);
echo "<br><br>";

/*3.Сформировать в программе массив из целых чисел от 2 до N. Подсчитать сумму квадратовчетных и сумму квадратов нечетных чисел.*/
echo "Задание 3<br>";

$n = 37;
$arr = range(2, $n);
$even_sum = 0;
$odd_sum = 0;
foreach ($arr as $value)
($value % 2 == 0) ? $even_sum += $value ** 2 : $odd_sum += $value ** 2;

echo "Сумма квадратов чётных: $even_sum <br> Сумма квадратов нечётных: $odd_sum <br><br>";

/*4. Массив а0,...,а23содержит данные измерения температуры воздуха в течение дня. Найти максимальную, минимальную и среднюю температуру воздуха.*/
//№4
echo "Задание 4<br>";

$arr = range(0, 23);
$max = max($arr);
$min = min($arr);
$avg = array_sum($arr) / count($arr);

echo "Минимальная: $min<br> Максимальная: $max <br> Средняя: $avg <br><br>";

/*5. Есть массив чисел –[1, 3, 2]. Отсортируйте их от меньшего к большему и преобразуйте в строку,  в  которой  значения  элементов  массива  разделяются  двоеточиями.  В  результате  должна получиться строка “1:2:3”.*/
echo "Задание 5<br>";

$arr = [1, 3, 2];
asort($arr);
$str = implode(":", $arr);

echo "$str<br><br>";

/*6. Дан массив с элементами 'AA', 'BB', 'CC', 'DD', 'EE'. Cделайте из него массив 'aa', 'bb', 'cc', 'dd', 'ee'.*/
//№6
echo "Задание 6<br>";

$arr1 = array("AA", "BB", "CC", "DD", "EE");
$arr2 = array("aa", "bb", "cc", "dd", "ee");
$arr1 = str_replace($arr1, $arr2, $arr1);

foreach ($arr1 as $value) echo "$value ";
echo "<br><br>";

/*7. Дан  массив  [17, 23, 56,  6, 10].  Найдите  произведение  элементов  данного  массива(используя функцию).*/
echo "Задание 7<br>";

$arr = [17, 23, 56, 6, 10];
$result = array_product($arr);

echo "$result<br><br>";

/*8. Не используя цикл, создайте массив['a'=>1, 'b'=2... 'z'=>26].*/
echo "Задание 8<br>";

$arr1 = range("a", "z");
$arr2 = range(1, 26);
$arr = array_combine($arr1, $arr2);

print_r($arr);
echo "<br><br>";

/*9. Не используя цикл, создайте массив вида[[1, 2, 3], [4, 5, 6], [7, 8, 9]].*/
echo "Задание 9<br>";
$arr = array(array(1, 2, 3), array(4, 5, 6), array(7,8,9));
foreach ($arr as $value1) {
	foreach($value1 as $value2) echo "$value2 ";
echo '<br>';
}
echo "<br>";

/*10. Создать строку 123456789, преобразовать ее в массив, отсортировать по убыванию и преобразовать назад в строку.*/
echo "Задание 10<br>";

$str = "123456789";
$arr = str_split($str);
arsort($arr);
$str = implode('', $arr);

echo "$str <br><br>";

/*11. Дан массив [17, 23, 56, 6,17, 78, 6, 45, 2310]. Удалить повторяющиеся элементы. Заменить первый элемент на «!», а третий на «!!!».*/
echo "Задание 11<br>";

$arr = [17, 23, 56, 6, 17, 78, 6, 45, 23, 10];
$arr = array_unique($arr);
array_splice($arr, 0, 1, "!");
array_splice($arr, 2, 1, "!!!");

print_r($arr);
echo "<br><br>";

/*12. Дано  число 781. Посчитать  сумму  цифр  в  числе,  т.е. 7+8+1=16.(используя  функции работы с массивами).*/
echo "Задание 12<br>";

$number = 781;
$arr = str_split($number);

echo array_sum($arr); 
echo "<br><br>";

/*13.Данмассив[«banan», «apple», «avocado», «kiwi»,«banan»]и[«banan», «mango», «lemon», «kiwi»,«banan»]. Найти значения, имеющиеся только в первом массиве и не имеющиеся во втором, а также количество повторений «banan»в первом массиве.*/
echo "Задание 13<br>";
$arr1 = array('banan', 'apple', 'avocado','kiwi', 'banan');
$arr2 = array('banan','mango', 'lemon','kiwi','banan');
$arr = array_diff($arr1, $arr2);
echo "Значения, имеющиеся только в первом массиве: <br>";
foreach ($arr as $value) echo "$value ";
$arr = array_count_values($arr1);
echo "<br>Количество повторений «banan»в первом массиве: ";
echo $arr['banan'];
echo "<br><br>";
/*14.Данопятьпеременных$a=«eins»,$b=«zwei», $c=«drei», $d=«vier», $e=«funf»имассив[«один», «два», «три», «четыре», «пять»],необходимо  сделать  массив [«eins»=>«один», «zwei»=>«два», «drei»=>«три», «vier»=>«четыре», «funf»=>«пять»]*/
echo "Задание 14<br>";
$a = 'eins';
$b = 'zwei';
$c = 'drei';
$d = 'vier';
$e = 'funf';
$arr1 = array("один", "два", "три", "четыре", "пять");
$arr2 = array($a, $b, $c, $d, $e);
$arr = array_combine($arr2, $arr1);

print_r($arr);
echo "<br><br>";

/*15. Создать квадратную матрицу из 9 элементов, заполненную случайными вещественными числами (диапазон выбрать самостоятельно). Найти:–разность между суммами первой и последней строки;–первой строки и последнего столбца;–максимальный элемент в последней строке;–отсортировать по убыванию элементы в последней строке.*/
//echo "Задание 15<br>";

$arr = array(
array(mt_rand(10, 99), mt_rand(10, 99), mt_rand(10, 99)),
array(mt_rand(10, 99), mt_rand(10, 99), mt_rand(10, 99)),
array(mt_rand(10, 99), mt_rand(10, 99), mt_rand(10, 99))
);
echo "Задание 15<br>";
foreach ($arr as $elem)
{
foreach ($elem as $value) echo  "$value ";
echo "<br>";
}
echo "<br>";

$result = array_sum($arr[0]) - array_sum($arr[2]);
echo "Разность между суммами первой и последней строки: $result<br>";

$result = array_sum($arr[0]) - array_sum(array_column($arr, 2));
echo "Разность сумм первой строки и последнего столбца: $result<br>";

$result = max($arr[2]);
echo "Максимальный элемент в последней строке: $result<br>";

echo "Сортировка по убыванию последней строки: <br>";
sort($arr[2]);
foreach ($arr as $elem)
{
foreach ($elem as $value) echo  "$value ";
echo "<br>";
}
echo "<br>";

$array = range(0, 9);
shuffle($array);
$max = max($array);
$count = count($array);
$str = implode(" ", $array);
$array = explode(" ", $str);
$arr2 = range('a', 'z');
$arr1 = range(1, count($arr2));
$arr = array_combine($arr2, $arr1);
$arr = array_chunk($arr, 3);
$arr = array(array(1, 2, 3),array(1, 2, 3),array(1, 2, 3));
$result = array_sum(array_column($arr, 2));
?>
</body>
</html>
