<?php
include'config.php';

if(isset($_POST['signup']))
{
    $fname=$_POST['fname']; 
     $lname=$_POST['lname']; 
     $email=$_POST['email']; 
     $password= $_POST['password']; 
     $mobile=$_POST['mobile'];
    
    $insert=mysqli_query($d,"insert into signup2(firstname,lastname,email,password,mobile)values('".$fname."','".$lname."',
        '".$email."','".$password."','".$mobile."')");
    if($insert){
        
         header('location:myProfile.php'); 
    } 
    else {
        
        header('location:memb_signup.php'); 
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
    <h3 style="color:red;"><center>signup</center></h3><br><br>
            <form method="POST"> 
                <label>firstname</label>
                <input type="text" name="fname" required>
                <label>lastname</label>
                <input type="text" name="lname"required>
                <label>email</label>
                <input type="email" name="email"required>
                <label>password</label>
                <input type="password" name="password"required>
                <label>mobile</label>
                <input type="text" name="mobile"required>
                <input type="submit" value="signup" name="signup"> 
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

