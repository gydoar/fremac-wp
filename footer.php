      <!--Footer de la págin -->
      <footer class="contactenos">
        
        <div class="container">
          <h2>CONTACTENOS</h2>
          <p><?php echo of_get_option('dir_cont'); ?></p>
          <a href="mailto:<?php echo of_get_option('email_cont'); ?>"><?php echo of_get_option('email_cont'); ?></a>
          <p>PBX: <?php echo of_get_option('pbx_cont'); ?></p>
        </div>

      </footer>

      <section class="bg-copy">
        <div class="container">
          <p><strong>&copy; FREMAC &nbsp;</strong>HECHO CON &nbsp;<img width="12" src="<?php bloginfo('template_url' ); ?>/library/img/corazon.png" alt=""> &nbsp;POR <a href="http://suwwweb.com">SUWWWEB</a></p>
        </div>
      </section>


<!-- script -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/modernizr-custom-min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/jquery.pwstabs-1.2.1.js"></script>

<!--/ script -->

<!-- Scripts Adiconales -->

	<!-- Menu responsive -->
	<script>
	   $('.tabset7').pwstabs({
	   effect: 'slideright',
	   defaultTab: 1,
	   containerWidth: '100%',
	   horizontalPosition: 'bottom'
	  });
  </script>
	<!--/ Menu responsive -->

<!--/ Scripts Adiconales -->

<?php wp_footer(); ?>

</body>
</html>