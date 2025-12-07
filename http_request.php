<!-- 
 $_GET, $_POST
 PHP Special/ super global variables used to collect data from the HTML form, when data is sent to a file via action attribute in the <form> tag.
    
 <form action="file.php" method="post/get">

 $_GET -> Data is appended to the URL
            not secure
            char limit
            bookmark is poosible with values
            get request can be cached
            better for a search page

 $_POST -> Data is packaged inside the body of the HTTP request
            more secure
            no data limit
            can not bookmark
            post request can not be cached
            better for submitting data in the database
            better for submitting suer credentials and user info
 -->
 <?php
    //  echo "<pre>"; print_r($_GET);  echo "</pre>";
    if (isset($_GET['submit'])) {
    $name = htmlspecialchars(($_GET['name'] ?? ''));  //?? -> if set name not "" as null
    $pass = trim($_GET['password'] ?? '');

    if (empty($name) && empty($pass)) {
        echo "Enter username and password<br><br>";
    } elseif (empty($name)) {
        echo "Enter Username<br><br>";
    } elseif (empty($pass)) {
        echo "Enter Password<br><br>";
    } else {
        echo htmlspecialchars($name) . "<br>";
        echo htmlspecialchars($pass) . "<br><br>";
    }
}

 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="">
        <div>
            <label for="name"><b>Username: </b><input type="text" name="name" id="name"></label>
        </div><br>
        <div>
            <label for="pass"><b>password: </b><input type="password" name="password" id="pass"></label>
        </div><br>
        <div>
            <button type="submit" name="submit">Log in</button>
        </form>
    </div><br><br><br>
    <a href="./http_request.php">Home</a>
 </body>
 </html>