<?php
	require_once('connexion.php');
	$Lib1=$_POST['Colonne1'];
	$Lib2=$_POST['Colonne2'];	
	$Lib3=$_POST['Colonne3'];	
	$Lib4=$_POST['Colonne4'];	
	$requete="INSERT INTO NomTable(Colonne1,Colonne2,Colonne3,Colonne4) values(?,?,?,?)";	
	$param=array($Lib1,$Lib2,$Lib3,$Lib4);	
	$resultat = $con->prepare($requete);
	$resultat->execute($param);	
	header("location:ListeTable.php");
?>