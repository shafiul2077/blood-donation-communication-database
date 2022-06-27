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
if (isset($_GET['donor_id'])) {
  $donor_id = $_GET['donor_id'];
} 
 $name=$_GET['name'];
 $blood_group = $_GET['blood_group'];
 $age = $_GET['age'];
 $last_donated = $_GET['last_donated'];
 $address = $_GET['address'];
 $contact_number = $_GET['contact_number'];
 $acceptor_id = $_GET['acceptor_id'];
 $refer_id = $_GET['refer_id'];

?>


<!DOCTYPE html>
<html>
<head>
<title>Update Donor</title>
</head>
<body>
  <center>
  <h2>Update Donor</h2>

<form action="" method="get">
   

    <br>Name<br>         
    <input type="text" name="name"          value="<?php echo $name; ?>">

    <div class="form-group">
        <label class="form-label col-md-4">Blood Group</label>
        <div class="col-md-8">
            <select name="blood_group"  class="form-control">
            <option value="<?php echo $blood_group ;?>"><?php echo $blood_group;?></option>
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

    <br>Last Donated<br> 
    <input type="text" name="last_donated"  value="<?php echo $last_donated; ?>">

    <br>Address<br>      
    <input type="text" name="address"       value="<?php echo $address; ?>">

    <br>Contact Number<br>      
    <input type="text" name="contact_number" value="<?php echo $contact_number; ?>">

    <br>Acceptor Id<br>      
    <input type="text" name="acceptor_id"   value="<?php echo $acceptor_id; ?>">

    <br>Refer Id<br>      
    <input type="text" name="refer_id"      value="<?php echo $refer_id; ?>">

    <br><input type="hidden" name="donor_id"           value="<?php echo $donor_id; ?>">
    <br><br> 
    <input type="submit"   name="submit"                 value="UPDATE">

</form>
<br><br><a href="http://localhost/blood_donation_communication_database/admin_view/admin_read_donor.php" > back </a>
</center>

</body>
</html>


<?php



if(isset($_GET['submit']))
{
  

  if (isset($_GET['donor_id'])) {
    $donor_id = $_GET['donor_id'];
  }
  $name=$_GET['name'];
  $blood_group = $_GET['blood_group'];
  $age = $_GET['age'];
  $last_donated = $_GET['last_donated'];
  $address = $_GET['address'];
  $contact_number = $_GET['contact_number'];
  $acceptor_id = $_GET['acceptor_id'];
  $refer_id = $_GET['refer_id'];

  $sql = "UPDATE donor SET name= '$name', blood_group='$blood_group',age='$age', last_donated='$last_donated', address='$address', contact_number='$contact_number',acceptor_id='$acceptor_id',refer_id='$refer_id' WHERE donor_id= '$donor_id'";

if ($conn->query($sql) === TRUE) {
echo "<html> <body> <center>Record updated successfully</center></body> </html>";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
    


?>