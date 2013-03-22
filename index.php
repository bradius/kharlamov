<!DOCTYPE html>
<?php
	include_once("config.php");
	include_once("core/core.php");
	include_once("core/builder.php");
?>
<html>
<head>
<?core::module('header');?>
</head>
<body>
<?$construct= new builder($template);?>
</body>
</html>
<?
	include('core/end.php');

?>