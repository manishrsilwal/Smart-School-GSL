<!DOCTYPE html>
<html>
<head>
	<!-- Meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Smart School</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"> -->
	<link href="fontawesome/css/all.css" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/paper-dashboard.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/index-style.css">
</head>
<body>
	<div class="wrapper">
		<div class="row" id="login-box">
			<div class="col-md-3 col-sm-12 ml-auto mr-auto content-center">
				<div class="card shadow-index">
					<div class="card-header text-center">
						<h5 class="card-title">Welcome to</h5>
						<img src="images/logo.png" alt="SMART SCHOOL">
					</div>
					<div class="card-body">
						<form>
							<div class="form-group">
								<label for="email">Email <font color="red">*</font></label>
								<input type="email" name="email" class="form-control" placeholder="Enter your email">
							</div>

							<div class="form-group">
								<label for="password">Password <font color="red">*</font></label>
								<input type="password" name="password" class="form-control" placeholder="Enter your password">
							</div>
						</form>
						<div class="text-center">
							<button class="btn btn-danger" onclick="window.location.href='teacher/';">Login as a Teacher</button>
							<button class="btn btn-success" onclick="window.location.href='parents/';">Login as a Parent</button>
						</div>
					</div>
					<div class="card-footer text-center">
						<hr />
						<a href="#"><h6>FORGOT PASSWORD?</h6></a>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer footer-black footer-white ">
	        <div class="container-fluid">
	          <div class="row">
	            <nav class="footer-nav">
	              <ul>
	                <li>
	                  <a href="">Smart School</a>
	                </li>
	              </ul>
	            </nav>
	            <div class="credits ml-auto">
	              <span class="copyright">
	                ©
	                <script>
	                  document.write(new Date().getFullYear())
	                </script>, made with&nbsp;<i class="fa fa-heart heart"></i> by Team Caladrius
	              </span>
	            </div>
	          </div>
	        </div>
	      </footer>
	</div>


<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<script src="assets/js/plugins/chartjs.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/paper-dashboard.js"></script>
<script src="assets/demo/demo.js"></script>
</body>
</html>