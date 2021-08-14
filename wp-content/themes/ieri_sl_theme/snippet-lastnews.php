<?php
/**
 * Ultimas Noticias : Muestra las utlimas N entradas
 * Esto es un SNIPPET para incluir dentro de una plantilla de página de WP
 * 

*/
?> 
<div id="lastnews_wrap" class="cols_wrap">
	<?php if( qtrans_getLanguage() == 'eu' ){ ?>
            <h3>Azken unekoak</h3>
        <?php }else { ?>
            <h3>&Uacute;ltimas Noticias</h3>
        <?php } ?>
	<?php
	$args = array( 'numberposts' => 4, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
	$postslist = get_posts( $args );
		foreach ($postslist as $post) : setup_postdata($post); ?>
			<div class="lastnews col4 fl">
            	<!-- <p class="lastnews_date"><?php the_time(get_option('date_format')); ?></p>-->
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <span class="lastnews_title"><?php the_title(); ?></span>
                    <?php if (has_post_thumbnail( $post->ID )) : ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                    <span class="lastnews_excerpt"><?php echo get_excerpt(90); ?></span>
                </a>        
		  </div>
	<?php endforeach; ?>
    <span class="clearboth">&nbsp;</span>
</div>