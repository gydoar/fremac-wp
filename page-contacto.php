<?php get_header('page'); ?>

 <section class="page">

        <div class="container">
          
          <div class="six columns">
            <h3>CONTACTO</h3>
          </div>

        </div>
        
        <div class="contacto">
            <form method="post" action="mail.php" name="contactform" >
              <fieldset>
                <div class="c1">
                  <div class="form-field">
                    <label for="name">Nombre:*</label>
                    <span><input type="text" name="name" id="name" required/></span>
                  </div>
                  <div class="form-field">
                    <label for="name">Teléfono:*</label>
                    <span><input type="text" name="phone" id="phone" required/></span>
                  </div>
                </div>
               
                <div class="c2">
                  <div class="form-field">
                    <label for="email">Email:*</label>
                    <span><input type="email" name="email" id="email" required/></span>
                  </div>
                  <div class="form-field">
                    <label for="message">Mensaje:*</label>
                    <span><textarea name="message" id="message" required></textarea></span>
                  </div>
                </div>
              </fieldset>
              <div class="form-click">
                <span><input type="submit" name="submit" value="ENVIAR" id="submit" /></span>
              </div>
            </form> 
        </div>
      
      </section>

<?php get_footer(); ?>