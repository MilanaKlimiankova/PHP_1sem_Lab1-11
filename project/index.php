<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

include ("functions/func.php");

?>

<html>
<head>
	 <meta http-equiv="content-type" content="text/html; charset=utf-8">
	 <link type = 'text/css' rel="stylesheet" href="http://localhost/labworks/project/css/style.css">
</head>

<header>
	<?php
 		include ("blocks/header.php");
 	?>
</header>

<body>
	<?php 
	if(isset($_SESSION['login'])){
		include ("blocks/body.php");
		} else include ("blocks/body-blank.php");
	?>	
</body>

<footer>
	<?php
 		include ("blocks/footer.php");
 	?>
</footer>

</html>