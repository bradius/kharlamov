<?	
	//params
	$modCore = array(
		"MODULE" => "leftcolumn",
		"VERSION" => "1.0",
		"PATH" => ROOT."/include/leftcolumn/tmpl/",
	);
	//functions
	function check($login,$password){
		$check = mysql_query("select * from users where login='".$login."'");
		if(mysql_num_rows($check) == 0) return error::show("chk_usr","checkUser");
		else{
			while($row = mysql_fetch_array($check)){
				if($password != $row["password"]){
					return error::show("chk_pwrd","checkUser");
				}
				else{
					$user = array(
						"ID" => $row["id"],
						"LOGIN" => $row["login"],
						"PASSWORD" => $row["password"],	
						"NAME" => $row["name"],
						"SURNAME" => $row["surname"],
					);
					return $user;
				}
			}
		}
	}
	
?>
