<?php
$con= mysqli_connect("localhost", "root", "");
if(!$con){
    die("connection failed due to " . mysqli_connect_error());
} 
$result= mysqli_query($con, "SELECT * FROM `criccc`.`matches`");



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  </head>
<body style="background-color:#0D1635;">
    <nav class="navbar navbar-expand-lg navbar-dark position-sticky-top fixed-top"style="background-color:#0D1635;">
        <a class="navbar-brand" href="home.html"><img class="title-logo"src="image/logo.png" style="width: 120px;height:60px ;"></a>
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
                <a class="our-logo nav-link" style="color:white"href="teams.php">Teams</a>
            </li>
            <li class="abhinav nav-item">
                <a class="our-logo nav-link" style="color:white"href="login.html">Login</a>
              </li>
          </ul>
        </div>
      </nav>
      <div style="padding-top:120px;padding-bottom:34px;color:white;background-color: #ea047fd7">
        <h1 style="position: relative;left:20px">ICC WORLD CUP FIXTURES</h1>
      </div>
      <section style="margin-top:50px ;">
<?php
        
    global $matchdate;
    global $matchid;
    global $winnerid;
    global $loserid;
    global $stadium;
    global $group;

    while($data= mysqli_fetch_assoc($result)){
      $matchdate= $data["match_date"];
      $matchid= $data["match_id"];
      $winner= $data["winner_id"];
      $loser= $data["loser_id"];
      $stadium= $data["stadium"];
      if($winner > 0){
      $wresult= mysqli_query($con, "SELECT team_name FROM `criccc`.`team` WHERE team_id='$winner'");
      $lresult= mysqli_query($con, "SELECT team_name FROM `criccc`.`team` WHERE team_id='$loser'");
      $wdata= mysqli_fetch_assoc($wresult);
      $ldata= mysqli_fetch_assoc($lresult);
      $wname= $wdata["team_name"];
      $lname= $ldata["team_name"];
      if($matchid<30 && $winnerid<7){
        $group = "A";
      }else if($matchid<30){
        $group = "B";
      }
      
    echo"
    <div style='margin: auto 180px; margin-top: 50px; background-color: black; height: 140px; border-radius: 20px; '>
    <div style='margin: auto 60px; margin-bottom: 0px;  border-radius: 8px; padding-top: 15px;'>
        <div style='display: table; width: 100%; '>
        <div style='display: table-row;'>
        <div style='display: table-cell; text-align: left; padding-left: 5px; color: white; width: 33%;'>$matchdate</div> 
        <div style='display: table-cell; text-align: right; font-size: 23px ;width: 34%; font-family: Dancing Script, cursive; color: white;'>,at $stadium</div>
        </div>
        </div>
        <div style='background-color:rgb(97, 96, 96); border-radius: 3px; margin-bottom: 0px;'>
            <p style='color:white;font-size:16px;text-align: center;margin-bottom:10px;'>ICC WORLD CUP, MATCH-$matchid, GROUP $group</p>
        </div>
        <div>
        <div style='height: 0px; width: 50%; margin-right:50%;'>
        <div style='height: 0px;'>
        <img src='flag/$winner.png' style='width: 12%; border-radius: 4px ;margin-right: 88%; margin-bottom: 0px; margin-top: 0px; '> 
        </div>
        <div style='text-align: right; color: green;'>
        <p style='padding-right: 10px;'>$wname</p>
        </div>
        </div>
        <div style='width: 50%; margin-left: 50%;'>
        <div style='height: 0px;'>
        <img src='flag/$loser.png' style='width: 12%; border-radius: 4px;  margin-top: 0%; margin-left:90%; margin-bottom: 0px;'>
        </div>
        <div style='text-align: left; color: red;'>
        <p style='padding-left: 10px;'>$lname</p>
        </div>
        </div>
        </div>
    </div>
    </div>";
    }
  }
  
?>
    </section>
</body>
</html>