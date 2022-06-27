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


$acceptor_id = $_POST['acceptor_id'];
$name = $_POST['name'];
$blood_group = $_POST['blood_group'];
$age = $_POST['age'];
$address = $_POST['address'];
$contact_number = $_POST['contact_number'];

$sql = "INSERT INTO acceptor (acceptor_id, name, blood_group, age,address,contact_number)
VALUES ('$acceptor_id','$name','$blood_group','$age','$address','$contact_number')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>