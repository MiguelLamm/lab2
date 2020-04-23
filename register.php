<?php
	require_once("bootstrap.php");



if(!empty($_POST)){
    if(!empty($_POST['email'])){
		if(!empty($_POST['password'])){
			if(!empty($_POST['password_confirmation'])){
				if(!empty($_POST['naam'])){
					if(!empty($_POST['voornaam'])){

						$user = new User();
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    $user->setPasswordConfirmation($_POST['password_confirmation']);
    $user->setNaam($_POST['naam']);
    $user->setVoornaam($_POST['voornaam']);
    $result = $user->register();
    if ($result = true){
		session_start();
            
            $_SESSION['naam']= $result['naam'];
            
		echo '<script>window.location = "index.php"</script>';

	}
    else{
		$error = "Er ging iets mis!";
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
    
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>register</title>
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
				<h2>Sign up for an account</h2>
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
				<label for="password">Password</label>
				<input type="password" class="input" id="wachtwoord" name="password">
			</div>

			<div class="form__field">
				<label for="password_confirmation">Bevestig password</label>
				<input type="password" class="input" id="wachtwoord_confirmatie" name="password_confirmation">
			</div>

			<div class="form__submit">
				<input type="submit" value="Sign me up!" class="submit">
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