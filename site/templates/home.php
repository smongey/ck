<?php snippet('header') ?>

	<?php foreach($page->gallery()->toStructure() as $image): ?>

		<img src="<?php echo $image->photo()->url() ?>" alt="<?php echo $image->alttext() ?>">

	<?php endforeach ?>

	<?php foreach($page->mobilegallery()->toStructure() as $image): ?>

		<img src="<?php echo $image->photo()->url() ?>" alt="<?php echo $image->alttext() ?>">

	<?php endforeach ?>


<?php snippet('footer') ?>