<?php
    function cherche($az){
        echo"Maximun ".$az;
    echo" 
    <div class='responsive-table-line' style='margin:0px auto;max-width:700px;'>
    <table class='table table-bordered table-condensed table-body-center' border=5>
    <thead>
    <tr>
    <th>NOM</th>
    <th>QUANTITÉ</th>
    <th>PRIX UNITAIRE</th>
    <th>TOTAL</th>
    </tr>
    </thead>
    <tbody>
        ";
    $elina=file("liste.txt");
    for ($i=0; $i <count($elina) ; $i++) { 
        $nom[$i]=strtok($elina[$i],"-");
        $nombre[$i]=strtok("-");
        $pu[$i]=strtok("\n");
        $montant[$i]=$pu[$i]*$nombre[$i];
        if ($az>=$pu[$i]) {
            if($nombre[$i]<10){
            
                echo" <tr>
                 <td class='bg-danger'>$nom[$i]</td>
                 <td class='bg-danger'>$nombre[$i]</td>
                 <td class='bg-danger'>$pu[$i]</td>
                 <td class='bg-danger'>$montant[$i]</td>
                 </tr>
                 ";
             }
             else{
            echo"
            <tr>
            <td'>$nom[$i]</td>
            <td>$nombre[$i]</td>
            <td>$pu[$i]</td>
            <td>$montant[$i]</td>
            </tr>
            ";
        }
    }
    }
    echo"
    </tbody>
    </table>
    </div> data-title='Valeur binaire'
    data-title='Valeur binaire'
    data-title='Valeur binaire'
    data-title='Valeur binaire'
    data-title='Valeur binaire'
    data-title='Valeur binaire'
    ";
    }
   ?>
   <?php
    function cherch($az){
        echo"Minimum ".$az;
        echo" 
        <div class='responsive-table-line' style='margin:0px auto;max-width:700px;'>
        <table class='table table-bordered table-condensed table-body-center' border=5>
        <thead>
        <tr>
        <th>NOM</th>
        <th>QUANTITÉ</th>
        <th>PRIX UNITAIRE</th>
        <th>TOTAL</th>
        </tr>
        </thead>
        <tbody>
            ";
        $elina=file("liste.txt");
        for ($i=0; $i <count($elina) ; $i++) { 
            $nom[$i]=strtok($elina[$i],"-");
            $nombre[$i]=strtok("-");
            $pu[$i]=strtok("\n");
            $montant[$i]=$pu[$i]*$nombre[$i];
            if ($az<=$pu[$i]){
                if($nombre[$i]<10){
            
           echo" <tr>
            <td class='bg-danger'>$nom[$i]</td>
            <td class='bg-danger'>$nombre[$i]</td>
            <td class='bg-danger'>$pu[$i]</td>
            <td class='bg-danger'>$montant[$i]</td>
            </tr>
            ";
        }
    else
            {
                echo"
                <tr>
                <td>$nom[$i]</td>
                <td>$nombre[$i]</td>
                <td>$pu[$i]</td>
                <td>$montant[$i]</td>
                </tr>
                ";
            }
        }
            
        }
        echo"
        </tbody>
        </table>
        </div>
        ";
        }
   ?>
   <?php
    function che($az){
        echo"Le nom de votre recherche est ".$az;
    echo" 
    <div class='responsive-table-line' style='margin:0px auto;max-width:700px;'>
    <table class='table table-bordered table-condensed table-body-center' border=5>
    <thead>
    <tr>
    <th>NOM</th>
    <th>QUANTITÉ</th>
    <th>PRIX UNITAIRE</th>
    <th>TOTAL</th>
    </tr>
    </thead>
    <tbody>
        ";
    $elina=file("liste.txt");
    for ($i=0; $i <count($elina) ; $i++) { 
        $nom[$i]=strtok($elina[$i],"-");
        $nombre[$i]=strtok("-");
        $pu[$i]=strtok("\n");
        $montant[$i]=$pu[$i]*$nombre[$i];
        if ($az==$nom[$i]) {
            if($nombre[$i]<10){
            echo"
            <tr>
            <td class='bg-danger'>$nom[$i]</td>
            <td class='bg-danger'>$nombre[$i]</td>
            <td class='bg-danger'>$pu[$i]</td>
            <td class='bg-danger'>$montant[$i]</td>
            </tr>
            ";
        }
        else{
            echo"
                <tr>
                <td>$nom[$i]</td>
                <td>$nombre[$i]</td>
                <td>$pu[$i]</td>
                <td>$montant[$i]</td>
                </tr>
                ";
        }
        }
        
    }
    echo"
    </tbody>
    </table>
    </div>
    ";
    }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>RECHERCHE</title>
</head>
<body>
<?php include("nav.php");?>
<br>
<br>
<br>
    <h1>RECHERCHE D'ARTICLE</h1>
    <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-info">Veuiller entrez vos les donnés de votre recherche</h3>
                            <div class="form-group">
                                <label class="text-info">min:</label><br>
                                <input type="text" name="min" id="username"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-info">max:</label><br>
                                <input type="text" name="max" id="password"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-info">NOM:</label><br>
                                <input type="text" name="nom" id="password"  class="form-control">
                            </div>
                            <div class="form-group">
                             <input type="submit" name="valider" class="btn btn-info btn-md" value="Chercher">
                            </div>
 
                        </form>

    <?php
     if (isset($_POST['valider'])){
    $max=$_POST['max'];
    $min=$_POST['min'];
    $nom=$_POST['nom'];
         if ($max!="" and $min==NULL and $nom==NULL) {
            cherche("$max");
         }
         elseif ($min!="") {
             cherch("$min");
         }
         elseif ($nom!="" and $max==NULL and $min==NULL) {
             che("$nom");
         }
         }
    ?>
</body>
</html>