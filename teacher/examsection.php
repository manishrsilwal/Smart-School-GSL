<?php
	$exam=1;$title="Exam Section";require("header.php");
?>


<div class="content">
	<div class="container-fluid">
		<div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-copy-04 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Enter Marks</p>
                      <p class="card-category"><button class="btn btn-info"> <a href="../teacher/marksentry.php" class="text-white">Click Here</a></button></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 1 day ago
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-bullet-list-67 text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">View Marks</p>
                      <p class="card-category"><button class="btn btn-info"><a href="../teacher/viewmarksheet.php" class="text-white">Click Here</a></button></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 1 day ago
                </div>
              </div>
            </div>
          </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-paper text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Class-wise Performance</p>
                      <p class="card-category"><button class="btn btn-info"><a href="../teacher/marksdetails.php" class="text-white">Click Here</a></button></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
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