<?php
	include("header.php");
?>

<div class="row content">
	<div class="col-sm-2 sidenav">
		<center>
			<div class="figure"><img src="../images/list.png" class="img-circle" height="150" width="150"></div>
			<div class="fig-caption">Kathmandu High School<br /><div class="sidenav-tagline">Quality Education for Leadership</div></div>
		</center>
		<a href="../parents"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
		<a href="../parents/student-info.php"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Student Info</a>
		<a href="../parents/homework.php" class="active"><i class="fas fa-edit"></i>&nbsp;&nbsp;&nbsp;Homework</a>
		<a href="../parents/results.php"><i class="fas fa-marker"></i>&nbsp;&nbsp;&nbsp;Results</a>
		<a href="#"><i class="fas fa-money-bill-wave"></i>&nbsp;&nbsp;&nbsp;Fee Details</a>
		<a href="#"><i class="fas fa-tasks"></i>&nbsp;&nbsp;&nbsp;Student Progress</a>
		<a href="#"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;Messages</a>
	</div>

	<div class="col-sm-10 description">
		<div class="page-header title">Homework Information <p class="home-tagline">List of homework by date</p></div>

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
		<br />

		<div class="row" id="total-contents">
			<div class="col-md-2">
			<label for="date">Date:</label>
			</div>
			<div class="col-md-2">
				<input type="date" class="form-control">
			</div>
		</div>
		<br />
		<div class="row" id="total-contents">
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th class="col-md-1">S.N.</th>
							<th class="col-md-3">Subject</th>
							<th class="col-md-5">Homework</th>
							<th class="col-md-3">Checking</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="col-md-1">1.</td>
							<td class="col-md-3">Mathematics</td>
							<td class="col-md-5">Exercise 2.5, Page Number 30</td>
							<td class="col-md-3"><button class="btn btn-danger">Not Submitted Yet</button></td>
						</tr>
						<tr>
							<td class="col-md-1">2.</td>
							<td class="col-md-3">Science</td>
							<td class="col-md-5">Read Page 50</td>
							<td class="col-md-3"><button class="btn btn-success">Checked</button></td>
						</tr>
						<tr>
							<td class="col-md-1">3.</td>
							<td class="col-md-3">English</td>
							<td class="col-md-5">No Homework</td>
							<td class="col-md-3"><button class="btn btn-info">No need of Submission</button></td>
						</tr>
						<tr>
							<td class="col-md-1">4.</td>
							<td class="col-md-3">Nepali</td>
							<td class="col-md-5">पेज १७ को हस्तलेखन</td>
							<td class="col-md-3"><button class="btn btn-success">Checked</button></td>
						</tr>
						<tr>
							<td class="col-md-1">5.</td>
							<td class="col-md-3">Computer Science</td>
							<td class="col-md-5">No Homework</td>
							<td class="col-md-3"><button class="btn btn-info">No need of Submission</button></td>
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