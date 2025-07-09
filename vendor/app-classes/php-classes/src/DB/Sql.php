<?php 

namespace App\DB;

class Sql {

	if (getenv('DB_HOST')) {
		define('HOSTNAME', getenv('DB_HOST'));
		define('USERNAME', getenv('DB_USER'));
		define('PASSWORD', getenv('DB_PASS'));
		define('DBNAME', getenv('DB_NAME'));
	} else {
		define(const HOSTNAME = "localhost");
		define(const USERNAME = "root");
		define(const PASSWORD = "");
		define(const DBNAME = "db_ecommerce");
	}

	private $conn;

	public function __construct()
	{

		$this->conn = new \PDO(
			"mysql:dbname=".Sql::DBNAME.";host=".Sql::HOSTNAME, 
			Sql::USERNAME,
			Sql::PASSWORD
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