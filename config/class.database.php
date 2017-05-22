<?php
	class Database
	{
		var $host = null;
		var $user = null;
		var $pass = null;
		var $dbname = null;
		var $conn = null;
		public function __construct($host,$user,$pass,$dbname)
		{
			$this->host = $host;
			$this->user = $user;
			$this->pass = $pass;
			$this->dbname = $dbname;
			$this->Connect();
		}
		public function __destruct()
		{
			return $this->conn->close();
		}
		private function Connect()
		{
			$host = $this->host;
			$user = $this->user;
			$pass = $this->pass;
			$dbname = $this->dbname;
			$this->conn = mysqli_connect($host,$user,$pass,$dbname);
			if ($this->conn->connect_error) 
			{
				die("Connection failed: " . $this->conn->connect_error);
				exit();
			}
			$this->Query("SET NAMES UTF8");
		}
		public function Query($sql)
		{
			return $this->conn->query($sql);
		}
		public function QueryObj($sql)
		{
			$obj = array();
			$result = $this->Query($sql);
			while($row = $result->fetch_assoc())
			{
				$obj[] = $row;
			}
			return $obj;
		}
		public function QueryJson($sql)
		{
			$obj = $this->QueryObj($sql);
			return json_encode($obj);
		}
		public function QueryString($sql)
		{
			$result = $this->Query($sql);
			if($row = $result->fetch_array())
			{
				return $row[0];
			}
			return null;
		}
		public function QueryNumRow($sql)
		{
			$result = $this->Query($sql);
			return $result->num_rows;
		}
	}
?>