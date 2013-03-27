/*
    Kharlamov Engine
    Created by Mike Bradius
    http://bradius.ru
    Full source at https://github.com/bradius/kharlamov
    2013
*/
<div id="item" <?if(($inc % 2) == 0):?> class="grey"<?endif;?>>
	<div id="col" class="id">
		<p><?=$inc;?></p>
	</div>
	<div id="col" class="title">
		<p><?=$viewContent["MSG"][$inc]["TITLE"];?></p>
	</div>
	<div id="col" class="date">
		<p><?=$viewContent["MSG"][$inc]["DATE"];?></p>
	</div>
	<div id="col" class="author">
		<p><?=$viewContent["MSG"][$inc]["AUTHOR"];?></p>
	</div>
	<div id="col" class="hits">
		<p><?=$viewContent["MSG"][$inc]["HITS"];?></p>
	</div>
	<div id="col" class="section">
		<p><?=$viewContent["MSG"][$inc]["SECTION"];?></p>
	</div>
	<div id="col" class="category">
		<p><?=$viewContent["MSG"][$inc]["CATEGORY"];?></p>
	</div>
	<div id="col" class="edit_bttn">
		<a href="?option=pages&edit&id=<?=$inc?>">Изменить</a>
	</div>
	<div id="col" class="del_bttn">
		<a href="?option=pages&delete&id=<?=$inc?>">Удалить</a>
	</div>
</div>
