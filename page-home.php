<?php

/*
Template name: Página Inicial
*/

 get_header(); ?> 

<main class="page-main main" role="main">

	<div id="map" style="width: 100%; height: 500px;"></div>

	<?php include('_____pesquisa.php'); ?> 

	<div class="center">

		<div class="bloco-content-home">
			<div class="bloco-flex">
					<?php
						$args = array( 
							// Listando os 8 imóveis cadastrados recentemente
							'post_type' => 'post_type_imoveis',
							'posts_per_page' => 8, 
							'orderby' => 'date', 
							'order' => 'DESC', 
							'ignore_sticky_posts' => true,
						);
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post(); 
					?>

							<?php include('__vitrine-imoveis.php'); ?>

					<?php
						endwhile;
					?>

			</div>
		</div>
	</div>
</main>

<?php
	// Mapa Página Inicial

	$args2 = array( 
		'post_type' => 'post_type_imoveis',
		'numberposts' => -1,
		'public'   => true,
		'_builtin' => false,
		'posts_per_page' => -1
	);
	$loop2 = new WP_Query( $args2 );

	$count = 1;

	while ( $loop2->have_posts() ) : $loop2->the_post(); 
		if( get_field('aluguel_venda_imoveis') == 'Aluguel' ): 

			// Info sobre imóvel
			$quarto = floatval(get_field('quartos_imoveis'));
			$suite = floatval(get_field('suites_imoveis'));
			$total = ($quarto + $suite);
			$banheiro = get_field('banheiros_imoveis');
			$garagem = get_field('garagem_imoveis');
			$image = get_the_post_thumbnail($post_id, 'thumbnail' );
			$rua = get_field('endereco_imovel');
			$numero = get_field('numero_imoveis');
			$bairro = get_field('bairro_imoveis');
			$cidade = get_field('cidade_imoveis');
			$estado = get_field('estado_imovel');
			$cep = get_field('cep_imoveis');
			$link = get_permalink();


			$title = get_the_title();
			$address = get_field('cep_imoveis');
			$images=  get_the_post_thumbnail('image-vitrine');
			$request = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=".$address."");
			$json = json_decode($request, true);
			$lat = $json['results'][0]['geometry']['location']['lat'];
			$lng = $json['results'][0]['geometry']['location']['lng'];
			$marker = "'" . get_bloginfo('template_directory') . "/dist/images/marker-imovel3.png'";

			$value = $value . "[" . "'" . '<a href="' . $link . '" class="map-home">' . '<div class="bloco-flex"><div class="image-imovel-mapa">' . $image . '<div class="button-map">Ver</div></div>' . '<div class="conteudo-info-mapa"><div class="titulo-vitrine">' . $title . '</div>'  . '<div class="bloco-icons-vitrine"><div class="bloco-content-vitrine-flex"><img src="' . get_bloginfo('template_directory') . '/dist/images/cama.jpg"><div class="info-vitrine">' . $total . '</div></div><div class="bloco-content-vitrine-flex"><img src="' . get_bloginfo('template_directory') . '/dist/images/banheiro.jpg"><div class="info-vitrine">' .  $banheiro . '</div></div><div class="bloco-content-vitrine-flex"><img src="' . get_bloginfo('template_directory') . '/dist/images/garagem.jpg"><div class="info-vitrine">' . $garagem . '</div></div><div class="endereco-mapa" style="font-size: 12px;">' . $rua . ', ' . $numero . ' ' . $bairro . '<br>' . $cidade . '/ <div class="estado">' . $estado . '</div> - Cep: ' . $cep . '</div></div></div></div></a>' . "' ," . $lat . ', ' .  $lng . ', ' . $count . '],';
			
			//var_dump($value);
			$count ++;
		endif;
	endwhile;
?>

<?php get_footer(); ?>

<script type="text/javascript">
	
	var locations = [
	   <?php echo $value ?>
	];

	// var iconBase = <?php bloginfo('template_directory'); ?>'/dist/images/';
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 14,
		center: new google.maps.LatLng(-22.7641162,-47.3426116),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		draggable: false,				
		//icon: <?php bloginfo('template_directory'); ?>/dist/images/marker-imovel.png
	});

	var infowindow = new google.maps.InfoWindow();

	var marker, i;
	var markerCustom = <?php echo $marker ?>;

	for (i = 0; i < locations.length; i++) {  
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map,
			icon: markerCustom,
		});

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
</script>