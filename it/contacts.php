<!DOCTYPE html>
<html lang="it">

  <head>

    <title>Ceramica Giusti - Contatti</title>
	<META NAME="description" CONTENT="Contatti e orari dello Studio Ceramico Giusti, Bottega Scuola di Ceramica."> 
    <META NAME="keywords" CONTENT="Studio Ceramico Giusti, Ceramica Giusti, Bottega Scuola di Ceramica, arte della ceramica, ceramica italiana, arte ceramica, tradizione ceramica, ceramiche, studio ceramico, porcellana, ceramica cottura, argilla, arte creativa, vasi, creazione, lavoro, pittura ceramica, scultura ceramica, corsi di ceramica, scuola di ceramica, contatti, indirizzo, orario apertura, orari">
	
	<?php include("../inc/head.php"); ?>

	<script src="<?php echo $generaurl; ?>js/jquery-1.11.3.min.js"></script>
  	<script src="<?php echo $generaurl; ?>js/form.js"></script>

	<link href="<?php echo $generaurl; ?>css/styleForm.css" rel="stylesheet" />

  </head>

  <body>
	<?php include("../inc/header.php"); ?>

	<a id="page"></a>

	<span><br/></span>

    <section>
    <div class="container">
    <div class="row align-items-center">

		<div class="col-lg-12">
			<div class="p-5">
				<h2 class="display-4">Orari</h2>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="p-5">

				<table>

					<tr>
					<td style="width: 177px;"></td>
					<td style="width: 207px;"><strong>Mattina</strong></td>
					<td style="width: 207px;"><strong>Pomeriggio</strong></td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Lunedì</strong></td>
					<td style="width: 207px;">09 - 13</td>
					<td style="width: 207px;">15 - 19</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Martedì</strong></td>
					<td style="width: 207px;">chiuso</td>
					<td style="width: 207px;">15 - 19</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Mercoledì</strong></td>
					<td style="width: 207px;">09 - 13</td>
					<td style="width: 207px;">chiuso</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Giovedì</strong></td>
					<td style="width: 207px;">chiuso</td>
					<td style="width: 207px; text-align: left;">15 - 19</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Venerdì</strong></td>
					<td style="width: 207px;">09 - 13</td>
					<td style="width: 207px;">15 - 19</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Sabato</strong></td>
					<td style="width: 207px;">09 - 13</td>
					<td style="width: 207px;">chiuso</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Domenica</strong></td>
					<td style="width: 207px;">chiuso</td>
					<td style="width: 207px;">chiuso</td>
					</tr>

					</table>

			</div>
        </div>
		<div class="col-lg-6">
			<div class="p-5">
				<p>SE SIAMO ASSENTI
					è perché questo non è un negozio ma uno studio d’arte ceramica e un laboratorio, seguiamo indicativamente un orario di apertura come in tabella, ma siamo disponibili a incontravi su appuntamento.
					<br/><br/>
					Il giovedì, dalle 16:00 alle 17:30, vengono effettuate dimostrazioni gratuite di lavorazione (tornio, pittura, etc.).
					<br/>
					Lo studio è aperto al pubblico, su richiesta, anche in altri orari. </p>
			</div>
        </div>
		<div class="col-lg-6">
            <div class="p-5">
				
              <h2 class="display-4">Contatti</h2>
				

				<p>Via Campicuccioli, 26B
						50060 Paterno Pelago FI <br/>
						Tel.Fax 055.8301075 <br/>
						Cell. 347.7416184 <br/>
						info@ceramicagiusti.com
				</p>
				<p>Lo Studio si trova a circa 30 minuti in automobile da Firenze Sud e da Incisa e a circa 15 minuti in automobile da Pontassieve.</p>
				<div id="googlemap"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92218.49397645707!2d11.438688532039537!3d43.75566972313209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ba8c53fff240f%3A0xcff3a4fbb0acf1b2!2sStudio+Ceramico+Giusti!5e0!3m2!1sit!2sit!4v1496049520304" width="600" height="450" allowfullscreen="allowfullscreen"></iframe>
				</div>
            </div>
		</div>

        <div class="col-lg-6">
			<div class="p-5">

			  <h2 class="display-4">Scrivici</h2>
			  	
			</div>

			<div id="loading">
				<img src="<?php echo $generaurl; ?>img/loading.gif" alt="" />
			</div>

			<div id="successo" class="nonmostrare">
				<h2>Congratulazioni, hai inviato il messaggio con successo!</h2>

				<a href="<?php echo $generaurl; ?>it">Torna alla Home</a>

				<br/>
				<br/>
				<br/>
			</div>

			<form>

				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="in1" id="nome">
				</div>

				<div class="form-group">
					<label for="cognome">Cognome</label>
					<input type="text" class="in1" id="cognome">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="in1" id="email">
				</div>

				<div class="form-group">
					<label for="messaggio">Messaggio</label>
					<textarea id="messaggio" class="in1"></textarea>
				</div>


				<button type="button" id="invio" class="btn btn-primary rounded">Invia</button>

				<br/>
				<br/>

			</form>

        </div>

    </div>
    </div>
    </section>


	<?php include("../inc/footer.php"); ?>

  </body>

</html>
