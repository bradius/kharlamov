<?php
/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
?>
<?
	class pages{
		function select($id){
			if($id == "all") $sql = mysql_query("select * from pages");
			else $sql = mysql_query("select * from pages  where id='".$id."'");		
			if(mysql_num_rows($sql) == 0) return error::show('mysql_request','mysql');
			while($row = mysql_fetch_array($sql)){
				$result["MSG"][$row["id"]] = array(
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
        function showCategories($id){
            $html = "";
            if($id != 'all'){
                $sql = mysql_query("select * from pages where id=".$id);
                $row = mysql_fetch_array($sql);
                $option = $row["category"];
            }
            else $option = 1;
            $sql = mysql_query("select * from categories");
            while($row = mysql_fetch_array($sql)){
                if($row["id"] == $option) $html .= "<option selected value=".$row["id"].">".$row["name"]."</option>";
                else $html .= "<option value='".$row["id"]."'>".$row["name"]."</option>";
            }
            return $html;
        }
        function showSections($id){
            $html = "";
            if($id != 'all'){
                $sql = mysql_query("select section from pages where id =".$id);
                $row = mysql_fetch_array($sql);
                $option = $row["section"];
            }
            else $option = 1;
            $sql = mysql_query("select * from sections");
            while($row = mysql_fetch_array($sql)){
                if($row["id"] == $option) $html .= "<option selected value=".$row["id"].">".$row["name"]."</option>";
                else $html .= "<option value='".$row["id"]."'>".$row["name"]."</option>";
            }
            return $html;
        }
	}
$pages = new pages();