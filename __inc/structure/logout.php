<?php
include_once("C:\\xampp\\htdocs\\__inc\\config.php");
   session_start();
   
   if(session_destroy()) {
      //$sLocation = "location: ".URL;
      header("location: /", true);
   }
?>