<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../app/css/style3.css">
</head>

<body>
    <?php
    include "header.php";
    ?>
    <h2 сlass="reg__h2" style='display:flex;justify-content:center; padding-top:7px; font-size: 33px;'>Авторизация</h2>
    <div class="container">
        <form class="registr" action="../functions/auth.php" method="post">
            <label for="">Введите логин</label><br>
            <input type="text" name="login" required><br>
            <label for="">Введите пароль</label><br>
            <input type="password" name="password" minlength="6" required><br>

            <br><button style="font-size: 20px; background-color:blue" class="submit">Авторизоваться</button><br>
            <? if (!empty($_SESSION['error']['error_auth'])) {
                echo $_SESSION['error']['error_auth'];
            } ?>
        </form>
    </div>
    <?php
    include "footer.php";
    ?>
    <script src="../../app/js/main2.js"></script>
</body>

</html>