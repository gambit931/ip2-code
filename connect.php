<?php

if(isset($_POST['firstName'])


$con = mysqli_connect('localhost', 'root', '','db_contact');


  $firstName = filter_input(INPUT_POST, 'firstName');
  $password = filter_input(INPUT_POST, 'password');
  $email = filter_input(INPUT_POST, 'email');
  $number = filter_input(INPUT_POST, 'number');



  if (!empty($firstName)) {
	  if (!empty($password)) {
		  if (!empty($email)) {
			  if (!empty($number)) {

			  
		  
		  $host = "localhost";
		  $dbfirstName = "root";
		  $dbpassword = "";
		  $dbemail = "";
		  $dbnumber = "";
		  $dbname = "form2";


		  $conn = new mysqli ($host, $dbfirstName, $dbpassword, $dbemail, $dbnumber, $dbname);

			  }
			}
		}
	}


		  if (mysqli_connect_error()) {
			  die('Connect Error ( '.
			  					mysqli_connect_errno().')' . 
								mysqli_connect_error());

		  }
		  else {
			  $sql = "INSERT INTO form(firstName, password, email, number) values ('$firstName', '$password', '$email', '$number')";
			  if ($conn->query($sql)) {
				  echo "New record is inserted successfully";
			  }
			  else {
				  echo "Error: ". $sql . "<br>". $conn->error;
			  }

			  }
			  $conn->close();
	


 ?>