<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <?php
    // Step 2 のコード
    
    class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price() {
        return $this->price . '円';
      }
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height() {
        return $this->height . 'cm';
      }
    }

    // Step 3 のコード
    $food = new Food('apple', 150);
    $animal = new Animal('dog', 30, 6000);

    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br><br>';

    // Step 4 のコード
    echo 'Food Price: ' . $food->show_price() . '<br>';
    echo 'Animal Height: ' . $animal->show_height() . '<br>';
  ?>
</body>
</html>