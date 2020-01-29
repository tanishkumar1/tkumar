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


   $select1 = "SELECT password FROM reg WHERE email = '".$email."'";

        $result1=$conn->query($select1);
        $row1=$result1->fetch_assoc();

        $select2 = "SELECT email FROM reg WHERE password = '".$pass."'";

        $result2=$conn->query($select2);
        $row2=$result2->fetch_assoc();

           if($email == $row2["email"] && $pass == $row1["password"])  
             { 
                echo "login successful";
            }
            else
           {
                echo'The username or password are incorrect!';
            }

$conn->close();
?>
