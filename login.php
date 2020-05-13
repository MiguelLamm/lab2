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
            $_SESSION['email']= $user['email'];
            $_SESSION['adm']= $user['admod'];
            
            echo '<script>window.location = "index.php"</script>';
        } else {
            $error= "Verkeerde email of wachtwoord ingevoerd. Probeer opnieuw";
        }

}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/screen.css">
</head>
<body>

    <div id="banner"></div>

    <div id="geen_lid"><p>Nog niet geregistreerd? <a href="register.php">Klik hier.</a></p></div>



   

    <form class="formulier" id="form" action="" method="post">
        <div class="aanmelden">
            <div id="form_title">
                <h2>Meld je aan bij FoodCart!</h2>
            </div>

            <div class="form__field">
                <label for="email">Email</label>
                <input type="text" class="input" id="email" name="email" placeholder="john.doe@email.com">
            </div>
            
            <div class="form__field">
                <label for="password">Password</label>
                <input type="password" class="input" id="wachtwoord" name="password" placeholder="*****">
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
            <div class="form__submit">
                <input type="submit" value="Sign in" class="submit">
            </div>
        </div>
    </form>

</body>
</html>