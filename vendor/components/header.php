<?php
    session_start();
    if(isset($_SESSION['user'])){
        $id = $_SESSION['user']['id'];
    }
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel</title>

  
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


   <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
   


<section class="header">

   <a href="index.php" class="logo">MirTyrizma</a>

   <nav class="navbar">
</div>
      <a href="index.php">Главная</a>
      <a href="about.php">О нас</a>
      <a href="hottour.php">Горящие туры</a>
      <?php
      if($_SESSION['user']['status'] == 1){?>
         <a href="admin/">Админ панель</a>
        <?php 
        } 
        ?>
        <?php
      if(isset($_SESSION['user'])){
         ?>
   <div class="dropdown">
  <a class="dropbtn">Личный кабинет</ф>
  <div class="dropdown-content">
    <a href="#">Забронировать</a>
    <a href="../vendor/action/users/logOut.php"><?php echo $_SESSION['user']['login']?>(Выйти)</a>
  </div>
      <?php }else{
        ?>
        <a  href="signin.php">Авторизация</a>
		<a  href="signup.php">Регистрация</a>
        <?php
        } ?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>