<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php if(isset($title)) echo($title.' - Smart School'); else echo "Smart School"; ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="../fontawesome/css/all.css" rel="stylesheet">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="success">
      <div class="logo">
        <a href="../parents/" class="simple-text logo-mini">
              <div class="logo-image-small">
                <img src="../images/logo.jpg">
              </div>
            </a>
        <a href="../parents/" class="simple-text logo-normal">
          Smart School
        </a>
      </div>
      <div class="sidebar-wrapper" style="overflow:hidden;">
        <ul class="nav">
          <li <?php if(isset($info)) echo('class="active"'); ?> >
            <a href="./index.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Student Info</p>
            </a>
          </li>
          <li <?php if(isset($homework)) echo('class="active"'); ?> >
            <a href="./homework.php ">
              <i class="nc-icon nc-tile-56"></i>
              <p>Homework</p>
            </a>
          </li>
          <li <?php if(isset($result)) echo('class="active"'); ?> >
            <a href="./results.php">
              <i class="nc-icon nc-check-2"></i>
              <p>Results</p>
            </a>
          </li>
          <!-- <li>
            <a href="./user.html">
              <i class="nc-icon nc-single-02"></i>
              <p>Fee Details</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="nc-icon nc-tile-56"></i>
              <p>Messages</p>
            </a>
          </li> -->
           <li class="active-pro">
                <img src="../images/logo.png">
            </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Welcome Mr. Nikhil</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">  
            <!--   Notify Bell icon            -->
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i><p class="d-lg-none d-md-block"> Notifications </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">First Terminal Examinations Results have been published.</a>
                  <a class="dropdown-item" href="#">Vacation ending on 18 August, 2018.</a>
                </div>
              </li>

              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i><p class="d-lg-none d-md-block"> Settings </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
              <!-- Notify end  -->
            </ul>
          </div>
        </div>
      </nav>
