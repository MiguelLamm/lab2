<?php
    require_once('bootstrap.php');
    session_start();

   if (!empty($_POST)) {
        //$imagePost = $_FILES['fileToUpload'];
		$description = htmlspecialchars($_POST['description']);
		
        if (empty($description)) {
            $feedback = 'Please add a description.';
        } else {
            $post = new Order();
            
            $date = $_POST['date'];
            $time = $_POST['time'];
            $loc = $_POST['location'];
            $addr = $_POST['addr'];
                    }
						if(!isset($_SESSION['lat'])){
							$lat = "0";
						}else{
							$lat = $_SESSION['lat'];
						}

						if(!isset($_SESSION['long'])){
							$long = "0";
						}else{
							$long = $_SESSION['long'];
							
						}

                        
						echo $city;
						echo $lat;
                        echo $long;
                        
                        if(!empty($_POST['gemeenteH'])){
                            $gemeenteH = $_POST['gemeenteH'];
                        }
                        echo $gemeenteH;
						$post->insertIntoDB($post->uploadImage(), $description, $_SESSION['userid'], $lat, $long, $loc,$gemeenteH,$date, $time,$addr);
                        $feedback = 'File has been uploaded.';
                        echo '<script>window.location = "profile.php"</script>';
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
        <form class="formulier form_order" action="aanvraag.php" method="post" enctype="multipart/form-data">
            <h2>Bestelling</h2>
            <label>Bestellen tegen:</label><br>
            <input class="form_date" type="date" name="date" placeholder="'date'"><br>
            <label>Kies maaltijd</label><br>
            <label>
  <input type="radio" name="test" value="small">
  <img src="http://placehold.it/40x60/0bf/fff&text=A">
</label>

<label>
  <input type="radio" name="test" value="big">
  <img src="http://placehold.it/40x60/b0f/fff&text=B">
</label>
<label>
  <input type="radio" name="test" value="big">
  <img src="http://placehold.it/40x60/b0f/fff&text=C">
</label>
<label>
  <input type="radio" name="test" value="big">
  <img src="http://placehold.it/40x60/b0f/fff&text=D">
</label>

           
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