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


$refer_id = $_POST['refer_id'];
$name = $_POST['name'];
$address = $_POST['address'];
$contact_number = $_POST['contact_number'];

$sql = "INSERT INTO donor_referral(refer_id, name,address,contact_number)
VALUES ('$refer_id','$name','$address','$contact_number')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>