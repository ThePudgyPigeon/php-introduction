<?php
class MyConnect
{
	private $db_name;
	private $username;
	private $password;
	private $host;

	//creating a singleton class so it is only instantiated once
	private static $connection;


	//private so it can only  be accessed inside of the class
	private function __construct($name, $username, $password)
	{
		$this->db_name = $name;
		$this->username = $username;
		$this->password = $password;
		$this->host = 'localhost';
	}

	//this is how we can create our singleton!
	public static function open_connection($name, $username, $password)
	{
		if (!isset(self::$connection)) {
			self::$connection = new MyConnect($name, $username, $password);
		}
		return self::$connection;
	}

	public function get_info($query)
	{
		//STUB
	}

	public function set_info($query)
	{
		//STUB
	}

	public function get_db_name()
	{
		return $this->db_name;
	}
}

$db = MyConnect::open_connection('people', 'joe', 'hello_there');
echo $db->get_db_name();
