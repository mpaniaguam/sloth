<?php get_header(); ?>

    <div id="primary" <?php generate_do_element_classes( 'content' ); ?> >
        <main id="main" <?php generate_do_element_classes ( 'main' ); ?> >
 

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_do_microdata( 'article' ); ?>>
	<div class="inside-article">
		<?php
		 
		do_action( 'generate_before_content' );

		if ( generate_show_entry_header() ) :
			?>
			<header <?php generate_do_attr( 'entry-header' ); ?>>
				<?php
				 
				do_action( 'generate_before_entry_title' );

				if ( generate_show_title() ) {
					$params = generate_get_the_title_parameters();

					the_title( $params['before'], $params['after'] ); 
                    $imagen = get_field('imagen_fondo');
                    echo wp_get_attachment_image($imagen, ' medium');
                    $descripcion = get_field('descripcion');  
                         
                    echo "<p> $descripcion  ";
                    $ubicacion = get_field('ubicacion');
					echo "<p>Ubicacion: " .  $ubicacion ."</p> ";

                    $fecha = get_field('fecha_inicio');
                    $fechaf = get_field('fecha_finalizacion');
                    echo "<p>Fecha: " . $fecha . " - " . $fechaf ."</p> "; 

                    // Muestra la lista de de eventos 
                    $eventos = get_field('enlace_evento'); 
                    echo "<p>Eventos: " ; 
                    if( $eventos ): ?>
                        <ul>
                        <?php foreach( $eventos as $post ): 
                    
                            // Setup this post for WP functions (variable must be named $post).
                            setup_postdata($post); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
                            </li>
                        <?php endforeach; ?>
                        </ul>
                        <?php 
                        // Reset the global post object so that the rest of the page works correctly.
                        wp_reset_postdata(); ?>
                    <?php endif;  




				}

				 
				do_action( 'generate_after_entry_title' );
				?>
			</header>
			<?php
		endif;
 
		do_action( 'generate_after_entry_header' );

		$itemprop = '';

		if ( 'microdata' === generate_get_schema_type() ) {
			$itemprop = ' itemprop="text"';
		}
		?>

		<div class="entry-content"<?php echo $itemprop; // phpcs:ignore -- No escaping needed. ?>>
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'generatepress' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>

		<?php
		/**
		 * generate_after_entry_content hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_footer_meta - 10
		 */
		do_action( 'generate_after_entry_content' );

		/**
		 * generate_after_content hook.
		 *
		 * @since 0.1
		 */
		do_action( 'generate_after_content' );
		?>
	</div>
</article>


</main>

</div>

<?php get_footer();?>
