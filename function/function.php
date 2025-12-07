<!-- 
 user defined function
 bloack of statements that can be reused in a program
 1. function call
 2. function definition
  -->
<?php

//function definition
function sum($a, $b, $c=0){
    return $a+$b+$c;
}


$sum = sum(2,3);
echo $sum;




?>