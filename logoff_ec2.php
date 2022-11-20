

<?php
    
    setcookie("auth_id","");
    setcookie("auth_username","");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Logoff</title>
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


<div class="modal modal-sheet position-static d-block py-5" tabindex="-1" role="dialog" id="modalSheet">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title fontfam">ออกจากระบบแล้ว</h5>
      </div>
      <div class="modal-body py-1 fontfam" style="text-align:center;">
        <p>คุณได้ทำการออกจากระบบแล้ว <br>
        หากต้องการเข้าใช้งานโปรดคลิกปุ่ม "กลับสู่หน้าหลัก"</p>
        <img src="img/aws_logo.png" alt="">
      <div class="modal-footer flex-column border-top-0">
        <a href="index.php"><button type="button" class="btn btn-sm btn-primary w-100 mx-0 mb-2 fontfam5">กลับสู่หน้าหลัก</button></a>
      </div>
    </div>
  </div>
</div>







</body>
</html>
<?php

