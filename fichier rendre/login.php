<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="test1.css">
    <script src="jquery/jquery.min.js"></script>
		<!---- jquery link local dont forget to place this in first than other script or link or may not work ---->
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!---- boostrap.min link local ----->
		
		<link rel="stylesheet" href="css/style.css">
		<!---- boostrap.min link local ----->

		<script src="js/bootstrap.min.js"></script>
		<!---- Boostrap js link local ----->
		
		<link rel="icon" href="images/icon.png" type="image/x-icon" />
		<!---- Icon link local ----->
		
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<!---- Font awesom link local ----->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!---*************welcome this is my simple empty strap by John Niro Yumang ******************* -->

    <title>LOGIN</title>
<!DOCTYPE html>
<html lang="en">


	<div class="container-fluid">
		<div class="container">
			<h2 class="text-center" id="title">BIENVENUE DANS NOTRE STORE</h2>
 			<hr>
			<div class="row">
				<div class="col-md-5">
 					<form role="form" method="post" action="">
						<fieldset>							
							<p class="text-uppercase pull-center"> ENREGISTREMENT</p>	
 							<div class="form-group">
								<input type="text" name="nom1" id="username" class="form-control input-lg" placeholder="nom1" required>
							</div>

							<div class="form-group">
								<input type="text" name="login1" id="email" class="form-control input-lg" placeholder="login1" required>
							</div>
							<div class="form-group">
								<input type="password" name="pass1" id="password" class="form-control input-lg" placeholder="Password1" required>
							</div>
 							<div>
 									  <input type="submit" class="btn btn-lg btn-primary   value="Register" name="enregistrer">
 							</div>
						</fieldset>
					</form>
				</div>
				
				<div class="col-md-2">
					<!-------null------>
				</div>
				
				<div class="col-md-5">
 				 		<form role="form" method="post" >
						<fieldset>							
							<p class="text-uppercase"> CONNECTION </p>	
 								
							<div class="form-group">
								<input type="text" name="login" id="username" class="form-control input-lg" placeholder="login" required>
							</div>
							<div class="form-group">
								<input type="password" name="pass" id="password" class="form-control input-lg" placeholder="Password" required>
							</div>
							<div>
								<input type="submit" class="btn btn-md" value="Conection" name="valider">
							</div>
								 
 						</fieldset>

				</form>	
				</div>
			</div>
		</div>
	</div>
	 
    <?php


if (isset($_POST['valider'])){

  $lecture=file("users.txt");
	$lecture1=file("admin.txt");
	$lecture2=file("bloquer.txt");
          for ($i=0; $i <count($lecture) ; $i++) { 
              $name[$i]=strtok($lecture[$i],"-");
              $login[$i]=strtok("-");
              $pass[$i]=strtok("\n");
              $name1[$i]=strtok($lecture1[$i],"-");
              $login1[$i]=strtok("-");
							$pass1[$i]=strtok("\n");
							$name2[$i]=strtok($lecture2[$i],"-");
              $login2[$i]=strtok("-");
              $pass2[$i]=strtok("\n");
        if($login[$i]== $_POST['login'] && $pass[$i]== $_POST['pass']){
          header("location:liste.php");
                }
        elseif($login1[$i]== $_POST['login'] && $pass1[$i]== $_POST['pass']){
        header("location:admin.php");
										}
				elseif($login2[$i]== $_POST['login'] && $pass2[$i]== $_POST['pass']){
				echo"Veuiller contacter l'admin car vous êtes bloquer";
											}
}
}
?>
<?php
if (isset($_POST['enregistrer'])){
	$new1= $_POST["nom1"];
	$new2= $_POST["login1"];
	$new3= $_POST["pass1"];
	$rr=file("users.txt");
          for ($i=0; $i <count($rr) ; $i++) { 
              $name[$i]=strtok($rr[$i],"-");
              $lo[$i]=strtok("-");
							if ($lo[$i]== $new2) {
								echo"Veuiller changer de login";
								$test=1;
							}
				
						}
	$lec=file("admin.txt");
	for ($i=0; $i <count($lec) ; $i++) {
		$nam[$i]=strtok($lec[$i],"-");
		$log[$i]=strtok("-");
		if ($log[$i]== $new2) {
			echo"Veuiller changer de login";
			$test=1;
		}
	}
	if ($test!=1) {
		$fichier=fopen('users.txt', 'a+');
		fwrite($fichier,"\n".$new1."-".$new2."-".$new3);
		header("location:login.php");
	}

}
?>
<?php
?>
</html>
</body>
</html>