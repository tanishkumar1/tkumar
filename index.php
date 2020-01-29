<?php
$servername = "35.222.71.185";
$username = "newuser";
$password = "Tanish@123";
$dbname="dbs";

  $email = $_POST["username"];
  $pass=$_POST["pass"];


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
echo "Hello";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    //$result1 = mysql_query($conn,"SELECT password FROM reg WHERE email = '"$email"'");
   // $result2 = mysql_query($conn,"SELECT email FROM reg WHERE password = '".$pass."'");

          //  if($email == $result2 && $pass == $result1) 
        //    { 
          //      echo "login successful";
          //  }
          //  else
          //  {
                echo'The username or password are incorrect!';
           // }

$conn->close();
?>
