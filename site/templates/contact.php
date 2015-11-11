<?php snippet('header') ?>

    <div class="text">

      <h1><?php echo $page->title()->html() ?></h1>

    </div>

	<?php foreach ($page->locations()->toStructure() as $l) { ?>
	
	<section>
		<h2><?php echo $l->location() ?></h2>
		<div class="info">
			<?php echo $l->address() ?>
			<?php echo $l->phone() ?>
			<?php echo $l->email() ?>
		</div>
	</section>	

	<?php } ?>

	<section>
		<h2>Jobs</h2>
		<div class="info">
			<p>Our business stands or falls on the quality of our people. If they don’t succeed, neither do we. While our standards are extremely high, we’re always looking for exceptional talent.</p>
			<a href="#">&rarr; Open Positions</a>
		</div>
	</section>

<?php snippet('footer') ?>