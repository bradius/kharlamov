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
    if(isset($_POST["cancel"])) header('Location: '.ROOT.'?option=pages');
    elseif(isset($_POST["delete"]) or isset($_GET["delete"])) $action = 'delete';
    elseif(isset($_POST["edit"])) $action = 'edit';
    elseif(isset($_POST["add"])) $action = 'add';
    else header('Location: '.ROOT.'?option=pages');
    if(!isset($_GET["id"])) header('Location: '.ROOT.'?option=pages');
?>

<?
    $handler = new editHandler($action,$_GET["id"],$_POST["title"],$_POST["content"],$_POST["date"],$_POST["author"],$_POST["tags"],$_POST["category"],$_POST["section"]);
?>