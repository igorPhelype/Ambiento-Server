<?php
	/**
	* 
	*/
	include("Model.class.php");
	include("View.class.php");
	include("Ocorrencia.class.php");

	class Controller{
		private $adm;
		private $model;
		private $view;

		function __construct(){
			$this->model = new Model();
			$this->view = new View();
			return;
		}
		public function index(){
			$this->view->render("<!DOCTYPE html>");
			$this->view->render("<html>");
			$this->view->render("<head>");
			$this->view->render_file("view/head.view.html");
			$this->view->render("</head>");
			$this->view->render("<body>");
			if($this->model->verifica_session()){
				$this->view->render_file("view/navbar.logado.view.html");
				$this->view->render("<div class='container'>");
				$this->view->render("<div id='left' class='col-md-3'>");	
				$this->view->render("<h2>");
				$this->view->render("Bem vindo!");
				$this->view->render("</h2>");
				$this->view->render("</div>");
				$this->view->render("<div id='center' class='col-md-9'>");
				$this->view->render($this->model->select_ocorrencias());
			}else{
				$this->view->render_file("view/navbar.deslogado.view.html");
				$this->view->render_file("view/container.deslogado.view.html");
			}

			$this->view->render("</div>");
			$this->view->render("</div>");
			$this->view->render_file("view/footer.view.html");
			$this->view->render("<body>");
			$this->view->render("</html>");
		}
		public function cadastrar_ocorrencia(){
			$model->setOcorrencia(new Ocorrencia(NULL, $_POST["nome"], $_POST["cidade"], $_POST["estado"], $_POST["referencia"], $_POST["descricao"], $_POST["latitude"], $_POST["longitude"]));
			$model->insert_ocorrencia();	
		}
	}
?>