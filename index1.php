<?php
$servername = "35.222.71.185";
$username = "newuser";
$password = "Tanish@123";
$dbname="dbs";

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["em"];
  $pass = $_POST["pass1"];
  $phone= $_POST["phone"];


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
echo "Hello";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO reg (firstname, lastname, email, password, phone)
VALUES ('$fname','$lname','$email','$pass','$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>