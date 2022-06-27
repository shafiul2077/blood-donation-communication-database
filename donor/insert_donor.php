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