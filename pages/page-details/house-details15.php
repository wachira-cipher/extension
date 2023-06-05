<?php 
include __DIR__ . "/../../templates/header.php";
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('http://localhost/extension/assets/css/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Property Details</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Property Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="house-details" class="house-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

      

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
            <h2>About my property </h2>
              <p>
                The property below is a house being offered at month to month lease .
                It is well maintained and vacant hence one can move in any day.
                Painting and minor repairements are allowed.Yard work and upkeep are entirely your rensponsibility one you move in
              </p>
              
              <img src="https://localhost/extension/assets/img/property-1.jpg" class="img-fluid" alt="">

            

            

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Property information</h3>
              <ul>
                <li><strong>Location</strong> <span>Web design</span></li>
                <li><strong>Client</strong> <span>ASU Company</span></li>
                <li><strong>Project date</strong> <span>01 March, 2020</span></li>
                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                <li><a href="http://localhost/extension/pages/contactagent.php" class="btn-visit align-self-start">Reach agent</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
   
    </section><!-- End Projet Details Section -->
  
  </main><!-- End #main -->

  <?php 
include __DIR__ . "/../../templates/footer.php";
?>