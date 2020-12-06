<?php
/**
 * Template Name: Cutom Page Template 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _bs
 */

get_header();
?>

	<main id="primary" class="site-main">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4">
                        <button class="btn btn-primary">Test Button</button>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-warning">Test Button 2</button>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-danger">Test Button 3</button>
                    </div>
                </div>
            </div>

	</main><!-- #main --> 

<?php
get_footer();
