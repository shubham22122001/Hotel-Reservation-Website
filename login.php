<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_reg";

$con = mysqli_connect($servername, $username, $password, $dbname);

session_start();
if (isset($_POST['Submit'])) {
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    $epassword = md5($password);
    $query = "SELECT * FROM regis WHERE Email='$email' AND Password='$epassword' ";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['email'] = $email;

        header("Location: homepage (1).html");
    } else {
        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.html'>Login</a> again.</p>
                  </div>";
    }
} else {
?>
    <div>
        <img src="userlogo.jpg" class="quote">
        <h1> Donator Login </h1>
    </div>
<?php } ?>