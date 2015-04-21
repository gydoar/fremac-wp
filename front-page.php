<?php get_header(); ?>

 <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

      <header id="mainbanner">
        <div id="header-color">
          <section class="container">
            <div class="five columns" id="logo">
              <a href="<?php echo home_url('/') ?>"><img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt=""></a>
            </div>
            <nav class="offsey-by-one six columns">
              <ul id="menu-principal">
                <li><a href="<?php echo home_url('/'); ?>">QUIÉNES SOMOS</a></li>
                <li><a href="<?php echo home_url('/nuestra-propuesta') ?>">NUESTRA PROPUESTA</a></li>
                <li><a href="<?php echo home_url('/portafolio' ); ?>">PORTAFOLIO</a></li>
                <li><a href="<?php echo home_url('/contacto' ); ?>">CONTACTO</a></li>
              </ul>
            </nav>

          </section>
        </div>

        <div class="mensaje-banner">
          <div class="width-sombra">
            <p>NUESTRA <strong>METODOLOGÍA<br></strong><span> SE BASA EN UN PROCESO DE</span><br>COMUNICACIÓN, INFORMACIÓN<br> Y EXPERIENCIA</p>
          </div>
        </div>
      </header>

      <!--Section Mision, Vision -->
      <section id="mision">

        <div id="caja-mision">

          <div class="tabset7">
             <div data-pws-tab="tab1" data-pws-tab-name="<img src='<?php bloginfo('template_url' ); ?>/library/img/line-tab.png' alt=''>">
               <h2>MISIÓN</h2>

               <p><?php echo of_get_option('mision'); ?></p>
            </div>
            <div data-pws-tab="tab2" data-pws-tab-name="<img src='<?php bloginfo('template_url' ); ?>/library/img/line-tab.png' alt=''>">
              <h2>VISIÓN</h2>

               <p><?php echo of_get_option('vision'); ?> <br><br><br></p>
            </div>
          </div>
          
          
          

        </div>
        

      </section>

      
      <!-- Section servicios -->
      <div class="container servicios">
         <h2 class="">SERVICIOS</h2>
         <div class="line-yellow clearfix"></div>
      </div>
      <section class="servicios container">
        
         <div class="four columns">
           <h3><?php echo of_get_option('servicio_1_title'); ?></h3>

           <img class="twelve columns" src="<?php echo of_get_option('servicio_1_img'); ?>" alt="">

           <p><?php echo of_get_option('servicio_1_text'); ?></p>
         </div>

         <div class="four columns">
           <h3><?php echo of_get_option('servicio_2_title'); ?></h3>

           <img class="twelve columns" src="<?php echo of_get_option('servicio_2_img'); ?>" alt="">

           <p><?php echo of_get_option('servicio_2_text'); ?></p>
         </div>

         <div class="four columns">
           <h3><?php echo of_get_option('servicio_3_title'); ?></h3>

           <img class="twelve columns" src="<?php echo of_get_option('servicio_3_img'); ?>" alt="">

           <p><?php echo of_get_option('servicio_3_text'); ?></p>
         </div>
      </section>
      
      <!-- Section slogan -->
      <section class="slogan">
        <div class="container">
          <h3>Partimos de la necesidad de nuestro cliente, recopilando la información amplia y suficiente con un dictamen riguroso y eficaz. </h3>
        </div>

      </section>


      <!-- Section clientes -->
      <section class="clientes container">
        <h2 class="">NUESTROS CLIENTES</h2>
        <div class="line-yellow clearfix"></div>
        <p><strong>FREMAC SOLUCIONES INDUSTRIALES</strong> presenta sus servicios al sistema de transporte de pasajeros y mantenimiento industrial en sus instalaciones o en las nuestras.</p>
        <ul class="list-clientes">
          <li><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-clientes.png" alt=""> OPERADORES DEL SISTEMA TRANSMILENIO</li>
          <li><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-clientes.png" alt=""> URBANO DE PASAJEROS</li>
          <li><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-clientes.png" alt=""> SERVICIO INTERMUNICIPAL</li>
        </ul>
        <section>
          <ul class="logos-clientes">
            <li><a href="#"><img width="207" src="<?php bloginfo('template_url' ); ?>/library/img/logo-modasa.png" alt=""></a></li>
            <li><a href="#"><img width="206" src="<?php bloginfo('template_url' ); ?>/library/img/logo-flota.png" alt=""></a></li>
            <li><a href="#"><img width="211" src="<?php bloginfo('template_url' ); ?>/library/img/logo-etema.png" alt=""></a></li>
            <li><a href="#"><img width="92" src="<?php bloginfo('template_url' ); ?>/library/img/logo-si.png" alt=""></a></li>
            <li><a href="#"><img width="192" src="<?php bloginfo('template_url' ); ?>/library/img/logo-servientrega.png" alt=""></a></li>
            <li><a href="#"><img width="188" src="<?php bloginfo('template_url' ); ?>/library/img/logo-transmasivo.png" alt=""></a></li>
            <li><a href="#"><img width="61" src="<?php bloginfo('template_url' ); ?>/library/img/logo-etib.png" alt=""></a></li>
            <li><a href="#"><img width="129" src="<?php bloginfo('template_url' ); ?>/library/img/logo-elrapido.png" alt=""></a></li>
          </ul>
        </section>
      </section>

<?php get_footer(); ?>