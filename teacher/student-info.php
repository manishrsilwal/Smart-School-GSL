<?php
	include("header.php")
?>

	<div class="row content">
		<div class="col-sm-2 sidenav">
			<center>
				<div class="figure"><img src="../images/logo.jpg" class="img-circle" height="150" width="150"></div>
				<div class="fig-caption">Kathmandu High School<br /><div class="sidenav-tagline">Quality Education for Leadership</div></div>
			</center>
			<a href="../teacher"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
		<a href="../teacher/marksentry.php"><i class="fas fa-marker"></i>&nbsp;&nbsp;&nbsp;Marks Entry</a>
		<a href="../teacher/attendance.php"><i class="fas fa-book-open"></i>&nbsp;&nbsp;&nbsp;Attendance</a>
		<a href="../teacher/homeworkentry.php"><i class="fas fa-edit"></i>&nbsp;&nbsp;&nbsp;Assign Work</a>
		<a href="../teacher/student-info.php" class="active"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Student Info</a>
		<a href="#"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;Messages</a>
		</div>

		<div class="col-sm-10 description">
			<div class="page-header title">Student's Information <p class="home-tagline">Get all information of the students</p></div>
			<div class="row" id="total-contents">
				<div class="col-md-2">
					<label for="opt">Search By:</label>
				</div>
				<div class="col-md-2">
					<select class="form-control" id="opt">
						<option>Name + Class</option>
						<option>Class</option>
					</select>
				</div>
			</div>
			<br />
			<div class="row" id="total-contents">
				<div class="col-md-2">
					<label for="search-name">Enter the name:</label>
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder="Bhabin Neupane">
				</div>
			</div>
			<br />
			<div class="row" id="total-contents">
				<div class="col-md-2">
					<label for="search-name">Enter the Class:</label>
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder="9">
				</div>
			</div>

			<div class="row content">
				<div class="panel panel-info">
					<div class="panel-heading">Results</div>
					<div class="panel-body">
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
				</div>
		</div>
	</div>

<?php
	include("footer.php")
?>