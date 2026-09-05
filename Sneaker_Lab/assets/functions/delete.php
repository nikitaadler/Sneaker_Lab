<?php
include "../admin/core.php";

$delete = $_POST['productDelete'];
$del = $core ->query("DELETE FROM `product` WHERE `id` = '$delete'");
header('location:../components/update_product.php')


?>
