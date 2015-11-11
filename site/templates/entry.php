<?php snippet('header') ?>


<h4><?php echo $page->title()->html() ?></h4>
  <p>
    <?php echo $page->text()->html() ?>
    <a href="<?php echo $page->url() ?>">&rarr;Read More</a>
  </p>
  <?php 
  if($page->video() == '') {
  
    if($image = $page->images()->sortBy('sort', 'asc')->first()){ ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" >
  <?php }
  
  } else { ?>

    <?php $vid = str_replace("https://vimeo.com/", "", $page->video()) ?>
    <iframe src="https://player.vimeo.com/video/<?php echo $vid ?>?color=6c6e95&title=0&byline=0" width="900" height="384" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  
  <?php } ?>

<?php snippet('footer') ?>