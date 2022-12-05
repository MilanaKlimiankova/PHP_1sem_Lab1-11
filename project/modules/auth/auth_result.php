<?php
 if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/labworks/project/css/auth.css">
</head>

<?php
 if (!empty($_SESSION['login'])) {
	 echo "<ul id=\"menu\">";
	 echo "<li>Добро пожаловать на сайт, </li>";
	 echo
	"<li style = 'font-family: Calibri'>".$_SESSION['fio']."!</li>";
	 echo "<li><a class = 'ch' href=\"modules/auth/auth_out.php\"
	target=\"content\">Выйти</a></li>";
 }
 else{
 echo "<ul id=\"menu\">";
 echo "<li>Добро пожаловать на сайт, <span style = 'font-family: Calibri'>ГОСТЬ!</span>
&emsp;&emsp;</li>";
 echo "<li><a class = 'ch' href=\"modules/registration/reg.php\"
target=\"content\">Регистрация</a></li>";
 echo "<li><a class = 'ch' href='modules/auth/auth.php'
target=\"content\">Войти</a></li>";
 echo "</ul>";
 echo "<br>";
 }