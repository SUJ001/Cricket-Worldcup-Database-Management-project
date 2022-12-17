

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
      <div style="padding-top:120px;padding-bottom:34px;color:white; background-color: #40a4c2" >
        <h1 style="position: relative;left:20px; text-align: center ">ICC T20 WORLD CUP '22</h1>
      </div>
      <section class="sky">
        <h2 style="color: white; text-align: center; padding: 1%">GROUP-A</h2>
      </section>
      <form action="team1.php" method="post">
      <div >
        <ul>
             <button type="submit" class="s1" name="teamid" value="1"> <li> <img src="team-logos\nzc.png"> NEW ZEALAND </li></button>
             <button type="submit" class="s1" name="teamid" value="2"> <li> <img src="team-logos\eng.png"> ENGLAND</li></button>
             <button type="submit" class="s1" name="teamid" value="3"> <li> <img src="team-logos\aus.png"> AUSTRALIA</li></button>
             <button type="submit" class="s1" name="teamid" value="4"> <li> <img src="team-logos\sl.png">  SRI LANKA</li></button>
             <button type="submit" class="s1" name="teamid" value="5"> <li> <img src="team-logos\irl.png"> IRELAND</li></button>
             <button type="submit" class="s1" name="teamid" value="6"> <li> <img src="team-logos\afg.png"> AFGHANISTHAN</li></button>
        </ul>
      </div>
      <section class="sky">
        <h2 style="color: white; text-align: center; padding: 1%">GROUP-B</h2>
      </section>
      <div >
        <ul>
            <button type="submit" class="s2" name="teamid" value="7"><li> <img src="team-logos\ind.png"> INDIA </li></button>
            <button type="submit" class="s2" name="teamid" value="8"><li> <img src="team-logos\pak.png"> PAKISTAN</li></button>
            <button type="submit" class="s2" name="teamid" value="9"><li> <img src="team-logos\sa.png">  SOUTH AFRICA</li></button>
            <button type="submit" class="s2" name="teamid" value="10"><li> <img src="team-logos\ned.png"> NETHERLANDS</li></button>
            <button type="submit" class="s2" name="teamid" value="11"><li> <img src="team-logos\ban.png"> BANGLADESH</li></button>
            <button type="submit" class="s2" name="teamid" value="12"><li> <img src="team-logos\zim.png"> ZIMBABWE</li></button>
        </ul>
      </div>
</form>
      
</body>
</html>