<ul>
  <?php foreach(page('people')->children()->visible() as $person): ?>
    <li>
    	<a href="<?php echo $person->url() ?>">
	        <h4 class="name"><?php echo $person->title()->html() ?></h4>
	        <h5 class="role"><?php echo $person->role()->html() ?></h5>
			<img src="<?php echo $person->file($person->profile())->url() ?>" alt="<?php echo $person->title()->html() ?>">
    	</a>
    </li>
  <?php endforeach ?>
</ul>