<?php

function check_captcha()
{
	//Если передана капча
	if ( isset($_POST['captchaInput']) ){
		$code = $_POST['captchaInput']; //--Получаем введенную пользователем капчу

		//--Сравниваем

		if ( isset($_SESSION['random']) && $_SESSION['random'] == $code){
				return true;
		} else {
			unset($_SESSION['random']);
			return false;
		}

	}
}
?>