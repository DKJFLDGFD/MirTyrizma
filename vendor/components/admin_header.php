<?php
include 'connect.php';
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
   <title>AdminPanel</title>

   <!-- font awesome cdn link  -->


   <!-- custom css file link  -->
   <link rel="stylesheet" href="../assets/css/admin_style.css">

</head>
<body>
   
<header class="header">

   <div id="close-btn"><i class="fas fa-times"></i></div>

   <a href="dashboard.php" class="logo">AdminPanel</a>

   <nav class="navbar">
      <a href="../../admin/index.php"><i class="fas fa-home"></i><span>Мониторинг</span></a>
      <a href="../../admin/messages.php"><i class="fas fa-message"></i><span>Зявки</span></a>
      <a href="../../admin/hottourup.php"><i class="fas"></i><span>Добавление горящие туры</span></a>
      <a href="../../index.php"><i class="fas"></i><span>Главная страци</span></a>
   </nav>

   <a href="update.php" class="btn">Обновить данные аккаунта</a>
   <div class="flex-btn">
   </div>

</header>

<div id="menu-btn" class="fas fa-bars"></div>