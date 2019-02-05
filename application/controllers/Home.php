<?php

class Home extends CI_Controller {

  function __construct(){
		parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
	}

  public function index() {

    $data = array('about' => $this->My_model->about()->result(),
                  'testimonial' => $this->My_model->testimonial()->result(),
                  'rumah' => $this->My_model->rumah()->result(),
                  'ruko' => $this->My_model->ruko()->result(),
                  'interior' => $this->My_model->interior()->result(),
                  'furniture' => $this->My_model->furniture()->result(),
                  'renovasi' => $this->My_model->renovasi()->result(),
                  'membangun' => $this->My_model->membangun()->result()
                );

    $this->load->view("home",$data);
  }

  /* admin about */

  function admin() {
    $admin = $this->My_model->about()->result();
    $data = array('admin' => $admin);
    $this->load->view('admin',$data);
  }

  function edit_about($id) {
    $about = $this->My_model->get_about($id);
    $data = array('about' => $about);
    $this->load->view('admin/edit/about_edit', $data);
  }

  function update_about() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'foto' => $this->input->post('foto'),
    'caption' => $this->input->post('caption'),
    'judul' => $this->input->post('judul'),
    'foto2' => $this->input->post('foto2'),
    'caption2' => $this->input->post('caption2'),
    'judul2' => $this->input->post('judul2')
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_about($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/admin"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_about"</script>';
        }

  }

  function delete_about($id) {
    $delete = $this->My_model->delete_about($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/admin"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_about"</script>';
        }
  }

  /* END OF about */

  /* ADMIN FURNITURE */

  function a_furniture() {
    $furniture = $this->My_model->furniture()->result();
    $data = array('furniture' => $furniture);
    $this->load->view('admin/adm_furniture',$data);
  }

  function edit_furniture($id) {
    $about = $this->My_model->get_furniture($id);
    $data = array('furniture' => $about);
    $this->load->view('admin/edit/furniture_edit', $data);
  }

  function update_furniture() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'fur_kategori' => $this->input->post('fur_kategori'),
    'img_fur' => $this->input->post('img_fur'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_furniture($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_furniture"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_furniture"</script>';
        }

  }

  function delete_furniture($id) {
    $delete = $this->My_model->delete_furniture($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_furniture"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_furniture"</script>';
        }
  }

  /* END OF ADMIN FURNITURE */

  /* ADMIN RUANG TAMU */

  function a_ruang_tamu() {
    $ruang_tamu = $this->My_model->ruang_tamu()->result();
    $data = array('ruang_tamu' => $ruang_tamu);
    $this->load->view('admin/adm_ruang_tamu',$data);
  }

  function edit_ruang_tamu($id) {
    $about = $this->My_model->get_ruang_tamu($id);
    $data = array('ruang_tamu' => $about);
    $this->load->view('admin/edit/ruang_tamu_edit', $data);
  }

  function update_ruang_tamu() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'nama' => $this->input->post('nama'),
    'gambar' => $this->input->post('gambar'),
    'harga' => $this->input->post('harga'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_ruang_tamu($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_ruang_tamu"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_ruang_tamu"</script>';
        }

  }

  function delete_ruang_tamu($id) {
    $delete = $this->My_model->delete_ruang_tamu($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_ruang_tamu"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_ruang_tamu"</script>';
        }
  }

  function add_ruang_tamu() {
    $admin = $this->My_model->ruang_tamu()->result();
    $data = array('ruang_tamu' => $admin);
    $this->load->view('admin/input/input_ruang_tamu', $data);
  }

  function input_ruang_tamu() {

        $data = array(
          'nama' => $this->input->post('nama'),
          'gambar' => $this->input->post('gambar'),
          'harga' => $this->input->post('harga'),
        );

        // var_dump($data);
        // die():

    $simpan = $this->My_model->input_ruang_tamu($data);
        if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_ruang_tamu"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/input_ruang_tamu"</script>';
        }
      }

  /* END OF ADMIN RUANG TAMU */

  /* ADMIN RUANG KERJA */

  function a_ruang_kerja() {
    $ruang_kerja = $this->My_model->ruang_kerja()->result();
    $data = array('ruang_kerja' => $ruang_kerja);
    $this->load->view('admin/adm_ruang_kerja',$data);
  }

  function edit_ruang_kerja($id) {
    $about = $this->My_model->get_ruang_kerja($id);
    $data = array('ruang_kerja' => $about);
    $this->load->view('admin/edit/ruang_kerja_edit', $data);
  }

  function update_ruang_kerja() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'nama' => $this->input->post('nama'),
    'gambar' => $this->input->post('gambar'),
    'harga' => $this->input->post('harga'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_ruang_kerja($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_ruang_kerja"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_ruang_kerja"</script>';
        }
  }

  function delete_ruang_kerja($id) {
    $delete = $this->My_model->delete_ruang_kerja($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_ruang_kerja"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_ruang_kerja"</script>';
        }
  }

