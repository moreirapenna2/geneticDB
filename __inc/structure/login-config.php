<?php
   session_start();
   $error="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      if(!empty($_POST['username'])){
         $myusername = mysqli_real_escape_string($db,$_POST['username']);
         $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

         $sql = "SELECT id FROM users WHERE username = '$myusername' AND password = SHA1('$mypassword')";
         $result = mysqli_query($db,$sql);
         
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         
         if(isset($row['id']))
         $active = $row['id'];
         
         $count = mysqli_num_rows($result);
         
         // If result matched $myusername and $mypassword, table row must be 1 row
         if($count == 1) {
            $_SESSION['login_user'] = $myusername;
            
            header("location: __pag/welcome.php", true);
         }else {
            $error = "Your Login Name or Password is invalid";
         }
      }
      
   }
?>