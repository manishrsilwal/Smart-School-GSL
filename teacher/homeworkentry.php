<?php
	include("header.php");
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
		<a class="dropdown-btn"><i class="fas fa-edit dropdown-toggle"></i>&nbsp;&nbsp;&nbsp;Assignments &nbsp;&nbsp;&nbsp;<span class="caret"></span></a>
	  	<div class="dropdown-container">
		    <a href="../teacher/homeworkentry.php" class="active"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;&nbsp;Assign the Work</a>
		    <a href="../teacher/homeworkcheck.php"><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;Check the Work</a>
		</div>
		<a href="../teacher/student-info.php"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Student Info</a>
		<a href="#"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;Messages</a>
	</div>

	<div class="col-sm-10 description">
		<div class="page-header title">Assign Work<p class="home-tagline">Update the homeworks</p></div>
		<div class="row">
			<form id="total-contents">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
						<label for="sel1">Choose the Class:</label>
						</div>
						<div class="col-md-2">
						<select class="form-control" id="sel1">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
						</div>
					</div>
					<br />
					<div class="row">
						<div class="col-md-2">
						<label for="sel2">Choose the Section:</label>
						</div>
						<div class="col-md-2">
						<select class="form-control" id="sel2">
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
							<option>E</option>
						</select>
						</div>
					</div>
					<br />
					<div class="row">
						<div class="col-md-2">
						<label>Subject: </label></div> <div class="col-sm-1">Mathematics</div>
						<br />
						<br />
					</div>
					<div class="row">
						<div class="col-md-2">
						<label for="date">Homework given date:</label>
						</div>
						<div class="col-md-2">
							<input type="date" class="form-control" name="givendate">
						</div>
					</div>
					<br />
					<div class="row">
						<div class="col-md-2">
						<label for="date">Date of submission:</label>
						</div>
						<div class="col-md-2">
							<input type="date" class="form-control" name="dateofsubmission">
						</div>
					</div>
					<br />
					<div class="row col-md-12">
						<div class="form-group">
						<label for="homework">Homework:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
						<br />
						<a class="btn btn-success">Submit</a>
						</div>
					</div>
				</div>
			</form>
		</div>

		

	</div>
</div>


<?php
	include("footer.php");
?>