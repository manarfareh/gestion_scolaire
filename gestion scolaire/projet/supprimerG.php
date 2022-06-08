<?php 
session_start();
if($_SESSION["autoriser"]!="oui"){
   header("location:login.php");
   exit();
}
if(isset($_GET["classe"]))
{
    $classe=$_GET["classe"];
    $id=$_SESSION['id'];
    echo $classe;
    echo $id;
    include("connexion.php");
    
    $req="DELETE FROM enseignant_groupe WHERE id_prof=$id and classe='$classe' ";
   
    $reponse = $pdo->exec($req) ;
    echo $classe;
    echo $id;
     header("location:supprimerGroupe.php");
}
?>
