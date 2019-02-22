<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Jasarenov</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Home section
================================================== -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 style="color:#fff;" class="wow fadeInDown">JASA RENOV</h1>
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
			<ul class="nav navbar-nav navbar-right main-navigation">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#about" class="smoothScroll">ABOUT</a></li>
				<li><a href="#furniture" class="smoothScroll">FURNITURE</a></li>
				<li><a href="#renovasi" class="smoothScroll">RENOVASI</a></li>
				<li><a href="#membangun" class="smoothScroll">MEMBANGUN</a></li>
        <li><a href="#testimonial" class="smoothScroll">TESTIMONIALS</a></li>
				<li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div>

	</div>
</section>


<!-- about section
================================================== -->
<section id="about" class="paralla-section">
	<?php foreach($about as $a) { ?>
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-12">
				<img src="<?=base_url() . "assets/" . $a->foto ?>" class="img-responsive">
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="about-des">
					<h3><?=$a->judul?></h3>
					<p><?=$a->caption?></p>
				</div>
			</div>

		</div>

        <div class="row">

			<div class="col-md-6 col-sm-12">
				<div class="about-des">
					<h3><?=$a->judul2?></h3>
					<p><?=$a->caption2?></p>
				</div>
			</div>

            <div class="col-md-6 col-sm-12">
				<img src="<?=base_url() . "assets/" . $a->foto2 ?>" class="img-responsive">
			</div>

		</div>

	</div>
</section>
<?php } ?>

<!-- FURNITURE section -->

<section id="furniture" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="section-title">Furniture</h2>
      </div>
			<?php foreach($furniture as $f) { ?>
			<figure class="snip1340"><img src="<?=base_url("assets/cover/$f->img_fur")?>" alt="sample28"/>
			  <figcaption>
			    <h2><?=$f->fur_kategori?></h2>
			  </figcaption>
				<a href="<?=$f->anchor?>"></a>
			</figure>
		<?php } ?>
		</div>
	</div>
</section>

<!-- Renovasi -->

<section id="renovasi" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="section-title">Renovasi</h2>
      </div>
			<?php foreach($renovasi as $r) { ?>
				<figure class="snip1570">
				  <img src="<?=base_url("assets/cover/$r->img_renov")?>" alt="sample88" /><i class="ion-android-arrow-forward"></i>
				  <h3><?php echo $r->renov_kategori ?></h3>
				  <a href="<?=$r->anchor?>"></a>
			</figure>
	<?php } ?>
		</div>
	</div>
</section>

<!-- Membangun -->

<section id="membangun" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="section-title">Membangun</h2>
      </div>
			<?php foreach($membangun as $m) { ?>
				<figure class="snip1554">
				  <img src="<?=base_url("assets/cover/$m->img_membangun")?>" alt="sample104" />
				  <figcaption>
				    <h3><?=$m->m_kategori?></h3>
				  </figcaption>
				  <a href="<?=$m->anchor?>"></a>
			</figure>
		<?php } ?>
		</div>
	</div>
</section>

<!-- Testimonial section
================================================== -->
<section id="testimonial" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Service Owl Carousel section
			================================================== -->
			<div id="owl-testimonial" class="owl-carousel">
				<?php foreach($testimonial as $t) { ?>
				<div class="item">
					<div class="row">
						<div class="col-md-offset-2 col-md-8">
							<img src="<?=base_url() . "assets/images/" . $t->foto ?>" class="img-responsive img-circle">
							<h2><?=$t->nama?> - <?=$t->profesi?></h2>
							<p><?=$t->caption?></p>
						</div>
					</div>
				</div>
				<?php } ?>


		</div>
	</div>
</section>



<!-- Counter section
================================================== -->
<section id="counter" class="paralla-section">
	<div class="container">
		<div class="row">

			<div class="col-md-3 col-sm-3 counter-item">
				<h3 class="counter-number" data-from="1" data-to="256" data-speed="1000"></h3>
				<span class="counter-text">CUSTOMERS</span>
            </div>
            <div class="col-md-3 col-sm-3 counter-item">
				<h3 class="counter-number" data-from="1" data-to="512" data-speed="2000"></h3>
				<span class="counter-text">DEVELOPERS</span>
            </div>
            <div class="col-md-3 col-sm-3 counter-item">
				<h3 class="counter-number" data-from="1" data-to="1024" data-speed="3000"></h3>
				<span class="counter-text">AWESOME PROJECTS</span>
            </div>
             <div class="col-md-3 col-sm-3 counter-item">
				<h3 class="counter-number" data-from="1" data-to="2048" data-speed="4000"></h3>
				<span class="counter-text">DESIGNERS</span>
            </div>


		</div>
	</div>
</section>


