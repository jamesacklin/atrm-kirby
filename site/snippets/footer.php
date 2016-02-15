<div class="subscribe-info newsletter-subscribe">
  <p>Join <a href="http://uianimationnewsletter.com/">The UI Animation Newsletter</a> for web animation & UX resources!</p>
</div>
<footer class="footer" role="contentinfo">
  <div class="content">
    <img src="http://valhead.com/wp-content/themes/tip6/images/val.jpg" alt="Val Head" class="bio-photo">
    <p><a href="http://www.twitter.com/vlh">Val</a> is a designer and web animation consultant with a talent for getting designers and developers alike excited about the power of animation. She is the author of <a href="http://www.fivesimplesteps.com/products/css-animations">The Pocket Guide to CSS Animations</a> and the upcoming <a href="http://rosenfeldmedia.com/books/designing-interface-animations/">Designing Interface Animations</a>. She shares her passion for animation and UX by curating the <a href="http://uianimationnewsletter.com/">UI Animation Newsletter</a>, hosting the <a href="http://alltherightmoves.valhead.com">All The Right Moves</a> screencast, and cohosting the <a href="http://motionandmeaning.io/">Motion and Meaning</a> podcast.</p>
    <?php echo $site->copyright()->kirbytext() ?>
  </div>
  <aside>
    <p><a href="#top" class="btn btn-alt to-top"><i class="fa fa-arrow-up"></i> Back to Top</a></p>
    <?php if($site->advertisements()->isNotEmpty()): ?>
      <div class="advertisements advertisements-series">
        <h4>Series Sponsors</h4>
        <?php echo $site->advertisements()->kirbytext(); ?>
      </div>
    <?php endif; ?>
  </aside>
</footer>
<?php echo js(array(
  'bower_components/jquery/dist/jquery.min.js',
  'assets/js/site.js',
  'assets/js/min/animated-gradient-min.js'
), true) ?>

</body>
</html>
