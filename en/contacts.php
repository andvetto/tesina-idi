<!DOCTYPE html>
<html lang="en">

  <head>

	<title>Ceramica Giusti - Contacts</title>
	<META NAME="description" CONTENT="Contacts and schedules - Studio Ceramico Giusti, Ceramic Art Studio."> 
    <META NAME="keywords" CONTENT="Ceramic Art Studio, Art Pottery, Italian Art Pottery, Art Pottery, Art Pottery Tradition, ceramics, studio ceramics, porcelain, high fire ceramics, stoneware, arts and crafts, vases, Italian Pottery, Italian studio pottery, studio pottery, craft, landscape pottery, painted pottery, ceramic sculpture, contacts">

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
				<h2 class="display-4">Schedules</h2>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="p-5">

				<table>

					<tr>
					<td style="width: 177px;"></td>
					<td style="width: 207px;"><strong>Morning</strong></td>
					<td style="width: 207px;"><strong>Afternoon</strong></td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Monday</strong></td>
					<td style="width: 207px;">09 - 13</td>
					<td style="width: 207px;">15 - 19</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Tuesday</strong></td>
					<td style="width: 207px;">closed</td>
					<td style="width: 207px;">15 - 19</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Wednesday</strong></td>
					<td style="width: 207px;">09 - 13</td>
					<td style="width: 207px;">closed</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Thursday</strong></td>
					<td style="width: 207px;">closed</td>
					<td style="width: 207px; text-align: left;">15 - 19</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Friday</strong></td>
					<td style="width: 207px;">09 - 13</td>
					<td style="width: 207px;">15 - 19</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Saturday</strong></td>
					<td style="width: 207px;">09 - 13</td>
					<td style="width: 207px;">closed</td>
					</tr>
					<tr>
					<td style="width: 177px;"><strong>Sunday</strong></td>
					<td style="width: 207px;">closed</td>
					<td style="width: 207px;">closed</td>
					</tr>

					</table>

			</div>
        </div>
		<div class="col-lg-6">
			<div class="p-5">
				<p>IF WE ARE ABSENT
					is because this is not a shop but a ceramic art studio and a workshop, we follow a typical opening time as shown in the table, but we are available to meet you by appointment.
					<br/><br/>
					On Thursday from 16:00 to 17:30 free demonstrantions of work (lathe, painting etc.).
					<br/>
					We are willing to open the laboratory on customer request.</p>
			</div>
        </div>
		<div class="col-lg-6">
            <div class="p-5">
			
              <h2 class="display-4">Contacts</h2>
				
				<p class="mt-3">Via Campicuccioli, 26B
						50060 Paterno Pelago FI <br/>
						Tel.Fax 055.8301075 <br/>
						Cell. 347.7416184 <br/>
						info@ceramicagiusti.com
				</p>
				<p>We are about 30 minutes by car from South Florence and Incisa and about 15 minutes by car from Pontassieve.</p>
				<div id="googlemap"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92218.49397645707!2d11.438688532039537!3d43.75566972313209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ba8c53fff240f%3A0xcff3a4fbb0acf1b2!2sStudio+Ceramico+Giusti!5e0!3m2!1sit!2sit!4v1496049520304" width="600" height="450" allowfullscreen="allowfullscreen"></iframe>
				</div>
            </div>
		</div>

        <div class="col-lg-6">
			<div class="p-5">
					<h2 class="display-4">Write Us</h2>
						
			</div>

			<div id="loading">
				<img src="<?php echo $generaurl; ?>img/loading.gif" alt="" />
			</div>

			<div id="successo" class="nonmostrare">
				<h2>Congratulations, you have sent the message successfully!</h2>

				<a href="<?php echo $generaurl; ?>en">Back to Home</a>

				<br/>
				<br/>
				<br/>
			</div>

			<form>


				<div class="form-group">
					<label for="nome">First name</label>
					<input type="text" class="in1" id="nome">
				</div>

				<div class="form-group">
					<label for="cognome">Surname</label>
					<input type="text" class="in1" id="cognome">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="in1" id="email">
				</div>

				<div class="form-group">
					<label for="messaggio">Messagge</label>
					<textarea id="messaggio" class="in1"></textarea>
				</div>


				<button type="button" id="invio" class="btn btn-primary rounded">Send</button>

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
