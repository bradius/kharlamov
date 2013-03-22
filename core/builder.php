<?php
	class builder{
		var $template='template/tmpl/';
		var $html;
		
		public function __construct($tmpl){
			$this->template .= $tmpl.'.php';
			if(file_exists($this->template)){
				include($this->template);
			} 
			else{
				$report= error('tmpl_missing');
				$report .= 'Template file name: '.$this->template;
				echo $report;
			}
		}
	}
?>