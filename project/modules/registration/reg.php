<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

include '../../functions/func.php';
include "../../functions/logsManager.php";

if (isset($_POST['fio'])) { $fio = $_POST['fio']; if ($fio ==
'') { unset($fio);} }
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login ==
'') { unset($login);} } /*заносим введенный пользователем логин в
переменную $login, если он пустой, то уничтожаем переменную*/
if (isset($_POST['password'])) { $password=$_POST['password']; if
($password =='') { unset($password);} }/*заносим введенный
пользователем пароль в переменную $password, если он пустой, то
уничтожаем переменную*/
if (isset($_POST['password2'])) { $password2=$_POST['password2']; if
($password2 =='') { unset($password2);} }
if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='')
{ unset($email);} }
if (isset($_POST['phone'])) { $phone=$_POST['phone']; if ($phone =='')
{ unset($phone);} }
if (isset($_POST['gender'])) { $gender=$_POST['gender']; if ($gender =='')
{ unset($gender);} }
if (isset($_POST['captchaInput'])) { 
	$captchaInput = $_POST['captchaInput'];
	if ($captchaInput == '') { 
		unset($captchaInput);
	} 
}

if (check_captcha())
{
 if(isset($_POST["go"])):
 		 $e0=null;
		 $fio=trim($_POST["fio"]);
		 $fio=strip_tags($fio);
		 $fio=stripslashes($fio);

		 if(strlen($fio)=="0"):
		 	$e0.="Заполните поле 'ФИО'<br>";
		 endif;

		 $e1=null;
		 $login=trim($_POST["login"]);
		 $login=strip_tags($login);
		 $login=stripslashes($login);
		 if(strlen($login)=="0"):
		 	$e1.="Заполните поле 'Логин'<br>";
		 endif;

		 if (!preg_match('/^[а-яА-Яa-zA-Z\d_]{4,}$/iu',$login) || preg_match('/(.)\1{3,}/i',$login)):
		 $e1.="Логин должен содержать не менее 4 символов, русские или английские символы, цифры, знак подчеркивания, не допускаются 4 подряд идущих одинаковых символа<br>";
		 endif;

		include '../../connect/db.php'; /*подключаемся к БД*/
		$query="SELECT id FROM users WHERE login='$login'";
		$result = mysqli_query($link, $query) or die("Ошибка выполнения
		запроса" . mysqli_error($link));
		if ($result){
		 	 $row = mysqli_fetch_row($result);
		 	 if (!empty($row[0])) $e1.="Данный логин занят"; /*проверка
		 	на существование в БД такого же логина*/
		}
		

		 $e2=null;
		 $email=trim($_POST["email"]);
		 $email=strip_tags($email);
		 $email=htmlspecialchars($email,ENT_QUOTES);
		 $email=stripslashes($email);
		  if(strlen($email)=="0"):
		 	$e2.="Заполните поле 'E-mail'<br>";
		 endif;

		 if (!preg_match('/^[a-z\.\-]{3,}@\w((\.\w)*\w+)*\.\w{2,3}$/i',$email) || preg_match('/\.io$/i',$email)):
		 $e2.="Нельзя использовать почту, имеющую менее трех символов имени и доменную зону «.io»<br>";
		 endif;


		 $e3=null;
		 $password=trim($_POST["password"]);
		 $password=strip_tags($password);
		 $password=htmlspecialchars($password,ENT_QUOTES);
		 $password=stripslashes($password);
		  if(strlen($password)=="0"):
		 	$e3.="Заполните поле 'Пароль'<br>";
		 endif;

		 if (!preg_match('/^\w{10,}$/',$password) || preg_match('/баран|олух|козел|baran|kozel|oluh/i',$password)):
		 $e3.="Пароль должен состоять не менее, чем из 10 символов и не должен содержать оскорбительные слова<br>";
		 endif;

		 $e4=null;
		 $password2=trim($_POST["password2"]);
		 $password2=strip_tags($password2);
		 $password2=htmlspecialchars($password2,ENT_QUOTES);
		 $password2=stripslashes($password2);
		 if(strlen($password2)=="0"):
		 	$e4.="Заполните поле 'Подтверждение пароля'<br>";
		 endif;

		 if ($password!=$password2):
		 	$e4.="Пароли не совпадают<br>";
		 endif;
		 
		 $e5=null;
		 $phone=trim($_POST["phone"]);
		 $phone=strip_tags($phone);
		 if(strlen($phone)=="0"):
		 	$e5.="Заполните поле 'Номер телефона'<br>";
		 endif;

		 $gender = ($_POST['gender']);

		 $eEn=$e1.$e2.$e3.$e4.$e5;
		 if($eEn==""):
			 $salt = mt_rand(100, 999);
			 $tm = date("Y-m-d H:i:s",time());
			 $password = md5(md5($password).$salt);
			 $query="INSERT INTO users (fio, login, email, password, salt, gender, phone) VALUES
			('$fio','$login','$email','$password','$salt','$gender','$phone')";
			$result=mysqli_query($link, $query) or die("Ошибка " .
			mysqli_error($link));

			if ($result) /*пишем данные в БД и авторизовываем
			пользователя*/
			{
				 $query="SELECT * FROM users WHERE login='$login'";
				 $rez = mysqli_query($link, $query);
				 if ($rez)
				 {
					$row = mysqli_fetch_assoc($rez);
					$_SESSION['id'] = $row['id'];
					$_SESSION['fio'] = $row['fio'];
					$_SESSION['login'] = $row['login'];
 					$_SESSION['email']=$row['email'];
 					$_SESSION['gender']=$row['gender'];
 					$_SESSION['phone']=$row['phone'];
 					LogsRegAccepted();
					mysqli_close($link);
					/*выводим уведомление об успехе операции и
					перезагружаем страничку*/
					echo "<script language='Javascript' type='text/javascript'> alert('Вы успешно зарегистрировались и авторизировались! Спасибо!')</script>";
					 echo "<script language='Javascript'
						type='text/javascript'>
						 function reload(){
						 	top.location = '../../index.php'};
						 setTimeout('reload()', 0)
						 </script>";
				} else {
					 echo "<script language='Javascript'
					type='text/javascript'>
					 alert ('Ваши данные не были снесены в БД!');
					</script>";
 }
 }
 endif;
 endif;
} else LogsRegFailed();
?>

<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/labworks/project/css/reg.css">
</head>

<div class="reg">
 <h2>Регистрация</h2>
 <form method="post" action="reg.php">
  <p>
	 <label>ФИО:</label><br>
	 <input class = 'textarea' type="text" name="fio" value="<?=@$fio;?>"
	size="25" maxlength="25" autofocus>
	 <span class="error"><?=@$e0;?></span>
 </p>

 <p>
	 <label>Логин:</label><br>
	 <input class = 'textarea' type="text" name="login" value="<?=@$login;?>"
	size="25" maxlength="25" autofocus>
	 <span class="error"><?=@$e1;?></span>
 </p>

 <p>
	 <label>Email:</label><br>
	 <input class = 'textarea' name="email" value="<?=@$email;?>" type="text"
	size="25" maxlength="25">
	 <span class="error"><?=@$e2;?></span>
 </p>

 <p>
	 <label>Пароль:</label><br>
	 <input class = 'textarea' name="password" type="password" size="25"
	maxlength="25">
	 <span class="error"><?=@$e3;?></span>
 </p>

 <p>
	 <label>Повторить пароль:</label><br>
	 <input class = 'textarea' name="password2" type="password" size="25"
	maxlength="25">
	 <span class="error"><?=@$e4;?></span>
 </p>

 <p>
	<label>Номер телефона:</label><br>
	 <input class = 'textarea' name="phone" value="<?=@$phone;?>"
	type="text" size="25" maxlength="25">
	 <span class="error"><?=@$e5;?></span>
 </p>

 <p>
	<label>Пол:</label>
	 <input class = 'radio' name="gender" type="radio" value="female" checked><label>женский</label>
     <input class = 'radio' name="gender" type="radio" value="male"><label>мужской<label><br>
 </p>

 <p>
	<label>Результат математической операции:</label>
	<input class = 'textarea' type="text" name="captchaInput" />
	<img src = "http://localhost/labworks/project/modules/capcha/capcha.php" id ='capcha-image'/><br>
	<a class = 'cap' href="javascript:void(0);" onclick="document.getElementById('capcha-image').src='http://localhost/labworks/project/modules/capcha/capcha.php?rid=' + Math.random();">Обновить капчу</a>
 </p>

 <p><input type="hidden" name="go" value="5"></p>

 <p style="margin-left: 15%">
	 <input class = 'submit' type="submit" name="submit"
	value="Зарегистрироваться">
 </p>
 </form>
</div>
