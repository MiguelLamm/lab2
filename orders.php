<?php
    require_once("bootstrap.php");
    session_start();

   if (!empty($_POST)) {
    
        //$imagePost = $_FILES['fileToUpload'];
		$date = htmlspecialchars($_POST['date']);
		
        if (empty($date)) {
            $feedback = 'Vul de datum van volgende week in';
        } else {
            $post = new Order();
            
            $date = $_POST['date'];
            $school = $_POST['school'];
            $order = $_POST['radio'];
            
                    }
                        $order->insertIntoDB($order, $_SESSION['school'], $date);
                        
                        if($result === true){
                            echo '<script>window.location = "index.php"</script>';
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

    <div class="form">
        <form class="formulier form_order" action="orders.php" method="post" enctype="multipart/form-data">
            <h2>Bestelling</h2>
            <label>Bestellen tegen:</label><br>
            <input class="form_date" type="date" name="date" placeholder="'date'"><br>
            <label>Kies maaltijd</label><br>
            <label>
  <input type="radio" name="radio" value="hamburger">
  <img src="http://placehold.it/40x60/0bf/fff&text=A">
</label>

<label>
  <input type="radio" name="radio" value="veggieburger">
  <img src="http://placehold.it/40x60/b0f/fff&text=E">
</label>

<label>
  <input type="radio" name="radio" value="wrap">
  <img src="http://placehold.it/40x60/b0f/fff&text=B">
</label>
<label>
  <input type="radio" name="radio" value="smos kaas en hesp">
  <img src="http://placehold.it/40x60/b0f/fff&text=C">
</label>
<label>
  <input type="radio" name="radio" value="smos Americain">
  <img src="http://placehold.it/40x60/b0f/fff&text=D">
</label>


            <input type="hidden" name="naam" id="naam" value="<?php echo $_SESSION['school'];?>" />
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