<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>Document</title>
</head>
<body>
<div class="container">
<h1>MODIFIER UN APPRENANT</h1>
<form action="modificationapprenant.php" method="POST">
  <div class="form-group has-success has-feedback">
    <label for="Name">Matricule</label>
    <input aria-describedby="Success2Status" type="text" name="matricule" id="text" class="form-control" placeholder="Nombre">
    </div>
    <div class="form-group has-warning has-feedback">
    <label for="Name">Nom</label>
    <input class="form-control"  placeholder="text" type="text" name="nom" id="text">
      </div>  
      <div class="form-group has-warning has-feedback">
    <label for="Name">Prenom</label>
    <input class="form-control"  placeholder="text" type="text" name="prenom" id="text">
      </div>  
      <div class="form-group has-warning has-feedback">
    <label for="naissance">Date de Naissannce</label>
    <input class="form-control"  placeholder="Nombre" type="date" name="naissance" id="naissance">
      </div>  
      <div class="form-group has-warning has-feedback">
    <label for="email">Adresse Email</label>
    <input class="form-control"  placeholder="email" type="email" name="email" id="email">
      </div>  
      <div> 
    <label for="number">Telephone</label>
    <input class="form-control"  placeholder="number" type="number" name="tel" id="tel">
      </div>  
      <div>
    <select name="statut">
    <option selected>Exclure</option>
    <option selected>Accepter</option>
    <option selected>Inscrire</option>
    <option selected>Present</option>
    <option selected>Abandont</option>
       </select>;
   </div>
   <?php
    echo"<select name='promotion'>";
    $aa=fopen("promotion.txt",'r');
    while(!feof($aa)){
        $ligne=fgets($aa);
       $colon=explode(",",$ligne);
       echo"<option value=".$colon[0].">".$colon[1]."</option>";
    }
   echo"</select>";
    ?>

                            <div class="form-group">
                             <input type="submit" name="modifier" class="btn btn-info btn-md" value="modifier">
                            </div>
</form>
</div>


<table class="table table-bordered">
 <thead>
 <td>Promotion</td>
 <td>Matricule</td> 
 <td>Nom</td> 
 <td>Prenom</td> 
 <td>Naissance</td> 
 <td>Email</td> 
 <td>Telephone</td> 
 <td>Statut</td>  
 </thead>


<?php
if(isset($_POST['modifier'])){
    $promotion= $_POST['promotion'];
    $matricule = $_POST["matricule"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $naissance =$_POST["naissance"];
    $email =$_POST["email"];
    $tel =$_POST["tel"];
    $statut =$_POST["statut"];
    

      $fichier=fopen('apprenant.txt', 'r');
      while(!feof($fichier)){
     $ligne=fgets($fichier);
     $colonne=explode(",",$ligne);
     if ($_POST["matricule"] == $colonne[1]) {
     $colonne[0]=$promotion;
     $colonne[2]=$nom;
     $colonne[3]=$pernom; 
     $colonne[4]=$naissance;
     $colonne[5]=$email;
     $colonne[6]=$tel;
     $colonne[7]=$statut;
     $li=$colonne[0].",".$colonne[1].",".$colonne[2].",".$colonne[3].",".$colonne[4].",".$colonne[5].
    ",".$colonne[6].",".$colonne[7]."\n";    
    }

    else {
        $li=$ligne;
    }
    $newligne=$newligne.$li;
    }
    
fclose($fichier);

$fichier=fopen('apprenant.txt', 'w+');
fwrite($fichier,$newligne);
fclose($fichier);
}  

 $fichier=fopen('apprenant.txt', 'r');
 while(!feof($fichier)){
 $ligne=fgets($fichier);
 $colonne=explode(",",$ligne);
 echo"
 <tr>
 <td>$colonne[0]</td>
 <td>$colonne[1]</td>
 <td>$colonne[2]</td>
 <td>$colonne[3]</td>
 <td>$colonne[4]</td>
 <td>$colonne[5]</td>
 <td>$colonne[6]</td>
 <td><button>$colonne[7]</button></td>
 </tr>
   ";
 
    }
    
    echo"</tr>";
    fclose($promo);
    echo"</table>";
  
      ?>
</body>
</html>
