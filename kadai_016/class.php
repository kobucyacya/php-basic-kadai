<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset='UTF-8'>
    <title>PHP基礎15章課題</title>
</head>
<body>
 <?php
    //クラスを定義
    class Food {
        //プロパティを定義Food(name.price)
        public $name;
        public $price;
        
        //コンストラクタを定義
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }

        //「price」プロパティの値を出力する「show_price」メソッドを定義
        public function show_price() {
            //「price」プロパティの値を出力
            echo $this->price;
        }
    }

    //クラスクラスを定義
    class Animal {
        // プロパティを定義Animal(「name」「height」「weight」）
        public $name;
        public $height;
        public $weight;

        //コンストラクタを定義
        public function __construct(string $name, int $height, int $weight) {
            $this-> name = $name;
            $this-> height = $height;
            $this-> weight = $weight; 
        }
        //「hight」プロパティの値を出力する「show_height」メソッドを定義
        public function show_height() {
            //「hight」プロパティの値を出力
            echo $this->height;
        }        
    }
    
    //インスタンス化
    $potato = new Food('potato', 250);
    $dog = new Animal('dog', 60, 5000);

    //出力
    print_r ($potato);
    echo '<br>';
    print_r ($dog);
    echo '<br>';

    $potato->show_price();
    echo '<br>';
    $dog->show_height();
    echo '<br>';
    ?>

</body>
</html>