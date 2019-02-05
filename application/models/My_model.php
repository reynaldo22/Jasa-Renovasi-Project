<?php

  class My_model extends CI_Model {

    function about() {
      return $this->db->get('about');
    }

    function testimonial() {
      return $this->db->get('testimonial');
    }

    function rumah() {
      return $this->db->get('rumah');
    }

    function ruko() {
      return $this->db->get('ruko');
    }

    function interior() {
      return $this->db->get('interior');
    }

    function furniture() {
      return $this->db->get('furniture');
    }

    function renovasi() {
      return $this->db->get('renovasi');
    }

    function membangun() {
      return $this->db->get('membangun');
    }

    function ruang_tamu() {
      return $this->db->get('ruang_tamu');
    }

    function ruang_kerja() {
      return $this->db->get('ruang_kerja');
    }

    function kamar_mandi() {
      return $this->db->get('kamar_mandi');
    }

    function kamar_tidur() {
      return $this->db->get('kamar_tidur');
    }

    function home_improvement() {
      return $this->db->get('home_improvement');
    }

    function dekorasi() {
      return $this->db->get('dekorasi');
    }

    function ruang_makan() {
      return $this->db->get('ruang_makan');
    }

    function perabotan() {
      return $this->db->get('perabotan');
    }

    function meningkat_rumah() {
      return $this->db->get('meningkat_rumah');
    }

    function membuat_dak() {
      return $this->db->get('membuat_dak');
    }

    function perbaikan_genteng() {
      return $this->db->get('perbaikan_genteng');
    }

    function pengecatan() {
      return $this->db->get('pengecatan');
    }

    function pekerjaan_interior() {
      return $this->db->get('pekerjaan_interior');
    }

    function menambah_ruangan() {
      return $this->db->get('menambah_ruangan');
    }

    function membangun_rumah() {
      return $this->db->get('membangun_rumah');
    }

    function kost() {
      return $this->db->get('kost');
    }

    function membangun_ruko() {
      return $this->db->get('membangun_ruko');
    }

    /* Admin */

/* ADMIN ABOUT */
    function get_about($id) {
      $this->db->where("id", $id);
      return $this->db->get('about')->row();
    }

    function update_about($id,$data) {
      $this->db->where('id', $id);
      return $this->db->update('about', $data);
    }

    function delete_about($id) {
      $this->db->where('id', $id);
      return $this->db->delete('about');
    }

    /* END ADMIN ABOUT */

    /* ADMIN FURNITURE */
        function get_furniture($id) {
          $this->db->where("id_furniture", $id);
          return $this->db->get('furniture')->row();
        }

        function update_furniture($id,$data) {
          $this->db->where('id_furniture', $id);
          return $this->db->update('furniture', $data);
        }

        function delete_furniture($id) {
          $this->db->where('id_furniture', $id);
          return $this->db->delete('furniture');
        }

        /* END ADMIN FURNITURE */

  /* ADMIN RUANG TAMU */
      function get_ruang_tamu($id) {
        $this->db->where("id", $id);
        return $this->db->get('ruang_tamu')->row();
      }

      function update_ruang_tamu($id,$data) {
        $this->db->where('id', $id);
        return $this->db->update('ruang_tamu', $data);
      }

      function delete_ruang_tamu($id) {
        $this->db->where('id', $id);
        return $this->db->delete('ruang_tamu');
      }

      function input_ruang_tamu($data) {
        return $this->db->insert('ruang_tamu', $data);
      }

      /* END ADMIN RUANG TAMU */

/* ADMIN RUANG KERJA */
    function get_ruang_kerja($id) {
      $this->db->where("id", $id);
      return $this->db->get('ruang_kerja')->row();
    }

    function update_ruang_kerja($id,$data) {
      $this->db->where('id', $id);
      return $this->db->update('ruang_kerja', $data);
    }

    function delete_ruang_kerja($id) {
      $this->db->where('id', $id);
      return $this->db->delete('ruang_kerja');
    }

    function input_ruang_kerja($data) {
      return $this->db->insert('ruang_kerja', $data);
    }

    /* END ADMIN RUANG KERJA */

/* ADMIN kamar mandi */
    function get_kamar_mandi($id) {
      $this->db->where("id", $id);
      return $this->db->get('kamar_mandi')->row();
    }

    function update_kamar_mandi($id,$data) {
      $this->db->where('id', $id);
      return $this->db->update('kamar_mandi', $data);
    }

    function delete_kamar_mandi($id) {
      $this->db->where('id', $id);
      return $this->db->delete('kamar_mandi');
    }

    function input_kamar_mandi($data) {
      return $this->db->insert('kamar_mandi', $data);
    }

    /* END ADMIN kamar mandi */

/* ADMIN kamar tidur */
    function get_kamar_tidur($id) {
      $this->db->where("id", $id);
      return $this->db->get('kamar_tidur')->row();
    }

    function update_kamar_tidur($id,$data) {
      $this->db->where('id', $id);
      return $this->db->update('kamar_tidur', $data);
    }

    function delete_kamar_tidur($id) {
      $this->db->where('id', $id);
      return $this->db->delete('kamar_tidur');
    }

    function input_kamar_tidur($data) {
      return $this->db->insert('kamar_tidur', $data);
    }

    /* END ADMIN kamar tidur */

/* ADMIN HOME IMPROVEMENT */
    function get_home_improvement($id) {
      $this->db->where("id", $id);
      return $this->db->get('home_improvement')->row();
    }

    function update_home_improvement($id,$data) {
      $this->db->where('id', $id);
      return $this->db->update('home_improvement', $data);
    }

    function delete_home_improvement($id) {
      $this->db->where('id', $id);
      return $this->db->delete('home_improvement');
    }

    function input_home_improvement($data) {
      return $this->db->insert('home_improvement', $data);
    }

    /* END ADMIN HOME IMPROVEMENT */

/* ADMIN DEKORASI */
  function get_dekorasi($id) {
    $this->db->where("id", $id);
    return $this->db->get('dekorasi')->row();
  }

  function update_dekorasi($id,$data) {
    $this->db->where('id', $id);
    return $this->db->update('dekorasi', $data);
  }

  function delete_dekorasi($id) {
    $this->db->where('id', $id);
    return $this->db->delete('dekorasi');
  }

  function input_dekorasi($data) {
    return $this->db->insert('dekorasi', $data);
  }

  /* END ADMIN DEKORASI */

  /* ADMIN RUANG MAKAN */
    function get_ruang_makan($id) {
      $this->db->where("id", $id);
      return $this->db->get('ruang_makan')->row();
    }

    function update_ruang_makan($id,$data) {
      $this->db->where('id', $id);
      return $this->db->update('ruang_makan', $data);
    }

    function delete_ruang_makan($id) {
      $this->db->where('id', $id);
      return $this->db->delete('ruang_makan');
    }

    function input_ruang_makan($data) {
      return $this->db->insert('ruang_makan', $data);
    }

    /* END ADMIN RUANG MAKAN */

  /* ADMIN PERABOTAN */
    function get_perabotan($id) {
      $this->db->where("id", $id);
      return $this->db->get('perabotan')->row();
    }

    function update_perabotan($id,$data) {
      $this->db->where('id', $id);
      return $this->db->update('perabotan', $data);
    }

    function delete_perabotan($id) {
      $this->db->where('id', $id);
      return $this->db->delete('perabotan');
    }

    function input_perabotan($data) {
      return $this->db->insert('perabotan', $data);
    }

    /* END ADMIN PERABOTAN */

/* ADMIN RENOVASI */
  function get_renovasi($id) {
    $this->db->where("id", $id);
    return $this->db->get('renovasi')->row();
  }

  function update_renovasi($id,$data) {
    $this->db->where('id', $id);
    return $this->db->update('renovasi', $data);
  }

  function delete_renovasi($id) {
    $this->db->where('id', $id);
    return $this->db->delete('renovasi');
  }

  /* END ADMIN RENOVASI */

  /* ADMIN MENINGKAT RUMAH */
    function get_meningkat_rumah($id) {
      $this->db->where("id", $id);
      return $this->db->get('meningkat_rumah')->row();
    }

    function update_meningkat_rumah($id,$data) {
      $this->db->where('id', $id);
      return $this->db->update('meningkat_rumah', $data);
    }

    function delete_meningkat_rumah($id) {
      $this->db->where('id', $id);
      return $this->db->delete('meningkat_rumah');
    }

    function input_meningkat_rumah($data) {
      return $this->db->insert('meningkat_rumah', $data);
    }

    /* END ADMIN MENINGKAT RUMAH */

/* ADMIN MEMBUAT DAK */
function get_membuat_dak($id) {
  $this->db->where("id", $id);
  return $this->db->get('membuat_dak')->row();
}

function update_membuat_dak($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('membuat_dak', $data);
}

function delete_membuat_dak($id) {
  $this->db->where('id', $id);
  return $this->db->delete('membuat_dak');
}

function input_membuat_dak($data) {
  return $this->db->insert('membuat_dak', $data);
}

/* END ADMIN MEMBUAT DAK */

/* ADMIN PERBAIKAN GENTENG */
function get_perbaikan_genteng($id) {
  $this->db->where("id", $id);
  return $this->db->get('perbaikan_genteng')->row();
}

function update_perbaikan_genteng($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('perbaikan_genteng', $data);
}

function delete_perbaikan_genteng($id) {
  $this->db->where('id', $id);
  return $this->db->delete('perbaikan_genteng');
}

function input_perbaikan_genteng($data) {
  return $this->db->insert('perbaikan_genteng', $data);
}

/* END ADMIN PERBAIKAN GENTENG */

/* ADMIN PENGECATAN */
function get_pengecatan($id) {
  $this->db->where("id", $id);
  return $this->db->get('pengecatan')->row();
}

function update_pengecatan($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('pengecatan', $data);
}

function delete_pengecatan($id) {
  $this->db->where('id', $id);
  return $this->db->delete('pengecatan');
}

function input_pengecatan($data) {
  return $this->db->insert('pengecatan', $data);
}

/* END ADMIN PENGECATAN */

/* ADMIN PEKERJAAN INTERIOR */
function get_pekerjaan_interior($id) {
  $this->db->where("id", $id);
  return $this->db->get('pekerjaan_interior')->row();
}

function update_pekerjaan_interior($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('pekerjaan_interior', $data);
}

function delete_pekerjaan_interior($id) {
  $this->db->where('id', $id);
  return $this->db->delete('pekerjaan_interior');
}

function input_pekerjaan_interior($data) {
  return $this->db->insert('pekerjaan_interior', $data);
}

/* END ADMIN PEKERJAAN INTERIOR */

/* ADMIN MENAMBAH RUANGAN */
function get_menambah_ruangan($id) {
  $this->db->where("id", $id);
  return $this->db->get('menambah_ruangan')->row();
}

function update_menambah_ruangan($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('menambah_ruangan', $data);
}

function delete_menambah_ruangan($id) {
  $this->db->where('id', $id);
  return $this->db->delete('menambah_ruangan');
}

function input_menambah_ruangan($data) {
  return $this->db->insert('menambah_ruangan', $data);
}

/* END ADMIN MENAMBAH RUANGAN */

/* ADMIN MEMBANGUN */
function get_membangun($id) {
  $this->db->where("id_membangun", $id);
  return $this->db->get('membangun')->row();
}

function update_membangun($id,$data) {
  $this->db->where('id_membangun', $id);
  return $this->db->update('membangun', $data);
}

function delete_membangun($id) {
  $this->db->where('id_membangun', $id);
  return $this->db->delete('membangun');
}

/* END ADMIN MEMBANGUN */

/* ADMIN RUMAH */
function get_membangun_rumah($id) {
  $this->db->where("id", $id);
  return $this->db->get('membangun_rumah')->row();
}

function update_membangun_rumah($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('membangun_rumah', $data);
}

function delete_membangun_rumah($id) {
  $this->db->where('id', $id);
  return $this->db->delete('membangun_rumah');
}

function input_membangun_rumah($data) {
  return $this->db->insert('membangun_rumah', $data);
}

/* END ADMIN RUMAH */

/* ADMIN KOST */
function get_kost($id) {
  $this->db->where("id", $id);
  return $this->db->get('kost')->row();
}

function update_kost($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('kost', $data);
}

function delete_kost($id) {
  $this->db->where('id', $id);
  return $this->db->delete('kost');
}

function input_kost($data) {
  return $this->db->insert('kost', $data);
}

/* END ADMIN KOST */

/* ADMIN RUKO */
function get_membangun_ruko($id) {
  $this->db->where("id", $id);
  return $this->db->get('membangun_ruko')->row();
}

function update_membangun_ruko($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('membangun_ruko', $data);
}

function delete_membangun_ruko($id) {
  $this->db->where('id', $id);
  return $this->db->delete('membangun_ruko');
}

function input_membangun_ruko($data) {
  return $this->db->insert('membangun_ruko', $data);
}

/* END ADMIN RUKO */

/* ADMIN TESTIMONIAL */
function get_testimonial($id) {
  $this->db->where("id", $id);
  return $this->db->get('testimonial')->row();
}

function update_testimonial($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('testimonial', $data);
}

function delete_testimonial($id) {
  $this->db->where('id', $id);
  return $this->db->delete('testimonial');
}

function input_testimonial($data) {
  return $this->db->insert('testimonial', $data);
}

/* END ADMIN TESTIMONIAL */

/* ADMIN PORTFOLIO RUMAH */
function get_rumah($id) {
  $this->db->where("id", $id);
  return $this->db->get('rumah')->row();
}

function update_rumah($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('rumah', $data);
}

function delete_rumah($id) {
  $this->db->where('id', $id);
  return $this->db->delete('rumah');
}

function input_rumah($data) {
  return $this->db->insert('rumah', $data);
}

/* END ADMIN PORTFOLIO RUMAH */

/* ADMIN PORTFOLIO RUKO */
function get_ruko($id) {
  $this->db->where("id", $id);
  return $this->db->get('ruko')->row();
}

function update_ruko($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('ruko', $data);
}

function delete_ruko($id) {
  $this->db->where('id', $id);
  return $this->db->delete('ruko');
}

function input_ruko($data) {
  return $this->db->insert('ruko', $data);
}

/* END ADMIN PORTFOLIO RUKO */

/* ADMIN PORTFOLIO INTERIOR */
function get_interior($id) {
  $this->db->where("id", $id);
  return $this->db->get('interior')->row();
}

function update_interior($id,$data) {
  $this->db->where('id', $id);
  return $this->db->update('interior', $data);
}

function delete_interior($id) {
  $this->db->where('id', $id);
  return $this->db->delete('interior');
}

function input_interior($data) {
  return $this->db->insert('interior', $data);
}

/* END ADMIN PORTFOLIO INTERIOR */

  }

 ?>
