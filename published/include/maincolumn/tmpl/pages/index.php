<?
	class pages{
		function select($id){
			if($id == "all") $sql = mysql_query("select * from pages");
			else $sql = mysql_query("select * from pages  where id='".$id."'");		
			if(mysql_num_rows($sql) == 0) return error::show('mysql_request','mysql');
			while($row = mysql_fetch_array($sql)){
				$result["ID"][$row["id"]] = array(
						"TITLE" => $row["title"],
						"CONTENT" => $row["content"],
						"DATE" => $row["date"],
						"AUTHOR" => $row["author"],
						"HITS" => $row["hits"],
						"TAGS" => $row["tags"],
						"CATEGORY" => $row["category"],
						"SECTION" => $row["section"],
				);
			}
			return $result;
		}
	}
	

?>