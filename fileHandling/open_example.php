<?php 

    //display all content of a file
    // readfile("info.txt");
    // $file = fopen("info.txt","r") or die("file doesn't exist");

    // echo "Hello";

    // while(!feof($file)){
    //     echo fgetc($file);
    //     echo "\n";

    // }
    // echo fgetc($file);
    // echo fgetc($file);
    // echo fgetc($file);

    $file = fopen("info.txt","w") or die("file doesn't exist");

    fwrite($file,"Hello ram");


    fclose($file);

?>