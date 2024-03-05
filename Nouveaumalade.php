<?php
	require_once('connexion.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>NomTable - Formulaire Ajouter</title>
		<link rel="stylesheet" type="text/css" href="monstyle.css"></head>
	<body><center><div><br><div>
				<fieldset><legend><div><H1>Enregistrement Nouvelle Données</H1></div></legend><br>
				<div><form method="post" action="Insertmalade.php" enctype="multipart/form-data">
						<!-- <div>
							<label for="Colonne1" class="control-label">Libellé_Colonne1</label>
							<input type="text" name="Colonne1" id="NOM CLIENTS"/><br><br>
						</div> -->
						<div>
							<label for="nomM" class="control-label">nom Malade</label>
							<input type="text" name="nomM" id="nomM"/><br><br>
						</div>
						<div>
							<label for="prenomM" class="control-label">prenom Malade</label>
							<input type="text" name="prenomM" id="prenomM"/><br><br>
						</div>
						<div>
							<label for="DateNaissance" class="control-label">Date Naissance</label>
							<input type="date" name="DateNaissance" id="DateNaissance"/><br><br>
						</div>	
						<div>
							<label for="Poid" class="control-label">Poid</label>
							<input type="text" name="Poid" id="Poid"/><br><br>
						</div>
						<div>
							<label for="Temperature" class="control-label">Temperature</label>
							<input type="text" name="Temperature" id="Temperature"/><br><br>
						</div>
						<div>
							<label for="Tension" class="control-label">Tension</label>
							<input type="text" name="Tension" id="Tension"/><br><br>
						</div>		
						<div>
							<label for="DateDebut" class="control-label">Date Debut</label>
							<input type="date" name="DateDebut" id="DateDebut"/><br><br>
						</div>	
						<div>
							<label for="Statut" class="control-label">Statut</label>
							<input type="text" name="Statut" id="Statut"/><br><br>
						</div>	
						<div>
							<label for="idMedecin" class="control-label">id Medecin</label>
							<input type="text" name="idMedecin" id="idMedecin"/><br><br>
						</div>	
						<div>
							<label for="idHopital" class="control-label">id Hopital</label>
							<input type="text" name="idHopital" id="idHopital"/><br><br>
						</div>	
						
						
						
						<button type="submit">Enregistrer</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<button type="reset">Rétablir</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a href="Listemalade.php">Retour Sur Le Listing</a>
					</form></div></fieldset></div></div></center></body>
</html>