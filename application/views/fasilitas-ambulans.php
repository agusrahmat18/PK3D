<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: none;
  background-color: #FFFFFF;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  color: #00254DC7;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #DBA952;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #F1C16E;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: none;
  border-top: none;
}

p.ex1 {
  padding: 1px;
}
</style>

<body class="page-about">

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo base_url(); ?>assets/img/ambulans.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Fasilitas Pelayanan Ambulans</h2>
        <ol>
          <li><a href="<?php echo base_url();?>">Home</a></li>
          <li>Fasilitas Pelayanan Ambulans</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= TEMPLATE Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4" data-aos="fade-up">
        <div class="tab" style="font-weight:bold;">
          <button class="tablinks" onclick="openCity(event, 'Evakuasi Medis Gawat Darurat')" id="defaultOpen">Evakuasi Medis Gawat Darurat</button>
          <button class="tablinks" onclick="openCity(event, 'Evakuasi Medis Non Gawat Darurat')">Evakuasi Medis Non Gawat Darurat</button>
        </div>

        <div id="Evakuasi Medis Gawat Darurat" class="tabcontent">
          <h3 style="font-weight:bold; font-style: italic;">Evakuasi Medis Gawat Darurat</h3><br>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Pelayanan 24 Jam dalam dan luar kota.<p>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Panggilan dari rumah / kecelakaan ke rumah sakit.</p>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Evakuasi dari rumah ke rumah sakit atau antar rumah sakit.</p>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Rujukan antar rumah sakit.</p>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Layanan GRATIS untuk pemegang KTP dan KK DKI Jakarta, korban kecelakaan, demonstrasi, kebakaran, huru-hara dan KLB.</p>
        </div>

        <div id="Evakuasi Medis Non Gawat Darurat" class="tabcontent">
          <h3 style="font-weight:bold; font-style: italic;">Evakuasi Medis Non Gawat Darurat</h3><br>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Olahraga.</p>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Pernikahan.</p>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Konser Musik.</p>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Acara Formal.</p>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Family Gathering.</p>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Fun Bike.</p>
            <p class="ex1"><i class="bi bi-check-circle" style="color:#1b2f45"></i> Dan lain-lain.</p>
        </div>

        </div>
      </div>
    </section><!-- End TEMPLATE Section -->

  </main><!-- End #main -->

  <script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  </script>