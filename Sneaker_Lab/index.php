<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="app/css/style3.css">
</head>

<body>
<?php
  include "assets/components/header.php";
  ?>
  <main class="cars">

    <div style="height: 575px;" class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"> <img src="app/img/123.jpg"></div>
        <div class="swiper-slide"> <img src="app/img/12355.avif"></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

  </main>

  <section class="main" id="catalog-section">
   

    <h2 class="main_h2" id="carsarend" style="padding-left:300px;"> Популярные кроссовки:</h2>
    
    <div class="container-1">
    <div class="filters" id="filters">
      <label>
        Цвет
        <select id="colorFilter">
          <option value="all">Все</option>
          <option value="Красный">Красный</option>
          <option value="Черный">Черный</option>
          <option value="Синий">Синий</option>
          <option value="Белый">Белый</option>
          <option value="Серый">Серый</option>
          <option value="Желтый">Желтый</option>
          <option value="Розовый">Розовый</option>
        </select>
      </label>

      <label>
        Цена до
        <input class="range" type="range" id="priceFilter" min="0" max="1000" step="10" value="1000" style="background-color: blue;" />
        <span id="priceValue">1000</span> ₽
      </label>

      <button class="button__filter" id="resetFilters" style="">Сбросить</button>
    </div>
      <div class="carts" id="carContainer">
        <?php 
        if (!isset($_SESSION['cart'])) {
          $_SESSION['cart'] = [];
      }
      
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
          $productId = intval($_POST['product_id']);
          
          // Проверяем, есть ли товар уже в корзине
          if (!array_key_exists($productId, $_SESSION['cart'])) {
              $_SESSION['cart'][$productId] = 1; 
          } else {
              $_SESSION['cart'][$productId]++; 
          }
          
        
          echo count($_SESSION['cart']);
          exit;
      }
      
        ?>
      <?php
include "assets/admin/core.php";
$product = $core->query("SELECT `id`, `name`, `color`, `price`, `image` FROM `product` WHERE 1");
foreach ($product as $prod) { ?>
  <div class="main__cart" data-id="<?= htmlspecialchars($prod['id']); ?>" data-color="<?= htmlspecialchars($prod['color']); ?>" data-price="<?= htmlspecialchars($prod['price']); ?>">
    <a href="assets/components/product.php?id=<?= $prod['id']; ?>" style="text-decoration:none; color:inherit;">
      <div class="main__cart_img">
        <img class="img_img" style="height:173px" src="app/img/<?= htmlspecialchars($prod['image']) ?>">
      </div>
      <p class="main__cart_name"><?= htmlspecialchars($prod['name']); ?></p>
      <p class="main__cart_element">Цвет: <?= htmlspecialchars($prod['color']); ?></p>
      <p class="main__cart_element">Цена: <?= htmlspecialchars($prod['price']); ?></p>
      <button class="main__cart_button" style="background-color:blue;">Добавить в корзину</button>
    </a>
  </div>
<?php } ?>
      </div>
    </div>
  </section>
  <?php
  include "assets/components/footer.php";
  ?>

  <script src=" https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });
  </script>

  <script src="app/js/main5.js"></script>
</body>

</html>