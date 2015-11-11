  
  <div id="person">

    <h1><?php echo $page->title()->html() ?></h1>
    <h2><?php echo $page->fullrole() ?></h2>

    <img src="<?php echo $page->file($page->profile())->url(); ?>" alt="<?php echo $page->title()->html() ?>">

    <div class="text">
      <?php echo $page->bio() ?><br/>
    </div>
  
  </div>
