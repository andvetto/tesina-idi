	//form
		
		function InviaDati() //invia i dati al database
		{	//recupero valori dai campi del form
			var nome = $("#nome").val();		
			var cognome = $("#cognome").val();
			var email = $("#email").val();
			var messaggio = $("#messaggio").val();
			
			//variabile contatore errori
			var errore = 0;
			
		//controlli: se ci sono errori incrementa la variabile contatore errori e assegna la classe errore al campo errato
			
			//controllo campi vuoti
			if(nome=='')
			{
				errore++
				$("#nome").addClass("errore");
			} else{
				$("#nome").removeClass("errore");
			}
			
			if(cognome=='')
			{
				errore++
				$("#cognome").addClass("errore");
			} else{
				$("#cognome").removeClass("errore");
			}
			
			if(messaggio=='')
			{
				errore++
				$("#messaggio").addClass("errore");
			} else{
				$("#messaggio").removeClass("errore");
			}

			if(email=='')
			{
				errore++
				$("#email").addClass("errore");
			} else{
				$("#email").removeClass("errore");
			}
			
			//controllo email corretta
			var controlloChiocciola = email.lastIndexOf("@"); //controlla che nella mail sia presente la @
			var controlloPunto = email.lastIndexOf("."); //controlla che nella mail sia presente un punto
			if (controlloChiocciola < 0 || controlloPunto < 0)
			{
				errore++
				$("#email").addClass("errore");
			} else{
				$("#email").removeClass("errore");
			}
						
			
			if(errore === 0) //se non ci sono errori procede all'invio dei dati
			{
					var config = {
						 url:  "../inc/salva_messaggio.php"
						,type: "POST"
						,data:{
								nome: nome
								, cognome: cognome
								, email: email
								, messaggio: messaggio
							  }
						,dataType: "json"
						,beforeSend:OnBeforeSend
						,success:onSalvataggio
						,error:onErrore
						,complete: OnComplete						
					};
					
					$.ajax(config);
			}	
		}
		
		function onErrore(errore)
		{
			console.log(errore);
			alert(errore.responseText);
		}

		function OnBeforeSend()
		{
			$("#loading").show();
		}
		
		function OnComplete()
		{
			$("#loading").hide();
		}
		
		function onSalvataggio(risposta)
		{
			if(risposta.stato=='OK')
			{
				$("#successo").show();
				$("form").hide();			
			}
		}
		
		function onLoad()
		{
			$("#invio").on('click',InviaDati);			
		}

		$(document).ready(onLoad);
