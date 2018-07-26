<?php
	include("header.php");
?>
	<div class="row content">
		<div class="col-sm-2 sidenav">
			<center>
				<div class="figure"><img src="../images/logo.jpg" class="img-circle" height="150" width="150"></div>
				<div class="fig-caption">Kathmandu High School<br /><div class="sidenav-tagline">Quality Education for Leadership</div></div>
			</center>
			<a href="../teacher" class="active"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
			<a href="../teacher/marksentry.php"><i class="fas fa-marker"></i>&nbsp;&nbsp;&nbsp;Marks Entry</a>
			<a href="../teacher/attendance.php"><i class="fas fa-book-open"></i>&nbsp;&nbsp;&nbsp;Attendance</a>
			<a class="dropdown-btn"><i class="fas fa-edit dropdown-toggle"></i>&nbsp;&nbsp;&nbsp;Assignments &nbsp;&nbsp;&nbsp;<span class="caret"></span></a>
			<div class="dropdown-container">
		    <a href="../teacher/homeworkentry.php"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;&nbsp;Assign the Work</a>
		    <a href="../teacher/homeworkcheck.php"><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;Check the Work</a>
			</div>
			<a href="../teacher/student-info.php"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Student Info</a>
			<a href="#"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;Messages</a>
		</div>

		<div class="col-sm-10 description">
			<div class="page-header title">Home<p class="home-tagline">Welcome back, <i>Prof. Dipesh Khadka</i></p></div>
			<div class="row" id="total-contents">
				<div class="page-header"><h3>Your time-table for Academic Year 2075</h3></div>

				<div class="table-responsive text-center">
					<table class="table table-bordered">
						<thead>
							<th>Day&nbsp;/&nbsp;Time <i class="fas fa-arrow-right"></i><br /><i class="fas fa-arrow-down"></i></th>
							<th style="vertical-align: middle;">9:00 - 10:00</th>
							<th style="vertical-align: middle;">10:00 - 11:00</th>
							<th style="vertical-align: middle;">11:00 - 12:00</th>
							<th style="vertical-align: middle;">12:00 - 13:00</th>
							<th style="vertical-align: middle;">13:00 - 14:00</th>
							<th style="vertical-align: middle;">14:00 - 15:00</th>
							<th style="vertical-align: middle;">15:00 - 16:00</th>
						</thead>
						<tbody>
							<tr>
							<th>Sunday</th>
							<td>Class 9<br />Opt. Math</td>
							<td></td>
							<td></td>
							<td>Lunch</td>
							<td>Class 10<br />Math</td>
							<td></td>
							<td>Class 8<br />Math</td>
							</tr>
							<tr>
							<th>Monday</th>
							<td>Class 10<br />Math</td>
							<td>Class 9<br />Opt. Math</td>
							<td></td>
							<td>Lunch</td>
							<td></td>
							<td>Class 8<br />Math</td>
							<td></td>
							</tr>
							<tr>
							<th>Tuesday</th>
							<td>Class 10<br />Math</td>
							<td></td>
							<td>Class 9<br />Opt. Math</td>
							<td>Lunch</td>
							<td></td>
							<td></td>
							<td>Class 8<br />Math</td>
							</tr>
							<tr>
							<th>Wednesday</th>
							<td>Class 10<br />Math</td>
							<td></td>
							<td></td>
							<td>Lunch</td>
							<td>Class 9<br />Opt. Math</td>
							<td>Class 8<br />Math</td>
							<td></td>
							</tr>
							<tr>
							<th>Thursday</th>
							<td></td>
							<td>Class 9<br />Opt. Math</td>
							<td>Class 8<br />Math</td>
							<td>Lunch</td>
							<td></td>
							<td>Class 10<br />Math</td>
							<td></td>
							</tr>
							<tr>
							<th>Friday</th>
							<td>Class 8<br />Math</td>
							<td></td>
							<td>Class 10<br />Math</td>
							<td>Lunch</td>
							<td></td>
							<td>Class 9<br />Opt. Math</td>
							<td></td>
							</tr>
					</tbody>
						
					</table>
				</div>
			</div>

			
		</div>
	</div>

<?php
	include("footer.php");
?>