<?php get_header(); ?> 

	<main class="page-main main" role="main">
		
		<?php include('_____pesquisa.php'); ?> 

		<div class="center">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="content-page">
					<div class="titulos"><h1><?php the_title(); ?></h1></div>
					<?php the_content(); ?>
					<?php echo do_shortcode( '[contact-form-7 id="112" title="Contato"]'); ?>
				</div>

				<div class="content-page-last" id="localizacao">
					<div class="titulos"><h2>Venha nos conhecer</h2></div>
					

					<div class="bloco-flex">
						<div id="contato" style="width: 65%; height: 240px;"></div>
						
						<div class="bloco-content-contato">
							<div class="titulos-contato"> <h3>Endereço</h3></div>

							<div class="textos-default">
								<p>
									<?php the_field('rua_imobiliaria'); ?>, <?php the_field('numero_imobiliaria'); ?>
									<?php the_field('bairro_imobiliaria'); ?>
									<?php the_field('cidade_imobiliaria'); ?> <br>
									Cep: <?php the_field('cep_imobiliaria_campos'); ?>
								</p>
								<div class="bloco-flex">
									<div class="contato-aluguel">
										<div class="titulos-contato"> <h3>Quer alugar?</h3></div>
										<?php

											// check if the repeater field has rows of data
											if( have_rows('telefones_aluguel_imobiliaria') ):
												echo "<p>";
											 	// loop through the rows of data
											    while ( have_rows('telefones_aluguel_imobiliaria') ) : the_row();
											        echo '<a href="tel:' . get_sub_field('telefone_aluguel') . '">' . the_sub_field('telefone_aluguel') . '</a>';
											        echo '<br/>';
											    endwhile;
										     	echo "</p>";
											endif;
										?>
									</div>

									<div class="contato-venda">
										<div class="titulos-contato"> <h3>Quer comprar?</h3></div>
										<?php

											// check if the repeater field has rows of data
											if( have_rows('telefones_venda_imobiliaria') ):
												echo "<p>";
											 	// loop through the rows of data
											    while ( have_rows('telefones_venda_imobiliaria') ) : the_row();
											        echo '<a href="tel:' . get_sub_field('telefone_venda') . '">' . the_sub_field('telefone_venda') . '</a>';
											        echo "<br>";
											    endwhile;
										     	echo "</p>";
											endif;
										?>
									</div>
								</div>

								<div class="titulos-contato"> <h3>Atendimento</h3></div>
								<p><?php the_field('atendimento_imobiliária'); ?></p>

							</div>
						</div>
					</div>
				</div>
				
			<?php endwhile; endif; ?>

		</div>
	</main>

		<?php

			$title = get_the_title($id_page_contato);
			$address = get_field('cep_imobiliaria_campos', $id_page_contato);
			$request = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=".$address."");
			$json = json_decode($request, true);
			$lat = $json['results'][0]['geometry']['location']['lat'];
			$lng = $json['results'][0]['geometry']['location']['lng'];
			$marker = "'" . get_bloginfo('template_directory') . "/dist/images/marker-imovel3.png'";

			$valueContato = $valueContato . "[" . "'" . '<div class="logo-campos-mapa"><img src="' . get_bloginfo('template_directory') . '/dist/images/logo-imobiliaria-campos.png"></div>' . "' ," . $lat . ', ' .  $lng . '],';
				
			// var_dump($valueContato);
			
		?>
	<?php get_footer(); ?>
	
	<script type="text/javascript">
		/* API Google Maps */
		var locations = [
		   <?php echo $valueContato ?>
		];

		var contato = new google.maps.Map(document.getElementById('contato'), {
		  zoom: 15,
		  center: new google.maps.LatLng(-22.7636315, -47.3412819),
		  mapTypeId: google.maps.MapTypeId.ROADMAP,

		});

		var infowindow = new google.maps.InfoWindow();

		var marker, i;
		var markerCustom = <?php echo $marker ?>;

		for (i = 0; i < locations.length; i++) {  
		  marker = new google.maps.Marker({
		    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		    map: contato,
			icon: markerCustom,

		  });

		  google.maps.event.addListener(marker, 'click', (function(marker, i) {
		    return function() {
		      infowindow.setContent(locations[i][0]);
		      
		      infowindow.open(contato, marker);

		    }
		  })(marker, i));
		}

	</script>