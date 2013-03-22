<?php
	//template
	class error{
		public function __construct($type){
			switch($type){
				case 'tmpl_missing':
					die("Missing template file\n");
				case 'tmpl_broken':
					die("Template file is broken\n");
				case 'mod_missing':
					echo("Missing module files\n");
				case 'mod_broken':
					echo("Module is broken\n");					
				case 'hdr_style':
					echo("Failed to scan dir with styles\n");
				case 'mysql_host':
					die("Lost connection to host.\n");
				case 'mysql_db':
					die('Cant select db');
				case 'mysql_request':
					echo('Bad request');
				case 'mysql_test':
					echo('fucking shit');
			}
		}
	}


?>