<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Usuario_model extends CI_Model{
		
		public function login($usuario=null, $senha=null){
			if ($usuario != null && $senha != null){
				$this->db->where('usuario', $usuario);
				$this->db->where('senha', $senha);
				return $this->db->get('tbl_usuario')->row();
			}
			else{
				return false;
			}
		}
		
	}

?>

