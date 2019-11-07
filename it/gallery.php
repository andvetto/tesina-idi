<!DOCTYPE html>
<html lang="it">

  <head>
	
    <title>Ceramica Giusti - Workshop</title>
	<META NAME="description" CONTENT="Galleria dei Prodotti dello Studio Ceramico Giusti, Bottega Scuola di Ceramica."> 
    <META NAME="keywords" CONTENT="Studio Ceramico Giusti, Ceramica Giusti, Bottega Scuola di Ceramica, arte della ceramica, ceramica italiana, arte ceramica, tradizione ceramica, ceramiche, studio ceramico, porcellana, ceramica cottura, argilla, arte creativa, vasi, creazione, lavoro, pittura ceramica, scultura ceramica, corsi di ceramica, scuola di ceramica, galleria, prodotti, immagini">

	<?php include("../inc/head.php"); ?>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<link href="<?php echo $generaurl; ?>css/gallery.css" rel="stylesheet">
	<script src="<?php echo $generaurl; ?>js/gallery.js"></script>

 </head>

  <body>
	<?php include("../inc/header.php"); ?>

	<a id="page"></a>
	
	<span><br/></span>

    <section>
    <div class="container">
	  
	  
        <div class="row">
			
          <div class="col-lg-12">
				<div class="p-5">
					<h2 class="display-4">Workshop</h2>
				</div>
          </div>
		
		</div>
		
		<div class="row">

			<?php
				$glob = glob('../gallery/*.*');

				
				foreach($glob as $file)
				{
					if(is_file($file) && is_readable($file))
					{
						$titleimg = substr($file,11,-4);
					?>
						<div class="col-lg-4 thumb">
							<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo($titleimg); ?>"
							   data-image="<?php echo($file); ?>"
							   data-target="#image-gallery">
								<img class="img-thumbnail"
									 src="<?php echo($file); ?>"
									 alt="Another alt text">
							</a>
						</div>
					<?php
					}
				}
			?>
       
			<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="image-gallery-title">TITOLO</h4>
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
							</button>
						</div>
						<div class="modal-body">
							<img id="image-gallery-image" class="img-responsive col-md-12" src="IMMAGINE" alt="">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary btn-gallery float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
							</button>

							<button type="button" id="show-next-image" class="btn btn-primary  btn-gallery float-right"><i class="fa fa-arrow-right"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
        </div>
		
        <div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
				<div class="p-5">
					<a href="<?php echo $generaurl; ?>it/corsi#page" style="width:100%" class="btn btn-primary btn-xl rounded mt-5">I nostri Corsi</a>				
				</div>
			</div>
			<div class="col-lg-2">
			</div>
		</div>
		
    </div>
    </section>



	<?php include("../inc/footer.php"); ?>
	
  </body>

</html>
