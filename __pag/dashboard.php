<?php
   include_once("C:\\xampp\\htdocs\\__inc\\config.php");
   include_once(DIR.'/__inc/structure/session.php'); 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GeneticDB - Dashboard</title>

    <!-- jquery -->
    <script src="/../vendor/jquery/jquery.min.js"></script>
    <script src="/../vendor/bootstrap/js/bootstrap.js"></script>
    
    <!-- Custom fonts for this template-->
    <link href="/../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 
   

    <!-- Custom styles for this template-->
    <link href="/../css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="/../css/dashboard.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-left">
        <a class="navbar-brand" href="#">
            <img src="/../images/half-size-light.png" width="20" height="30">
            GeneticDB
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="height: 100%">
            <ul class="navbar-nav">
                <li class="nav-item active" style="padding-top: 3%">
                    <a class="nav-link" href="/__pag/dashboard.php"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
                </li>
                <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-database"></i> Database</a>
                </li>
                <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                </li>
                <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i> Configurations</a>
                </li>
                <hr class="sidebar-divider">
                <li class="nav-item justify-content-end nav-item-end">
                    <a class="nav-link" href="/../__inc/structure/logout.php"><i class="fas fa-door-open"></i> Sign out</a>
                </li>
            </ul>
        </div><!-- collapse -->
    </nav><!-- navbar -->
    
    <div class="d-flex flex-column">

        <nav class="navbar navbar-expand-lg navbar-light bg-light ml-auto userNav">
            <div class="collapse navbar-collapse" id="navbarNav" style="height: 100%">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link">
                            <i class="fas fa-bell notificationBell" style="vertical-align: -webkit-baseline-middle;"></i>
                            <span class="notificationCounter">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <p class="greetingUser"><?php echo 'Welcome, ';echo $_SESSION['login_user'] ?></p>
                    </li>
                </ul>
            </div><!-- collapse -->
        </nav><!-- navbar -->


        <div class="container-fluid">
            <h1 class="title">Dashboard</h1>
        </div><!-- container -->
    </div>
</body>
</html>