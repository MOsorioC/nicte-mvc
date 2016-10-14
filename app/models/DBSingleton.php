<?php

/**
 * Created by PhpStorm.
 * User: OSORIO
 * Date: 22/09/2016
 * Time: 09:58 AM
 */
include_once dirname(__FILE__) . '/Constants.php';//incluimos las variables de conexion
class DBSingleton{
	private static $instance;
	private $connection;

	private function __construct() {
		//hacemos la conexion al servidor
		$this->connect();
	}
	public function connect(){
		try {
			$this->connection = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USERNAME,DB_PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
		    $this->unsetSingleton();
			echo "Falló al hacer la conexion: ".$e->getMessage();
		}
	}

	public function unsetSingleton(){
        self::$instance == null;
    }

	public function getConnection(){
		return $this->connection;
	}

	/**
	 * Verifica si la instancia ya esta creada,
	 * de lo contrario la vuelve a crear.
	 * @return DBSingleton
	 */
	public static function singleton() {
		if (self::$instance == null) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}