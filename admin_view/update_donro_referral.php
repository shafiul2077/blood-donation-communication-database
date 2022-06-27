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
if (isset($_GET['refer_id'])) {
  $refer_id = $_GET['refer_id'];
}
 $name=$_GET['name'];
 $address = $_GET['address'];
 $contact_number = $_GET['contact_number'];
?>


<!DOCTYPE html>
<html>
<head>
<title>Update Donor Referral</title>
</head>
<body>
  <center>
  <h2>Update Donor Referral</h2>

<form action="" method="get">
   

    <br>Name<br>         
    <input type="text" name="name"          value="<?php echo $name; ?>">


    <br>Address<br>      
    <input type="text" name="address"       value="<?php echo $address; ?>">

    <br>Contact Number<br>      
    <input type="text" name="contact_number" value="<?php echo $contact_number; ?>">

    <br><input type="hidden" name="refer_id"           value="<?php echo $refer_id; ?>">
    <br><br> 
    <input type="submit"   name="submit"                 value="UPDATE">

</form>
<br></br><a href="http://localhost/blood_donation_communication_database/admin_view/admin_read_donor_referral.php" > back </a>
</center>

</body>
</html>
<?php

if(isset($_GET['submit']))
{
  if (isset($_GET['refer_id'])) {
    $donor_id = $_GET['refer_id'];
  }

    $name=$_GET['name'];
    $address = $_GET['address'];
    $contact_number = $_GET['contact_number'];

    $sql = "UPDATE donor_referral SET name= '$name', address='$address', contact_number='$contact_number' WHERE refer_id= '$refer_id'";

if ($conn->query($sql) === TRUE) {
  echo "<html> <body> <center>Record updated successfully</center></body> </html>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

    
}

?>