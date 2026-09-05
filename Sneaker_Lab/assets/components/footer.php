<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../app/css/style3.css">
</head>

<body>
    <footer class="footer" style=" background-color:blue; padding: 270px;">
        <ul class="footer__list">
            <a class="footer_list_element" href="/Sneaker_Lab/">
                <li>Главная страница</li>
            </a><br>
            <?php if (!isset($_SESSION['user'])) { ?>
                <a class="footer_list_element" href="/Sneaker_Lab/assets/components/registration.php">
                    <li>Регистрация</li>
                </a><br>
                <a class="footer_list_element" href="/Sneaker_Lab/assets/components/authorization.php">
                    <li>Авторизация</li>
                </a><br>
                <a class="footer_list_element" href="/Sneaker_Lab/assets/components/registration.php">
                    <li>Профиль</li>
                </a><br>
            <? } else { ?>
                <a class="footer_list_element" href="/Sneaker_Lab/assets/components/profil.php">
                    <li>Профиль</li>
                </a><br>
            <? } ?>
        </ul>
        <ul class="footer__menu">
            <a href="/Transport/#carsarend">
                <li class="footer_list_element">Каталог</li>
            </a><br>
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 2): ?>
                <a href="/Transport/assets/components/admin-panel.php">
                    <li class="footer_list_element">Админ-панель</li>
                </a>
            <?php endif; ?>
        </ul>
    </footer>
</body>

</html>
<style>
    .footer_list_element {
        color: white;
    }
</style>