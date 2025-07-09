<?php 

namespace App\DB;

if (getenv('DB_HOST')) {
	define('HOSTNAME', getenv('DB_HOST'));
	define('USERNAME', getenv('DB_USER'));
	define('PASSWORD', getenv('DB_PASS'));
	define('DBNAME', getenv('DB_NAME'));
} else {
	define('HOSTNAME', "localhost");
	define('USERNAME', "root");
	define('PASSWORD', "");
	define('DBNAME', "db_ecommerce");
}

class Sql {

	private $conn;

	public function __construct()
	{

		$this->conn = new \PDO(
			"mysql:dbname=". DBNAME. ";host=" . HOSTNAME, 
			USERNAME,
			PASSWORD
		);

	}

	private function setParams($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {
			
			$this->bindParam($statement, $key, $value);

		}

	}

	private function bindParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}

}

 ?>