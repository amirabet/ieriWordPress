<?php
/**
 * Template Name: Pagina de Contacto con Gmaps Flexible
 *
 * This Full Width template removes the primary and secondary asides so that content
 * can be displayed the entire width of the #content area.
 * 
 * @package Thematic
 * @subpackage Templates
 */

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();
?>
		<div id="main_contacto">
        	<div id="contacto_vias">
            	<?php if( qtrans_getLanguage() == 'eu' ){ ?>
           		<h2>Ieri Iragazgaiztea s.l.</h2>
                <ul>
                	<li class="contacto_li_postal">Zubiaurre paealekua 100, 1go lokala<br /><span>20015 Donostia<br />(Gipuzkoa)</span></li>
                    <li class="contacto_li_tlf">+34 943 321 458<br /><span>Ostiraletarako Astelehena 9-14h / 17-20h</span></li>
                    <li class="contacto_li_mail">info @ ierisl.com</li>
                </ul>
        		<?php }else { ?>
            	<h2>Ieri Impermeabilizaci&oacute;n s.l.</h2>
            	<ul>
                	<li class="contacto_li_postal"> Paseo Zubiarre 100 - Local 1<br /><span>20015 San Sebasti&aacute;n<br />(Guip&uacute;zcoa)</span></li>
                    <li class="contacto_li_tlf">+34 943 321 458<br /><span>Lunes a Viernes de 9-14h y 17-20h</span></li>
                    <li class="contacto_li_mail">info @ ierisl.com</li>
                </ul>
            	<?php } ?>
            </div>
            <div id="contacto_gmaps">
            	<div id="container_gmaps">
                    <div id="dummy_gmaps"></div>
                    <div id="element_gmaps">
                        <iframe <?php if( qtrans_getLanguage() == 'eu' ){ ?>title="Zubiaurre paealekua 100, 1go lokala 20015 Donostia (Gipuzkoa)" <?php }else { ?>title="Paseo Zubiarre 100 - Local 1 20015 San Sebasti&aacute;n (Guip&uacute;zcoa)" <?php } ?> frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=IERI,+Donostia-San+Sebasti%C3%A1n&amp;aq=0&amp;oq=ieri&amp;sll=41.403375,2.216256&amp;sspn=0.43005,1.056747&amp;ie=UTF8&amp;hq=IERI,&amp;hnear=Donostia-San+Sebasti%C3%A1n,+G%C2%A1puzkoa,+Pa%C3%ADs+Vasco&amp;t=m&amp;ll=43.330173,-1.947155&amp;spn=0.043704,0.073128&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
                    </div>
				</div>
            </div>          	
            <div class="clearboth">&nbsp;</div>
        </div>
<?php 
    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();
?>