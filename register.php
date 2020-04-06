<?php
	require_once("bootstrap.php");



if(!empty($_POST)){
    
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

	}
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>register</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="netflixLogin netflixLogin--register">
		<div class="form form--login">
			<form class="formulier" action="" method="post">
				<h2 form__title>Sign up for an account</h2>

				<div class="form__error hidden">
					<p>
						Error. veld niet goed ingevuld
					</p>
				</div>

				<div class="form__field">
					<label for="email">Email</label>
					<input type="text" id="email" name="email">
				</div>
				<div class="form__field">
					<label for="naam">voornaam</label>
					<input type="text" id="naam" name="naam">
				</div>
				<div class="form__field">
					<label for="voornaam">naam</label>
					<input type="text" id="voornaam" name="voornaam">
				</div>
				<div class="form__field">
					<label for="password">Password</label>
					<input type="password" id="password" name="password">
				</div>

				<div class="form__field">
					<label for="password_confirmation">Bevestig password</label>
					<input type="password" id="password_confirmation" name="password_confirmation">
				</div>

				<div class="form__submit">
					<input type="submit" value="Sign me up!" class="btn btn--primary">
				</div>
			</form>
		</div>
	</div>
</body>

</html>