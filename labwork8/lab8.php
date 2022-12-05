<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

 require ('../project/connect/db.php');

?>

<html>
<head>
 <meta charset="utf-8">
 <title>Лабораторная работа 8</title>
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
Лабораторная работа 8
 </h1>
 <a class = 'back' style = 'padding: 5px 7px 5px 7px;' href = 'http://localhost/labworks/project/index.php'>Назад</a><br><br>
 <?php
/*1. Напишите функцию, которая принимает параметром число от 1 до 7 и флаг языка (rus / eng),
а возвращает день недели на русском / английском языках.*/

function getDay($number, $lan = 'rus')
{
	$message = '';

	$days_rus = array('понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье');
	$days_eng = array('monday', 'tuesday', 'wednesday', 'thirsday', 'friday', 'saturday', 'sunday');
    
    if ($number < 8 && $number > 0){
    	switch ($lan) {
    		case 'rus':
        		$message = $days_rus[$number-1];
        		break;
    		case 'eng':
        		$message = $days_eng[$number-1];;
        		break;
    		default:
       			$message = 'Такого языка не предусмотрено';
        		break;
	}
    } else $message = 'Дня недели с таким номером не существует';

    return $message;
}

echo 'Задание 1<br>';
echo getDay(1).'<br>';
echo getDay(5, 'eng').'<br>';
echo getDay(5, 'ruuu').'<br>';
echo getDay(0, 'rus').'<br><br>';

/*2. Напишите функцию, которая принимает число, например, 31, и проверяет, что это число не
делится ни на одно другое число кроме себя самого и единицы. То есть в данном случае нужно
проверить, что число 31 не делится на все числа от 2 до 30. Если число не делится – выведите «false»,
а если делится – выведите «true».*/

function checkIfPrime($number){
	$flag = 'false';

	for ($i = 2; $i < $number; $i++){
		if ($number % $i == 0) {
			$flag == 'true';
			break;
		}
	}

	return $flag;
}

echo 'Задание 2<br>';
echo checkIfPrime(31).'<br><br>';

/*3. Напишите пользовательскую функцию, которая первое число увеличивает на пять, а второе
число уменьшает в два раза. Сделайте так, чтобы функция имела возможность изменять значение
аргументов глобально.*/
$a = 5;
$b = 16;
function modifyNumbers(){
	global $a, $b;

	$a += 5;
	$b = $b / 2;
}

modifyNumbers();

echo 'Задание 3<br>';
echo "$a<br>$b<br><br>";

/*4. Напишите пользовательскую функцию, которая принимает два параметра – число и
разделитель, например, (9, -) и с помощью цикла for формирует строку вида -1-2-3-4-5-6-7-8-9-.*/

function getGluedString($number, $glue){
	$str = $glue;

	for ($i = 1; $i < $number + 1; $i++){
		$str = $str.$i.$glue;
	}

	return $str;
}

echo 'Задание 4<br>';
echo getGluedString(9, '-').'<br><br>';

/*5. Напишите функцию, которая определяет, есть в массиве элемент с заданным текстом или
нет. Функция первым параметром должна принимать текст элемента, а вторым – массив, в котором
делается поиск. Функция должна возвращать true или false.*/

function findText($text, $array){
	$result = false;

	foreach ($array as $key => $value) {
		if (stripos($value, $text)){
			$result = true;
			break;
		}
	}

	return $result;
}

$arr = array('monday', 'tuesday', 'wednesday', 'thirsday', 'friday', 'saturday', 'sunday');
$result =  findText('!!!', $arr);

echo 'Задание 5<br>';
var_dump($result);
?>
</div>
</body>

<footer>
<?php
require ('../project/blocks/footer.php');
?>
</footer>
</html>

