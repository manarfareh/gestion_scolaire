<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCO-ENICAR modifier Etudiant</title>
    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JS-JQUERY -->
<script src="./assets/dist/js/jquery.min.js"></script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="modifierET.css" type="text/css" >
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    
    <a style="color:rgb(44, 124, 210);"  class="navbar-brand" href="#">SCO-Enicar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a style="color:rgb(44, 124, 210);"   class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="index.html" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Groupes</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="afficherEtudiants.php">Lister tous les étudiants</a>
                <a class="dropdown-item" href="afficherEtudiantsParClasse.php">Etudiants par Groupe</a>
                <a class="dropdown-item" href="#">Ajouter Groupe</a>
                <a class="dropdown-item" href="#">Modifier Groupe</a>
                <a class="dropdown-item" href="#">Supprimer Groupe</a>
      
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Etudiants</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="ajouterEtudiant.php">Ajouter Etudiant</a>
                <a class="dropdown-item" href="chercherEtudiant.php">Chercher Etudiant</a>
                <a class="dropdown-item" href="modifierEtudiant.php">Modifier Etudiant</a>
                <a class="dropdown-item" href="supprimerEtudiant.php">Supprimer Etudiant</a>
      
      
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Absences</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="saisirAbsence.php">Saisir Absence</a>
                <a class="dropdown-item" href="etatAbsence.php">État des absences pour un groupe</a>
              </div>
            </li>
      
            <li class="nav-item active">
              <a style="color:rgb(44, 124, 210);" class="nav-link" href="deconnexion.php">Se Déconnecter <span class="sr-only">(current)</span></a>
            </li>
      
          </ul>
        
      
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Saisir un groupe" aria-label="Chercher un groupe">
            <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher Groupe</button>
          </form>
        </div>
      </nav>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">SCO-Enicar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
        
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="index.html" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Groupes</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="afficherEtudiants.php">Lister tous les étudiants</a>
                <a class="dropdown-item" href="afficherEtudiantsParClasse.php">Etudiants par Groupe</a>
                <a class="dropdown-item" href="#">Ajouter Groupe</a>
                <a class="dropdown-item" href="#">Modifier Groupe</a>
                <a class="dropdown-item" href="#">Supprimer Groupe</a>
      
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Etudiants</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="ajouterEtudiant.php">Ajouter Etudiant</a>
                <a class="dropdown-item" href="chercherEtudiant.php">Chercher Etudiant</a>
                <a class="dropdown-item" href="modifierEtudiant.php">Modifier Etudiant</a>
                <a class="dropdown-item" href="supprimerEtudiant.php">Supprimer Etudiant</a>
      
      
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Absences</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="saisirAbsence.php">Saisir Absence</a>
                <a class="dropdown-item" href="etatAbsence.php">État des absences pour un groupe</a>
              </div>
            </li>
      
            <li class="nav-item active">
              <a class="nav-link" href="deconnexion.php">Se Déconnecter <span class="sr-only">(current)</span></a>
            </li>
      
          </ul>
        
      
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Saisir un groupe" aria-label="Chercher un groupe">
            <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher Groupe</button>
          </form>
        </div>
      </nav>
<body>
<main role="main">
  <br>
<p id="demo"></p>
  </div>
  </div>
  </div>
  </div> 
          <div class="container">
 <form id="myForm" method="POST"  >
 <div class="form-group">
     <label for="cin">CIN:</label><br>
     <input type="text" id="cin" name="cin"  class="form-control" required pattern="[0-9]{8}" title="8 chiffres"/>
    </div>
    <button  type="button" onclick="rechercher()" class="btn btn-primary ">rechercher</button>
    </form> 
</div> 
 <?php
  include("connexion.php");
  global $pdo;
 $sql= "SELECT * from etudiant";
