<?php
$userName = filter_input(INPUT_POST, 'userName');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
$number = filter_input(INPUT_POST, 'number');
$messageBox = filter_input(INPUT_POST, 'messageBox');

if (!empty($username)){
if (!empty($password)){
if (!empty($email)){
if (!empty($number)){
if (!empty($messageBox)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "day1";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register (Username, Password, Email, Number, Message Box, id)
values ('$userName','$password','$email','$number','$messageBox','0')";
if ($conn->query($sql)){
echo "New registration has been sucessfully entered";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Username should not be empty";
die();
}
}
else{
echo "Password should not be empty";
die();
}
else{
echo "Email should not be empty";
die();
}
else{
echo "Number should not be empty";
die();
}
else{
echo "Message should not be empty";
die();
}

?>