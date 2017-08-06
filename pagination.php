<?php

$num_rec_per_page=5;

include'config.php';
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$rs_result  =  mysqli_query ($d,"SELECT * FROM thought_of_day LIMIT $start_from, $num_rec_per_page"); 
//run the query
?> 
<table>

<?php 
while ($row = mysqli_fetch_assoc($rs_result)) { 
?> 
            <tr>
          
            <td><?php echo $row['description']; ?></td>            
            </tr>
<?php 
}; 
?> 
</table>
<ul style="display:inline">
<?php 
 $rs_result=  mysqli_query ($d,"SELECT * FROM thought_of_day"); 
 //run the query
$total_records = mysqli_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);

for ($i=1; $i<=$total_pages; $i++) { 
?>
<li style="display:inline; border:1px solid;padding:5px 10px;background: red;color:white;" ><a style="text-decoration: none;color:white;"  href='pagination.php?page=<?php   echo $i; ?>'><?php   echo $i; ?></a></li>
<?php } ?>
</ul>
