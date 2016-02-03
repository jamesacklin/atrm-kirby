<?php snippet('header') ?>
<main>
  <article class="episode">
    <h3><a href="<?php echo $page->url() ?>"><?php echo $page->title()->html() ?></a></h3>
    <div class="video-container">
      <iframe src="https://player.vimeo.com/video/<?php echo $page->vimeo() ?>?>?portrait=0&badge=0&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <?php if ($page->summary()->isNotEmpty()):
      echo $page->summary()->kirbytext();
    endif; ?>
    <?php if ($page->transcript()->isNotEmpty()):
      echo "<h2>Transcript:</h2>";
      echo $page->transcript()->kirbytext();
    endif;?>
    <aside>
      <nav class="nextprev cf" role="navigation">
        <p>
          <a href="#" class="btn btn-alt"><i class="fa fa-fw fa-file-text-o"></i> Read Transcript</a>
        </p>
        <p>
          <?php if($next = $page->nextVisible()): ?>
          <a class="btn btn-alt-3 next" href="<?php echo $next->url() ?>">Next Episode</a>
          <?php endif ?>
          <?php if($prev = $page->prevVisible()): ?>
          <a class="btn btn-alt-3 prev" href="<?php echo $prev->url() ?>">Previous Episode</a>
          <?php endif ?>
        </p>
        <div class="advertisement">
          <img src="/assets/images/advertisement.png" alt="Advertisement">
        </div>
        <div class="advertisement">
          <img src="/assets/images/advertisement.png" alt="Advertisement">
        </div>
      </nav>
    </aside>
  </article>
</main>

<?php snippet('footer') ?>