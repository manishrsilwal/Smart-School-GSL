<?php
include("header.php");
?>

<div class="row content">
		<div class="col-sm-2 sidenav">
			<center>
				<div class="figure"><img src="../images/logo.jpg" class="img-circle img-thumbnail" height="150" width="150"></div>
				<div class="fig-caption">Kathmandu High School<br /><div class="sidenav-tagline">Quality Education for Leadership</div></div>
			</center>
			<a href="../teacher"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
			<a href="../teacher/marksentry.php"><i class="fas fa-marker"></i>&nbsp;&nbsp;&nbsp;Marks Entry</a>
			<a href="../teacher/attendance.php" class="active"><i class="fas fa-book-open"></i>&nbsp;&nbsp;&nbsp;Attendance</a>
			<a href="../teacher/homeworkentry.php"><i class="fas fa-edit"></i>&nbsp;&nbsp;&nbsp;Assign Work</a>
			<a href="../teacher/student-info.php"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Student Info</a>
			<a href="#"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;Messages</a>
		</div>

		<div class="col-sm-10 description">
			<div class="page-header title">Attendance</div>
			<div class="row">
			<form id="total-contents">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
						<label for="sel1">Select Date:</label>
						</div>
						<div class="col-md-2">
						<input class="form-control" type="date" name="attendance">
						</div>
					</div>
					<br />
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
					</div>
					<br />
				</div>
			</form>
			</div>

			<div class="row" id="total-contents">
			<p class="text-center"><b>&#x2713; Tick only <font color="red">absent students</font>:</b></p>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th class="col-md-2">Roll Number</th>
							<th class="col-md-8">Name</th>
							<th class="col-md-2">Absent Students</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="col-md-2">1.</td>
							<td class="col-md-8"><img src="../images/profile/1.jpg" class="img-circle img-thumbnail" width="100" height="100"> Kawish Bhakta Shrestha</td>
							<td class="col-md-2" style="vertical-align: middle;"><input type="checkbox" value="" class="form-control" id="absent"></td>
						</tr>
						<tr>
							<td class="col-md-2">2.</td>
							<td class="col-md-8"><img src="../images/profile/2.jpg" class="img-circle img-thumbnail" width="100" height="100"> Rashika Karki</td>
							<td class="col-md-2" style="vertical-align: middle;"><input type="checkbox" value="" class="form-control" id="absent"></td>
						</tr>
						<tr>
							<td class="col-md-2">3.</td>
							<td class="col-md-8"><img src="../images/profile/3.jpg" class="img-circle img-thumbnail" width="100" height="100"> Samayee Dhungel</td>
							<td class="col-md-2" style="vertical-align: middle;"><input type="checkbox" value="" class="form-control" id="absent"></td>
						</tr>
						<tr>
							<td class="col-md-2">4.</td>
							<td class="col-md-8"><img src="../images/profile/4.jpg" class="img-circle img-thumbnail" width="100" height="100"> Kiran Neupane</td>
							<td class="col-md-2" style="vertical-align: middle;"><input type="checkbox" value="" class="form-control" id="absent"></td>
						</tr>
						<tr>
							<td class="col-md-2">5.</td>
							<td class="col-md-8"><img src="../images/profile/5.png" class="img-circle img-thumbnail" width="100" height="100"> Krishna Shrestha</td>
							<td class="col-md-2" style="vertical-align: middle;"><input type="checkbox" value="" class="form-control" id="absent"></td>
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