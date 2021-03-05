<h2>物件導向</h2>
<?php

class Animal{
    public $name="";
    public $haircolor="brown";
    public $eyes="black";
    protected $food="apple";
    private $weight="100kg";

    public function __construct($name){
        $this->name=$name;
        echo "我己被實體化了";
    }
    public function sound(){
        echo $this->name."吼吼吼";
    }

    public function run(){
        echo "跑跑跑";
        $this->mind();
        $this->eat();
    }

    protected function eat(){
        echo "一起吃";
    }

    private function mind(){
        echo "心情好";
    }
}

$animal = new Animal('小貓小狗');

echo $animal->haircolor;
echo "<br>";
echo $animal->eyes;
echo "<br>";
$animal->sound();
echo "<br>";
$animal->run();
echo "<br>";
/* $animal->jump();
echo "<br>"; */

echo "<hr>以下是貓class";
class Cat extends Animal{

    public function __construct($name){
        $this->name=$name;
        $this->haircolor='橘色的';
        $this->eyes='寶藍色';

    }
    public function sound(){
        echo $this->name."喵~~~~~~";
    }

    public function jump(){
        echo "我會跳";
    }
    public function run(){
        echo "慢慢跑";
        parent::eat();
        parent::mind();
    }

}

$cat = new Cat('小花');
echo "<br>";
echo $cat->haircolor;
echo "<br>";
echo $cat->eyes;
echo "<br>";
$cat->sound();
echo "<br>";
$cat->run();
echo "<br>";
$cat->jump();

?>