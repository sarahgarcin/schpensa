<div class="site_logo col-xs-10">
		
			<h1>
				<a href="<?= $site->find('schpensa')->url()?>" title="<?= $site->title()?>">
					<?= $site->title()?>
				</a>
				<?php if($page->uri() != 'schpensa' && $page->parents() != 'schpensa'):?>
					<span class="breadcrumb_arrow"> > </span>
					<span class="breadcrumb"><?= $page->title()?></span>
				<?php endif ?>
			</h1>
		
		
</div>