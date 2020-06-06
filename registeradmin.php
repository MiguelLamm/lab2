<?php
	require_once("bootstrap.php");



if(!empty($_POST)){
    if(!empty($_POST['email'])){
		if(!empty($_POST['password'])){
			if(!empty($_POST['password_confirmation'])){
				if(!empty($_POST['naam'])){
					if(!empty($_POST['voornaam'])){
						if(!empty($_POST['bedrijf'])){

						$user = new User();
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    $user->setPasswordConfirmation($_POST['password_confirmation']);
    $user->setNaam($_POST['naam']);
	$user->setVoornaam($_POST['voornaam']);
	$user->setBedrijf($_POST['bedrijf']);
    $result = $user->register2();
    if ($result = true){
		session_start();
		$_SESSION['userid'] = $result['id'];
			$_SESSION['naam']= $result['naam'];
            $_SESSION['bedrijf']= $result['bedrijf'];
            $_SESSION['admin']= $result['admod'];
			
			if($result === true){
		echo '<script>window.location = "index.php"</script>';
			}
	}
    else{
		$error = "Er ging iets mis!";
	}
						}
					}
				} else{
					$error = "Er ging iets mis!";
				}
			} else{
				$error = "Er ging iets mis!";
			}
		} else{
			$error = "Er ging iets mis!";
		}
	} else{
		$error = "Er ging iets mis!";
	}
	
	
    echo $_POST['school'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Foodcart - Register</title>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/screen.css">
</head>

<body>

	<div id="banner"></div>

	<div id="geen_lid"><p>Al geregistreerd? <a href="login.php">Inloggen.</a></p></div>

	<form class="formulier" id="form" action="" method="post">
		<div class="aanmelden">

			<div id="form_title">
				<h2>Cateringdienst? Maak hier je account aan!</h2>
			</div>

			<div class="form__field">
				<label for="email">Email</label>
				<input type="text" class="input" id="email" name="email">
			</div>
			<div class="form__field">
				<label for="naam">Achternaam</label>
				<input type="text" class="input" id="naam" name="naam">
			</div>
			<div class="form__field">
				<label for="voornaam">Voornaam</label>
				<input type="text" class="input" id="voornaam" name="voornaam">
			</div>

			<div class="form__field">
				<label for="bedrijf">Bedrijf</label>
                <input type="text" class="input" id="bedrijf" name="bedrijf">
			</div>
			
			<div class="form__field">
				<label for="password">Wachtwoord</label>
				<input type="password" class="input" id="wachtwoord" name="password">
			</div>

			<div class="form__field">
				<label for="password_confirmation">Bevestig wachtwoord</label>
				<input type="password" class="input" id="wachtwoord_confirmatie" name="password_confirmation">
			</div>

			

			<div class="form__submit">
				<input type="submit" value="Schrijf in!" class="submit">
			</div>


			<?php
if(isset($error) && !empty($error)){
    ?>
	<div class="form__error hidden">
    <span class="error"><?= $error; ?></span>
	</div>
    <?php
}
?>
		

		</div>
	</form>

</body>

</html>