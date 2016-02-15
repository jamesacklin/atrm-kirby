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
      echo "<div id='transcript' class='transcript-content'>";
      echo "<h2>Transcript</h2>";
      echo $page->transcript()->kirbytext();
      echo "</div>";
    endif;?>
    <aside>
      <?php if ($page->transcript()->isNotEmpty()): ?>
        <p>
          <a href="#" class="btn btn-alt transcript-button"><i class="fa fa-fw fa-file-text-o"></i> Read Transcript</a>
        </p>
      <?php endif; ?>
      <nav class="nextprev cf" role="navigation">
        <p>
          <?php if($next = $page->nextVisible()): ?>
          <a class="btn btn-alt-3 next" href="<?php echo $next->url() ?>">Next Episode</a>
          <?php endif ?>
          <?php if($prev = $page->prevVisible()): ?>
          <a class="btn btn-alt-3 prev" href="<?php echo $prev->url() ?>">Previous Episode</a>
          <?php endif ?>
        </p>
      </nav>
      <?php if($page->advertisements()->isNotEmpty()): ?>
        <div class="advertisements advertisements-episode">
          <h4>Episode Sponsors</h4>
          <?php echo $page->advertisements()->kirbytext(); ?>
        </div>
      <?php elseif(!$page->advertisements()->isNotEmpty() && $site->advertisements()->isNotEmpty()): ?>
        <div class="advertisements advertisements-series">
          <h4>Series Sponsors</h4>
          <?php echo $site->advertisements()->kirbytext(); ?>
        </div>
      <?php endif; ?>
    </aside>
  </article>
</main>

<?php snippet('footer') ?>
