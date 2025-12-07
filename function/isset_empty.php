<!-- 
 isset() -> Return TRUE, if a variable is declared and not null
 empty() -> Return True, if a variable is not declared, false, null

 false -> "", null, 0, false, variable not found
  -->

  <?php

  $name = "saphal";
 if(isset($name)){
    echo "Name is SET as {$name}";
 }else{
    echo "Name is not SET";
 }
 echo "<br>";

 $name = "";
 if(empty($name)){
     echo "Name is not SET";
    }else{
     echo "Name is  SET as {$name}";
 }
  ?>