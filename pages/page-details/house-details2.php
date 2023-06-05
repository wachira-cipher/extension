<?php 
include __DIR__ . "/../templates/header.php";
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('http://localhost/extension/assets/css/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Property Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Property Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="house-details" class="house-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="https://localhost/extension/assets/img/property-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="https://localhost/extension/assets/img/property-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="https://localhost/extension/assets/img/property-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="https://localhost/extension/assets/img/property-1.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

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

            

              <p>
                Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.

              <p>
                Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> <span>Web design</span></li>
                <li><strong>Client</strong> <span>ASU Company</span></li>
                <li><strong>Project date</strong> <span>01 March, 2020</span></li>
                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Projet Details Section -->

  </main><!-- End #main -->

  <?php 
include __DIR__ . "/../templates/footer.php";
?>