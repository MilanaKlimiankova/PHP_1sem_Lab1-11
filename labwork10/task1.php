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
$output = "";
	if (isset($_POST['task1'])) {
		$input = $_POST['task1'];
		switch ($_POST['task1']){
			case '25dec':
				{$output = 'Рождество';
				break;}
			case '31dec':
				{$output = 'Новый Год';
				break;}
			case '8mar':
				{$output = 'Международный женский день';
				break;}
			case '15mar':
				{$output = 'Мой день рождения';
				break;}
			case '1mar':
				{$output = 'День трудящихся';
				break;}
			case '1sep':
				{$output = 'День знаний';
				break;}
		}
	}
	echo $output;
?>
</body>
</html>
