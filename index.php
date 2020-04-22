<?php
    require_once('bootstrap.php');

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
    <title>Lab 2</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/reset.css">
    <link rel="stylesheet" type="text/css" href="style/screen.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="theme-color" content="#272727">
</head>

<body>
<div class="grid-container">
  <div class="logo">logo</div>
  <div class="topbar">topbar</div>
  <div class="account">account</div>
  <div class="nav">nav</div>
  <div class="logout"><a href="logout.php">logout</a></div>
  <div class="container">container</div>
</div>
</body>


</html>