<?php include 'include/header.php'; ?>
  <content>

  	<?php
        
        
        $row = $query->row_array();
        ?>

    <section class="about-home">
      <div class="container" style="overflow:hidden">
      <div class="clearer">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $row['title_en']; ?></li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-lg-12">

            <div class="section-title text-center">
              <h1 class="aboutOnScroll" data-animation="bounceInDown" data-timeout="100"><?php echo $row['title_en']; ?></h1>
            </div>

          </div>

          <div class="col-xl-4 col-lg-4 col-md-12 aboutOnScroll text-md-center" data-animation="bounceInLeft" data-timeout="100">
            <img width="200" class="mr-4 img-fluid" src="<?php echo base_url('images/lg.png') ?>" alt="">
          </div>

          <div class="col-xl-8 col-lg-8 col-md-12 aboutOnScroll" data-animation="bounceInRight" data-timeout="100">

               <?php echo $row['description_en'] ?>
          </div>


        </div>
      </div>
      </div>
    </section>

  </content>
<?php include 'include/footer.php'; ?>
