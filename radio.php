<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Select any course</label><br>
        <input type="radio" name="course" value="BCA" id="">BCA <br>
        <input type="radio" name="course" value="BHM" id="">BHM <br>
        <input type="radio" name="course" value="BIM" id="">BIM <br>
        <input type="submit" value="confirm" name="confirm">
    </form>
    <?php
        if(isset($_POST['confirm'])){
            $course = null;
            if(isset($_POST['course'])){
                $course = $_POST['course'];
                echo "You select {$course}";
            }else{
                echo "Please select any of the course";
            }
        }
    ?>
</body>
</html>