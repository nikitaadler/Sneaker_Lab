<link rel="stylesheet" href="../../app/css/style3.css">
<?php
session_start();

include "header.php";
include "../admin/core.php";

$user_id = $_SESSION['user']['id'];

$stmt = $core->prepare("SELECT login, password, email, phone, fullname FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Пользователь не найден.";
    exit;
}
?>
<h2 class="profil_h2" style="font-size: 32px;">Профиль</h2>
<div class="profil__cont">
    <div class="profil__cont_user" style="font-size: 36px; padding-left:70px;">
        <p>Логин: <?php echo htmlspecialchars($user['login']); ?></p><br>
        <p>Email: <?php echo htmlspecialchars($user['email']); ?></p><br>
        <p>Телефон: <?php echo htmlspecialchars($user['phone']); ?></p><br>
        <p>ФИО: <?php echo htmlspecialchars($user['fullname']); ?></p><br>
    </div>

</div>
<?php
include "footer.php";
?>