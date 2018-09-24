<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="<?php echo site_url('images/favicon.png') ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo site_url('images/favicon.png') ?>" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/master.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.bxslider.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.bxslider.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jquery.slicknav.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js') ?>"></script>
    <title>Risk Resolution | Tata Kelola Manajemen Risiko</title>
  </head>
  <body>

    <header id="header">
      <div class="container">
        <div class="clearer">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 m-menu">
              <div class="logo">
                <a href="<?php echo site_url() ?>">
                  <img src="<?php echo base_url('images/logo.png') ?>" alt="">
                </a>
              </div>
            </div>

            <div class="col-lg-8 col-md-8 d-none d-lg-block">
              <ul class="menu">
                <li><a href="<?php echo site_url() ?>">Home</a></li>
                <li><a href="<?php echo site_url('about-us') ?>">About Us</a></li>
                <li><a href="<?php echo site_url('our-services') ?>">Services</a></li>
                <li><a href="<?php echo site_url('projects') ?>">Projects</a></li>
                <li><a href="<?php echo site_url('contact') ?>">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <?php if($this->uri->segment(1) != '' && $this->uri->segment(1) != 'home' ): ?>
    <style type="text/css" media="screen">
      header{
        position: relative;
      }
    </style>
    <?php endif ?>
