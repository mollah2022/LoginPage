<?php
$conn = mysqli_connect("localhost","root","", "loginpage");
if($conn){
      echo"connected";
 }
 else{
       echo"Faild";
 }

?>
