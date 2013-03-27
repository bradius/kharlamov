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
    class editHandler{
        var $id;
        var $title;
        var $content;
        var $date;
        var $author;
        var $tags;
        var $category;
        var $section;

        function __construct($action,$id,$title,$content,$date,$author,$tags,$category,$section){
            $this->id = $id;
            $this->title = $title;
            $this->content = mysql_real_escape_string($content);
            $this->date = $date;
            $this->author = $author;
            $this->tags = $tags;
            $this->category = $category;
            $this->section = $section;
            if($this->id == 'new') $this->add();
            else{
                if($action == 'delete') $this->delete();
                elseif($action == 'edit') $this->edit();
                elseif($action == 'add') $this->add();
                else return error::show("hndlr_vars","checkHandler");
            }
        }
        function delete(){
           $sql = mysql_query("delete from pages where id=".$this->id);
           if(!$sql) $html = error::show("mysql_del","mysql");
           else $html = success::show("mysql_del","mysql");
           return $html;
        }
        function edit(){
           $sql = mysql_query("update pages set title='".$this->title."' where id=".$this->id);
           $sql = mysql_query("update pages set content='".$this->content."' where id=".$this->id);
           $sql = mysql_query("update pages set date='".$this->date."' where id=".$this->id);
           $sql = mysql_query("update pages set author='".$this->author."' where id=".$this->id);
           $sql = mysql_query("update pages set tags='".$this->tags."' where id=".$this->id);
           $sql = mysql_query("update pages set category='".$this->category."' where id=".$this->id);
           $sql = mysql_query("update pages set section='".$this->section."' where id=".$this->id);
           if(!$sql) $html = error::show("mysql_edit","mysql");
           else $html = success::show("mysql_edit","mysql");
           return $html;
        }
        function add(){
            $sql = mysql_query("
                insert into pages(
                    title,
                    content,
                    date,
                    author,
                    tags,
                    category,
                    section
                    )
                    values(
                    '".$this->title."',
                    '".$this->content."',
                    '".$this->date."',
                    '".$this->author."',
                    '".$this->tags."',
                    '".$this->category."',
                    '".$this->section."'
                    )
                    ");
            if(!$sql) $html = error::show("mysql_add","mysql");
            else $html = success::show("mysql_add","mysql");
            return $html;
        }
    }
?>