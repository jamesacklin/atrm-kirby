<h2>Past Episodes</h2>

<section class="past-episodes">
  <?php foreach(page('episodes')->children()->visible()->sortBy('date','desc')->offset(1)->limit(6) as $episode): ?>
  <article class="episode episode-exerpt">
    <a href="<?php echo $episode->url() ?>">
      <?php
        $id = $episode->vimeo();
        $data = file_get_contents("http://vimeo.com/api/v2/video/$id.json");
        $data = json_decode($data);
        echo "<img src=" . $data[0]->thumbnail_large . ">";
      ?>
    </a>
    <h3><a href="<?php echo $episode->url() ?>"><?php echo $episode->title()->html() ?></a></h3>
  </article>
  <?php endforeach ?>
</section>
