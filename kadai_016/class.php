<?php
// Foodクラスを定義
class Food {
    private $name;
    private $price;

    // コンストラクタでプロパティに値をセット
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceの値を出力するメソッド
    public function show_price() {
        echo $this->price;
    }
}

// Animalクラスを定義
class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタでプロパティに値をセット
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightの値を出力するメソッド
    public function show_height() {
        echo $this->height;
    }
}

// FoodクラスとAnimalクラスのインスタンスを作成
$food = new Food('potato', 250);
$animal = new Animal('dog', 60, 5000);

// インスタンスの中身をprint_rで出力
print_r($food);
echo "<br>";
print_r($animal);
echo "<br>";

// それぞれのメソッドの実行結果を出力
$food->show_price();
echo "<br>";
$animal->show_height();
?>

