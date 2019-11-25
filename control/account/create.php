<?php
	session_start();
	require_once $_SERVER["DOCUMENT_ROOT"] . '/model/classes/User.class.php';
	require_once $_SERVER["DOCUMENT_ROOT"] . '/model/functions/hash_password.php';
	require_once $_SERVER["DOCUMENT_ROOT"] . '/model/classes/Database.class.php';

	if (strcmp($_POST['password'], $_POST[confirm_password]) !== 0) {
		?><script type='text/javascript'>
			alert('Password and confirmed password are different');
			window.location.href='../../view/layout/index.php';
		</script><?php
	}

	try {
		$usr = new User($_POST['pseudo'], $_POST['email'], hash_password($_POST['password']), unserialize($_SESSION['db']));
		$_SESSION['user'] = serialize($usr);
		header('Location: ../../view/layout/home.php');
	} catch (Exception $e) {

		?><script type='text/javascript'>
			alert('<?= $e ?>');
			window.location.href='../../view/layout/index.php';
		</script><?php

	}//ni: link cookie
?>
