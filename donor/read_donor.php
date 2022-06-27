
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

$sql = "SELECT * FROM donor";
$result = $conn->query($sql);

$conn->close();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>donor List</title>
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
          <!--  --------------->
          <h2 class="text-center mt-5 mb-3">Donor Details</h2>
          
          <div class="container-fluid">
            <table class="table table-bordered donor-table">
                <thead>
                  <tr>
                    <th scope="col">Donor ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Age</th>
                    <th scope="col">Last Donated</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Acceptor ID</th>
                    <th scope="col">Refer ID</th>

                  </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo '<tr>';
                          echo '<td>'.$row['donor_id'].'</td>';
                          echo '<td>'.$row['name'].'</td>';
                          echo '<td>'.$row['blood_group'].'</td>';
                          echo '<td>'.$row['age'].'</td>';
                          echo '<td>'.$row['last_donated'].'</td>';
                          echo '<td>'.$row['address'].'</td>';
                          echo '<td>'.$row['contact_number'].'</td>';
                          echo '<td>'.$row['acceptor_id'].'</td>';
                          echo '<td>'.$row['refer_id'].'</td>';
                          echo '</tr>';
                        }
                           
                      } else {
                        echo "0 results";
                      }
    
    
    
                    ?>
                </tbody>
            </table>
            </div>
          
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>