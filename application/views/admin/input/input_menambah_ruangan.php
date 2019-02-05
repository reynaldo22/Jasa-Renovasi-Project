
<!DOCTYPE HTML>
<html>
<head>
<title>Input menambah ruangan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Bootstrap Core CSS -->
<link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?=base_url()?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet">
<link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<!-- lined-icons -->
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head>
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
             <!--header start here-->

				<div class="header-main">
						<div class="profile_details w3l">
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
												<span class="prfil-img"><img src="<?=base_url()?>assets/admin/images/in5.jpg" alt=""> </span>
												<div class="user-name">
													<p><?php echo $this->session->userdata('nama'); ?></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>
											</div>
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
											<li> <a href="<?=base_url("login/logout");?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>

				     <div class="clearfix"> </div>
				</div>
<!--heder end here-->
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<!--four-grids here-->
		  <!-- form -->

      <form class="" action="<?=base_url()?>home/input_menambah_ruangan" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul">
        </div>

        <div class="form-group">
          <label for="gambar">Gambar</label>
          <input type="text" class="form-control" name="gambar" id="gambar" placeholder="Gambar">
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="deskripsi"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
      </form>

			<!--/sidebar-menu-->
      <div style="overflow:scroll" class="sidebar-menu">
        <header class="logo1">
          <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
        </header>
          <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                         <div class="menu">
                <ul id="menu" >
                  <li><a href="<?=base_url()?>home/admin"><i class="fa fa-user"></i> <span>About</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_furniture"><i class="fa fa-table"></i> <span>Furnitures</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_ruang_tamu"><i class="fa fa-table"></i> <span>Ruang tamu</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_ruang_kerja"><i class="fa fa-table"></i> <span>Ruang kerja</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_kamar_mandi"><i class="fa fa-table"></i> <span>Kamar mandi</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_kamar_tidur"><i class="fa fa-table"></i> <span>Kamar tidur</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_home_improvement"><i class="fa fa-table"></i> <span>Home improvement</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_dekorasi"><i class="fa fa-table"></i> <span>Dekorasi</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_ruang_makan"><i class="fa fa-table"></i> <span>Dapur dan ruang makan</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_perabotan"><i class="fa fa-table"></i> <span>Perabotan</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_renovasi"><i class="fa fa-table"></i> <span>Renovasi</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_meningkat_rumah"><i class="fa fa-table"></i> <span>Meningkat rumah</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_membuat_dak"><i class="fa fa-table"></i> <span>Membuat dak</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_perbaikan_genteng"><i class="fa fa-table"></i> <span>Perbaikan genteng</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_pengecatan"><i class="fa fa-table"></i> <span>Pengecatan</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_pekerjaan_interior"><i class="fa fa-table"></i> <span>Pekerjaan interior</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_menambah_ruangan"><i class="fa fa-table"></i> <span>Menambah ruangan</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_membangun"><i class="fa fa-table"></i> <span>Membangun</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_membangun_rumah"><i class="fa fa-table"></i> <span>Rumah</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_kost"><i class="fa fa-table"></i> <span>Kost</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_membangun_ruko"><i class="fa fa-table"></i> <span>Ruko</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_testimonial"><i class="fa fa-table"></i> <span>Testimonial</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_rumah"><i class="fa fa-table"></i> <span>Testimonial rumah</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_ruko"><i class="fa fa-table"></i> <span>Testimonial ruko</span><div class="clearfix"></div></a></li>
                  <li><a href="<?=base_url()?>home/a_interior"><i class="fa fa-table"></i> <span>Testimonial interior</span><div class="clearfix"></div></a></li>
                </ul>
              </div>
            </div>
							  <div class="clearfix"></div>
							</div>
<!--js -->

<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
   <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
   <script src="<?=base_url()?>assets/js/ckeditor.js"></script>
   <script>
   			ClassicEditor
   				.create( document.querySelector( '#deskripsi' ) )
   				.then( editor => {
   					console.log( editor );
   				} )
   				.catch( error => {
   					console.error( error );
   				} );
   </script>
</body>
</html>
