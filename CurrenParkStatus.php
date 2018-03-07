<?php include("util.php"); ?>
<!DOCTYPE html>
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
        <li class="active"><a href="CurrenParkStatus.php">Current Parking Status</a></li>
        <li ><a href="NumOfAvalablePS.php">Check Avalable Number of Certain Area</a></li>
        <li ><a href="GetAvalablePSofCertainArea.php">Check Avalable Parking Spaces of Certain Area</a></li>
        <li ><a href="RemainTime.php">Check Remain Time</a></li>
        <li ><a href="WhereDoYouPark.php">Where do you park</a></li>
      </ul>
    </div>
  </div>
</nav>



<!-- action ="RemainTime.php"-->
<!-- Input form for parking space-->
<div class="container"> 



  <div class="row">
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-8 col-sm-8">
    
        <form autocomplete="off" class="form-inline" action ="CurrenParkStatus.php" method="post" role="form">
        

        <Button type="submit" name = "submit_select"  class="btn btn-default">Check Avalable Parking Space Number</button>
        <br></br>
        </form>
    </div>

  </div> <!--END of check button row-->
 

<?
  $mysqli = new mysqli($servername, $user, $password, $db_name);
// Create connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
    //echo "connected!!!";
  }

  if (isset($_POST['submit_select'])) {
    } else {
      //echo "no button pressed!!";
    }

    //$stmt1 = $mysqli->prepare('CALL checkAvalablePS(?, ?, ?, ?, ?, ?,)');
    
    $query = "SELECT garage_no,space_no FROM Parking_space";
    //$result = $mysqli->query($query);

    if( !$result = $mysqli->query($query)){
      echo $mysqli->error;
      return false; // throw exception, die(), exit, whatever...
    } else {
      printf("There are totally %d parking spaces.", $result->num_rows);
      //$row = $result->fetch_array(MYSQLI_NUM);
    }
    //if(!$pickRow = $result->fetch_array(MYSQLI_BOTH)){
    //  echo $mysqli->error;
    //  return false;
    //}
    //$row = $result->fetch_array(MYSQLI_NUM);
    //printf ("%s (%s)\n", $row[0], $row[1]);
    ?>
    <div class = "row">
     <table class="table table-striped">
      <thead>
      <tr>
        <th>Garage</th>
        <th>Space Number</th>
        <th>Status</th>
      </tr>
    </thead>
    <?

    while($picksRow = $result->fetch_array(MYSQLI_NUM)){
      $garageNo = $picksRow[0];
      $spaceNo = $picksRow[1];
    
      //echo "|||", $garageNo."--".$spaceNo;
      //clearStoredResults($mysqli);
      $log  = "Ying Lin-----check parking space status, parking space number:".PHP_EOL.
        "garage_no = $garageNo, space_no = $spaceNo".PHP_EOL;
      //Save string to log, use FILE_APPEND to append.
      writeAppLog($log);

      if(!$call = $mysqli->prepare('CALL GetPSStatus(?, ?, @status)')){
        echo $mysqli->error;
        return false;
      }
      $call->bind_param('ss', $garageNo, $spaceNo);
      $call->execute();
      
      $select = $mysqli->query('SELECT @status');
      $resultRow = $select->fetch_assoc();
      $psStatus     = $resultRow['@status'];

      $log  = "Ying Lin-----get the parking space's status:".PHP_EOL.
        "status = $psStatus, ".PHP_EOL;
      //Save string to log, use FILE_APPEND to append.
      writeAppLog($log);
      //echo "******ps status is:".$psStatus."\r\n"."\r\n"."\r\n";?>
      
      <tbody>
      <tr>
        <td><? echo $garageNo; ?></td>
        <td><? echo $spaceNo; ?></td>
        <td><? echo $psStatus; ?></td>
      </tr>
      </tbody> <?
      //$select->free();
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