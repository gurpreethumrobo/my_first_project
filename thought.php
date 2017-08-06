

<?php
session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include'config.php';
?>

<html>
    <head><title>
            
        </title>
        <style>
            #d1
            {
            margin-left:200px;    
                
            }
            #d2
            {
              width:974px;
              height:50px;
              background-color:red;
              margin-left: 200px;
              border-radius: 10px;
           
              
            }
            
             #d6{
             
               float:left;
               margin-left: 200px; 
               
                height:975px;
                width:970px;
                background-color: white;
                
                
                
            }
      
            
            #d14{
               width:680px;
               height:370px;
            
               float: right;
               margin-right: 10px;
               margin-top: 70px;
            }
        
            #d15{
               width:210px;
               height:320px;
               float:right;
               margin-right: 2px;
             margin-top: -100px;
               
              
               background-color:tan; 
               border-radius:6px;
            }
  
            
            
            
           
       
            #dd{
                margin-right:2px;
                float:right;
                 
            }
            
     
           
            
        </style>
    </head>
        <body style="background-color:moccasin">
        
     <?php include'header.php'; ?>
            <div id="d6">
                <div id="d14">
                    
 <?php

$num_rec_per_page=5;

include'config.php';
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$rs_result  =  mysqli_query ($d,"SELECT * FROM thought_of_day LIMIT $start_from, $num_rec_per_page"); 
//run the query
?>     
                    
        <table style="background-color: lightgreen;border-radius: 5px;width:660px;height:230px;margin-top: -45px;">  
                    <th style="color:green;font-size: 22px;padding:0px;height: 50px"><i>Thought of the day</i></th>

<?php 
while ($row = mysqli_fetch_assoc($rs_result)) { 
?> 
            <tr style="background-color:aliceblue; ">
          
            <td><?php echo $row['description']; ?></td>            
            </tr>
<?php 
}; 
?> 

     </table>
        
   <?php 
 $rs_result=  mysqli_query ($d,"SELECT * FROM thought_of_day"); 
 //run the query
$total_records = mysqli_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

   

?><br>
<?php
                    

for ($i=1; $i<=$total_pages; $i++) { ?>
                    
                  
       <li style="display:inline; border:1px solid;padding:5px 10px;background: red;color:white;" ><a style="text-decoration: none;color:white;"  href='thought.php?page=<?php   echo $i; ?>'><?php   echo $i; ?></a></li>
             
<?php }; ?>                 
                
                
                
                
                </div>
           <?php include'sidebar.php'; ?>
               
            </div>
            
            <?php include 'footer.php'; ?>
        </body>
</html>

