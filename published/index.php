/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
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