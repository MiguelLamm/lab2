<?php
    require_once("classes/order.class.php");
    session_start();

   if (!empty($_POST)) {
		
        if (empty($date)) {
            $feedback = 'Vul de datum van volgende week in';
        } else {
            $post = new Order();
            $date = date('Y-m-d', strtotime($_POST['date']));
            $post->setDate($date);
            $post->setSchool($_POST['school']);
            $post->setOrder($_POST['radio']);
            $status = $post->insertIntoDB();
            echo $status;
            if ($status === true){
                      
                         echo '<script>window.location = "index.php"</script>';

            }
            else{
                echo  "Er ging iets mis!";
            }
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
  <img src="https://photos.bigoven.com/recipe/hero/great-hamburgers-32d8f2.jpg?h=300&w=300" width= 300px>
</label>

<label>
  <input type="radio" name="radio" value="veggieburger">
  <img src="https://i.pinimg.com/474x/88/2c/ca/882cca2b324d386f716d99d37c37a9af.jpg" width= 300px>
</label>

<label>
  <input type="radio" name="radio" value="wrap">
  <img src="https://img.static-rmg.be/a/food/image/q75/w640/h400/796/wraps-met-groenten.jpg" width= 300px>
</label>
<label>
  <input type="radio" name="radio" value="smos kaas en hesp">
  <img src="https://dehoek.be/website/dehoek_be/assets/images/productsadvimages/stokbrood.jpg" width= 300px>
</label>
<label>
  <input type="radio" name="radio" value="smos Americain">
  <img src="https://www.pulmenti.be/wp-content/uploads/2019/06/Pulmenti-9-1024x565.jpg" width= 300px>
</label>
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