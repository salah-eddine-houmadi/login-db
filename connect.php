<?php 

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (isset($username)){
if (isset($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login3";

$conn = new mysqli ($host, $dbusername,$dbpassword,$dbname);

if (mysqli_connect_error()){
	die('Connect Error ('. mysql_connect_errno().')'
		. mysqli_connect_error());
}
else{
	$sql = "INSERT INTO login (username,password) values ('$username','$password')";
	if ($conn->query($sql)){
		echo "New record is onserted sucessfully";
	}
	else{
		echo "Error: " .$sql . "<br>". $conn->error;
	}
	$conn->close();

}
}
else{
	echo "password should not be empty";
	die();
}
 }
 else{
 	echo "username should not be empty";
 	die();
 }


?>