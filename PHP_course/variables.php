<?php
$name = 'Zura';
$age = 28;
$isMale = false;
$height = 1.85;
$salary = null;

echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

echo gettype($name) .'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

var_dump($name, $age, $isMale, $salary, $height);

$name = false;
echo gettype($name). '<br>';
define('PI', 3.14);
echo PI.'<br>';
echo SORT_ASC. '<br>';
echo PHP_INT_MAX. '<br>';