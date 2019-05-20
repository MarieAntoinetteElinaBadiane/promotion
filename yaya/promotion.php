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


</body>
</html>
</thead>
