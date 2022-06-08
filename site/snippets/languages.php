<div class="languages col-xs-1">
  <ul>
    <?php foreach($kirby->languages() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"') ?>>
      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
        <?= html($language->code()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</div>