<?php
$conn = mysqli_connect("localhost", "username", "password", "location_storage");
// Check connection
//php script ends at conn-connect error
//what the fuck why is this being read as an xml file stupid fucking code piece of shit software god i hate webdev so much
if ($conn ->connect_error) {
die("Connection failed: " . $conn ->connect_error);
}

$Name=$_POST['name'];
$PUAdd=$_POST['PUaddress'];
$DDAdd=$_POST['DDaddress'];
$tracking=$_POST['bruh'];


$sql = "INSERT INTO location (id, name, startloc, endloc, tracking) VALUES ('$Name','$PUAdd','$DDAdd','$tracking')";
mysqli_query($conn, $sql);

header('Location: services.php');
?>
