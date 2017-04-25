
      <hr>
      <div class="container">
      <footer>
        <p class="pull-right">&copy;<a href="http://<?= $projectname ?>.com" target="_blank"><?= $projectname ?></a> 2015</p>
      </footer>

    </div><!--/.container-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url() ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script>
      $(function() {
        $( "#datepicker" ).datepicker({
          dateFormat: "D, d M yy"
        });
      });

      $(function() {
        $( '#successAlert' ).fadeIn('fast').delay(1600).fadeOut('fast');
      });
    </script>
  </body>
</html>
