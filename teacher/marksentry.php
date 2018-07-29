<?php
	include("header.php");
?>

<div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
	            	<div class="logo-small-image">
	            		<img src="../images/logo.jpg">
	            	</div>
            	</a>
                <a href="#" class="simple-text logo-normal">
                    Smart School
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../teacher">
                            <i class="nc-icon nc-layout-11"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../teacher/attendance.php">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Attendance</p>
                        </a>
                    </li>
                    <li class="nav-item btn-rotate dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="nc-icon nc-tile-56"></i>
                            Homeworks &nbsp;
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Assign the Work</a>
                                    <a class="dropdown-item" href="#">Check the Work</a>
                                </div>
                    </li>
                    <li class="nav-item btn-rotate dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="nc-icon nc-paper"></i>
                            Exam Section &nbsp;
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item active" href="../teacher/marksentry.php">Enter the Marks</a>
                                    <a class="dropdown-item" href="#">View the Marksheet</a>
                                </div>
                    </li>
                </ul>
            </div>
</div>


<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			<div class="card shadow">
				<div class="col-lg-12 col-md-12 col-sm-12">
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
								<div class="form-group col-md-6">
									<label>Marks of</label>
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
									
								<div class="form-group col-md-6">
								<label for="Full-marks">Full Marks <font color="red">*</font></label>
								<input type="text" class="form-control" id="Full-marks" required placeholder="Enter full marks">
								</div>
							</div>
							</form>
							</div>
							<div class="card-footer text-center">
								<hr />
								<button class="btn btn-success" onclick="$('#view').slideToggle();">Submit</button>
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
											<th class="text-info">Marks</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1.</td>
											<td><img src="../images/profile/kawish.png" class="img-circle img-thumbnail" width="50" height="50"> Kawish Bhakta Shrestha</td>
											<td><input type="text" class="form-control col-md-2"></td>
										</tr>
										<tr>
											<td>2.</td>
											<td><img src="../images/profile/rashika.png" class="img-circle img-thumbnail" width="50" height="50"> Rashika Karki</td>
											<td><input type="text" class="form-control col-md-2"></td>
										</tr>
										<tr>
											<td>3.</td>
											<td><img src="../images/profile/samayee.jpg" class="img-circle img-thumbnail" width="50" height="50"> Samayee Dhungel</td>
											<td><input type="text" class="form-control col-md-2"></td>
										</tr>
										<tr>
											<td>4.</td>
											<td><img src="../images/profile/kiran.png" class="img-circle img-thumbnail" width="50" height="50"> Kiran Neupane</td>
											<td><input type="text" class="form-control col-md-2"></td>
										</tr>
										<tr>
											<td>5.</td>
											<td><img src="../images/profile/bhabin.jpg" class="img-circle img-thumbnail" width="50" height="50"> Bhabin Khadka</td>
											<td><input type="text" class="form-control col-md-2"></td>
										</tr>
									</tbody>
								</table>
							</div>
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