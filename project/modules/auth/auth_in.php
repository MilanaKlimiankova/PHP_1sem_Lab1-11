<?php
 if(session_status()!=PHP_SESSION_ACTIVE) session_start();

include "../../functions/logsManager.php";

 if (isset($_POST['login'])) { $login = $_POST['login']; if ($login
== '') { unset($login);} }
 if (isset($_POST['password'])) { $password=$_POST['password']; if
($password =='') { unset($password);} }
 if (isset($_POST['password2'])) { $password2=$_POST['password2']; if
($password2 =='') { unset($password2);} }

 if (empty($login) || empty($password) || empty($password2)) {
LogsLoginFailed();
echo "<script language='Javascript' type='text/javascript'>
 alert ('Вы заполнили не все поля!');
 </script>";
 exit();
 }

 if ($password != $password2) {
LogsLoginFailed();
echo "<script language='Javascript' type='text/javascript'>
 alert ('Пароли не совпадают!');
 </script>";
 exit();
 }

 $login = stripslashes($login);
 $login = htmlspecialchars($login);
 $password = stripslashes($password);
 $password = htmlspecialchars($password);
 $login = trim($login);
 $password = trim($password);
 $_SESSION['temp_login']=$login;

 include '../../connect/db.php';
 $query ="SELECT * FROM users WHERE login='$login'";
 $result = mysqli_query($link, $query) or die("Ошибка " .
mysqli_error($link));
 $row = mysqli_fetch_assoc($result);
 if (empty($row['id']))
 {
 	LogsLoginFailed();
	 mysqli_close($link);
	 print "<script language='Javascript' type='text/javascript'>
	 alert ('Такого логина не существует!');
	 function reload(){location = 'auth.php'};
	 setTimeout('reload()', 0)
	 </script>";
 }
 else {
 if ($row['password']==md5(md5($password).$row['salt']))
 {
 $_SESSION['login']=$row['login'];
 $_SESSION['fio']=$row['fio'];
 $_SESSION['email']=$row['email'];
 $_SESSION['gender']=$row['gender'];
 $_SESSION['id']=$row['id'];
 $_SESSION['phone']=$row['phone'];

 LogsLoginAccepted();

 echo "<script language='Javascript'
type='text/javascript'>
 function reload(){
 	top.location = '../../index.php'};
 setTimeout('reload()', 0)
 </script>";
 }
 else {
 echo "<script language='Javascript'
type='text/javascript'>
 alert ('Вы ввели не правильный пароль!');
 function reload(){location = 'auth.php'};
 setTimeout('reload()', 0)
 </script>";
 LogsLoginFailed();
 }
 mysqli_close($link);
 }
?>