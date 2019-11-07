<?php	
	session_start();	
	
	if(!isset($_SESSION['autenticato']))
	{
		die('Accesso negato 1');
	}
	if($_SESSION['autenticato'] != session_id())
	{
		die('Accesso negato 2');
	}
?>