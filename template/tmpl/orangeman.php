<div id='page'>
	<div id='header'>
		<a href='/'><img src='template/images/logo.png' /></a>
	</div>	
	<div id='breadcrumbs'>		
	</div>
	<div id='wrapper'>
		<div id='leftcolumn'>
			<div id='welcome_image'>
				<a href='/'><img src='template/images/photo.png' /></a>
			</div>
			<div id='main_menu'>
				<? core::module('menu');?>
			</div>
			<div id='line'></div>
			<div id='loginform'>
				<? core::module('login');?>
			</div>
			<div id='line'></div>
			<div id='searchbox'>
				<? core::module('search');?>
			</div>			
			<div style='margin-top:50px; margin-bottom:15px;' id='line'></div>			
			<center><a href='http://www.prof-police.ru/' target=_blank><img width='162px' src='template/images/profs.png' /></a></center>			
			<div style='margin-top:16px; margin-bottom:20px;' id='line'></div>
			<center><a href='http://www.advokatymoscow.ru/profile/?id=17652' target=_blank><img width='150px' src='template/images/law.png' /></a></center>
			<div style='margin-top:16px; margin-bottom:20px;' id='line'></div>			
			</div>
		<div id='maincolumn'>
		<div id='maincolumn_head'>
			<? core::module('page');?>
		</div>	
		</div>
	</div>
</div>
<div id='footer'>
<? core::module('footer');?>	
</div>
