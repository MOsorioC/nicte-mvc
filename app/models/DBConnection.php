<?php

/**
 * Created by PhpStorm.
 * User: OSORIO
 * Date: 22/09/2016
 * Time: 08:12 AM
 */
include_once dirname(__FILE__) . '/Constants.php';//incluimos las variables de conexion

class DBConnection {
	private $connection;

	/**
	 * DBConnection constructor.
	 */
	public function __construct() {}

	/**
	 * Conexion mediante PDO (Objetos de Datos de PHP)
	 * @return PDO
	 */
	public function connectPDO() {
		//hacemos la conexion al servidor
		try {
			$this->connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME , DB_USERNAME, DB_PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
		} catch (PDOException $e) {
			echo "Falló al hacer la conexion: " . $e->getMessage();
		}
		//retornamos el link de conexion
		return $this->connection;
	}

	/**
	 * Conexion mediante MYSQLI
	 * @return mysqli
	 */
	public function connectMySQLi() {
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		try {
			$this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		} catch (mysqli_sql_exception $e) {
			echo "Falló al hacer la conexion: " . $e->getMessage();
		}
		//retornamos el link de conexion
		return $this->connection;
	}
}