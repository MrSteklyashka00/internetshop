<?php
echo "<h1>Привет</h1>";

$a=5;
$b=7;
$c=$a + $b;
echo $c;

$name = "Cтекляшка";
echo '<br>Привет, '.$name;

$ar=[2,5,7,'Привет',[10,20,30]];
echo' <br>'.$ar[4][3];
//var_dump($ar)[4];

function hello($name){
    echo '<br>Привет,'.$name;
}

hello('СТЕКЛО');



function sum($a , $b){
 return  $a+$b;
}

$s=sum(10, 15);
echo $s;

// for ($i=0; $i <count($ar); $i++)
// echo'<br>' .$ar[$i];

foreach($ar as $value)
echo'<br>' .$value;