<?php	
include('bootstrap.php');

if(isset($_SESSION['naam'])){
    echo '<script>window.location = "index.php"</script>';
}

    if(!empty($_POST)){
        // email en password opvragen
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // hash opvrage, op basis van email
        $conn = Db::getInstance();
        
        //check of rhash gelijk is aan hash uit databank
        $statement = $conn->prepare("select * from user where email = :email");
        $statement->bindParam(":email",$email);
        $result = $statement->execute();
        
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        
        //ja login
        if(password_verify($password,$user['pass'])){
            echo "yes man";
            session_start();
            
            $_SESSION['userid'] = $user['id'];
            $_SESSION['naam']= $user['naam'];
            $_SESSION['adm']= $user['admod'];
            
            echo '<script>window.location = "index.php"</script>';
        } else {
            echo "yeet lmao";
        }

}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="netflixLogin">
		<div class="form form--login">
			<form class="formulier" action="" method="post">
                <!--<img class="login__logo" src="images/spotlessFULL.png" alt="logo">-->

				<?php if (isset($error)): ?>
				<div class="form__error">
					<p>
						Verkeerde email of wachtwoord ingevoerd. Probeer opnieuw.
					</p>
				</div>
				<?php endif; ?>

				<div class="form__field">
					<label for="Email">Email</label>
					<input type="text" name="email" placeholder="john.doe@email.com">
				</div>
				<div class="form__field">
					<label for="Password">Password</label>
                    <input type="password" name="password" placeholder="*****">
                    
				</div>

				<div class="form__submit">
                    <input type="submit" value="Sign in" class="btn btn--primary">
				</div>
                
                <div class="form__submit">
                <input type="checkbox" id="rememberMe"><label for="rememberMe" class="label__inline">Remember me</label>
                </div>

				<div class="register">
                    <p>No account yet?</p>
                    <a href="register.php">Sign up here</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>