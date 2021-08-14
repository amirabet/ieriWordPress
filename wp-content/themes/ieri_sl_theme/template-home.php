<?php
/**
 * Template Name: Home Ieri s.l.
 *
 * Plantilla para la Página de INICIO de IERI s.l.
 * Recoge varios snippets mediante la funcion include de php
 * 
 * @package Thematic
 * @subpackage Templates
 */

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();
?>
<!-- Estamos dentro de #main -->
		<div id="home-main">	
			<!-- Incluimos el carrusel Flexslider -->
			<?php 
			include_once(get_stylesheet_directory() . '/snippet-flexslider.php');
			?>
            <!-- Incluimos las ultimas noticias -->
			<?php 
			include_once(get_stylesheet_directory() . '/snippet-lastnews.php');
			?>
            <div class="clearboth">&nbsp;</div>
            <!-- Columnas enlaces destacados -->
            <div class="cols_wrap">
				<!-- Servicios -->
                <div class="col3 mainlink fl">
					<?php 
                    include_once(get_stylesheet_directory() . '/snippet-mainlinks-servicios.php');
                    ?>
                </div>
                <!-- Empresa -->
                <div class="col3 mainlink fl">
					<?php 
                    include_once(get_stylesheet_directory() . '/snippet-mainlinks-empresa.php');
                    ?>
                </div>
                <!-- Contacto -->
                <div class="col3 mainlink fr">
					<?php 
                    include_once(get_stylesheet_directory() . '/snippet-mainlinks-contacto.php');
                    ?>
                </div>
            </div>
            <div class="clearboth">&nbsp;</div>
		</div>
<!-- #main -->

<?php 
    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();
?>