<?php
 
    $name= 'Hello i\'m saphal';
    echo $name;
    echo "<br>";
    
    echo "length = ".strlen($name);
    echo "<br>";
    
    echo "total word =".str_word_count($name);
    echo "<br>";

    echo strrev($name);
    echo "<br>";

    echo "saphal search index = ". strpos($name, "saphal");
    echo "<br>";

    echo "String replace saphal by ram ".str_replace("saphal","Ram",$name);
    echo "<br>";

    echo str_repeat($name,5);
    echo "<br>";

    echo "<pre>";
    echo "right trim =". rtrim("      this is a good boy    ");
    echo "</pre>";
    echo "<pre>";
    echo "left trim =". ltrim("    this is a good boy");
    echo "</pre>"; 
    echo "<br>";


?>