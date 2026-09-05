<?php
include "../admin/core.php";
session_start();
?>
<?php
if($_POST){
    
    $login = $_POST['login'];
    $password = $_POST['password'];
$users=$core->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if($users->num_rows != 0){
    $user = $users ->fetch_assoc();
    $_SESSION['user'] = [
        'id'=> $user['id'],
'role' => $user['role_id']

    ];
    header('Location:../components/profil.php');
}
else{
    header('location:../components/authorization.php');
   $_SESSION['error']['error_auth'] = 'Такого пользователя не существует';
}

}
 ?>
 <?php
include "../../header.php";
?>