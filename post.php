<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submita'])) 
{
   
   $vemail = $_POST["email"];
   $vex_no = $_POST["no"];
   $vtexta =  $_POST["texta"];

   $sql = "INSERT INTO form (email, ex_no,texta)
   VALUES ('$vemail', '$vex_no', '$vtexta')";
   
   if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }

}


$conn->close();

header("Location:index.php");
exit();
?>
  

