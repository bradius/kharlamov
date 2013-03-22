<?
	session_start();
	
	//database
	$host='localhost';
	$user='kharlamov';
	$pass='!kharlamov@Evgen1235';
	$db='kharlamov';

	define("ROOT",$_SERVER['DOCUMENT_ROOT']."/published/");
	
	include_once('core/errors.php');
	
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
			if(!$connection) error::show('mysql_host','mysql');
			$selectdb=mysql_select_db($this->db,$connection);
			if(!$selectdb) error::show('mysql_db','mysql');
		}
	}
	$start=new database($host,$user,$pass,$db);
	$setnames=mysql_query('set names utf8');
	
	class admin{
		public function init($module){
			$config='include/'.$module.'/config.php';
			$file='include/'.$module.'/index.php';
			if(file_exists($file) and file_exists($config)){
				include($config);
				include($file);
			} 
			else {error::show('inc_broken',$module);}
		}	
	}
?>