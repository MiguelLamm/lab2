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
<style>
    * {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.grid-container {
    display: grid;
    grid-template-columns: 200px 1fr 300px;
    grid-template-rows: 100px 80px 245px 20vh 150px;
    gap: 1px 1px;
    grid-template-areas: "logo topbar account""logo container container""nav container container"". container container""logout container container";
}

.logo {
    grid-area: logo;
    font-size: 50px;
    border:1px solid #000;
}

.topbar {
    grid-area: topbar;
    border:1px solid #000;
}

.account {
    grid-area: account;
    border:1px solid #000;
}

.nav {
    grid-area: nav;
    border:1px solid #000;
}

.logout {
    grid-area: logout;
    border:1px solid #000;
}

.container {
    grid-area: container;
    border:1px solid #000;
}
</style>

</html>