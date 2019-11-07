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
	
?>
<!DOCTYPE html>
<html lang="it">

  <head>
	
    <title>Studio Ceramico Giusti - Bottega Scuola di Ceramica</title>
	  <META NAME="description" CONTENT="Lo Studio Ceramico Giusti è una Bottega Scuola di ceramica situata sulle colline di Firenze, dove realizzano oggetti torniti, lavorati e decorati a mano."> 
    <META NAME="keywords" CONTENT="Studio Ceramico Giusti, Ceramica Giusti, Bottega Scuola di Ceramica, arte della ceramica, ceramica italiana, arte ceramica, tradizione ceramica, ceramiche, studio ceramico, porcellana, ceramica cottura, argilla, arte creativa, vasi, creazione, lavoro, pittura ceramica, scultura ceramica, corsi di ceramica, scuola di ceramica">
    
    <?php include("../inc/head.php"); ?>
	
  </head>

  <body>
	<?php include("../inc/header.php"); ?>
	

	<?php
        $dbMan = new DbManager(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
        
        $sSQL = "SELECT * FROM articoli ORDER BY id DESC LIMIT 1;";
        
        $dbMan->Esegui($sSQL);

        $nonews = 'style="display:none"';
    
    		while ($ret = $dbMan->Recupera()):
    		
        $time = strtotime($ret['data']); 
        $datait = date('d/m/Y', $time);
	?>	        

	<section <?php if ($ret['data']== 0){echo $nonews;} ?>>
      <div class="container">
        <div class="row align-items-center">
         
          <div class="col-lg-7 order-lg-2">
            <div class="p-5">
              <h2 class="display-4 mb-5">News</h2>
              <h3><?php echo $ret['titolo']; ?></h3>
              <p><?php echo $ret['testo']; ?></p>
			        <p><?php  echo $datait; ?></p>
	
            </div>
          </div>
		   <div class="col-lg-5">
            <div class="p-5">
              <img class="img-fluid rounded" src="<?php echo $generaurl; ?>admin/upload/<?php echo $ret['immagine'] ?>" alt="">
            </div>
          </div>
        </div>

      </div>
    </section>

    <?php
    
      endwhile;
    
    ?>

    <section>
      <div class="container">
        <div class="row align-items-center">
         
          <div class="col-lg-7">
            <div class="p-5">
              <h2 class="display-4 mb-5">Chi Siamo</h2>
              <p>Lo Studio Ceramico Giusti è una Bottega Scuola di ceramica situata a Paterno (Pelago), sulle colline circostanti Firenze, dove da più di trent’anni si progettano e si producono oggetti in ceramica per la tavola e per la casa, torniti, lavorati e decorati completamente a mano. Sandra e Stefano Giusti lavorano la ceramica dal 1980.</p>
			         <a href="<?php echo $generaurl; ?>it/about#page" style="width:100%" class="btn btn-primary btn-xl rounded mt-5">Leggi tutto</a>

            </div>
          </div>
		      <div class="col-lg-5">
            <div class="p-5">
              <img class="img-fluid rounded" src="<?php echo $generaurl; ?>img/01.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 order-lg-2">
            <div class="p-5">
              <h2 class="display-4 mb-5">Workshop</h2>
              <p>La nostra produzione è particolarmente centrata su oggetti di uso quotidiano, dove i valori della tradizione ben si coniugano con il linguaggio contemporaneo. Alcuni dei nostri oggetti sono presenti in qualificate gallerie nazionali ed internazionali. I metodi di lavorazione usati e la vasta gamma di materiali impiegati, dalla maiolica al gres alla più fine porcellana al materico raku, sono propri della più alta tradizione artigiana e caratterizzano l’azienda per la sua versatilità produttiva.</p>
			  <a href="<?php echo $generaurl; ?>it/gallery#page" style="width:100%" class="btn btn-primary btn-xl rounded mt-5">Galleria</a>
            </div>
          </div>
          <div class="col-lg-5 order-lg-1">
            <div class="p-5">
              <img class="img-fluid rounded" src="<?php echo $generaurl; ?>img/02.jpg" alt="">
            </div>
          </div>
		</div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="p-5">
              <h2 class="display-4 mb-5">Corsi</h2>
              <p>L’attività didattica e formativa ha da sempre caratterizzato lo Studio Ceramico Giusti. Proponiamo dei corsi rivolti a tutti coloro che vogliono sia avvicinarsi al mondo della ceramica per la prima volta, sia specializzarsi in alcuni specifici aspetti di questa antica arte nel luogo da sempre deputato a tramandare il mestiere: la bottega.

				La varietà delle tecniche e dei materiali usati, consentono l’esplorazione di una ampia gamma di tipologie ceramiche: maiolica, raku, gres, porcellana, lavorati a colombino, lastra, tornio, bassorielievo, lavor tondo, trafila, sono solo alcune delle possibilità da sperimentare in ampi spazi con attrezzature specifiche e forni professionali.

				Sandra e Stefano Giusti sono Maestri Artigiani e lo studio può rilasciare crediti formativi in quanto accreditato come Bottega Scuola dalla Regione Toscana (LReg 53).</p>
				 <a href="<?php echo $generaurl; ?>it/corsi#page" style="width:100%" class="btn btn-primary btn-xl rounded mt-5">Vai ai Corsi</a>

            </div>
          </div>
          <div class="col-lg-5">
            <div class="p-5">
              <img class="img-fluid rounded" src="<?php echo $generaurl; ?>img/03.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

	<?php include("../inc/footer.php"); ?>
	
  </body>

</html>
