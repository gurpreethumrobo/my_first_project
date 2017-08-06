
<?php
include 'config.php';
if(isset($_POST['login'])) 
        {     

            $uname = $_POST["uname"]; 
            $password = $_POST["password"];
            echo $uname;
            echo $password;

            $result1 = mysqli_query($d,"SELECT * FROM memb_signup WHERE email = '".$uname."' and password = '".$password."' ");
$row = mysqli_fetch_array($result1);
$email = $row['email'];
$pwd = $row['password'];
 echo $email;
 echo $pwd;
            if($uname == $email && $password == $pwd) 
            { 
              header('location:bootstrap.php'); 
            }
            else
            {
              echo 'an email  password not matched'; 
            }
    } 

?>







<html>
    <head>
        <title>login</title>
        
    </head>
    <body><div style="background-color:yellow;width:40%;height:50%">
            <form method='POST'>
                
<table>
    
    
   <tr><th>Login</th></tr>
   <tr><td>username</td><td><input type="text" name="uname" required></td></tr>
   <tr><td>password</td><td><input type="password" name="password" required></td></tr>
<tr><td><input type="submit" name="login" value="login"></td>
    <td><a href='memb_signup.php'><input type='button' value='signup'></td></tr>
  
    
</table>
            </form>
            
        </div>
        
        
    </body>
        </html>


