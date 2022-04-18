<?php

$con = mysqli_connect("localhost","root",
       "","register");
       $userName = $_POST['userName'];
       $password = $_POST['password']
       $email = $_POST['email'];
       $number = $_POST['phone'];
       $messageBox = $_POST['messageBox'];
       $sql = "INSERT INTO `register`
       (`Username`, `Password`, `Email`, `Number`, `Message Box`, `id`)
       VALUES ('$userName', '$password', '$email', '$number', '$messageBox', '0');"
       $rs = mysqli_query($con, $sql);
       if($rs)
       {
       	echo "Contact Records Inserted";
       }

       ?>