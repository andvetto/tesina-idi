<?php
    		//locale
	if($_SERVER['HTTP_HOST'] == 'localhost')
	{
		require_once '../lib/config-locale.php';
		require_once '../lib/DbManager.php';
	}
			//remoto
	else
	{
		require_once '../lib/config-remoto.php';
		require_once '../lib/DbManager.php';
	}
	
    require_once '../lib/funzioni.php';
	
   
    $nome = PostVal('nome');
    $cognome = PostVal('cognome');
    $email = PostVal('email');
    $messaggio = PostVal('messaggio');
		
	$nome = addslashes($nome);
	$cognome = addslashes($cognome);
	$email = addslashes($email);
	$messaggio = addslashes($messaggio);
	
	$sSQL = "INSERT INTO db_ceramicagiusti
			(
					nome
					, cognome
					, email
					, messaggio
			)
			VALUES
			(
					'$nome'
					, '$cognome'
					, '$email'
					, '$messaggio'
			)";
			
	$dbMan = new DbManager(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
	$dbMan->Esegui($sSQL);
	
	$arOut = ['stato'=>'OK'];
	
	$json = json_encode ( $arOut );
    echo($json);
	
	
	