<?php
    session_start();

    require "../../components/connect.php";

    if(isset($_POST['signIn'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $users = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
        if(mysqli_num_rows($users) >= 1){
            $user = mysqli_fetch_array($users);
            $_SESSION['user'] = [
                'id' => $user['id'],
                'login' => $user['login'],
                'email' => $user['email'],
                'status' => $user['status'],
            ];
            header("location: ../../../../../index.php");
        }else{
            $_SESSION['error'] = [
                'login' => 'Неверно введен логин или пароль',            
            ];
            header('location:'.$_SERVER['HTTP_REFERER']);
        }
    }

?>