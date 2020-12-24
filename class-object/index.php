<h2>物件導向</h2>
<?php

//物件取名第一字要用大寫
class Animal{
    public $hairColor="brown";
    public $eyes="black";
    protected $food="apple";
    private $weight="100kg";  //primate 只有在這個物件內可以使用

    // construct會在new的時候先執行
    public function __construct(){
        echo "我己被實體化了";
    }

    public function sound(){
        echo "吼吼吼";
    }

    public function run(){
        echo "跑跑跑";
        $this->mood();  //this指的是這個物件本身
        $this->eat();
    }

    protected function eat(){
        echo "吃吃吃";
    }

    private function mood(){
        echo "好號好";
    }
}

$animal= new Animal; 

echo $animal->hairColor;
echo $animal->eyes;
$animal->sound();
$animal->run();

echo "<hr>以下是貓class<br>";

//繼承 extends
class Cat extends Animal{
    //建構
    public function __construct(){
        $this->hairColor="黑色的";
        $this->eyes="藍色";
    }
    
    //覆寫
    public function sound(){
        echo "喵~~~~";
    }
    
    public function jump(){
        echo "跳~~~~";
    }

    public function run(){
        echo "慢~慢~跑~~~~";
        parent::eat(); //可以呼叫父類別protected 
        // parent::mood();  //無法呼叫父類別private
    }
}

$cat= new Cat; 
echo $cat->hairColor;
echo $cat->eyes;
$cat->sound();
$cat->run();

?>