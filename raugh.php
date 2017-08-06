
<?php
 
//The original date format.
$original = '2015-08-10';
 
//Explode the string into an array.
$exploded = explode("-", $original);
 
//Reverse the order.
$exploded = array_reverse($exploded);
 
//Convert it back into a string.
$newFormat = implode("-", $exploded);
 
//Print it out.
echo $newFormat;
?>