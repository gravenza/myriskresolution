<?php include 'include/header.php'; ?>
  <content>

    <section class="projects">
      <div class="container" style="overflow:hidden">
        <div class="clearer">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
          </nav>

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
<?php include 'include/footer.php'; ?>
