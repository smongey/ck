
<?php echo $pages->find('timeline')->title(); ?>

<?php foreach ($pages->find('timeline')->years()->toStructure() as $year): ?>
	<h2><?php echo $year->year()->html() ?></h2>
	<div class="info">
		<?php echo $year->description()->html() ?>
		<img src="<?php echo $year->photo()->url() ?>" alt="<?php echo $year->year()->html() ?>">
	</div>
<?php endforeach ?>