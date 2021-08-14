<?php
//[url_lang] Devuelve la URL global + carpeta idioma
function url_lang_func($atts, $content=null){
	$blogurl = get_bloginfo('url');
	$lang = qtrans_getLanguage();
	$urlbylang = ( $blogurl . ('/') . $lang );
	return $urlbylang;
}
add_shortcode( 'url_lang', 'url_lang_func' );
?>
<?php
//[socialmedia] Devuelve icono Socialmedia + URL
function socialmedia_iconlist($type){
	extract(shortcode_atts(array(
        'type' => 'type'
    ), $type));
     
    // Tipo de red social
    switch ($type) {
        case 'rss':
			//URL de los Feeds
			$blogurl = get_bloginfo('url');
			$lang = qtrans_getLanguage();
			$urlbylang = $blogurl . ('/') . $lang;
			$url_rss_lang = ('<a href="' . $urlbylang . '/feed/" class="socialmedia_rss">RSS</a>');
            return $url_rss_lang;
            break;
		case 'linkedin':
            //URL de LinkedIn
			$lin_url_cliente = ('');
			$lin_url = ('<a href="http://www.linkedin.com/in/' . $lin_url_cliente . '" class="socialmedia_lin">Linked In</a>');
			//montamos la funcion
			return $lin_url;
            break;
		case 'facebook':
            //URL de Facebook
			$fb_url_cliente = ('pages/IERI/196201753799230');
			$fb_url = ('<a href="http://www.facebook.com/' . $fb_url_cliente . '" class="socialmedia_fb">Facebook</a>');
			//montamos la funcion
			return $fb_url;
            break;
		case 'twitter':
            //URL de Twitter
			$tw_url_cliente = ('imperieri');
			$tw_url = ('<a href="http://www.twitter.com/' . $tw_url_cliente . '" class="socialmedia_tw">Twitter</a>');
			//montamos la funcion
			return $tw_url;
            break;
		case 'gplus':
            //URL de GPlus
			$gplus_url_cliente = ('103859793188181345838');
			$gplus_url = ('<a href="https://plus.google.com/' . $gplus_url_cliente . '" class="socialmedia_gplus">Google Plus</a>');
			//montamos la funcion
			return $gplus_url;
            break;
    }
}
add_shortcode( 'socialmedia', 'socialmedia_iconlist' );
?>
<?php
//Activamos los shortcodes

//[url_lang]
add_action( 'init', 'url_lang_func');

//[socialmedia]
add_action( 'init', 'socialmedia_iconlist');

//Activamos los shortcodes para Widgets de HTML
add_filter('widget_text', 'do_shortcode'); 
?>
