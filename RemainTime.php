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
        <li><a href="GetAvalablePSofCertainArea.php">Check Avalable Parking Spaces of Certain Area</a></li>
        <li class="active"><a href="RemainTime.php">Check Remain Time</a></li>
        <li ><a href="WhereDoYouPark.php">Where do you park</a></li>
      </ul>
    </div>
  </div>
</nav>



<!-- action ="RemainTime.php"-->
<!-- Input form for parking space-->
<div class="container"> 
<div class="row">
  <div class="col-md-2 col-sm-2"></div>
    <div class="col-md-10 col-sm-10">
    
        <form autocomplete="off" class="form-inline" action ="RemainTime.php" method="post" role="form">
          <div class="form-group">
            <label for="plateNum">Input your plate number :</label>
            <input type="text" autocomplete="off" class="form-control" id="plateNum" name = "plateNum" placeholder="plate number"></input>
         
          </div>

          <Button type="submit" name = "submit_plate"  class="btn btn-default">Check</button>
          <br></br>
        </form>
    </div>
  </div>

    <!--div class = "row">
    <div class="col-md-2 col-sm-2"></div>
      <div class="col-md-10 col-sm-10">
      <h4>The Remaining Time is : <? //echo $plateRemainTime; ?></h4>
      </div>
  </div-->
  <!--div class = "row">
      <div class="col-md-2 col-sm-2"></div>
      <div class="col-md-10 col-sm-10">
      <br></br>
        <label >*****************************************************************************************************************</label>
        <br></br>
      </div>

  </div-->
  <div class="row">
    <div class="col-md-2 col-sm-2"></div>
    <div class="col-md-10 col-sm-10">
        <form autocomplete="off" class="form-inline" action ="RemainTime.php" method="post" role="form">
            <div class="form-group">
              <label for="PlateNumberText">Input the number of Parking Space :</label>
              <input type="text" autocomplete="off" class="form-control" id="gNum" name = "gNum" placeholder="grage number"></input>
              <input type="text" autocomplete="off" class="form-control" id="psNum" name = "psNum" placeholder="space number"></input>
            </div>
            <Button type="submit" name = "submit_ps"  class="btn btn-default">Check</button>
            <br></br>
        </form>
    </div>
  </div>

  
  <!--div class = "row">
    <div class="col-md-2 col-sm-2"></div>
      <div class="col-md-10 col-sm-10">
      <h4>The Remaining Time is : <? //echo $psRemainTime; ?></h4>
      </div>
  </div-->
  
  <div class = "row">
  <div class="col-md-2 col-sm-2"></div>
  <div class="col-md-10 col-sm-10">
<?
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
if (isset($_POST['submit_plate'])) {
    $plateNum = $_POST['plateNum'];
    //$example2 = $_POST['example2'];
    //echo "in isset...", $plateNum ;
  } else if(isset($_POST['submit_ps'])) {
    $gNum = $_POST['gNum'];
    $psNum = $_POST['psNum'];
    //echo "got gnum".$gNum;
    //echo "got psNum".$psNum;
    //$example2 = $_POST['example2'];
    //echo $psRemainTime ;

  }else {
    //echo "no button pressed!!";
  }

  
    //echo "this is isset!!!!!!!!";
    //$PlateNumber = $_POST['PlateNumber'];

    if ($gNum != null && $psNum != null){
      //write log
      $log  = "Ying Lin-----check remain time of parking space:".PHP_EOL.
        "garage_no = $gNum, space_no = $psNum".PHP_EOL;
      //Save string to log, use FILE_APPEND to append.
      writeAppLog($log);
      //echo "grage numer is ----:".$gNum;
      $res = $mysqli->multi_query("CALL GetPSRemainTime('".$gNum."','".$psNum."',@psRemainTime); SELECT @psRemainTime");
      //echo "plate numer is --222222--:".$PlateNumber;
       if( $res ) { 
        //echo "111111111";
          //$results = 0;
          $mysqli->next_result(); 
          if ($result = $mysqli->store_result()) { 
              //echo "222222222";
              //printf( "<b>Result #%u</b>:<br/>", ++$results ); 
              $row = $result->fetch_row(); 
              //foreach( $row as $cell ) echo $cell, "--;"; 
              //echo $row[0],"---", $row[1],"--=";
              $psRemainTime = $row[0];
              
              $result->close(); 
              $mysqli->close();
              //if( $mysqli->more_results() ) echo "<br/>";
              if ( $psRemainTime != null){
                ?>
              <h4><?

              $log  = "Ying Lin-----the remain time of the parking space is:".PHP_EOL.
                      "remain_time = $psRemainTime".PHP_EOL;
                    //Save string to log, use FILE_APPEND to append.
                    writeAppLog($log); 

              echo "Parking Space: ", $gNum, ",",$psNum, " >>>>>>>  Remain Time:" , $psRemainTime ?></h4>
              <?
              } else {
              ?> 
              <h4> Not a correct parking space number. </h4>
              <? 
            } 
              
     

            } 
            }  
                     
        } 

      if ($plateNum != null){
      //echo "plate numer is ----:".$plateNum;
        $log  = "Ying Lin-----check remain time of  plate:".PHP_EOL.
        "plate_no = $plateNum".PHP_EOL;
      //Save string to log, use FILE_APPEND to append.
      writeAppLog($log);
      $res = $mysqli->multi_query("CALL GetPlateRemainTime('".$plateNum."',@plateRemainTime); SELECT @plateRemainTime");
      //echo "sql is:";
      //echo "plate numer is --222222--:".$plateNum;
       if( $res ) { 
        //echo "111111111";
          //$results = 0;
          $mysqli->next_result(); 
          if ($result = $mysqli->store_result()) { 
              //echo "222222222";
              //printf( "<b>Result #%u</b>:<br/>", ++$results ); 
              $row = $result->fetch_row(); 
              //foreach( $row as $cell ) echo $cell, "--;"; 
              //echo $row[0],"---", $row[1],"--=";
              $plateRemainTime = $row[0];
              
              $result->close(); 
              $mysqli->close();
              //if( $mysqli->more_results() ) echo "<br/>";
              if ( $plateRemainTime){
                //echo "in ifffff";
                ?>
              <h4><? 
              $log  = "Ying Lin-----the remain time of  the plate:".PHP_EOL.
              "time = $plateRemainTime".PHP_EOL;
            //Save string to log, use FILE_APPEND to append.
              writeAppLog($log);


              echo "Plate Number: ", $plateNum, " >>>>>>> Remain Time:" , $plateRemainTime ?></h4>
              <?
              } else {
                //echo "in else....";
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