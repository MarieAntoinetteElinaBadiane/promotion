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
    <td>Matricule</td> 
    <td>Nom</td> 
    <td>Mois</td> 
    <td>Année</td> 
    <td>Nombre d'apprenant</td> 
    </thead>
    <?php
   $sona=fopen('promotion.txt', 'r');
   while(!feof($sona)){
    $ligne=fgets($sona);
   $colonne=explode(",",$ligne);
   $bb=fopen('apprenant.txt', 'r');
   $i=0;
   $cc=file('apprenant.txt');
   while(!feof($bb)){
    for($j=0; $j<count($cc); $j++) {
      $code[$j]=strtok($cc[$j], ",");
      if($code[$j]==$colonne[1]){
        $i++;
       }
     }
     break;
    }
   echo"
   <tr>
   <td>$colonne[0]</td>
   <td>$colonne[1]</td>
   <td>$colonne[2]</td>
   <td>$colonne[3]</td>
   <td>$i</td>
   </tr>
   ";
   }
      echo"</tr>";
      fclose($sona);
      echo"</table>";  
?>


<div class="container">
<h1>AJOUT D'UNE PROMOTION</h1>
<form action="ajoutpromotion.php" method="POST">
  <div class="form-group has-success has-feedback">
    <label for="Name">MATRICULE</label>
    <input aria-describedby="Success2Status" type="text" name="matricule" id="text" class="form-control" placeholder="Nombre">
  </div>
  <div class="form-group has-warning has-feedback">
    <label for="Name">NOM</label>
    <input class="form-control"  placeholder="Nombre" type="text" name="nom" id="text">
      </div>  
  <div class="form-group has-error has-feedback">
    <label for="mois">MOIS</label>
    <select name="mois">
    <option value="Janvier">Janvier</option>
    <option value="Février">Février</option>
    <option value="Mars">Mars</option>
    <option value="Avril">Avril</option>
    <option value="Mai">Mai</option>
    <option value="Juin">Juin</option>
    <option value="Juillet">Juillet</option>
    <option value="Août">Août</option>
    <option value="Septembre">Septembre</option>
    <option value="Octobre">Octobre</option>
    <option value="Novembre">Novembre</option>
    <option value="Décembre">Décembre</option>
    </select>
  </div>  

  <div class="form-group has-error has-feedback">
    <label for="année">ANNEE</label>
    <input type="number" name="année" required min="2020" max="2050">
  </div>  
  


  <input type="submit" value="Ajouter" name="Ajouter"> 
</form>
</div>
<?php
if(isset($_POST['Ajouter']))
    ?>
<?php

$matricule = $_POST["matricule"];
 $nom = $_POST["nom"];
 $mois = $_POST["mois"];
 $année =$_POST["année"];
 $nombre=$_POST["nombre"];
  $promo=fopen('promotion.txt', 'a+');

  fwrite($promo,"\n".$matricule.",".$nom.",".$mois.",".$année.",".$nombre);
?>

<table class="table table-bordered">
    <thead>
    <td>Matricule</td> 
    <td>Nom</td> 
    <td>Mois</td> 
    <td>Année</td> 
    <td>Nombre d'apprenant</td> 
    </thead>
    <?php
    $promo=fopen('promotion.txt', 'r');
    while(!feof($promo)){
     $ligne=fgets($promo);
    $colonne=explode(",",$ligne);
    $bb=fopen('apprenant.txt', 'r');
    $i=0;
    $cc=file('apprenant.txt');
    while(!feof($bb)){
      for($j=0; $j<count($cc); $j++) {
        $code[$j]=strtok($cc[$j], ",");
        if($code[$j]==$colonne[1]){
          $i++;
        }
      }
      break;
     }
    echo"
    <tr>
    <td>$colonne[0]</td>
    <td>$colonne[1]</td>
    <td>$colonne[2]</td>
    <td>$colonne[3]</td>
    <td>$i</td>
    </tr>
    ";
    }
       echo"</tr>";
       fclose($promo);
       echo"</table>";  
        ?>

</body>
</html>
</thead>
