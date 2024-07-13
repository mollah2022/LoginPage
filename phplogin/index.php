<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
      <head>
             <meta charset="UTF-8">
             <meta http-equive="X-UA-Compatible" content="IE=edge">
             <meta name="viewport"content="width=device-width,initial-scale=1.0">
             <title> Document </title>
             <link rel="stylesheet"type="text/css"href="style.css">
      </head>
      <body>
           <div id="from">
               <h1> Login from</h1>
               <br name="from" action="login.php"$nsubmit="return isvalid()"method="POST">
                   <label>Username: </label>
                   <input type="text" id="user"name="user"></br></br>
                   <label>Password</label>
                   <input type="password" id="pass"name="pass"></br></br>
                   <input type="submit" id="btn"value="Login"name="submit">
               </from>
           </div>
           <script>
              function isvalid(){
                         var user =document.from.user.value;
                         var pass = document.from.pass.value;
                         if(user.length=="" && pass.length==""){
                             alert("Username and password field as empty!!!");
                             return false
                         }
                         else{
                          if(user.length==""){
                             alert("Username  field as empty!!!");
                             return false
                         }
                         if(pass.length==""){
                             alert("Password  field as empty!!!");
                             return false
                         }
                     }
              }
           </script>
      </body>
</html>