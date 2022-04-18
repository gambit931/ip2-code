<?php

$con = mysqli_connect("localhost","root",
       "","day1");

       $userName = $_POST['userName'];
       $password = $_POST['password'];
       $email = $_POST['email'];
       $number = $_POST['number'];
       $messageBox = $_POST['messageBox'];

       $sql = "INSERT INTO `register`
       (`Username`, `Password`, `Email`, `Number`, `Message Box`, `id`)
       VALUES ('$userName', '$password', '$email', '$number', '$messageBox', '0')";

          if (mysqli_connect_error()) {
             die('Connect Error ( '.
                          mysqli_connect_errno().')' .
                          mysqli_connect_error());

          }
          else {
             if ($conn->query($sql)) {
                echo "New record is inserted successfully";
             }
             else {
                echo "Error: ". $sql . "<br>". $conn->error;
             }

             }
             $conn->close();



   ?>
