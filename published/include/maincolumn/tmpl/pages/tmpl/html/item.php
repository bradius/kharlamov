<form id="editItem" method="POST" action="?option=save&item&id=<?=$_GET["id"];?>">
    <div id="itemCol" class="left">
        <div id="itemBlock">
            <label>Заголовок</label>
            <input type="text" value="<?=$viewContent["MSG"][$_GET["id"]]["TITLE"]?>" name="title"/>
        </div>
        <div id="itemBlock">
            <label>Дата</label>
            <input type="text" value="<?=$viewContent["MSG"][$_GET["id"]]["DATE"]?>" name="date"/>
        </div>
        <div id="itemBlock">
            <label>Автор</label>
            <input type="text" value="<?=$viewContent["MSG"][$_GET["id"]]["AUTHOR"]?>" name="author"/>
        </div>
        <div id="itemBlock">
            <label>Просмотры</label>
            <input type="text" value="<?=$viewContent["MSG"][$_GET["id"]]["HITS"]?>" readonly name="hits"/>
        </div>
        <div id="itemBlock">
            <label>Теги (через пробел)</label>
            <textarea name="tags">
                <?=$viewContent["MSG"][$_GET["id"]]["TAGS"]?>
            </textarea>
        </div>
        <div id="itemBlock">
            <label>Раздел</label>
            <select size="1" name="section[]">
                <?=$pages::showSections($_GET["id"])?>
            </select>
        </div>
        <div id="itemBlock">
            <label>Категория</label>
            <select size="1" name="category[]">
                <?=$pages::showCategories($_GET["id"])?>
            </select>
        </div>
    </div>
    <div id="itemCol" class="right">
        <label class="pageContent">Текст страницы</label>
        <div id="editor">
            <textarea id="itemContent" name="content">
                <?=$viewContent["MSG"][$_GET["id"]]["CONTENT"]?>
            </textarea>
        </div>
    </div>
</form>