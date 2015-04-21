<?php get_header("page"); ?>

 <!-- Section body -->

      <section class="page">

        <div class="container">
          <h3>NUESTRA PROPUESTA AL SERVICIO DE LA INDUSTRIA DEL TRANSPORTE</h3>
          <div class="six columns line"></div>
        </div>

        <div class="container">
          
          <div class="six columns">
            <img class="twelve columns" src="<?php echo of_get_option('img_1_propuesta'); ?>" alt="">
          </div>

          <div class="six columns text-page">

            <p><?php echo of_get_option('text_1_propuesta'); ?></p>

          </div>
        </div>

        <div class="container">

           <div class="six columns text-page">
            <p><?php echo of_get_option('text_1_declaracion'); ?></p>
            

            <strong>NUESTRO DIFERENCIAL, ES NUESTRO COMPROMISO</strong>

          </div>
          <br><br>
          <div class="six columns">
            <h3>NUESTRA DECLARACIÓN</h3>
            <img class="twelve columns"src="<?php echo of_get_option('img_1_declaracion'); ?>" alt="">
          </div>

         
        </div>
      </section>
<?php get_footer(); ?>