<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>Document</title>
    <?php include("nav.php")?>
    <br>
    <br>
    <br>
    <br>
    <br>
    
</head>
<body>
<form id="login-form" class="form" action="test.php" method="POST">
                            <h3 class="text-center text-info">Veuiller entrez vos informations</h3>
                            <div class="form-group">
                                <label class="text-info">NOM:</label><br>
                                <input type="text" name="nom" id="usename"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-info">PU:</label><br>
                                <input type="text" name="pu" id="password"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-info">NOMBRE:</label><br>
                                <input type="text" name="quantité" id="password"  class="form-control">
                            </div>
                            <div class="form-group">
                             <input type="submit" name="modifier" class="btn btn-info btn-md" value="modifier">
                            </div>
 
                        </form>
                     <?php
                         echo "<table border=5>";
                         echo"<tr> 
                             <th>nom</th>
                             <th>quantité</th>
                             <th>pu</th>
                             <th>montant</th>
                             </tr>";
 if (isset($_POST['modifier'])) {
     $nom = $_POST['nom'];
     $pu = $_POST['pu'];
     $qtit =$_POST['quantité'];
      $fichier=fopen('liste.txt', 'r');
    while(!feof($fichier)){
     $ligne=fgets($fichier);
     //echo $_POST['nom'];
    $colonne=explode("-",$ligne);
    if ($_POST['nom'] == $colonne[0]) {
    $colonne[0]=$nom;
    $colonne[2]=$pu; 
    $colonne[1]=$qtit;
    $colonne=implode("-",$colonne);

    $li=$colonne."\n";
    echo $li;
}
else {
    $li=$ligne;
}
$newligne=$newligne.$li;
}   
fclose($fichier);
$fichier=fopen('liste.txt','w+');
fwrite($fichier,$newligne);
fclose($fichier);
    $fichier=fopen('liste.txt', 'r');
    while(!feof($fichier)){
     $ligne=fgets($fichier);
    $colonne=explode("-",$ligne);
      echo "<tr>";
    for($i=0;$i<count($colonne);$i++)
    {
      $colonne[3]=$colonne[1]*$colonne[2];
      if($colonne[1]<10){
        echo "<td class='bg-danger'>".$colonne[$i]."</td>";
      }
      else{
        echo "<td>".$colonne[$i]."</td>";
      }
    
    }
    echo"</tr>";
    }
    fclose($fichier);
    echo"</table>";
}
        ?>
        </body>
        </html>