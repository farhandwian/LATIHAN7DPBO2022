<?php

class DB{
	var $db_host = ''; // host
	var $db_user = ''; // user basis data
	var $db_password = ''; // password
	var $db_name = ''; // nama basis data
	var $db_port = ''; // nama basis data
	var $db_link = ''; // nama basis data
	var $result = 0;

	function __construct($db_host='', $db_user='', $db_password='', $db_name='',$db_port = ''){
		// konstruktor
		$this->db_host = $db_host;
		$this->db_user = $db_user;
		$this->db_password = $db_password;
		$this->db_name = $db_name;
		$this->db_port = $db_port;
	}

	function open(){
		// membuka koneksi
		$this->db_link = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name, $this->db_port);
	}

	function execute($query=""){
		// mengeksekusi query
		$this->result = mysqli_query($this->db_link, $query);

		return $this->result;
	}

	function getResult(){
		// mengambil ekseskusi query
		return mysqli_fetch_array($this->result);
	}

	function close(){
		// menutup koneksi
		mysqli_close($this->db_link);
	}
}

?>