<?php
    session_start();

    require "../../components/connect.php";

    if(isset($_POST['signUp'])){
        $password = $_POST['password'];
        $password_conf = $_POST['conf_password'];
        if($password == $password_conf){
            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $password;
            $users = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$email'");
            if(mysqli_num_rows($users) >= 1){
                $_SESSION['error'] =[ 
                    'email' => 'Такой логин или email уже существует',
                ];
                header('location:'.$_SERVER['HTTP_REFERER']);
            }else{
                mysqli_query($link, "INSERT INTO `users`(`login`, `email`, `password`) VALUES ('$login','$email','$password')");
                $users = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$email'");
                $user = mysqli_fetch_array($users);
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'login' => $user['login'],
                    'email' => $user['email'],
                    'status' => $user['status'],
                ];
                header("location: ../../../../../index.php");
            }
        }else {
            $_SESSION['error'] = [
                'password' => 'Пароли не совпадают',
            ];
            header('location:'.$_SERVER['HTTP_REFERER']);
        }   
    }
?>