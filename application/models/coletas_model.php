<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Coletas_model extends CI_Model{
		
		public function total_coletas(){
			return $this->db->count_all_results('tbl_coletas');
		}

		public function coletas_hoje(){
			$where = "data_hora > CURDATE();";
			$this->db->where($where);
			return $this->db->count_all_results('tbl_coletas');
		}

		public function postado(){
			return $this->db->count_all_results('tbl_twitter_postado');
		}

		public function seguidores(){
			$this->db->select('numero_seguidores');
			$this->db->select_max('data_hora');
			return $this->db->get('seguidores')->row();
		}
	}

?>

