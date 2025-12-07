<?php  
    //used to manage information across difference pages

    session_start();
    $_SESSION['username'] = 'saphal';
    $_SESSION['favCat']  = "Books";
    echo "we have saved your session";


?>