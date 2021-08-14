<?php
/**
 * Enlace a secciones destacadas > EMPRESA
 * Esto es un SNIPPET para incluir dentro de una plantilla de página de WP
 * 

*/
?> 
<?php
	if( qtrans_getLanguage() == 'eu' ){ ?>
		<h3>Enpresa</h3>
		<p>Ieri iragazgaiketan espezializatutako enpresa bat da, 20 urte baino egehiagoko eskarmentuarekin.</p>
        <p>Kalitatea gure helburu nagusia izanda, Ieri-k iragazgaiketa arloko material-hornitzaile onenekin egiten du lan.</p>
		<?php echo '<a href="' . get_bloginfo('url') . ('/') . qtrans_getLanguage() . '/empresa/">' ; ?> Ezagutzu gaitzazu &raquo;</a>
	<?php }else { ?>
		<h3>Empresa</h3>
		<p>Ieri es una empresa especializada en la impermeabilizaci&oacute;n con m&aacute;s de 20 a&ntilde;os de experiencia en el sector.</p>
        <p>Orientada hacia la calidad, Ieri trabaja con los mejores proveedores de material de impermeabilizaci&oacute;n.</p>
		<?php echo '<a href="' . get_bloginfo('url') . ('/') . qtrans_getLanguage() . '/empresa/">' ; ?> Con&oacute;zcanos mejor &raquo;</a>
	<?php } ?>
