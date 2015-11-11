<?php snippet('header') ?>

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
    </div>

	<?php foreach ($page->sections()->toStructure() as $section) { ?>
		<section id="<?php echo strtolower($section->title()) ?>">

			<h2><?php echo $section->title()->html() ?></h2>

			<div class="info">
				<?php echo $section->description()->html() ?>
		
				<img src="<?php echo $section->photo() ?>" alt="<?php echo $section->title() ?>">
				
			</div>

		</section>
	<?php } ?>


<?php snippet('footer') ?>