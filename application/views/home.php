<?php include "include/header.php" ?>
<content>
  <section class="main-slider">
    <?php include 'include/slider.php'; ?>
  </section>

  <section class="about-home">
    <div class="container-fluid" style="overflow:hidden">
      <div class="row">

        <div class="col-md-6 col-12 bg-about" style="background-image:url(<?php echo base_url('images/bg-about_new.jpg') ?>)">

        </div>

        <div class="col-md-6 col-12 entry-about">
        <div class="clearer cellpadding">

          <div class="row">
            <div class="col-lg-12">

              <div class="section-title text-center">
                <h1 class="aboutOnScroll" data-animation="bounceInDown" data-timeout="100">About Us</h1>
              </div>

              <div class="col-xl-8 col-lg-8 col-md-12 aboutOnScroll" data-animation="bounceInRight" data-timeout="100">

                  <p><br><br><br><br><b>Visi</b><br>
      Menjadi konsultan terpercaya dalam bidang Manajemen Risiko dan
      integrasinya dengan bidang lain di industri finansial, sektor riil dan sektorpublik di Indonesia.<br><br>
      </p>
              </div>

            </div>
          </div>
          </div>

        </div>

        <!-- <div class="col-xl-4 col-lg-4 col-md-12 aboutOnScroll text-md-center" data-animation="bounceInLeft" data-timeout="100">
          <img width="200" class="mr-4 img-fluid" src="<?php echo base_url('images/lg.png') ?>" alt="">
        </div> -->

      </div>
    </div>
  </section>

  <section class="services parallax" data-type="background" data-order="0" data-speed="4">
    <div class="container-fluid" style="overflow:hidden">
      <div class="clearer" style="margin:0">

        <div class="row">

          <div class="col-lg-6 col-12">
          <div class="clearer cellpadding">

            <div class="section-title text-center serviceOnScroll" data-animation="bounceInDown" data-timeout="100">
              <h1>Our Services.</h1>
            </div>

            <div class="clearer"></div>

            <div class="serviceOnScroll" data-animation="bounceInLeft" data-timeout="100">
              <div>
                <ul>
                  <li><b>Penilaian</b> Risk Maturity</li><br>
                  <li><b>Penerapan</b> Manajemen Risiko dan seluruh komponen didalamnya. Diantaranya, Business Continuity, Integrasi Management Risiko, Key Risk Indicator, Project Assessment dan penerapan lain terkait dengan Management Risiko</li><br>
                  <li><b>Peningkatan</b> Penerapan Manajemen Risiko seperti ; Pengkinian Panduan /Manual Manajamen Risiko, Pembuatan Risk Management Blue Print, Re-Assessing Kriteria dan Parameter Risiko</li></ul><br>
              </div>
            </div>
          </div>
          </div>

          <div class="col-lg-6 col-12 bg-services" style="background-image:url(<?php echo base_url('images/bg_service_new.jpg') ?>)">

          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="client projects">
    <div class="container">
      <div class="clearer cellpadding">

        <div class="row projectOnScroll" data-animation="bounceInDown" data-timeout="100">
          <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12">
            <div class="section-title text-center">
              <h1>Our Clients.</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col text-center projectOnScroll" data-animation="bounceInLeft" data-animation="100">
            <img class="img-fluid" src="<?php echo base_url('images/client.jpg') ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="project d-none">
    <div class="container" style="overflow:hidden">
      <div class="clearer cellpadding">
        <div class="row projectOnScroll" data-animation="bounceInDown" data-timeout="100">
          <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12">
            <div class="section-title text-center">
              <h1>Our Projects</h1>
            </div>
          </div>
        </div>

        <div class="row" id="counter" style="overflow:hidden">
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center projectOnScroll" data-animation="bounceInLeft" data-animation="100">
            <figure class="figure">
              <img class="figure-img img-fluid" src="<?php echo base_url('images/spriter/srv1.png'); ?>" alt="">
              <figcaption class="figure-caption text-center">
                <h1 class="counter-value" data-count="45">0</h1>
                <h3>HAPPY CLIENTS</h3>
              </figcaption>
            </figure>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center projectOnScroll" data-animation="bounceInUp" data-animation="100">
            <figure class="figure">
              <img class="figure-img img-fluid" src="<?php echo base_url('images/spriter/srv2.png'); ?>" alt="">
              <figcaption class="figure-caption text-center">
                <h1 class="counter-value" data-count="8">0</h1>
                <h3>NEW PROJECTS</h3>
              </figcaption>
            </figure>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center projectOnScroll" data-animation="bounceInRight" data-animation="100">
            <figure class="figure">
              <img class="figure-img img-fluid" src="<?php echo base_url('images/spriter/srv3.png'); ?>" alt="">
              <figcaption class="figure-caption text-center">
                <h1 class="counter-value" data-count="47">0 <span>+</span></h1>
                <h3>PROJECT SOFAR</h3>
              </figcaption>
            </figure>
          </div>

        </div>
      </div>
    </div>
  </section>

</content>
<?php include "include/footer.php" ?>
