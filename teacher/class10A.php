<?php
$attendance=1;$title="Class 10 'A' Performance"; require("header.php");
?>

<div class="content">
		<div class="container-fluid">
			<nav aria-label="breadcrumb" role="navigation">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="../teacher/">Dashboard</a></li>
			    <li class="breadcrumb-item"><a href="../teacher/attendance.php">Select class for attendance</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Class 10 'A'</li>
			  </ol>
			</nav>
			<div class="row">
				<div class="col-md-12">
	              <div class="card shadow">
	                <div class="card-header card-header-danger">
	                  <h5 class="card-title">Attendance of 10 'A'</h5>
	                </div>
	                <div class="card-body">
	                	<div class="row">
	                	<div class="col-md-6">
	        				<canvas id="class10chart"></canvas>
	        				<br />
	        				<br />
			                  <p class="card-category">
			                  	<span class="text-primary"><i class="fa fa-info"></i></span> Total number of school days is <span class="text-primary">50</span> days.</p>
	                  	</div>

	                  	<div class="col-md-6">

	                  		<div class="table-responsive">
								<table class="table">
									<thead class="text-primary">
										<tr>
											<th>Roll Number</th>
											<th>Name</th>
											<th>Absent Students</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1.</td>
											<td><img src="../images/profile/kawish.png" class="img-circle img-thumbnail" width="50" height="50"> Kawish Bhakta Shrestha</td>
											<td>
												<div class="form-check">
											    <label class="form-check-label">
											        <input class="form-check-input" type="checkbox" value="">
											        <span class="form-check-sign">
											            <span class="check"></span>
											        </span>
											    </label>
												</div>
											</td>
										</tr>
										<tr>
											<td>2.</td>
											<td><img src="../images/profile/rashika.png" class="img-circle img-thumbnail" width="50" height="50"> Rashika Karki</td>
											<td>
												<div class="form-check">
											    <label class="form-check-label">
											        <input class="form-check-input" type="checkbox" value="">
											        <span class="form-check-sign">
											            <span class="check"></span>
											        </span>
											    </label>
												</div>
											</td>
										</tr>
										<tr>
											<td>3.</td>
											<td><img src="../images/profile/samayee.jpg" class="img-circle img-thumbnail" width="50" height="50"> Samayee Dhungel</td>
											<td>
												<div class="form-check">
											    <label class="form-check-label">
											        <input class="form-check-input" type="checkbox" value="">
											        <span class="form-check-sign">
											            <span class="check"></span>
											        </span>
											    </label>
												</div>
											</td>
										</tr>
										<tr>
											<td>4.</td>
											<td><img src="../images/profile/kiran.png" class="img-circle img-thumbnail" width="50" height="50"> Kiran Neupane</td>
											<td>
												<div class="form-check">
											    <label class="form-check-label">
											        <input class="form-check-input" type="checkbox" value="">
											        <span class="form-check-sign">
											            <span class="check"></span>
											        </span>
											    </label>
												</div>
											</td>
										</tr>
										<tr>
											<td>5.</td>
											<td><img src="../images/profile/bhabin.jpg" class="img-circle img-thumbnail" width="50" height="50"> Bhabin Khadka</td>
											<td>
												<div class="form-check">
											    <label class="form-check-label">
											        <input class="form-check-input" type="checkbox" value="">
											        <span class="form-check-sign">
											            <span class="check"></span>
											        </span>
											    </label>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="row">
									<div class="col-md-12 text-center">
										<button class="btn btn-success" onclick="demo.showNotification('success','bottom','left', '<strong>New homework has been assigned to the students.</strong>')">Update</button>
									</div>
								</div>
							</div>
	                  	</div>
	                </div>
	                <div class="card-footer">
	                	<hr>
	                  <div class="stats">
	                    <i class="fa fa-history"></i> Updated 1 day ago
	                  </div>
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

<script>
window.onload= function(){
document.querySelector('.set-today').value=(new Date()).toISOString().substr(0,10);
};

initChg();
</script>

