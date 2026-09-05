<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../app/css/style3.css">
</head>

<body>

    <?
    include "header.php";

    ?>
    <h2 сlass="reg__h2" style='display:flex;justify-content:center; padding-top:7px'>Регистрация</h2>
    <div class="container">

        <form enctype="multipart/form-data" class="registr" action="../functions/reg.php" method="post">
            <label for="">Введите логин</label><br>
            <input type="text" name="login" required><br>
            <label for="">Введите пароль</label><br>
            <input type="password" name="password" minlength="6" required><br>
            <label for="">Введите email</label><br>
            <input type="email" name="email" required><br>
            <label for="">Введите номер телефона</label><br>
            <input type="number" name="phone" required><br>
            <label for="">Введите ФИО</label><br>
            <input type="text" name="fullname" pattern="[А-Яа-яёЁ/s]+" required><br>
            <br><button class="submit" style="background-color: blue;">Зарегистрироваться</button>
            <? if (!empty($_SESSION['error']['error_authh'])) {
                echo $_SESSION['error']['error_authh'];
            } ?>
            <div class="auth11">

                <a class="auth" href="authorization.php">
                    <p>Войти</p>
                </a>
            </div>
        </form>
    </div>
    <?php
    include "footer.php";
    ?>

</body>

</html>