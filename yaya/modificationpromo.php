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

<form id="login-form" class="form" action="modificationpromo.php" method="POST">
                            <h3 class="text-center text-info">Veuiller entrez vos informations</h3>
                            <div class="form-group">
                                <label class="text-info">MATRICULE:</label><br>
                                <input type="text" name="matricule" id="usename"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-info">NOM:</label><br>
                                <input type="text" name="nom" id="usename"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-info">MOIS:</label><br>
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
                            <div class="form-group">
                                <label class="text-info">ANNEE:</label><br>
                                <input type="number" name="année" required min="1900" max="4000">
                            </div>
                            <div class="form-group">
                             <input type="submit" name="modifier" class="btn btn-info btn-md" value="modifier">
                            </div>
 
                        </form>

                        <table class="table table-bordered">
                        <thead>
                        <td>Matricule</td> 
                        <td>Nom</td> 
                        <td>Mois</td> 
                        <td>Année</td> 
                        <td>Nombre d'apprenant</td> 
                        </thead>

                     <?php
                        
 if (isset($_POST['modifier'])) {
    $matricule = $_POST['matricule'];
     $nom = $_POST['nom'];
     $mois = $_POST['mois'];
     $année =$_POST['année'];
     $nombre=$_POST['nombre'];
     
      $fichier=fopen('promotion.txt', 'r');
    while(!feof($fichier)){
     $ligne=fgets($fichier);
    $colonne=explode(",",$ligne);
    if ($_POST["matricule"] == $colonne[0]) {
    $colonne[1]=$nom;
    $colonne[2]=$mois; 
    $colonne[3]=$année;
    $colonne[4]=$nombre;

    $li=$colonne[0].",".$colonne[1].",".$colonne[2].",".$colonne[3].",".$colonne[4]."\n";
    
    }
else {
    $li=$ligne;
}
$newligne=$newligne.$li;
}
    
fclose($fichier) ;

$fichier=fopen('promotion.txt', 'w+');
fwrite($fichier,$newligne);
fclose($fichier);
 }
$fichier=fopen('promotion.txt', 'r');
   while(!feof($fichier)){
    $ligne=fgets($fichier);
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
    fclose($fichier);
    echo"</table>";

 
        ?>
        </body>
        </html>
