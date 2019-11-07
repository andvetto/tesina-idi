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
	
?>
<!DOCTYPE html>
<html>
    <head>

        <title>Lista Articoli</title>
		<meta name="robots" content="noindex, nofollow">

        <?php include("../inc/head.php"); ?>

		<style>
			#link-cancella{
				color:red;
			}

			#button-cancella{
				background-color:#fff;
				border-color:red;
			}

			#button-cancella:hover{
				background-color:red;
			}

			#button-cancella:hover i{
				color:#fff;
			}

			#button-modifica{
				background-color:#fff;
				border-color:#000080;
			}

			#button-modifica:hover{
				background-color:#000080;
			}

			#button-modifica i{
				color:#000080;
			}

			#button-modifica:hover i{
				color:#fff;
			}


		</style>
    </head>
    <body>
    <?php include("admin-nav.php"); ?>
	<div class="container mt-4">
		<div class="row">

	    <?php

	        $dbMan = new DbManager(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
	        
	        $sSQL = "SELECT * FROM articoli ORDER BY id DESC";
	        
	        $dbMan->Esegui($sSQL);  
	        
	     	while ($ret = $dbMan->Recupera()):
	        
	    ?>

			<div class="col-5 offset-1 list-group"> 
				<a class="list-group-item list-group-item-action" href="#"><?php echo $ret['titolo'];?></a>
			</div>		
	                				 
			<div class="col-6 mb-3">		  
				
						<a id="link-cancella" href="elimina.php?id=<?php echo $ret['id'];?>">
							<button id="button-cancella" type="button" title="Cancella" class="btn btn-info btn-lg mr-2"><i class="fas fa-trash"></i>
						</a> 
						
						<a id="link-modifica" href="modifica.php?id=<?php echo $ret['id'];?>">
							<button id="button-modifica" type="button" title="Modifica" class="btn btn-info btn-lg"><i class="fas fa-pen"></i></button>
						</a> 

			</div>

    <?php
		
     	endwhile;
    
    ?>
        	<div class="col-6 offset-6">
                <a href="nuovo.php"><button type="button" title="Nuovo" class="btn btn-info btn-lg"><i class="fa fa-plus-square"></i></button></a>
        	</div>
		</div>
	</div>
    </body>
</html>
