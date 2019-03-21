<?php get_header(); ?> 

	<main class="page-anuncie main" role="main">
		<?php include('_____pesquisa.php'); ?> 
		
		<div class="center">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="content-page">
					<div class="titulos"><h1><?php the_title(); ?></h1></div>
					<?php the_content(); ?>
					<?php echo do_shortcode( '[contact-form-7 id="71" title="Anuncie" class="form-contact"]'); ?>
				</div>
				
			<?php endwhile; endif; ?>

		</div>
	</main>

<?php get_footer(); ?>