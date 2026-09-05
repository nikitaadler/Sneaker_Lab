<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($product['name']) ?></title>
    <link rel="stylesheet" href="../../app/css/style3.css" />
</head>

<body>
    <?php
    session_start();
    include "../admin/core.php";

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    if ($id <= 0) {
        die("Некорректный ID");
    }

    $result = $core->query(" SELECT `id`, `name`, `color`, `price`, `description`, `image` FROM `product` WHERE `id`='$id' ");
    $product = $result->fetch_assoc();

    if (!$product) {
        die("Товар не найден");
    }


    ?>

    <?php include "header.php"; ?>

    <main class="product__car">
        <div style="display:flex; gap:20px;">
            <img src="../../app/img/<?= htmlspecialchars($product['image']) ?>" style="height:300px; object-fit:cover;">

            <div>
                <h1><?= htmlspecialchars($product['name']) ?></h1>
                <p class="product__car_item">Цвет: <?= htmlspecialchars($product['color']) ?></p>
                <p class="product__car_item">Цена: <?= htmlspecialchars($product['price']) ?> р</p>
                <p style="width: 490px;" class="product__car_item">Описание:<br>
                    <?= htmlspecialchars($product['description']) ?? 'Нет описания' ?></p>
                <button class="product__car_button">Взять в аренду</button>
            </div>
        </div>

    </main>

    <?php include "footer.php"; ?>
</body>

</html