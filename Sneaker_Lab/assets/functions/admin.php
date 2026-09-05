<?php
include "../admin/core.php";
session_start();

if ($_POST && !empty($_FILES['addItemImage']['tmp_name'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    $description = $_POST['description'];

    $fileName = basename($_FILES["addItemImage"]["name"]);
    $dir = "../../app/img/" . $fileName;


    if (move_uploaded_file($_FILES["addItemImage"]["tmp_name"], $dir)) {

        $core->query("INSERT INTO `product` (`name`, `price`,`color`,`description`,`image`) 
                      VALUES ('$name', '$price', '$color', '$description', '$fileName')");
    } else {

        echo "Ошибка загрузки файла.";
        exit();
    }

    header('location:../components/admin-panel.php');
    exit();
}
