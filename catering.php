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
      <?php if($_SESSION['adm'] === "1"){ ?>
      <div class="nav">
        <a href="index.php"> <p class="selected"> <img src="images/dashboard2.svg" />  Overview</p> </a>
        <a href="catering.php"> <p> <img src="images/order.svg"/>  Orders</p> </a>
        <a href="menus.php"> <p> <img src="images/food.svg"/>  Menus</p> </a>
      </div>
      <?php } else { ?>
        <div class="nav">
        <a href="orders.php"> <p class="selected"> <img src="images/order2.svg"/>  Order</p> </a>
        <a href="myOrders.php"> <p> <img src="images/food.svg"/>  Mijn orders</p> </a>
      </div>
      <?php }; ?>

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
          <img class="fotoFood" src="images/pizza.svg" />
          <p>Pizza</p>
        </div>

        <div class="menu menu3">
          <img class="fotoFood" src="images/slaatje.svg" />
          <p>Slaatje</p>
        </div>

        <div class="menu menu4">
          <img class="fotoFood" src="images/pasta.svg" />
          <p>Pasta</p>
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

      <p><a href="order.php" class="zieMeer">Zie meer</p>
    </div>

  </div>

</body>


</html>