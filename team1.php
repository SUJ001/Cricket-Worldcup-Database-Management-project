<?php

$con= mysqli_connect("localhost", "root", "");
if(!$con){
    die("connection failed due to " . mysqli_connect_error());
} 

$teamid= $_REQUEST['teamid'];

$result= mysqli_query($con, "SELECT team_name, team_rank, no_of_wins, no_of_loses FROM `criccc`.`team` WHERE team_id='$teamid'");

$data= mysqli_fetch_assoc($result);
$name= $data["team_name"];
$rank=$data["team_rank"];
$wins=$data["no_of_wins"];
$loses=$data["no_of_loses"];

$cid= ($teamid -1)*11 + 1;
$cresult= mysqli_query($con, "SELECT player_name FROM `criccc`.`player` WHERE player_id='$cid'");
$cdata= mysqli_fetch_assoc($cresult);
$captain= $cdata["player_name"];

$sresult= mysqli_query($con, "SELECT stage FROM `criccc`.`stage` WHERE id='$teamid'");
$sdata=mysqli_fetch_assoc($sresult);
$stage=$sdata["stage"]


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
<body style="background-color:#0D1635;">
    <nav class="navbar navbar-expand-lg navbar-dark position-sticky-top fixed-top"style="background-color:#0D1635;">
        <a class="navbar-brand" href="home.html"><img class="title-logo"src="image\logo.PNG" style="width: 120px;height:60px ;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ml-auto">
            <li class="abhinav nav-item ">
              <a class="our-logo nav-link" style="color:white"href="schedule.php">Schedule</a>
            </li>
            <li class="abhinav nav-item ">
              <a class="our-logo nav-link" style="color:white"href="pointstable.html">Points Table</a>
            </li>
            <li class="abhinav nav-item">
              <a class="our-logo nav-link" style="color:white"href="rankings.php">Rankings</a>
            </li>
            <li class="abhinav nav-item">
                <a class="our-logo nav-link" style="color:white" href="teams.php">Teams</a>
            </li>
            <li class="abhinav nav-item">
                <a class="our-logo nav-link" style="color:white"href="login.html">Login</a>
              </li>
          </ul>
        </div>
      </nav>
      <br>
      <?php 
        echo"<section style='height: 100px;
        margin-top: 60px;
        text-align: center; background-color:#40a4c2 ;'>
            <div>
                <h1 style='color: white; padding-top: 15px'>$name</h1>
            </div>
        </section>
        <div>
        <div style='width: 36%; height:0px;'><img  src='teambg/$teamid.png' style='width: 100%; height: 400px; border-radius: 10px' ></div>
        <div style='margin-left: 36%;'><img  src='flag/$teamid.png' style='width: 130px; margin-top: 20px; border-radius: 8px; margin-left:42%;' >
        <div style='width:100%; margin:0%;'><img src='teambg/prize.png' style='height:50px; margin-top:4%;margin-left: 46%'>
        <p style='margin-top:3%;font-weight:bold; margin-left: 45%;'><span style=' font-size:20px; color: rgb(59, 189, 59);'>$wins W</span><span  style='font-size:20px;padding-left:15px; color:  rgb(179, 61, 61);'>$loses L</span></p>
        </div>
        <div style='width:100%; margin:0%;'>
        <p style='margin-top:3%;font-weight:bold; margin-left: 40%;'><span style=' font-size:20px; color: grey;'>Captain: <span style='color: white;'>$captain</span> </p>
        </div>
        <div style='width:100%; margin:0%;'>
        <p style='margin-top:3%;font-weight:bold; margin-left: 40%;'><span style=' font-size:20px; color:  rgb(220, 247, 200);'>'$stage'</span> </p>
        </div>
        </div>
        </div>";
        ?>
        <hr>
        <div style="background-color: aqua; height: 50px; margin-top: 65px; width: 60%; margin-left: 20%;margin-bottom: 0px; text-align: center; font-size: 30px; border-radius: 9px;">
            T20 WC'22 Line Up
        </div>
        <div style='background-color:   rgb(215, 201, 213) ; width: 60%; margin-left: 20%; text-align: center; font-size: 30px;margin-bottom: 10px; border-radius: 9px; margin-top: 10px;'>
           
          <?php 
            
            global $Name;
            global $po;
            global $playertype;
            global $runs;
            global $wickets;

           echo" 
              <h3>$name</h3>
              <table  style='border: 1px solid ; border-color: #0D1635; border-collapse: collapse; font-size: 15px; width: 100%;'>
              <thead >
              <tr style='border: 1px solid ;   border-color: #0D1635; border-collapse: collapse;'>
                <th style='border: 1px solid ; border-color: #0D1635; border-collapse: collapse; width: 20%;' scope='col'>Position</th>
                <th style='border: 1px solid ; border-color: #0D1635; border-collapse: collapse; width: 30%' scope='col'>Name</th>
                <th style='border: 1px solid ; border-color: #0D1635; border-collapse: collapse; width: 25%' scope='col'>Player Type</th>
                <th style='border: 1px solid ; border-color: #0D1635; border-collapse: collapse; width: 10%' scope='col'>Runs</th>
                <th style='border: 1px solid ; border-color: #0D1635; border-collapse: collapse; width: 15%' scope='col'>Wickets</th>
              </tr>
            </thead>";
            
            $result1= mysqli_query($con, "SELECT * FROM `criccc`.`player` WHERE team_id='$teamid'");
            $po=1;
            while($data1= mysqli_fetch_assoc($result1)){
                $Name= $data1["player_name"];
                $playertype= $data1["player_type"];
                $runs= $data1["runs"];
                $wickets= $data1["wickets"];
                echo"
                <tbody>
                <tr style='border: 1px solid ; border-color: #0D1635; border-radius: 8px;border-collapse: collapse;'  >
                <td style='border: 1px solid ; border-color: #0D1635; border-radius: 8px;border-collapse: collapse;'>$po</td>
                <td style='border: 1px solid ; border-color: #0D1635; border-radius: 8px;border-collapse: collapse;'>$Name</td>
                <td style='border: 1px solid ; border-color: #0D1635; border-radius: 8px;border-collapse: collapse;'>$playertype</td>
                <td style='border: 1px solid ; border-color: #0D1635; border-radius: 8px;border-collapse: collapse;'>$runs</td>
                <td style='border: 1px solid ; border-color: #0D1635; border-radius: 8px;border-collapse: collapse;'>$wickets</td>
                </tr>
                </tbody>
                ";
                $po++;
            }
            echo"</table>";
            $con -> close();
            ?>
          
        </div>
        <div style="margin-bottom:30px;"></div>
        
        

    
      
      
</body>
</html>