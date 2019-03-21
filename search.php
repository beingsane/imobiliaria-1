<?php get_header(); ?> 



	<main class="page-main main" role="main">
		
		<?php include('_____pesquisa.php'); ?> 
		
		<div class="center page-archive">
			<div class="content-page">

				<div class="titulos"><h1>Resultado da Busca</h1></div>
				
				<div class="bloco-flex">
					<?php
						$args = array( 'post_type' => 'post_type_imoveis', 'posts_per_page' => 10 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						    include('__vitrine-imoveis.php');
						endwhile; 
					?>
				</div>
			</div>
		</div>

	</main>
<?php get_footer(); ?>