<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Meningkat rumah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="<?=base_url()?>assets/css/renovasii.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

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

  <section id="renovasi" class="parallax-section">
        <div class="row">
          <?php foreach($meningkat_rumah as $tingkat) { ?>
          <div class="col">
            <img class="gambar" src="<?=base_url("assets/renovasi/meningkat-rumah/$tingkat->gambar")?>" alt="sample57" />
            <h2><?=$tingkat->judul?></h2>
            <p><?=$tingkat->deskripsi?></p>
          </div>
        <?php } ?>
        </div>
      </section>
    </body>

<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</html>
