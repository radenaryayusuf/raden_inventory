<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_pengembalian extends CI_Model
{
    var $tabel = 'td_peminjaman_barang';  
    function __construct(){
        parent:: __construct();

    }
    function  get_idpeminjaman() {  //funtion menampilkan semua data
          $query =  $this->db->query("SELECT tm_peminjaman.pb_id, tm_peminjaman.pb_no_siswa, tm_peminjaman.pb_nama_siswa, tm_peminjaman.pb_harus_kembali_tgl from tm_peminjaman inner join td_peminjaman_barang on tm_peminjaman.pb_id = td_peminjaman_barang.pb_id inner join tm_barang_inventaris on  td_peminjaman_barang.br_kode = tm_barang_inventaris.br_kode where td_peminjaman_barang.pdb_sts = '1' group by tm_peminjaman.pb_id, tm_peminjaman.pb_no_siswa, tm_peminjaman.pb_nama_siswa, tm_peminjaman.pb_harus_kembali_tgl");
return $query->result_array();
    }
    function prosespeminjaman(){
        $id_pinjam = $this->id_pinjam();
    $data_pengembalian = array(
    'kembali_id' => $this->id_kembali(),
    'pb_id' => 'admin',
    'user_id' => 'admin',
    'kembali_tgl' => date('Y:m:d H:i:s'),
    'kembali_sts' => 'baik',
);
$this->db->insert('tm_pengembalian',$data_pengembalian);
}
 function id_kembali(){
        $tahun_skg = date('Y');
        $bulan_skg = date('m');
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(kembali_id,10,3)),0) + 1 As no_urut FROM tm_pengembalian WHERE
             SUBSTRING(kembali_id,3,4) = '".$tahun_skg."'");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_pinjam = 'KB'.$tahun_skg.$bulan_skg.sprintf("%03s",$no_urut);

        return $id_pinjam;
    }
  
}

/* End of file Provinsi_model.php */
/* Location: ./application/models/Provinsi_model.php */
?>