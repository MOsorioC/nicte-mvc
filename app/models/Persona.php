<?php

/**
 * Created by PhpStorm.
 * User: OSORIO
 * Date: 22/09/2016
 * Time: 01:53 PM
 */
//incluimos la conexion
include_once dirname(__FILE__) . '/DBSingleton.php';//incluimos las variables de conexion
class Persona {
	private $id;
	private $nombre;
	private $apellido;
	private $sexo;
	private $fechaNacimiento;
	private $fechaActualizacion;

	private $DB;
	public function __construct() {
		$this->DB = DBSingleton::singleton();
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * @param mixed $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * @return mixed
	 */
	public function getApellido() {
		return $this->apellido;
	}

	/**
	 * @param mixed $apellido
	 */
	public function setApellido($apellido) {
		$this->apellido = $apellido;
	}

	/**
	 * @return mixed
	 */
	public function getSexo() {
		return $this->sexo;
	}

	/**
	 * @param mixed $sexo
	 */
	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	/**
	 * @return mixed
	 */
	public function getFechaNacimiento() {
		return $this->fechaNacimiento;
	}

	/**
	 * @param mixed $fechaNacimiento
	 */
	public function setFechaNacimiento($fechaNacimiento) {
		$this->fechaNacimiento = $fechaNacimiento;
	}

	/**
	 * @return mixed
	 */
	public function getFechaActualizacion() {
		return $this->fechaActualizacion;
	}

	/**
	 * @param mixed $fechaActualizacion
	 */
	public function setFechaActualizacion($fechaActualizacion) {
		$this->fechaActualizacion = $fechaActualizacion;
	}

	public function listPersonas(){
		try {
			$query = "SELECT * FROM flor";
			$stmt = $this->DB->getConnection()->prepare($query);
            $stmt->execute();
            $result = (object) $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
		} catch (PDOException $exception) {
		    return ['Error'=>"Valio madres al obtener la parsona: ".$exception->getMessage()];
		}

	}
}