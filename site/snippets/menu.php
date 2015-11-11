    <nav role="navigation">

      <ul class="menu cf">
        <?php foreach($pages->visible() as $p): ?>

        <?php if($p->title() == About) { ?>

                  <li>
                    <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                    <ul class="submenu">
                    <?php foreach($p->sections()->toStructure() as $s): ?>
                      <li>
                        <a href="<?php echo $p->url() ?>#<?php $hash = strtolower($s->title()->html()); echo $hash ?>"><?php echo $s->title()->html() ?></a>
                      </li>
                    <?php endforeach ?>
                    </ul>
                  </li>

        <?php } elseif($p->title() == Expertise) { ?>

                  <li>
                    <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                    <ul class="submenu">
                    <?php foreach($p->sections()->toStructure() as $s): ?>
                      <li>
                        <a href="<?php echo $p->url() ?>#<?php $hash = strtolower($s->title()->html()); echo $hash ?>"><?php echo $s->title()->html() ?></a>
                      </li>
                    <?php endforeach ?>
                    </ul>
                  </li>

        <?php } elseif($p->title() == People) { ?>

                  <li>
                    <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                    <ul class="submenu">
                      <li>
                        <a href="<?php echo $p->url() ?>#staff">Staff</a>
                      </li>
                      <li>
                        <a href="<?php echo $p->url() ?>#leadership">Leadership</a>
                      </li>
                    </ul>
                  </li>

        <?php } else { ?>

                  <li>
                    <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                  </li>

        <?php } ?>

        <?php endforeach ?>

      </ul>
    </nav>


