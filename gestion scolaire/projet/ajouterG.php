<?php
 session_start();
 if($_SESSION["autoriser"]!="oui"){
	header("location:login.php");
	exit();
 }
else {
$classe=$_REQUEST['classe'];
$matiere=$_REQUEST['matiere'];
$id=$_SESSION["id"];



include("connexion.php");
         
            
            $req="insert into enseignant_groupe values ($id,'$matiere','$classe')";
            $reponse = $pdo->exec($req) or die("error");
            $erreur ="OK";
         
         echo $erreur;
}
?>