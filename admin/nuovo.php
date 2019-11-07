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


    if(PostVal('inviato')=='si')
    {
        $dbMan = new DbManager(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
        
        $titolo = PostVal('titolo');
        $testo = PostVal('testo');
        $immagine = SalvaUpload('immagine', $titolo); //PostVal('immagine');
        
		$titolo = addslashes($titolo);
        $testo = addslashes($testo);
        $immagine = addslashes($immagine);
        $data = addslashes(date('Y-m-d'));
        
        $esegui = true;
        if(trim($titolo)=='')
        {
            $errTitolo = 'alert-danger';
            $warning = 'd-block';
            $esegui = false;
        }
        
		if($esegui)
        {
        
            $sSQL = "INSERT INTO articoli
                    (
                            titolo
                            ,testo
                            ,immagine
                            ,data
                    )
                    VALUES
                    (
                            '$titolo'
                            ,'$testo'
                            ,'$immagine'
                            ,'$data'
                    )";
            
    		//echo('<pre>'.$sSQL.'</pre>');
    		//die();
            $dbMan->Esegui($sSQL);
           
            
            header("location:lista.php");  
    		exit;		
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Nuovo</title>
		
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
            <h1>Nuovo</h1>
        </div>
		<div class="row">
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" class="col-sm-offset-2 col-sm-8 mb-4" enctype="multipart/form-data">

			<div class="alert alert-warning d-none <?php echo($warning) ?>" role="alert">
                Il campo Titolo è obbligatorio!
            </div>

			<div class="form-group">
                <label for="titolo">Titolo</label>
                <input type="text" class="form-control <?php echo($errTitolo) ?>" name="titolo" value="" />
            </div>
            
			<div class="form-group">
                <label for="immagine">Immagine</label>
                <div id="preview-container" class="d-none" style="height:300px; border: solid 1px #000;  text-align:center; line-height: 300px;">
                    <img class="p-3" style="max-width:100%;  max-height:100%; " id="preview" alt=""/>
                </div>
                <input type="file" onchange="readURL(this)" class="form-control-file" name="immagine" value="" />
            </div>
			
			<div class="form-group">
                <label for="testo">Testo</label>
				<textarea type="text" id="testo" class="form-control" name="testo"></textarea>
            </div>
            <script>
                        CKEDITOR.replace( 'testo' );    
            </script>

            <input type="hidden" name="inviato" value="si"/>
            <button type="submit" class="btn btn-primary">Salva</button>
		</form>
		</div>
	</div>
    </body>
</html>
