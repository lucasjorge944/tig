<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Dashboard extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');	
			$this->load->model('coletas_model');
		}
		
		public function index(){		
			$dados = array(
				'titulo' => 'Dashboard',
				'sessao' => $this->session->all_userdata(),
				'num_coletas' => null,
				'coletas_hoje' => null,
				'postado' => null,
				'num_seguidores' => null,
			);

			$sessao_on = $dados['sessao'];

			if (array_key_exists('username', $sessao_on)){
				
			}
			else{
				header("Location: home");
			}

			$dados['num_coletas'] = $this->coletas_model->total_coletas();
			$dados['coletas_hoje'] = $this->coletas_model->coletas_hoje();
			$dados['postado'] = $this->coletas_model->postado();
			$dados['seguidores'] = $this->coletas_model->seguidores();

			$this->load->view('dashboard', $dados);
		}

		public function sair(){
			if (isset($_POST['btnSair'])){
				$this->session->sess_destroy();
			}
		}

		public function seguidores(){
			$seguidores = $this->coletas_model->allSeguidores();
			$seguidores = json_encode($seguidores);
			echo $seguidores;
		}

	}

?>