function add_ruang_kerja() {
    $admin = $this->My_model->ruang_kerja()->result();
    $data = array('ruang_kerja' => $admin);
    $this->load->view('admin/input/input_ruang_kerja', $data);
  }

function input_ruang_kerja() {

  $data = array(
    'nama' => $this->input->post('nama'),
    'gambar' => $this->input->post('gambar'),
    'harga' => $this->input->post('harga'),
  );

  // var_dump($data);
  // die():

$simpan = $this->My_model->input_ruang_kerja($data);
  if($simpan){
      echo "<script>alert('Berhasil disimpan !!')</script>";
      echo '<script>window.location.href="'.base_url().'home/a_ruang_kerja"</script>';
  }else{
      echo "<script>alert('Gagal disimpan !!')</script>";
      echo '<script>window.location.href="'.base_url().'home/input_ruang_kerja"</script>';
  }
}

  /* END OF ADMIN RUANG KERJA */

  /* ADMIN KAMAR MANDI */

  function a_kamar_mandi() {
    $kamar_mandi = $this->My_model->kamar_mandi()->result();
    $data = array('kamar_mandi' => $kamar_mandi);
    $this->load->view('admin/adm_kamar_mandi',$data);
  }

  function edit_kamar_mandi($id) {
    $about = $this->My_model->get_kamar_mandi($id);
    $data = array('kamar_mandi' => $about);
    $this->load->view('admin/edit/kamar_mandi_edit', $data);
  }

  function update_kamar_mandi() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'nama' => $this->input->post('nama'),
    'gambar' => $this->input->post('gambar'),
    'harga' => $this->input->post('harga'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_kamar_mandi($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_kamar_mandi"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_kamar_mandi"</script>';
        }

  }

  function delete_kamar_mandi($id) {
    $delete = $this->My_model->delete_kamar_mandi($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_kamar_mandi"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_kamar_mandi"</script>';
        }
  }

  function add_kamar_mandi() {
      $admin = $this->My_model->kamar_mandi()->result();
      $data = array('kamar_mandi' => $admin);
      $this->load->view('admin/input/input_kamar_mandi', $data);
    }

  function input_kamar_mandi() {

    $data = array(
      'nama' => $this->input->post('nama'),
      'gambar' => $this->input->post('gambar'),
      'harga' => $this->input->post('harga'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_kamar_mandi($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_kamar_mandi"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_kamar_mandi"</script>';
    }
  }

  /* END OF ADMIN KAMAR MANDI*/

  /* ADMIN KAMAR TIDUR */

  function a_kamar_tidur() {
    $kamar_tidur = $this->My_model->kamar_tidur()->result();
    $data = array('kamar_tidur' => $kamar_tidur);
    $this->load->view('admin/adm_kamar_tidur',$data);
  }

  function edit_kamar_tidur($id) {
    $about = $this->My_model->get_kamar_tidur($id);
    $data = array('kamar_tidur' => $about);
    $this->load->view('admin/edit/kamar_tidur_edit', $data);
  }

  function update_kamar_tidur() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'nama' => $this->input->post('nama'),
    'gambar' => $this->input->post('gambar'),
    'harga' => $this->input->post('harga'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_kamar_tidur($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_kamar_tidur"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_kamar_tidur"</script>';
        }

  }

  function delete_kamar_tidur($id) {
    $delete = $this->My_model->delete_kamar_tidur($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_kamar_tidur"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_kamar_tidur"</script>';
        }
  }

  function add_kamar_tidur() {
      $admin = $this->My_model->kamar_tidur()->result();
      $data = array('kamar_tidur' => $admin);
      $this->load->view('admin/input/input_kamar_tidur', $data);
    }

  function input_kamar_tidur() {

    $data = array(
      'nama' => $this->input->post('nama'),
      'gambar' => $this->input->post('gambar'),
      'harga' => $this->input->post('harga'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_kamar_tidur($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_kamar_tidur"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_kamar_tidur"</script>';
    }
  }

  /* END OF ADMIN KAMAR TIDUR*/

  /* ADMIN HOME IMPROVEMENT */

  function a_home_improvement() {
    $home_improvement = $this->My_model->home_improvement()->result();
    $data = array('home_improvement' => $home_improvement);
    $this->load->view('admin/adm_home_improvement',$data);
  }

  function edit_home_improvement($id) {
    $about = $this->My_model->get_home_improvement($id);
    $data = array('home_improvement' => $about);
    $this->load->view('admin/edit/home_improvement_edit', $data);
  }

  function update_home_improvement() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'nama' => $this->input->post('nama'),
    'gambar' => $this->input->post('gambar'),
    'harga' => $this->input->post('harga'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_home_improvement($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_home_improvement"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_home_improvement"</script>';
        }

  }

  function delete_home_improvement($id) {
    $delete = $this->My_model->delete_home_improvement($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_home_improvement"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_home_improvement"</script>';
        }
  }

  function add_home_improvement() {
      $admin = $this->My_model->home_improvement()->result();
      $data = array('home_improvement' => $admin);
      $this->load->view('admin/input/input_home_improvement', $data);
    }

  function input_home_improvement() {

    $data = array(
      'nama' => $this->input->post('nama'),
      'gambar' => $this->input->post('gambar'),
      'harga' => $this->input->post('harga'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_home_improvement($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_home_improvement"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_home_improvement"</script>';
    }
  }

  /* END ADMIN HOME IMPROVEMENT */

  /* ADMIN DEKORASI */

  function a_dekorasi() {
    $dekorasi = $this->My_model->dekorasi()->result();
    $data = array('dekorasi' => $dekorasi);
    $this->load->view('admin/adm_dekorasi',$data);
  }

  function edit_dekorasi($id) {
    $about = $this->My_model->get_dekorasi($id);
    $data = array('dekorasi' => $about);
    $this->load->view('admin/edit/dekorasi_edit', $data);
  }

  function update_dekorasi() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'nama' => $this->input->post('nama'),
    'gambar' => $this->input->post('gambar'),
    'harga' => $this->input->post('harga'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_dekorasi($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_dekorasi"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_dekorasi"</script>';
        }

  }

  function delete_dekorasi($id) {
    $delete = $this->My_model->delete_dekorasi($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_dekorasi"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_dekorasi"</script>';
        }
  }

  function add_dekorasi() {
      $admin = $this->My_model->dekorasi()->result();
      $data = array('dekorasi' => $admin);
      $this->load->view('admin/input/input_dekorasi', $data);
    }

  function input_dekorasi() {

    $data = array(
      'nama' => $this->input->post('nama'),
      'gambar' => $this->input->post('gambar'),
      'harga' => $this->input->post('harga'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_dekorasi($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_dekorasi"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_dekorasi"</script>';
    }
  }

  /* END ADMIN DEKORASI */

  /* ADMIN RUANG MAKAN */

  function a_ruang_makan() {
    $ruang_makan = $this->My_model->ruang_makan()->result();
    $data = array('ruang_makan' => $ruang_makan);
    $this->load->view('admin/adm_ruang_makan',$data);
  }

  function edit_ruang_makan($id) {
    $about = $this->My_model->get_ruang_makan($id);
    $data = array('ruang_makan' => $about);
    $this->load->view('admin/edit/ruang_makan_edit', $data);
  }

  function update_ruang_makan() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'nama' => $this->input->post('nama'),
    'gambar' => $this->input->post('gambar'),
    'harga' => $this->input->post('harga'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_ruang_makan($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_ruang_makan"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_ruang_makan"</script>';
        }

  }

  function delete_ruang_makan($id) {
    $delete = $this->My_model->delete_ruang_makan($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_ruang_makan"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_ruang_makan"</script>';
        }
  }

  function add_ruang_makan() {
      $admin = $this->My_model->ruang_makan()->result();
      $data = array('ruang_makan' => $admin);
      $this->load->view('admin/input/input_ruang_makan', $data);
    }

  function input_ruang_makan() {

    $data = array(
      'nama' => $this->input->post('nama'),
      'gambar' => $this->input->post('gambar'),
      'harga' => $this->input->post('harga'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_ruang_makan($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_ruang_makan"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_ruang_makan"</script>';
    }
  }

  /* END RUANG MAKAN */

  /* ADMIN PERABOTAN */

  function a_perabotan() {
    $perabotan = $this->My_model->perabotan()->result();
    $data = array('perabotan' => $perabotan);
    $this->load->view('admin/adm_perabotan',$data);
  }

  function edit_perabotan($id) {
    $about = $this->My_model->get_perabotan($id);
    $data = array('perabotan' => $about);
    $this->load->view('admin/edit/perabotan_edit', $data);
  }

  function update_perabotan() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'nama' => $this->input->post('nama'),
    'gambar' => $this->input->post('gambar'),
    'harga' => $this->input->post('harga'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_perabotan($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_perabotan"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_perabotan"</script>';
        }

  }

  function delete_perabotan($id) {
    $delete = $this->My_model->delete_perabotan($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_perabotan"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_perabotan"</script>';
        }
  }

  function add_perabotan() {
      $admin = $this->My_model->perabotan()->result();
      $data = array('perabotan' => $admin);
      $this->load->view('admin/input/input_perabotan', $data);
    }

  function input_perabotan() {

    $data = array(
      'nama' => $this->input->post('nama'),
      'gambar' => $this->input->post('gambar'),
      'harga' => $this->input->post('harga'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_perabotan($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_perabotan"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_perabotan"</script>';
    }
  }

  /* END PERABOTAN */

  /* ADMIN RENOVASI */

  function a_renovasi() {
    $renovasi = $this->My_model->renovasi()->result();
    $data = array('renovasi' => $renovasi);
    $this->load->view('admin/adm_renovasi',$data);
  }

  function edit_renovasi($id) {
    $about = $this->My_model->get_renovasi($id);
    $data = array('renovasi' => $about);
    $this->load->view('admin/edit/renovasi_edit', $data);
  }

  function update_renovasi() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'renov_kategori' => $this->input->post('renov_kategori'),
    'img_renov' => $this->input->post('img_renov'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_renovasi($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_renovasi"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_renovasi"</script>';
        }

  }

  function delete_renovasi($id) {
    $delete = $this->My_model->delete_renovasi($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_renovasi"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_renovasi"</script>';
        }
  }


  /* END RENOVASI */

  /* ADMIN MENINGKAT RUMAH */

  function a_meningkat_rumah() {
    $meningkat_rumah = $this->My_model->meningkat_rumah()->result();
    $data = array('meningkat_rumah' => $meningkat_rumah);
    $this->load->view('admin/adm_meningkat_rumah',$data);
  }

  function edit_meningkat_rumah($id) {
    $about = $this->My_model->get_meningkat_rumah($id);
    $data = array('meningkat_rumah' => $about);
    $this->load->view('admin/edit/meningkat_rumah_edit', $data);
  }

  function update_meningkat_rumah() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'gambar' => $this->input->post('gambar'),
    'deskripsi' => $this->input->post('deskripsi'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_meningkat_rumah($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_meningkat_rumah"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_meningkat_rumah"</script>';
        }

  }

  function delete_meningkat_rumah($id) {
    $delete = $this->My_model->delete_meningkat_rumah($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_meningkat_rumah"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_meningkat_rumah"</script>';
        }
  }

  function add_meningkat_rumah() {
      $admin = $this->My_model->meningkat_rumah()->result();
      $data = array('meningkat_rumah' => $admin);
      $this->load->view('admin/input/input_meningkat_rumah', $data);
    }

  function input_meningkat_rumah() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'gambar' => $this->input->post('gambar'),
      'deskripsi' => $this->input->post('deskripsi'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_meningkat_rumah($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_meningkat_rumah"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_meningkat_rumah"</script>';
    }
  }

  /* END MENINGKAT RUMAH */

  /* ADMIN MEMBUAT DAK */

  function a_membuat_dak() {
    $membuat_dak = $this->My_model->membuat_dak()->result();
    $data = array('membuat_dak' => $membuat_dak);
    $this->load->view('admin/adm_membuat_dak',$data);
  }

  function edit_membuat_dak($id) {
    $about = $this->My_model->get_membuat_dak($id);
    $data = array('membuat_dak' => $about);
    $this->load->view('admin/edit/membuat_dak_edit', $data);
  }

  function update_membuat_dak() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'gambar' => $this->input->post('gambar'),
    'deskripsi' => $this->input->post('deskripsi'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_membuat_dak($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_membuat_dak"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_membuat_dak"</script>';
        }

  }

  function delete_membuat_dak($id) {
    $delete = $this->My_model->delete_membuat_dak($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_membuat_dak"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_membuat_dak"</script>';
        }
  }

  function add_membuat_dak() {
      $admin = $this->My_model->membuat_dak()->result();
      $data = array('membuat_dak' => $admin);
      $this->load->view('admin/input/input_membuat_dak', $data);
    }

  function input_membuat_dak() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'gambar' => $this->input->post('gambar'),
      'deskripsi' => $this->input->post('deskripsi'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_membuat_dak($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_membuat_dak"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_membuat_dak"</script>';
    }
  }

  /* END MEMBUAT DAK */

  /* ADMIN PERBAIKAN GENTENG */

  function a_perbaikan_genteng() {
    $perbaikan_genteng = $this->My_model->perbaikan_genteng()->result();
    $data = array('perbaikan_genteng' => $perbaikan_genteng);
    $this->load->view('admin/adm_perbaikan_genteng',$data);
  }

  function edit_perbaikan_genteng($id) {
    $about = $this->My_model->get_perbaikan_genteng($id);
    $data = array('perbaikan_genteng' => $about);
    $this->load->view('admin/edit/perbaikan_genteng_edit', $data);
  }

  function update_perbaikan_genteng() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'gambar' => $this->input->post('gambar'),
    'deskripsi' => $this->input->post('deskripsi'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_perbaikan_genteng($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_perbaikan_genteng"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_perbaikan_genteng"</script>';
        }

  }

  function delete_perbaikan_genteng($id) {
    $delete = $this->My_model->delete_perbaikan_genteng($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_perbaikan_genteng"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_perbaikan_genteng"</script>';
        }
  }

  function add_perbaikan_genteng() {
      $admin = $this->My_model->perbaikan_genteng()->result();
      $data = array('perbaikan_genteng' => $admin);
      $this->load->view('admin/input/input_perbaikan_genteng', $data);
    }

  function input_perbaikan_genteng() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'gambar' => $this->input->post('gambar'),
      'deskripsi' => $this->input->post('deskripsi'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_perbaikan_genteng($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_perbaikan_genteng"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_perbaikan_genteng"</script>';
    }
  }

  /* END PERBAIKAN GENTENG*/

  /* ADMIN PENGECATAN */

  function a_pengecatan() {
    $pengecatan = $this->My_model->pengecatan()->result();
    $data = array('pengecatan' => $pengecatan);
    $this->load->view('admin/adm_pengecatan',$data);
  }

  function edit_pengecatan($id) {
    $about = $this->My_model->get_pengecatan($id);
    $data = array('pengecatan' => $about);
    $this->load->view('admin/edit/pengecatan_edit', $data);
  }

  function update_pengecatan() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'gambar' => $this->input->post('gambar'),
    'deskripsi' => $this->input->post('deskripsi'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_pengecatan($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_pengecatan"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_pengecatan"</script>';
        }

  }

  function delete_pengecatan($id) {
    $delete = $this->My_model->delete_pengecatan($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_pengecatan"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_pengecatan"</script>';
        }
  }

  function add_pengecatan() {
      $admin = $this->My_model->pengecatan()->result();
      $data = array('pengecatan' => $admin);
      $this->load->view('admin/input/input_pengecatan', $data);
    }

  function input_pengecatan() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'gambar' => $this->input->post('gambar'),
      'deskripsi' => $this->input->post('deskripsi'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_pengecatan($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_pengecatan"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_pengecatan"</script>';
    }
  }

  /* END PENGECATAN*/

  /* ADMIN PEKERJAAN INTERIOR */

  function a_pekerjaan_interior() {
    $pekerjaan_interior = $this->My_model->pekerjaan_interior()->result();
    $data = array('pekerjaan_interior' => $pekerjaan_interior);
    $this->load->view('admin/adm_pekerjaam_interior',$data);
  }

  function edit_pekerjaan_interior($id) {
    $about = $this->My_model->get_pekerjaan_interior($id);
    $data = array('pekerjaan_interior' => $about);
    $this->load->view('admin/edit/pekerjaan_interior_edit', $data);
  }

  function update_pekerjaan_interior() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'gambar' => $this->input->post('gambar'),
    'deskripsi' => $this->input->post('deskripsi'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_pekerjaan_interior($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_pekerjaan_interior"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_pekerjaan_interior"</script>';
        }

  }

  function delete_pekerjaan_interior($id) {
    $delete = $this->My_model->delete_pekerjaan_interior($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_pekerjaan_interior"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_pekerjaan_interior"</script>';
        }
  }

  function add_pekerjaan_interior() {
      $admin = $this->My_model->meningkat_rumah()->result();
      $data = array('pekerjaan_interior' => $admin);
      $this->load->view('admin/input/input_pekerjaan_interior', $data);
    }

  function input_pekerjaan_interior() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'gambar' => $this->input->post('gambar'),
      'deskripsi' => $this->input->post('deskripsi'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_pekerjaan_interior($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_pekerjaan_interior"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_pekerjaan_interior"</script>';
    }
  }

  /* END PEKERJAAN INTERIOR*/

  /* ADMIN MENAMBAH RUANGAN */

  function a_menambah_ruangan() {
    $menambah_ruangan = $this->My_model->menambah_ruangan()->result();
    $data = array('menambah_ruangan' => $menambah_ruangan);
    $this->load->view('admin/adm_menambah_ruangan',$data);
  }

  function edit_menambah_ruangan($id) {
    $about = $this->My_model->get_menambah_ruangan($id);
    $data = array('menambah_ruangan' => $about);
    $this->load->view('admin/edit/menambah_ruangan_edit', $data);
  }

  function update_menambah_ruangan() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'gambar' => $this->input->post('gambar'),
    'deskripsi' => $this->input->post('deskripsi'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_menambah_ruangan($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_menambah_ruangan"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_menambah_ruangan"</script>';
        }

  }

  function delete_menambah_ruangan($id) {
    $delete = $this->My_model->delete_menambah_ruangan($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_menambah_ruangan"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_menambah_ruangan"</script>';
        }
  }

  function add_menambah_ruangan() {
      $admin = $this->My_model->menambah_ruangan()->result();
      $data = array('menambah_ruangan' => $admin);
      $this->load->view('admin/input/input_menambah_ruangan', $data);
    }

  function input_menambah_ruangan() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'gambar' => $this->input->post('gambar'),
      'deskripsi' => $this->input->post('deskripsi'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_menambah_ruangan($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_menambah_ruangan"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_menambah_ruangan"</script>';
    }
  }

  /* END MENAMBAH RUANGAN*/

  /* ADMIN MEMBANGUN */

  function a_membangun() {
    $membangun = $this->My_model->membangun()->result();
    $data = array('membangun' => $membangun);
    $this->load->view('admin/adm_membangun',$data);
  }

  function edit_membangun($id) {
    $about = $this->My_model->get_membangun($id);
    $data = array('membangun' => $about);
    $this->load->view('admin/edit/membangun_edit', $data);
  }

  function update_membangun() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id_membangun");
  $data = array(
    'm_kategori' => $this->input->post('m_kategori'),
    'img_membangun' => $this->input->post('img_membangun'),
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_membangun($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_membangun"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_membangun"</script>';
        }

  }

  function delete_membangun($id) {
    $delete = $this->My_model->delete_membangun($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_membangun"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_membangun"</script>';
        }
  }

  /* END MEMBANGUN*/

  /* ADMIN MEMBANGUN RUMAH */

  function a_membangun_rumah() {
    $membangun_rumah = $this->My_model->membangun_rumah()->result();
    $data = array('membangun_rumah' => $membangun_rumah);
    $this->load->view('admin/adm_membangun_rumah',$data);
  }

  function edit_membangun_rumah($id) {
    $about = $this->My_model->get_membangun_rumah($id);
    $data = array('membangun_rumah' => $about);
    $this->load->view('admin/edit/rumah_edit', $data);
  }

  function update_membangun_rumah() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'gambar' => $this->input->post('gambar'),
    'deskripsi' => $this->input->post('deskripsi')
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_membangun_rumah($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_membangun_rumah"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_membangun_rumah"</script>';
        }

  }

  function delete_membangun_rumah($id) {
    $delete = $this->My_model->delete_membangun_rumah($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_membangun_rumah"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_membangun_rumah"</script>';
        }
  }

  function add_membangun_rumah() {
      $admin = $this->My_model->membangun_rumah()->result();
      $data = array('membangun_rumah' => $admin);
      $this->load->view('admin/input/input_membangun_rumah', $data);
    }

  function input_membangun_rumah() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'gambar' => $this->input->post('gambar'),
      'deskripsi' => $this->input->post('deskripsi'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_membangun_rumah($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_membangun_rumah"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_membangun_rumah"</script>';
    }
  }

  /* END MEMBANGUN RUMAH*/

  /* ADMIN MEMBANGUN KOST */

  function a_kost() {
    $kost = $this->My_model->kost()->result();
    $data = array('kost' => $kost);
    $this->load->view('admin/adm_kost',$data);
  }

  function edit_kost($id) {
    $about = $this->My_model->get_kost($id);
    $data = array('kost' => $about);
    $this->load->view('admin/edit/kost_edit', $data);
  }

  function update_kost() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'gambar' => $this->input->post('gambar'),
    'deskripsi' => $this->input->post('deskripsi')
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_kost($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_kost"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_kost"</script>';
        }

  }

  function delete_kost($id) {
    $delete = $this->My_model->delete_kost($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_kost"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_kost"</script>';
        }
  }

  function add_kost() {
      $admin = $this->My_model->kost()->result();
      $data = array('kost' => $admin);
      $this->load->view('admin/input/input_kost', $data);
    }

  function input_kost() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'gambar' => $this->input->post('gambar'),
      'deskripsi' => $this->input->post('deskripsi'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_kost($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_kost"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_kost"</script>';
    }
  }

  /* END MEMBANGUN KOST*/

  /* ADMIN MEMBANGUN RUKO */

  function a_membangun_ruko() {
    $membangun_ruko = $this->My_model->membangun_ruko()->result();
    $data = array('membangun_ruko' => $membangun_ruko);
    $this->load->view('admin/adm_membangun_ruko',$data);
  }

  function edit_membangun_ruko($id) {
    $about = $this->My_model->get_membangun_ruko($id);
    $data = array('membangun_ruko' => $about);
    $this->load->view('admin/edit/ruko_edit', $data);
  }

  function update_membangun_ruko() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'gambar' => $this->input->post('gambar'),
    'deskripsi' => $this->input->post('deskripsi')
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_membangun_ruko($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_membangun_ruko"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_membangun_ruko"</script>';
        }

  }

  function delete_membangun_ruko($id) {
    $delete = $this->My_model->delete_membangun_ruko($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_membangun_ruko"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_membangun_ruko"</script>';
        }
  }

  function add_membangun_ruko() {
      $admin = $this->My_model->membangun_ruko()->result();
      $data = array('membangun_ruko' => $admin);
      $this->load->view('admin/input/input_membangun_ruko', $data);
    }

  function input_membangun_ruko() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'gambar' => $this->input->post('gambar'),
      'deskripsi' => $this->input->post('deskripsi'),
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_membangun_ruko($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_membangun_ruko"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_membangun_ruko"</script>';
    }
  }

  /* END MEMBANGUN RUKO*/

  /* ADMIN TESTIMONIAL */

  function a_testimonial() {
    $testimonial = $this->My_model->testimonial()->result();
    $data = array('testimonial' => $testimonial);
    $this->load->view('admin/adm_testimonial',$data);
  }

  function edit_testimonial($id) {
    $about = $this->My_model->get_testimonial($id);
    $data = array('testimonial' => $about);
    $this->load->view('admin/edit/testimonial_edit', $data);
  }

  function update_testimonial() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'nama' => $this->input->post('nama'),
    'foto' => $this->input->post('foto'),
    'profesi' => $this->input->post('profesi'),
    'caption' => $this->input->post('caption')
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_testimonial($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_testimonial"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_testimonial"</script>';
        }

  }

  function delete_testimonial($id) {
    $delete = $this->My_model->delete_testimonial($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_testimonial"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_testimonial"</script>';
        }
  }

  function add_testimonial() {
      $admin = $this->My_model->testimonial()->result();
      $data = array('testimonial' => $admin);
      $this->load->view('admin/input/input_testimonial', $data);
    }

  function input_testimonial() {

    $data = array(
      'nama' => $this->input->post('nama'),
      'foto' => $this->input->post('foto'),
      'profesi' => $this->input->post('profesi'),
      'caption' => $this->input->post('caption')
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_testimonial($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_testimonial"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_testimonial"</script>';
    }
  }

  /* END TESTIMONIAL*/

  /* ADMIN PORTFOLIO RUMAH */

  function a_rumah() {
    $rumah = $this->My_model->rumah()->result();
    $data = array('rumah' => $rumah);
    $this->load->view('admin/adm_testimonial_rumah',$data);
  }
  function edit_rumah($id) {
    $about = $this->My_model->get_rumah($id);
    $data = array('rumah' => $about);
    $this->load->view('admin/edit/portfolio_rumah_edit', $data);
  }

  function update_rumah() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'foto' => $this->input->post('foto'),
    'deskripsi' => $this->input->post('deskripsi')
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_rumah($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_rumah"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_rumah"</script>';
        }

  }

  function delete_rumah($id) {
    $delete = $this->My_model->delete_rumah($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_rumah"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_rumah"</script>';
        }
  }

  function add_rumah() {
      $admin = $this->My_model->rumah()->result();
      $data = array('rumah' => $admin);
      $this->load->view('admin/input/input_rumah', $data);
    }

  function input_rumah() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'foto' => $this->input->post('foto'),
      'deskripsi' => $this->input->post('deskripsi')
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_rumah($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_rumah"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_rumah"</script>';
    }
  }

  /* END PORTFOLIO RUMAH*/

  /* ADMIN PORTFOLIO RUKO */

  function a_ruko() {
    $ruko = $this->My_model->ruko()->result();
    $data = array('ruko' => $ruko);
    $this->load->view('admin/adm_testimonial_ruko',$data);
  }

  function edit_ruko($id) {
    $about = $this->My_model->get_ruko($id);
    $data = array('ruko' => $about);
    $this->load->view('admin/edit/portfolio_ruko_edit', $data);
  }

  function update_ruko() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'foto' => $this->input->post('foto'),
    'deskripsi' => $this->input->post('deskripsi')
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_ruko($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_ruko"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_ruko"</script>';
        }

  }

  function delete_ruko($id) {
    $delete = $this->My_model->delete_ruko($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_ruko"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_ruko"</script>';
        }
  }

  function add_ruko() {
      $admin = $this->My_model->ruko()->result();
      $data = array('ruko' => $admin);
      $this->load->view('admin/input/input_ruko', $data);
    }

  function input_ruko() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'foto' => $this->input->post('foto'),
      'deskripsi' => $this->input->post('deskripsi')
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_ruko($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_ruko"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_ruko"</script>';
    }
  }

  /* END PORTFOLIO RUKO*/

  /* ADMIN PORTFOLIO INTERIOR */

  function a_interior() {
    $interior = $this->My_model->interior()->result();
    $data = array('interior' => $interior);
    $this->load->view('admin/adm_testimonial_interior',$data);
  }

  function edit_interior($id) {
    $about = $this->My_model->get_interior($id);
    $data = array('interior' => $about);
    $this->load->view('admin/edit/portfolio_interior_edit', $data);
  }

  function update_interior() {

    /*var_dump($_FILES);
    exit();*/

  $id = $this->input->post("id");
  $data = array(
    'judul' => $this->input->post('judul'),
    'foto' => $this->input->post('foto'),
    'deskripsi' => $this->input->post('deskripsi')
  );

  //var_dump($data);
  //die();

  $simpan = $this->My_model->update_interior($id,$data);
    if($simpan){
            echo "<script>alert('Berhasil disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_interior"</script>';
        }else{
            echo "<script>alert('Gagal disimpan !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_interior"</script>';
        }

  }

  function delete_interior($id) {
    $delete = $this->My_model->delete_interior($id);
    if($delete){
            echo "<script>alert('Berhasil dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/a_interior"</script>';
        }else{
            echo "<script>alert('Gagal dihapus !!')</script>";
            echo '<script>window.location.href="'.base_url().'home/edit_interi"</script>';
        }
  }


  function add_interior() {
      $admin = $this->My_model->interior()->result();
      $data = array('interior' => $admin);
      $this->load->view('admin/input/input_interior', $data);
    }

  function input_interior() {

    $data = array(
      'judul' => $this->input->post('judul'),
      'foto' => $this->input->post('foto'),
      'deskripsi' => $this->input->post('deskripsi')
    );

    // var_dump($data);
    // die():

  $simpan = $this->My_model->input_interior($data);
    if($simpan){
        echo "<script>alert('Berhasil disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/a_interior"</script>';
    }else{
        echo "<script>alert('Gagal disimpan !!')</script>";
        echo '<script>window.location.href="'.base_url().'home/input_interior"</script>';
    }
  }

  /* END PORTFOLIO INTERIOR*/

}

 ?>
