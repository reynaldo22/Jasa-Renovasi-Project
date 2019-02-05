<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Kost</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?=base_url()?>assets/css/membangun.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
</head>

<body>

  <!-- Home section
  ================================================== -->
  <section id="home" class="parallax-section">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 col-sm-12">
  				<h1 class="wow fadeInDown">KOST</h1>
  				<h3 class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
  			</div>

  		</div>
  	</div>
  </section>

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

  <section id="membangun" class="parallax-section">
    <?php foreach($kost as $k) { ?>
      <figure class="snip1523">
        <img src="<?=base_url("assets/membangun/kos/$k->gambar")?>" alt="sample85" />
        <figcaption>
          <h3><?=$k->judul?></h3>
          <p><?=$k->deskripsi?></p>
        </figcaption>
      </figure>
    <?php } ?>
  </section>

  <script src="<?=base_url()?>assets/js/jquery.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</body>

</html>
