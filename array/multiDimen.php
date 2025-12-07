<!-- array inside array -->

<?php
    $students = array(
        array("name" => "ram", "class" => "BCA"),
        array("name" => "hari", "class" => "BHM"),
        
    );

echo "<pre>"; print_r($students);

foreach($students as $key => $value){
    foreach($value as $k => $v){
        echo "<b>{$k}:</b> {$v} <br>";
    }
    
}

?>