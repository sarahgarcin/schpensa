<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php $tags = [] ?>
<?php foreach($site->find('schpensa')->tags()->toStructure() as $tag):?>
	<?php $tags[] = Str::slug($tag->title()); ?>
<?php endforeach?>

<div class="print-header show-for-print">
	<h1><?= $site->title() ?></h1>
	<a href="https://schpensa.ch" title="https://schpensa.ch">https://schpensa.ch</a>
</div>

	<main class="row">
		<section class="article_sidebar col-xs-12 col-sm-2 col-md-2">
			<div class="author">
				<span><strong><?php echo t('written') ?></strong></span><br>
				<span><?= $page->author()?></span>
			</div>
			<div class="filters">
				<ul>
				  <?php foreach ($page->filters()->split() as $filter): ?>
				  <li class="<?= e($tags[$filter] == param('tag'), 'active') ?>">
				  	<a href="<?= url('schpensa', ['params' => ['tag' => $tags[$filter]]]) ?>">
				  		<?= $tags[$filter] ?>
				  	</a>
				  </li>
				  <?php endforeach ?>
				</ul>
			</div>
			<?php if($pdf = $page->pdf()->toFile()):?>
				<div class="download-pdf">
					<a href="<?= $pdf->url()?>" title="<?= $pdf->name()?>" target="_blank">↓ <?php echo t('download') ?></a>
				</div>
			<?php endif; ?>
		</section>
		<section class="article col-xs-12 col-sm-9 col-md-8">
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
		</section>
		<?php $related = $page->related()->toPages();
			if ($related->count() > 0):?>
				<section class="related col-xs-12">
					
					  <h2><?php echo t('related') ?></h2>
					  <ul class="articles-list row">
					    <?php foreach($related as $article): ?>
					    <li class="col-xs-6 col-sm-4 col-md-3">
								<div class="article-cover">
									<?php $cover = $article->cover()->toFile()?>
									<a href="<?= $article->url() ?>" title="<?= $article->title() ?>"><?= $cover->thumb() ?></a>
								</div>
								<h2><a href="<?= $article->url() ?>" title="<?= $article->title() ?>"><?= $article->title()?></a></h2>
								<h3><?= $article->author()?></h3>
							</li>
					    <?php endforeach ?>
					  </ul>
					
					
				</section>
		<?php endif ?>
		
		
	</main>

<?php snippet('easter') ?>
<?php snippet('footer') ?>
