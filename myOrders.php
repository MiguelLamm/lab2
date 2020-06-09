<?php
    //require_once('bootstrap.php');
    include_once("classes/user.class.php");
    include_once("classes/order.class.php");
    // test
    session_start();
    $c = $_SESSION['userid'];
    if(empty($c)){
      header("location: login.php");
    }

    $BD = date('Y-m-d', strtotime("now"));
    $ED = date('Y-m-d', strtotime("+1 week"));

    $order = new Order();
    $order->setBD($BD);
    $order->setED($ED);
    $order->setUser($_SESSION['userid']);
    $result = $order->getMyOrders();
  
    //var_dump($result);
    //var_dump($result2);
    
    // echo date('Y-m-d', strtotime("now")) 
    // , "\n";
    // echo strtotime("+1 day"), "\n";
    // echo date('Y-m-d', strtotime("+1 week")), "\n";
    // echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
    // echo strtotime("next Thursday"), "\n";

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Foodcart - Mijn Orders</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/screen.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="theme-color" content="#272727">
</head>

<body>

<div class="topbar">
    <a href="index.php"><div class="logo"> </div></a>
    <p class="title">Foodcart - Orders</p>
    <a href="profile.php"><div class="account"><img src="images/user.svg" /> </div> </a>
  </div>

  <div class="sidebar">
      
    <?php if($_SESSION['adm'] === "1"){ ?>
      <div class="nav">
        <a href="index.php"> <p> <img src="images/dashboard.svg" />  Overview</p> </a>
        <a href="catering.php"> <p class="selected"> <img src="images/order2.svg"/>  Orders</p> </a>
        <a href="menus.php"> <p> <img src="images/food.svg"/>  Menus</p> </a>
      </div>
      <?php } else { ?>
        <div class="nav">
        <a href="orders.php"> <p> <img src="images/order.svg"/>  Order</p> </a>
        <a href="myOrders.php"> <p class="selected"> <img src="images/food2.svg"/>  Mijn orders</p> </a>
      </div>
      <?php }; ?>

      <div class="logout">
      <a href="logout.php"> <p> <img src="images/logout.svg"/>  Logout</p> </a>
      </div>
  </div>

  <div class="container">

    <div class="bestellingen">
      <p class="section">Bestellingen deze week voor jouw:</p>

      <div class="clearfix">
            <?php foreach($result as $r): ?>
                <div class="bestelling">
                    <div class="clearfix">
                        <div class="orderPage">
                            <img src="images/order2.svg" width="40px" />
                        </div>
                        <div class="orderText">
                            <p><h2 class="ch2"><?php echo $r['order']; ?></h2></p>
                            <p> <?php echo $r['deliverydate']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
      </div>
    </div>

  </div>

</body>


</html>