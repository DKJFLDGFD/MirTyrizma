<?php
    require "../../components/connect.php"; 

    if(isset($_POST['hottourDel'])){
        $id = $_POST['id'];
        mysqli_query($link, "DELETE FROM `hottour` WHERE `hottour_id` = '$id'");
    }
    header("location: ".$_SERVER['HTTP_REFERER']);
?>
