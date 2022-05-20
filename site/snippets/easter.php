<?php $easterPotatoes = $site->find('easter-potatoes')->stories()->yaml();
 $potato_key = array_rand($easterPotatoes);
?>


<div class="easter-potato">
		<input type="checkbox" id="toggle-potato" name="toggle-potato" value="potato-visibility" hidden />

		<label for="toggle-potato" class="easter-potato_potato" style="
	top: <?= rand(100, 3000); ?>px;  
	left: <?= rand(0, 50); ?>px;">
			🍟
		</label>

	<div class="easter-potato_text">
		<h2><?= $easterPotatoes[$potato_key]['title']; ?></h2>
		<p><?= $easterPotatoes[$potato_key]['text']; ?></p>
	</div>

</div>