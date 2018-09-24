<?php include 'include/header.php'; ?>
<content>
  <section class="contact-us">
    <div class="container">
      <div class="clearer">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav>


           <?php echo form_error('name', '<div class="bg-danger" style="padding:15px">', '</div>'); ?>
                            <?php echo form_error('email', '<div class="bg-danger" style="padding:15px">', '</div>'); ?>
                            <?php echo form_error('phone', '<div class="bg-danger" style="padding:15px">', '</div>'); ?>
                            <?php echo form_error('subject', '<div class="bg-danger" style="padding:15px">', '</div>'); ?>
                            <?php echo form_error('comment', '<div class="bg-danger" style="padding:15px">', '</div>'); ?>
                            <?php echo form_error('captcha', '<div class="bg-danger" style="padding:15px">', '</div>'); ?>

                            <?php echo form_open('contact/send'); ?>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group form-group-lg">
                        <label>Name :</label>
                        <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control"/>
                        </div>
                                        </div>

                                        <div class="col-md-6 col-xs-12 form-group-lg">
                                            <div class="form-group">
                        <label>Email :</label>
                        <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control"/>
                        </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group form-group-lg">
                        <label>Phone :</label>
                        <input type="tel" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control"/>
                        </div>
                                        </div>

                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group form-group-lg">
                        <label>Subject :</label>
                        <input type="text" name="subject" value="<?php echo set_value('subject'); ?>" class="form-control"/>
                        </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group">
                        <label>Comment :</label>
                        <textarea name="comment" value="<?php echo set_value('comment'); ?>" class="form-control" rows="6"></textarea>
                        </div>
                                        </div>
                                    </div>

                        <div class="row">
                          <div class="col-md-3 col-xs-12">
                            <div class="form-group">
                              <?php echo $cap_img; ?>
                            </div>
                          </div>

                        <div class="col-md-6 col-xs-12">
                          <div class="form-group form-group-lg">
                         <!-- <label>Captcha :</label> -->
                        <input type="text" name="captcha" placeholder="Captcha" value="" class="form-control"/>
                          <?php echo $cap_msg ;?>
                        </div>
                                        </div>

                      <div class="col-md-3 col-xs-12">
                        <div class="form-group">
                          <input type="submit" class="btn btn-warning btn-block" value="SEND"/>
                        </div>
                      </div>

                      </div>

                </form>


      </div>
    </div>
  </section>
</content>
<?php include 'include/footer.php'; ?>
