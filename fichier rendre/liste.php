<style>
@media (max-width: 500px) {
.responsive-table-line td:before { content: attr(data-title); }
.responsive-table-line table, 
.responsive-table-line thead, 
.responsive-table-line tbody, 
.responsive-table-line th, 
.responsive-table-line td, 
.responsive-table-line tr { 
display: block; 
}

.responsive-table-line thead tr { 
display:none;
}
.responsive-table-line td { 
position: relative;
border: 0px solid transparent;
padding-left: 50% !important; 
white-space: normal;
text-align:right; 
}
 
.responsive-table-line td:before { 
position: absolute;
top: 0px;
left: 0px;
width: 45%; 
padding-right: 15px; 
height:100%;
white-space: nowrap;
text-overflow: ellipsis !important;
overflow:hidden !important;
text-align:left;
background-color:#f8f8f8;
padding:2px;
}
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>LISTE DES PRODUITS</title>
</head>
<body>
<?php include("nav.php");?>
<br>
<br>
<br>
<div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
<table class="table table-bordered table-condensed table-body-center" border=5>
<thead>
<tr>
<th>NOM</th>
<th>QUANTITÉ</th>
<th>PRIX UNITAIRE</th>
<th>TOTAL</th>
</tr>
</thead>
<tbody>
<?php
$lecture=file("liste.txt");
for ($i=0; $i <count($lecture) ; $i++) { 
    $nom[$i]=strtok($lecture[$i],"-");
    $nombre[$i]=strtok("-");
    $pu[$i]=strtok("-");
    $montant[$i]=$pu[$i]*$nombre[$i];
    if ($nombre[$i]<10){
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
?>
 </tbody>

</table>
</div>
</body>
</html>