$stmt = $pdo->prepare($sql);
$stmt->execute();
while($etudiants = $stmt->fetch(PDO::FETCH_ASSOC)){
  $cin = $etudiants['cin'];
  $nom = $etudiants['nom'];
  $prenom = $etudiants['prenom'];
  $email = $etudiants['email'];
  $classe = $etudiants['Classe'];
?>
   
              <?php
                 if($_SESSION["autoriser"]!="oui"){
                   header("location:login.php");
                   exit();
                  }
                  else {
                    if(isset($_POST['editpost'])){
                      $cinu=trim($_POST['cin']);
                      $nom=trim($_POST['nom']);
                      $prenom=trim($_POST['prenom']);
                      $email=trim($_POST['email']);
                      $adresse=trim($_POST['adresse']);
                      $pwd=trim($_POST['pwd']);
                      $cpwd=trim($_POST['cpwd']);
                      $id = $_POST['id'];
                      $sql= "UPDATE etudiant SET cin = :cin, email = :email, password = :password, cpassword = :cpassword, nom = :nom, prenom = :prenom, adresse = :adresse WHERE cin = :cin";
                      $stmt = $pdo->prepare($sql);
                      $stmt->execute([
                        ':cin' => $cinu,
                        ':email' => $email,
                        ':password' => md5($pwd),
                        ':cpassword' => md5($cpwd),
                        ':nom' => $nom,
                        ':prenom' => $prenom,
                        ':adresse' => $adresse,
                        ':id' => $id
                      ]);
                      $erreur ="L'ajout sera términer";
                    }
                  }
                }
                  
                  ?>
         <form action="modifierEtudiant.php" method="POST">
            <input type="hidden" name="id"  value="<?php echo $cin ?>" />
            <div class="bb">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
               Editer
            </button>
              </div>

<!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Editer Etudiant</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                     <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $cin ?>" />
                        <label for="nom">Nom:</label><br>
                        <input type="text" id="nom" name="nom" class="form-control" required autofocus>
                        </div>
                        <!--Prénom-->
                        <div class="form-group">
                        <label for="prenom">Prénom:</label><br>
                        <input type="text" id="prenom" name="prenom" class="form-control" required>
                        </div>
                        <!--Email-->
                        <div class="form-group">
                            <label for="email">Email:</label><br>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <!--CIN-->
                        <div class="form-group">
                        <label for="cin">CIN:</label><br>
                        <input type="text" id="cin" name="cin"  class="form-control" required />
                        </div>
                        <!--Password-->
                        <div class="form-group">
                        <label for="pwd">Mot de passe:</label><br>
                        <input type="password" id="pwd" name="pwd" class="form-control"  required />
                        </div>
                        <!--ConfirmPassword-->
                        <div class="form-group">
                            <label for="cpwd">Confirmer Mot de passe:</label><br>
                            <input type="password" id="cpwd" name="cpwd" class="form-control"  required/>
                        </div>
                        <!--Adresse-->
                        <div class="form-group">
                        <label for="adresse">Adresse:</label><br>
                        <textarea id="adresse" name="adresse" class="form-control" required>
                        </textarea>
                        </div>
                    </div>
                     <div class="modal-footer">
                       <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <button type="submit" name="editpost" value="editer" class="btn btn-primary">Update</button>
                     </div>
                     </div> 
                   </div>
                 </div>
               </div>
        </form>
 </table>
 <br>
 </div>

</div>
</div>

</main>     
            </div>

     
          </div>
   
            <!-- Filter: https://css-tricks.com/gooey-effect/ -->
            <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                    </filter>
                </defs>
            </svg>
            
            
        </div>
        
            </form>
            </form>
            </div>
        
            </div>
            <script>
    function rechercher()
    {
        var xmlhttp = new XMLHttpRequest();
        var url="http://localhost/mini_projet/rechercher.php";
        
        //Envoie Req
        xmlhttp.open("POST",url,true);
        form=document.getElementById("myForm");
        formdata=new FormData(form);
        xmlhttp.send(formdata);


     //Traiter la reponse
     xmlhttp.onreadystatechange=function()
            {  // alert(this.readyState+" "+this.status);
                if(this.readyState==4 && this.status==200){
                
                    myFunction(this.responseText);
                    alert(this.responseText);
                    console.log(this.responseText);
                    //console.log(this.responseText);
                }
            }


    //Parse la reponse JSON
	function myFunction(response){
		var obj=JSON.parse(response);
        //alert(obj.success);

        if (obj.success==1)
        {
		var arr=obj.etudiants;
		var i;
		var out="<table  bordre=1><tr><th> CIN</th><th> Nom </th> <th> Prénom </th><th>adresse</th><th> Email</th><th>Classe </th></tr>"


		for ( i = 0; i < arr.length; i++) {
			out+="<tr><td>"+
			arr[i].cin +
			"</td><td>"+
			arr[i].nom+
			"</td><td>"+
			arr[i].prenom+
			"</td><td>"+
			arr[i].adresse+
			"</td><td>"+
			arr[i].email+
      "</td><td>"+
      arr[i].classe+
			"</td></tr> " ;
		}
		out +="</table>";
		document.getElementById("demo").innerHTML=out;
    document.getElementById("demo").style.backgroundColor="white";
   
       }
       else
           {
        document.getElementById("demo").innerHTML="cin introuvable!";
        document.getElementById("demo").style.backgroundColor="red";
           }

    }
}
</script>          
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>