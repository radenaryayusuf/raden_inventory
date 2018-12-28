<?php 
class transaksi extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('scombobox');
		$this->load->model('m_barang');
        $this->load->helper('form','url');
 
	}
 	function index(){
		$data['qsiswanisn'] = $this->scombobox->get_siswanisn()->result(); 
 		$data['tglsekarang'] = date("Y-m-d h:i:00");
 		$data['data_barang'] = $this->m_barang->getData();
 		$data['id_pinjam'] = $this->scombobox->id_pinjam();
		$this->load->view('v-transaksipinjam',$data);

	}
	
	function get_nama(){
 
            $nisn = $this->input->post('nisn');  //mengambil post data yang dijabarkan pada javascript yaitu type: "POST"
            $arrStates = $this->scombobox->get_nama_bynisn($nisn);  //mengambil data dari database melalui model scombobox
            foreach ($arrStates as $state) {
                $arrstates[$state->nm_siswa] = $state->nm_siswa;
            } //array dibuat untuk ditampilkan pada combox box
            print form_dropdown('nm_siswa',$arrstates); //setelah berhasil diambil lalu ditampilkan
      }
      function get_nisn(){
 
            $nm_siswa = $this->input->post('nm_siswa');  //mengambil post data yang dijabarkan pada javascript yaitu type: "POST"
            $arrStates = $this->scombobox->get_nisn_bynama($nm_siswa);  //mengambil data dari database melalui model scombobox
            foreach ($arrStates as $state) {
                $arrstates[$state->nisn] = $state->nisn;
            } //array dibuat untuk ditampilkan pada combox box
            print form_dropdown('nisn',$arrstates); //setelah berhasil diambil lalu ditampilkan
      }

      function proses(){
      if($this->input->post()){
  $this->scombobox->prosespeminjaman();
  echo "Input Berhasil";
}else{
echo "denied";
}
      }
}

 ?>