<?php
$con= mysqli_connect("localhost", "root", "");
if(!$con){
    die("connection failed due to " . mysqli_connect_error());
} 
$result= mysqli_query($con, "SELECT * FROM `criccc`.`player` ORDER BY runs DESC LIMIT 10");
$result1= mysqli_query($con, "SELECT * FROM `criccc`.`player` ORDER BY wickets DESC LIMIT 10");
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
    <link rel="stylesheet" href="sty.css">
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
    <div style="margin-top: 86px;">
    <div>
        <div style="height: 55px; background-color: rgb(42, 63, 79); text-align: center; ">
        <h2 style="color: whitesmoke; padding-top: 8px;">TEAM RANKINGS</h2>
        </div>
        <div style="background-image: url('teambg/cham.png'); height: 450px;">
            <div style="background-color:black; width: 60%; margin-left: 20%; opacity: 0.6; margin-bottom: 20px;">
        <table  style="width: 100%; border-style: hidden; color: beige;" class="suj4">
            <thead>
                <tr style="line-height: 35px;">
                <th style="width: 30%; padding-left: 15px; border-style: hidden">WC RANK</th>
                <th style="width: 46%; border-style: hidden">TEAM</th>
                <th style="width: 24%; border-style: hidden">T20I RANK</th>
                </tr>
            </thead>
            <tbody>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">1</td>
                    <td><img src="flag/2.png">ENGLAND</td>
                    <td>2</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">2</td>
                    <td><img src="flag/8.png">PAKISTAN</td>
                    <td>3</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">3</td>
                    <td><img src="flag/7.png">INDIA</td>
                    <td>1</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">4</td>
                    <td><img src="flag/1.png">NEW ZEALAND</td>
                    <td>5</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">5</td>
                    <td><img src="flag/3.png">AUSTRALIA</td>
                    <td>6</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">6</td>
                    <td><img src="flag/9.png">SOUTH AFRICA</td>
                    <td>4</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">7</td>
                    <td><img src="flag/4.png">SRI LANKA</td>
                    <td>8</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">8</td>
                    <td><img src="flag/10.png">NETHERLANDS</td>
                    <td>12</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">9</td>
                    <td><img src="flag/11.png">BANGLADESH</td>
                    <td>9</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">10</td>
                    <td><img src="flag/12.png">ZIMBABWE</td>
                    <td>11</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">11</td>
                    <td><img src="flag/5.png">IRELAND</td>
                    <td>7</td>
                </tr>
                <tr style="line-height: 35px;">
                    <td style="paadding-left: 16px;">12</td>
                    <td><img src="flag/6.png">AFGHANISTHAN</td>
                    <td>10</td>
                </tr>
            </tbody>
        </table>
        </div>
        </div>
        <div style="background-color:rgb(42, 63, 79); text-align: center; height:50px; padding-top:6px; margin-top: 5px;">
            <h2 style="color:azure">T20 WC BATSMAN RANKING</h2>
        </div>
        <div>
            <div>
            <div style="width: 40%; margin-right: 60%; height: 0px;">
                <img src="teambg/vk1.png" style="width: 60%; margin-left: 20%; border-radius: 17px; margin-top: 8px; height: 400px ">
            </div>
            <div style="width: 40%; margin-left: 50%; ">
            <table class="sujtab">
            <thead>
            <tr style="line-height: 30px;">
            <th style="width: 25%; padding-top: 6px; padding-left: 15px;">RANK</th>
            <th style="width: 45%; padding-top: 6px;">PLAYER NAME</th>
            <th style="width: 10%; padding-top: 6px;">RUNS</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            global $pname;
            global $pruns;
            global $prank;
            $prank =1;
            while($data=mysqli_fetch_assoc($result)){
                $pname= $data["player_name"];
                $pruns= $data["runs"];
                echo"
                <tr>
                <td style='padding-left: 16px;'>$prank</td>
                <td>$pname</td>
                <td>$pruns</td>
                </tr>
                ";
                $prank++;
            }
            
            
            ?>
            </tbody>            
            </table>            
            </div>
            </div>

            <div style="background-color:rgb(42, 63, 79); text-align: center; height:50px; padding-top:6px; margin-top: 40px;">
            <h2 style="color:azure">T20 WC BOWLER RANKING</h2>
        </div>
        <div>
            <div>
            <div style="width: 40%; margin-left: 60%; height: 0px;">
                <img src="teambg/hsr1.png" style="width: 60%; margin-left: 10%; border-radius: 17px; margin-top: 10px; height: 400px ">
            </div>
            <div style="width: 40%; margin-left: 10%; ">
            <table class="sujtab">
            <thead>
            <tr style="line-height: 30px;">
            <th style="width: 25%; padding-top: 6px; padding-left: 15px;">RANK</th>
            <th style="width: 45%; padding-top: 6px;">PLAYER NAME</th>
            <th style="width: 10%; padding-top: 6px;">WICKETS</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            global $bname;
            global $bwkt;
            global $brank;
            $brank =1;
            while($data1=mysqli_fetch_assoc($result1)){
                $bname= $data1["player_name"];
                $bwkt= $data1["wickets"];
                echo"
                <tr>
                <td style='padding-left: 16px;'>$brank</td>
                <td>$bname</td>
                <td>$bwkt</td>
                </tr>
                ";
                $brank++;
            }
            
            
            ?>
            </tbody>            
            </table>            
            </div>
            </div>
            

        </div>
    </div>
</div>

