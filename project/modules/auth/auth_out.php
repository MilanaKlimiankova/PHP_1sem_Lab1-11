<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
unset($_SESSION['login']);
unset($_SESSION['id']);
unset($_SESSION['fio']);
unset($_SESSION['password']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['gender']);
 print "<script language='Javascript' type='text/javascript'>
 function reload(){top.location = '../../index.php'};
 setTimeout('reload()', 0);
 </script>";
?>