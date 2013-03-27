<? 
	include('core/config.php');
	include('template/tmpl/header.php');
?>
<div id="wrapper">
	<?$admin::init("maincolumn");?>
</div>
<?
	include('template/tmpl/footer.php');
	mysql_close();
?>