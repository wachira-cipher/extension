<!Doctype html>
<head></head>
<body>

  <?php 
include __DIR__ . "/../templates/header.php";
?>
<?php include __DIR__ ."/../config.php";
?>
<?php
if(isset($_POST['create'])) {
  $username= $_POST['username'];
	$email = $_POST['email'];
	$passsword = $_POST['passsword'];

   $sql= "INSERT INTO registration ( username,email,passsword) VALUES (?,?,?)";
   $stmtinsert =$db->prepare($sql);
   $result =$stmtinsert->execute([$username, $email, $passsword]);

   if($result){
    echo "succesfull";
   }else{
    echo "error";
   }
}
?>


  <form class="" method="post" action="http://localhost/extension/pages/register.php">
  <div class="imgcontainer">
   <img src="http://localhost/extension/assets/img/img_avatar2.png" alt="" class="avatar">
    </div>

 <div class="container">
      <label for="name"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="passsword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="passsword" required>

  <button type="submit btn-align-content center">Register</button>
      <label>
 <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
  </div>
 </form>
 </body>
  </html>