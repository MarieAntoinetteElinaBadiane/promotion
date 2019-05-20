<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="yaya.css">
    
</head>
<body>
<?php include("nav.php")?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <?php
    echo"<table border=1>";
    echo"<tr>
    <th>Nom:</th>
    <th>Login:</th>
    <th>Mot de passe</th>
    </tr>";
    $fichier=fopen('users.txt', 'r');
    while(!feof($fichier)){
     $ligne=fgets($fichier);
    $colonne=explode("-",$ligne);
    echo "<tr>";
    for($i=0;$i<count($colonne);$i++)
    {
        echo "<td>".$colonne[$i]."</td>";
      }
      echo"</tr>";
    }
    fclose($fichier);
    echo"</table>";

    if(colonne[4]=0){
        echo"<table border=1>";
        echo"<tr>
    <td><a href='gett.php'?bl='bloquer' <?php echo "($colonne[0])";?>>bloquer</a></td>
    </tr>";

        if(isset($_GET['bl'])){
        $rbl=$_GET['bl'];
        if($rbl==$colonne[4]){
            $colonne[4]=1;
}
}
    }
    
else(colonne[4]=1){
    echo"<table border=1>";
    echo"<tr>
<td><a href='gett.php'?blq='débloquer' <?php echo "($colonne[0])";?>>débloquer</a></td>
</tr>";

         if(isset($_GET['blq'])){
         $rdlq=$_GET['blq'];
         if($rdlq==$colonne[4]){
          $colonne[4]=0;
}
}
}
        ?>
        </nav>
</body>
</html>