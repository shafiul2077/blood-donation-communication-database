
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


<html>
<head>
<title>Donor</title>
</head>
<center>

<h2>Donor</h2>
<body>
    <table border=1>
            <thead>
                <tr>

                    <th>Donor Id</th>
                    <th>Name</th>
                    <th>Blood Group</th>
                    <th>Age</th>
                    <th>Last Donated</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Acceptor Id</th>
                    <th>Refer Id</th>
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
                      echo '<td>'.$row['donor_id'].'</td>';
                      echo '<td>'.$row['name'].'</td>';
                      echo '<td>'.$row['blood_group'].'</td>';
                      echo '<td>'.$row['age'].'</td>';
                      echo '<td>'.$row['last_donated'].'</td>';
                      echo '<td>'.$row['address'].'</td>';
                      echo '<td>'.$row['contact_number'].'</td>';
                      echo '<td>'.$row['acceptor_id'].'</td>';
                      echo '<td>'.$row['refer_id'].'</td>';
                      echo "<td><a href='update_donor.php?donor_id=$row[donor_id] & name=$row[name] & blood_group=$row[blood_group] & age=$row[age] & last_donated=$row[last_donated] & address=$row[address] &contact_number=$row[contact_number] & acceptor_id=$row[acceptor_id] & refer_id=$row[refer_id]'>Update</td>";
                      echo "<td><a href='delete_donor.php?rn=$row[donor_id]'>Delete</td>";
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