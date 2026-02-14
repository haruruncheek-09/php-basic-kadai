<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP_kadai007</title>
</head>

<body>
   <p>
       <?php
       // 連想配列に値を代入する
       $food_items = ['name' => 'onion', 'price' => 200, 'weight' => '160'];

       // 連想配列の値を出力する
       print_r($food_items);
       ?>
   </p>
</body>

</html>