<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Scombobox extends CI_Model
{
    var $tabel = 'siswa';  
    function __construct(){
        parent:: __construct();

    }
      function prosespeminjaman(){
        $id_pinjam = $this->id_pinjam();
    $data_pinjam = array(
    'pb_id' => $this->id_pinjam(),
    'user_id' => 'admin',
    'pb_tgl' => date('Y:m:d H:i:s'),
    'pb_no_siswa' => $this->input->post('nisn'),
    'pb_nama_siswa' => $this->input->post('nm_siswa'),
    'pb_harus_kembali_tgl' => $this->input->post('tgl_haruskembali'),
    'pb_stat' => '1'
);
$this->db->insert('tm_peminjaman',$data_pinjam);

foreach ($_POST['brg_kode'] as $b => $kode_brg){
    $data_detail = array(
        'pbd_id' => $this->detail_id_pinjam($id_pinjam,$b),
        'pb_id' => $id_pinjam,
        'br_kode' => $kode_brg,
        'pdb_tgl' => date('Y:m:d H:i:s'),
        'pdb_sts' => '1'
    );
    $this->db->insert('td_peminjaman_barang',$data_detail);
    }
}
    function id_pinjam(){
        $tahun_skg = date('Y');
        $bulan_skg = date('m');
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(pb_id,10,3)),0) + 1 As no_urut FROM tm_peminjaman WHERE
             SUBSTRING(pb_id,3,4) = '".$tahun_skg."'");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_pinjam = 'PJ'.$tahun_skg.$bulan_skg.sprintf("%03s",$no_urut);

        return $id_pinjam;
    }
     function detail_id_pinjam($id_pinjam,$b){
       $pb_id = $id_pinjam;
            $detail_id = substr($pb_id, 11, 3);
            $id_detail = $detail_id + $b + 1;
            $hasiliddetail = $pb_id.sprintf("%'.03d",$id_detail);

            return $hasiliddetail;
    }
    function  get_siswanisn() {  //funtion menampilkan semua data
        return $this->db->query("SELECT * FROM siswa WHERE siswa_sts = 0 ");
        // $nisn = 0;
        // $this->db->select('*');
        // $this->db->from($this->tabel);
        // $this->db->where('nisn',$nisn);
        
        // $query = $this->db->get();
        // if ($query->num_rows() > 0) {
        //     return $query->result();
        // }
    }
 
    function get_nama_bynisn($state){  //funtion menampilkan kota berdasarkan nisn
        $this->db->select('nm_siswa');
        $this->db->where('nisn',$state);
        $query = $this->db->get($this->tabel);
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return FALSE;
        }
    }
     function get_nisn_bynama($state){  //funtion menampilkan kota berdasarkan nama
        $this->db->select('nisn');
        $this->db->where('nm_siswa',$state);
        $query = $this->db->get($this->tabel);
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return FALSE;
        }
    }
  
}

/* End of file Provinsi_model.php */
/* Location: ./application/models/Provinsi_model.php */
?>