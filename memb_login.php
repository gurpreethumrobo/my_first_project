<?php
session_start();
include 'config.php';
if(isset($_POST['login'])) 
        {     

            $uname = $_POST["username"]; 
            $password = $_POST["password"];
            
            

            $result1 = mysqli_query($d,"SELECT * FROM signup2 WHERE email = '".$uname."' and password = '".$password."' ");
$row = mysqli_fetch_array($result1);
$email = $row['email'];
$pwd = $row['password'];

        
 
 
            if($uname == $email && $password == $pwd) 
            { 
               $_SESSION['user']=$uname; 
                $_SESSION['id']=$row['ID']; 
              header('location:myProfile.php'); 
            }
            else
            {
              echo '<script>
               
            alert("email password not matched");
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
input[type=password], select {
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

#login {
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
            
     
       
       
        <div id="login">
       
       <table style="width:620px">
      <tr>  <th style="color:red;font-size: 20px;padding:0px">Login</th></tr>
      
       <tr><td> </td></tr>
        <tr><td> </td></tr>
         <tr><td> </td></tr>
  <form method="post">
    

   <tr><td> <label>Username</label></td></tr>
   <tr><td> <input type="text" name="username" required></td></tr>

  <tr><td>  <label>Password</label></td></tr>
   
  <tr><td><input type="password" name="password" required></td></tr>
    <tr><td><input type="submit" value="Login" name="login"></td></tr>
  </form>

       </table>
       </div>
       
       
       
       
                </div>
           <?php include'sidebar.php'; ?>
               
            </div>
           <?php include'footer.php'; ?>
            
        </body>
</html>
