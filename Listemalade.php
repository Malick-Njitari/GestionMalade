<?php
		require_once('connexion.php');
		$resultat = $con->query("SELECT * FROM malade");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" /><title>Liste des Eléments de La Table</title>
		<link rel="stylesheet" href="Monstyle.css">
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des Eléments Enregistrés dans La Base de Données</H1></div></legend><br>
					<center><table border=2 cellspacing=2>
						<thead><tr>
								<!-- <th>idMalade</th> -->
								<th>nomM</th>
								<th>prenomM</th>							
								<th>DateNaissance</th>							
								<th>Poid</th>
								<th>Temperature</th>	
								<th>Tension</th>	
								<th>DateDebut</th>	
								<th>Statut</th>	
								<th>idMedecin </th>		
								<th>idHopital </th>
								<!-- <th>Libellé_Colonne5</th>					
								<th>ACTIONS</th> -->
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									
									<td><?php echo $VBLETABLE['nomM'] ?></td>
									<td><?php echo $VBLETABLE['prenomM'] ?></td>
									<td><?php echo $VBLETABLE['DateNaissance'] ?></td>
									<td><?php echo $VBLETABLE['Poid'] ?></td>
									<td><?php echo $VBLETABLE['Temperature'] ?></td>
									<td><?php echo $VBLETABLE['Tension'] ?></td>
									<td><?php echo $VBLETABLE['DateDebut'] ?></td>
									<td><?php echo $VBLETABLE['Statut'] ?></td>
									<td><?php echo $VBLETABLE['idMedecin'] ?></td>
									<td><?php echo $VBLETABLE['idHopital'] ?></td>
									
																							
										<?php } ?>
									</tr>
						</tbody></table><br><br><a href="Nouveaumalade.php">Enregistrer Un Nouvel malade</a>
					</center></fieldset><hr></div></div></div>
	</body>
</html>