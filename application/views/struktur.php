
<body class="page-contact">
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo base_url(); ?>assets/img/gedung.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Struktur Organisasi</h2>
        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li>Struktur Organisasi</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Struktur Organisasi</h2>
        </div>
        
        <div class="row gy-4">
          <div class="col-lg-3"></div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <!-- <div class="member-img"> -->
                <img src="<?php echo base_url(); ?>assets/img/team/kanit.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              <!-- </div> -->
              <div class="member-info">
                <h4>dr. Winarto, MARS</h4>
                <span>Kepala Unit PK3D</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="<?php echo base_url(); ?>assets/img/team/kasubag.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sugeng Priwanto S.Kep,NERS</h4>
                <span>Kasubag TU PK3D</span>
              </div>
            </div>
          </div><!-- End Team Member -->
        </div>
        
        <br>

        <div class="row gy-4">
          <div class="col-lg-1"></div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="<?php echo base_url(); ?>assets/img/team/kasatpel1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>dr. Roy Michael</h4>
                <span>Kasatpel 1 (Pelayanan Masyarakat)</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="<?php echo base_url(); ?>assets/img/team/kasatpel2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ida Syarina S.Kep, NERS</h4>
                <span>Kasatpel 2 (Pengembangan Sumber Daya dan Pemberdayaan Masyarakat)</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="<?php echo base_url(); ?>assets/img/team/kasatpel3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>dr. Sartika Sari</h4>
                <span>Kasatpel 3 (Pusat Krisis dan SPGDT)</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          
        </div>

      </div>
    </section><!-- End Team Section -->
    
    <!-- ======= Struktur Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4" data-aos="fade-up">
          <div class="image detail-view" style="background-image: url('<?php echo base_url(); ?>assets/img/strukturorganisasi.jpg');"></div>
        </div>
      </div>
    </section><!-- End Struktur Section -->

  </main><!-- End #main -->

  <script>
        (function() {
        // Get all images with the `detail-view` class
        var zoomBoxes = document.querySelectorAll('.detail-view');

        // Extract the URL
        zoomBoxes.forEach(function(image) {
        var imageCss = window.getComputedStyle(image, false),
            imageUrl = imageCss.backgroundImage
                             .slice(4, -1).replace(/['"]/g, '');

        // Get the original source image
        var imageSrc = new Image();
        imageSrc.onload = function() {
          var imageWidth = imageSrc.naturalWidth,
              imageHeight = imageSrc.naturalHeight,
              ratio = imageHeight / imageWidth;

          // Adjust the box to fit the image and to adapt responsively
          var percentage = ratio * 100 + '%';
          image.style.paddingBottom = percentage;

          // Zoom and scan on mousemove
          image.onmousemove = function(e) {
            // Get the width of the thumbnail
            var boxWidth = image.clientWidth,
                // Get the cursor position, minus element offset
                x = e.pageX - this.offsetLeft,
                y = e.pageY - this.offsetTop,
                // Convert coordinates to % of elem. width & height
                xPercent = x / (boxWidth / 100) + '%',
                yPercent = y / (boxWidth * ratio / 100) + '%';

            // Update styles w/actual size
            Object.assign(image.style, {
              backgroundPosition: xPercent + ' ' + yPercent,
              backgroundSize: imageWidth + 'px'
            });
          };

          // Reset when mouse leaves
          image.onmouseleave = function(e) {
            Object.assign(image.style, {
              backgroundPosition: 'center',
              backgroundSize: 'cover'
            });
          };
        }
        imageSrc.src = imageUrl;
      });
    })();
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46156385-1', 'cssscript.com');
      ga('send', 'pageview');

    </script><!-- End Struktur Section -->