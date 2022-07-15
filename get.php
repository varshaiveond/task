<?php
session_start();
include 'connection.php';

if (isset($_POST['submit'])) 
{
   
   $usermail = $_POST["usermail"];
   $passcode = $_POST["passcode"];

 $sql = "SELECT `usermail` FROM login_cred WHERE `usermail` = '$usermail' and `passcode` = '$passcode' ";
 $result = $conn->query($sql);
 if($result->num_rows == 1){
    //session_register("usermail");
    $_SESSION['login_user'] = $usermail;
    
    header("location: table.php");
 }else {
    $error = "Your Login Name or Password is invalid";

 }
}