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
if (isset($_GET['acceptor_id'])) {
  $acceptor_id = $_GET['acceptor_id'];
}
 $name=$_GET['name'];
 $blood_group = $_GET['blood_group'];
 $age = $_GET['age'];
 $address = $_GET['address'];
 $contact_number = $_GET['contact_number'];
?>


<!DOCTYPE html>
<html>
<head>
<title>Update Acceptor</title>
</head>
<body>
  <center>
  <h2>Update Acceptor</h2>

<form action="" method="get">
   

    <br>Name<br>         
    <input type="text" name="name"          value="<?php echo $name; ?>">

    <div class="form-group">
        <label class="form-label col-md-4">Blood Group</label>
        <div class="col-md-8">
            <select name="blood_group"  class="form-control">
            <option value="<?php echo $blood_group; ?>"><?php echo $blood_group; ?></option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
        </div>
    </div>
    
    <br>Age<br>          
    <input type="text" name="age"           value="<?php echo $age; ?>">


    <br>Address<br>      
    <input type="text" name="address"       value="<?php echo $address; ?>">

    <br>Contact Number<br>      
    <input type="text" name="contact_number" value="<?php echo $contact_number; ?>">
     
    <br><input type="hidden" name="acceptor_id"           value="<?php echo $acceptor_id; ?>">

    <br><br> 
    <input type="submit"   name="submit"                 value="UPDATE">

</form>
<br></br><a href="http://localhost/blood_donation_communication_database/admin_view/admin_read_acceptor.php" > back </a>
</center>

</body>
</html>
<?php

if(isset($_GET['submit']))
{
  if (isset($_GET['acceptor_id'])) {
    $acceptor_id = $_GET['acceptor_id'];
  }
    
    $name=$_GET['name'];
    $blood_group = $_GET['blood_group'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $contact_number = $_GET['contact_number'];

    $sql = "UPDATE acceptor SET name= '$name', blood_group='$blood_group',age='$age', address='$address', contact_number='$contact_number' WHERE acceptor_id= '$acceptor_id'";

if ($conn->query($sql) === TRUE) {
  echo "<html> <body> <center>Record updated successfully</center></body> </html>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

    
}

?>