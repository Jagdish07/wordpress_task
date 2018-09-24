<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            	<header class="entry-header page-header">
            		<h1 class="entry-title"><?php the_title(); ?></h1>
            	</header><!-- .entry-header -->
            
            	<div class="entry-content">
            		<?php the_content(); ?>
            		<?php
            			wp_link_pages( array(
            				'before' => '<div class="page-links">' . __( 'Pages:', 'unite' ),
            				'after'  => '</div>',
            			) );
            		?>
            	</div><!-- .entry-content -->
            	<div class="meta-data">
            	    <div class="film-date">
            	        <strong>Price:</strong> <?php the_field('ticket_price'); ?>
            	    </div>
            	    <div class="film-date">
            	         <strong>Release Date:</strong> <?php the_field('release_date'); ?>
            	    </div>
            	    <div class="film-date">
            	        <strong>Genres: </strong>
            	        <?php
            	        $genres = get_the_terms(get_the_ID(), 'genre');
            	        if($genres){
            	            $gen_ar = array();
            	            foreach ($genres as $genre){
            	             $gen_ar[] = $genre->name;   
            	            }
            	            echo implode(',', $gen_ar);
            	        }
            	        ?>
            	    </div>
            	    <div class="film-date">
            	        <strong>Actors: </strong>
            	        <?php
            	        $genres = get_the_terms(get_the_ID(), 'actor');
            	        if($genres){
            	            $gen_ar = array();
            	            foreach ($genres as $genre){
            	             $gen_ar[] = $genre->name;   
            	            }
            	            echo implode(',', $gen_ar);
            	        }
            	        ?>
            	    </div>
            	    <div class="film-date">
            	        <strong>Year: </strong>
            	        <?php
            	        $genres = get_the_terms(get_the_ID(), 'year');
            	        if($genres){
            	            $gen_ar = array();
            	            foreach ($genres as $genre){
            	             $gen_ar[] = $genre->name;   
            	            }
            	            echo implode(',', $gen_ar);
            	        }
            	        ?>
            	    </div>
            	    <div class="film-date">
            	        <strong>Country: </strong>
            	        <?php
            	        $genres = get_the_terms(get_the_ID(), 'country');
            	        if($genres){
            	            $gen_ar = array();
            	            foreach ($genres as $genre){
            	             $gen_ar[] = $genre->name;   
            	            }
            	            echo implode(',', $gen_ar);
            	        }
            	        ?>
            	    </div>
            	    
            	</div>
            	<?php edit_post_link( __( 'Edit', 'unite' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
            </article>
				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>