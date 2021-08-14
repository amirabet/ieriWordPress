<?php
/**
 * Enlace a secciones destacadas > SERVICIOS
 * Esto es un SNIPPET para incluir dentro de una plantilla de página de WP
 * 

*/
?> 
<?php
	if( qtrans_getLanguage() == 'eu' ){ ?>
		<h3>Zerbitzuak</h3>
		<ul>
        	<li>Asfalto-xafla bidez  iragazgaitzea</li>
            <li>Zementuzko eta margo produktuak</li>
            <li>Egituren konponketa</li>
            <li>Zoladuren tratamendua</li>
            <li>Birgaitze eta eraikuntza-berrikuntza</li>
        </ul>
        <?php echo '<a href="' . get_bloginfo('url') . ('/') . qtrans_getLanguage() . '/servicios/">' ; ?> Ikusi denak &raquo;</a>
	<?php }else { ?>
		<h3>Servicios</h3>
		<ul>
        	<li>Impermeabilizaci&oacute;n con l&aacute;mina asf&aacute;ltica</li>
            <li>Productos cementosos y pinturas</li>
            <li>Reparaci&oacute;n de estructuras</li>
            <li>Tratamiento de pavimentos</li>
            <li>Rehabilitaciones y reformas</li>
        </ul>
		<?php echo '<a href="' . get_bloginfo('url') . ('/') . qtrans_getLanguage() . '/servicios/">' ; ?> Ver todos &raquo;</a>
	<?php } ?>
