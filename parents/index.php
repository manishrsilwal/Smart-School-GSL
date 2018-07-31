<?php $info=1;$title="Student Info";require('header.php'); ?>
<div class="content">
  <div class="row">
          <div class="col-md-8">
          
          <div class="card card-user shadow">
              <div class="card-header ">
                <h4 class="card-title">Academic Performance</h4>
                <p class="card-category">2075 B.S. (2018-19 A.D.)</p>
              </div>
              <div class="card-body">
                <canvas id="student_academic"></canvas>
                <div class="float-right">
                  <button class="btn btn-success">See More Details</button>
                </div>
              </div>
              <div class="card-footer">
                
                  <hr >
                  <div class="stats">
                  <i class="fa fa-history"></i> updated 1 day ago
                </div>
                </div>
              </div>


            <div class="card card-user shadow">
              <div class="card-header ">
                <h4 class="card-title">Attendance Analytics</h4>
                <p class="card-category">2075 B.S. (2018-19 A.D.)</p>
              </div>
              <div class="card-body ">
              <canvas id="student_attendance"></canvas>
              <div class="float-right">
                  <button class="btn btn-success">See More Details</button>
                </div>
              </div>
              <div class="card-footer">
                <hr >
                <div class="stats">
                    <i class="fa fa-history"></i> updated 1 day ago
                </div>
              </div>
            </div>
          
          
          </div>
          <div class="col-md-4">
            <div class="card card-user shadow">
              <div class="image">
                <!-- <img src="../assets/img/smart.png" alt="..."> -->
              </div>
              <div class="card-body">
                <div class="col-md-12">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">

                    <div class="dropdown">
                      <a class="dropdown-toggle" id="dropdownMenuButto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5 class="title" style="display:inline-block;cursor:pointer;margin-right:5px;">Bhabin Khadka</h5>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButto">
                        <a class="dropdown-item" href="#">Bhawana Khadka</a>
                        <a class="dropdown-item" href="#">Bhuwan Khadka</a>
                      </div>
                    </div>

                  </a>
                  <p class="description" style="font-weight: bold;">
                    @student1221
                  </p>
                </div>
                <p class="description text-center" style="font-weight: bold;">
                  Class: 9
                  <br /> Section: B
                  <br /> Roll No.: 31                  
                </p>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <p><strong>Parent's Name:</strong> Suman Khadka <br>
                      <strong>Email:</strong> 11bhabin@gmail.com <br/>
                      <strong>Phone:</strong> 9800952800
                  </p>
                 

                </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header">
                <h4 class="card-title">Teachers</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled team-members">
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        Dr. Dipesh Khadka
                        <br />
                        <span class="text-muted">
                          <small>Science Teacher / Class Teacher</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        Roshan Sharma
                        <br />
                        <span class="text-muted">
                          <small>Math Teacher</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-ms-7 col-7">
                        Sophia Singh
                        <br />
                        <span class="text-muted">
                          <small>Nepali Teacher</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
</div>


<?php require('footer.php'); ?>
<script>
  initChg();
  function initChg() {
      ctx = document.getElementById('student_academic').getContext("2d");
      ctx1 = document.getElementById('student_attendance').getContext("2d");

        myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ["First Terminal Examination", "Second Terminal Examination","Third Terminal Examination"],
            datasets: [{
              label: "Percentage",
              pointRadius: 0,
              pointHoverRadius: 0,
              backgroundColor: [
                '#FF3A20',
                '#4acccd',
                '#F18F01'
              ],
              fill:false,
              data: [75, 61, 68]
            }]
          },

          options: {

            legend: {
              display: false
            },

            pieceLabel: {
              render: 'percentage',
              fontColor: ['white'],
              precision: 2
            },

            tooltips: {
              enabled: true
            },

            scales: {
              yAxes: [{
                
                ticks: {
                  beginAtZero:true,
                  fontColor:"#9f9f9f",
                  mixTicksLimit:10
                },
                scaleLabel:{
                  display:true,
                  labelString:"Percentage Obtained"
                },
                gridLines: {
                  drawBorder: true,
                  display:true,
                  zeroLineColor: "#ccc",
                  color: '#ccc'
                }

              }],

              xAxes: [{
                barPercentage: 0.8,
                gridLines: {
                  drawBorder: true,
                  display:false,
                  zeroLineColor: "#ccc",
                  color: '#ccc'
                },
                scaleLabel:{
                  display:true,
                  labelString:"Examinations"
                },
                ticks: {
                  beginAtZero:true,
                  fontColor:"#9f9f9f",
                  minTicksLimit:10
                }
              }]
            },
          }
        });

        myChart2 = new Chart(ctx1, {
          type: 'line',
          data: {
            labels: ['Jan','Feb','Mar', 'Apr', 'May','Jun','July','Aug', 'Sep', 'Oct'],
            datasets: [{
                label:"Total Absent Days",
                borderColor: "rgb(255, 99, 132)",
                backgroundColor: "rgba(255, 99, 132, 0.2)",
                borderWidth: 2,
                fill: false,
                data: [6,3,1,5,8,2,4,7,1,5]}]},
          options: {
            legend: {
              display: false
            },

            tooltips: {
              enabled: true
            },
            scales: {
              yAxes: [{

                ticks: {
                  fontColor: "#9f9f9f",
                  beginAtZero: true,
                  maxTicksLimit: 7,
                },

                scaleLabel:{
                  display:true,
                  labelString:"No of days absent"
                },
                gridLines: {
                  drawBorder: true,
                  zeroLineColor: "#ccc",
                  color: '#BABABA',
                  display: false,
                }

              }],

              xAxes: [{
                barPercentage: 2,
                gridLines: {
                  drawBorder: true,
                  color: '#C6C6C6',
                  zeroLineColor: "#ccc",
                  display: false,
                },

                scaleLabel:{
                  display:true,
                  labelString:"Months"
                },
                ticks: {
                  padding: 20,
                  fontColor: "#9f9f9f",
                  beginAtZero: true
                }
              }]
            },
          }
        });
}
</script>