<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
            $file_name = $_POST['file_name'];
            $content = $_POST['content'];

            if(file_exists('files/'.$file_name.'.txt')){
                //append
                $file = fopen("$file_name.txt",'a') or die("File Doesn't exist.");
                fwrite($file,$content);
                fclose($file);

            }else{
                //cretae a file
                $file = fopen("files/$file_name.txt","w");
                fwrite($file,$content);
                fclose($file);
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
    <form action="" method="post">
        <h1>Create a file with Content</h1>
        <label for="file_name">File Name : <input type="text" name="file_name" id="file_name"></label><br>
        <label for="content">Content: <textarea name="content" id="content" rows="10" cols="10"></textarea></label><br>
        <input type="submit" value="Create" name="create">
    </form>
</body>
</html>