<?php
	include("header.php");
?>

<div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="../teacher/" class="simple-text logo-mini">
	            	<div class="logo-small-image">
	            		<img src="../images/logo.jpg">
	            	</div>
            	</a>
                <a href="../teacher/" class="simple-text logo-normal">
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
                    <li class="nav-item active">
					    <a class="nav-link" href="../teacher/homeworkentry.php">
					        <i class="nc-icon nc-tile-56"></i>
					        <p>Homework</p>
					    </a>
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
						<div class="card-header">
							<h4 class="card-title">Assign Work</h4>
						</div>
						<div class="card-body">
							<form>
								<div class="form-row">
									<div class="col-md-6">
										<label for="sel1">Class: <font color="red">*</font></label>
										<select class="form-control" id="sel1">
											<option selected>Choose...</option>
											<option disabled>8</option>
											<option disabled>9</option>
											<option>10</option>
										</select>
									</div>

									<div class="col-md-6">
										<label for="sel2">Section: <font color="red">*</font></label>
										<select class="form-control" id="sel2">
											<option selected>Choose...</option>
											<option>A</option>
											<option disabled>B</option>
											<option disabled>C</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label>Subject: </label>
									<input type="text" disabled class="form-control" placeholder="Mathematics">
								</div>

								<div class="form-row">
									<div class="col-md-6">
										<label for="date">Date of Homework announcement:</label>
										<input type="date" class="form-control set-today" name="givendate">
									</div>

									<div class="col-md-6">
										<label for="date">Date of submission:</label>
										<input type="date" class="form-control" name="dateofsubmission">
									</div>
								</div>

								<div class="form-group">
									<label for="homework">Homework:</label>
									<textarea class="form-control" rows="5" id="comment"></textarea>
								</div>
							</form>
							<button class="btn btn-success" onclick="demo.showNotification('top','center')">Submit</button>
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