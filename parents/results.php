<?php $result=1;$title="Results";require('header.php'); ?>
<style>
  table td{
      border:1px solid #aaa !important;
  }
  .stripTH th{
    border:1px solid #aaa !important;
  }
</style>
    
<div class="content">
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../parents/">Student Info</a></li>
        <li class="breadcrumb-item active" aria-current="page">Results</li>
      </ol>
    </nav>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow">
        <br/>
            <div class="container">
                <br/>
                <div class="card-user">
                        
                            <div class="author">
                            <img style="margin-top:20px;"class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                            
                        </div>
                        </div>
                    <div class="dropdown">                    

                        <a class="dropdown-toggle" id="dropdownMenuButto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5 class="title" style="display:inline-block;cursor:pointer;margin-right:5px;">Bhabin Khadka</h5>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButto">
                        <a class="dropdown-item" href="#">Bhawana Khadka</a>
                        <a class="dropdown-item" href="#">Bhuwan Khadka</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <h6 style="display:inline;">Year: &nbsp;</h6>
                        <a class="dropdown-toggle" id="dropdownMenuButto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h6 class="title" style="display:inline-block;cursor:pointer;margin-right:5px;">2018</h6>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButto">
                        <a class="dropdown-item" href="#">2017</a>
                        <a class="dropdown-item" href="#">2016</a>
                        </div>
                    </div>
                    <h6>Class: 9</h6>
                    <h6>Section: B</h6>
                    <br/>
                    <ul class="nav nav-pills nav-pills-primary flex-column">
                    <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab">First Terminal Examination</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Second Terminal Examination</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">Third Terminal Examination</a></li>
                    </ul>
                <br/>
            </div>
        </div>

        <div class="card shadow">
    &nbsp;
        <h5 class="text-center" style="font-size:20px;">Grade Calculation Details</h5>
        <div class="container-fluid">
        <div class="table-responsive"> 
            <table class="table text-center table-bordered"> 
                <thead>
                <tr class="strip" style="color:#4267B2; border:1px solid #ddd;">
                    <th>Marks Interval</th>
                    <th>Grade</th>
                    <th>Grade Point</th>
                    <th>Remarks</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>90-100</td>
                        <td>A+</td>
                        <td>4</td>
                        <td>Outstanding</td>
                    </tr>
                    <tr>
                        <td>80-89.99</td>
                        <td>A</td>
                        <td>3.6</td>
                        <td>Excellent</td>
                    </tr>
                    <tr>
                        <td>70-79.99</td>
                        <td>B+</td>
                        <td>3.2</td>
                        <td>Very Good</td>
                    </tr>
                    <tr>
                        <td>60-69.99</td>
                        <td>B</td>
                        <td>2.8</td>
                        <td>Good</td>
                    </tr>
                    <tr>
                        <td>50-59.99</td>
                        <td>C+</td>
                        <td>2.4</td>
                        <td>Satisfactory</td>
                    </tr>
                    <tr>
                        <td>40-49.99</td>
                        <td>C</td>
                        <td>2</td>
                        <td>Acceptable</td>
                    </tr>
                    <tr>
                        <td>30-39.99</td>
                        <td>D+</td>
                        <td>1.6</td>
                        <td>Not Good</td>
                    </tr>
                    <tr>
                        <td>20-29.99</td>
                        <td>D</td>
                        <td>1.2</td>
                        <td>Insufficient</td>
                    </tr>
                    <tr>
                        <td>0-19.99</td>
                        <td>E</td>
                        <td>0.8</td>
                        <td>Very Bad</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
