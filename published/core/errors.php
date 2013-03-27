<?php
/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
?>
<?
class error{
	public function show($type,$where){
		$html = "<p class='error'>";
		switch($type){
			case "inc_broken":
				$html .= "An error has occured during module initialisation.\n";
			break;
			case "mysql_request":
				$html .= "Mysql Request failed.\n";
			break;
			case "mysql_host":
				$html .= "Lost connection to host.\n";
			break;
			case "mysql_db":
				$html .= "Cant select database.\n";
			break;
			case "chk_usr":
				$html .= "User is not exists.\n";
			break;
			case "chk_pwrd":
				$html .= "Password is not correct.\n";
			break;
		}
		$html .= "<br/><br/>";
		$html .= "Error was sent by <span>".$where."</span>";
		$html .= "</p>";
		echo $html;
	}
}
?>
