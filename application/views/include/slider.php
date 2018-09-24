<div id="mainSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
    <li data-target="#mainSlider" data-slide-to="1"></li>
    <li data-target="#mainSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <?php
    //$where = "start_date <= NOW() AND end_date >= NOW()";
    //$this->db->where($where);
    $this->db->order_by('slider_id','DESC');
    $data_slider = $this->db->get('slider');
    
    if($data_slider->num_rows() > 0):
    foreach($data_slider->result_array() as $key=>$row):
    ?>


    <div class="carousel-item <?php if($key==0){ echo 'active'; } ?>">
      <img class="d-block w-100" src="<?php echo base_url('assets/uploads/files/').$row['file_image'] ?>" alt="First slide" />
      <div class="carousel-caption d-none d-md-block">
        <!--<h1>
          <?php echo $row['title']; ?>
        </h1>-->
        <!--<h5><?php echo $row['caption']; ?></h5>-->
        <!--<h6>See Our Services</h6>-->
      </div>
    </div>
    <?php

    $key = $key+1;
     ?>


    <?php endforeach ?>
    <?php endif ?>

   

  </div>
  <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
