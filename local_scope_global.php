<?php

    echo "Welcome to scope and local/global vars in php <br>";
    $a = 98; //global variable
    function printValue(){
        $a=97;  //local variable
        global $a;   //give me the acces to this global variable and can be update and are also update outside function but after using it
        $a = 10;
        echo "The value of your variable is $a <br>";
    }
    
    echo "$a <br>";
    printValue();
    echo "The value of your variable is $a <br>";


?>