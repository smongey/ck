<?php snippet('header') ?>


	<?php snippet('timeline') ?>

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
    </div>

	<?php foreach($page->sections()->toStructure() as $s):
		$hash = strtolower($s->title()->html()); ?>
	  <section class="<?php echo $hash ?>" id="<?php echo $hash ?>">
	    <div>
	    	<?php echo $s->title()->html() ?>
	    </div>
	    <div>
	    	<?php echo $s->description()->html() ?>
	    </div>
	  </section>
	<?php endforeach ?>

<?php snippet('footer') ?>