<?php 
/* <?php .......php code..... ?> ...html code here..... <?php .....continue php code here...... ?>
and if we have to add some php code inside html 
   ...html code..... <?php .....php code here..... ?>*/

$employees = array(
    "Ram" => "Software Engineer", 
    "Shaym" => "Web Developer", 
    "Hari" => "Web Designer");
// echo "<pre>";
// // print_r($employees);

    foreach($employees as $key => $value){

    
?>

<!-- <p><b>Name: </b>Value</p> -->
<p><b><?php echo ucwords($key)?>: </b><?php echo $value?></p>

<?php } ?>


<?php 
//predefined function

//keys
$keys = array_keys($employees);
echo "<pre>";
print_r($keys);

//values
$values = array_values($employees);
echo "<br><pre>";
print_r($values);

//flip(key as value and value as key)
$employees = array_flip($employees);
foreach($employees as $k => $v){

?> 
<p><b><?php echo $k ?>: </b><?php echo $v ?></p>

<?php } ?>








