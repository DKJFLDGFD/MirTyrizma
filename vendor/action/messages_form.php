<?php
    require "../components/connect.php"; 
   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      mysqli_query($link,"INSERT INTO `messages` (`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ");
      header('location:../../../../index.php'); 
   }else{
      echo 'something went wrong please try again!';
   }

?>