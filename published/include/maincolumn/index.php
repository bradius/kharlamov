/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
<?
	if(isset($_GET["option"])){
		$checkPage = option($_GET["option"],$modCore["PATH"]);
		if(is_object($checkPage)) echo $checkPage;
	}
	else include($modCore["PATH"].$modCore["INDEX"]);
