<?php get_header(); ?> 

	<main class="page-main main" role="main">
	    <?php include('_____pesquisa.php'); ?> 

      	<div class="content">
	      	<div class="center">
	        
		        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		          <div class="content-page">
		            <div class="titulos"><h1><?php the_title(); ?></h1></div>

		            <?php if ( has_post_thumbnail() ) : ?>
			            <div class="image-destaque">
			              <?php the_post_thumbnail('image-banner');  ?>
			            </div>
			        <?php endif; ?>
			        
		            <?php the_content(); ?>
		            
		          </div>
		          
		        <?php endwhile; endif; ?>

	      	</div>
      	</div>		
	</main>

<?php get_footer(); ?>