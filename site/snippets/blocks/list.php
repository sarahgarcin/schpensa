<section class="list">
	<?php if($data->title()->isNotEmpty()):?>
		<h2 id="<?= Str::slug($data->title())?>"><?= $data->title() ?></h2>
	<?php endif;?>
	<?php 
		foreach($data->elementlist()->toBuilderBlocks() as $el):?>
		 <article class="row">
		 	<?php if($cover = $el->image()->toFile()):?>
			 	<figure class="list-cover col-xs-12 col-md-4">
			  	<?= $cover->thumb();?>	
			  </figure>
				<div class="list-content col-xs-12 col-md-8">
					<?php if($el->eventdate()->isNotEmpty()):?>
			  		<p class="date"><?=$el->eventdate()->toDate('d/m/Y')?></p>
			  	<?php endif;?>
			  	<h1><?=$el->title()?></h1>
			  	<div class="list-text">
			  		<?=$el->text()->kt()?>
			  	</div>
			  </div>
			<?php else:?>
				<div class="list-content col-xs-12">
					<?php if($el->eventdate()->isNotEmpty()):?>
			  		<p class="date"><?=$el->eventdate()->toDate('d/m/Y')?></p>
			  	<?php endif;?>
			  	<h1><?=$el->title()?></h1>
			  	<div class="list-text">
			  		<?=$el->text()->kt()?>
			  	</div>
			  </div>
		  <?php endif;?>

		  	
		  </article>
	<?php endforeach;?>
 
</section>