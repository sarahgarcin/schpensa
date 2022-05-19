<div class="nav col-xs-10 col-xs-offset-1">

	<input type="checkbox" id="toggle-menu" name="toggle-menu" value="menu-visibility" hidden />
  <label for="toggle-menu">
    <span class="span-nochecked menu_btn" aria-label="open Menu">
    	<!-- menu -->
			<span></span>
			<span></span>
			<span></span>
		</span>
    <span class="span-checked menu_btn" aria-label="close Menu">
    	<!-- close -->
      <span></span>
			<span></span>
			<span></span>
    </span>
  </label>

	<nav class="main-nav col-xs-12" role="navigation">
		<ul class="main-nav_first-level row around-md col-md-10 col-md-offset-1">
			<?php foreach($pages->listed() as $p): ?>
				<li class="<?= r($p->isOpen(), 'active') ?>">
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title()->html() ?>
	        	</a>
	      </li>
			<?php endforeach; ?>
		</ul>
	</nav>

</div>




  
