<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>画像投稿アプリ</title>
</head>
<body>
  <?php include('./dbconfig.php') ?>
  <?php include('./getdatas.php') ?>
  <?php include('./header.php') ?>
  <div class="imageList">
    <?php foreach ($data as $image) { ?>
     <img src="./images/<?php echo $image['Image_name']; ?>" alt="投稿画像"></a>
    <?php }; ?>

</div>
</body>
</html>