<?php
    $link = mysqli_connect("localhost","root","","uipath_aws");

    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
      }
      //echo "Connected successfully";

?>