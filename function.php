<?php 

	function carregaPagina(){

		(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
		if (file_exists('page_'.$pagina.'.php')) {
			require_once('page_'.$pagina.'.php');
		}
		else{
			require_once('page_home.php');
		}
	}

	function carregaTitulo(){
		(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';

		switch ($pagina) {
			case 'clientes':
				$titulo = 'Clientes - GOQ Desenvolvimento Web';
			break;

			case 'contato':
				$titulo = 'Fale comigo - GOQ Desenvolvimento Web';
			break;

			case 'sobre':
				$titulo = 'Sobre mim - GOQ Desenvolvimento Web';
			break;

			case 'servico':
				$titulo = 'Serviços - GOQ Desenvolvimento Web';
			break;

			
			default:
				$titulo = 'GOQ - Desenvolvimento Web';
			break;
		}

		return $titulo;
	}

	/*function envioEmail(){
		if (isset($_POST['enviar'])) {
			$aviso = 'ok';
		}
		else{
			$aviso = 'nao';
		}

		echo $aviso;
	}*/

 ?>