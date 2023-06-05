<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VIJIJIDIGITALExtension</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://localhost/extension/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="http://localhost/extension/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/extension/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="http://localhost/extension/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  
 <link rel="stylesheet" type="text/css" href="http://localhost/extension/assets/css/style.css">
 <link rel="stylesheet" type="text/css" href="http://localhost/extension/assets/css/main.css">
<style>
  
  input[type=password], input[type=email] input[type=username]{
    width: 100%;
    padding: 2px 11px;
    margin: 8px 0;
    display:inline;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  
  /* Set a style for all buttons */
  button {
    background-color:  #4154f1;
    color: #fefefe;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  
  .button:hover {
    opacity: 0.8;
  }
  
 
  
  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 12px 0 7px 0;
    position: relative;
  }
  
  .img.avatar {
    width: 12px;
    border-radius: 21px;
  }
  
  .container {
    padding: 12px;
  }
  
  span.psw {
    float: right;
    padding-top: 16px;
  }
  
  /* The Modal (background) */
  .modal {
    display:none; /* Hidden by default */
    position:fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 50px;
    top:20px;
    width: 60%; 
    height: 10%; 
    overflow:initial; /* Enable scroll if needed */
    padding-top: 30px;
  }
  .modal2 {
    display:none; /* Hidden by default */
    position:fixed; /* Stay in place */
    z-index: 0; /* Sit on top */
    left: 50px;
    top:20px;
    width: 60%; 
    height: 10%; 
    overflow:visible; /* Enable scroll if needed */
    padding-top: 30px;
  }
  
  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }
  
  /* The Close Button (x) */
  .close {
    padding-bottom: 12px;
    position: absolute;
    right: 30px;
    top: 0;
    color: #000;
    font-size: 13px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: blue;
    cursor: pointer;
  }
  
  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }
  
  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
  }
    
  @keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }
</style>

</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="searchconn.php">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Type</label>
              <select class="form-control form-select form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="city">City</label>
              <select class="form-control form-select form-control-a" id="city">
                <option>Nairobi</option>
                <option>Mombasa</option>
                <option>Kikuyu</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">Bedrooms</label>
              <select class="form-control form-select form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="garages">Garages</label>
              <select class="form-control form-select form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bathrooms">Bathrooms</label>
              <select class="form-control form-select form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">Min Price</label>
              <select class="form-control form-select form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <img src="http://localhost/extension/assets/css/img/logo.png" alt="">
        <a class="navbar-brand text-brand" href="http://localhost/extension/index.php">VIJIJI<span class="color-b">DIGITAL</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/extension/index.php">Home</a>
          </li>
          
<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">To Rent</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="http://localhost/extension/pages/landforrent.php">Land for Rent </a>
              <a class="dropdown-item " href="http://localhost/extension/pages/plotsforrent.php">Plots for Rent</a>
              <a class="dropdown-item " href="http://localhost/extension/pages/flats&apartmentsforrent.php">Flats and apartments for Rent</a>
              <a class="dropdown-item " href="http://localhost/extension/pages/bedsitterforrent.php">Bedsitters for Rent</a>
              <a class="dropdown-item " href="http://localhost/extension/pages/officesforrent.php">Offices for Rent</a>
              <a class="dropdown-item " href="http://localhost/extension/pages/housesforrent.php">Houses for Rent</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">For Sale</a>
            <div class="dropdown-menu">
            <a class="dropdown-item " href="http://localhost/extension/pages/landforsale.php">Land for Sale </a>
              <a class="dropdown-item " href="http://localhost/extension/pages/plotsforsale.php">Plots for Sale</a>
              <a class="dropdown-item " href="http://localhost/extension/pages/flats&apartmentsforsale.php">Flats and apartments for Sale</a>
              <a class="dropdown-item " href="http://localhost/extension/pages/bedsitterforsale.php">Bedsitters for sale</a>
              <a class="dropdown-item " href="http://localhost/extension/pages/officesforsale.php">Offices for sale</a>
              <a class="dropdown-item " href="http://localhost/extension/pages/housesforsale.php">Houses for sale</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
            <div class="dropdown-menu">
            <a class="dropdown-item " href="http://localhost/vijijidigital/">VIJIJIDIGITAL enterprise </a>
              <a class="dropdown-item " href="http://localhost/extension/"></a>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="http://localhost/extension/pages/contact.php">Contact</a>
          </li>
         <!-- <li class="nav-item"><button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" 
          data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button></li>
          <li class="nav-item"><button class="btn btn-b-n"
          onclick="document.getElementById('id01').style.display='block'">Login</button></li>
          <br>
          <li class="nav-item"><button class="btn btn-b-n"
          onclick="document.getElementById('id02').style.display='block'">Register</button></li>
          
     -->
        </ul>
      </div>

   

    </div>
    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="http://localhost/extension/logconnect.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">
      &times;</span>
      <img src="http://localhost/extension/assets/img/img_avatar2" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="name"><b>Username</b></label>
      <input type="password" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    
  </form>
</div>
<div id="id02" class="modal">
  <br><br>
  <form class="modal-content animate" action="http://localhost/extension/pages/register.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">
      &times;</span>
      <img src="http://localhost/extension/assets/img/img_avatar2" alt="" class="avatar">
    </div>

    <div class="container">
      <label for="name"><b>Username</b></label>
      <input type="password" placeholder="Enter Username" name="username" required>

      
      <label for="passsword"><b>Email</b></label>
      <br>
      <input type="email" placeholder="Enter your email" name="email" required>
<br><br>

      <label for="passsword"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="password" required>


      <button type="submit">Register</button>
       <label>

        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>


  </form>
</div>

</div>

  </nav><!-- End Header/Navbar -->
 