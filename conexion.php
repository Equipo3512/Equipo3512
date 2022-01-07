<?php

	/*class con {
		private $host;
		private $db;
		private $user;
		private $pass;
		//private $charset;

		public function __construct(){
			$this->host = 'localhost';
			$this->db = 'tesco';
			$this->user = 'root';
			$this->pass = '';
			//$this->charset = 'utf8mb4';
		}

		public function connect(){
			try{
				$conect = "mysql:host".$this->host."; dbname=" .$this->db;

				$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];

				$pdo = new PDO($conect, $this->user, $this->pass, $options);

			}catch(PDOException $e){
				print_r("Error Conection: ".$e->getMessage());

			}
		}

	}*/

	$conect=mysqli_connect("localhost","root","","tesco")



?>