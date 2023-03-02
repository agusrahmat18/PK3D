<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
        <!-- <h1 class="d-flex align-items-center">Nova</h1> -->
        
        <!-- <h1><a href="" class="logo mr-auto"><img src="<?php echo base_url(); ?>assets/img/pk3d.png" alt=""></a></h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo base_url(); ?>" class="active"><i class="material-icons w3-xlarge">home</i></a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?php echo base_url(); ?>Kontak">Kontak Kami</a></li>
              <li><a href="<?php echo base_url(); ?>Struktur">Struktur Organisasi</a></li>
              <li><a href="<?php echo base_url(); ?>VisiMisi">Visi dan Misi</a></li>
              <li><a href="<?php echo base_url(); ?>Tentang">Tentang</a></li>
              <li class="dropdown"><a href="#"><span>Jenis Pelayanan PK3D</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="<?php echo base_url(); ?>Fasilitas">Fasilitas Pelayanan Ambulans</a></li>
                  <li><a href="<?php echo base_url(); ?>Standarisasi">Standarisasi Ambulans</a></li>
                  <li><a href="<?php echo base_url(); ?>RegistrasiBasic">Registrasi Rekomendasi Ambulans Basic</a></li>
                  <li><a href="<?php echo base_url(); ?>RegistrasiAdvance">Registrasi Rekomendasi Ambulans Advance</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="<?php echo base_url(); ?>About">About</a></li>
          <li><a href="<?php echo base_url(); ?>Services">Services</a></li>
          <li><a href="<?php echo base_url(); ?>Portfolio">Portfolio</a></li>
          <li><a href="<?php echo base_url(); ?>Team">Team</a></li>
          <li><a href="<?php echo base_url(); ?>Blog">Blog</a></li>
          <li><a href="<?php echo base_url(); ?>Karir">Karir</a></li>
          <!-- <li><a href="#">Kontak</a></li> -->
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->