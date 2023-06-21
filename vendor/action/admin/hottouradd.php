<?php 
    session_start();

    require "../../components/connect.php";

    if(isset($_POST['addHot'])){
        $img = $_FILES['image'];
        if('image' == substr($img['type'], 0, 5)){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $day = $_POST['day'];
            $person = $_POST['person'];

            $url = uniqid().'.'.substr($img['type'], 6);
            move_uploaded_file($img['tmp_name'], '../../../assets/images/'.$url);
            mysqli_query($link, "INSERT INTO `hottour`(`hottour_name`, `hottour_description`, `hottour_price`,`hottour_day`,`hottour_person`, `hottour_image`) VALUES ('$name', '$description', '$price','$day','$person', '$url')");
        }
    }

    header("location: ".$_SERVER['HTTP_REFERER']);
?>