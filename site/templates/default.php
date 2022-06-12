<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div class="default_inner col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
			<?php 
				foreach($page->mybuilder()->toBuilderBlocks() as $block):
				  snippet('blocks/' . $block->_key(), array('data' => $block));
				endforeach;
			?>
		</div>
		
	</main>

<?php snippet('easter') ?>
<?php snippet('footer') ?>
