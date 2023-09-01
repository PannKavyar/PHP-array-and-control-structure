<?php
$iceCream=array(
    'PannPann' => 'Milk',
    'KoKo'=>'Chocolate',
    'MaMa' =>'Stawberry',
    'Aunty'=>'Blue Berry'
);
$iceCream['TY']='Pistachio';
$iceCream['JS']='Beans and Chocolate';
$iceCream['BH']='Vanilla';
krsort($iceCream);
asort($iceCream);
    //echo $iceCream['MaMa'];
    //echo $iceCream['TharThar']='Beans and Chocalate';
   var_dump($iceCream);
$keys=array(
    1=> 'a',
    '1' =>'b',
    1.5 => 'c',
    true => 'd'
);
var_dump($keys);

?>