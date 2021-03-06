<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php $tags = [] ?>


	<main>
	<section class="sidebar col-xs-12">
		<ul class="row center-md">
			<li class="all <?= e(param('tag') == '', 'active') ?>">
				<a href="<?= $page->url() ?>">
					<?php echo t('all') ?>
				</a>
			</li>
			<?php foreach($page->tags()->toStructure() as $tag):?>
				<?php 
				$slugTag = Str::slug($tag->title());
				$tags[] = $slugTag; ?>
				<li class="<?= e($slugTag == param('tag'), 'active') ?>">
					<a href="<?= url('schpensa', ['params' => ['tag' => $slugTag]]) ?>">
						<?= $tag->title() ?>
					</a>
				</li>
				
			<?php endforeach?>
		</ul>
	</section>
	<section class="articles-list">
		<ul class="articles row">
			<?php $articles = $page->children()->listed()->shuffle();
			  // add the tag filter
			  if($tag = param('tag')) {
			    $articles = $articles->filterBy('filters', array_search($tag, $tags), ',');
			  }
			?>

			<?php foreach($articles as $article):?>
				<li class="col-xs-6 col-sm-4 col-md-3">
						<div class="article-cover">
							<?php $cover = $article->cover()->toFile()?>
							<a href="<?= $article->url() ?>" title="<?= $article->title() ?>"><?= $cover->thumb() ?></a>
						</div>
						<h2><a href="<?= $article->url() ?>" title="<?= $article->title() ?>"><?= $article->title()?></a></h2>
						<h3><?= $article->author()?></h3>
			</li>
			<?php endforeach?>
	
		</ul>
	</section>
		
	</main>

<?php snippet('easter') ?>
<?php snippet('footer') ?>
