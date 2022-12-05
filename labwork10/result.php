<html>
<head>
 <meta charset="utf-8">
 <title>Лабораторная работа 10</title>
 <link rel="stylesheet" href="style.css">
 <meta charset="utf-8" />
</head>
<body>
 <div class="title">
 <h1>
Лабораторная работа 10
 </h1>

 
 <?php
	session_start();
	echo '<html>';
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
	echo '</head>';
	echo '<body>';

	echo '<h3>Тест на внимательность</h3>';

	echo "<p>ФИО: <b>".$_SESSION['name']."</b></p>";
	echo "<p>E-mail: <b>".$_SESSION['email']."</b></p>";
	echo "<p>Номер телефона: <b>".$_SESSION['number']."</b></p>";
	if (isset($_SESSION['spam']))
		echo '<p>Мы будем присылать вам уведомления по почте!</p>';

	echo '<p>1. Какое сейчас время года?';
	if ($_SESSION['quest1']==="winter") echo "<p><b><font color='green'>Зима</font></b></p>";
	if ($_SESSION['quest1']==="spring") echo "<p><b><font color='red'>Весна</font></b></p>";
	if ($_SESSION['quest1']==="summer") echo "<p><b><font color='red'>Лето</font></b></p>";
	if ($_SESSION['quest1']==="autumn") echo "<p><b><font color='red'>Осень</font></b></p></p>";
	echo '<p>Мы видим, что мальчик в валенках, так что, очевидно, сейчас зима.</p>';

	echo '<p>2. Конкретизируем вопрос – какой сейчас месяц? </p>';
	if (isset($_SESSION['quest2'])) {
		if ($_SESSION['quest2'] === "Декабрь") echo"<p><b><font color='green'>".$_SESSION['quest2']."</font></b></p>";
		else echo "<p><b><font color='red'>".$_SESSION['quest2']."</font></b></p>";
	}
	echo '<p>На стене слева висит календарь, и он показывает нам свой последний листок, следовательно, сейчас декабрь.</p>';

	echo '<p>3. Есть ли в квартире водопровод? </p>';
	if ($_SESSION['quest3']==="no") echo "<p><b><font color='green'>Нет</font></b></p>";
	if ($_SESSION['quest3']==="yes") echo "<p><b><font color='red'>Да</font></b></p>";
	echo '<p>Водопровода в доме нет, иначе бы мальчик не пользовался таким умывальником, который многие из нас видели лишь на даче или в деревнях.</p>';

	echo '<p>4. В квартире живут только мальчик и его папа или есть еще кто-то? Если да, то кто? </p>';
	$flag = 0;
	foreach ($_SESSION['quest4'] as $keys=>$values) {
		if ($values == "папа и мальчик" || $values == "девочка") $flag++;
	}
	if ($flag == 2){
		foreach ($_SESSION['quest4'] as $keys=>$values) 
			echo "<p><b><font color='green'>".$values." </font></b></p>";
	} else foreach ($_SESSION['quest4'] as $keys=>$values) 
			echo "<p><b><font color='red'>".$values." </font></b></p>";
	echo '<p>В нижнем правом углу мы видим куклы, так что как минимум в этом доме живет еще и девочка.</p>';

	echo '<p>5. Кем работает папа? </p>';
	if (isset($_SESSION['quest5'])){
		if (preg_match('/врач/i', $_SESSION['quest5'])) echo "<p><b><font color='green'>".$_SESSION['quest5']."</font></b></p>";
		else echo "<p><b><font color='red'>".$_SESSION['quest5']."</font></b></p>";
	} 
	echo '<p>Фонендоскоп, перекинутый через плечи, и лежащий на столе медицинский молоточек говорят о том, что папа, скорее всего, врач.</p>';
	
	if (isset($_SESSION['quest6'])) echo "<p>Спасибо за отзыв!</p>";

	echo "<p><b>Набранные баллы: ".$_SESSION['score']."</b></p>";

	echo '</body>';
	echo '</html>';
?>
</body>
</html>
