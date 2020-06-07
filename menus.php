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

    <style type="text/css">
        .menus{
          margin-bottom:50px;
        }
    </style>

</head>

<body>

  <div class="topbar">
    <a href="index.php"><div class="logo"> </div></a>
    <p class="title">Foodcart Overview</p>
    <a href="profile.php"><div class="account"><img src="images/user.svg" /> </div> </a>
  </div>

  <div class="sidebar">
      
      <div class="nav">
        <a href="index.php"> <img src="images/dashboard.svg" />  Overview </a>
        <a href="catering.php"> <p> <img src="images/order.svg"/>  Cateraars</p> </a>
        <a href="menus.php"> <p class="selected"> <img src="images/food2.svg"/>  Menus</p> </a>
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
    </div>

    <div class="menus">
      <p class="section">Recepten van volgende week</p>

      <div class="clearfix">
        <div class="menu menu1">
          <img class="fotoFood" src="images/hamburger.svg" />
          <p>Hamburger</p>
        </div>

        <div class="menu menu2">
          <img class="fotoFood" src="images/veggie.svg" />
          <p>Veggieburger</p>
        </div>

        <div class="menu menu3">
          <img class="fotoFood" src="images/wraps.svg" />
          <p>Wraps</p>
        </div>

        <div class="menu menu4">
          <img class="fotoFood" src="images/smos.svg" />
          <p>Smos</p>
        </div>
      </div>
    </div>

  </div>

</body>


</html>