<?php



class db{
	public $server;
	public $user;
	public $pass;
	public $db;
	public $conexiones;
	public $validacion;
	public $validacionId;



	public function __construct($server,$user,$pass,$db){
		$this->server = $server;
		$this->user = $user;
		$this->pass = $pass;
		$this->db = $db;
	}

	public function conexion(){
		$this->conexiones = mysqli_connect($this->server,$this->user,$this->pass,$this->db);

	}

	public function consulta(){

		$query ="SELECT * FROM comidas";
		$consultas = mysqli_query($this->conexiones,$query); 
		$this->validacion = $consultas;
	}
	public function agregar(){

	
		if (isset($_GET['enviar'])){
			$nombre = $_GET['nombre'];
			$precio = $_GET['precio'];
			$query ="INSERT INTO comidas(nombre,precio) VAlUES('$nombre','$precio')";
			$consulta = mysqli_query($this->conexiones,$query);
			if ($consulta) {
				Header("Location: index.php");
			}
		}

	}

	public function borrar(){
		if (isset($_GET['id'])){

			$id = $_GET['id'];
			$query = "DELETE FROM comidas WHERE id=$id";
			$consulta = mysqli_query($this->conexiones,$query);
			if ($consulta) {
					Header("Location: index.php");
			}

		};

	}
	public function consultaId(){
		if (isset($_GET['id'])) {
			$id=$_GET['id'];
			$query ="SELECT * FROM comidas WHERE id=$id";
			$consultas = mysqli_query($this->conexiones,$query); 
			$this->validacionId = $consultas;
		}

	}
	public function actualizar(){
		if (isset($_GET['actualizar'])) {
			$id=$_GET['id'];
			$nombre=$_GET['nombre'];
			$precio=$_GET['precio'];
			$query ="UPDATE comidas SET nombre='$nombre',precio='$precio' WHERE id=$id";
			$consultas = mysqli_query($this->conexiones,$query); 
			if ($consultas) {
					Header("Location: index.php");
			}
		}

	}

}
$parametros = new db("localhost","root","Linux3529600**","comida");

?>