<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

?>

<html>
<head>
 <meta charset="utf-8">
 <title>Лабораторная работа 9</title>
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
Лабораторная работа 9
 </h1>
 <a class = 'back' style = 'padding: 5px 7px 5px 7px;' href = 'http://localhost/labworks/project/index.php'>Назад</a><br><br>
 <?php
/*1. Дан текс: Food  isnecessary  for  living,  especially  when  you  are young and your body growsup. You wakeup, and you are ready for the first meal ofthe day, itisabreakfast.Определить, заканчивается ли строка на словоbreakfast, и начинается ли на food.Определить является ли строка просто строкой food.*/
echo "Задание 1<br>";
$text = "Food  is necessary  for  living,  especially  when  you  are young and your body grows up. You wakeup, and you are ready for the first meal of the day, it is a breakfast";

$regex ='/breakfast$/';
if (preg_match($regex, $text)){
	echo "Строка заканчивается на breakfast<br>";
} else echo "Строка не заканчивается на breakfast<br>";

$regex ='/^food/i';
if (preg_match($regex, $text)){
	echo "Строка начинается на food<br>";
} else echo "Строка не начинается на food<br>";

$regex ='/^food$/';
if (preg_match($regex, $text)){
	echo "Строка является строкой food<br>";
} else echo "Строка не является строкой food<br>";

/*2. Проверить, надежно ли составлен пароль. Пароль считается надежным, если он состоит из 8 или более символов. Где символом может быть английская буква, цифра и знак подчеркивания. Пароль должен содержать хотя бы одну заглавную букву, одну маленькую букву и одну цифру.*/
echo "<br>Задание 2<br>";
$pass = 'Password123_';

$regex ='/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d_]{8,}$/';
if (preg_match($regex, $pass)){
	echo "Пароль надёжен<br>";
} else echo "Пароль не надёжен<br>";

/*3. Найдите  все  «слова»,  написанные заглавными  буквами,  возможно  внутри настоящих слов (аааБББввв).*/
echo "<br>Задание 3<br>";
$text = 'ВАРКпЛОСЬ хливкие шорьки ПЫРЯЛИСЬ ПО наве';///////////////////////////
$regex = '/\b[А-ЯЁ]+\b/u';

$result = preg_match_all($regex, $text, $matches);
print_r($matches);

/*4. Найдите слова, которые начинаются на гласную.*/
echo "<br><br>Задание 4<br>";
$text = "Food  is necessary  for  living,  especially  when  you  are young and your body grows up. You wakeup, and you are ready for the first meal of the day, it is a breakfast";
$regex = '/\b[eyuioa]\w+\b/i';

$result = preg_match_all($regex, $text, $found);
print_r($found);

/*5. Напишите программу, проверяющий текст на наличие ошибок:
–нет  пробела  после  запятой,  точки  с  запятой,  восклицательного  знака, вопросительного знака, двоеточия;
–«жи» или «ши» написано с буквой ы;
–в тексте есть слово «координально» или «сдесь», «зделал», «зделаю», «зделан»;
–в тексте есть слова «а» или «но» без запятой перед ними.
В случае обнаружения ошибки программа должнаписать сообщение об этом и выводить кусок текста с ошибкой (чтобы было понятно, что не так).*/

echo "<br><br>Задание 5<br>";
$text = "жы,шы!координально! сдесь:зделал но зделаю?зделан";

function checkText($text){
	$regex = '/([\\,\\;\\!\\?\\:])([а-яёА-ЯЁ0-9]+)/u';
	$matches = [];
	$result = preg_match_all($regex, $text, $matches);
	if($result>0){
		echo "Нет пробела после знака препинания:<br>";
		for($i=0; $i < $result; $i++){
			echo $matches[0][$i].'<br>';
		}
	}

	$regex = '/[жЖ]ы|[шШ]ы/u';
	$matches = [];
	$result = preg_match_all($regex, $text, $matches);
	if($result>0){
		echo "Жи ши пишется через и:<br>";
		for($i=0; $i < $result; $i++){
			echo $matches[0][$i].'<br>';
		}
	}

	$regex = '/координально|сдесь|зделал|зделаю|зделан/u';
	$matches = [];
	$result = preg_match_all($regex, $text, $matches);
	if($result>0){
		echo "Ошибки в словах:<br>";
		for($i=0; $i < $result; $i++){
			echo $matches[0][$i].'<br>';
		}
	}

	$regex = '/[а-яА-Я]+ а |[а-яА-Я]+ но /u';
	$matches = [];
	$result = preg_match_all($regex, $text, $matches);
	if($result>0){
		echo "Нет запятой перед а/но:<br>";
		for($i=0; $i < $result; $i++){
			echo $matches[0][$i].'<br>';
		}
	}

}

checkText($text);

/*Второй вариант –сделать так, чтобы вместо сообщений об ошибках программа просто их исправляла.*/

function replaceText($text){
	$text = preg_replace('/([\\,\\;\\!\\?\\:])([а-яёА-ЯЁ0-9]+)/u', '$1 $2', $text);

	$text = preg_replace('/жы/', 'жи', $text);
	$text = preg_replace('/шы/', 'ши', $text);
 
	$text = preg_replace('/координально/', 'кардинально', $text);
	$text = preg_replace('/сдесь/', 'здесь', $text);
	$text = preg_replace('/зделал/', 'сделал', $text);
	$text = preg_replace('/зделаю/', 'сделаю', $text);
	$text = preg_replace('/зделан/', 'сделан', $text);

	$text = preg_replace('/([а-яё]+)([ ])(а)/u', '$1, $3', $text);
	$text = preg_replace('/([а-яё]+)([ ])(но)/u', '$1, $3', $text);

	return $text;
}

$text = "жы,шы!координально! сдесь:зделал но зделаю?зделан";
echo replaceText($text);
?>
</div>
</body>
<footer>
<?php
require ('../project/blocks/footer.php');
?>
</footer>
</html>
