<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "search bar";

 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
  $type = $_POST['type'];
  $city = $_POST['city'];
  $bedrooms = $_POST['bedrooms'];
  $garages = $_POST['garages'];
  $min_price = $_POST['min_price'];
  if(!empty($courseName)){
      $query = "INSERT INTO 'search' ('type','city','bedrooms','garages','min price') VALUES('$type','$city','$bedrooms','$garages','$min_price')";
      $result = $conn->query($query);
      if($result){
        echo "Course is inserted successfully";
      }  
    }
  }

?>
