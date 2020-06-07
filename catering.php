<?php
    //require_once('bootstrap.php');
    include_once("classes/user.class.php");
    include_once("classes/order.class.php");

    session_start();
    $c = $_SESSION['adm'];
    if($c == 0){
      header("location: login.php");
    }

    $BD = date('Y-m-d', strtotime("now"));
    $ED = date('Y-m-d', strtotime("+1 week"));

    $order = new Order();
    $order->setBD($BD);
    $order->setED($ED);
    $result = $order->getOrders();
  
    //var_dump($result);
    //var_dump($result2);
    
   

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Foodcart - Catering</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/screen.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="theme-color" content="#272727">
</head>

<body>
<div class="topbar">
    <a href="index.php"><div class="logo"> </div></a>
    <p class="title">Overzicht Bestellingen</p>
    <a href="profile.php"><div class="account"><img src="images/user.svg" /> </div> </a>
  </div>

  <div class="sidebar">
      
      <div class="nav">
      <a href="index.php"> <p> <img src="images/dashboard.svg" />  Overview</p> </a>
        <a href="catering.php"> <p class="selected"> <img src="images/order2.svg"/>  Cateraars</p> </a>
        <a href="menus.php"> <p> <img src="images/food.svg"/>  Menus</p> </a>
      </div>

      <div class="logout">
      <a href="logout.php"> <p> <img src="images/logout.svg"/>  Logout</p> </a>
      </div>
  </div>

  <div class="container">
  
  <?php foreach($result as $r): ?>
    <?php 
    echo "<ul class='cateringul'>";
    echo "<il>";
    echo "<h1>".$r['deliverydate']."</h1>";
    echo "</li>";
    echo "<il>";
    echo "<h2>".$r['school']."</h2>";
    echo "</li>";
    echo "<il class ='lititle'>";
    echo $r['order'];
    echo "</li>";
    echo "<il class='count'>";
    echo $r["COUNT(id)"];
    echo "</li>";
    echo "</ul>";

 ?>


    <?php endforeach;?>
  
  
  </div>

</body>


</html>