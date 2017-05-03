<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE> Pagina di prenotazione </TITLE>
		<link rel="stylesheet" type="text/css" href="tabelle_style.css">
	</HEAD>
	<BODY>

	<h1 align= "center"> PRENOTA LA TUA AULA O IL TUO LABORATORIO. </h1>
	<p>
		In questa pagina e' possibile effettuare l'aula o il laboratorio che ti serve.<br>
		Per fare questo devi prima effettuare il login.
	</p>
	
	
		<div style="text-align: center">
		<table width="40%" border="2" aling="center">
			<tr>
				<td>	<input type="button" id= "btn" onclick= "location.href='prenotaa.php'" value = "Prenotazioni"/> </td>
				<td>	<input type="button" id="btn1" onclick="location.href='modificapren.php'" value = "Annulla/Modifica prenotazione"/></td>
			</tr>
			<tr>
				<td><input type="button" id="btn2" onclick="location.href='stampa.php'" value = "Stampa report"/></td>
				<td><input type="" id="btn3" onclick="location.href='pagina_aiuto.html'" value="Aiuto"></td> 
			</tr>
			<tr>
				<td colspan='2' ><button name="home" id="btn4" onclick="location.href='http://www.jcmaxwell.it/max/'">HOME</button></td>
            </tr>
		</table>
		</div>
	</BODY>