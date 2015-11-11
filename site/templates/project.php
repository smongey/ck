
<div id="project">

    <?php echo $page->title()->html() ?>

    <img src="<?php echo $page->images()->first()->url() ?>" alt="">

    <?php echo $page->text()->kirbytext() ?>


    <?php $first = $page->images()->sortBy('sort', 'asc')->first();
    foreach($page->images()->sortBy('sort', 'asc') as $image):
      if($image != $first) { ?>
      
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">

      <?php } ?>

    <?php endforeach ?>

    <div class="map">
      MAP<br/>
      <?php echo $page->coordinates() ?>
    </div>

</div>
