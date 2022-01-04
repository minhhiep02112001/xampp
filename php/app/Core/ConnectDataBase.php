<?php 

class ConnectDataBase
{
	protected $host = "localhost";
	protected $user = "root";
	protected $pass = "";
	protected $db_name = "db_ban_hoa_qua";

	private static $instance = NULL;

	public static function getInstance() {
		if (!isset(self::$instance)) {
			try {
				self::$instance = new mysqli('localhost','root','','test');
				// self::$instance->exec("SET NAMES 'utf8'");
			} catch (PDOException $ex) {
				die($ex->getMessage());
			}
		}
		return self::$instance;
	}
}
?>