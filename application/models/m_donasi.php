<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_donasi extends CI_Model {



	public function lihat($idbencana2){
		$query = $this->db->where('id_bencana2',$idbencana2)
						  ->get("donasi");

		if($query){
			return $query->row();
		} else{
			return false;
		}
	}

	public function get_sum(){
		$sql = "SELECT sum(beras) as beras FROM donasi";
		$result = $this->db->query($sql);
		return $result->row()->beras;
	}
}