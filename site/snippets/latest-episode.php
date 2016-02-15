<h2>Latest Episode</h2>
<?php foreach(page('episodes')->children()->visible()->sortBy('date','desc')->limit(1) as $episode): ?>
<article class="episode">
  <h3><a href="<?php echo $episode->url() ?>"><?php echo $episode->title()->html() ?></a></h3>
  <div class="video-container">
    <iframe src="https://player.vimeo.com/video/<?php echo $episode->vimeo() ?>?>?portrait=0&badge=0&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>


    <?php if ($episode->summary()->isNotEmpty()):
      echo $episode->summary()->kirbytext();
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
      <?php if($episode->advertisements()->isNotEmpty()): ?>
        <div class="advertisements advertisements-episode">
          <h4>Episode Sponsors</h4>
          <?php echo $episode->advertisements()->kirbytext(); ?>
        </div>
      <?php elseif(!$episode->advertisements()->isNotEmpty() && $site->advertisements()->isNotEmpty()): ?>
        <div class="advertisements advertisements-series">
          <h4>Series Sponsors</h4>
          <?php echo $site->advertisements()->kirbytext(); ?>
        </div>
      <?php endif; ?>
    </aside>

</article>
<?php endforeach ?>
