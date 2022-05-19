<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class="row">
		<section class="article_sidebar col-xs-12 col-md-2">
			<div class="author">
				<span><strong>Written by</strong></span><br>
				<span><?= $page->author()?></span>
			</div>
		</section>
		<section class="article col-xs-12 col-md-8">
			<h1><?= $page->title()?></h1>
			<div class="article-inner col-md-10 col-md-offset-1">
				<div class="introduction">
					<?= $page->introduction()->kt()?>
				</div>
				<article>
					<?= $page->text()->kt()?>
				</article>
				<div class="credits">
					<?= $page->credits()->kt()?>
				</div>
			</div>
			
			<article>
			
		</section>
		
		
	</main>

<?php snippet('footer') ?>
