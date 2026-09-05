
<?php

include "../admin/core.php"
?>
<?php
if($_POST){
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$color = $_POST['color'];
    $fileName = basename($_FILES["foto"]["name"]);
    $dir = "../../app/img/" . $fileName;
$prod=$core->query("UPDATE `product` SET `name`='$name',`price`='$price',`description`='$description',`color`='$color', `image` = '$fileName' WHERE `id` = '$id'");
header('location:../components/update_product.php');
} else {
$_SESSION["error"]['update'] = "Ошибка при выполнении запроса";
header('location:../../index.php');
}
?>