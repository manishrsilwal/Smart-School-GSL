<?php $homework=1;$title="HomeWork";require('header.php'); ?>
<div class="content">
  <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../parents/">Student Info</a></li>
        <li class="breadcrumb-item active" aria-current="page">Homework</li>
      </ol>
    </nav>

<div class="row">
    <div class="col-md-5">
    <div class="card shadow">
              <div class="card-body">
              <div class="card-title"><h4>Homework analysis for this month</h4></div>
                    <div class="dropdown">
                      <a class="dropdown-toggle" id="dropdownMenuButto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <p class="title" style="display:inline;cursor:pointer;margin-right:5px;">Bhabin Khadka</p>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButto">
                        <a class="dropdown-item" href="#">Bhawana Khadka</a>
                        <a class="dropdown-item" href="#">Bhuwan Khadka</a>
                      </div>                  
                    </div>
                    <p class="description">
                        @student1221
                    </p>
                    <br>
                    <canvas id="homework"></canvas>
                    <button class="btn btn-success float-right">See More Info</button>
                    <br>
              </div>
            </div>
    </div>
    <div class="col-md-7">
        <div class="card shadow">
            <div class="container">
            <br/>
            <div class="card-title text-center"><h4>Homework details for last 3 days</h4></div>

                </br>
                <div class="table-responsive"> 
                    <table class="table text-center table-bordered"> 
                    <thead style="color:#4267B2; border:1px solid #ddd;"> 
                    <tr>
                    <th> SN </th> 
                    <th> Date </th> 
                    <th> Subject </th> 
                    <th> Homework </th> 
                    <th> Status </th> 
                    </tr>                                 
                    </thead> 
                    <tbody> 
                    <tr> 
                    <td> 1 </td> 
                    <td> 28th July </td> 
                    <td> Mathematics </td> 
                    <td> Page 432 </td> 
                    <td class="text-danger"> Not Done </td> 
                    </tr> 
                    <tr> 
                    <td> 2 </td> 
                    <td> 28th July </td> 
                    <td> Science </td>
                    <td> Page 234 </td> 
                    <td class="text-success"> Checked </td> 
                    </tr>
                    
                    <tr> 
                    <td> 3 </td> 
                    <td> 29th July </td> 
                    <td> Mathematics </td> 
                    <td> Page 432 </td> 
                    <td class="text-danger"> Not Done </td> 
                    </tr> 
                    <tr> 
                    <td> 4 </td> 
                    <td> 29th July </td> 
                    <td> Science </td>
                    <td> Page 234 </td> 
                    <td class="text-success"> Checked </td> 
                    </tr>
                    <tr> 
                    <td> 5 </td> 
                    <td> 29th July </td> 
                    <td> Social </td> 
                    <td> Page 43 </td> 
                    <td class="text-danger"> Not Done </td> 
                    </tr> 
                    <tr> 
                    <td> 6 </td> 
                    <td> 29th July </td> 
                    <td> Health </td>
                    <td> Page 24 </td> 
                    <td class="text-success"> Checked </td> 
                    </tr>
                    <tr> 
                    <td> 7 </td> 
                    <td> 30th July </td> 
                    <td> Nepali </td> 
                    <td> Page 432 </td> 
                    <td class="text-info"> Not Yet Checked </td> 
                    </tr> 
                    <tr> 
                    <td> 8 </td> 
                    <td> 30th July </td> 
                    <td> English </td>
                    <td> Page 234 </td> 
                    <td class="text-info"> Not Yet Checked </td> 
                    </tr>
                    </table> 
                </div>
            </div>            
        </div>
    </div>
</div>








</div>
      



<?php require('footer.php'); ?>

<script>
initHomChart();
    function initHomChart(){
        ctx1 = document.getElementById('homework').getContext("2d");
        myChart2 = new Chart(ctx1, {
          type: 'line',
          data: {
            labels: ['Science','Math','Social','Health','English','Computer','Nepali'],
            datasets: [{
                label:"Homework Missed this Month",
                borderColor: "rgb(255, 99, 132)",
                backgroundColor: "rgba(255, 99, 132, 0.2)",
                borderWidth: 2,
                fill: false,
                data: [6,3,1,5,8,2,4]}]},
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