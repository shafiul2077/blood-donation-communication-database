<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>donate</title>
  </head>
  <body>
    <div class="wrapper">
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand" href="#">
                <img src="" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/blood_donation_communication_database/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/blood_donation_communication_database/donor/donor.php">Donate Blood</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/blood_donation_communication_database/acceptor/acceptor.html">Need Blood</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/blood_donation_communication_database/donor/read_donor.php">Donor Details</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/blood_donation_communication_database/acceptor/read_acceptor.php">Acceptor Details</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/blood_donation_communication_database/donor_referral/read_donor_referral.php">Donor Referral Details</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/blood_donation_communication_database/complain/complain.html">Complain</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/blood_donation_communication_database/admin/login.php">Admin-Panel</a>
                  </li>      
              </ul>
            </div>  
          </nav>
          <!-- donor form --------------->
          <h2 class="text-center mt-5 mb-3">JOIN US</h2>
          <div class="container donor-form ">
                <!-- ------- -->
                <form action="" method="post">
                    <div class="form-group">
                      <label class="one" for="exampleFormControlInput1">Name</label>
                      <input type="text" name="name" class="form-control-lg" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label class="two"  for="exampleFormControlSelect1">Blood Group</label>
                      <select name="blood_group" class="form-control-lg" id="exampleFormControlSelect1">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label class="three" for="exampleFormControlInput1">Age</label>
                        <input type="text" name="age" class="form-control-lg" id="exampleFormControlInput1" placeholder="Enter age">
                      </div>
                      <div class="form-group">
                        <label class="four" for="exampleFormControlInput1">Last Donated</label>
                        <input type="date" name="last_donated" class="form-control-lg" id="exampleFormControlInput1" placeholder="1/1/2021">
                      </div>
                      <div class="form-group">
                        <label class="five" for="exampleFormControlInput1">Address</label>
                        <input type="text" name="address"  class="form-control-lg" id="exampleFormControlInput1" placeholder="Enter your address">
                      </div>
                      <div class="form-group">
                        <label class="six" for="exampleFormControlInput1">Contact Number</label>
                        <input type="text" name="contact_number" class="form-control-lg" id="exampleFormControlInput1" placeholder="Phone no.">
                      </div>
                      <div class="form-group">
                        <label class="seven" for="exampleFormControlInput1">Acceptor ID</label>
                        <input type="text" name="acceptor_id" class="form-control-lg" id="exampleFormControlInput1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label class="eight" for="exampleFormControlInput1">Refer ID</label>
                        <input type="text"  name="refer_id" class="form-control-lg" id="exampleFormControlInput1" placeholder="">
                      </div>

                      <div class="submit-button">
                        <input class="btn btn-danger" type="submit" value="Submit" role="button">
                        </div>
                       


                   
                  </form>

                  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation_communication_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$name = $_POST['name'];
$blood_group = $_POST['blood_group'];
$age = $_POST['age'];
$last_donated = $_POST['last_donated'];
$address = $_POST['address'];
$contact_number = $_POST['contact_number'];
$acceptor_id = $_POST['acceptor_id'];
$refer_id = $_POST['refer_id'];

$sql = "INSERT INTO donor ( name, blood_group, age, last_donated, address,contact_number,acceptor_id,refer_id)
VALUES ('$name','$blood_group','$age','$last_donated','$address','$contact_number','$acceptor_id','$refer_id')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
          </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>