<?php

require_once('bootstrap.php');
    require_once("classes/order.class.php");
    include_once("classes/user.class.php");

    session_start();

    $_SESSION['userid'];
    $me= $_SESSION['userid'];
if (empty($me)){
    header("location: login.php");
}


    $credits = new User();
    $credits->setCredit($me);
    $creditstatus = $credits->getCrdt();
    if ($creditstatus == true){
    
    }
    else if($creditstatus == false){
        echo 'db miss';
    }

if (!empty($_POST)) {
if(!empty($_POST['date'])){
    if(!empty($_POST['radio'])){
        if(!empty($_POST['school'])){
            $post = new Order();
            $date = date('Y-m-d', strtotime($_POST['date']));
            $post->setDate($date);
            $post->setSchool($_POST['school']);
            $post->setOrder($_POST['radio']);
            $status = $post->orderNow();
            var_dump($status);
            if ($status === true){
                         //echo '<script>window.location = "index.php"</script>';
                         echo 'hellow';
            }
            else if($status== false){
                echo 'no';
            }

            $myCr = $creditstatus['credit'];
            $i = $_POST['radio'];
            $minCR = 0;
            switch ($i){
                case "hamburger":
                    echo "gekoze";
                    if($myCr >= 3.50){
                    $myCr = $myCr - 3.50;
                    $credits2 = new User();
                    $credits2->setId($me);
                    $credits2->setCredit($myCr);
                    $creditstatus2 = $credits2->payment();
                    if ($creditstatus2 == true){
                    echo 'succes';
                    }
                    else if($creditstatus == false){
                        echo 'db miss';
                    }
                }
                else {
                    echo "je hebt niet genoeg crediet";
                }
                break;
                case "veggieburger":
                    if($myCr >= 3.20){
                    $myCr = $myCr - 3.20;
                    $credits2 = new User();
                    $credits2->setId($me);
                    $credits2->setCredit($myCr);
                    $creditstatus2 = $credits2->payment();
                    if ($creditstatus2 == true){
                    echo 'succes';
                    }
                    else if($creditstatus == false){
                        echo 'db miss';
                    }
                }
                else {
                    echo "je hebt niet genoeg crediet";
                }
                break;
                case "wrap":
                    if($myCr >= 3.20){
                    $myCr = $myCr - 3.20;
                    $credits2 = new User();
                    $credits2->setId($me);
                    $credits2->setCredit($myCr);
                    $creditstatus2 = $credits2->payment();
                    if ($creditstatus2 == true){
                    echo 'succes';
                    }
                    else if($creditstatus == false){
                        echo 'db miss';
                    }
                }
                else {
                    echo "je hebt niet genoeg crediet";
                }
                break;
                case "smos kaas en hesp":
                    if($myCr >= 3.50){
                    $myCr = $myCr - 3.50;
                    $credits2 = new User();
                    $credits2->setId($me);
                    $credits2->setCredit($myCr);
                    $creditstatus2 = $credits2->payment();
                    if ($creditstatus2 == true){
                    echo 'succes';
                    }
                    else if($creditstatus == false){
                        echo 'db miss';
                    }
                }
                else {
                    echo "je hebt niet genoeg crediet";
                }
                break;
            }

        } else{
            echo  "Geen school is aangeduid!";
        }
    } else{
        echo  "Geen item geselecteerd!";
    }
} else{
    echo  "Leverdatum niet ingegeven";
}

} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Foodcart - Bestelling plaatsen</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/screen.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="theme-color" content="#272727">

    <style type="text/css">
        .container{
            padding-top:40px;
            padding-left: 40px;
        }
        .input{
            width: 200px;
            margin: 20px 0;
        }
        .label, label{
            font-size: 17px;
            font-weight: bold;
            margin: 20px 0;
        }

    </style>
</head>

<body>

  <div class="topbar">
    <a href="index.php"><div class="logo"> </div></a>
    <p class="title">Foodcart - Bestellen</p>
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
        <a href="orders.php"> <p class="selected"> <img src="images/order2.svg"/>  Order</p> </a>
        <a href="myOrders.php"> <p"> <img src="images/food.svg"/>  Mijn orders</p> </a>
      </div>
      <?php }; ?>

      <div class="logout">
      <a href="logout.php"> <p> <img src="images/logout.svg"/>  Logout</p> </a>
      </div>
  </div>

  <div class="container">
        <form class="form" action="orders.php" method="post" enctype="multipart/form-data">

            <div class="form__field">
                <label for="date">Bestellen tegen</label> <br />
                <input class="form_date input" type="date" name="date" placeholder="'date'"><br>
            </div>

            <div class="form__field">
                <label for="radio">Kies maaltijd</label> <br />
                <label>
                    <input type="radio" name="radio" value="hamburger">
                    <img class="label" width="200px" height="200px" src="images/hamburger.svg">
                </label>

                <label>
                    <input type="radio" name="radio" value="veggieburger">
                    <img class="label" width="200px" height="200px" src="images/veggie.svg">
                </label>

                <label>
                    <input type="radio" name="radio" value="wrap">
                    <img class="label" width="200px" height="200px" src="images/wraps.svg">
                </label>
                <label>
                    <input type="radio" name="radio" value="smos kaas en hesp">
                    <img class="label" width="200px" height="200px" src="images/smos.svg">
                </label>
            </div>

                
            <div class="form__field">
				<label for="school">School</label> <br />
				<select class="input" name="school">
                    <option value="bimsemM">Bimsem Mechelen</option>
                    <option value="urselinnenM">Urselinnen Mechelen</option>
                    <option value="lyceumM">Lyceum Mechelen</option>
				</select>
			</div>

            <input type="hidden" name="naam" id="naam" value="<?php echo $_SESSION['userid'];?>" />
            <button class="submit" type="submit" name="upload">Verzend</button>
        </form>

        <div class="credit">
            <div class="labelCR">Jouw crediet:
            <?php
                echo "<p id=CR>€".$creditstatus['credit']."</p>";
            ?>
        </div>
        
        <?php
                if (isset($feedback)) {
                    echo $feedback;
                } 
        ?>
    </div>
  </div>

    <!--<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>-->


</html>