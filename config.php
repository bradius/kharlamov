/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
<?php
	session_start();
	
	//database
	$host='localhost';
	$user='kharlamov';
	$pass='!kharlamov@Evgen1235';
	$db='kharlamov';
	
	//path
	define("ROOT",$_SERVER['DOCUMENT_ROOT']);
	
	//site settings
	$site_title='';
	$site_description='';
	$template='orangeman';
	$copyright='http://bradius.ru';
	
	//includes
	include 'core/errors.php';
	include 'core/mysql.php';

?>
