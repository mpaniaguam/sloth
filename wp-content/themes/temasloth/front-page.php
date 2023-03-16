<

<?php get_header(); ?>

    <div id="primary" <?php generate_do_element_classes( 'content' ); ?> >
        <main id="main" <?php generate_do_element_classes ( 'main' ); ?> >

        <article id= "post-<?php the_ID(); ?> " <?php post_class(); ?>>
            <?php
                # Argumentos para la consulta 
                $args = array(
                    'post_type' => 'festivales',
                    'posts_per_page' => -1,
                    'ordenby' => 'DATE',
                    'order' => 'DESC'
                );
                
                # Crear consulta 
                $festivales = new WP_Query($args);
                
                while($festivales->have_posts()) : $festivales->the_post();
                    echo "<div id='contenedor-festivales'>";
                    the_title('<h2>', '</h2>');   
                    #the_excerpt();
                     
                    #get_field('logo'); 
                    $descripcion = get_field('descripcion');  

                    $imagen = get_field('imagen_fondo'); 
                    echo wp_get_attachment_image($imagen, array('500', '0'));
                    
                    echo "<div> $descripcion </div> ";
                    $fecha = get_field('fecha_inicio');
                    $fechaf = get_field('fecha_finalizacion');
                    echo "<p>Fecha: " . $fecha . " - " . $fechaf ."</p> ";
                    
                     
                    echo "<a class='boton-ver' href='". get_the_permalink() . "'>VER FESTIVAL</a>";
                  
                    
                   
                    echo "</div>";
                endwhile; wp_reset_postdata();
            ?>
             


        </main>

    </div>
 
<?php get_footer();?>
 