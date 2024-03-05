<?php 
	
	try {
	$bd = new pdo('mysql:host=localhost;dbname=GestionCovid','root','');
	$req = $bd->prepare("select M.NomM, Me.nomMed, H.nomH from malade M,medecin Me, Hopital H where M.idMedecin=Me.idMedecin and M.idHopital=H.idHopital");
	$req->setFetchMode(PDO::FETCH_ASSOC);
	$req->execute();
	$tab = $req->fetchAll();
	$req->closeCursor();

	} catch (Exception $e) {

		die('Une erreur c\'est produit'. $e->getMessage());

	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="Monstyle.css">
 	<title>Afficher les malades</title>
 </head>
 <body>
	<fieldset><legend><div><H1>Liste des Eléments Enregistrés dans La Base de Données</H1></div></legend><br>
		<center><table border=10 >
			<tr>
				<th>Nom Malade</th>
				<th>Nom Medecin</th>
				<th>Nom Hopital</th>
			</tr>
			<?php for ($i=0; $i <count($tab) ; $i++) {  ?>
				<tr>
					<td><?php echo $tab[$i]['NomM']; ?></td>
					<td><?php echo $tab[$i]['nomMed']; ?></td>
					<td><?php echo $tab[$i]['nomH']; ?></td>
				</tr>
			<?php } ?>
		</center></table>
	</fieldset>
 </body>
 </html>