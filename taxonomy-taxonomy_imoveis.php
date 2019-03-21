<?php get_header(); ?> 

	<main class="page-main main" role="main">
		
		<?php include('_____pesquisa.php'); ?> 
		
		<div class="center">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="content-page">
					ESTA É A QUE LISTA TODOS OS POSTS REFERENTE A CATEGORIA ESCOLHIDA
				</div>
			<?php endwhile; endif; ?>

		</div>
	</main>

<?php get_footer(); ?>