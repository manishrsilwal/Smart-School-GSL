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
		<a href="../teacher/marksentry.php" class="active"><i class="fas fa-marker"></i>&nbsp;&nbsp;&nbsp;Marks Entry</a>
		<a href="../teacher/attendance.php"><i class="fas fa-book-open"></i>&nbsp;&nbsp;&nbsp;Attendance</a>
		<a class="btn dropdown-btn"><i class="fas fa-edit dropdown-toggle"></i>&nbsp;&nbsp;&nbsp;Assignments &nbsp;&nbsp;&nbsp;<span class="caret"></span></a>
<div class="dropdown-container">
		    <a href="../teacher/homeworkentry.php"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;&nbsp;Assign the Work</a>
		    <a href="../teacher/homeworkcheck.php"><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;Check the Work</a>
		</div>
		<a href="../teacher/student-info.php"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Student Info</a>
		<a href="#"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;Messages</a>
	</div>

	<div class="col-sm-10 description">
		<div class="page-header title">Marks Entry<p class="home-tagline">Update the marks for examination</p></div>
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
						<label for="Full-marks">Score of:</label>
						</div>
						<div class="col-md-10">
							<div class="col-md-6">
								<div class="radio"><label><input type="radio" name = "optradio" checked>1<sup>st</sup> Monthly Test</label></div>
								<div class="radio"><label><input type="radio" name = "optradio">2<sup>nd</sup> Monthly Test</label></div>
								<div class="radio"><label><input type="radio" name = "optradio">3<sup>rd</sup> Monthly Test</label></div>
							</div>
							<div class="col-md-6">
								<div class="radio"><label><input type="radio" name = "optradio">1<sup>st</sup> Terminal Exam</label></div>
								<div class="radio"><label><input type="radio" name = "optradio">2<sup>nd</sup> Terminal Exam</label></div>
								<div class="radio"><label><input type="radio" name = "optradio">3<sup>rd</sup> Terminal Exam</label></div>
							</div>
						</div>
					</div>
					<br />
					<div class="row">
						<div class="col-md-2">
						<label for="Full-marks">Full Marks:</label>
						</div>
						<div class="col-md-2">
						<input type="text" class="form-control" id="Full-marks">
						</div>
					</div>
					<br />
				</div>
			</form>
		</div>

		<div class="row" id="total-contents">
			<p class="text-center"><b>Enter the marks of the students below:</b></p>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th class="col-md-2">Roll Number</th>
							<th class="col-md-8">Name</th>
							<th class="col-md-2">Marks</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="col-md-2">1.</td>
							<td class="col-md-8"><img src="../images/profile/1.jpg" class="img-circle img-thumbnail" width="100" height="100"> Kawish Bhakta Shrestha</td>
							<td class="col-md-2" style="vertical-align: middle;"><input type="text" class="form-control input-lg" id="Full-marks"></td>
						</tr>
						<tr>
							<td class="col-md-2">2.</td>
							<td class="col-md-8"><img src="../images/profile/2.jpg" class="img-circle img-thumbnail" width="100" height="100"> Rashika Karki</td>
							<td class="col-md-2" style="vertical-align: middle;"><input type="text" class="form-control input-lg" id="Full-marks"></td>
						</tr>
						<tr>
							<td class="col-md-2">3.</td>
							<td class="col-md-8"><img src="../images/profile/3.jpg" class="img-circle img-thumbnail" width="100" height="100"> Samayee Dhungel</td>
							<td class="col-md-2" style="vertical-align: middle;"><input type="text" class="form-control input-lg" id="Full-marks"></td>
						</tr>
						<tr>
							<td class="col-md-2">4.</td>
							<td class="col-md-8"><img src="../images/profile/4.jpg" class="img-circle img-thumbnail" width="100" height="100"> Kiran Neupane</td>
							<td class="col-md-2" style="vertical-align: middle;"><input type="text" class="form-control input-lg" id="Full-marks"></td>
						</tr>
						<tr>
							<td class="col-md-2">5.</td>
							<td class="col-md-8"><img src="../images/profile/5.png" class="img-circle img-thumbnail" width="100" height="100"> Krishna Shrestha</td>
							<td class="col-md-2" style="vertical-align: middle;"><input type="text" class="form-control input-lg" id="Full-marks"></td>
						</tr>
					</tbody>
				</table>
			</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<button class="btn btn-success">Submit</button>
					</div>
				</div>
		</div>

	</div>
</div>


<?php
	include("footer.php");
?>