<?php get_header(); ?> 



	<main class="page-main main" role="main">
		
		<?php include('_____pesquisa.php'); ?> 
		
		<div class="center page-archive">
			<div class="content-page">

				<div class="titulos"><h1>Resultado da Busca</h1></div>
				
				<div class="bloco-flex">
					<?php 
						if ( have_posts() ) : 
							while ( have_posts() ) : the_post();
					?>
								
								<?php include('__vitrine-imoveis.php'); ?>

								
					<?php
						endwhile;  
						else:
					?>
							<p>Nenhum imóvel foi encontrado. Tente filtrar novamente ou <a href="<?php echo get_post_type_archive_link( 'post_type_imoveis' ); ?>"> clique aqui </a> para ver todos os imóveis disponíveis.</p>

					<?php
							
						endif; 
					?>
				</div>
			</div>
		</div>

	</main>
<?php get_footer(); ?>