<?php
$servername = "35.222.71.185:3306";
$username = "newuser";
$dbpass = "Tanish@123";
$dbname="dbs";

  $email = $_POST["username"];
  $pass=$_POST["pass"];


// Create connection
$conn = new mysqli($servername, $username, $dbpass,$dbname);
echo "Hello";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO reg_1 (email,pass)
VALUES ('$email','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
