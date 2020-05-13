<?php
    require_once('bootstrap.php'); 

    session_start();
    if(!empty($_POST)){

      $u = new User();
      $newEmail = $_POST['email'];
      $voornaam = $_POST['voornaam'];
      $achternaam = $_POST['achternaam'];
      $school = $_POST['school'];
      $newpassword = $_POST['newpassword'];
      $me = $_SESSION['userid'];

      $u->setEmail($newEmail); 
      $u->setVoornaam($voornaam); 
      $u->setNaam($achternaam); 
      $u->setSchool($school); 
      $u->setPassword($newEmail); 
      $u->setId($me); 

      $result = $u->updateProfile();

      if($result === true){
          echo "gelukts";
      }else{
          echo $result;
      }
  }

  //$conn = Db::getInstance();
  $conn= new PDO("mysql:host=localhost;dbname=lab2;","root","", null);
  $statement = $conn->prepare("select * from user where id = '" . $_SESSION['userid'] . "'");
  $statement->execute();
  if( $statement->rowCount() > 0){
      $user = $statement->fetch(); // array van resultaten opvragen
  };
  

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Foodcart - Profiel Aanpassen</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/screen.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="theme-color" content="#272727">
</head>

<body>

  <div class="topbar">
    <a href="index.php"><div class="logo"> </div></a>
    <p class="title">Profiel Updaten</p>
    <a href="profile.php"><div class="account"><img src="images/user.svg" /> </div> </a>
  </div>

  <div class="sidebar">
      
      <div class="nav">
        <a href="index.php"> <p class="selected"> <img src="images/dashboard2.svg" />  Overview</p> </a>
        <a href="orders.php"> <p> <img src="images/order.svg"/>  Orders</p> </a>
        <a href="clients.php"> <p> <img src="images/support.svg"/>  Clients</p> </a>
        <a href="menus.php"> <p> <img src="images/food.svg"/>  Menus</p> </a>
      </div>

      <div class="logout">
      <a href="logout.php"> <p> <img src="images/logout.svg"/>  Logout</p> </a>
      </div>
  </div>

  <div class="container">

  <form class="formulier" id="form" action="" method="post">
		<div class="aanmelden">

			<div class="form__field">
				<label for="email">Email</label>
				<input type="text" class="input" id="email" name="email" value="<?php echo $user['email'] ?>">
			</div>
			<div class="form__field">
				<label for="naam">Achternaam</label>
				<input type="text" class="input" id="naam" name="achternaam" value="<?php echo $user['naam'] ?>">
			</div>
			<div class="form__field">
				<label for="voornaam">Voornaam</label>
				<input type="text" class="input" id="voornaam" name="voornaam" value="<?php echo $user['voornaam'] ?>">
			</div>

			<div class="form__field">
				<label for="school">School</label>
				<select class="input" name="school">
        <option value="<?php echo $user['school'] ?>">Geen verandering</option>
				<option value="bimsemM">Bimsem Mechelen</option>
				<option value="urselinnenM">Urselinnen Mechelen</option>
				<option value="lyceumM">Lyceum Mechelen</option>
				</select>
			</div>
			
			<div class="form__field">
				<label for="password">Password</label>
				<input type="password" class="input" id="wachtwoord" name="newpassword">
			</div>

			<div class="form__submit">
				<input type="submit" value="Update" class="submit">
			</div>

  </div>

</body>


</html>