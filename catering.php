<?php
    require_once('bootstrap.php');

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
    $result = $order->getOrders();
  
    //var_dump($result);
    //var_dump($result2);
    
    echo date('Y-m-d', strtotime("now")) 
    , "\n";
    echo strtotime("+1 day"), "\n";
    echo date('Y-m-d', strtotime("+1 week")), "\n";
    echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
    echo strtotime("next Thursday"), "\n";

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 2</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/reset.css">
    <link rel="stylesheet" type="text/css" href="style/screen.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="theme-color" content="#272727">
</head>

<body>

<?php foreach($result as $r): ?>
    <?php 
echo "<p>".$r["COUNT(id)"]."</p><br>";
echo "<p>".$r['order']."</p><br>";
echo "<p>".$r['school']."</p><br>";
echo "<p>".$r['deliverydate']."</p><br>";



 ?>


    <?php endforeach;?>
</body>


</html>