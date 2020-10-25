<?php 
	
	// GESTIONE URL
	
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
		$page = substr($_SERVER['PHP_SELF'],20,-4);
	}

	
	$page = substr($_SERVER['PHP_SELF'],4,-4);
	
	if ($page == 'index'){
		$page =  'home';
	}

	//GESTIONE LINGUA
	
	$lang = $_SERVER['PHP_SELF']; 
	$bLinguaIt = strpos($lang, 'it'); //controllo lingua
	if($bLinguaIt)
	{
		
	}
	else
	{
		$it_url = str_replace('en', 'it', $lang);
		$it_url = substr($it_url,0,-4);

		if ($page == 'home'){
			$it_url = substr($it_url,0,-9);
		}
	}
	$bLinguaEn = strpos($lang, 'en'); //controllo lingua
	if($bLinguaEn)
	{
		 
	}
	else
	{
		$en_url = str_replace('it', 'en', $lang);
		$en_url = substr($en_url,0,-4);

		if ($page == 'home'){
			$en_url = substr($en_url,0,-9);
		}
	}
	
	

	
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-93222850-5"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-93222850-5');
	</script>
	
	<link rel="icon" href="<?php echo $generaurl; ?>favicon.ico" />

    <!-- Bootstrap core CSS -->
    <!-- <link href="<?php echo $generaurl; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $generaurl; ?>css/style.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">


