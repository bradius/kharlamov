/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
<?
	if(isset($_GET["logout"])) unset($_SESSION["USER"]);
	if(isset($_POST['login'])){
		$checkUser = check($_POST["login"],$_POST["password"]);
		if(is_array($checkUser)) $_SESSION["USER"] = $checkUser;
		else echo $checkUser;
	}
	
	if(isset($_SESSION["USER"])){
		if($_SESSION["USER"]["LOGIN"] == "admin") $siteMenu = $modCore['PATH']."admin.php";
	}
	else $siteMenu = $modCore['PATH']."login.php";
	
	if(!file_exists($siteMenu)) error::show('inc_broken',$modCore["MODULE"]);
	else include($siteMenu);
	



?>