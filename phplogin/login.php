<?php
      
      $conn = mysqli_connect("localhost","root","", "loginpage");
if($conn){
      echo"connected";
 }
 else{
       echo"Faild";
 }

        $username=$_POST['user'];
        $password=$_POST['pass'];

        $data = "INSERT INTO login VALUES(' ','$user','$pass')";
        $check  = mysqli_query($conn,$data);

        if($check){
            echo "DATA SENDED";
        }
        else{
             echo "DATA NOT SEND";
        }

?>