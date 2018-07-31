<?php
	$exam=1;$title="Exam Section";require("header.php");
?>

<div class="content">
	<div class="container-fluid">
		<nav aria-label="breadcrumb" role="navigation">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="../teacher/">Dashboard</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Marks Entry</li>
		  </ol>
		</nav>
		<div class="row">
			<div class="col-md-12">
			<div class="card shadow">
					<div class="card-header card-header-info">
						<h4 class="card-title">Marks Entry</h4>
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

							<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" placeholder="Mathematics" disabled>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<label>Marks of <font color="red">*</font></label>
									<select id="inputState" class="form-control">
								        <option selected>Choose...</option>
								        <option disabled>1<sup>st</sup> Monthly Test</option>
								        <option disabled>2<sup>nd</sup> Monthly Test</option>
								        <option disabled>3<sup>rd</sup> Monthly Test</option>
								        <option>1<sup>st</sup> Terminal Examination</option>
								        <option disabled>2<sup>nd</sup> Terminal Examination</option>
								        <option disabled>3<sup>rd</sup> Terminal Examination</option>
							      	</select>
								</div>
							</div>
									
								<div class="form-group">
								<label for="Full-marks">Full Marks <font color="red">*</font></label>
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="form-control col-md-12" id="Full-marks" required placeholder="Enter theoritical full marks">
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control col-md-12" id="Full-marks" required placeholder="Enter practical full marks">
									</div>
								</div>
								</div>
							</form>
							<button class="btn btn-success" onclick="$('#view').slideToggle();">Submit</button>
							</div>
							<div class="card-footer">
								<hr />
								<font color="red">*</font> Required

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row" id="view">
				<div class="col-md-12">
					<div class="card shadow">
						<div class="card-header">
							<h5 class="card-title">Enter the marks of the students below</h5>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th class="text-info">Roll Number</th>
											<th class="text-info">Name</th>
											<th class="text-info">Theoritical Marks</th>
											<th class="text-info">Practical Marks</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1.</td>
											<td><img src="../images/profile/kawish.png" class="img-circle img-thumbnail" width="50" height="50"> Kawish Bhakta Shrestha</td>
											<td><input type="text" class="form-control col-md-2"></td>
											<td><input type="text" class="form-control col-md-2"></td>
										</tr>
										<tr>
											<td>2.</td>
											<td><img src="../images/profile/rashika.png" class="img-circle img-thumbnail" width="50" height="50"> Rashika Karki</td>
											<td><input type="text" class="form-control col-md-2"></td>
											<td><input type="text" class="form-control col-md-2"></td>
										</tr>
										<tr>
											<td>3.</td>
											<td><img src="../images/profile/samayee.jpg" class="img-circle img-thumbnail" width="50" height="50"> Samayee Dhungel</td>
											<td><input type="text" class="form-control col-md-2"></td>
											<td><input type="text" class="form-control col-md-2"></td>
										</tr>
										<tr>
											<td>4.</td>
											<td><img src="../images/profile/kiran.png" class="img-circle img-thumbnail" width="50" height="50"> Kiran Neupane</td>
											<td><input type="text" class="form-control col-md-2"></td>
											<td><input type="text" class="form-control col-md-2"></td>
										</tr>
										<tr>
											<td>5.</td>
											<td><img src="../images/profile/bhabin.jpg" class="img-circle img-thumbnail" width="50" height="50"> Bhabin Khadka</td>
											<td><input type="text" class="form-control col-md-2"></td>
											<td><input type="text" class="form-control col-md-2"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<button class="btn btn-success" onclick="demo.showNotification('success','bottom','left', '<strong>The marks has been updated.</strong>')">Submit</button>
						</div>
					</div>
			</div>

			</div>
</div>


<?php
	require("footer.php");
?>