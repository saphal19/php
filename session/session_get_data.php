<?php  
    
    //start the session and get the data

    session_start();
    if(isset($_SESSION['username'])) {
    echo  "Welcome, {$_SESSION['username']} <br> Your Favorite category is {$_SESSION['favCat']}" ;
    }else{
        echo "Please Login to continue";
    }
    


?>