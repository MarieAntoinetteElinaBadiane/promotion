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
<?php include("nav.php");?>
    <h1>SUPPRIMEZ </h1>
    <form action="supproduit.php" method="POST">
        <label >NOM</label> 
        <input type="text"name="nom" required>
        <input type=submit value="supprimer" name="sup">
    </form> 
    <br>
    <br>
    <?php
    echo"<table border=1>";
    echo"<tr>
    <th>Nom:</th>
    <th>Prix:</th>
    <th>Quantité:</th>
    <th>Montant:</th>
    </tr>";
$newligne="";
    if(isset($_POST['sup']))
{
    if(!empty($_POST['nom']))
    {
    $fichier=fopen('liste.txt', 'r');
    $nom=$_POST['nom'];
    while(!feof($fichier))
    {
       $ligne=fgets($fichier);
       $colonne=explode("-",$ligne);
      if($colonne[0]==$nom)
      {
          $supprim="";
      }
      else
      {
          $supprim=$ligne;
      }
      $newligne=$newligne.$supprim;
    }
    fclose($fichier);
    $fichier=fopen('liste.txt', 'w+');
    fwrite($fichier,$newligne);
    fclose($fichier);
}
$fichier=fopen('liste.txt', 'r');
    while(!feof($fichier)){
    $ligne=fgets($fichier);
    $colonne=explode("-",$ligne);
    echo "<tr>";
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
}
    echo"</table>";
        ?>
</body>
</html>