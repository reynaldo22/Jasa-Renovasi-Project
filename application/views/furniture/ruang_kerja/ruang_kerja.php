<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Ruang kerja</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/furniture.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>

  <!-- Navigation section
  ================================================== -->
  <section class="navbar navbar-default navbar-fixed-top sticky-navigation" role="navigation">
  	<div class="container">

  		<div class="navbar-header">
  			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  				<span class="icon icon-bar"></span>
  				<span class="icon icon-bar"></span>
  				<span class="icon icon-bar"></span>
  			</button>
  			<a href="#" class="navbar-brand">Jasa Renov</a>
  		</div>
  		<div class="collapse navbar-collapse">
  			<?php $this->load->view('admin/include/nav'); ?>
  		</div>

  	</div>
  </section>
<br><br><br>
  <section id="furniture" class="parallax-section">
    <div class="container">
      <div class="row">
      <?php foreach($ruang_kerja as $kerja) { ?>
        <figure class="snip1583">
            <img src="<?= base_url("assets/furniture/kerja/$kerja->gambar") ?>" alt="sample68" />
            <figcaption>
              <h3 class="h3"><?=$kerja->nama?></h3>
              <div class="price"><?=$kerja->harga?></div>
            </figcaption>
        </figure>
      <?php } ?>
  </div>
</div>

</section>

</body>

<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</html>
