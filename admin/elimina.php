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
    require_once 'shared/verifica_auth.php'; 
	   
    if(GetVal('id')!='')
    {
        $dbMan = new DbManager(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
		
        $sSQL = "SELECT immagine FROM articoli WHERE id='".addslashes(GetVal('id'))."'";
		$dbMan->Esegui($sSQL);
		
		if($r = $dbMan->Recupera())
		{
			if(is_file('upload/'.$r['immagine']))
			{
				unlink('upload/'.$r['immagine']);
			}
		}
		
        $sSQL = "DELETE FROM articoli WHERE id='".addslashes(GetVal('id'))."'";
		
				
        
        $dbMan->Esegui($sSQL);
        
        header("location:lista.php");
		exit;
    }
?>

