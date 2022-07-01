<!DOCTYPE html>
<html>
  <body style=" background-color: #32324b; color: white;font-size: 42px;margin-top: 200px; margin-left:210px ; background-image: url(login-img1.jpg);">

<?php
require_once ("db1.php");
//require_once ("component.php");

$conn = Createdb();
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$firstName=$_REQUEST['firstName'];
$lastName=$_REQUEST['lastName'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone_no'];
$dateoj=date('Y-m-d');
$sql = "INSERT INTO customers (dateoj,firstName,lastName,email,phone)
VALUES ('$dateoj', '$firstName', '$lastName','$email','$phone')";

if (mysqli_query($conn, $sql)) {
  $lastid = mysqli_insert_id($conn);
  echo "<p style= 'color: white; background-color:black;margin-right: 41px;text-align: center;border-radius: 36px; margin-left: -85px;text-shadow: 139 134 pink;'>New Customer Added successfully and his id is  $lastid</p>";
} else {
  echo "<p style= 'color: white; background-color:black;margin-right: 41px;text-align: center;border-radius: 36px; margin-left: -85px;text-shadow: 139 134 pink;'>Error: Given Credentials Already Exists in the Database So cannot insert into DATABASE.</p>";
}

mysqli_close($conn);
?>
</body>
</html>
