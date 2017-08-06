<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include'config.php';
 $select =  mysqli_query($d,"select * from testimonial" );
$row = mysqli_fetch_array($select);
 
 
?>
