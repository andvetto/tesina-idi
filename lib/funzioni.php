<?php 
	//*******************************************************
	//v1 GetVal('nome parametro get');
	//Recuperavalori GET e ne restituisce il valore
	// - Restituisce:
	//				'' Se il parametro non è presente
	//				Il valore del paramentro, quando presente
	//*******************************************************
	
	function GetVal($nome)
	{
		$valore = '';
		if(isset($_GET[$nome]))
		{
			$valore = $_GET[$nome];
		}
		return $valore;
		
	}
	
	function PostVal($nome)
	{
		$valore='';
		if(isset($_POST[$nome]))
		{
			$valore = $_POST[$nome];
		} 
		return $valore;
	}
	
	
	function SalvaUpload($nomecampo, $titolo)
	{
		if ($_FILES[$nomecampo]["error"] != UPLOAD_ERR_OK)
        {
              //echo "Error: " . $_FILES[$nomecampo]["error"] . "<br/>";
			  switch ( $_FILES[$nomecampo]["error"] )
			  {
					  case UPLOAD_ERR_INI_SIZE:
						   die('File troppo grande vedi: upload_max_filesize in php.ini default 2MB');	
					  break;
					  case UPLOAD_ERR_NO_FILE:
							return "";
					  break;
					  case UPLOAD_ERR_PARTIAL:
							die('Problema di rete upload non riuscito');
					  break;
					  case UPLOAD_ERR_NO_TMP_DIR:
							die('Manca la cartella temporanea sul server');
					  break;
					  case UPLOAD_ERR_CANT_WRITE:
							die('Manca il permesso si scrittura sulla cartella temporanea');
					  break;

			  }
        }
		else
		{
			$nome_file_originale = $_FILES[$nomecampo]["name"];
			
			$ext = pathinfo ( $nome_file_originale, PATHINFO_EXTENSION   );
						
			$nome_file_su_server = uniqid().'-'.strtolower($titolo).'.'.$ext;			
					
			if(!is_dir("upload"))
			{
				mkdir('upload');
			}    

			$ok = move_uploaded_file($_FILES[$nomecampo]["tmp_name"], "upload/" . $nome_file_su_server);
			
			return $nome_file_su_server;
			
		 }
	}
	