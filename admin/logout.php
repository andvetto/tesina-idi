<?php
	session_start();
	unset($_SESSION['autenticato']);
	session_destroy();
	header("location:index.php");
?>