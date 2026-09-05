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
    include "../admin/core.php";
    ?>

    <div class="container__tovar">
        <div class="cont">

            <form enctype="multipart/form-data" class="product" action="../functions/update.php" method="post">
                <h2>Обновление кроссовок</h2>
                <label for="">id кроссовок</label><br>
                <input type="number" name="id"><br>
                <label for="">Название кроссовок</label><br>
                <input type="text" name="name" required><br>
                <label for="">Цвет кроссовок</label><br>
               <input type="text" name="color"><br>
                <label for="">Цена кроссовок</label><br>
                <input type="number" name="price" required><br>
                <label for="">Описание кроссовок</label><br>
                <input type="text" name="description" required><br>
                <label for="">Фотография кроссовок</label><br>
                <input type="file" name="foto"><br>
                <br><button class="submitt">Обновить кроссовки</button>
            </form>
        </div>
        <?
        $product = $core->query("SELECT * FROM `product`");
        foreach ($product as $prod)
        ?>
        <div class="container_delete">
            <h2 class="delete_car">Удаление кроссовок</h2>
            <form action="../functions/delete.php" method="post">
                <label class="label_delete" for="">Выбирите кроссовки, которую хотите удалить</label><br>
                <br><select name="productDelete" class="productDelete" id="">

                    <?php include "assets/admin/core.php";
                $product = $core->query("SELECT * FROM `product`");
                foreach ($product as $prod) { ?>
                        <option value="<?= $prod['id'] ?>"><?= $prod['name'] ?></option>
                    <?php } ?>
                </select>
                <button class="submit_delete">Удалить кроссовки</button>
            </form>

        </div>

    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>