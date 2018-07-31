<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
	<?php if(isset($title)) echo($title); else echo "Smart School"; ?>
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link href="../fontawesome/css/all.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/paper-dashboard.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/teacher-style.css">
	<link rel="stylesheet" href="../css/style.css">
</head>


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="../teacher/" class="simple-text logo-mini">
	            	<div class="logo-image-small">
	            		<img src="../images/logo.jpg">
	            	</div>
            	</a>
                <a href="../teacher/" class="simple-text logo-normal">
                    Smart School
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item <?php if(isset($home)) echo('active'); ?>">
                        <a class="nav-link" href="../teacher">
                            <i class="nc-icon nc-layout-11"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(isset($attendance)) echo('active'); ?>">
                        <a class="nav-link" href="../teacher/attendance.php">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Attendance</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(isset($homework)) echo('active'); ?>">
					    <a class="nav-link" href="../teacher/homeworkentry.php">
					        <i class="nc-icon nc-tile-56"></i>
					        <p>Homework</p>
					    </a>
					</li>
                    <li class="nav-item btn-rotate dropdown <?php if(isset($exam)) echo('active'); ?>">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="nc-icon nc-paper"></i>
                            Exam Section &nbsp;
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../teacher/marksentry.php">Enter the Marks</a>
                                    <a class="dropdown-item" href="../teacher/viewmarksheet.php">View the Marksheet</a>
                                </div>
                    </li>
                    <li class="active-pro">
		              	<img src="../images/logo.png">
		          	</li>
                </ul>
            </div>
</div>
 
    <div class="main-panel">
      <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                    <div class="navbar-toggle">
	                    <button type="button" class="navbar-toggler">
			                <span class="navbar-toggler-bar bar1"></span>
			                <span class="navbar-toggler-bar bar2"></span>
			                <span class="navbar-toggler-bar bar3"></span>
		              	</button>	
	              	</div>
	              	<a class="navbar-brand" href="#">Welcome, Prof. Sharma</a>
					</div>
                    <button class="navbar-toggler" type="button" data-target="#navigation" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <p class="d-lg-none d-md-block">
                                        Notifications
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">You have a meeting at 4 pm.</a>
                                    <a class="dropdown-item" href="#">You have to assign today's homework by 5 pm.</a>
                                </div>
                            </li>

                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p class="d-lg-none d-md-block">
                                        Settings
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
