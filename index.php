<?php

    include "Database.php";

    if(isset($_POST['Submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    }

    if (isset($username)){
    
        $sql = "SELECT `user_id`,`pass` FROM `user` WHERE username='$username' AND pass='$password';";
        $result = mysqli_query($link,$sql);

        // FAILED LOGIN
        if (mysqli_num_rows($result)==0)
        {
             //echo "Nothing found here";
             $failed=1;
        }

        // SUCCESS LOGIN
        else
        {
            //echo "Found! Login OK!";
            $row = $result->fetch_row();

           
            $db_id = $row[0];
            $db_username = $row[1];

            //echo "<br><br>ID: $db_id  Name: $db_name";

            setcookie("auth_user_id","$db_id");
            setcookie("auth_username","$username");

            //echo "Success! Cookie value: " . $_COOKIE['auth_id'];
            header("Location:createec2.php");

            exit;
        }



    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">

  <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
    

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt" rel="stylesheet">
  <style>
  img {
  max-width: 100%;
  height: auto;
  }
  .fakeimg {
    height: 200px;
    background: #6F8792;
  }
  *{
    font-family: 'Prompt', sans-serif;
  }
  .border2{
    
  }
  </style>
</head>
<body>

<div class="p-4 text-white text-center" style="background-color: #FD841F;">
  <h1>User Login</h1>
  <p>PROJECT INFOMATION TECHNOLOGY</p> 
</div>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid" style="display: flex; justify-content: start;">
  
    <ul class="nav justify-content-center">

  <li class="nav-item">
    <a class="nav-link active" href="register_aws.php"><font color="#808080" size="+1"><b>Register</b></font></a>
  </li> 
      
     <li class="nav-item">
    <a class="nav-link active" href="index.php"><font color="#808080" size="+1"><b>Login</b></font></a>
  </li> 
      
    </ul>
  </li>     
    
  </div>
</nav>

<div class="mt-5 p-4"></div>
<div class="">

<div class="p-sm-7 " style="display: flex; justify-content: center;">
<img class="col-md-4 shadow p-1 mb-5 bg-body rounded" src="img/aws33.jpg" alt="" width="99%">

<form  style="align-items: flex-cenet;" class="shadow p-3 mb-5 bg-body rounded col-md-4" method="POST" action="index.php">

    <legend>Login</legend>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Username</label>
        <input type="text" class="form-control" id="" name="username" required autofocus placeholder="Username">
      </div>
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" class="form-control"  required name="password" placeholder="Password"/>
  </div>
      
    <button type="submit" class="btn btn-primary " style="margin-top: 20px;margin-left: 20px;" name="Submit">Login</button>

    </div>
    
</form>
</div>
</div>

<div class="mt-5 p-4"></div>

<div class="mt-1 p-2"></div>



<div class="mt-5 p-4 text-white text-center" style="background-color:#FD841F;">
  <p>By Satapana Singsom</a></p>
</div>

</body>
</html>