<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: none;
  background-color: #FFFFFF;
  width: 30%;
  height: 450px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: #00254DC7;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #DBA952;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #F1C16E;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: none;
  width: 70%;
  border-left: none;
  height: 300px;
}

p.ex1 {
  padding: 1px;
}
</style>

<body class="page-about">

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo base_url(); ?>assets/img/gedung.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Visi Misi</h2>
        <ol>
          <li><a href="<?php echo base_url();?>">Home</a></li>
          <li>Visi Misi</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Visi Misi Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="tab" style="font-weight:bold;">
            <button class="tablinks" onclick="openCity(event, 'Visi')" id="defaultOpen">Visi</button>
            <button class="tablinks" onclick="openCity(event, 'Misi')">Misi</button>
            <button class="tablinks" onclick="openCity(event, 'Tujuan')">Tujuan</button>
            <button class="tablinks" onclick="openCity(event, 'Maklumat Pelayanan')">Maklumat Pelayanan</button>
            <button class="tablinks" onclick="openCity(event, 'Kebijakan Mutu dan K3L')">Kebijakan Mutu dan K3L</button>
            <button class="tablinks" onclick="openCity(event, 'Sasaran Mutu dan Sasaran K3L')">Sasaran Mutu dan Sasaran K3L</button>
            <button class="tablinks" onclick="openCity(event, 'Budaya Kerja')">Budaya Kerja</button>
          </div>

          <div id="Visi" class="tabcontent">
            <h3 style="font-weight:bold; font-style: italic;">Visi</h3><br>
              <p class="ex1">Jakarta Kota Maju, Lestari dan Berbudaya yang Warganya Terlibat Dalam Mewujudkan Keberadaban, Keadilan, dan Kesejahteraan Bagi Semua.</p>
          </div>

          <div id="Misi" class="tabcontent">
            <h3 style="font-weight:bold; font-style: italic;">Misi</h3><br>
              <p class="ex1">1. Menjadikan Jakarta kota yang aman, sehat, cerdas, berbudaya, dengan memperkuat nilai-nilai keluarga dan memberikan ruang kreativitas melalui kepemimpinan yang melibatkan, menggerakkan, dan memanusiakan dalam kegiatan kegawatdaruratan.</p>
              <p class="ex1">2. Menjadikan Jakarta tempat wahana aparatur negara yang berkarya, mengabdi, melayani, serta menyelesaikan berbagai permasalahan kota dan warga, secara efektif, meritokratis, dan berintegritas dalam kegiatan kegawatdaruratan.</p> 
          </div>

          <div id="Tujuan" class="tabcontent">
            <h3 style="font-weight:bold; font-style: italic;">Tujuan</h3><br>
              <p class="ex1">1. Meningkatkan Derajat Kesehatan Masyarakat.</p>
              <p class="ex1">2. Mewujudkan Tata Kelola Urusan Kesehatan Yang Berorientasi Pada Kepuasan Pelanggan.</p>
          </div>

          <div id="Maklumat Pelayanan" class="tabcontent">
            <h3 style="font-weight:bold; font-style: italic;">Maklumat Pelayanan</h3><br>
              <p class="ex1">Dengan ini, kami menyatakan sanggup menyelenggarakan pelayanan sesuai standar pelayanan yang telah ditetapkan. Dan apabila dalam penyelengggaraan pelayanan kami, tidak sesuai dengan standar pelayanan yang telah ditetapkan, kami bersedia menerima sanksi sesuai ketentuan perundang-undangan yang berlaku.</p>
          </div>

          <div id="Kebijakan Mutu dan K3L" class="tabcontent">
            <h3 style="font-weight:bold; font-style: italic;">Kebijakan Mutu dan K3L</h3><br>
              <p class="ex1">Dalam mewujudkan pelayanan prima, Unit Pelayanan Ambulans Gawat Darurat Dinas Kesehatan Provinsi DKI Jakarta memiliki komitmen untuk menjadi organisasi yang bermutu, menjunjung kesehatan dan keselamatan kerja dalam pengelolaan pelayanan ambulans gawat darurat, sertifikasi kelayakan ambulans, pendidikan dan pelatihan dengan melakukan perbaikan mutu dan SMK3 secara berkelanjutan sesuai peraturan perundang-undangan.</p>
          </div>

          <div id="Sasaran Mutu dan Sasaran K3L" class="tabcontent">
            <h3 style="font-weight:bold; font-style: italic;">Sasaran Mutu dan Sasaran K3L</h3><br>
              <p class="ex1">1. Indeks Kepuasan Masyarakat pada Pelayanan Ambulans Gawat Darurat minimal 80%.</p>
              <p class="ex1">2. Indeks Kepuasan Masyarakat pada Pendidikan dan Pelatihan Kegawatdaruratan minimal 80%.</p>
              <p class="ex1">3. Angka kejadian kecelakaan kurang dari 2,5 %.</p>
          </div>

          <div id="Budaya Kerja" class="tabcontent">
            <h3 style="font-weight:bold; font-style: italic;">Budaya Kerja</h3><br>
              <p class="ex1"><b>S</b> &ensp; emangat memberikan pelayanan dengan sepenuh hati.</p>
              <p class="ex1"><b>I</b> &ensp; ntelek menyikapi semua kendala dan hambatan dalam pelayanan.</p>
              <p class="ex1"><b>G</b> &ensp; esit memberikan pelayanan dan merespon keluhan pelanggan.</p>
              <p class="ex1"><b>A</b> &ensp; ktual dalam perbaikan dan analisa resiko.</p>
              <p class="ex1"><b>P</b> &ensp; rofesionalisme kerja dan ketepatan dalam pelaksanaan program.</p>
          </div>

        </div>
      </div>
    </section><!-- End Visi Misi Section -->

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