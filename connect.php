<?php

if(isset($_POST['userName']))

$con = mysqli_connect('localhost','root',
       '','day1');

       $userName = $_POST['userName'];
       $password = $_POST['password'];
       $email = $_POST['email'];
       $number = $_POST['number'];
       $messageBox = $_POST['messageBox'];

       $sql = "INSERT INTO `register`
       (`Username`, `Password`, `Email`, `Number`, `Message Box`, `id`)
       VALUES ('$userName', '$password', '$email', '$number', '$messageBox', '0')";

         $rs = mysqli_query($con, $sql);

      if($rs)
      {
      	echo "Register information taken in";
      }

      else
      {
      	echo "Are you a bot?";

      }
      ?>
