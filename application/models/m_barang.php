<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	class M_barang extends CI_Model{
		function __construct(){
		parent:: __construct();

		}
		function getData(){
    $query = $this->db->get('tm_barang_inventaris'); 

			return $query->result_array();
		}
	}
 ?>