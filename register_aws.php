<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
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
  <h1>User Registration</h1>
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
      
    
  </div>
</nav>

<?php
include("Database.php");
 if (isset($_POST['Submit'])){

            $sql2 = "SELECT `username` FROM `user` WHERE username='{$_POST['username']}';";
            $result2 = mysqli_query($link,$sql2);

            if (mysqli_num_rows($result2)>=1)
            {
              echo "<script>";
              echo "alert('username นี้มีผู้ใช้งานแล้ว');";
              echo "</script>";
            }

            else
            {
           $sql =  "insert into user(username,pass,email)
           values('{$_POST['username']}','{$_POST['pass1']}','{$_POST['email']}')";
           mysqli_query($link,$sql) or die ("ลงทะเบียนไม่สำเร็จ");
         
           echo "<script>";
           echo "alert('บันทึกข้อมูลสำเร็จ');";
           echo "</script>";
            }

}
mysqli_close($link)

?>



<div class="p-sm-7 " style="display: flex; justify-content: center;">

  <img class="col-md-5 shadow p-1 mb-5 bg-body rounded" src="img/aws_logo.png" alt="" width="99%">


<form  style="" class="col-md-5 shadow p-4 mb-5 bg-body rounded" method="POST" action="register_aws.php">

    <legend>Register</legend>
    
    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="">Username</label>
        <input type="text" class="form-control" id="" name="username" required autofocus placeholder="Username">
      </div>
      <div class="form-group col-md-7">
        <label for="">Email</label>
        <input type="email" class="form-control" id="" name="email" required autofocus placeholder="Email">
      </div>
    </div>

    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" class="form-control"  required name="pass1" onChange="form.pass2.pattern=this.value" placeholder="Password"/>
  </div>

  <div class="form-group col-md-6">
      <label>Confirm password</label>
      <input type="password" class="form-control"  name="pass2" required placeholder="Confirm password"/>
  </div>
   


    <button type="submit" class="btn btn-primary " style="margin-top: 20px;margin-left: 20px;" name="Submit">Register</button>
    
   
    </div>
    
    <input type="hidden" name="op" value="save" />
</form>


</div>



<div  class="mt-3 p-2 "></div>
<div  class="mt-3 p-2 "></div>

<footer>
<div class="mt-5 p-4 text-white text-center" style="background-color:#FD841F;">
  <p>By Satapana Singsom</a></p>
</div>
</footer>



</body>
</html>