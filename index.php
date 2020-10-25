<?php
	$_SERVER['HTTP_HOST']; //recupero nome server = localhost
	$_SERVER['PHP_SELF']; //recupera percorso = indirizzo nome file
	
	$urlsito = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	
				//locale
	if($_SERVER['HTTP_HOST'] == 'localhost'){
		$urlsito = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
		$generaurl = substr($urlsito,0,61); 
	}
				//remoto
	else{
		$generaurl = substr($urlsito,0,33); 
	}


	 

	
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	switch ($lang)
	{
		case "it":
			//echo "it - italiano";
			header("location:".$generaurl."it/");
			break;    
		default:
			//echo "en - default";
			header("location:".$generaurl."en/"); // inglese per tutti gli altri casi di rilevamento della lingua
			break;
	}
?>
	
	