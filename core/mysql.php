/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
<?php
	class database extends mysqli{
		private $host;
		private $user;
		private $pass;
		private $db;
		static private $connection;
		static private $selectdb;
		
		public function __construct($host,$user,$pass,$db){
			$this->host=$host;
			$this->user=$user;
			$this->pass=$pass;
			$this->db=$db;
			$connection=mysql_connect($this->host,$this->user,$this->pass);
			if(!$connection) error('mysql_host');
			$selectdb=mysql_select_db($this->db,$connection);
			if(!$selectdb) error('mysql_db');
		}
		public function query($sql){
			$request=mysql_query($sql);
			if(!$request) error('mysql_request');
			return $request;
		}
	}
	$start=new database($host,$user,$pass,$db);
	$setnames=database::query('set names utf8');
?>