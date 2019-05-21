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

        
  </table>

</body>
</html>
    </thead>
