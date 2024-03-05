<?php
	require_once('connexion.php');
		$resultat = $con->query("SELECT * FROM malade");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" /><title>Liste des Eléments de La Table</title>
		<link rel="stylesheet" href="Formulaire1.css">
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des Eléments Enregistrés dans La Base de Données</H1></div></legend><br>
					<center><table border=2 cellspacing=2>
						<thead><tr>
								<th>IDMALADE  </th>
								<th>IDHOPITAL</th>
								<th>IDMEDECIN </th>							
								<th>NOMMALADE</th>
								<th>PRENOMMALADE</th>		
								<th>DATENAISSANCEMALADE</th>		
								<th>POIDSMALADE</th>		
								<th>TEMPERATUREMALADE</th>		
								<th>TENSIONARTERIELLE</th>		
								<th>DATEDEBUT</th>		
								<th>STATU</th>																	
								<th>Action</th>
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['IDMALADE'] ?></td>
									<td><?php echo $VBLETABLE['IDHOPITAL'] ?></td>
									<td><?php echo $VBLETABLE['IDMEDECIN'] ?></td>
									<td><?php echo $VBLETABLE['NOMMALADE'] ?></td>
									<td><?php echo $VBLETABLE['PRENOMMALADE'] ?></td>
									<td><?php echo $VBLETABLE['DATENAISSANCEMALADE'] ?></td>
									<td><?php echo $VBLETABLE['POIDSMALADE'] ?></td>
									<td><?php echo $VBLETABLE['TEMPERATUREMALADE'] ?></td>
									<td><?php echo $VBLETABLE['TENSIONARTERIELLE'] ?></td>
									<td><?php echo $VBLETABLE['DATEDEBUT'] ?></td>
									<td><?php echo $VBLETABLE['STATU'] ?></td>
									<td><!--  Action Editer un VBLETABLE -->
									<a href="ListeAffichejointure.php?IDMALADE=<?php echo $VBLETABLE['IDMALADE'] ?>">Liste Malade								
										<?php } ?>
									</td></tr>
						</tbody></table><br><br><a href="NouveauTable.php">Enregistrer Un Nouvel Auteur</a>&nbsp &nbsp &nbsp &nbsp &nbsp
						<a href="index.php">Return</a>
					</center></fieldset><hr></div></div></div>
	</body>
</html>