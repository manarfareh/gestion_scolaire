<?php
 session_start();
 if($_SESSION["autoriser"]!="oui"){
	header("location:login.php");
	exit();

 }
 
else {
     $classe=$_REQUEST['classe'];
   
include("connexion.php");
$req="SELECT * FROM etudiant  ";

$reponse = $pdo->query($req);

if($reponse->rowCount()>0) {
	$outputs["etudiants"]=array();




	
while ($row = $reponse ->fetch(PDO::FETCH_ASSOC)) {
     if($row["Classe"]==$classe){
        $etudiant = array();
        $etudiant["cin"] = $row["cin"];
        $etudiant["nom"] = $row["nom"];
        $etudiant["prenom"] = $row["prenom"];
        $etudiant["adresse"] = $row["adresse"];
        $etudiant["email"] = $row["email"];
        $etudiant["classe"] = $row["Classe"];
         array_push($outputs["etudiants"], $etudiant);
     }
    }
    // success
    if($outputs["etudiants"]!=[])
    {
    $outputs["success"] = 1;
    }
    else{
     $outputs["success"] = 0;  
    }
     echo json_encode($outputs);
     
}
else {
    $outputs["success"] = 0;
    $outputs["message"] = "Pas d'étudiants";
    // echo no users JSON
    echo json_encode($outputs);
   
}
}
?>