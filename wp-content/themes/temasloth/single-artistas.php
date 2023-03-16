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

                    $email = get_field('email'); 
                    echo "<p>Email: " . $email  ."</p> "; 

                    $telefono = get_field('telefono');
                    echo "<p>Telefono: " . $telefono . "</p>";

                    $informacion = get_field('informacion_adicional');
                    echo "<p>Informacion adicional: "."<br>" . $informacion . "</p>";




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