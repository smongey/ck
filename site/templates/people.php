<?php snippet('header') ?>


    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
    </div>

	<section class="staff" id="staff">
		
		<h2>Staff</h2>

		<div class="info">
			<?php echo $page->staff()->html() ?>
		</div>

		<div class="gallery">
			<?php foreach ($page->gallery()->toStructure() as $img) { ?>
				<img src="<?php echo $img->photo() ?>" alt="<?php echo $img->alttext() ?>">
			<?php } ?>
		</div>

	</section>

	<section class="leadership" id="leadership">
		
		<h2>Leadership</h2>

		<div class="info">
			<?php echo $page->leadership()->html() ?>
		</div>

	    <?php snippet('people') ?>

	</section>





<?php snippet('footer') ?>