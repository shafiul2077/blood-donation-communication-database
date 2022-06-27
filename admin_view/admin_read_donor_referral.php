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

$sql = "SELECT * FROM donor_referral";
$result = $conn->query($sql);

$conn->close();
?>


<html>
<head>
<title>Donor Referral</title>
<center>
<h2>Donor Referral</h2>
</head>
<body>
    <table border=1>
            <thead>
                <tr>

                    <th>Refer Id </th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>
            </thead>

            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo '<tr>';
                      echo '<td>'.$row['refer_id'].'</td>';
                      echo '<td>'.$row['name'].'</td>';
                      echo '<td>'.$row['address'].'</td>';
                      echo '<td>'.$row['contact_number'].'</td>';
                      echo "<td><a href='update_donro_referral.php?refer_id=$row[refer_id] & name=$row[name] & address=$row[address] &contact_number=$row[contact_number]'>Update</td>";
                      echo "<td><a href='delete_donor_referral.php?rn=$row[refer_id]'>Delete</td>";
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