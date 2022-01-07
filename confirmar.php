<?php

include_once'conexion.php';

$matricula = $_POST['matricula'];
$contra = $_POST['contra'];

session_start();
$_SESSION['matricula'] =$matricula;

$consulta = "SELECT * FROM usuarios WHERE matricula='$matricula' AND contra='$contra'";
$resultado = mysqli_query($conect,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_rol']==2){ //profesor
	header("location:index_prof.php");

}else if ($filas['id_rol']==3) { //alumno
	header("location:index_alum.php");

}else{
	?>
	<?php
	include("login.php");
	?>
	<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conect);


/*class User extends con{
	private $nombre;
	private $matricula;
	private $correo;

	public function userExists($matri, $contrase){
		$pass = $contrase; //en caso de que se encuentre incriptada la contraseña 

		$consulta = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matri AND contra = :contrase ');
		$consulta->excecute(['matricula' => $matri, 'contra'=> $pass]);

		if ($consulta -> rowCount()) {
			return true;
		} else {
			return false;
		}
	}

	public function setUser($matri){
		$consulta = $this->connect()->prepare('SELECT * FROM usuarios WHERE matricula = :matri');
		$consulta->excecute(['matricula'=>$matri]);

		foreach ($consulta as $currentUser) {
			$this->nombre = $currentUser['nombre'];
			$this->matrucula = $currentUser['matricula'];
			$this->correo = $currentUser['correo'];
		}

	}

	public function getNombre(){
		return $this->matricula;
	}
}*/



?>