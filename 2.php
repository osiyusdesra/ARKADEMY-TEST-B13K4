<?php

$username = "OSIYUSd";
$pass = "111*ooo";
   if (preg_match ('/^[A-Z]{7}$/', $username)) {
       echo "Username benar";}
       else{
       echo "Username salah";
   }

echo "<br>";

    $cr = '*';
    $pw = preg_quote($cr, '/');
   
 if (preg_match('/(^[0-9*]{3})(['.$pw.'])([[a-zA-Z*]{3,3}$)/', $pass)){
       echo "Password benar";}
       else{
       echo "Password salah";
   }
   

?>
