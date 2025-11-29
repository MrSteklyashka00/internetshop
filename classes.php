<?php

class Animal{
    public $name;
    protected $age;
    protected $color;
    public function __construct($name, $age, $color)
    {
     $this->name= $name;
     $this->age =$age;
     $this->color = $color;
    }
    public function sound(){
        echo "{$this->name} издает звук<br>";
    }
    public function eat(){
        echo "{$this->name} ест <br>";
    }
    public function info(){
        echo "Имя: {$this->name}, Возраст: {$this->age}, Цвет: {$this->color}<br>";
    }
}
echo "<h1>Создание класса</h1>";
$animal = new Animal('Мурка', 2 , 'Черный');
// $animal->name ="Мурка";
//$animal->age = 5;
// $animal-> color = "Черный";
$animal->sound();
$animal-> eat();
$animal->info();

class Cat extends Animal{
    protected $breed;
    public function __construct($name, $age, $color, $breed){
        parent::__construct($name, $age, $color);
        $this->breed= $breed;
     
    }
  public function sound(){
        echo "{$this->name} мяукает <br>";
  }
}
echo "<h1>Наследование и полимирфизм</h1>";
$cat = new Cat('Тишка', 3, 'Рыжий', '-');
$cat->sound();
$cat->eat();
$cat->info();

$cat2 = new Cat('Васька', 1, 'Белый','-');
$cat2->sound();
$cat2->eat();
$cat2->info();

class Dog extends Animal{
protected $breed;
public function __construct($name, $age, $color, $Bark)
{
     parent::__construct($name, $age, $color);
        $this->breed= $breed;
}
public function sound(){
        echo "{$this->name} гавкает <br>";
  }

}
echo "<h1>САБАКИ</h1>";
$dog = new Dog ('Стёпа', 1, 'Белый', 'Мальтеза');
$dog->sound();
$dog->info();

class Mathem{
    public static function add($a,$b){
        return $a+$b;
    }
}

echo " Сумма 2 и 5 равна " . Mathem::add(2,5);

class SmartPhoneFactory{
 protected static $phonesN=0;
 protected $model;

 public function __construct($model)
 {
    $this->model=$model;
    self::$phonesN++;
 }
 public static function getInfo(){
    echo "Завод выпустил" . self::$phonesN . "Телефонов<br>";
 }
 public static function createPhone($model){
    echo "Создаем телефон" . $model. "<br>";
    return new SmartPhoneFactory($model);
 }

 public function getPhoneInfo(){
    echo "Это телефон модели " .$this->model."<br>";
 }
}

SmartPhoneFactory::getInfo();
$phone1 = SmartPhoneFactory::createPhone('iphome17');
$phone2 = SmartPhoneFactory::createPhone('Samsung Galaxy');
SmartPhoneFactory::getInfo();
$phone1->getPhoneInfo();
$phone2->getPhoneInfo();

abstract class AutoVAZ{
    protected $model;
    public function __construct($model)
    {
      $this->model=$model;
    }
    public function getInfo(){
        echo "Модель: {$this->model}<br>";
    }
    abstract public function go($speed);
}

class Granta extends AutoVAZ{
    public function go($speed){
        echo " Lada Granta едет на скорость {$speed}<br>";
    }
}

$car1 = new Granta('оригинальная модель');
$car1->go(100);

interface Apple{
    public function getInfo();
    public function charge();
}

class iphone implements Apple{
      public function getInfo(){
    echo "iphone<br>";
      }
     public function charge(){
     echo"батарея заряжена<br>";
     }
}
$phone = new iphone;
$phone->getInfo();
$phone->charge();