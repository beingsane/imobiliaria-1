<?php get_header(); ?> 

	<main class="page-main main" role="main">
		
		<?php include('_____pesquisa.php'); ?> 
		
		<div class="center">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="content-page">
					<div class="bloco-flex">

						<div class="bloco-flex-single-content">
							<div class="titulos">
								<h1><?php the_title(); ?></h1>
							</div>


							<div class="bloco-flex">
								<div class="galeria-imoveis">
								    <div class="slider slider-for">
								    <?php

										if( have_rows('galeria_imoveis') ):
										    while ( have_rows('galeria_imoveis') ) : the_row();
												$image = get_sub_field('fotos_imoveis');
												$size = 'image-vitrine';
												$size2 = 'image-fancy';
												echo '<div>' . wp_get_attachment_image( $image, $size ) . '</div>';
											endwhile;
										endif
									?>
								    </div>

								    <div class="slider slider-nav">
								    <?php

										if( have_rows('galeria_imoveis') ):
										    while ( have_rows('galeria_imoveis') ) : the_row();
												$image = get_sub_field('fotos_imoveis');
												$size = 'image-vitrine';
												$size2 = 'image-fancy';
												echo '<div><p>' . wp_get_attachment_image( $image, $size ) . '</p></div>';
											endwhile;
										endif
									?>
								    </div>
								</div>

								<div class="informacoes-imovel">
									<div class="informacoes-imovel-title"><?php the_field('aluguel_venda_imoveis') ?></div>
									<div class="codigo">
										<?php   // Get terms for post
											$terms = get_the_terms( $post->ID , 'tag_codigo_imoveis' );
											// Loop over each item since it's an array
											if ( $terms != null ){
												foreach( $terms as $term ) {
													$reference = $term->slug;
													echo 'Cód: ' . $term->slug;;
												}
											} 
										?>
									</div>

									<div class="preco-imovel">
										R$ <?php the_field('preco_imovel') ?>
									</div>

									<div class="info-vitrine"> <?php the_content(); ?> </div>
									<!-- Modal HTML embedded directly into document -->
									<div id="contatos" style="display:none;">
										<div class="informacoes-imovel-title">
											Vamos conversar sobre este imóvel?
										</div>
										
										<div class="bloco-flex-footer tel-modal">
											<?php $id_page_contato = 25; ?>
											<div class="icon-footer">
												<!-- Telefone -->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 241.73 241.73" style="enable-background:new 0 0 241.73 241.73; margin-top: 3px;" xml:space="preserve" width="15px" height="15px">
												<g>
													<path d="M234.771,181.213l-34.938-34.953c-4.692-4.668-10.975-7.24-17.689-7.24   c-6.987,0-13.584,2.751-18.572,7.742l-13.6,13.597c-10.568-5.874-24.614-13.953-39.197-28.536   c-14.566-14.571-22.646-28.576-28.55-39.201l13.613-13.603c10.121-10.142,10.328-26.413,0.463-36.269L61.37,7.818   c-4.679-4.692-10.962-7.276-17.693-7.276c-6.831,0-13.293,2.63-18.252,7.417c-3,2.416-18.055,15.706-23.666,43.114   c-7.856,38.363,10.194,75.274,62.302,127.403c58.209,58.191,107.902,62.714,121.746,62.714c2.882,0,4.621-0.178,5.085-0.232   c27.147-3.182,36.867-15.238,43.964-24.041C244.052,205.508,244.02,190.496,234.771,181.213z M223.178,207.502   c-6.671,8.274-12.971,16.088-34.031,18.557c-0.011,0.001-1.163,0.13-3.34,0.13c-12.386,0-57.008-4.206-111.139-58.32   C26.615,119.796,9.749,86.829,16.454,54.081c4.894-23.906,17.887-34.067,18.392-34.453l0.448-0.331l0.393-0.394   c2.169-2.167,5.006-3.361,7.989-3.361c2.716,0,5.228,1.018,7.08,2.876l34.939,34.94c4.02,4.016,3.806,10.774-0.471,15.06   L69.829,83.8l-0.253,0.265c-4.012,4.419-3.54,10.391-1.33,14.28c6.377,11.508,15.112,27.269,31.92,44.082   c16.752,16.752,32.49,25.48,43.966,31.845c1.149,0.645,3.521,1.727,6.49,1.727c3.506,0,6.725-1.484,9.108-4.189l14.448-14.444   c2.157-2.158,4.985-3.347,7.964-3.347c2.722,0,5.247,1.021,7.095,2.859l34.915,34.93   C228.587,196.259,226.756,203.064,223.178,207.502z" fill="#666666"/>
													<path d="M146.447,37.293c12.887,1.483,28.061,9.289,38.657,19.886c10.695,10.695,18.52,26.023,19.933,39.05   c0.417,3.843,3.667,6.691,7.447,6.691c0.27,0,0.544-0.015,0.818-0.044c4.118-0.447,7.094-4.147,6.647-8.265   c-1.787-16.467-11.075-34.874-24.238-48.038c-13.04-13.041-31.259-22.306-47.549-24.181c-4.113-0.477-7.834,2.479-8.308,6.593   C139.38,33.099,142.331,36.819,146.447,37.293z" fill="#666666"/>
													<path d="M139.44,68.711c6.97,0.803,16.616,5.973,22.935,12.292c6.373,6.374,11.553,16.112,12.316,23.157   c0.417,3.844,3.667,6.692,7.447,6.692c0.27,0,0.543-0.015,0.817-0.044c4.118-0.447,7.095-4.147,6.648-8.265   c-1.304-12.028-9.289-24.813-16.623-32.147c-7.268-7.269-19.928-15.216-31.825-16.587c-4.119-0.479-7.835,2.478-8.309,6.592   C132.373,64.516,135.325,68.237,139.44,68.711z" fill="#666666"/>
												</g>
												</svg>
											</div>

											<div>
												<p>
												<?php
													if( get_field('aluguel_venda_imoveis') == 'Aluguel' ): 
														if( have_rows('telefones_aluguel_imobiliaria', $id_page_contato ) ){
														    while ( have_rows('telefones_aluguel_imobiliaria', $id_page_contato ) ) : the_row();

																echo '<a href="tel:' . get_sub_field('telefone_aluguel', $id_page_contato ) . '">' . the_sub_field('telefone_aluguel', $id_page_contato ) . '</a>';
														        echo '<br>';
														    endwhile;
														};
													else:
														if( have_rows('telefones_venda_imobiliaria', $id_page_contato ) ){
														    while ( have_rows('telefones_venda_imobiliaria', $id_page_contato ) ) : the_row();

																echo '<a href="tel:' . get_sub_field('telefone_venda', $id_page_contato ) . '">' . the_sub_field('telefone_venda', $id_page_contato ) . '</a>';
														        echo '<br>';
														    endwhile;
														};
													endif;
												?>
											</p>
											</div>
										</div> 

										<div class="info-vitrine">
											<p>
												Para agilizar ainda mais o atendimento, lique para nós e informe o código 
												<strong>
												<?php   // Get terms for post
													$terms = get_the_terms( $post->ID , 'tag_codigo_imoveis' );
													// Loop over each item since it's an array
													if ( $terms != null ){
														foreach( $terms as $term ) {
															echo $term->slug;
														}
													} 
												?></strong>, assim localizaremos com mais facilidade o imóvel que você gostou em nosso cadastro.
											</p>
										</div>
										<p>Ou se preferir,<a href="#" rel="modal:close" class="clique-aqui"> clique aqui</a> para mandar um e-mail para nós.</p>
									</div>

									<!-- Link to open the modal -->
									<p class="informacoes-imovel-botao"><a href="#contatos" rel="modal:open">Nossos Contatos</a></p>
								</div>

								<div class="bloco-flex">
									<!-- Localização -->
									<div class="info-sobre-imovel">
										<div class="informacoes-imovel-title">Localização</div>

										<div class="info-mapa">
											<?php
												if( get_field('aluguel_venda_imoveis') == 'Aluguel' ): 
											?>
													<div id="imovel" style="width: 100%; height: 150px;"></div>

													<div class="endereco-mapa">
														<?php the_field('endereco_imovel'); ?>, <?php the_field('numero_imoveis'); ?> - <?php the_field('bairro_imoveis'); ?> - <?php the_field('cidade_imoveis'); ?>/<div class="estado"><?php the_field('estado_imovel'); ?></div>
														<br>
														CEP: <?php the_field('cep_imoveis'); ?>
													</div>
											<?php
												else:
											?>
													<div class="endereco-mapa endereco-mapa-venda">	
														<?php the_field('bairro_imoveis'); ?> - <?php the_field('cidade_imoveis'); ?>/<div class="estado"><?php the_field('estado_imovel'); ?></div>
													</div>
											<?php
												endif;
											?>	

										</div>
									</div>

									<!-- Sobre o Imóvel -->
									<div class="info-sobre-imovel info-sobre-imovel-text">
										<div class="informacoes-imovel-title">Sobre o Imóvel</div>
										<div class="bloco-flex">
											<div class="info-imovel">
												<p>Tipo: <?php the_field('opcoes_imoveis'); ?></p>
												<p>Quartos: <?php the_field('quartos_imoveis'); ?></p>
												<p>Suítes: <?php the_field('suites_imoveis'); ?></p>
												<p>Banheiros: <?php the_field('banheiros_imoveis'); ?></p>
											</div>

											<div class="info-imovel">
												
												<p>Garagem: <?php the_field('garagem_imoveis'); ?></p>
												<p>Área: <?php the_field('area_imoveis'); ?> mts²</p>
												<?php 
													if( get_field('condominio_imoveis') ): 
												?>
														<p>Condomínio: R$ <?php the_field('condominio_imovel'); ?></p>

												<?php 
													endif
												?>
											</div>
										</div>
									</div>
								</div>
							</div>



						</div>

						<div class="bloco-flex-single-vendedor">
							<div class="titulos">
								<h1>Fale com o vendedor</h1>
							</div>
							<?php echo do_shortcode( '[contact-form-7 id="30" title="Fale com o vendedor"]'); ?>
							


							<script type="text/javascript">
							$(document).ready(function(){
								$("#subject_field").attr({
								    "value" : 'Cód Imóvel: <?php echo $reference; ?>'
								});
								$("#subject_field").prop('readyonly', true);
							});
							</script>

						</div>

					</div>
				</div>
			<?php endwhile; endif; ?>

		</div>
	</main>

	<?php
			// Mapa página do
		if( get_field('aluguel_venda_imoveis') == 'Aluguel' ): 
			$title = get_the_title();
			$address = get_field('cep_imoveis');
			$request = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=".$address."");
			$json = json_decode($request, true);
			$lat = $json['results'][0]['geometry']['location']['lat'];
			$lng = $json['results'][0]['geometry']['location']['lng'];
			$marker = "'" . get_bloginfo('template_directory') . "/dist/images/marker-imovel3.png'";

			$valueImovel = $valueImovel . "[" . "'" . $title . "' ," . $lat . ', ' .  $lng . '],';
			
			//var_dump($value);
		endif;
	?>


<?php get_footer(); ?>

<script type="text/javascript">
	
	var locations = [
	   <?php echo $valueImovel ?>
	];

	// var iconBase = <?php bloginfo('template_directory'); ?>'/dist/images/';
	var imovel = new google.maps.Map(document.getElementById('imovel'), {
		zoom: 11,
		center: new google.maps.LatLng(-22.7641162,-47.3426116),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		//icon: <?php bloginfo('template_directory'); ?>/dist/images/marker-imovel.png
	});

	var infowindow = new google.maps.InfoWindow();

	var marker, i;
	var markerCustom = <?php echo $marker ?>;

	for (i = 0; i < locations.length; i++) {  
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: imovel,
			icon: markerCustom,
		});

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(locations[i][0]);
				infowindow.open(imovel, marker);
			}
		})(marker, i));
	}

</script>