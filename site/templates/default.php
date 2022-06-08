<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div class="default_inner col-xs-12 col-md-8 col-md-offset-2">
			<?php 
				foreach($page->mybuilder()->toBuilderBlocks() as $block):
				  snippet('blocks/' . $block->_key(), array('data' => $block));
				endforeach;
			?>
		</div>
		
	</main>

<?php snippet('easter') ?>
<?php snippet('footer') ?>
