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

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM reg WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }
if (count($errors) === 0) {
$sql = "INSERT INTO reg (firstname, lastname, email, password, phone)
VALUES ('$fname','$lname','$email','$pass','$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}else {
            echo "Database error: Could not register user";
        }

$conn->close();
?>
