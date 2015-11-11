  <?php foreach(page('news')->children()->limit(20) as $entry): ?>
  <section class="entry">
    <div class="date">
    <?php echo date('m/d/Y', $entry->date()) ?>
    </div>
    <div class="main">
      <hr>
      <h4><?php echo $entry->title()->html() ?></h4>
      <p>
        <?php echo $entry->text()->excerpt(80) ?>
        <a href="<?php echo $entry->url() ?>">&rarr;Read More</a>
      </p>
     
      <?php 
      if($entry->video() == '') {
        if($image = $entry->images()->sortBy('sort', 'asc')->first()){ ?>
          <img src="<?php echo $image->url() ?>" alt="<?php echo $entry->title()->html() ?>" >
      <?php }
      } else { ?>
      
        <?php $vid = str_replace("https://vimeo.com/", "", $entry->video()) ?>
        <iframe src="https://player.vimeo.com/video/<?php echo $vid ?>?color=6c6e95&title=0&byline=0" width="900" height="384" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

      <?php } ?>

    </div>
  </section>
  <?php endforeach ?>


