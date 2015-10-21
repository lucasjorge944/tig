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
			$where = "data_hora=(SELECT MAX(data_hora) FROM seguidores)";
			$this->db->where($where);
			$this->db->select('numero_seguidores');
			return $this->db->get('seguidores')->row();
		}

		public function allSeguidores(){
			$this->db->order_by('id_seguidor','desc');
			$this->db->limit(6);
			return $this->db->get('seguidores')->result();
		}
	}

?>

