

<footer>
    <p>IT Newsletter | People Strategies</p>
</footer>
</div><!-- .wrapper -->
</div> <!-- .main-wrapper -->


<div class="loader">
</div>

<?php wp_footer(); ?>

<!-- javascript
================================================== -->

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
  var templateUrl = "<?php echo get_template_directory_uri() ?>";
</script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/nav.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/loader.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/readmore.js"></script>

<?php
if ( is_wpe() ):
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84535878-1', 'auto');
  ga('send', 'pageview');

</script>

<?php endif; ?>

</body>
</html>


<!--     <footer>
      
      <div class="row">
        <div class="logo-container columns">
          <img src="<?php echo get_template_directory_uri() ?>/img/logos/wb-logo-white.svg" alt="The Word&Brown Companies">
        </div>
      </div>    

    </footer>

    <script src="<?php echo get_template_directory_uri() ?>/js/foundation/vendor/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/foundation/vendor/what-input.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/foundation/foundation.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/foundation/app.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/foundation/tabs.js"></script>
    <script>

      $(document).foundation();
      
    </script>
    <script>

      $('.video').on('click', function() {
        video_src = $(this).attr('data-src');
        createPopup();
      });

      function createPopup () {
        $('footer').after('<div class="video-popup"><div class="container"><div class="pad-container"><div class="height-container"><iframe src="' + video_src + '" frameborder="0" allowfullscreen></iframe></div></div></div><div class="close"></div></div>');
        removePopup();
      }

      function removePopup () {
        $('.video-popup').on('click', function() {
          $(this).remove();
        });
      }

    </script>



  </body>
</html> -->