<?php include("util.php"); ?>
<html lang="en">
<head>
  <title>SJSU Parking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      /*background-color: #f2f2f2;*/
      padding: 25px;
    }
    .jumbotron {
    margin-bottom: 0px;
    background-image: url("./img/parkHome.jpg");
    background-position: 0% 40%;
    background-size: cover;
    background-repeat: no-repeat;

    color: orange;

    text-shadow: blue 0.3em 0.3em 0.3em;
  }
  </style>
</head>
<body >
<div class="jumbotron">
  <div class="container text-center">
    <a href="index.php" style="color: orange" > <h1 >SJSU Parking System</h1> </a>        
  </div>
</div>
<?php

    $servername = "127.0.0.1";//mysql server
    $user = "app";//mysql username
    $password = "app";//mysql password
    $host = "localhost";

    $db_name="cmpe226_team_project"; // Database name 
    
    //$handlerURL = "http://weareprettycool.com/yinglinproject/externalPurchaseHandler.php";
?>

  

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="CurrenParkStatus.php">Current Parking Status</a></li>
        <li ><a href="NumOfAvalablePS.php">Check Avalable Number of Certain Area</a></li>
        <li class="active"><a href="GetAvalablePSofCertainArea.php">Check Avalable Parking Spaces of Certain Area</a></li>
        <li ><a href="RemainTime.php">Check Remain Time</a></li>
        <li ><a href="WhereDoYouPark.php">Where do you park</a></li>
      </ul>
    </div>
  </div>
</nav>



<!-- action ="RemainTime.php"-->
<!-- Input form for parking space-->
<div class="container"> 




  <div class="row"> <!-- start select options row-->

    <div class="col-md-2 col-sm-2">
    <label for="garage">Garage:</label>
        <select form="numOfAvalablePSForm" class="form-control" id="garage" name = "garage">
          <option>Any</option>
          <option>G01</option>
          <option>G02</option>
          <option>G03</option>
        </select>
    </div>

    <div class="col-md-2 col-sm-2">
    <label for="level">Level:</label>
        <select form="numOfAvalablePSForm" class="form-control" id="level" name = "level">
          <option>Any</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select>
    </div>

    <div class="col-md-2 col-sm-2">
    <label for="area">Area:</label>
        <select form="numOfAvalablePSForm" class="form-control" id="area" name = "area">
          <option>Any</option>
          <option>A</option>
          <option>B</option>
          <option>C</option>
          <option>D</option>
        </select>
    </div>

    <div class="col-md-2 col-sm-2">
    <label for="employee-only">Empolyee Only:</label>
        <select form="numOfAvalablePSForm" class="form-control" id="employee_only" name = "employee_only" >
          <option>Any</option>
          <option>General</option>
          <option>Employee-Only</option>
        </select>
    </div>

    <div class="col-md-2 col-sm-2">
    <label for="type">Type:</label>
        <select form="numOfAvalablePSForm" class="form-control" id="type" name = "type">
          <option>Any</option>
          <option>Small Car</option>
          <option>General</option>
        </select>
    </div>

    <div class="col-md-2 col-sm-2">
    <label for="garage">Diability:</label>
        <select form="numOfAvalablePSForm" class="form-control" id="disability" name = "disability">
          <option>Any</option>
          <option>Is Diability</option>
          <option>Not Diability</option>
        </select>
    </div>
  </div><!-- end select options row-->

  <div class="row">
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-8 col-sm-8">
    
        <form autocomplete="off" id="numOfAvalablePSForm" class="form-inline" action ="GetAvalablePSofCertainArea.php" method="post" role="form">
        <br></br>

        <Button type="submit" name = "submit_select"  class="btn btn-default">Check Avalable Parking Space Number</button>
        <br></br>
        </form>
    </div>

  </div> <!--END of check button row-->


    <!--div class="col-md-10 col-sm-10">
    
        <form autocomplete="off" class="form-inline" action ="RemainTime.php" method="post" role="form">
          <div class="form-group">
            <label for="plateNum">Input your plate number :</label>
            <input type="text" autocomplete="off" class="form-control" id="plateNum" name = "plateNum" placeholder="plate number"></input>
         
          </div>

          <Button type="submit" name = "submit_plate"  class="btn btn-default">Check</button>
          <br></br>
        </form>
    </div-->





  
  <!--div class = "row">
    <div class="col-md-2 col-sm-2"></div>
      <div class="col-md-10 col-sm-10">
      <h4>The Remaining Time is : <? //echo $psRemainTime; ?></h4>
      </div>
  </div-->
  
  <div class = "row">
  
  <!--table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table-->
