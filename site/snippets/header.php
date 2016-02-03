<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php echo css('assets/css/screen.css') ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://use.typekit.net/yvt5pwc.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
  </head>
  <body <?php if ($page->template() == "episode") echo ' class="single-episode"' ?>>
    <?php snippet('menu') ?>
    <header>
      <?php if ($page->isHomePage()){ ?>
        <div class="content">
          <h1><?php echo $site->title()->html() ?></h1>
          <?php echo $page->text()->kirbytext() ?>
          <div class="subscribe-info">
            <h2><i class="fa fa-fw fa-rss"></i> Subscribe</h2>
            <?php echo $page->rss_instructions()->kirbytext() ?>
          </div>
        </div>
      <?php } else { ?>
        <h1><?php echo $site->title()->html() ?></h1>
      <?php }; ?>
    </header>
