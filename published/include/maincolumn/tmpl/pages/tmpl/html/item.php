<form id="editItem">
    <div id="itemCol" class="left">
        <div id="itemBlock">
            <label>
                Заголовок
            </label>
            <input type="text" value="<?=$viewContent["TITLE"]?>" name="title"/>
        </div>
        <div id="itemBlock">
            <label>
                Дата
            </label>
            <input type="text" value="<?=$viewContent["DATE"]?>" name="date"/>
        </div>
        <div id="itemBlock">
            <label>
                Автор
            </label>
            <input type="text" value="<?=$viewContent["AUTHOR"]?>" name="author"/>
        </div>
        <div id="itemBlock">
            <label>
                Просмотры
            </label>
            <input type="text" value="<?=$viewContent["HITS"]?>" readonly name="hits"/>
        </div>
        <div id="itemBlock">
            <label>
                Теги
            </label>
            <input type="text" value="<?=$viewContent["TAGS"]?>" name="tags"/>
        </div>
        <div id="itemBlock">
            <label>
                Раздел
            </label>
            <select size="3" name="section[]">
                pages::showSections();
            </select>
        </div>
        <div id="itemBlock">
            <label>
                Категория
            </label>
            <select size="3" name="category[]">
                <?=pages::showCategories($_GET["ID"])?>
            </select>
        </div>

    </div>
</form>