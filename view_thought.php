
<?php
session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include'config.php';

if(isset($_GET['id']))
{
    $id=$_GET['id'];
$delete=mysqli_query($d,"delete from thought_of_day where id='".$id."' ");
if($delete)
    {
    header('location:view_thought.php');
    
}
 else 
    
 {
   echo '<script>
            alert("cant be deleted");
            window.location.href="memb_login.php";
         </script>';  
 }
}

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
            <div id="d6"><div id="d14">
        <table style="background-color: lightgreen;border-radius: 5px;width:660px;height:230px;margin-top: -45px;">  
                    <th style="color:green;font-size: 22px;padding:0px;height: 50px"><i>Thought of the day</i></th>
  <?php
 
  $select=mysqli_query($d,"select * from thought_of_day  where memb_id='".$_SESSION['id']."' ");
  $row = mysqli_fetch_array($select) ?>
     <tr style="background-color:aliceblue; "> <td> <?php echo $row['description'];?></td> 
        
         <td><a href="add_thought.php?id=<?php echo $row['id']; ?>">Edit</a></td>
         
         <td><a href="view_thought.php?id=<?php echo $row['id']; ?>">Delete</a></td>
     </tr>
     



   
                   
                    </table>
                
                
                
                
                </div>
           <?php include'sidebar.php'; ?>
               
            </div>
            
            <?php include 'footer.php'; ?>
        </body>
</html>

