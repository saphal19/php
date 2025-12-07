<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="def" action="" method='post'>
        <label for=""><b>Your Favourite Food</b></label><br>
        <label for="ff"><input type="checkbox" value="FastFood" name="foods[]" id="ff">FastFood</label><br>
        <label for="sweets"><input type="checkbox" value="Sweets" name="foods[]" id="sweets">Sweets</label><br>
        <label for="namkeen"><input type="checkbox" value="Namkeen" name="foods[]" id="namkeen">Namkeen</label><br>
        <label for="sf"><input type="checkbox" id="sf" name="foods[]" value="Street Food">Street Food</label><br>
        <input type="submit" value="Confirm" name="confirm" id="confirm">
        
    </form>
    <?php
        if(isset($_POST['confirm'])){
            $foods = $_POST['foods'];
            foreach($foods as $food){
                echo "you have selected: $food <br>";
            }   
        }
    
    
    ?>
</body>
</html>