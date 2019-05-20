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
<?php include("debut.php")?>
<div class="container">
<h1>AJOUT D'UN PLAT</h1>
<form action="ajout.php" method="POST">
  <div class="form-group has-success has-feedback">
    <label for="Name">NOM DU PLAT</label>
    <input aria-describedby="Success2Status" type="text" name="nom" id="text" class="form-control" placeholder="Nombre">
  </div>
  <div class="form-group has-error has-feedback">
    <label for="Password1">Nombre de plat</label>
    <input class="form-control" placeholder="Nombre"  type="number" name="quantité" id="tel">
  </div>
  <div class="form-group has-warning has-feedback">
    <label for="Email1">PRIX UNITAIRE</label>
    <input class="form-control"  placeholder="PU" type="number" name="prix" id="tel">
      </div>    
  <input type="submit" value="Ajouter" name="Ajouter"> 
</form>
</div>
<?php
if(isset($_POST['Ajouter']))
    ?>
<?php
 $nom = $_POST["nom"];
 $quantité = $_POST["quantité"];
 $prix= $_POST["prix"];
 $montant=$_POST["montant"];

 $fichier=fopen('liste.txt', 'a+');
 fwrite($fichier, "\n".$nom." ".$quantité." ".$prix." ".$montant);

    $fichier=fopen('liste.txt', 'r');
    echo"<table border=1>";
    echo"<tr>
    <th>Nom:</th>
    <th>Quantité:</th>
    <th>Prix:</th>
    <th>Montant:</th>
    </tr>";
    
    while(!feof($fichier)){
    $ligne=fgets($fichier);
    $colonne=explode("-",$ligne);
    for($i=0;$i<count($colonne);$i++)
    {
      $colonne[3]=$colonne[1]*$colonne[2];
      if($colonne[1]<10){
        echo"<td class='bg-danger'>".$colonne[$i]."</td>";
      }
      else{
        echo "<td>".$colonne[$i]."</td>";
      }
    }
    echo"</tr>";
    }
    fclose($fichier);
    echo"</table>";
    
        ?>
</body>
</html>
