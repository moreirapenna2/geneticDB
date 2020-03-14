<?php
    include_once(DIR.'/__inc/structure/session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "/../__inc/structure/logout.php">Sign Out</a></h2>
   </body>
   
</html>