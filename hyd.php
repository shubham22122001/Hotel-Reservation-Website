<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Form</title>



  <link rel="stylesheet" href="form_ang.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>

<body class="body">
  <nav class="navbar navbar-expand-lg navbar-dark px-3 py-2 m-2">
    <a class="navbar-brand" href="homepage (1).html">Happy Stay</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="homepage (1).html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form2.html">Contact Us</a>
        </li>

        <li class="nav-item">
          <a href="form_angular.html" class="nav-link">Register
          </a>
        </li>
        <li class="nav-item">
          <a href="login.html" class="nav-link">Login
          </a>
        </li>


      </ul>



      <form class="form-inline my-2 my-lg-0 mx-2">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-default n-button my-2 my-sm-0" type="submit">Hotel Search</button>
      </form>
  </nav>
  <h1 class="head1">Booking For Ooty Hotels</h1>
  <div ng-app="myApp" ng-controller="myCtrl">

    <form action="" id="form" method="POST" name="myForm" onsubmit="return validateForm()">

      <label><b>First name:</b></label><br>
      <input type="text" name="fname" class="name" autofocus size="25" ng-model="fname"><br>

      <label><b>Last name:</b></label><br>
      <input type="text" name="lname" class="name" autofocus size="25" ng-model="lname"> <br><br>

      <div>

        <label for="email"><b>Enter your email:</b></label>
        <input type="email" class="email" name="email" placeholder="abc@gmail.com" autocomplete="on" size="25" required
          ng-model="email"><br>
        
      </div>
      <div>
      <label for="city"><b>Adults:</b></label>
      <select name="adult" id="city" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>

      </select> <br>
 


      </div>

      <label for="city"><b> City:</b></label>
      
      <select name="mycity" id="city" required>
        <option value="Hyderabad">Hyderabad</option>
      

      </select> <br>
      <div class="select">
      <label for="hotel"><b>City:</b></label>
      <select name="hotel" id="room" required>
        <option value="0">Select</option>
        <option value="ITC Kohenur, a Luxury Collection Hotel">ITC Kohenur, a Luxury Collection Hotel</option>
        <option value="Radisson Blu Plaza Hotel">Radisson Blu Plaza Hotel</option>
        <option value="The Park Hyderabad">The Park Hyderabad</option>
        <option value="Novotel Hyderabad Convention Centret">Novotel Hyderabad Convention Centret</option>
        <option value="Hyatt Place Hyderabad Banjara Hills">Hyatt Place Hyderabad Banjara Hills</option>
        <option value="Park Hyatt Hotel and Residences">Park Hyatt Hotel and Residences</option>
        <option value=" ITC Kakatiya, a Luxury Collection Hotel"> ITC Kakatiya, a Luxury Collection Hotel</option>
        <option value="Taj Deccan"> Taj Deccan</option>

      </select>
    </div>
      <div class="select">
      <label for="city"><b>Children:</b></label>
      <select name="children" id="children" required>
        <option value="0">0</option>

        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br>
    </div>
    <div class="select">
      <label for="city"><b>Room:</b></label>
      <select name="city" id="room" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>

      </select>
    </div>

      <div>

        <label for="pnumber"><b>Phone Number:</b> </label>
        <input type="text" name="p_number" autofocus placeholder="9999999999" maxlength="11" ng-model="phone"> <br>
      </div>
      <div class="select">
      <label for="datemin"><b>Check In:</b></label>
      <input type="date" id="datemin" name="datemin"  required><br>
    </div>
    <div class="select">
      <label for="datemin"><b>Check Out:</b></label>
      <input type="date" id="datemin" name="datemax" required><br><br>
    </div>

        <input type="submit" id="submit" value="BOOK" name="Submit"/>
        <input type="reset" id="reset" value="Reset" />

      </div>
  
      <!-- <p class="link"><a href="login.html">Click to Login</a></p> -->



    </form>
    
  </div>

  <div id="footer">
    <div id="flex-left">
      <a href="homepage.html">Happy Stay</a>
      <ul>
        <li>
          <a href="#" class="link">Facebook</a>

        </li>
        <li>
          <a href="" class="link">Instagram</a>
        </li>
      </ul>
    </div>
    <div id="flex-middle">
      <p>For any query to can contact us via happystaybyshubh@gmail.com</p>
    </div>
    <div id="flex-right">
      <p>We hope you like our service<br>Delighted to get you on board with us-Happy Stay </p>
    </div>
  </div>

  <script>
    
    function validateForm() {

      var x = document.forms["myForm"]["fname"].value;
      if (x == "") {
        alert("First Name must not be empty");
        return false;
      }
      var regex = /^[a-zA-Z]*$/;
      if (!regex.test(x)) {

        alert("First Name must be only string");
        return false;
      }
      var y = document.forms["myForm"]["lname"].value;
      if (y == "") {
        alert("Last Name must not be empty");
        return false;
      }
      var regex = /^[a-zA-Z]*$/;
      if (!regex.test(y)) {

        alert("Last Name must be only string");
        return false;
      }


      var city = document.myForm.mycity.value;
      if (city == " ") {
        alert("Choose City !")
        return false;
      }
      var phone = document.forms["myForm"]["p_number"].value;
      if (phone == "") {
        alert("phone no. must not be empty");

      }
    }

  </script>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_book";

$con = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['Submit'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);;
    $lname =  mysqli_real_escape_string($con, $_POST['lname']);;
    $email =  mysqli_real_escape_string($con, $_POST['email']);;
    $adult=mysqli_real_escape_string($con, $_POST['adult']);;
    $children=mysqli_real_escape_string($con, $_POST['children']);;
    $city =  mysqli_real_escape_string($con, $_POST['mycity']);;
    $hotel= mysqli_real_escape_string($con, $_POST['hotel']);;
    $p_number = intval($_POST['p_number']);
    $indate =  mysqli_real_escape_string($con, $_POST['datemin']);;
    $outdate =  mysqli_real_escape_string($con, $_POST['datemax']);;

   
    $result = mysqli_query($con, "INSERT INTO hyd  VALUES ('$fname', '$lname', '$email','$adult','$children', '$city','$hotel',$p_number,'$indate','$outdate')");
    echo "<font color='red'>Booked";
}
?>
</body>

</html>


<!-- 
CREATE TABLE mum (
    FirstName varchar(25),
    LastName varchar(25),
    Email varchar(25),
    Adult varchar(25),
    Children varchar(25),
    City varchar(25),
    Hotel varchar(25),
    Phone BIGINT(11),
    Checkin varchar(25),
    Checkout varchar(25)
    
    
    
); -->