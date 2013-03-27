<?php
/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
?>
<form id="editItem" method="POST" action="?option=editHandler&item&id=<?if(!isset($_GET['add'])) echo $_GET["id"]; else echo("new");?>">
    <div id="itemCol" class="left">
        <div id="itemBlock">
            <label>Заголовок</label>
            <input type="text" value="<?if(!isset($_GET["add"])) echo $viewContent["MSG"][$_GET["id"]]["TITLE"];?>" name="title"/>
        </div>
        <div id="itemBlock">
            <label>Дата</label>
            <input type="text" value="<?if(!isset($_GET["add"])) echo $viewContent["MSG"][$_GET["id"]]["DATE"];?>" name="date"/>
        </div>
        <div id="itemBlock">
            <label>Автор</label>
            <input type="text" value="<?if(!isset($_GET["add"])) echo $viewContent["MSG"][$_GET["id"]]["AUTHOR"]; else echo $_SESSION["USER"]["LOGIN"];?>" name="author"/>
        </div>
        <div id="itemBlock">
            <label>Просмотры</label>
            <input type="text" value="<?if(!isset($_GET["add"])) echo $viewContent["MSG"][$_GET["id"]]["HITS"];?>" readonly name="hits"/>
        </div>
        <div id="itemBlock">
            <label>Теги (через пробел)</label>
            <textarea name="tags">
                <?if(!isset($_GET["add"])) echo $viewContent["MSG"][$_GET["id"]]["TAGS"];?>
            </textarea>
        </div>
        <div id="itemBlock">
            <label>Раздел</label>
            <select size="1" name="section[]">
                <?
                    if(!isset($_GET["add"])) echo $pages::showSections($_GET["id"]);
                    else echo $pages::showSections('all');
                ?>
            </select>
        </div>
        <div id="itemBlock">
            <label>Категория</label>
            <select size="1" name="category[]">
                <?
                    if(!isset($_GET["add"])) echo $pages::showCategories($_GET["id"]);
                    else echo $pages::showCategories('all');
                ?>
            </select>
        </div>
        <div id="itemBlock">
            <input type="submit" value="Сохранить" class="bottomButton" name="<?if(!isset($_GET["add"])):?>edit<?elseif(isset($_GET["add"])):?>add<?endif;?>"/>
            <?if(!isset($_GET["add"])) :?><input type="submit" value="Удалить" class="bottomButton" name="delete"/>
            <?elseif(isset($_GET["add"])) :?><input type="submit" value="Отмена" class="bottomButton" name="cancel"/><?endif;?>
        </div>
    </div>
    <div id="itemCol" class="right">
        <label class="pageContent">Текст страницы</label>
        <div id="editor">
            <textarea id="itemContent" name="content">
                <?if(!isset($_GET["add"])) echo $viewContent["MSG"][$_GET["id"]]["CONTENT"];?>
            </textarea>
        </div>
    </div>
</form>