<?php
	include("header.php")
?>

	<div class="row content">
		<div class="col-sm-2 sidenav">
			<center>
				<div class="figure"><img src="../images/list.png" class="img-circle" height="150" width="150"></div>
				<div class="fig-caption">Kathmandu High School<br /><div class="sidenav-tagline">Quality Education for Leadership</div></div>
			</center>
			<a href="../parents"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
			<a href="../parents/student-info.php" class="active"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Student Info</a>
			<a href="../parents/homework.php"><i class="fas fa-edit"></i>&nbsp;&nbsp;&nbsp;Homework</a>
			<a href="../parents/results.php"><i class="fas fa-marker"></i>&nbsp;&nbsp;&nbsp;Results</a>
			<a href="#"><i class="fas fa-money-bill-wave"></i>&nbsp;&nbsp;&nbsp;Fee Details</a>
			<a href="#"><i class="fas fa-tasks"></i>&nbsp;&nbsp;&nbsp;Student Progress</a>
			<a href="#"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;Messages</a>
		</div>

		<div class="col-sm-10 description">
			<div class="page-header title">Student's Information <p class="home-tagline">Your children information, Mr. Kiran Neupane</p></div>

			<div class="row" id="total-contents">
				<div class="col-md-2">
					<label for="opt">Child's Name:</label>
				</div>
				<div class="col-md-2">
					<select class="form-control" id="opt">
						<option>Bhabin Neupane</option>
						<option>Shailesh Neupane</option>
						<option>Elina Neupane</option>
						<option>Karuna Neupane</option>
					</select>
				</div>				
			</div>

			<div class="row content">
				<div class="col-md-2">
					<img src="../images/bhabin.jpg" width="250" height="250" class="img-responsive img-thumbnail">
				</div>
				<div class="col-md-5">
					<p><label>Name:</label> Bhabin Neupane</p>
					<p><label>Class:</label> 9</p>
					<p><label>Section:</label> B</p>
					<p><label>Roll Number:</label> 16</p>
					<p><label>Father's Name:</label> Kiran Neupane</p>
					<p><label>Mother's Name:</label> Bajrayogini Neupane</p>
					<p><label>Email:</label> bhabinpay@gmail.com</p>
					<p><label>Contact Number:</label> 9849949202</p>
				</div>
				<div class="col-md-5">
					<p><label>Class Teacher:</label> Mr. Dipesh Khadka</p>
					<p><label>Email:</label> khadkadipesh09@gmail.com</p>
					<p><label>Contact Number:</label> 9843251554</p>
					<p><button class="btn btn-info">Click here for list of teachers</button></p>
				</div>
			</div>

			<div class="row">
			<div class="panel panel-success">
				<div class="panel-heading">Academic Performance</div>
				<div class="panel-body">						
				<p><label>Score in First Terminal Exam:</label> 80.8%</p>
				<p><label>Score in Second Terminal Exam:</label> 80.4%</p>
			</div>
			</div>
			</div>
			<div class="row">
				<div class="panel panel-success">
					<div class="panel-heading">Attendance Record</div>
					<div class="panel-body">						
					<p><label>Number of Absent Days:</label> 2</p>
				</div>
				</div>
			</div>
		</div>
	</div>

<?php
	include("footer.php")
?>