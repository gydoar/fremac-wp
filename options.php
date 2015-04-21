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

	/* Seccion Nuestra Porpuesta */
	$options[] = array(
		'name' => __( 'NUESTRA PROPUESTA', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Img Nuestra Propuesta', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'img_1_propuesta',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Text Nuestra Propuesta', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'text_1_propuesta',
		'std' => 'FREMAC Soluciones industriales, nace de la oportunidad que ofrece el sector de transporte de pasajeros con relación al mantenimiento de sus flotas de vehículos, dejando en manos de terceros aquellas funciones que no forman parte crítica de aquello que le da valor, que dispongan de la experiencia, infraestructura y tecnología que puede suponer una reducción de costos significativa para sus empresas.
			<br><br>
            omos una compañía Outsoucing que presta los servicios de mantenimiento preventivo correctivo, reparación y suministro de partes, piezas y repuestos para todo tipo de carrocerías y plataformas.
			<br><br>
            Nuestro compromiso está enmarcado en una visión y misión alineadas con el direccionamiento estratégico de nuestros clientes actuales y futuros, lo cual nos permite ofrecer un servicio Eficiente, Efectivo y Confiable.',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( 'Img Nuestra Declaracion', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'img_1_declaracion',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Text Nuestra Declaracion', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'text_1_declaracion',
		'std' => 'Todos los ámbitos de la empresa moderna, necesitan contar con servicios y tecnologías de punta. Es importante que el personal de la compañía esté centrado en su negocio, dejando en manos de terceros aquellas funciones, que no forman parte crítica de la cadena de valor.
            <br><br>
            Disponer de esos avances puede suponer una reducción de costos. En virtud de esta oportunidad, declaramos que somos un Servicio Outsurcing de mantenimiento, reparación y suministros eficientes, efectivos y confiables, porque realmente somos un proveedor que sabemos lo que hacemos.',
		'type' => 'textarea'
	);

	/* Seccion portfolio */
	$options[] = array(
		'name' => __( 'PAGINA PORTFOLIO', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Text Portfolio', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'text_portfolio',
		'std' => 'Formamos parte de la cadena de distribución de importantes industrias a nivel nacional e Internacional, lo cual garantiza el servicio y calidad de nuestros suministros.
			<br><br>
            Nuestras soluciones están orientadas al servicio de mantenimiento y reparación, suministro de recambios, reparaciones, mejoras y/o adaptaciones de piezas, partes y accesorios con procesos de inyección, fibra, pintura, vulcanizado, mecanizado, ensamble y metalmecánica para todo tipo de máquinas, equipos industriales, de transporte y líneas de producción.
			<br><br>
            Participamos activamente en campañas de mantenimiento preventivo y suministro de stock de repuestos; atendemos emergencias de mantenimiento correctivo, reparaciones y desarrollo de soluciones.
            <br><br>
            Servicio de asesoría y capacitación práctica para programas de mantenimiento preventivo y correctivo de carrocería y plataformas, equipos e instrumentos.
			<br><br>
            <strong>ASISTENCIA PARA FALLAS Y VARADAS 24 HORAS</strong>
            
            Servicio outsurcing de mantenimiento, reparación y proveeduría a la medida de sus necesidades…',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Img Portfolio', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'img_portfolio',
		'std' => '',
		'type' => 'upload'
	);

	/* Seccion contacto */

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