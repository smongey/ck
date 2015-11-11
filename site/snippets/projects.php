

<div class="filters">
  
<!--   <ul>
    <li><a href="#">Type</a>
      <ul>
        <li></li>
      </ul>
    </li>
  </ul> -->


  <ul>
    <li><a href="#"><?php echo str_replace("Project ","", $pages->find('types')->title()); ?></a>
      <ul class="">
        
        <?php foreach($pages->find('types')->children() as $t): 
              $filter = str_replace("types/","", $t); ?>
          <li>
          <a href="#<?php echo $filter ?>" data-filter=".<?php echo $filter ?>"><?php echo $t->title(); ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </li>
  </ul>

  <ul>
    <li><a href="#"><?php echo str_replace("Project ","", $pages->find('region')->title()); ?></a>
      <ul class="">
        
        <?php foreach($pages->find('region')->children() as $t): 
              $filter = str_replace("region/","", $t); ?>
          <li>
          <a href="#<?php echo $filter ?>" data-filter=".<?php echo $filter ?>"><?php echo $t->title(); ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </li>
  </ul>


  <ul>
    <li><a href="#"><?php echo str_replace("Project ","", $pages->find('project-specialties')->title()); ?></a>
      <ul class="">
        
        <?php foreach($pages->find('project-specialties')->children() as $t): 
              $filter = str_replace("project-specialties/","", $t); ?>
          <li>
          <a href="#<?php echo $filter ?>" data-filter=".<?php echo $filter ?>"><?php echo $t->title(); ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </li>
  </ul>
</div>



<div class="grid"><br/><br/>

  <?php foreach(page('projects')->children()->visible() as $project):
        $filters = $project->type() . " " . $project->region() . " " . str_replace(", ", " ", $project->specialty()); ?>
      
      <div class="project <?php echo $filters ?>">
        <a href="<?php echo $project->url() ?>">
          <h3><?php echo $project->title()->html() ?> </h3>
          <?php echo thumb($project->images()->sortBy('sort', 'asc')->first(), array('width' => 300, 'height' => 300, 'crop' => true)); ?>
          <p class="year"><?php echo $project->year() ?></p>
          
        </a>
      </div>
  
  <?php endforeach ?>


</div>