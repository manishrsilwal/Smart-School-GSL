<?php
	$homework=1;$title="Homework Entry";require("header.php");
?>

<div class="content">
	<div class="container-fluid">
		<nav aria-label="breadcrumb" role="navigation">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="../teacher/">Dashboard</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Homework Entry</li>
		  </ol>
		</nav>
		<div class="row">
			<div class="col-md-12">
				<div class="card shadow">
						<div class="card-header">
							<h4 class="card-title">Assign Work</h4>
						</div>
						<div class="card-body">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="sel1">Class <font color="red">*</font></label>
										<select class="form-control" id="sel1">
											<option selected>Choose...</option>
											<option disabled>8</option>
											<option disabled>9</option>
											<option>10</option>
										</select>
									</div>

									<div class="col-md-6">
										<label for="sel2">Section <font color="red">*</font></label>
										<select class="form-control" id="sel2">
											<option selected>Choose...</option>
											<option>A</option>
											<option disabled>B</option>
											<option disabled>C</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label>Subject </label>
									<input type="text" disabled class="form-control" placeholder="Mathematics">
								</div>

								<div class="form-group form-row">
									<div class="col-md-6">
										<label for="date">Date of Homework announcement <font color="red">*</font></label>
										<input type="date" class="form-control set-today" name="givendate">
									</div>

									<div class="col-md-6">
										<label for="date">Date of submission <font color="red">*</font></label>
										<input type="date" class="form-control" name="dateofsubmission">
									</div>
								</div>

								<div class="form-group">
									<label for="homework">Homework <font color="red">*</font></label>
									<textarea class="form-control" rows="5" id="comment"></textarea>
								</div>
							</form>
							<button class="btn btn-success" onclick="demo.showNotification('success','bottom','left', '<strong>New homework has been assigned to the students.</strong>')">Submit</button>
						</div>
						<div class="card-footer">
							<hr />
							<font color="red">*</font> Required
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