<?php
	require_once('connexion.php');
	$Lib1=$_POST['nomM'];
	$Lib2=$_POST['prenomM'];	
	$Lib3=$_POST['DateNaissance'];	
	$Lib4=$_POST['Poid'];	
	$Lib5=$_POST['Temperature'];	
	$Lib6=$_POST['Tension'];	
	$Lib7=$_POST['DateDebut'];	
	$Lib8=$_POST['Statut'];	
	$Lib9=$_POST['idMedecin'];	
	$Lib10=$_POST['idHopital'];	
	$requete="INSERT INTO malade(nomM,prenomM,DateNaissance,Poid,Temperature,Tension,DateDebut,Statut,idMedecin,idHopital) values(?,?,?,?,?,?,?,?,?,?)";	
	$param=array($Lib1,$Lib2,$Lib3,$Lib4,$Lib5,$Lib6,$Lib7,$Lib8,$Lib9,$Lib10);	
	$resultat = $con->prepare($requete);
	$resultat->execute($param);	
	header("location:Listemalade.php");
?>