<!DOCTYPE html>
<html>
<body>

<?php
$original = '2015-08-10';
 
//Explode the string into an array.
$exploded = explode("-", $original);
 
//Reverse the order.
$exploded = array_reverse($exploded);
 
//Convert it back into a string.
$newFormat = implode("-", $exploded);
 
//Print it out.

// Prints the day


// Prints the day, date, month, year, time, AM or PM
echo date(strtotime( '2015-08-10',"00:00:00"));

// Prints October 3, 1975 was on a Friday
?>

</body>
</html>