<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Dekorasi</title>
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

      <h2>Data Table</h2>

      <a href="<?=base_url()?>home/add_dekorasi" class="btn btn-info">Tambah</a>

        <table id="daftar" class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($dekorasi as $dekor) { ?>
            <tr>
              <td><?=$this->security->xss_clean($dekor->id) ?></td>
              <td><?=$this->security->xss_clean($dekor->nama) ?></td>
              <td><?=$this->security->xss_clean($dekor->gambar) ?></td>
              <td><?=$this->security->xss_clean($dekor->harga) ?></td>
              <td><a href="<?=base_url()?>home/edit_dekorasi/<?php echo $dekor->id ?>" class="btn btn-success">Edit</a><a href="<?=base_url()?>home/delete_dekorasi/<?php echo $dekor->id ?>" class="btn btn-danger">Delete</a></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

			<!--/sidebar-menu-->
				<?php $this->load->view('admin/include/sidebar'); ?>

<!--js -->

<!-- Bootstrap Core JavaScript -->

<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
   <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
   <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

   <script type="text/javascript">
     $(document).ready(function() {
       $('#daftar').DataTable();
     });
   </script>

</body>
</html>
