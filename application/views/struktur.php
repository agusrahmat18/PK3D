
<body class="page-contact">
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo base_url(); ?>assets/img/kontak-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Struktur Organisasi</h2>
        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li>Struktur Organisasi</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

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