<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: /../../__pag/login.php");
   }
?>