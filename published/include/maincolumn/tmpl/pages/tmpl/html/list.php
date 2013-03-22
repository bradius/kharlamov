<div id="item" <?if(($inc % 2) == 0):?> class="grey"<?endif;?>>
	<div id="col" class="id">
		<p><?=$inc;?></p>
	</div>
	<div id="col" class="title">
		<p><?=$viewContent["ID"][$inc]["TITLE"];?></p>
	</div>
	<div id="col" class="date">
		<p><?=$viewContent["ID"][$inc]["DATE"];?></p>
	</div>
	<div id="col" class="author">
		<p><?=$viewContent["ID"][$inc]["AUTHOR"];?></p>
	</div>
	<div id="col" class="hits">
		<p><?=$viewContent["ID"][$inc]["HITS"];?></p>
	</div>
	<div id="col" class="section">
		<p><?=$viewContent["ID"][$inc]["SECTION"];?></p>
	</div>
	<div id="col" class="category">
		<p><?=$viewContent["ID"][$inc]["CATEGORY"];?></p>
	</div>
	<div id="col" class="edit_bttn">
		<a href="?option=pages&edit=<?=$inc?>">Изменить</a>
	</div>
	<div id="col" class="del_bttn">
		<a href="?option=pages&delete=<?=$inc?>">Удалить</a>	
	</div>
</div>
