<?php
	$exam=1;$title="View Marks";require("header.php");
?>

<div class="content">
	<div class="container-fluid">
		<nav aria-label="breadcrumb" role="navigation">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="../teacher/">Dashboard</a></li>
		    <li class="breadcrumb-item"><a href="../teacher/examsection.php">Exam Section</a></li>
		    <li class="breadcrumb-item active" aria-current="page">View Marks</li>
		  </ol>
		</nav>

		<div class="row">
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-header card-header-info">
						<h4 class="card-title">View Marks</h4>
					</div>
					<div class="card-body">
						<form>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="class">Class <font color="red">*</font></label>
									<select id="inputState" class="form-control">
								        <option selected>Choose...</option>
								        <option disabled>8</option>
								        <option disabled>9</option>
								        <option>10</option>
							      	</select>
								</div>
							
								<div class="form-group col-md-6">
									<label>Section <font color="red">*</font></label>
									<select id="inputState" class="form-control">
								        <option selected>Choose...</option>
								        <option>A</option>
								        <option disabled>B</option>
								        <option disabled>C</option>
							      	</select>
								</div>
							</div>
						</form>
						<button class="btn btn-success" onclick="$('#view').slideToggle();">Submit</button>
					</div>
				</div>
			</div>
		</div>

		<div id="view">
			<div class="row">
			<div class="col-md-8">
				<div class="card shadow">
					<div class="card-header">
						<h4 class="card-title text-danger">Marks scored by the students of 10 'A'</h4>
						<div class="card-category">
							<p><b>Subject:</b> Mathematics</p>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive viewtable">
							<table class="table table-bordered">
								<thead class="text-center">
									<tr style="border: solid 1px; border-color: #DEE1E5;">
										<th rowspan="2" style="border: solid 1px; border-color: #DEE1E5;">Roll Number</th>
										<th rowspan="2" style="border: solid 1px; border-color: #DEE1E5;">Name</th>
										<th colspan="1" style="border: solid 1px; border-color: #DEE1E5;">Theoritical Marks</th>
										<th colspan="1" style="border: solid 1px; border-color: #DEE1E5;">Practical Marks</th>
										<th rowspan="2" style="border: solid 1px; border-color: #DEE1E5;">Total (100)</th>
									</tr>
									<tr>
										<td><b>OM (75)</b></td>
										<td><b>OM (25)</b></td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td><img src="../images/profile/kawish.png" class="img-circle img-thumbnail" width="50" height="50"> Kawish Bhakta Shrestha</td>
										<td>75</td>
										<td>21</td>
										<td>96</td>
									</tr>
									<tr>
										<td>2.</td>
										<td><img src="../images/profile/rashika.png" class="img-circle img-thumbnail" width="50" height="50"> Rashika Karki</td>
										<td>5</td>
										<td>2</td>
										<td><font color="red">5</font></td>
									</tr>
									<tr>
										<td>3.</td>
										<td><img src="../images/profile/samayee.jpg" class="img-circle img-thumbnail" width="50" height="50"> Samayee Dhungel</td>
										<td>68</td>
										<td>20</td>
										<td>88</td>
									</tr>
									<tr>
										<td>4.</td>
										<td><img src="../images/profile/kiran.png" class="img-circle img-thumbnail" width="50" height="50"> Kiran Neupane</td>
										<td>72</td>
										<td>20</td>
										<td>92</td>
									</tr>
									<tr>
										<td>5.</td>
										<td><img src="../images/profile/bhabin.jpg" class="img-circle img-thumbnail" width="50" height="50"> Bhabin Khadka</td>
										<td>5</td>
										<td>5</td>
										<td><font color="red">10</font></td>
									</tr>
								</tbody>
								
							</table>
						</div>
					</div>
					<div class="card-footer">
						<hr>
						<p>OM: Obtained Marks</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card shadow">
						<div class="card-header">
							<h4 class="card-title text-danger">Summary performance of 10 'A'</h4>
						</div>
						<div class="card-body">
							<div class="row mycard">
								<h6 class="text-success">Top Performing Students</h6>
								<table class="table table-bordered bg-success text-dark">
									<thead>
										<th>Name</th>
										<th>Marks</th>
									</thead>
									<tbody>
										<tr>
											<td>Kawish Bhakta Shrestha</td>
											<td>96</td>
										</tr>
										<tr>
											<td>Kiran Neupane</td>
											<td>92</td>
										</tr>
										<tr>
											<td>Samayee Dhungel</td>
											<td>88</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="row mycard">
								<h6 class="text-red">Low Performing Students</h6>
								<table class="table table-bordered bg-danger text-dark">
									<thead>
										<th>Name</th>
										<th>Marks</th>
									</thead>
									<tbody>
										<tr>
											<td>Rashika Karki</td>
											<td>5</td>
										</tr>
										<tr>
											<td>Bhabin Khadka</td>
											<td>10</td>
										</tr>
										<tr>
											<td>Sakshi Shrestha</td>
											<td>19</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="card-footer">
							<hr />
						</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<?php
	require("footer.php");
?>