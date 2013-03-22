<?
	class menu{
		static private $tmplPath='modules/menu/tmpl/';
		
		function getMenu(){
			$sql=database::query("select * from menu where parent='0'");
			while($row=mysql_fetch_array($sql)){
				include(self::$tmplPath.'parent.php');
				$sqlin=database::query("select * from menu where parent='".$row['id']."'");
				if($sqlin){
					echo("<ul class='menu-dropdown'>\n");
					while($res=mysql_fetch_array($sqlin)){
						include(self::$tmplPath.'sub.php');	
					}
					echo ("</ul>\n");
				}
			}
		}
		public function __construct(){
			include(self::$tmplPath.'handler.php');
		}
	}
	$module=new menu();
?>

