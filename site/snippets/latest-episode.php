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
    <?php if ($episode->transcript()->isNotEmpty()):
      echo "<h2>Transcript:</h2>";
      echo $episode->transcript()->kirbytext();
    endif;?>

</article>
<?php endforeach ?>