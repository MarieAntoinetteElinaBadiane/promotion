<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- test -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- sdfd -->
    <title>ADMIN</title>
</head>
<body>
<form class="form-horizontal" class="form" action="" method="POST">
<fieldset>

<!-- Form Name -->
<legend>BIENVENUE ADMIN</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">Panneau de Contrôle</label>  
  <div class="col-md-4">
  <input id="fname" name="fname" type="text" placeholder="login" class="form-control input-md" required>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="save"></label>
  <div class="col-md-8">
    <button id="save" name="bloquer" class="btn btn-success">BLOQUER</button>
    <button id="clear" name="debloquer" class="btn btn-danger">DEBLOQUER</button>
  </div>
</div>

</fieldset>
</form>
<!-- qdqsd -->
    <?php
    echo "<table border=5>";
    echo"<tr> 
        <th>Nom</th>
        <th>Login</th>
        <th>Mot de Pass</th>
        </tr>";
    $lecture=file("users.txt");
    for ($i=0; $i <count($lecture) ; $i++) { 
        $nom[$i]=strtok($lecture[$i],"-");
        $login[$i]=strtok("-");
        $pass[$i]=strtok("-");
        $montant[$i]=strtok("\n");
        echo"
        <tr>
        <td>$nom[$i]</td>
        <td>$login[$i]</td>
        <td>$pass[$i]</td>
        </tr>
        ";
    }
    echo"</table>";
    if(isset($_POST['bloquer'])){
        $new= $_POST['fname'];
        $lecture=file("users.txt");
        $fichier=fopen('vide.txt','a+');
        for ($i=0; $i <count($lecture) ; $i++) { 
            $nom[$i]=strtok($lecture[$i],"-");
            $login[$i]=strtok("-");
            $mdp[$i]=strtok("\n");
            $rien[$i]=strtok($lecture[$i],"\n");
            if ($new==$login[$i]) {
                $fi=fopen('bloquer.txt','a+');
                fwrite($fi,"\n".$rien[$i]);
                $rien[$i]="";
            }
            if ($rien[$i]!="") {
                fwrite($fichier,$rien[$i]."\n");
            }
        }
        $users_file=file_get_contents("users.txt");
        $vide_file=file_get_contents("vide.txt");
        
    
        file_put_contents("users.txt",$vide_file);
         file_put_contents("vide.txt",$users_file);
         file_put_contents("vide.txt","");
         header("location:admin.php");
    }
    if(isset($_POST['debloquer'])){
        $new= $_POST['fname'];
        $lecture=file("bloquer.txt");
        $fichier=fopen('users.txt','a+');
        for ($i=0; $i <count($lecture) ; $i++) { 
            $nom[$i]=strtok($lecture[$i],"-");
            $login[$i]=strtok("-");
            $mdp[$i]=strtok("\n");
            $rien[$i]=strtok($lecture[$i],"\n");
            if ($new==$login[$i])
            {
                fwrite($fichier,$rien[$i]);
                $rien[$i]="";
            }
            if ($rien[$i]!="") {
                $fiche=fopen('vide.txt','a+');
                fwrite($fiche,$rien[$i]."\n");
            }
        }
        $bloquer_file=file_get_contents("bloquer.txt");
        $vide_file=file_get_contents("vide.txt");
        
    
        file_put_contents("bloquer.txt",$vide_file);
         file_put_contents("vide.txt",$bloquer_file);
         file_put_contents("vide.txt","");
         header("location:admin.php");
    }
    ?>
    <br>
    <br>
    <?php
    echo"UTILISATEURS BLOQUER";
        echo "<table border=5>";
        echo"<tr> 
            <th>Nom</th>
            <th>Login</th>
            <th>Mot de Passe</th>
            </tr>";
            $lecture=file("bloquer.txt");
            for ($i=0; $i <count($lecture) ; $i++) { 
                $nom[$i]=strtok($lecture[$i],"-");
                $login[$i]=strtok("-");
                $mdp[$i]=strtok("-");
                $rien[$i]=strtok($lecture[$i],"\n");
                echo"
                <tr>
                <td>$nom[$i]</td>
                <td>$login[$i]</td>
                <td>$mdp[$i]</td>
                </tr>
                ";
            }
            echo"</table>";
    ?>
</body>
</html>
