<?php $tags = [] ?>

<?php foreach($site->find('schpensa')->tags()->toStructure() as $tag):?>
	<?php $tags[] = Str::slug($tag->title()); ?>
<?php endforeach?>