<!-- start portfolio -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="wow bounce">Recent Projects</h2>
					<div class="iso-section wow fadeIn" data-wow-delay="0.6s">

						<ul class="filter-wrapper clearfix">
												 <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
												 <li><a href="#" class="opc-main-bg" data-filter=".rumah">Rumah</a></li>
												 <li><a href="#" class="opc-main-bg" data-filter=".ruko">Ruko</a></li>
												<li><a href="#" class="opc-main-bg" data-filter=".interior">Interior Design</a></li>
						</ul>

										<div class="iso-box-section">

											<div class="iso-box-wrapper col4-iso-box portfolio-container">
												<?php foreach($rumah as $r) { ?>
												<div class="iso-box rumah col-md-4 col-sm-6 col-xs-12">
													<div class="portfolio-thumb">
														<img data-src="<?=base_url() . "assets/membangun/rumah/" . $r->foto ?>" class="fluid-img lazy">
															<div class="portfolio-overlay">
																<h4><?=$r->judul?></h4>
																<p><?=$r->deskripsi?></p>
															</div>
													</div>
												</div>
											<?php } ?>

											<?php foreach($ruko as $ru) { ?>
												<div class="iso-box ruko col-md-4 col-sm-6 col-xs-12">
													<div class="portfolio-thumb">
														<img data-src="<?=base_url() . "assets/membangun/ruko/" . $ru->foto ?>" class="fluid-img lazy">
															<div class="portfolio-overlay">
																<h4><?=$ru->judul?></h4>
																<p><?=$ru->deskripsi?></p>
															</div>
													</div>
												</div>
											<?php } ?>

											<?php foreach($interior as $i) { ?>
												<div class="iso-box interior col-md-4 col-sm-6 col-xs-12">
													<div class="portfolio-thumb">
														<img data-src="<?=base_url() . "assets/furniture/portfolio/" . $i->foto ?>" class="fluid-img lazy">
															<div class="portfolio-overlay">
																<h4><?=$ru->judul?></h4>
																<p><?=$ru->deskripsi?></p>
															</div>
													</div>
												</div>
												<?php } ?>

											</div>
										</div>

					</div>
			</div>
		</div>
	</div>
</div>
<!-- end portfolio -->


<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Contact detail section
			================================================== -->
			<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="contact-detail">
					<h2>CONTACT US</h2>
						<div>
							<h4>Jasa Renov</h4>
							<p>Bandung</p>
						</div>
						<div>
							<h4>Talk to Us</h4>
							<a class="fa fa-phone" href="https://api.whatsapp.com/send?phone=6289655114906&text=Hi, I contacted you Through your website." target="_blank"></a>
						</div>
            <div>
							<h4>Email Us</h4>
              <a class="fa fa-envelope" href="mailto:someone@example.com?Subject=Hello%20again" target="_top"></a>
						</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<h2>Jasa Renov</h2>
				<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa.</p>
				<p>Copyright &copy; 2018 Jasa Renov created with <i style="color:red;" class="fa fa-heart" aria-hidden="true"></i> by <a href="http://reynaldodev.com" target="_blank" >reynaldodev.com</a> </p>
			</div>

			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<h2>Social Media</h2>
				<ul class="social-icon">
					<li><a href="#"><img src="assets/ig.png" alt=""></a></li>
					<li><a href="#"><img src="assets/fb.png" alt=""></a></li>
					<li><a href="#"><img src="assets/twitter.png" alt=""></a></li>
				</ul>
			<div>

		</div>
	</div>

	<div class="col-md-12 col-sm-12">
		<div class="copyright-text wow bounceIn">

		</div>
	</div>

</footer>

<div class="back-to-top"><i style="color: #ffa400" class="fa fa-arrow-up"></i></div>

<!-- Javascript
================================================== -->
<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/smoothscroll.js"></script>
<script src="<?=base_url()?>assets/js/jquery.nav.js"></script>
<script src="<?=base_url()?>assets/js/jquery.parallax.js"></script>
<script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/js/isotope.min.js"></script>
<script src="<?=base_url()?>assets/js/wow.min.js"></script>
<script src="<?=base_url()?>assets/js/counter.js"></script>
<script src="<?=base_url()?>assets/js/custom.js"></script>
<script src="<?=base_url()?>assets/js/lazyload.min.js"></script>

<script>
	(function () {
		function logElementEvent(eventName, element) {
			console.log(Date.now(), eventName, element.getAttribute("data-src"));
		}

		ll = new LazyLoad({
			elements_selector: '.lazy',
			load_delay: 300,
			threshold: 0,

			callback_enter: function (element) {
				logElementEvent("ENTERED", element);
			},
			callback_load: function (element) {
				logElementEvent("LOADED", element);
			},
			callback_set: function (element) {
				logElementEvent("SET", element);
			},
			callback_error: function (element) {
				logElementEvent("ERROR", element);
				element.src = "https://placeholdit.imgix.net/~text?txtsize=21&txt=Fallback%20image&w=220&h=280";
			}
		});
	}());
</script>

</body>
</html>
