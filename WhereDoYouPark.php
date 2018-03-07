<?php include("util.php"); ?>
<html lang="en">
<head>
  <title>SJSU Parking System</title>
  <!--title>SJSU Parking System</title-->
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
        <li ><a href="GetAvalablePSofCertainArea.php">Check Avalable Parking Spaces of Certain Area</a></li>
        <li ><a href="RemainTime.php">Check Remain Time</a></li>
        <li class="active"><a href="WhereDoYouPark.php">Where do you park</a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="container">    
  <div class="row">
    <div class="col-md-2 col-sm-2">
                
    </div>
    <div class="col-md-10 col-sm-10">
        <form autocomplete="off" class="form-inline" action ="WhereDoYouPark.php" method="post" role="form">
        <div class="form-group">
          <label for="PlateNumberText">Input Your Plate Number:</label>
          <input type="text" autocomplete="off" class="form-control" id="PlateNumber" name = "PlateNumber" placeholder="plate number"></input>
          </div>

          <input type="submit" name = "submit" class="btn btn-default"></input>
    </form>
    </div>


  </div>
  <div class = "row">
  <div class="col-md-2 col-sm-2"></div>
  <div class="col-md-10 col-sm-10">
  <h4>Your plate number is : <? echo $PlateNumber; ?></h4>
    
  </div>
  </div>
  <div class = "row">
  <div class="col-md-2 col-sm-2"></div>
  <div class="col-md-10 col-sm-10">



<?
//$arr = array();
  $mysqli = new mysqli($servername, $user, $password, $db_name);
// Create connection
//$conn = mysqli_connect($servername, $user, $password, $db_name);
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 

// Check connection
/*if (!$conn) {
    die('Could not connect: ' . mysqli_error());
} else {
   echo "connected!!";
}*/
  //extract($_POST);
if (isset($_POST['submit'])) {
    $PlateNumber = $_POST['PlateNumber'];
    //$example2 = $_POST['example2'];
    echo $PlateNumber ;
  }

  
    //echo "this is isset!!!!!!!!";
    //$PlateNumber = $_POST['PlateNumber'];

    if ($PlateNumber != null){
      $log  = "Ying Lin-----find where does the car park, plate number is:".PHP_EOL.
                      "plate_num = $PlateNumber".PHP_EOL;
                    //Save string to log, use FILE_APPEND to append.
                    writeAppLog($log); 
      //echo "plate numer is ----:".$PlateNumber;
      $res = $mysqli->multi_query("CALL GetPSbyPlate('".$PlateNumber."',@gNum,@psNum,@pLevel,@pArea); SELECT @gNum, @psNum, @pLevel,@pArea");
      //echo "plate numer is --222222--:".$PlateNumber;
       if( $res ) { 
        //echo "111111111";
          //$results = 0;
          $mysqli->next_result(); 
          
            //
            if ($result = $mysqli->store_result()) { 
              //echo "222222222";
              //printf( "<b>Result #%u</b>:<br/>", ++$results ); 
              $row = $result->fetch_row(); 

              //foreach( $row as $cell ) echo $cell, "--;"; 
              //echo $row[0],"---", $row[1],"--=";
              $gNum = $row[0];
              $p_level = $row[1];
              $p_area = $row[2];
              $psNum = $row[3];
              
              $result->close(); 
              $mysqli->close();
              //if( $mysqli->more_results() ) echo "<br/>";
              if ( $gNum){
                ?>
              <h4>You park on :  <? 

              $log  = "Ying Lin-----the car parks at:".PHP_EOL.
                      "garage_no = $gNum, level = $p_level, area = $p_area, ps_num = $psNum".PHP_EOL;
                    //Save string to log, use FILE_APPEND to append.
                    writeAppLog($log);

              echo "Grage:", $gNum, ", Level: ", $p_level, ", Area: ", $p_area, ", Parking Space: ", $psNum . " "; ?></h4>
              <?
              } else {
              ?> 
              <h4> You don't park here. </h4>
              <? 
            } 
              
     

            } 
            }  
                     
        } 
         
      
      ?>



  
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