<?php
	include("header.php");
?>
	<div class="row content">
		<div class="col-sm-2 sidenav">
			<center>
				<div class="figure"><img src="../images/logo.jpg" class="img-circle" height="150" width="150"></div>
				<div class="fig-caption">Kathmandu High School<br /><div class="sidenav-tagline">Quality Education for Leadership</div></div>
			</center>
			<a href="../parents" class="active"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
			<a href="../parents/student-info.php"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Student Info</a>
			<a href="../parents/homework.php"><i class="fas fa-edit"></i>&nbsp;&nbsp;&nbsp;Homework</a>
			<a href="../parents/results.php"><i class="fas fa-marker"></i>&nbsp;&nbsp;&nbsp;Results</a>
			<a href="#"><i class="fas fa-money-bill-wave"></i>&nbsp;&nbsp;&nbsp;Fee Details</a>
			
			<a href="#"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;Messages</a>
		</div>

		<div class="col-sm-10 description">
			<div class="page-header title">Home<p class="home-tagline">Welcome back, <i>Mr. Kiran Neupane</i></p></div>
			<div class="row text-center">
				<div class="col-sm-4 box">
					<p>31</p>
					<p>New Messages</p>
				</div>
				<div class="col-sm-4 box">
					<p>5</p>
					<p>Task Deadline</p>
				</div>
				<div class="col-sm-4 box">
					<p>3</p>
					<p>Complaints Recieved</p>
				</div>
			</div>

			<div class="row">
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<div class="row">
									<a data-toggle="collapse" href="#collapse1">
									<div class="col-sm-6 menu">
										<i class="fas fa-newspaper"></i>&nbsp;&nbsp;&nbsp;News and Announcement
									</div>
									<div class="col-sm-6" align="right">
										<i class="fas fa-chevron-circle-down fa-2x"></i>
									</div>
									</a>
								</div>
							</div>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<ul class="list-group">
								<li class="list-group-item">News 1</li>
								<li class="list-group-item">News 2</li>
								<li class="list-group-item">News 3</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	include("footer.php");
?>