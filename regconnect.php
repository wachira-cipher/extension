<?php
    $username= $_POST['username'];
	$email = $_POST['email'];
	$passsword = $_POST['passsword'];
   
	// Database connection
	$conn = new mysqli('username','localhost','root','','registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration( 'username',email, psw,) 
		values( ?, ?, ?)");
		//$log_id = random_num(20);
		$stmt->bind_param("sssi", $username, $email, $psw, );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>