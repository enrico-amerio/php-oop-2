<?php
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Bed.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/data/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
</head>
<body>
  <div class="container">
    <?php
    $groupedProducts = [];
    foreach ($db as $product) {
      $category = $product->category;
      $groupedProducts[$category][] = $product;
    }
    foreach ($groupedProducts as $category => $products):
    ?>
      <h2><?php echo $category; ?></h2>
      <div class="main-wrapper d-flex flex-wrap">
        <?php foreach ($products as $product): ?>
          <div class="card m-3 " style="width: 18rem;">
            <img src="<?php echo $product->img ?>" class="card-img-top" alt="img">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->name ?></h5>
              <p class="card-text"><?php echo $product->price ?>&euro;</p>
              <?php if (isset($product->grams)): ?>
                <p class="card-text"><?php echo $product->grams ?>g</p>
              <?php elseif (isset($product->color)): ?>
                <p class="card-text">Colore: <?php echo $product->color ?></p>
                <?php elseif (isset($product->size)): ?>
                <p class="card-text">Misura: <?php echo $product->size ?></p>
              <?php endif; ?>
              <a href="#" class="btn btn-primary">Compra</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
