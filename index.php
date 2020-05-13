<?php
    /* require_once('bootstrap.php'); */

    session_start();
  
    
    /*if($_SESSION['adm'] == 1){
      
    }else{
      //BYE FELISHA
      header("location: index.php");
    }
  */
    //$posts = new Post;
    //$posts = $posts->showReq();

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Foodcart - Overview</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/screen.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="theme-color" content="#272727">
</head>

<body>

  <div class="topbar">
    <a href="index.php"><div class="logo"> </div></a>
    <p class="title">Foodcart Overview</p>
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

    <div class="menus">
      <p class="section">Recepten van deze week</p>

      <div class="clearfix">
        <div class="menu menu1">
          <img class="fotoFood" src="images/burger.svg" />
          <p>Hamburger</p>
        </div>

        <div class="menu menu2">
          <img class="fotoFood" src="images/burger.svg" />
          <p>Hamburger</p>
        </div>

        <div class="menu menu3">
          <img class="fotoFood" src="images/burger.svg" />
          <p>Hamburger</p>
        </div>

        <div class="menu menu4">
          <img class="fotoFood" src="images/burger.svg" />
          <p>Hamburger</p>
        </div>

        <div class="menu menu5">
          <img class="fotoFood" src="images/burger.svg" />
          <p>Hamburger</p>
        </div>
      </div>

      <p><a href="menus.php" class="zieMeer">Zie meer</p>
    </div>

    <div class="orders">
      <p class="section">Orders van deze week</p>

      <div class="clearfix">
        <div class="order order1">
          <p>Hamburgers Ordered</p>
          <p class="size">235</p>
          <div class="total"> <div class="number" style="width:calc(0.58 * 100%);"></div> </div>
        </div>

        <div class="order order2">
          <p>Hamburgers Ordered</p>
          <p class="size">235</p>
          <div class="total"> <div class="number" style="width:calc(0.65 * 100%);"></div> </div>
        </div>

        <div class="order order3">
          <p>Hamburgers Ordered</p>
          <p class="size">235</p>
          <div class="total"> <div class="number" style="width:calc(0.35 * 100%);"></div> </div>
        </div>

        <div class="order order4">
          <p>Hamburgers Ordered</p>
          <p class="size">235</p>
          <div class="total"> <div class="number" style="width:calc(0.27 * 100%);"></div> </div>
        </div>

        <div class="order order5">
          <p>Hamburgers Ordered</p>
          <p class="size">235</p>
          <div class="total"> <div class="number" style="width:calc(0.85 * 100%);"></div> </div>
        </div>

      <p><a href="order.php" class="zieMeer">Zie meer</p>
    </div>

    <div class="clients">
      <p class="section">Beste klanten deze week</p>

      <div class="clearfix">
        <div class="client client1" style="background-color:aqua;">
          <p class="bold">Facebook</p>
          <p>Aantal bestellingen: 470</p>
          <p>www.facebook.com
        </div>

        <div class="client client2" style="background-color:aqua;">
          <p class="bold">Facebook</p>
          <p>Aantal bestellingen: 470</p>
          <p>www.facebook.com
        </div>

        <div class="client client3" style="background-color:aqua;">
          <p class="bold">Facebook</p>
          <p>Aantal bestellingen: 470</p>
          <p>www.facebook.com
        </div>

        <div class="client client4" style="background-color:aqua;">
          <p class="bold">Facebook</p>
          <p>Aantal bestellingen: 470</p>
          <p>www.facebook.com
        </div>

        <div class="client client5" style="background-color:aqua;">
          <p class="bold">Facebook</p>
          <p>Aantal bestellingen: 470</p>
          <p>www.facebook.com
        </div>

      <p><a href="clients.php" class="zieMeer">Zie meer</p>
    </div>

  </div>

</body>


</html>