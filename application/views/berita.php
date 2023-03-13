  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo base_url();?>assets/img/gedung.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Berita</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Berita</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Berita Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="row gy-5 posts-list">

            <?php foreach ($getBerita as $result) { ?>
              <div class="col-lg-6">
                <article class="d-flex flex-column">
                  <div class="post-img">
                    <img src="<?php echo base_url();?><?php echo $result->gambar_berita;?>" alt="" class="img-fluid">
                  </div>
                  <h2 class="title">
                    <a href="<?php echo base_url();?>Berita/detail"><?php echo $result->judul_berita;?></a>
                  </h2>
                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php echo base_url();?>Berita/detail">Administrator</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php echo base_url();?>Berita/detail"><time datetime="2022-01-01"><?php echo $result->tgl_berita;?></time></a></li>
                    </ul>
                  </div>
                  <div class="content">
                    <p>
                      <?php 
                        $content = $result->isi_berita;
                        $readmore = substr($content,0,250);
                        echo $readmore.'....';
                      ?>
                    </p>
                  </div>
                  <div class="read-more mt-auto align-self-end">
                    <a href="<?php echo base_url('Berita/detail/'.$result->id_berita);?>">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </article>
              </div><!-- End post list item -->
              <?php } ?>

            </div><!-- End blog posts list -->
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="<?php echo base_url();?>assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Nihil blanditiis at in nihil autem</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="<?php echo base_url();?>assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Quidem autem et impedit</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="<?php echo base_url();?>assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="<?php echo base_url();?>assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Laborum corporis quo dara net para</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="<?php echo base_url();?>assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Et dolores corrupti quae illo quod dolor</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                </div>

              </div><!-- End sidebar recent posts-->

              

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
