<?php get_header("page"); ?>

<!-- Section body -->

      <section class="page">

        <div class="container">
          
          <div class="six columns">
            <h3>PORTAFOLIO DE SERVICOS</h3>
          </div>

          <div class="twelve columns">
            <p><strong>NUESTRO SERVICIO OUTSURCING</strong> en el suministro, mantenimiento y reparación industrial está dirigido a los sectores de:</p>

            <ul style="text-align:center;margin-top:30px;"class="list-clientes">
              <li><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-clientes.png" alt=""> TRANSPORTE</li>
              <li><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-clientes.png" alt=""> INDUSTRIAL</li>
              <li><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-clientes.png" alt=""> ALIMENTICIO</li>
              <li><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-clientes.png" alt=""> FARMACÉUTICO</li>
            </ul>
          </div>

        </div>

        <div class="container portafolio">
          <div class="six columns">
            <img class="twelve columns" src="<?php echo of_get_option('img_portfolio'); ?>" alt="">
          </div>
          <div class="six columns">
            <p><?php echo of_get_option('text_portfolio'); ?></p>
          </div>
        </div>

      </section>

<?php get_footer(); ?>