<section class="list">
	<?php if($data->title()->isNotEmpty()):?>
		<h2 class="list-title" id="<?= Str::slug($data->title())?>"><?= $data->title() ?></h2>
	<?php endif;?>
	<?php 
		foreach($data->elementlist()->toBuilderBlocks() as $el):?>
		 <article class="row">
		 	<?php if($cover = $el->image()->toFile()):?>
			 	<figure class="list-cover col-xs-12 col-md-3">
			  	<?= $cover->thumb();?>	
			  </figure>
				<div class="list-content col-xs-12 col-md-9">
					<div class="list-content-header">
						<h1><?=$el->title()?></h1>
				  	<?php if($el->eventdate()->isNotEmpty()):?>
				  		<p class="list-date"><?=$el->eventdate()->toDate('d/m/Y')?></p>
				  	<?php endif;?>
				  	<?php if($el->subtitle()->isNotEmpty()):?>
				  		<p class="list-subtitle"><?=$el->subtitle()->html()?></p>
				  	<?php endif;?>
					</div>
			  	
			  	<div class="list-text">
			  		<?=$el->text()->kt()?>
			  	</div>
			  </div>
			<?php else:?>
				<div class="list-content col-xs-12">
					<div class="list-content-header">
						<h1><?=$el->title()?></h1>
				  	<?php if($el->eventdate()->isNotEmpty()):?>
				  		<p class="list-date"><?=$el->eventdate()->toDate('d/m/Y')?></p>
				  	<?php endif;?>
				  	<?php if($el->subtitle()->isNotEmpty()):?>
				  		<p class="list-subtitle"><?=$el->subtitle()->html()?></p>
				  	<?php endif;?>
					</div>
			  	<div class="list-text">
			  		<?=$el->text()->kt()?>
			  	</div>
			  </div>
		  <?php endif;?>

		  	
		  </article>
	<?php endforeach;?>
 
</section>