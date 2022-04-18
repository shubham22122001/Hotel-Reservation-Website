<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_reg";

$con = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['Submit'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);;
    $lname =  mysqli_real_escape_string($con, $_POST['lname']);;
    $email =  mysqli_real_escape_string($con, $_POST['email']);;
    $cemail =  mysqli_real_escape_string($con, $_POST['cemail']);;
    $city =  mysqli_real_escape_string($con, $_POST['mycity']);;
    $p_number = intval($_POST['p_number']);
    $date =  mysqli_real_escape_string($con, $_POST['date']);;
    $password = stripslashes($_POST['pass']);
    $password = mysqli_real_escape_string($con,$password);

    $sql = "SELECT * FROM regis WHERE Email='$email' LIMIT 1";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "Email already exists";
        echo "<font color='green'>Email already exists";
        
    }
    if (count($errors) === 0){
        $epass = md5($password);;
        $result = mysqli_query($con, "INSERT INTO regis  VALUES ('$fname', '$lname', '$email', '$cemail','$epass', '$city',$p_number,'$date')");
        echo "<font color='green'>Registered";

    }

 



   
}
