<?php
$correct= false;
if(isset($_POST['username'])){
$con= mysqli_connect("localhost", "root", "");
if(!$con){
    die("connection failed due to " . mysqli_connect_error());
}
$username= $_POST['username'];
$password= $_POST['password'];

$query= "SELECT * FROM `criccc`.`register form` WHERE Username='$username' AND Password='$password' ";

$result= mysqli_query($con, $query);

if(mysqli_num_rows($result) == 1){
$correct= true;
}
$con -> close();
}
if($correct == true){
    header("location: homeal.html");
}

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
</head>
<body id="login">
  <div class="row">
      <div class="col-lg-6" style="position: relative;left:50px;border-radius: 5% ;margin-top: 100px; background-color: #0D1635; width:40%;padding: 50px 50px 20px 50px;">
      <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-5 " style="width: 400px;"id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
   <h1 style="font-family: 'Lora', serif; color:#CDFCF6">LogIn</h1>
  </li>
  <lr>
    <?php
    if($correct == false){
       echo  "<li style=' padding-left: 60px; padding-top: 7px; padding-bottom: 0px ' >
           <h5 style='font-family: Lora, serif; color:#a42c2c' >Incorrect Username or Password</h5>
         </li>";
    }
  ?>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content"style="width:80%">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form action="login.php" method="post">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" id="loginName" name="username" class="form-control" />
        <label class="form-label" for="loginName" style="color: #CDFCF6;">Username</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="loginPassword" name="password" class="form-control" />
        <label class="form-label" for="loginPassword" style="color: #CDFCF6;" >Password</label>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck" style="color: #CDFCF6;"> Remember me </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="#!" style="color: #CDFCF6;">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p style="color: #CDFCF6;">Not a member? <a href="register.html">Register</a></p>
      </div>
    </form>
  </div>
</div> 
</div> 
<div class="col-lg-6">
  <img style="width: 400px;height: 600px; position: relative; left:100px;top:60px;"src="image/loginimage.webp" alt="">
</div>
</div>  
</body>
</html>