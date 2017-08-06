
<?php
session_start();
include'config.php';
if($_SESSION['user']==''){
    
   echo '<script>
            alert("Session Expire");
            window.location.href="memb_login.php";
         </script>';
    
}
if(isset($_POST['submit']))
{
    $fname=$_POST['fname']; 
     $lname=$_POST['lname']; 
     $email=$_POST['email']; 
     
     $mobile=$_POST['mobile'];
    
    $update=mysqli_query($d,"update  signup2 set firstname='".$fname."',lastname='".$lname."',email='".$email."',mobile='".$mobile."' where ID='".$_SESSION['id']."' ");
    if($update){
        
         header('location:myProfile.php'); 
    } 
    else {
        
        header('location:editMyProfile.php'); 
    }
 }

?>
<html>
    <head>
        <title></title>
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
              
            
            
            
       input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

#signup {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width:620px;
    margin-top: -70px;
} 
</style>
    </head>
   <body style="background-color:moccasin">
        
           <?php include'header.php'; ?>
            <div id="d6">
                <div id="d14">
            
     
       

<div id="signup">
    <h3 style="color:red;"><center>Update Profile</center></h3><br><br>
            <form method="POST">
               <?php 
               $query = mysqli_query($d,'select * from  signup2 where ID="'.$_SESSION['id'].'"');
               $row = mysqli_fetch_array($query);
               ?>
                <label>firstname</label>
                <input type="text" name="fname" value="<?php echo $row['firstname']; ?>" required>
                <label>lastname</label>
                <input type="text" name="lname"value="<?php echo $row['lastname']; ?>"required>
                <label>email</label>
                <input type="text" name="email" value="<?php echo $row['email']; ?>"required>
                
                <label>mobile</label>
                <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>"required>
                <input type="submit" value="submit" name="submit"> 
              </form>
        </div>
           </div>
            <?php include'sidebar.php'; ?>
               
            </div>
           
            <?php include'footer.php'; ?>
        </body>
</html>
           
    </body>
</html> 
