<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="login.php">Acceuil</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="liste.php">Liste</a></li>
      <li><a href="ajout.php">Ajout</a></li>
      <li><a href="test.php">Modification</a></li>
      <li><a href="recherche.php">Recherche</a></li>
      <li><a href="supproduit.php">Suppression</a></li>
      <li><a href="admin.php">Droit</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Déconnection</a></li>
    </ul>
  </div>
</nav>

</body>
</html>
