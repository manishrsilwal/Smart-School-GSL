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
                    <li class="nav-item active">
                        <a class="nav-link" href="../teac</div>her/attendance.php">
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
                                    <a class="dropdown-item" href="../teacher/marksentry.php">Enter the Marks</a>
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
									<h4 class="card-title">Select the Class</h4>
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
											<label>Date</label>
											<input type="date" class="set-today form-control">
										</div>

										<div class="form-group">
											<label>Subject</label>
											<input type="text" class="form-control" placeholder="Mathematics" disabled>
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

				<div id="view">
						<div class="row">
							<div class="col-md-12">
				              <div class="card">
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
													<button class="btn btn-success">Update</button>
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
include("footer.php");
?>

<script>
window.onload= function(){
document.querySelector('.set-today').value=(new Date()).toISOString().substr(0,10);
};

initChg();
</script>

