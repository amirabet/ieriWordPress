<?php
/**
 * Enlace a secciones destacadas > CONTACTO
 * Esto es un SNIPPET para incluir dentro de una plantilla de página de WP
 * 

*/
?> 
<?php
	if( qtrans_getLanguage() == 'eu' ){ ?>
		<h3>Harremanetarako</h3>
		<p>Ez izan zalantzarik iragazgaitzeari buruzko edozein egitasmo guri kontsultatzeko.</p>
        <p>Gugana heltzeko harreman bide ezberdinak dituzu zure eskura, beti ere eskarmentudun aholkularitza profesionala jasotzeko.</p>
		<?php echo '<a href="' . get_bloginfo('url') . ('/') . qtrans_getLanguage() . '/contacto/">' ; ?> Zure esanetara guade &raquo;</a>
	<?php }else { ?>
		<h3>Contacto</h3>
        <p>No dude en consultarnos sobre cualquier proyecto relacionado con la impermeabilizaci&oacute;n.</p>
        <p>Dispone de distintas v&iacute;as de contacto d&oacute;nde recibir&aacute; asesoramiento profesional.</p>
		<?php echo '<a href="' . get_bloginfo('url') . ('/') . qtrans_getLanguage() . '/contacto/">' ; ?> Estamos a su servicio &raquo;</a>
	<?php } ?>
