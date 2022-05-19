<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php $tags = [] ?>


	<main>
	<section class="sidebar col-xs-12">
		<ul class="row center-md">
			<?php foreach($page->tags()->toStructure() as $tag):?>
				<li data-tag="<?= Str::slug($tag->title())?>" data-title="<?= $tag->text() ?>"><?= $tag->title() ?></li>
				<?php $tags[] = Str::slug($tag->title()); ?>
			<?php endforeach?>
		</ul>
	</section>
	<section class="articles-list">
		<ul class="articles row">
			<?php foreach($page->children()->listed()->shuffle() as $article):?>
				<li class="col-xs-6 col-md-3">
					<a href="<?= $article->url() ?>" title="<?= $article->title() ?>">
						<div class="article-cover">
							<?php $cover = $article->cover()->toFile()?>
							<?= $cover->thumb() ?>
						</div>
						<div class="filters">
							<ul class="row">
							  <?php foreach ($article->filters()->split() as $filter): ?>
							  <li><?= $tags[$filter] ?></li>
							  <?php endforeach ?>
							</ul>
						</div>
						<h2><?= $article->title()?></h2>
					</a>
					<article>
					
			</li>
			<?php endforeach?>
	
		</ul>
	</section>
		
	</main>

<?php snippet('footer') ?>
