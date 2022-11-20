<?php
include "Database.php";
include "checklogin.php"
?>

    

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
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
  <h1>Form AWS EC2</h1>
  <p>PROJECT INFOMATION TECHNOLOGY</p> 
</div>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid" style="display: flex; justify-content: start;">
  
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="createec2.php"><font color="#808080" size="+1"><b>Create Instance</b></font></a>
  </li> 
    
     <li class="nav-item">
    <a class="nav-link active" href="logoff_ec2.php"><font color="#808080" size="+1"><b>Logoff</b></font></a>
  </li> 
      
    </ul>
  </li>     
    
  </div>
</nav>
<div class="">

<div class="p-sm-4 " style="display: flex; justify-content: center;">
  <img class="col-md-5 shadow p-3 mb-5 bg-body rounded col-md-7" src="img/aws22.jpg" alt="">
<form  style="align-items: flex-cenet;" class="shadow p-3 mb-5 bg-body rounded col-md-7" method="POST" action="">

    <legend>Create Instance</legend>
    
    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="">Name of Instance</label>
        <input type="text" class="form-control" id="inputCity" name="name" required autofocus placeholder="Name of Instance">
      </div>
      <div class="form-group col-md-7">
        <label for="">Amazon Machine Images</label>
        <select id="os" name="os" class="form-control" required>
          <option selected>Choose...</option>
          <option value="ami-0c0871911c8f48393">Windows Server 2022</option>
          <option value="ami-051f0947e420652a9">Red Hat</option>
          <option value="ami-0024cc9cb42261ace">Debian</option>
          <option value="ami-01ae98b95555d6f5d">SUSE Linux</option>
          <option value="ami-07651f0c4c315a529">Ubuntu</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      
      <div class="form-group col-md-6">
        <label for="">Instance Type</label>&nbsp;&nbsp;<a href="https://aws.amazon.com/ec2/instance-types/" target="_blank">Info instance types</a>
        <select id="os" name="type" class="form-control" required>
          <option selected>Choose...</option>
          <option value="t1.micro">t1.micro</option>
          <option value="t2.nano">t2.nano</option>
          <option value="t2.micro">t2.micro</option>
          <option value="t2.small">t2.small</option>
          <option value="t2.medium">t2.medium</option>
          <option value="t2.large">t2.large</option>
          <option value="t2.xlarge">t2.xlarge</option>
          <option value="t2.2xlarge">t2.2xlarge</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="">Zone</label>
        <select id="zone" name="zone" class="form-control" required>
          <option selected>Choose...</option>
          <option value="ap-southeast-1a">ap-southeast-1a</option>
          <option value="ap-southeast-1b">ap-southeast-1b</option>
          <option value="ap-southeast-1c">ap-southeast-1c</option>
        </select>
      </div>
    </div>
   

    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="">Number of instance</label>
        <input type="number" class="form-control" id="num" min="1" max="10" name="num" required>
      </div>
      <div class="form-group col-md-7">
        <label for="inputState">Key pair</label>
        <select id="os" name="keypair" class="form-control" required>
          <option selected>Choose...</option>
          <option value="windows_server">Windows Server Key</option>
          <option value="red_hat">Red Hat Key</option>
          <option value="debian">Debian Key</option>
          <option value="suse_linux">SUSE Linux Key</option>
          <option value="ubuntu">Ubuntu Key</option>

        </select>
      </div>
    </div>

    <div class="col-sm-3" ><label>Security Groups :</label></div>
    <div class="col-sm-9">  
        <input class="form-check-input" type="checkbox" id="" name="" value="">
        <label class="form-check-label" for="gridCheck1">
          SSH
        </label>
        
     
        <input class="form-check-input" type="checkbox" id="" name="" value="">
        <label class="form-check-label" for="gridCheck1">
          FTP
        </label>
      
  
        <input class="form-check-input" type="checkbox" id="" name="" value="">
        <label class="form-check-label" for="gridCheck1">
          HTTP
        </label>
      
  
        <input class="form-check-input" type="checkbox" id="" name="" value="">
        <label class="form-check-label" for="gridCheck1">
          HTTPS
        </label>
        
       
        
      </div>
   
    <button type="submit" class="btn btn-primary " style="margin-top: 20px;margin-left: 20px;" name="Submit">Submit</button>
    </div>
   
</form>
</div>
</div>

<?php
  if (isset($_POST['Submit'])){
    
            include("Database.php");
            $sql =  "insert into ec2(Image_ID,Instance_Name,Server_Zone,KeyPairName,Instance_type,num,user_id) 
            values('{$_POST['os']}','{$_POST['name']}'
            ,'{$_POST['zone']}','{$_POST['keypair']}','{$_POST['type']}','{$_POST['num']}','{$_COOKIE['auth_user_id']}')";
            mysqli_query($link,$sql) or die ("insert ไม่ได้");

            echo "<script>";
            echo "alert('บันทึกข้อมูลสำเร็จ');";
            echo "</script>";

            mysqli_close($link);
    
}

?>



<footer>
<div class="mt-5 p-4 text-white text-center" style="background-color:#FD841F;">
  <p>By Satapana Singsom</a></p>
</div>
</footer>



</body>
</html>



