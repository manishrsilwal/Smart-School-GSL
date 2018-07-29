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
                    <li class="nav-item active">
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
                                    <a class="dropdown-item" href="../teacher/marksentry.php">Enter the Marks</a>
                                    <a class="dropdown-item" href="#">View the Marksheet</a>
                                </div>
                    </li>
                </ul>
            </div>
</div>


		<!-- <div class="col-sm-2 sidenav">
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
		</div> -->

			<div class="content">
				<div class="container-fluid">
					<div class="row">
			            <div class="col-md-6">
			              <div class="card">
			                <div class="card-header">
			                  <h4 class="card-title">Average Marks by Class</h4>
			                </div>
			                <div class="card-body">
            					<canvas id=chartHours class="chartjs" width="undefined" height="undefined"></canvas>
			                  <br /><p class="card-category">
			                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 90 </span> is the highest marks obtained by Kiran Neupane of Grade 10.<br />
			                    <span class="text-danger"><i class="fa fa-long-arrow-down"></i> 40 </span> is the lowest marks obtained by Kirshna Shrestha of Grade 10.</p>
			                    <button class="btn btn-success float-right">See more details</button>
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
			              <div class="card">
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
				            	</div>
                				<div class="chartjs-wrapper">
                					<canvas id="class10chart" class="chartjs" width="undefined" height="undefined"></canvas>
                				</div>
			                  <br /><p class="card-category">
			                  	<span class="text-danger"><i class="fa fa-thumbs-down"></i></span> Samayee of Grade 10 is absent for <span class="text-danger">3</span> days.<br />
			                  	<span class="text-info"><i class="fa fa-info"></i></span> Total number of school days is <span class="text-info">50</span> days.</p>
			                    <button class="btn btn-danger float-right"><a class="text-white" href="../teacher/attendance.php">See more details</a></button>
			                </div>
			                <div class="card-footer">
			                	<hr >			                  <div class="stats">
			                    <i class="fa fa-history"></i> updated 1 day ago
			                  </div>
			                </div>
			              </div>
            			</div>
          		</div>


					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header card-header-info">
									<h4 class="card-title">Your time table for Academic Year 2075</h4>
								</div>
								<div class="card-body">
										<div class="index-table table-responsive text-center">
											<table class="table">
												<thead>
													<th class="text-danger">Day&nbsp;<i class="nc-icon nc-minimal-down"></i> /&nbsp;Time&nbsp;<i class="nc-icon nc-minimal-right"></th>
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
													<td>Class 9<br />Opt. Math</td>
													<td></td>
													<td></td>
													<td>Lunch</td>
													<td>Class 10<br />Math</td>
													<td></td>
													<td>Class 8<br />Math</td>
													</tr>
													<tr>
													<th class="text-danger">Monday</th>
													<td>Class 10<br />Math</td>
													<td>Class 9<br />Opt. Math</td>
													<td></td>
													<td>Lunch</td>
													<td></td>
													<td>Class 8<br />Math</td>
													<td></td>
													</tr>
													<tr>
													<th class="text-danger">Tuesday</th>
													<td>Class 10<br />Math</td>
													<td></td>
													<td>Class 9<br />Opt. Math</td>
													<td>Lunch</td>
													<td></td>
													<td></td>
													<td>Class 8<br />Math</td>
													</tr>
													<tr>
													<th class="text-danger">Wednesday</th>
													<td>Class 10<br />Math</td>
													<td></td>
													<td></td>
													<td>Lunch</td>
													<td>Class 9<br />Opt. Math</td>
													<td>Class 8<br />Math</td>
													<td></td>
													</tr>
													<tr>
													<th class="text-danger">Thursday</th>
													<td></td>
													<td>Class 9<br />Opt. Math</td>
													<td>Class 8<br />Math</td>
													<td>Lunch</td>
													<td></td>
													<td>Class 10<br />Math</td>
													<td></td>
													</tr>
													<tr>
													<th class="text-danger">Friday</th>
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
					</div>
				</div>
			</div>


<?php
	include("footer.php");
?>

<script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });

    initChg();
  </script>