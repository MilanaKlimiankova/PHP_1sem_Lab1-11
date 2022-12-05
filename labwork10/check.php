<?php
session_start();
require_once "lab10.php";
$score = 0;

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['number'] = $_POST['number'];

if (isset($_POST['spam'])) { //чекбокс
	$_SESSION['spam'] = $_POST['spam'];
	}
else {
	unset($_SESSION['spam']);
}


if (isset($_POST['quest1'])) {
	$_SESSION['quest1'] = $_POST['quest1'];
	if ($_POST['quest1'] == "winter") $score++;
} else {
	unset($_SESSION['quest1']);
}

if (isset($_POST['quest2'])) {
	$_SESSION['quest2'] = $_POST['quest2'];
	if ($_POST['quest2'] == "Декабрь") $score+=2;
} else {
	unset($_SESSION['quest2']);
}

if (isset($_POST['quest3'])) {
	$_SESSION['quest3'] = $_POST['quest3'];
	if ($_POST['quest3'] == "no") $score+=3;
} else {
	unset($_SESSION['quest3']);
}

if (isset($_POST['quest4'])) {
	$_SESSION['quest4'] = $_POST['quest4'];
	$flag = 0;
	foreach ($_POST['quest4'] as $keys=>$values) {
		if ($values == "папа и мальчик" || $values == "девочка") $flag++;
	} 
	if ($flag == 2) $score+=4;
} else unset($_SESSION['quest4[]']);

if (isset($_POST['quest5'])) {
	$_SESSION['quest5'] = $_POST['quest5'];
	if (preg_match('/врач/i', $_POST['quest5'])) $score+=5;
} else {
	unset($_SESSION['quest5']);
}

if (isset($_POST['quest6'])) {
	$_SESSION['quest6'] = $_POST['quest6'];
} else {
	unset($_SESSION['quest6']);
}

$_SESSION['score'] = $score;
echo('<script> window.location.href = "result.php";</script>');
?>

