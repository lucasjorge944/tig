<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class GestaoUsuarios extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('usuario_model');
		}
		
		public function index(){
							
			$dados = array(
				'titulo' => 'Gestão de Usuários',
				'sessao' => $this->session->all_userdata(),
				'usuarios' => null,
			);

			$sessao_on = $dados['sessao'];

			if (array_key_exists('username', $sessao_on)){
				
			}
			else{
				header("Location: home");
			}

			$dados['usuarios'] = $this->usuario_model->allUsers();

			$this->load->view('gestaousuarios', $dados);
		}

		public function sair(){
			if (isset($_POST['btnSair'])){
				$this->session->sess_destroy();
			}
		}

		public function gravarUsuario(){
			if (isset($_POST['btnNovoUsu'])){

				$nome = $_POST['nome'];
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];
				$acesso = $_POST['acesso'];

				$senha = md5($senha);

				$dados_usuario = array(
					'nome' => $nome,
					'usuario' => $usuario,
					'senha' => $senha,
					'acesso' => $acesso,
					'valido' => 'S'
				);


				$this->usuario_model->gravarUsuario($dados_usuario);
			}
		}	
	}

?>