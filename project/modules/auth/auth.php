<?php
 if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>

<html>

<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
 <link rel="stylesheet" type="text/css" href="http://localhost/labworks/project/css/auth.css">
</head>

<body>
<div class="reg">
 <form action="http://localhost/labworks/project/modules/auth/auth_in.php" method="post">

 <p>
 <br><br>
 <label>Логин:</label><br>
 <input class = 'textarea' name="login" value="<?=@$_SESSION['temp_login'];?>"
type="text" size="28" maxlength="28">
 </p>

 <p>
 <label>Пароль:</label><br>
 <input class = 'textarea' name="password" type="password" size="28"
maxlength="28">
 </p>
 <p>
 <label>Повторите пароль:</label><br>
 <input class = 'textarea' name="password2" type="password" size="28"
maxlength="28">
 </p>

 <p>
 <br>
 <input type="submit" name="submit" class = 'submit' value="Войти">
 </p>
 </form>
</div>
</body>
</html>
