<?php
	class Img{
		private $id_img;
		private $caminho;
		private $base;

		public function __construct($_base=NULL){
			$this->base = $_base;
			return true;
		}
		public function getCaminho(){
			return $this->caminho;
		}
		public function getId_img(){
			return $this->id_img;
		}

		public function select_imgbyid($_id_img, $mysqli){
			$sql = "SELECT caminho FROM Img WHERE idImg = $_id_img";
			$resultado = $mysqli->query($sql);
			$linha = $resultado->fetch_array();
			$this->caminho = $linha["caminho"];
		}
		public function generate_img($mysqli){
		// $this->caminho = "caminho";
			$this->caminho = sha1(uniqid(time())).".png";
		
		// gerar arquivo
		    $binary=base64_decode($this->base);
		    // Images will be saved under 'www/imgupload/uplodedimages' folder
		    $file = fopen('../img/ocorrencias_upload/'.$this->caminho, 'wb');
		    print_r($file);
		    // Create File
		    fwrite($file, $binary);
		    fclose($file);

			$query = "INSERT INTO Img VALUES(null, '$this->caminho')";
			$mysqli->query($query);
			$this->id_img = $mysqli->insert_id;
		}
	}
?>