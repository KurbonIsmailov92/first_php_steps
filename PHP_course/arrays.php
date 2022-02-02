<?php
$fruits = ["Banana", "Apple", "Orange"];
//$fruitsNew = array();
echo '<pre>';
    var_dump($fruits);
echo '</pre>';

$fruits[0] = 'Peach';
echo '<pre>';
    var_dump($fruits);
echo '</pre>';

isset($fruits[3]); // false

$fruits[] = 'Banana';
echo '<pre>';
    var_dump($fruits);
echo '</pre>';

echo count($fruits). '<br>';

array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// 1:06:48 on video
