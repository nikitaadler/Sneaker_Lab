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
    include "../admin/core.php";

    ?>
    <h2 class="h2">Добавление кроссовок</h2>
    <div class="cont">
        <div>
            <form enctype="multipart/form-data" class="product" action="../functions/admin.php" method="post">
                <label for="">Название кроссовок</label><br>
                <input type="text" name="name" required><br>
                <label for="">Цвет кроссовок</label><br>
                <input type="text" name="color" required><br>
                <label for="">Цена кроссовок</label><br>
                <input type="number" name="price" required><br>
                <label for="">Описание кроссовок</label><br>
                <textarea name="description" id="" style="width: 209px; height:84px;"></textarea><br>
                <label for="">Фотография кроссовок</label><br>
                <input type="file" id="img__file" name="addItemImage"><br>

                <br><button class="submitt">Добавить кроссовки</button>
            </form>
        </div>
        <div>
            <a href="update_product.php"><button class="update_button">Обновление и удаление машин</button></a>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>