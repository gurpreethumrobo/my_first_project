
<?php
require'facebook.php';
$facebook = new Facebook(array(
    'appId'=>'1807148679573503',
    'secret'=>'304b1b2f657156e5a295528dd25ef90c'
    ));
if($facebook->getUser()==0){
    $login = $facebook->getLoginUrl();
    echo"<a href='$login'>Login with facebook</a>";
}
 else {
 
    echo"you are now logged in using facebook.";
 }

?>