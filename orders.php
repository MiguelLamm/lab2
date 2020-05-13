<?php
  include('bootstrap.php');
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
                        if($myCr >= 1.50){
                        $myCr = $myCr - 1.50;
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
                        if($myCr >= 1.20){
                        $myCr = $myCr - 1.20;
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
                        if($myCr >= 1.20){
                        $myCr = $myCr - 1.20;
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
                        if($myCr >= 1.50){
                        $myCr = $myCr - 1.50;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/reset.css">
    <link rel="stylesheet" type="text/css" href="style/screen.css">
    <title>FoodCart | Bestellen</title>
</head>

<body>
<div class="credit">
<label class="labelCR">jouw crediet:</label>
<?php
    echo "<p id=CR>€".$creditstatus['credit']."</p>";
?>
</div>
    <div class="form">
        <form class="formulier form_order" action="orders.php" method="post" enctype="multipart/form-data">
            <h2>Bestelling</h2>
            <label>Bestellen tegen:</label><br>
            <input class="form_date" type="date" name="date" placeholder="'date'"><br>
            <label>Kies maaltijd</label><br>
            <label>
  <input type="radio" name="radio" value="hamburger">
  <img src="https://photos.bigoven.com/recipe/hero/great-hamburgers-32d8f2.jpg?h=300&w=300" width= 300px>
</label>
<label>Hamburger, €1.50</label><br>
<label>
  <input type="radio" name="radio" value="veggieburger">
  <img src="https://i.pinimg.com/474x/88/2c/ca/882cca2b324d386f716d99d37c37a9af.jpg" width= 300px>
</label>
<label>Veggieburger, €1.20</label><br>
<label>
  <input type="radio" name="radio" value="wrap">
  <img src="https://img.static-rmg.be/a/food/image/q75/w640/h400/796/wraps-met-groenten.jpg" width= 300px>
</label>
<label>Wraps, €1.20</label><br>
<label>
  <input type="radio" name="radio" value="smos kaas en hesp">
  <img src="https://dehoek.be/website/dehoek_be/assets/images/productsadvimages/stokbrood.jpg" width= 300px>
</label>
<label>Smos kaas en ham, €1.50</label><br>

<div class="form__field">
				<label for="school">School</label>
				<select name="school">
				<option value="bimsemM">Bimsem Mechelen</option>
				<option value="urselinnenM">Urselinnen Mechelen</option>
				<option value="lyceumM">Lyceum Mechelen</option>
				</select>
			</div>

            <input type="hidden" name="naam" id="naam" value="<?php echo $_SESSION['userid'];?>" />
            <button class="btn" type="submit" name="upload">Verzend</button>
        </form>
        <?php
                if (isset($feedback)) {
                    echo $feedback;
                } ?>
    </div>
    <!--<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>-->
</body>

</html>