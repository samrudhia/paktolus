<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "frontform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO register (fname, mname, lname, address, state, city, zipcode, unit, birthdate, mobileno, email)
VALUES ('".$_POST['fname']."', '".$_POST['mname']."', '".$_POST['lname']."', '".$_POST['address']."', '".$_POST['state']."', '".$_POST['city']."', '".$_POST['zipcode']."', '".$_POST['unit']."', '".$_POST['birthday']."', '".$_POST['phone_number']."', '".$_POST['email_id']."')";

if (mysqli_query($conn, $sql)) {
  header("Location: http://localhost/paktolus/thank-you?quote_premium='".$_POST['quote_premium']."'");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  
}
mysqli_close($conn);



?>

