/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
<?
	if(isset($_GET['page'])){
		$pathTo = $modCore["PATH"].$_GET['page'].'.php';
	}
	else{
		$pathTo = $modCore["PATH"].$modCore["INDEX"];
	}
	if(!file_exists($pathTo)){
		$pathTo = $modCore["PATH"].$modCore['404'];
	}
	include $pathTo;
	?>
