<?php
	$firstName = $_POST['firstName']; 
	#$lastName = $_POST['lastName'];
	#$gender = $_POST['gender'];
	#$email = $_POST['email'];
	$password = $_POST['password'];
	#$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','amrut');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into data(date, a1,a2,a3,a4,a5,a6,a7,a8,a9,a10) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("",100,200,100,200,100,200,100,200,100,200);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>