<?php
	$home=1;$title="Dashboard";require("header.php");
?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-6">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Average Marks by Class</h4>
                </div>
                <div class="card-body">
					<canvas id=chartHours class="chartjs" width="undefined" height="undefined"></canvas>
                    <button class="btn btn-success float-right"><a class="text-white" href="../teacher/marksdetails.php">See more details</a></button>
                </div>
                <div class="card-footer">
	                <hr >
                	<div class="stats">
                    <i class="fa fa-history"></i> updated 50 minutes ago
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-md-6">
              <div class="card shadow">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Class-wise Attendance</h4>
                </div>
                <div class="card-body">
                	<div class="form-row">
                	<div class="col-md-6">
	                	<label>Select Class</label>
	                	<select id="inputState" class="form-control">
					        <option disabled>8</option>
					        <option disabled>9</option>
					       	<option selected>10</option>
	                	</select>
	                </div>
	                <div class="col-md-6">
	                	<label>Select Section</label>
	                	<select id="inputState" class="form-control">
					        <option selected>A</option>
					        <option disabled>B</option>
					        <option disabled>C</option>
	                	</select>
	                </div>
	            	</div><br />
    				<div class="chartjs-wrapper">
    					<canvas id="class10chart" class="chartjs" width="undefined" height="undefined"></canvas>
    				</div>
                  <br /><p class="card-category">
                  	<span class="text-info"><i class="fa fa-info"></i></span> Total number of school days is <span class="text-info">50</span> days.</p>
                    <button class="btn btn-danger float-right"><a class="text-white" href="../teacher/attendance.php">See more details</a></button>
                </div>
                <div class="card-footer">
                	<hr >			                  
                	<div class="stats">
                    <i class="fa fa-history"></i> updated 1 day ago
                  </div>
                </div>
              </div>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card shadow">
					<div class="card-header card-header-info">
						<h4 class="card-title">Your time table for Academic Year 2075</h4>
					</div>
					<div class="card-body">
							<div class="index-table table-responsive text-center">
								<table class="table text-center">
									<thead>
										<th class="text-danger">Day&nbsp;<i class="nc-icon nc-minimal-down"></i> /&nbsp;Time&nbsp;<i class="nc-icon nc-minimal-right"></i></th>
										<th class="text-danger" style="vertical-align: middle;">9:00 - 10:00</th>
										<th class="text-danger" style="vertical-align: middle;">10:00 - 11:00</th>
										<th class="text-danger" style="vertical-align: middle;">11:00 - 12:00</th>
										<th class="text-danger" style="vertical-align: middle;">12:00 - 13:00</th>
										<th class="text-danger" style="vertical-align: middle;">13:00 - 14:00</th>
										<th class="text-danger" style="vertical-align: middle;">14:00 - 15:00</th>
										<th class="text-danger" style="vertical-align: middle;">15:00 - 16:00</th>
									</thead>
									<tbody>
										<tr>
										<th class="text-danger">Sunday</th>
										<td><a href="class10A.php">Class 9 'A'</a><br />Math</td>
										<td></td>
										<td></td>
										<td class="text-success">Lunch</td>
										<td><a href="class10A.php">Class 10 'B'</a><br />Math</td>
										<td></td>
										<td><a href="class10A.php">Class 8 'C'</a><br />Math</td>
										</tr>
										<tr>
										<th class="text-danger">Monday</th>
										<td><a href="class10A.php">Class 10 'A'</a><br />Math</td>
										<td><a href="class10A.php">Class 9 'B'</a><br />Math</td>
										<td></td>
										<td class="text-success">Lunch</td>
										<td></td>
										<td><a href="class10A.php">Class 8 'A'</a><br />Math</td>
										<td></td>
										</tr>
										<tr>
										<th class="text-danger">Tuesday</th>
										<td><a href="class10A.php">Class 10 'A'</a><br />Math</td>
										<td></td>
										<td><a href="class10A.php">Class 9 'C'</a><br />Math</td>
										<td class="text-success">Lunch</td>
										<td></td>
										<td></td>
										<td><a href="class10A.php">Class 8 'A'</a><br />Math</td>
										</tr>
										<tr>
										<th class="text-danger">Wednesday</th>
										<td><a href="class10A.php">Class 10 'C'</a><br />Math</td>
										<td></td>
										<td></td>
										<td class="text-success">Lunch</td>
										<td><a href="class10A.php">Class 9 'A'</a><br />Math</td>
										<td><a href="class10A.php">Class 8 'B'</a><br />Math</td>
										<td></td>
										</tr>
										<tr>
										<th class="text-danger">Thursday</th>
										<td></td>
										<td><a href="class10A.php">Class 9 'B'</a><br />Math</td>
										<td><a href="class10A.php">Class 8 'B'</a><br />Math</td>
										<td class="text-success">Lunch</td>
										<td></td>
										<td><a href="class10A.php">Class 10 'C'</a><br />Math</td>
										<td></td>
										</tr>
										<tr>
										<th class="text-danger">Friday</th>
										<td><a href="class10A.php">Class 8 'C'</a><br />Math</td>
										<td></td>
										<td><a href="class10A.php">Class 10 'B'</a><br />Math</td>
										<td class="text-success">Lunch</td>
										<td></td>
										<td><a href="class10A.php">Class 9 'C'</a><br />Math</td>
										<td></td>
										</tr>
									</tbody>
								</table>
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
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });

    initChg();
  </script>