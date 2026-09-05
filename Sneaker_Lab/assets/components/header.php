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
    <header class="header " style="background-color:blue;">
        <ul class="header__list">
            <a href="/Sneaker_Lab/">
                <li class="header__list_logo" style="color:white;">Sneaker Lab</li>
            </a>
            <?php if (!isset($_SESSION['user'])): ?>
                <a class="aa" href="/Sneaker_Lab/assets/components/registration.php">
                    <li class="header__list_element">Профиль</li>
                </a>
            <?php else: ?>
                <a class="aa" href="/Sneaker_Lab/assets/components/profil.php">
                    <li class="header__list_element">Профиль</li>
                </a>
                <li class="header__list_element">
                    <a class="aaaa" href="/Sneaker_Lab/assets/functions/logout.php">Выход</a>
                </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 2): ?>
                <a href="/Sneaker_Lab/assets/components/admin-panel.php">
                    <li style="color:white;" class="header__list_element">Админ-панель</li>
                </a>
                
            <?php endif; ?>
            <li class="header__list_element" id="cart-button" style="color:white; cursor:pointer;">
            Корзина (<span id="cart-count">0</span>)
        </li>
        </ul>


    </header>
   
    <main class="main">
        <ul class="main__menu">

            <a href="/Sneaker_Lab/">
                <li class="main__menu_list">Главная страница</li>
            </a>
            <a href="/Sneaker_Lab/#carsarend">
                <li class="main__menu_list">Каталог </li>
            </a>
            <a href="/Sneaker_Lab/assets/components/about_us.php">
                <li class="main__menu_list">О нас</li>
            </a>
            <a href="/Sneaker_Lab/assets/components/contacts.php">
            <li class="main__menu_list">Контакты
            </li>
            </a>


        </ul>

    </main>
    <script src="../../app/js/main5.js"></script>
</body>

</html>