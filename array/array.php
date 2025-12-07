<?php

$fruits = array('apple', 'orange', 'banana', 'mango');
foreach($fruits as $fruit){
    echo "{$fruit} ";
}
echo "<br>";

    
//predefined function

array_push($fruits, "coconut", "pineapple");
foreach($fruits as $fruit){
    echo "{$fruit} ";
    echo "<br>";
}

//array_push, pop, shift, unshift, reverse,... count(array)
array_unshift($fruits, 'saphal');
foreach($fruits as $f){
    echo $f;
    echo "<br>";
}

$f = array_reverse($fruits);
echo "<pre>";
print_r($f);

sort($fruits);
echo "<pre>";
print_r($fruits);

$f = array_splice($fruits,3,0,'mango');
echo "<pre>";
print_r($f);
print_r($fruits);

$num = [1,2,3,4,5,6,7,8,9,10];
$even=array_filter ($num, fn($a)=> $a%2==0);
echo "<pre>";
print_r($even);`

$square=array_map(fn($a)=> $a**2,$num);
echo "<pre>";+
print_r($square);

$reduce = array_reduce($num,fn($a,$n)=>$a+$n,0 );
echo "<pre>";
print_r($reduce);
echo "<br>";

//implode and explode
$s = "hello my name is saphal karki";
$a = ['hello','my','name','is','saphal','karki'];
$sa = explode(' ',$s);
// echo "<pre>";
print_r($sa);
echo "<br>";
echo implode(' ',$a);