<?
  $mysqli = new mysqli($servername, $user, $password, $db_name);
// Create connection
//$conn = mysqli_connect($servername, $user, $password, $db_name);
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
    //echo "connected!!!";
  }

// Check connection
/*if (!$conn) {
    die('Could not connect: ' . mysqli_error());
} else {
   echo "connected!!";
}*/
  //extract($_POST);
if (isset($_POST['submit_select'])) {
      if ($_POST['garage'] === "Any") {
        $garage = null; // or 'NULL' for SQL
      } else{
        $garage = $_POST['garage'];
      }
      //echo "~~~garage is:--", $garage;
      if ($_POST['level'] === "Any") {
        $level = null; // or 'NULL' for SQL
      } else{
        $level = $_POST['level'];
      }

      if ($_POST['area'] === "Any") {
        $area = null; // or 'NULL' for SQL
      } else{
        $area = $_POST['area'];
      }

      if ($_POST['employee_only'] === "Any") {
        $employee_only = null; // or 'NULL' for SQL
      } else if ($_POST['employee_only'] === "General"){
        $employee_only = 'F';
      } else {
        $employee_only = 'T';
      }

      if ($_POST['type'] === "Any") {
        $type = null; // or 'NULL' for SQL
      } else if($_POST['type'] === "General"){
        $type = 'F';
      } else {
        $type = 'T';
      }
      if ($_POST['disability'] === "Any") {
        $disability = null; // or 'NULL' for SQL
      } else if($_POST['disability'] === "Is Diability"){
        $disability = 'T';
      } else {
        $disability = 'F';
      }

  } else {
    //echo "no button pressed!!";
  }

  
    //echo "this is isset!!!!!!!!";
    //$PlateNumber = $_POST['PlateNumber'];
    //call checkAvalablePS('G03',null,null,null,null,null);

    //$stmt1 = $mysqli->prepare('CALL checkAvalablePS(?, ?, ?, ?, ?, ?,)');

    if( !$stmt = $mysqli->prepare('CALL checkAvalablePS(?, ?, ?, ?, ?, ?)')){
      echo $mysqli->error;
      return false; // throw exception, die(), exit, whatever...
    } else {
      // the rest of your code
    }
    $log  = "Ying Lin-----check available parking space in area:".PHP_EOL.
        "garage_no = $garage, level = $level, area = $area, employee_only = $employee_only, type = $type, disability = $disability".PHP_EOL;
      //Save string to log, use FILE_APPEND to append.
      writeAppLog($log);


    $stmt->bind_param('sissss', $garage, $level, $area, $employee_only, $type, $disability);
    $stmt->execute();
    $stmt->bind_result($garageNum,$spaceNo,$status,$employee_only,$disability, $time_limit,$size_type,$level,$area,$empty, $plateNo,$startTime,$estEndTime,$realEndTime,$parkDate,$permitType);
    if($stmt->fetch()){
      ?>
      <table class="table table-striped">
      <thead>
      <tr>
        <th>Garage</th>
        <th>Level</th>
        <th>Area</th>
        <th>Space Number</th>
        <th>Emloyee Only</th>
        <th>Type</th>
        <th>Disability</th>
      </tr>
    </thead><?
    

     do {
      //printf ("%s %s %s **\n \n", $a, $b,$c,$d,$e, $f,$g,$h,$i,$j, $k,$l,$m,$n,$o,$p);
      
      //echo "(garage:", $garageNum;
      //echo "---park space num:", $spaceNum, ")\n";
      ?>
      <tbody>
      <tr>
        <td><? echo $garageNum; ?></td>
        <td><? echo $level; ?></td>
        <td><? echo $area; ?></td>
        <td><? echo $spaceNo; ?></td>
        <td><? echo $employee_only; ?></td>
        <td><? echo $size_type; ?></td>
        <td><? echo $disability; ?></td>
      </tr>
      </tbody><?
    }while($stmt->fetch());
    $stmt->close();
    $mysqli->close(); 
    } else {
      echo "No empty parking space in this area!";
    }
      
      ?>

  </table>


</div>
  
  </div>

                
  </div>

  
</div><br>

<br><br>

<!--footer class="container-fluid text-center"> 
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer-->

</body>
</html>