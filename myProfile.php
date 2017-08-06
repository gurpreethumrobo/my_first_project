<?php
session_start();
include'config.php';
if($_SESSION['user']==''){
    
   echo '<script>
            alert("Session Expire");
            window.location.href="memb_login.php";
         </script>';
    
}

 $select=  mysqli_query($d,"select * from signup2");
 $row = mysqli_fetch_array($select)
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
               margin-top: 100px;
            }
        
            #d15{
               width:210px;
               height:320px;
               float:right;
               margin-right: 2px;
             margin-top: 100px;
               
              
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
         
     <table style="margin-top:-80px">
<tr><td><a href="editMyProfile.php"> 
<button type="button"style="background-color: lightskyblue;color:white;font-size: 16px; height:50px;width:150px;border-radius: 5px;">
            
         My Profile </button> </a> </td>

 <td><a href="changePassword.php">
     <button type="button" style="background-color: red;color:white;
             height:50px;width:150px;border-radius: 5px;font-size:16px">Change Password</button></a> </td>
 <td><a href="add_thought.php">
     <button type="button" style="background-color: lightgreen;color:white;
             height:50px;width:150px;border-radius: 5px;font-size:16px">Add Thought</button></a> </td>
 <td><a href="view_thought.php">
     <button type="button" style="background-color: goldenrod;color:white;
             height:50px;width:150px;border-radius: 5px;font-size:16px">View Thought</button></a> </td>
     </tr>
     </table>
       
       
       
                </div>
           <?php include'sidebar.php'; ?>
                
               
            </div>
            <?php include'footer.php'; ?>
            
        </body>
</html>