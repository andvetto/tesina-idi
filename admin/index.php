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

    session_start();
	
	$errUsername = '';
	$errPassword = '';

	$sTmp='';
	
    if(PostVal('inviato')=='si')
    {

		$username = PostVal('username');
		$password = PostVal('password');
		
		$sSQL = "SELECT * FROM utenti WHERE username='$username' AND password='$password'";
		$dbMan = new DbManager(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
        $dbMan->Esegui($sSQL);

		
        if($ret = $dbMan->Recupera())	//controllo se username e password inseriti corrispondono a quelli nel database
		{//Login OK
			$_SESSION['autenticato'] = session_id();
			
			header("location:lista.php");  
			exit;		
	}
	else{
		   $errUsername = 'style="border: solid 1px red"';
		   $errPassword = 'style="border: solid 1px red"';
	   }
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
       
	    <title>Login</title>
		<meta name="robots" content="noindex, nofollow">
        <?php include("../inc/head.php"); ?>
        
		
    </head>
    <body>
	<div class="container mt-4">
		
		<div class="page-header">
            <h1>Login</h1>
        </div>
		
		<div class="row">
		
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" class="col-sm-offset-2 col-sm-8">
            <?php echo($sTmp) ?>
			
			<div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" <?php echo($errUsername); ?> name="username" value="" />
            </div>
			
			<div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" <?php echo($errPassword); ?> name="password" value="" />
            </div>
			
            
            <input type="hidden" name="inviato" value="si"/>
            <button type="submit" class="btn btn-primary">Entra</button>
			
		</form>
		</div>
	</div>
    </body>
</html>
