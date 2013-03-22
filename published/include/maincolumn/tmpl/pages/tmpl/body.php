<?
	if(isset($_GET['edit'])){
		if(isset($_GET["id"])){
			$viewContent = pages::select($_GET["id"]);
			include($path."pages/tmpl/html/item.php");
		}
	}
	elseif(isset($_GET["add"])){
	
	} 
	elseif(isset($_GET["delete"])){
	
	}
	else{
		$viewContent = pages::select("all");
		if(!is_array($viewContent)) echo $viewContent;
		else{
			$sum = count($viewContent["ID"]);
			for($inc = 1; $inc <= $sum; $inc++){
				include($path."/pages/tmpl/html/list.php");
			} 
		}
	}

?>