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

$donor_id = $_GET['rn'];

$sql = "DELETE FROM donor WHERE donor_id='$donor_id'";

if ($conn->query($sql) === TRUE) {
  echo "<html> <body> <center>Record deleted successfully  </center></body> </html>";

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>