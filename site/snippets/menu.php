<nav class="main-navigation" role="navigation banner" id="top">
  <ul class="menu">
    <?php foreach($pages->visible() as $p): ?>
    <li class="menu-item <?php ecco($p->isOpen(), 'menu-item-active') ?>">
      <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
    <li class="menu-item">
      <a href="http://www.valhead.com/">Val Head</a>
    </li>
  </ul>
</nav>
