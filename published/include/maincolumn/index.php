<?
	if(isset($_GET["option"])){
		$checkPage = option($_GET["option"],$modCore["PATH"]);
		if(is_object($checkPage)) echo $checkPage;
	}
	else include($modCore["PATH"].$modCore["INDEX"]);
