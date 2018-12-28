<?php 
class transaksikembali extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_pengembalian');
        $this->load->helper('form','url');
 
	}
 	function index(){
 		$data['data_pinjam'] = $this->m_pengembalian->get_idpeminjaman();
 		$this->load->view('v-transaksikembali', $data);

	}
function proses(){
      if($this->input->post()){
  $this->m_pengembalian->prosespengembalian();
  echo "Input Berhasil";
}else{
echo "denied";
}
      }
}

 ?>