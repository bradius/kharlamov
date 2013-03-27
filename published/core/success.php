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
    class success{
        function show($type, $where){
            $html = "<p class='success'>";
            switch($type){
                case "mysql_del":
                    $html .= "Item was deleted";
                break;
                case "mysql_edit":
                    $html .= "Item was updated";
                break;
                case "mysql_add":
                    $html .= "Item was saved";
                break;
            }
            $html .= "<br/><br/>";
            $html .= "Success was sent by <span>".$where."</span>";
            $html .= "</p>";
            echo $html;
        }
    }
?>