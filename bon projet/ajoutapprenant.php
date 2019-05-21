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


<table class="table table-bordered">
    <thead>
    <td>Promo</td>
    <td>Matricule</td> 
    <td>Nom</td> 
    <td>Prenom</td> 
    <td>Date de naissance</td> 
    <td>adresse email</td> 
    <td>Telephone</td> 
    <td>Statut</td>  
    </thead>
    <?php
   $appre=fopen('apprenant.txt', 'r');
   while(!feof($appre)){
    $ligne=fgets($appre);
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
    fclose($appre);
    echo"</table>";     
        ?>
<div class="container">
<h1>AJOUT D'UN APPRENANT</h1>
<form action="ajoutapprenant.php" method="POST">


 </div> 
  <div class="form-group has-success has-feedback">
    <label for="Name">Matricule</label>
    <input aria-describedby="Success2Status" type="text" name="matricule" id="text" class="form-control" placeholder="Nombre">
    </div>
    <div class="form-group has-warning has-feedback">
    <label for="Name">Nom</label>
    <input class="form-control"  placeholder="Nombre" type="text" name="nom" id="text">
      </div>  
      <div class="form-group has-warning has-feedback">
    <label for="Name">Prenom</label>
    <input class="form-control"  placeholder="Nombre" type="text" name="prenom" id="text">
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
      
     
   <select name="statut">
   <option selected>Accepter</option>
   <option selected>Inscrire</option>
   <option selected>Present</option>
      </select>;
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



  <input type="submit" value="Ajouter" name="Ajouter"> 
</form>
</div>
<?php
if(isset($_POST['Ajouter'])){
    $promotion= $_POST['promotion'];
    echo $promotion;
}   ?>

<?php
     $promotion =$_POST["promotion"]; 
      $matricule = $_POST["matricule"];
      $nom = $_POST["nom"];
      $prenom = $_POST["prenom"];
      $naissance =$_POST["naissance"];
      $email =$_POST["email"];
      $tel =$_POST["tel"];
      $statut =$_POST["statut"];
         $promo=fopen('apprenant.txt', 'a+');
        fwrite($promo,"\n".$promotion.",".$matricule.",".$nom.",".$prenom.",".$naissance.",".$email.",".$tel.",".$statut);

?>

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
     $promo=fopen('apprenant.txt', 'r');
     while(!feof($promo)){
     $ligne=fgets($promo);
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
