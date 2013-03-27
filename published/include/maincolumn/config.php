/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
<?
	$modCore = array(
		"MODULE" => "maincolumn",
		"VERSION" => "1.0",
		"PATH" => ROOT."/include/maincolumn/tmpl/",
		"INDEX" => "index.php",
	);
	//functions
	
	function option($option, $path){
		$config = $path.$option."/index.php";
		$header = $path.$option."/tmpl/header.php";
		$body = $path.$option."/tmpl/body.php";
		$footer = $path.$option."/tmpl/footer.php";
		if(file_exists($config) and file_exists($header) and file_exists($body) and file_exists($footer)){
			include($config);
			include($header);
			include($body);
			include($footer);
		}
		else return error::show('inc_broken', $option);
	}
?>
