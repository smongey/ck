<?php snippet('header') ?>


	<section class="featured">

		<h2>Featured</h2>

		<div class="info">
			<?php echo $page->featuredtext()->html() ?>			
		</div>

		<?php foreach($page->featured()->split() as $f) { ?>
			<div class="project">
		        <a href="<?php echo $page->find($f)->url(); ?>">
					<h3><?php echo $page->find($f)->title(); ?></h3>
					<?php echo thumb($page->find($f)->images()->first(), array('width' => 300, 'height' => 300, 'crop' => true)); ?>
				</a>
			</div>
		<? } ?>

	</section>

	<section class="filter">
		
		<h2>1952-<?php echo date('Y') ?></h2>

		<div class="info">
			<?php echo $page->filtertext()->html() ?>	
		</div>

	    <?php snippet('projects') ?>

	</section>

<?php snippet('footer') ?>