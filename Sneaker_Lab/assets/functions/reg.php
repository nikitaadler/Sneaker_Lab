<?php
include "../admin/core.php";
session_start();

if ($_POST) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fullname = $_POST['fullname'];

    $users = $core->query("SELECT * FROM `users` WHERE `login` = '$login'");
    if ($users->num_rows == 0) {

        
        $core->query("INSERT INTO `users`(`login`, `password`, `email`, `phone`, `fullname`) VALUES ('$login','$password','$email','$phone', '$fullname')");


        $user_id = $core->insert_id;

        $_SESSION['user'] = [
            'id' => $user_id,
            'login' => $login,
            'role' => 1 
        ];

        header('Location:../components/profil.php');
        exit;
    } else {
        $_SESSION['error']['error_authh'] = 'Такой пользователь уже существует';
        header('Location: ../components/registration.php');
        exit;
    }
}
?>