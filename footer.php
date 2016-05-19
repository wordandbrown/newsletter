

<footer>
    <p>IT Newsletter | People Strategies</p>
</footer>

</div> <!-- .main-wrapper -->


<div class="loader">
</div>


<!-- javascript
================================================== -->

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
  var templateUrl = "<?php echo get_template_directory_uri() ?>";
</script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/nav.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/loader.js"></script>

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