<?php
	$exam=1;$title="View Marks";require("header.php");
?>

<div class="content">
	<div class="container-fluid">
		<nav aria-label="breadcrumb" role="navigation">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="../teacher/">Dashboard</a></li>
		    <li class="breadcrumb-item"><a href="../teacher/marksentry.php/">Marks Entry</a></li>
		    <li class="breadcrumb-item active" aria-current="page">View Marksheet</li>
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

		<div class="row" id="view">
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-header">
						<h4 class="card-title text-danger">Marks scored by the students of 10 'A'</h4>
						<div class="card-category">
							<p><b>Subject:</b> Mathematics</p>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive viewtable">
							<table class="table table-bordered text-center">
								<thead>
									<tr style="border: solid 1px; border-color: #DEE1E5;">
										<th rowspan="2" style="border: solid 1px; border-color: #DEE1E5;">Roll Number</th>
										<th rowspan="2" style="border: solid 1px; border-color: #DEE1E5;">Name</th>
										<th colspan="2">Theoritical Marks</th>
										<th colspan="2">Practical Marks</th>
										<th rowspan="2" style="border: solid 1px; border-color: #DEE1E5;">Total</th>
									</tr>
									<tr>
										<td><b>FM</b></td>
										<td><b>OM</b></td>
										<td><b>FM</b></td>
										<td><b>OM</b></td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>Kawish Bhakta Shrestha</td>
										<td>75</td>
										<td>75</td>
										<td>25</td>
										<td>21</td>
										<td>96</td>
									</tr>
									<tr>
										<td>2.</td>
										<td>Rashika Karki</td>
										<td>75</td>
										<td>5</td>
										<td>25</td>
										<td>2</td>
										<td><font color="red">5</font></td>
									</tr>
									<tr>
										<td>3.</td>
										<td>Samayee Dhungel</td>
										<td>75</td>
										<td>68</td>
										<td>25</td>
										<td>20</td>
										<td>88</td>
									</tr>
									<tr>
										<td>4.</td>
										<td>Kiran Neupane</td>
										<td>75</td>
										<td>72</td>
										<td>25</td>
										<td>20</td>
										<td>92</td>
									</tr>
									<tr>
										<td>5.</td>
										<td>Bhabin Khadka</td>
										<td>75</td>
										<td>5</td>
										<td>25</td>
										<td>5</td>
										<td><font color="red">10</font></td>
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