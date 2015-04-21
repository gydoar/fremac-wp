<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'INICIO', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Texto Misión', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'mision',
		'std' => 'Ofrecer óptimas soluciones integrales al mejor beneficio/costo en el suministro de servicios que cumplan con estándares de calidad y garantía, apoyados en la experiencia y compromiso del recurso humano y una adecuada gestión de servicio al cliente.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Texto Visión', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'vision',
		'std' => 'Ser socios estratégicos en la cadena de valor de la industria como proveedores eficientes, efectivos y confiables.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Servicio 1', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'servicio_1_title',
		'std' => 'SERVICIO EFICIENTE',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Imagen Servicio 1', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'servicio_1_img',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Texto Servicio 1', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'servicio_1_text',
		'std' => 'Basados en nuestra experiencia, bases de datos y ficha técnica de nuestros fabricantes locales y extranjeros, homologamos la información obtenida del cliente y proponemos soluciones oportunas o el remplazo de la parte o pieza original requerida. 
			<br><br>
			No se trata solo de hacer, sino que funcione correctamente, observando los parámetros de fábrica y requisitos del cliente, haciéndolo práctico y efectivo. No se improvisa.',
		'type' => 'textarea'
	);
/* Servicio 2 */
	
	$options[] = array(
		'name' => __( 'Servicio 2', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'servicio_2_title',
		'std' => 'SERVICIO EFECTIVO',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Imagen Servicio 2', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'servicio_2_img',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Texto Servicio 2', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'servicio_2_text',
		'std' => 'Nos referimos a la oportunidad en tiempo, lugar y la capacidad de producir el efecto deseado con nuestra propuesta. 
            <br><br>
            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor.',
		'type' => 'textarea'
	);

	/* Servicio 3 */
	
	$options[] = array(
		'name' => __( 'Servicio 3', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'servicio_3_title',
		'std' => 'SERVICIO CONFIABLE',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Imagen Servicio 3', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'servicio_3_img',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Texto Servicio 3', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'servicio_3_text',
		'std' => 'Confiamos en la seriedad de los clientes así como esperamos que los clientes confíen en nuestra seriedad, fundamentados en nuestros principios y valores como honestidad, cumplimiento, comunicación, innovación.
             <br><br>
             Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'CONTACTO', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Direccion de contacto', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'dir_cont',
		'std' => 'Carrera 80 B No. 56 - 65 sur Bogotá - Colombia',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Email de contacto', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'email_cont',
		'std' => 'administracion@fremacsoluciones.com',
		'type' => 'text'
	);

		$options[] = array(
		'name' => __( 'PBX de contacto', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'pbx_cont',
		'std' => '4884885',
		'type' => 'text'
	);
	return $options;
}