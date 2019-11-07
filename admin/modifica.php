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
	
	//print_r($_POST);
	$errTitolo = '';
	
	

    if(PostVal('inviato')=='si')
    {//Fase di Salvataggio modifiche
		//die();
        $dbMan = new DbManager(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
        
        $titolo = PostVal('titolo');
        $testo = PostVal('testo');
        $immagine = SalvaUpload('immagine', $titolo);
		
        $immagine_originale = PostVal('immagine_originale');
        $data = PostVal('data');
        $id = PostVal('id');
        
		$esegui = true;
		if(trim($titolo)=='')
		{
			$errTitolo = 'alert-danger';
			$warning = 'd-block';
			$esegui = false;
		}
		
		
		if($esegui)
		{
			if(($immagine!='') && ($immagine!=$immagine_originale))
			{
				if(is_file('upload/'.$immagine_originale))
				{
					unlink('upload/'.$immagine_originale);
				}
			}
			
			if($immagine=='')
			{
				$immagine = $immagine_originale;
			} 
			
			$titolo = addslashes($titolo);
			$testo = addslashes($testo);
			$immagine = addslashes($immagine);
			$data = addslashes($data);
			$id = addslashes($id);
			
			$sSQL = "UPDATE articoli SET
						   titolo='$titolo'
						   ,testo='$testo'
						   ,immagine='$immagine'
						   ,data='$data'
								
						WHERE
							id = '$id'
					";
			
			
			$dbMan->Esegui($sSQL);
			
			
			header('location:lista.php');
			exit;
		}
    }
    
    
	
    $titolo = '';
    $testo = '';
    $immagine = '';
    $data = '';
	//print_r($_GET);
	//print_r($_POST);
    if(GetVal('id')!='')
    {
        
        
        $sSQL = "SELECT * FROM articoli WHERE id='".GetVal('id')."'";
        
		
		
        $dbMan = new DbManager(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
        $dbMan->Esegui($sSQL);
		
        if($ret = $dbMan->Recupera())
        {
            $titolo = $ret['titolo'];
            $testo = $ret['testo'];
            $immagine = $ret['immagine'];
            $data = $ret['data'];
        }
       
    }
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Modifica</title>
		<meta name="robots" content="noindex, nofollow">
        <?php include("../inc/head.php"); ?>
		<script src="https://cdn.ckeditor.com/4.11.2/full/ckeditor.js"></script>
		<script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                    $('#preview-container').removeClass("d-none");
                    $('#old-img-container').addClass("d-none");
                }
                console.log(input.files[0]);
                
                reader.readAsDataURL(input.files[0]);

            }
        }
        </script>
    </head>
    <body>

    	    <?php include("admin-nav.php"); ?>
	<div class="container mt-4">
		
		<div class="page-header">
            <h1>Modifica</h1>
        </div>
		
		<div class="row">
       <form action="<?php echo($_SERVER['PHP_SELF']); ?>?id=<?php echo(GetVal('id'))  ?>" method="post" class="col-sm-offset-2 col-sm-8 mb-4" enctype="multipart/form-data">
			<div class="alert alert-warning d-none <?php echo($warning) ?>" role="alert">
                Il campo Titolo è obbligatorio!
            </div>			
			<div class="form-group">
                <label for="titolo">Titolo</label>
                <input type="text" class="form-control <?php echo($errTitolo) ?>" name="titolo" value="<?php echo(htmlentities($titolo)); ?>" />
            </div>



			<div class="form-group">
                <label for="immagine">Immagine</label>
               	<div id="old-img-container"style="height:300px; border: solid 1px #000; text-align:center; line-height: 300px;">
                    <img class="p-3" style="max-width:100%; max-height:100%;" src="<?php echo $generaurl; ?>admin/upload/<?php echo $immagine ?>" alt="" />
                </div>
                <div id="preview-container" class="d-none" style="height:300px; border: solid 1px #000;  text-align:center; line-height: 300px;">
                    <img class="p-3" style="max-width:100%;  max-height:100%; " id="preview" alt=""/>
                </div>
                <input type="file" onchange="readURL(this)" class="form-control-file" name="immagine" value="" />
                <input type="hidden" name="immagine_originale" value="<?php echo(htmlentities($immagine)); ?>" />
            </div>

			<div class="form-group">
                <label for="data">Data</label>
                <input type="text" class="form-control" name="data" value="<?php echo(htmlentities($data)); ?>" />
            </div>
			<div class="form-group">
                <label for="testo">Testo</label>
				<textarea type="text" class="form-control" id="testo" name="testo"><?php echo(htmlentities($testo)); ?></textarea>
            </div>            
            <script>
						CKEDITOR.replace( 'testo' );	
			</script>

            <input type="hidden" name="id" value="<?php echo(GetVal('id'))  ?>"/>
			
            <input type="hidden" name="inviato" value="si"/>
            <button type="submit" class="btn btn-primary">Salva</button>
		</form>
		</div>
	</div>


    </body>
</html>
