<?php
	$username= $_POST['username'];
    $psw = $_POST['psw'];
   
	// Database connection
	error_reporting(E_ALL);
ini_set('display_errors', 1);  

	$conn = new mysqli('localhost','root','','registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		//echo $mysli->error;
		//die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration ( username, psw)
		 values( ?, ?)");
		$stmt->bind_param("ss",$username, $psw );
		 $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>