</div>
    
    </div>
    <div class="col-md-8">
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <div class="card shadow">
                <div class="container-fluid">
                <br/>
                <h6 class="text-center" style="font-size:30px;">Kathmandu High School</h6>
                <h5 class="text-center" style="font-size:20px;">First Terminal Examination</h5>
                <div class="row">
                    <div class="col-md-4">
                        <p>Name : Bhabin Khadka</p>
                        <p>Class : 9</p>
                        <p>Section : B</p>
                    </div>  
                </div>

                <br/>
                    <div class="table-responsive"> 
                        <table class="table text-center "> 
                        <thead> 
                        <tr class="stripTH" style="color:#4267B2; border:1px solid #ddd;">
                        <th rowspan="2">S.N</th> 
                        <th rowspan="2">Subject</th> 
                        <th colspan="2">Full Marks</th> 
                        <th colspan="2">Pass Marks</th> 
                        <th colspan="3">Obtained Marks</th> 
                        <th rowspan="2">Credit Hour</th> 
                        <th colspan="2">Grades</th>
                        <th rowspan="2">Final Grade</th> 
                        <th rowspan="2">Grade Point</th> 
                        </tr>
                        <tr class="stripTH" style="color:#4267B2;" >
                            <th>TH</th>
                            <th>PR</th>
                            <th>TH</th>
                            <th>PR</th>
                            <th>TH</th>
                            <th>PR</th>
                            <th>Total</th>
                            <th>TH</th>
                            <th>PR</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Math</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Social</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Science</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Health</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>English </td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                        </tbody>
                        
                        </table> 

                        <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-title"><h5>Grade Point Average</h5></div>
                                    <p>Grade : A</p>
                                    <p>GPA : 3.55</p>
                                    <p>Percentage : 81%</p>
                                    <p>Remarks : Excellent</p>                            
                            </div>
                            <div class="col-md-6">
                                <div class="card-title"><h5>Legend</h5></div>
                                <p>TH : Theoritical Marks</p>
                                <p>PR : Practical Marks</p>
                            </div>
                        </div>
                        </div>
                            
                    </div>
                </div>
                </div>

            </div>
            <div class="tab-pane" id="tab2">
            <div class="card shadow">
                <div class="container-fluid">
                <br/>
                <h6 class="text-center" style="font-size:30px;">Kathmandu High School</h6>
                <h5 class="text-center" style="font-size:20px;">Second Terminal Examination</h5>
                <div class="row">
                    <div class="col-md-4">
                        <p>Name : Bhabin Khadka</p>
                    <p>Class : 9</p>
                        <p>Section : B</p>
                    </div>
                </div>

                <br/>
                    <div class="table-responsive"> 
                        <table class="table text-center table-bordered"> 
                        <thead> 
                        <tr class="stripTH" style="color:#4267B2; border:1px solid #ddd;">
                        <th rowspan="2">S.N</th> 
                        <th rowspan="2">Subject</th> 
                        <th colspan="2">Full Marks</th> 
                        <th colspan="2">Pass Marks</th> 
                        <th colspan="3">Obtained Marks</th> 
                        <th rowspan="2">Credit Hour</th> 
                        <th colspan="2">Grades</th>
                        <th rowspan="2">Final Grade</th> 
                        <th rowspan="2">Grade Point</th> 
                        </tr>
                        <tr class="stripTH" style="color:#4267B2;" >
                            <th>TH</th>
                            <th>PR</th>
                            <th>TH</th>
                            <th>PR</th>
                            <th>TH</th>
                            <th>PR</th>
                            <th>Total</th>
                            <th>TH</th>
                            <th>PR</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Math</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Social</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>45</td>
                                <td>25</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Science</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>60</td>
                                <td>10</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Health</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>English </td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                        </tbody>
                        
                        </table>
                        <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-title"><h5>Grade Point Average</h5></div>
                                    <p>Grade : A</p>
                                    <p>GPA : 3.55</p>
                                    <p>Percentage : 81%</p>
                                    <p>Remarks : Excellent</p>                            
                            </div>
                            <div class="col-md-6">
                                <div class="card-title"><h5>Legend</h5></div>
                                <p>TH : Theoritical Marks</p>
                                <p>PR : Practical Marks</p>
                            </div>
                        </div>
                        </div> 
                    </div>
                </div>
                </div>
            </div>
            <div class="tab-pane" id="tab3">
            <div class="card shadow">
                <div class="container-fluid">
                <br/>
                <h6 class="text-center" style="font-size:30px;">Kathmandu High School</h6>
                <h5 class="text-center" style="font-size:20px;">Third Terminal Examination</h5>
                <div class="row">
                    <div class="col-md-4">
                        <p>Name : Bhabin Khadka</p>
                    <p>Class : 9</p>
                        <p>Section : B</p>
                    </div>
                </div>

                <br/>
                    <div class="table-responsive"> 
                        <table class="table text-center table-bordered"> 
                        <thead> 
                        <tr class="stripTH" style="color:#4267B2; border:1px solid #ddd;">
                        <th rowspan="2">S.N</th> 
                        <th rowspan="2">Subject</th> 
                        <th colspan="2">Full Marks</th> 
                        <th colspan="2">Pass Marks</th> 
                        <th colspan="3">Obtained Marks</th> 
                        <th rowspan="2">Credit Hour</th> 
                        <th colspan="2">Grades</th>
                        <th rowspan="2">Final Grade</th> 
                        <th rowspan="2">Grade Point</th> 
                        </tr>
                        <tr class="stripTH" style="color:#4267B2;" >
                            <th>TH</th>
                            <th>PR</th>
                            <th>TH</th>
                            <th>PR</th>
                            <th>TH</th>
                            <th>PR</th>
                            <th>Total</th>
                            <th>TH</th>
                            <th>PR</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Math</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Social</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Science</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Health</td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>English </td>
                                <td>75</td>
                                <td>25</td>
                                <td>25</td>
                                <td>10</td>
                                <td>50</td>
                                <td>20</td>
                                <td>70</td>
                                <td>4</td>
                                <td>A</td>
                                <td>A+</td>
                                <td>A</td>
                                <td>3.55</td>
                            </tr>
                        </tbody>
                        
                        </table>
                        <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-title"><h5>Grade Point Average</h5></div>
                                    <p>Grade : A</p>
                                    <p>GPA : 3.55</p>
                                    <p>Percentage : 81%</p>
                                    <p>Remarks : Excellent</p>                            
                            </div>
                            <div class="col-md-6">
                                <div class="card-title"><h5>Legend</h5></div>
                                <p>TH : Theoritical Marks</p>
                                <p>PR : Practical Marks</p>
                            </div>
                        </div>
                        </div> 
                    </div>
                </div>
                </div>
            </div>


<!-- card shadow end -->
</div>       
</div>

 
</div>
      

<?php require('footer.php'); ?>
