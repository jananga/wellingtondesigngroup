<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
   <?php
    foreach ($data->result() as $row)  
         { 
           ?>
      <h1>Welcome to <i><?php echo $row->name;?></i></h1>
      <h2><?php echo $row->message;?></h2>
      <a href="#about" class="btn-get-started scrollto"><?php echo $row->buttonContent;?></a>

         <?php } ?>
    </div>
  </section><!-- End Hero -->