<?php
	class core{
		public function module($module){
			$config='modules/'.$module.'/config.php';
			$file='modules/'.$module.'/index.php';
			if(file_exists($file) and file_exists($config)){
				include($config);
				include($file);
			} 
			else{
				error('mod_missing');
			}
		}
		static private function dirHandler($dir){
			if(is_dir($dir)){   
				$files = scandir($dir);    
				array_shift($files); 
				array_shift($files);
				return $files;
			}
			else error('hdr_style');
		}
		public function getFiles($type){
			switch($type){
				case 'style':
					$dir = 'template/css/';   
					$files=self::dirHandler($dir); 
					for($i=0; $i!=sizeof($files); $i++){
						echo "<link rel='stylesheet' type='text/css' href='".$dir.$files[$i]."'/>\n";
					}
				case 'js':
					$dir = 'template/js/';   
					$files=self::dirHandler($dir); 
					for($i=0; $i!=sizeof($files); $i++){
						echo "<script type='text/javascript' src='".$dir.$files[$i]."'></script>\n";
					}					
			}
		}
	}
	$startcore=new core();
?>