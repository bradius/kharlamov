/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
<?
	if(isset($_GET['edit'])){
		if(isset($_GET["id"])){
			$viewContent = $pages::select($_GET["id"]);
			include($path."pages/tmpl/html/item.php");
		}
	}
	elseif(isset($_GET["add"])){
	
	} 
	elseif(isset($_GET["delete"])){
	
	}
	else{
		$viewContent = $pages::select("all");
		if(!is_array($viewContent)) echo $viewContent;
		else{
			$sum = count($viewContent["MSG"]);
			for($inc = 1; $inc <= $sum; $inc++){
				include($path."/pages/tmpl/html/list.php");
			} 
		}
	}

?>