<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_con";

$con = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['Submit'])) {
    $fname = mysqli_real_escape_string($con, $_POST['firstname']);;
    $lname =  mysqli_real_escape_string($con, $_POST['lastname']);;
    $city =  mysqli_real_escape_string($con, $_POST['mycity']);;
    $rating = intval( $_POST['rate']);
    $opinion =  mysqli_real_escape_string($con, $_POST['subject']);;
    $result = mysqli_query($con, "INSERT INTO contact  VALUES ('$fname', '$lname', '$city', '$rating', '$opinion')"); 
    echo "<font color='green'>Registered";
  
}