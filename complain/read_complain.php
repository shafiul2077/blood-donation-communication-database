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

$sql = "SELECT * FROM complain";
$result = $conn->query($sql);

$conn->close();
?>


<html>
<head>
<title>Complain Details</title>
</head>
<center>
<h2>Complain Details</h2>
<body>
    <table border=1>
            <thead>
                <tr>

                    <th>Id </th>
                    <th>Email</th>
                    <th>Froms</th>


                </tr>
            </thead>

            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo '<tr>';
                      echo '<td>'.$row['id'].'</td>';
                      echo '<td>'.$row['email'].'</td>';
                      echo '<td>'.$row['forms'].'</td>';

                      echo '</tr>';
                    }
                       
                  } else {
                    echo "0 results";
                  }



                ?>
            </tbody>
    </table>
    <br></br><a href="http://localhost/blood_donation_communication_database/admin/welcome.php" > back </a>
                </center>


</body>
</html>